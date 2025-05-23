<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Boost;
use App\Models\Charge;
use App\Models\Plan;
use App\Models\Property;
use App\Models\Property_meta;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashbaord()  {
        $total_properties=Property::where('user_id',auth()->id())->count();
        $total_properties_rent=Property::where('user_id',auth()->id())->where('property_type','Rent')->count();
        $total_properties_sell=Property::where('user_id',auth()->id())->where('property_type','Sell')->count();
        $total_revenue=Charge::where('user_id',auth()->id())->sum('total');
        $properties=Property::where('user_id',auth()->id())->latest()->get();

        return view('agent.pages.dashboard',compact('total_properties','total_properties_rent','total_properties_sell','total_revenue','properties'));
    }
    public function propertyCreatePageTwo(Property $property) {
        return view('agent.pages.properties.createTwo',compact('property'));
    }
    public function propertyCreatePageThird(Property $property) {
        
        return view('agent.pages.properties.createThird', compact('property'));
    }
    public function propertyEditPageTwo(Property $property) {
        return view('agent.pages.properties.edit_two', compact('property'));
    }
    public function propertyEditPageThird(Property $property) {
        return view('agent.pages.properties.edit_third', compact('property'));
    }
    public function virtualService()  {
        return view('agent.pages.virtual_services');
    }
    public function visibilities() {
        $boosts=Boost::where('user_id',auth()->id())->latest()->get();
        return view('agent.pages.visibilities',compact('boosts'));
    }

    public function planManagement() {
        $plans=Plan::all();
        return view('agent.pages.plan_Management.planManagement',compact('plans'));
    }
    public function affiliate() {
        return view('agent.pages.affiliate');
    }

    public function invoices() {
        $charges=Charge::where('user_id',auth()->id())->latest()->get();
        
        return view('agent.pages.plan_Management.invoices',compact('charges'));
    }
    public function officeProfile() {
        return view('agent.pages.agent_Office_Management.office_profile');
    }
  
    public function tourReservation()  {
        return view('agent.pages.tour_reservation');
    }
    public function affiliateLinks() {
        return view('agent.pages.affiliate_links');
    }
 
}
