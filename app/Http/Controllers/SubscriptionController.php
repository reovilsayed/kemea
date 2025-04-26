<?php

namespace App\Http\Controllers;

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

    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan_id);

        Subscription::create([
            'user_id' => auth()->id(),
            'plan_id' => $plan,
            'paypal_order_id' => $request->order_id,
            'amount' => $request->amount,
            'status' => 'active',
            'starts_at' => now(),
            'ends_at' => Carbon::now()->addMonth(), 
        ]);
        dd($request->all());
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

    public function createOrder(Request $request)
    {
      
        $accessToken = $this->getAccessToken();


        $response = Http::withToken($accessToken)
            ->post($this->apiUrl . '/v2/checkout/orders', [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    [
                        'amount' => [
                            'currency_code' => 'USD', // or your currency
                            'value' => 120
                        ]
                    ]
                ]
            ]);


        return response()->json([
            'id' => $response->json()['id']
        ]);
    }

    public function captureOrder($orderId)
    {
     

        $accessToken = $this->getAccessToken();

        $response = Http::withToken($accessToken)
            ->post($this->apiUrl . "/v2/checkout/orders/{$orderId}/capture");
            dd($response);

        return response()->json($response->json());
    }
}
