<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Boost;
use App\Models\BoostPrice;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BoostController extends Controller
{
    public function store(Request $request)  {
        $request->validate([
            'push_price_id' => 'required',
        ]);
       $property=Property::find($request->property_id);

        $boostPrice = BoostPrice::find($request->push_price_id);
        $boost=Boost::create([
            'user_id'=>auth()->id(),
            'property_id'=>$property->id,
            'boost_price_id'=>$boostPrice->id,
            'price' => $boostPrice->price,
            'start_day' => Carbon::now(),
            'end_day' => Carbon::now()->addDays($boostPrice->days),
        ]);
     
        return redirect()->route('agent.dashboard.boost.payment',$boost)->with('success',"Boost Create Successfully");

    }
    public function payment(Boost $boost){
        if($boost->user_id !==auth()->id() && $boost->status=1 ){
            return redirect()->route('agent.dashboard.visibilities');
        }
        // dd($boost);
        return view('agent.pages.boost_payment',compact('boost'));

      
    }
}
