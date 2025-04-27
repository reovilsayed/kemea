<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Boost;
use App\Models\Plan;
use App\Models\Property;
use App\Models\Property_meta;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashbaord()  {
        return view('agent.pages.dashboard');
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
        
        return view('agent.pages.plan_Management.invoices');
    }
    public function officeProfile() {
        return view('agent.pages.agent_Office_Management.office_profile');
    }
    // public function teammanagement() {
    //     return view('agent.pages.agent_Office_Management.team_management');
    // }
    public function tourReservation()  {
        return view('agent.pages.tour_reservation');
    }
  
 
}
