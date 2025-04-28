<?php

namespace App\Http\Controllers;

use App\Models\BoostPrice;
use App\Models\Property;
use App\Models\Property_meta;
use App\Models\PropertyMetaAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $properties = Property::where('user_id', auth()->user()->id)->latest()->filter($request->only(['search', 'property_type']))
            ->get();
        $boostPrices = BoostPrice::all();
        return view('agent.pages.properties.index', compact('properties', 'boostPrices'));
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
            // 'visivility_options' => json_encode($request->input('visivility_options') ?? []),
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
            // 'visivility_options',
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

        // if ($request->input('action') === 'draft') {
        //     $property->update(['status' => 1]);
        // }
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


        // if ($request->input('action') === 'draft') {
        //     $property->update(['status' => 1]);
        // }
        return redirect()->route('agent.dashboard.property_create_page_third', ['property' => $property->id]);
    }

    public function createPage_third(Request $request, Property $property)
    {
        $property_meta = Property_meta::where('property_id', $property->id)->firstOrFail();


        if ($request->property_photos) {
            $property_photos = [];
            foreach ($request->property_photos as $property_photo) {
                $property_photos[] = $property_photo->store('property_photos', 'public');
            }
        }

        if ($request->home_staging_photos) {
            $home_staging_photos = [];
            foreach ($request->home_staging_photos as $home_staging_photo) {
                $home_staging_photos[] = $home_staging_photo->store('home_staging_photos', 'public');
            }
        }

        if ($request->videos) {
            $property_photos = [];
            foreach ($request->videos as $video) {
                $videos[] = $video->store('videos', 'public');
            }
        }

        if ($request->tour_embed) {
            $tour_embed = [];
            foreach ($request->tour_embed as $tour) {
                $tour_embed[] = $tour->store('tour_embed', 'public');
            }
        }

        $property_meta->update([
            'description' => $request->description,
            'virtual_home_staging' => $request->input('virtual_home_staging')
        ]);

        $property->update([
            'keywords' => $request->input('keywords'),
        ]);

        if ($request->property_photos || $request->home_staging_photos || $request->videos || $request->tour_embed) {
            PropertyMetaAttachment::create([
                'property_id' => $property->id,
                'property_photos' => json_encode($property_photos) ?? '',
                'home_staging_photos' => json_encode($home_staging_photos),
                'videos' => json_encode($videos),
                'tour_embed' => json_encode($tour_embed),
            ]);
        }

        if ($request->input('action') === 'publish') {
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
        // $request->merge([
        //     'visivility_options' => json_encode($request->input('visivility_options') ?? []),
        // ]);

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
            // 'visivility_options',
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
        // if ($request->input('action') === 'draft') {
        //     $property->update(['status' => 1]);
        // }
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

        // if ($request->input('action') === 'draft') {
        //     $property->update(['status' => 1]);
        // }
        return redirect()->route('agent.dashboard.property_edit_page_third', ['property' => $property->id]);
    }

    public function update_page_third(Request $request, Property $property)
    {
        $property_meta = $property->property_meta;
        $property_meta_attachment = $property->property_meta_attachments;

        $property_photos = [];
        $home_staging_photos = [];
        $videos = [];
        $tour_embed = [];


        if ($request->hasFile('property_photos')) {
            if ($property_meta_attachment && $property_meta_attachment->property_photos) {
                $oldPhotos = json_decode($property_meta_attachment->property_photos, true);
                if (is_array($oldPhotos)) {
                    foreach ($oldPhotos as $oldPhoto) {
                        if (Storage::disk('public')->exists($oldPhoto)) {
                            Storage::disk('public')->delete($oldPhoto);
                        }
                    }
                }
            }

            foreach ($request->file('property_photos') as $property_photo) {
                $property_photos[] = $property_photo->store('property_photos', 'public');
            }
        }


        if ($request->hasFile('home_staging_photos')) {
            if ($property_meta_attachment && $property_meta_attachment->home_staging_photos) {
                $oldStagingPhotos = json_decode($property_meta_attachment->home_staging_photos, true);
                if (is_array($oldStagingPhotos)) {
                    foreach ($oldStagingPhotos as $oldPhoto) {
                        if (Storage::disk('public')->exists($oldPhoto)) {
                            Storage::disk('public')->delete($oldPhoto);
                        }
                    }
                }
            }

            foreach ($request->file('home_staging_photos') as $staging_photo) {
                $home_staging_photos[] = $staging_photo->store('home_staging_photos', 'public');
            }
        }


        if ($request->hasFile('videos')) {
            if ($property_meta_attachment && $property_meta_attachment->videos) {
                $oldVideos = json_decode($property_meta_attachment->videos, true);
                if (is_array($oldVideos)) {
                    foreach ($oldVideos as $oldVideo) {
                        if (Storage::disk('public')->exists($oldVideo)) {
                            Storage::disk('public')->delete($oldVideo);
                        }
                    }
                }
            }

            foreach ($request->file('videos') as $video) {
                $videos[] = $video->store('videos', 'public');
            }
        }


        if ($request->hasFile('tour_embed')) {
            if ($property_meta_attachment && $property_meta_attachment->tour_embed) {
                $oldEmbeds = json_decode($property_meta_attachment->tour_embed, true);
                if (is_array($oldEmbeds)) {
                    foreach ($oldEmbeds as $oldEmbed) {
                        if (Storage::disk('public')->exists($oldEmbed)) {
                            Storage::disk('public')->delete($oldEmbed);
                        }
                    }
                }
            }

            foreach ($request->file('tour_embed') as $tour) {
                $tour_embed[] = $tour->store('tour_embed', 'public');
            }
        }


        if ($property_meta) {
            $property_meta->update([
                'description' => $request->input('description'),
                'virtual_home_staging' => $request->input('virtual_home_staging')
            ]);
        }


        $property->update([
            'keywords' => $request->input('keywords'),
        ]);


        if ($property_meta_attachment) {
            $property_meta_attachment->update([
                'property_photos' => json_encode($property_photos),
                'home_staging_photos' => json_encode($home_staging_photos),
                'videos' => json_encode($videos),
                'tour_embed' => json_encode($tour_embed),
            ]);
        } else {
            PropertyMetaAttachment::create([
                'property_id' => $property->id,
                'property_photos' => json_encode($property_photos),
                'home_staging_photos' => json_encode($home_staging_photos),
                'videos' => json_encode($videos),
                'tour_embed' => json_encode($tour_embed),
            ]);
        }


        if ($request->input('action') === 'publish') {
            $property->update(['status' => 1]);
        }

        return redirect()->route('agent.dashboard.properties.index')->with('success', 'Property updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('agent.dashboard.properties.index')->with('success', 'Property deleted successfully.');
    }
}
