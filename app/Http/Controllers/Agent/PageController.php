<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashbaord()  {
        return view('agent.pages.dashboard');
    }
    public function propertiYcreatePageTwo() {
        return view('agent.pages.properties.createTwo');
    }
    public function virtualService()  {
        return view('agent.pages.virtual_services');
    }
}
