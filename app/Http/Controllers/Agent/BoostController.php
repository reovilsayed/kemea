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
        Boost::create([
            'user_id'=>auth()->id(),
            'property_id'=>$property->id,
            'boost_price_id'=>$boostPrice->id,
            'price' => $boostPrice->price,
            'start_day' => Carbon::now(),
            'end_day' => Carbon::now()->addDays($boostPrice->days),
        ]);
        $property->update([
            'is_boosted'=>1,
        ]);
        return back();

    }
}
