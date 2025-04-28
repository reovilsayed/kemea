<?php

namespace App\Http\Controllers;

use App\Models\Boost;
use App\Models\Plan;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{
    protected $clientId;
    protected $clientSecret;
    protected $apiUrl;

    public function __construct()
    {
        $this->clientId = env('PAYPAL_CLIENT_ID');
        $this->clientSecret = env('PAYPAL_CLIENT_SECRET');
        $this->apiUrl = env('PAYPAL_MODE') == 'sandbox' ? 'https://api-m.sandbox.paypal.com' : 'https://api-m.paypal.com';
    }

    public function subscription(Request $request, Plan $plan)
    {



        $endpoint = ['local' => 'https://api.sandbox.paypal.com/v2/checkout/orders/', 'production' => 'https://api-m.paypal.com/v2/checkout/orders/'];
        $token = $this->getAccessToken();
        $paypal_status = Http::withToken($token)->get($endpoint[env('APP_ENV')] . $request->payment_id);
        $paypal_body = json_decode($paypal_status->body());


        $duration = $plan->type === 'yearly' ? 12 : 1;
        if ($paypal_body->status == 'COMPLETED') {
            $subscription = Subscription::create([
                'user_id' => auth()->id(),
                'plan_id' => $plan->id,
                'payment_id' => $paypal_body->id,
                'amount' => $plan->price,
                'status' => 'active',
                'start_date' => now(),
                'end_date' =>  now()->addMonths($duration),
                'status' =>  1,
            ]);
            auth()->user()->update([
                'is_paid' => 1,
                'expired_at' => now()->addMonths($duration),
                'plan_id' => $plan->id,
            ]);
            $user_data = [
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->officeProfile ? auth()->user()->officeProfile->phone : null,
                'address' => auth()->user()->officeProfile ? auth()->user()->officeProfile->address : null,
            ];

            $subscription->charges()->create([
                'user_id' => auth()->id(),
                'payment_id' => $paypal_body->id,
                'subtotal' => $plan->price,
                'total' => $plan->price,
                'details' => json_encode($user_data),
            ]);
            return redirect()->route('agent.dashboard.plan.management')->with('success', 'Subscription done');
        } else {
            return back()->withErrors('We seem to be experiencing a technical problem. Please try again later.');
        }
    }
    public function paymentStore(Request $request, Boost $boost)
    {
        $endpoint = ['local' => 'https://api.sandbox.paypal.com/v2/checkout/orders/', 'production' => 'https://api-m.paypal.com/v2/checkout/orders/'];
        $token = $this->getAccessToken();
        $paypal_status = Http::withToken($token)->get($endpoint[env('APP_ENV')] . $request->payment_id);
        $paypal_body = json_decode($paypal_status->body());

        if ($paypal_body->status == 'COMPLETED') {
            $boost->property->update([
                'is_boosted' => 1,
            ]);

            $user_data = [
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->officeProfile ? auth()->user()->officeProfile->phone : null,
                'address' => auth()->user()->officeProfile ? auth()->user()->officeProfile->address : null,
            ];

            $boost->charges()->create([
                'user_id' => auth()->id(),
                'payment_id' => $paypal_body->id,
                'subtotal' => $boost->price,
                'total' => $boost->price,
                'details' => json_encode($user_data),
            ]);
            return redirect()->route('agent.dashboard.visibilities');
        }
    }



    private function getAccessToken()
    {
        $response = Http::withBasicAuth($this->clientId, $this->clientSecret)
            ->asForm()
            ->post($this->apiUrl . '/v1/oauth2/token', [
                'grant_type' => 'client_credentials'
            ]);

        return $response->json()['access_token'];
    }
}
