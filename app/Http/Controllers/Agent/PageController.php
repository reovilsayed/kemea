<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
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
    public function virtualService()  {
        return view('agent.pages.virtual_services');
    }
    public function visibilities() {
        return view('agent.pages.visibilities');
    }
    public function sharedSearch(){
        return view('agent.pages.shared_search');
    }
    public function sharedProperties()  {
        return view('agent.pages.shared_properties');
    }

    public function planManagement() {
        return view('agent.pages.plan_Management.planManagement');
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
    public function teammanagement() {
        return view('agent.pages.agent_Office_Management.team_management');
    }
 
}
