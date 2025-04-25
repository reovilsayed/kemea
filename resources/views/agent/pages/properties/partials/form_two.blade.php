<div class="card m-4">
    <div class="card-body">
        <h4 class="text-bolder mt-3" style="font-size: 18px; color: #191C1F;">Basic Features</h4>
        <div class="row mb-4 mt-3">
            <div class="col-md-6 col-12">
                <label for="city" class="form-label text-bold" style="color: #191C1F">Rooms</label>
                <div class="row row-cols-auto">
                    <div>
                        <input class="form-check-input rooms" type="checkbox" name="rooms" value="1"
                            id="Rooms1" {{ ($property->property_meta->rooms ?? '') == '1' ? 'checked' : '' }}>
                        <label for="Rooms1" class="form-label" style="color: #191C1F">1</label>
                    </div>
                    <div>
                        <input class="form-check-input rooms" type="checkbox" name="rooms" value="2"
                            id="Rooms2" {{ ($property->property_meta->rooms ?? '') == '2' ? 'checked' : '' }}>
                        <label for="Rooms2" class="form-label" style="color: #191C1F">2</label>
                    </div>
                    <div>
                        <input class="form-check-input rooms" type="checkbox" name="rooms" value="3"
                            id="Rooms3" {{ ($property->property_meta->rooms ?? '') == '3' ? 'checked' : '' }}>
                        <label for="Rooms3" class="form-label" style="color: #191C1F">3</label>
                    </div>
                    <div>
                        <input class="form-check-input rooms" type="checkbox" name="rooms" value="4"
                            id="Rooms4" {{ ($property->property_meta->rooms ?? '') == '4' ? 'checked' : '' }}>
                        <label for="Rooms4" class="form-label" style="color: #191C1F">4</label>
                    </div>
                    <div>
                        <input class="form-check-input rooms" type="checkbox" name="rooms" value="5"
                            id="Rooms5" {{ ($property->property_meta->rooms ?? '') == '5' ? 'checked' : '' }}>
                        <label for="Rooms5" class="form-label" style="color: #191C1F">5+</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <label for="city" class="form-label text-bold" style="color: #191C1F">Bedrooms</label>
                <div class="row row-cols-auto">
                    <div>
                        <input class="form-check-input bed_rooms" type="checkbox" name="bed_rooms" value="1"
                            id="Bedrooms1" {{ ($property->property_meta->bed_rooms ?? '') == '1' ? 'checked' : '' }}>
                        <label for="Bedrooms1" class="form-label" style="color: #191C1F">1</label>
                    </div>
                    <div>
                        <input class="form-check-input bed_rooms" type="checkbox" name="bed_rooms" value="2"
                            id="Bedrooms2" {{ ($property->property_meta->bed_rooms ?? '') == '2' ? 'checked' : '' }}>
                        <label for="Bedrooms2" class="form-label" style="color: #191C1F">2</label>
                    </div>
                    <div>
                        <input class="form-check-input bed_rooms" type="checkbox" name="bed_rooms" value="3"
                            id="Bedrooms3" {{ ($property->property_meta->bed_rooms ?? '') == '3' ? 'checked' : '' }}>
                        <label for="Bedrooms3" class="form-label" style="color: #191C1F">3</label>
                    </div>
                    <div>
                        <input class="form-check-input bed_rooms" type="checkbox" name="bed_rooms" value="4"
                            id="Bedrooms4" {{ ($property->property_meta->bed_rooms ?? '') == '4' ? 'checked' : '' }}>
                        <label for="Bedrooms4" class="form-label" style="color: #191C1F">4</label>
                    </div>
                    <div>
                        <input class="form-check-input bed_rooms" type="checkbox" name="bed_rooms" value="5"
                            id="Bedrooms5" {{ ($property->property_meta->bed_rooms ?? '') == '5' ? 'checked' : '' }}>
                        <label for="Bedrooms5" class="form-label" style="color: #191C1F">5+</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6 col-12">
                <label for="city" class="form-label text-bolder" style="color: #191C1F">Bathrooms</label>
                <div class="row row-cols-auto">
                    <div>
                        <input class="form-check-input bath_rooms" type="checkbox" name="bath_rooms" value="1"
                            id="Bathrooms1" {{ ($property->property_meta->bath_rooms ?? '') == '1' ? 'checked' : '' }}>
                        <label for="Bathrooms1" class="form-label" style="color: #191C1F">1</label>
                    </div>
                    <div>
                        <input class="form-check-input bath_rooms" type="checkbox" name="bath_rooms" value="2"
                            id="Bathrooms2" {{ ($property->property_meta->bath_rooms ?? '') == '2' ? 'checked' : '' }}>
                        <label for="Bathrooms2" class="form-label" style="color: #191C1F">2</label>
                    </div>
                    <div>
                        <input class="form-check-input bath_rooms" type="checkbox" name="bath_rooms" value="3"
                            id="Bathrooms3" {{ ($property->property_meta->bath_rooms ?? '') == '3' ? 'checked' : '' }}>
                        <label for="Bathrooms3" class="form-label" style="color: #191C1F">3</label>
                    </div>
                    <div>
                        <input class="form-check-input bath_rooms" type="checkbox" name="bath_rooms" value="4"
                            id="Bathrooms4" {{ ($property->property_meta->bath_rooms ?? '') == '4' ? 'checked' : '' }}>
                        <label for="Bathrooms4" class="form-label" style="color: #191C1F">4</label>
                    </div>
                    <div>
                        <input class="form-check-input bath_rooms" type="checkbox" name="bath_rooms" value="5"
                            id="Bathrooms5" {{ ($property->property_meta->bath_rooms ?? '') == '5' ? 'checked' : '' }}>
                        <label for="Bathrooms5" class="form-label" style="color: #191C1F">5+</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <label for="city" class="form-label text-bolder" style="color: #191C1F">Toilets</label>
                <div class="row row-cols-auto">
                    <div>
                        <input class="form-check-input toilet" type="checkbox" name="toilet" value="1"
                            id="Toilets1" {{ ($property->property_meta->toilet ?? '') == '1' ? 'checked' : '' }}>
                        <label for="Toilets1" class="form-label" style="color: #191C1F">1</label>
                    </div>
                    <div>
                        <input class="form-check-input toilet" type="checkbox" name="toilet" value="2"
                            id="Toilets2" {{ ($property->property_meta->toilet ?? '') == '2' ? 'checked' : '' }}>
                        <label for="Toilets2" class="form-label" style="color: #191C1F">2</label>
                    </div>
                    <div>
                        <input class="form-check-input toilet" type="checkbox" name="toilet" value="3"
                            id="Toilets3" {{ ($property->property_meta->toilet ?? '') == '3' ? 'checked' : '' }}>
                        <label for="Toilets3" class="form-label" style="color: #191C1F">3</label>
                    </div>
                    <div>
                        <input class="form-check-input toilet" type="checkbox" name="toilet" value="4"
                            id="Toilets4" {{ ($property->property_meta->toilet ?? '') == '4' ? 'checked' : '' }}>
                        <label for="Toilets4" class="form-label" style="color: #191C1F">4</label>
                    </div>
                    <div>
                        <input class="form-check-input toilet" type="checkbox" name="toilet" value="5"
                            id="Toilets5" {{ ($property->property_meta->toilet ?? '') == '5' ? 'checked' : '' }}>
                        <label for="Toilets5" class="form-label" style="color: #191C1F">5+</label>
                    </div>
                </div>
            </div>
        </div>

        <h6 class="text-bolder" style="font-size: 14px; color: #191C1F;">Additional Features</h6>
        @php
            $selectedOptions = json_decode($property->property_meta->additional_feature ?? '[]', true);
        @endphp
        <div class="row row-cols-auto mb-4">
            <div>
                <input class="form-check-input" type="checkbox" name="additional_feature[]" value="Master Bedroom"
                    id="Master" {{ in_array('Master Bedroom', $selectedOptions) ? 'checked' : '' }}>
                <label for="Master" class="form-label" style="color: #191C1F">Master Bedroom</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="additional_feature[]" value="Air Conditioner"
                    id="Conditioner" {{ in_array('Air Conditioner', $selectedOptions) ? 'checked' : '' }}>
                <label for="Conditioner" class="form-label" style="color: #191C1F">Air Conditioner</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="additional_feature[]" value="Accessible"
                    id="Accessible" {{ in_array('Accessible', $selectedOptions) ? 'checked' : '' }}>
                <label for="Accessible" class="form-label" style="color: #191C1F">Accessible</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="additional_feature[]" value="Shelter"
                    id="Shelter" {{ in_array('Shelter', $selectedOptions) ? 'checked' : '' }}>
                <label for="Shelter" class="form-label" style="color: #191C1F">Shelter</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="additional_feature[]" value="Garbage chute"
                    id="Garbagechute" {{ in_array('Garbage chute', $selectedOptions) ? 'checked' : '' }}>
                <label for="Garbagechute" class="form-label" style="color: #191C1F">Garbage chute</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="additional_feature[]" value="Window bars"
                    id="Windowbars" {{ in_array('Window bars', $selectedOptions) ? 'checked' : '' }}>
                <label for="Windowbars" class="form-label" style="color: #191C1F">Window bars</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="additional_feature[]" value="Furnished"
                    id="Furnished" {{ in_array('Furnished', $selectedOptions) ? 'checked' : '' }}>
                <label for="Furnished" class="form-label" style="color: #191C1F">Furnished</label>
            </div>
        </div>

        @php
            $selectedViewOptions = json_decode($property->property_meta->view ?? '[]', true);
        @endphp
        <div class="row row-cols-auto mb-4">
            <div>
                <label for="city" class="form-label text-bolder" style="color: #191C1F">View:</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="view[]" value="None" id="None" {{ in_array('None', $selectedViewOptions) ? 'checked' : '' }}>
                <label for="None" class="form-label" style="color: #191C1F">None</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="view[]" value="Overlooked" id="Overlooked" {{ in_array('Overlooked', $selectedViewOptions) ? 'checked' : '' }}>
                <label for="Overlooked" class="form-label" style="color: #191C1F">Overlooked</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="view[]" value="Clear" id="Clear" {{ in_array('Clear', $selectedViewOptions) ? 'checked' : '' }}>
                <label for="Clear" class="form-label" style="color: #191C1F">Clear</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="view[]" value="Exceptional"
                    id="Exceptional" {{ in_array('Exceptional', $selectedViewOptions) ? 'checked' : '' }}>
                <label for="Exceptional" class="form-label" style="color: #191C1F">Exceptional</label>
            </div>
        </div>


        <div class="row row-cols-auto mb-4">
            <div>
                <label for="exposer" class="form-label text-bolder" style="color: #191C1F">Exposure:</label>
            </div>
            {{-- @dd($property->property_meta->exposer) --}}
            <div>
                <input class="form-check-input exposer" type="checkbox" name="exposer" value="North"
                    id="North" {{ ($property->property_meta->exposer ?? '') == 'North' ? 'checked' : '' }}>
                <label for="North" class="form-label" style="color: #191C1F">North</label>
            </div>
            <div>
                <input class="form-check-input exposer" type="checkbox" name="exposer" value="South"
                    id="South" {{ ($property->property_meta->exposer ?? '') == 'South' ? 'checked' : '' }}>
                <label for="South" class="form-label" style="color: #191C1F">South</label>
            </div>
            <div>
                <input class="form-check-input exposer" type="checkbox" name="exposer" value="East"
                    id="East" {{ ($property->property_meta->exposer ?? '') == 'East' ? 'checked' : '' }}>
                <label for="East" class="form-label" style="color: #191C1F">East</label>
            </div>
            <div>
                <input class="form-check-input exposer" type="checkbox" name="exposer" value="West"
                    id="West" {{ ($property->property_meta->exposer ?? '') == 'West' ? 'checked' : '' }}>
                <label for="West" class="form-label" style="color: #191C1F">West</label>
            </div>
        </div>


        <div class="row mb-4">
            <div class="col-md-6 col-12">
                <label for="belconi_amount" class="form-label text-bolder" style="color: #191C1F">Balconies</label>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <input type="number" class="form-control" id="belconi_amount" name="belconi_amount"
                            placeholder="Number" value="{{ $property->property_meta->belconi_amount ?? '' }}">
                    </div>
                    <div class="col-md-6 col-12 mt-3 mt-md-0">
                        <input type="number" class="form-control" id="belconi_surface" name="belconi_surface"
                            placeholder="Surface" value="{{ $property->property_meta->belconi_surface ?? '' }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 mt-3 mt-md-0">
                <label for="terraces_amount" class="form-label text-bolder" style="color: #191C1F">Terraces</label>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <input type="number" class="form-control" id="terraces_amount" name="terraces_amount"
                            placeholder="Number" value="{{ $property->property_meta->terraces_amount ?? '' }}">
                    </div>
                    <div class="col-md-6 col-12 mt-3 mt-md-0">
                        <input type="number" class="form-control" id="terraces_surface" name="terraces_surface"
                            placeholder="Surface" value="{{ $property->property_meta->terraces_surface ?? '' }}">
                    </div>
                </div>
            </div>
        </div>


        <h6 class="text-bolder" style="font-size: 14px; color: #191C1F;">Extra Features</h6>

        @php
            $selectedExtraFeatures = json_decode($property->property_meta->extra_features ?? '[]', true);
        @endphp
        <div class="row row-cols-auto mb-4">
            <div class="">
                <input class="form-check-input" type="checkbox" name="extra_features[]" value="Sukkah"
                    id="Sukkah" {{ in_array('Sukkah', $selectedExtraFeatures) ? 'checked' : '' }}>
                <label for="Sukkah" class="form-label" style="color: #191C1F">Sukkah</label>
            </div>
            <div class="">
                <input class="form-check-input" type="checkbox" name="extra_features[]" value="Pool"
                    id="Pool" {{ in_array('Pool', $selectedExtraFeatures) ? 'checked' : '' }}>
                <label for="Pool" class="form-label" style="color: #191C1F">Pool</label>
            </div>
            <div class="">
                <input class="form-check-input" type="checkbox" name="extra_features[]" value="Garden"
                    id="Garden" {{ in_array('Garden', $selectedExtraFeatures) ? 'checked' : '' }}>
                <label for="Garden" class="form-label" style="color: #191C1F">Garden</label>
            </div>
            <div class="">
                <input class="form-check-input" type="checkbox" name="extra_features[]" value="Elevator"
                    id="Elevator" {{ in_array('Elevator', $selectedExtraFeatures) ? 'checked' : '' }}>
                <label for="Elevator" class="form-label" style="color: #191C1F">Elevator</label>
            </div>
            <div class="">
                <input class="form-check-input" type="checkbox" name="extra_features[]" value="Parking"
                    id="Parking" {{ in_array('Parking', $selectedExtraFeatures) ? 'checked' : '' }}>
                <label for="Parking" class="form-label" style="color: #191C1F">Parking</label>
            </div>
            <div class="">
                <input class="form-check-input" type="checkbox" name="extra_features[]" value="Car Charging Station"
                    id="Charging" {{ in_array('Car Charging Station', $selectedExtraFeatures) ? 'checked' : '' }}>
                <label for="Charging" class="form-label" style="color: #191C1F">Car Charging Station</label>
            </div>
            <div class="">
                <input class="form-check-input" type="checkbox" name="extra_features[]" value="Gym"
                    id="Gym" {{ in_array('Gym', $selectedExtraFeatures) ? 'checked' : '' }}>
                <label for="Gym" class="form-label" style="color: #191C1F">Gym</label>
            </div>
            <div class="">
                <input class="form-check-input" type="checkbox" name="extra_features[]" value="Stroller Room"
                    id="StrollerRoom" {{ in_array('Stroller Room', $selectedExtraFeatures) ? 'checked' : '' }}>
                <label for="StrollerRoom" class="form-label" style="color: #191C1F">Stroller Room</label>
            </div>
            <div class="">
                <input class="form-check-input" type="checkbox" name="extra_features[]" value="Warehouse"
                    id="Warehouse" {{ in_array('Warehouse', $selectedExtraFeatures) ? 'checked' : '' }}>
                <label for="Warehouse" class="form-label" style="color: #191C1F">Warehouse</label>
            </div>
        </div>

        <h6 class="text-bolder" style="font-size: 14px; color: #191C1F;">Floor</h6>
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <input type="number" class="form-control" name="floor" placeholder="Number" value="{{ $property->property_meta->floor ?? '' }}">
                    <label for="to_floor" class="form-label text-bolder mx-3">On</label>
                    <input type="number" class="form-control" name="to_floor" placeholder="Number" value="{{ $property->property_meta->to_floor ?? '' }}">
                    <div class="d-flex ms-3 w-70">
                        <input class="form-check-input" type="checkbox" name="is_last_floor" value="1"
                            id="LastFloor" {{ ($property->property_meta->is_last_floor ?? '') == '1' ? 'checked' : '' }}>
                        <label for="LastFloor" class="form-label" style="color: #191C1F">Last Floor</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-auto mb-4 mt-4">
            <div class="">
                <label for="city" class="form-label text-bolder" style="color: #191C1F">Construction Date:</label>
            </div>
            <div class="">
                <input type="date" class="form-control" id="Street" name="consturection_date"
                    placeholder="Number" value="{{ $property->property_meta->consturection_date ?? '' }}">
            </div>
        </div>

        <h6 class="text-bolder" style="font-size: 14px; color: #191C1F;">Property Condition:</h6>
        <div class="row row-cols-auto mb-4">
            <div>
                <input class="form-check-input condition" type="checkbox" name="property_condition"
                    value="Renovated" id="Renovated" {{ ($property->property_meta->property_condition ?? '') == 'Renovated' ? 'checked' : '' }}>
                <label for="Renovated" class="form-label" style="color: #191C1F">Renovated</label>
            </div>
            <div>
                <input class="form-check-input condition" type="checkbox" name="property_condition"
                    value="Preserved" id="Preserved" {{ ($property->property_meta->property_condition ?? '') == 'Preserved' ? 'checked' : '' }}>
                <label for="Preserved" class="form-label" style="color: #191C1F">Preserved</label>
            </div>
            <div>
                <input class="form-check-input condition" type="checkbox" name="property_condition"
                    value="Work to be done" id="Worktobedone" {{ ($property->property_meta->property_condition ?? '') == 'Work to be done' ? 'checked' : '' }}>
                <label for="Worktobedone" class="form-label" style="color: #191C1F">Work to be done</label>
            </div>
        </div>


        <h6 class="text-bolder" style="font-size: 14px; color: #191C1F;">Entry Date:</h6>
        <div class="row row-cols-auto mb-4">
            <div>
                <input class="form-check-input entry-date" type="checkbox" name="entry_date" value="Immediate"
                    id="Immediate" {{ ($property->property_meta->entry_date ?? '') == 'Immediate' ? 'checked' : '' }}>
                <label for="Immediate" class="form-label" style="color: #191C1F">Immediate</label>
            </div>
            <div>
                <input class="form-check-input entry-date" type="checkbox" name="entry_date" value="Flexible"
                    id="Flexible" {{ ($property->property_meta->entry_date ?? '') == 'Flexible' ? 'checked' : '' }}>
                <label for="Flexible" class="form-label" style="color: #191C1F">Flexible</label>
            </div>
            <div>
                <input class="form-check-input entry-date" type="checkbox" name="entry_date" value="With a Tenant"
                    id="WithaTenant" {{ ($property->property_meta->entry_date ?? '') == 'With a Tenant' ? 'checked' : '' }}>
                <label for="WithaTenant" class="form-label" style="color: #191C1F">With a Tenant</label>
            </div>
        </div>
    </div>
</div>
