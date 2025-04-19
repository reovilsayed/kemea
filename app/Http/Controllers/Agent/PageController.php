<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashbaord()  {
        return view('agent.pages.dashboard');
    }
    public function propertyCreatePageTwo() {
        return view('agent.pages.properties.createTwo');
    }
    public function propertyCreatePageThird() {
        return view('agent.pages.properties.createThird');
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
}
