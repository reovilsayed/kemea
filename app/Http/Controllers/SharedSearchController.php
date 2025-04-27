<?php

namespace App\Http\Controllers;

use App\Models\SharedSearch;
use Illuminate\Http\Request;

class SharedSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = new SharedSearch();
        $myOwnSearches = SharedSearch::filter()->where('user_id', auth()->id())
            ->latest()
            ->get();
    

        $otherSearches = SharedSearch::filter()->where('user_id', '!=', auth()->id())
            ->latest()
            ->get();
        return view('agent.pages.shared_search', compact('search', 'myOwnSearches', 'otherSearches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      $request->validate([
            'search_type' => 'required|in:Buy,Sell,Rent',
            'city' => 'required|string|max:255',
            'property_type' => 'required|in:Villa,Apartment,Cottage,Townhouse,Studio,House',
            'bedrooms' => 'required|in:1,2,3,4,5',
            'budget' => 'required',
            'entry_date' => 'required|date',
            'comment' => 'nullable|string|max:500',
        ]);

        SharedSearch::create([
            'search_type'   => $request->search_type,
            'city'          => $request->city,
            'property_type' => $request->property_type,
            'bedrooms'      => $request->bedrooms,
            'budget'        => $request->budget,
            'date_of_entry'    => $request->entry_date,
            'comment'       => $request->comment,
            'user_id' => auth()->id(),

        ]);

        return redirect()->back()->with('success', 'Search saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SharedSearch $sharedSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SharedSearch $sharedSearch)
    {
        $search=$sharedSearch;
        return view('agent.pages.shared_search_edit',compact('search'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SharedSearch $sharedSearch)
    {
        $request->validate([
            'search_type' => 'required|in:Buy,Sell,Rent',
            'city' => 'required|string|max:255',
            'property_type' => 'required|in:Villa,Apartment,Cottage,Townhouse,Studio,House',
            'bedrooms' => 'required|in:1,2,3,4,5',
            'budget' => 'required',
            'entry_date' => 'required|date',
            'comment' => 'nullable|string|max:500',
        ]);
        $sharedSearch->update([
            'search_type'   => $request->search_type,
            'city'          => $request->city,
            'property_type' => $request->property_type,
            'bedrooms'      => $request->bedrooms,
            'budget'        => $request->budget,
            'date_of_entry'    => $request->entry_date,
            'comment'       => $request->comment,
            'user_id' => auth()->id(),

        ]);
        return redirect()->route('agent.dashboard.shared-search.index')->with('success', 'Search saved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SharedSearch $sharedSearch)
    {
        $sharedSearch->delete();
        return redirect()->route('agent.dashboard.shared-search.index')->with('success', 'Search saved successfully.');
    }
}
