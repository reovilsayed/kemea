<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SharedProperty;
use Illuminate\Http\Request;

class SharedPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sharedProperty = SharedProperty::where('user_id', auth()->user()->id)->get();
        $otherSharedProperty = SharedProperty::where('user_id', '!=', auth()->user()->id)->get();
        return view('agent.pages.shared_properties.index', compact('sharedProperty', 'otherSharedProperty'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge([
            'user_id' => auth()->user()->id,
        ]);
        SharedProperty::create($request->only([
            'user_id',
            'buy_rent',
            'city',
            'property_type',
            'date',
            'badrooms',
            'budget'
        ]));
        return redirect()->back()->with('success', 'Property shared successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SharedProperty $sharedProperty)
    {
        return view('agent.pages.shared_properties.edit', compact('sharedProperty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SharedProperty $sharedProperty)
    {
        $request->merge([
            'user_id' => auth()->user()->id,
        ]);
        $sharedProperty->update($request->only([
            'user_id',
            'buy_rent',
            'city',
            'property_type',
            'date',
            'badrooms',
            'budget'
        ]));
        return redirect()->route('agent.dashboard.shared_properties.index')->with('success', 'Property updated successfully!');
    }
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SharedProperty $sharedProperty)
    {       
        $sharedProperty->delete();
        return redirect()->back()->with('success', 'Property deleted successfully!');
    }
}
