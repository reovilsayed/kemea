<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Property_meta;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $properties = Property::where('user_id', auth()->user()->id)->latest()->filter($request->only(['search', 'property_type']))
        ->get();
        return view('agent.pages.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new Property();
        return view('agent.pages.properties.create', compact('property'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'property_type' => 'required|string',
            'home_type' => 'required|string',
            'city' => 'required|string',
            'street' => 'required|string',
            'apt_number' => 'required|string',
            'quarter' => 'required|string',
            'is_exclusivity' => 'required|boolean',
            'is_exceptional_property' => 'required|boolean',
            'is_off_marcket' => 'required|boolean',
            'size_sqm' => 'required|numeric',
            'surface_land_sqm' => 'required|numeric',
            'asked_price' => 'required|numeric',
            'is_price_request' => 'required|boolean',
            'arnona_2_month' => 'required|numeric',
            'condominimum_fees' => 'required|numeric',
            'agent_fees' => 'required|numeric',
            'is_share_other_agent' => 'required|boolean',
            'share_other_agent_percentage' => 'required|numeric|min:0|max:100',
        ]);
        $request->merge([
            'user_id' => auth()->user()->id,
            'slug' => str()->slug($request->input('property_type') . '-' . uniqid()),
            'visivility_options' => json_encode($request->input('visivility_options') ?? []),
        ]);

        $property = Property::create($request->only([
            'user_id',
            'slug',
            'property_type',
            'home_type',
            'city',
            'street',
            'apt_number',
            'is_show_address',
            'quarter',
            'area',
            'is_exclusivity',
            'is_exceptional_property',
            'is_off_marcket',
            'asked_price',
            'is_price_request',
            'visivility_options',
        ]));

        $request->merge(['property_id' => $property->id]);
        Property_meta::create($request->only([
            'property_id',
            'size_sqm',
            'surface_land_sqm',
            'arnona_2_month',
            'condominimum_fees',
            'agent_fees',
            'is_share_other_agent',
            'share_other_agent_percentage',
        ]));

        if ($request->input('action') === 'draft') {
            $property->update(['status' => 1]);
        }
        return redirect()->route('agent.dashboard.property_create_page_two', ['property' => $property->id]);

    }


    public function create_page_two(Request $request, Property $property)
    {
        $property_meta = Property_meta::where('property_id', $property->id)->firstOrFail();

        $request->merge([
            'property_id' => $property_meta->property_id,
            'additional_feature' => json_encode($request['additional_feature'] ?? []),
            'view' => json_encode($request['view'] ?? []),
            'extra_features' => json_encode($request['extra_features'] ?? []),
        ]);

        $property_meta->update($request->only([
            'property_id',
            'rooms',
            'bed_rooms',
            'bath_rooms',
            'toilet',
            'additional_feature',
            'view',
            'exposer',
            'belconi_amount',
            'belconi_surface',
            'terraces_amount',
            'terraces_surface',
            'extra_features',
            'floor',
            'to_floor',
            'is_last_floor',
            'consturection_date',
            'property_condition',
            'entry_date',
        ]));


        if ($request->input('action') === 'draft') {
            $property->update(['status' => 1]);
        }
        return redirect()->route('agent.dashboard.property_create_page_third', ['property' => $property->id]);
    }

    public function createPage_third(Request $request, Property $property)
    {
        $property_meta = Property_meta::where('property_id', $property->id)->firstOrFail();

        $property_meta->update([
            'description'=>$request->description
        ]);

        $property->update([
            'keywords' => $request->input('keywords'),
        ]);

        if ($request->input('action') === 'draft') {
            $property->update(['status' => 1]);
        }
        return redirect()->route('agent.dashboard.properties.index')->with('success', 'Property published successfully.');
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
    public function edit(Property $property)
    {
        return view('agent.pages.properties.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        $request->merge([
            'visivility_options' => json_encode($request->input('visivility_options') ?? []),
        ]);

        $property->update($request->only([
            'property_type',
            'home_type',
            'city',
            'street',
            'apt_number',
            'is_show_address',
            'quarter',
            'area',
            'is_exclusivity',
            'is_exceptional_property',
            'is_off_marcket',
            'asked_price',
            'is_price_request',
            'visivility_options',
        ]));
        $property->property_meta()->update($request->only([
            'size_sqm',
            'surface_land_sqm',
            'arnona_2_month',
            'condominimum_fees',
            'agent_fees',
            'is_share_other_agent',
            'share_other_agent_percentage',
        ]));
        if ($request->input('action') === 'draft') {
            $property->update(['status' => 1]);
        }
        return redirect()->route('agent.dashboard.property_edit_page_two', ['property' => $property->id]);
    }

    public function update_page_two(Request $request, Property $property)
    {
        $property_meta = Property_meta::where('property_id', $property->id)->firstOrFail();

        $request->merge([
            'additional_feature' => json_encode($request['additional_feature'] ?? []),
            'view' => json_encode($request['view'] ?? []),
            'extra_features' => json_encode($request['extra_features'] ?? []),
        ]);

        $property_meta->update($request->only([
            'rooms',
            'bed_rooms',
            'bath_rooms',
            'toilet',
            'additional_feature',
            'view',
            'exposer',
            'belconi_amount',
            'belconi_surface',
            'terraces_amount',
            'terraces_surface',
            'extra_features',
            'floor',
            'to_floor',
            'is_last_floor',
            'consturection_date',
            'property_condition',
            'entry_date',
        ]));

        if ($request->input('action') === 'draft') {
            $property->update(['status' => 1]);
        }
            return redirect()->route('agent.dashboard.property_edit_page_third', ['property' => $property->id]);
    }

    public function update_page_third(Request $request, Property $property)
    {
        $property_meta = Property_meta::where('property_id', $property->id)->firstOrFail();

        $property_meta->update([
            'description'=>$request->description
        ]);

        $property->update([
            'keywords' => $request->input('keywords'),
        ]);

        if ($request->input('action') === 'draft') {
            $property->update(['status' => 1]);
        }
        return redirect()->route('agent.dashboard.properties.index')->with('success', 'Property published successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property_meta = Property_meta::where('property_id', $property->id)->firstOrFail();
        $property_meta->delete();
        $property->delete();
        return redirect()->route('agent.dashboard.properties.index')->with('success', 'Property deleted successfully.');
    }
}
