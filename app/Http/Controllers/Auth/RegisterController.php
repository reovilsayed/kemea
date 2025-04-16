<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    public function redirectTo()
    {
        switch (auth()->user()->role_id) {
            case 1:
                return RouteServiceProvider::ADMIN;
                break;
            case 2:
                return RouteServiceProvider::USER;
                break;
            case 3:
                return RouteServiceProvider::AGENT;
                break;
            default:
                return RouteServiceProvider::HOME;
                break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function register(Request $request)
    {
       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required'],
        ]);

        $username = $request->email;
       
        $email = null;
        $phone = $request->phone;
        $message = null;
        $email_verified = null;
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $email = $username;
            $message = "Email";
        } elseif (preg_match('/^\+?\d+$/', $username)) {
            $phone = $username;
            $email_verified = now();
            $message = "Phone";
        } else {
            return back()->with('error', "Your input is neither an email address or a phone number");
        }

        if (User::where('username', $username)->exists()) {
            return back()->with('error', "Your $message is already taken");
        }

        if ($request->role == 'agent') {
            $role_id = 3;
        } else {
            $role_id = 2;
        }
   
        // dd($request->referral);
        $array = [
            'name' => $request->name,
            'email' => $email,
            'phone' => $phone,
            'username' => $username,
            'password' => Hash::make($request->password),
            'role_id' => $role_id,


        ];
        $user = User::create($array);
        $verify_token = Str::random(20);

        // if ($role_id == 3 && $message == "Email") {
        //     // Mail::to(setting('site.email'))->send(new NotifyEmail($user));
        //     Mail::to($user->email)->send(new VerifyEmail($user, $verify_token));
        // }

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }
}
