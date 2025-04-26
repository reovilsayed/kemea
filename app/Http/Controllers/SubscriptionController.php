<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscription(Request $request,Plan $plan){
        
        dd($plan);
    }
}
