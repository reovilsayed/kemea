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
        $properties = Property::where('user_id', auth()->user()->id)->filter($request->only(['search', 'property_type']))->get();
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
            'home_type' => 'nullable|string',
            'city' => 'required|string',
            'street' => 'required|string',
            'apt_number' => 'nullable|string',
            'quarter' => 'nullable|string',
            'is_exclusivity' => 'required|boolean',
            'is_exceptional_property' => 'required|boolean',
            'is_off_marcket' => 'required|boolean',
            'size_sqm' => 'nullable|numeric',
            'surface_land_sqm' => 'nullable|numeric',
            'asked_price' => 'nullable|numeric',
            'is_price_request' => 'required|boolean',
            'arnona_2_month' => 'nullable|numeric',
            'condominimum_fees' => 'nullable|numeric',
            'agent_fees' => 'nullable|numeric',
            'is_share_other_agent' => 'required|boolean',
            'share_other_agent_percentage' => 'nullable|numeric|min:0|max:100',
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
        if ($request->input('action') === 'next') {
            return redirect()->route('agent.dashboard.property_create_page_two', ['property' => $property->id]);
        }
        return back()->with('success', 'Property saved as draft.');

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


        if ($request->input('action') === 'next') {
            return redirect()->route('agent.dashboard.property_create_page_third', ['property' => $property->id]);
        }
        return back()->with('success', 'Property saved as draft.');
    }

    public function createPage_third(Request $request, Property $property)
    {
        $property_meta = Property_meta::where('property_id', $property->id)->firstOrFail();

        $data = [];

        if ($request->hasFile('property_photo')) {
            $data['property_photo'] = $request->file('property_photo')->store('property_photos', 'public');
        }

        if ($request->hasFile('video')) {
            $data['video'] = $request->file('video')->store('property_videos', 'public');
        }

        if ($request->hasFile('tour_embed')) {
            $data['tour_embed'] = $request->file('tour_embed')->store('3d_tour_embeds', 'public');
        }

        if ($request->hasFile('home_staging_photo')) {
            $data['home_staging_photo'] = $request->file('home_staging_photo')->store('home_staging_photos', 'public');
        }

        if ($request->filled('virtual_home_staging')) {
            $data['virtual_home_staging'] = $request->input('virtual_home_staging');
        }
        if ($request->filled('description')) {
            $data['description'] = $request->input('description');
        }

        $property_meta->update($data);

        $property->update([
            'keywords' => $request->input('keywords'),
        ]);

        if ($request->input('action') === 'publish') {
            $property->update(['status' => 1]);
            return redirect()->route('agent.dashboard.properties.index')->with('success', 'Property published successfully.');
        }

        return back()->with('success', 'Property saved as draft.');
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
        if ($request->input('action') === 'next') {
            return redirect()->route('agent.dashboard.property_edit_page_two', ['property' => $property->id]);
        }
        return back()->with('success', 'Property saved as draft.');
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

        if ($request->input('action') === 'next') {
            return redirect()->route('agent.dashboard.property_edit_page_third', ['property' => $property->id]);
        }
        return back()->with('success', 'Property saved as draft.');
    }

    public function update_page_third(Request $request, Property $property)
    {
        $property_meta = Property_meta::where('property_id', $property->id)->firstOrFail();

        $data = [];
        if ($request->hasFile('property_photo')) {
            $image = $property->property_meta->property_photo;

            if ($image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($image);
            }

            $data['property_photo'] = $request->file('property_photo')->store('property_photos', 'public');
        }

        if ($request->hasFile('video')) {
            $video = $property->property_meta->video;

            if ($video) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($video);
            }
            $data['video'] = $request->file('video')->store('property_videos', 'public');
        }

        if ($request->hasFile('tour_embed')) {
            $tour_embed = $property->property_meta->tour_embed;
            if ($tour_embed) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($tour_embed);
            }
            $data['3d_tour_embed'] = $request->file('3d_tour_embed')->store('3d_tour_embeds', 'public');
        }

        if ($request->hasFile('home_staging_photo')) {
            $home_staging_photo = $property->property_meta->home_staging_photo;
            if ($home_staging_photo) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($home_staging_photo);
            }
            $data['home_staging_photo'] = $request->file('home_staging_photo')->store('home_staging_photos', 'public');
        }

        if ($request->filled('virtual_home_staging')) {
            $virtual_home_staging = $property->property_meta->virtual_home_staging;
            if ($virtual_home_staging) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($virtual_home_staging);
            }
            $data['virtual_home_staging'] = $request->input('virtual_home_staging');
        }
        if ($request->filled('description')) {
            $data['description'] = $request->input('description');
        }

        $property_meta->update($data);

        $property->update([
            'keywords' => $request->input('keywords'),
        ]);

        if ($request->input('action') === 'publish') {
            $property->update(['status' => 1]);
            return redirect()->route('agent.dashboard.properties.index')->with('success', 'Property published successfully.');
        }

        return back()->with('success', 'Property saved as draft.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property_meta = Property_meta::where('property_id', $property->id)->firstOrFail();
        if ($property_meta->property_photo) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($property_meta->property_photo);
        }
        if ($property_meta->video) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($property_meta->video);
        }
        if ($property_meta->tour_embed) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($property_meta->tour_embed);
        }
        if ($property_meta->home_staging_photo) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($property_meta->home_staging_photo);
        }
        if ($property_meta->virtual_home_staging) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($property_meta->virtual_home_staging);
        }
        $property_meta->delete();
        $property->delete();
        return redirect()->route('agent.dashboard.properties.index')->with('success', 'Property deleted successfully.');
    }
}
