<div class="card m-4">
    <div class="card-body">
        <h4 class="text-bold" style="font-size: 18px; color: #191C1F;">Basic Information:</h4>

        <div class="row mb-4">
            <div class="col-md-6 col-12">
                <label for="Property_for" class="form-label text-bold" style="color: #191C1F">Property for:</label>
                <select class="form-select custom-select" name="property_type" id="Property_for">
                    <option disabled {{ !$property->property_type ? 'selected' : '' }}>Open this select menu</option>
                    <option value="Sell" {{ $property->property_type == 'Sell' ? 'selected' : '' }}>Sell</option>
                    <option value="Rent" {{ $property->property_type == 'Rent' ? 'selected' : '' }}>Rent</option>
                    <option value="Short-term" {{ $property->property_type == 'Short-term' ? 'selected' : '' }}>Short-term</option>
                    <option value="New Projects" {{ $property->property_type == 'New Projects' ? 'selected' : '' }}>New Projects</option>
                </select>
                @error('property_type')
                    <div class="col-12"><small class="text-danger">{{ $message }}</small></div>
                @enderror
            </div>
        </div>

        <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Property Address:</h6>

        <div class="row mb-4">
            <div class="col-md-4">
                <label for="city" class="form-label text-bold" style="color: #191C1F">City :</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $property->city }}" placeholder="00">
                @error('city')
                    <div class="col-12"><small class="text-danger">{{ $message }}</small></div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="Street" class="form-label text-bold" style="color: #191C1F">Street:</label>
                <input type="text" class="form-control" id="Street" name="street" value="{{ $property->street }}" placeholder="00">
                @error('street')
                    <div class="col-12"><small class="text-danger">{{ $message }}</small></div>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="Number" class="form-label text-bold" style="color: #191C1F">Number:</label>
                <input type="number" class="form-control" id="Number" name="apt_number" value="{{ $property->apt_number }}" placeholder="00">
                @error('apt_number')
                    <div class="col-12"><small class="text-danger">{{ $message }}</small></div>
                @enderror
            </div>
        </div>

        <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Show the address in the ad:</h6>

        <div class="row mb-4">
            @php $address_value = $property->is_show_address; @endphp
            <div class="col-md-2 col-3">
                <input class="form-check-input single-select" type="checkbox" name="is_show_address" value="Yes" id="Yes"
                    {{ $address_value == 'Yes' ? 'checked' : '' }}>
                <label for="Yes" class="form-label" style="color: #191C1F">Yes</label>
            </div>
            <div class="col-md-2 col-3">
                <input class="form-check-input single-select" type="checkbox" name="is_show_address" value="No" id="no"
                    {{ $address_value == 'No' ? 'checked' : '' }}>
                <label for="no" class="form-label" style="color: #191C1F">No</label>
            </div>
            <div class="col-md-5 col-6">
                <input class="form-check-input single-select" type="checkbox" name="is_show_address" value="Without the street number" id="Without"
                    {{ $address_value == 'Without the street number' ? 'checked' : '' }}>
                <label for="Without" class="form-label" style="color: #191C1F">Without the street number</label>
            </div>
            @error('is_show_address')
                <div class="col-12"><small class="text-danger">{{ $message }}</small></div>
            @enderror
        </div>

        <div class="row row-cols-1 mb-4">
            <div class="">
                <label for="quarter" class="form-label text-bold" style="color: #191C1F">Neighborhood/Quarter</label>
                <input type="text" class="form-control" name="quarter" id="quarter" value="{{ $property->quarter }}">
            </div>
        </div>

        <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Area Selection:</h6>

        <div class="row mb-4">
            @php $area = $property->area; @endphp
            @foreach (['North', 'Center', 'Jerusalem', 'South'] as $option)
                <div class="col-md-3 col-6">
                    <input class="form-check-input area-select" type="checkbox" name="area" value="{{ $option }}" id="{{ $option }}"
                        {{ $area == $option ? 'checked' : '' }}>
                    <label for="{{ $option }}" class="form-label" style="color: #191C1F">{{ $option }}</label>
                </div>
            @endforeach
            @error('area')
                <div class="col-12"><small class="text-danger">{{ $message }}</small></div>
            @enderror
        </div>

        @php
            $check = fn($field) => $property->$field ? 'checked' : '';
        @endphp

        @foreach([
            'is_exclusivity' => 'Exclusivity',
            'is_exceptional_property' => 'Exceptional property',
            'is_off_marcket' => 'Off Market',
        ] as $field => $label)
            <div class="row row-cols-1 mb-4">
                <div class="">
                    <input class="form-check-input" type="checkbox" value="1" name="{{ $field }}" id="{{ $field }}" {{ $check($field) }}>
                    <label for="{{ $field }}" class="form-label text-bolder" style="color: #191C1F">{{ $label }}</label>
                    <p style="color: #191C1F; font-size: 14px;">Lorem ipsum dolor sit amet...</p>
                </div>
            </div>
        @endforeach

        <div class="row mb-4">
            <div class="col-md-6 col-12">
                <label for="Home_Type" class="form-label text-bold" style="color: #191C1F">Home Type</label>
                <select class="form-select custom-select" name="home_type" id="Home_Type">
                    <option disabled {{ !$property->home_type ? 'selected' : '' }}>Open this select menu</option>
                    @foreach (['Apartment', 'House', 'Villa', 'Cotage', 'Condominimum', 'Town house', 'Studio'] as $type)
                        <option value="{{ $type }}" {{ $property->home_type == $type ? 'selected' : '' }}>{{ $type }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4 col-12">
                <label for="Size" class="form-label text-bolder" style="color: #191C1F">Size sqm:</label>
                <input type="number" class="form-control" name="size_sqm" id="Size" value="{{ $property->property_meta->size_sqm ?? '' }}">   
            </div>
            <div class="col-md-8 col-12">
                <label for="Surface" class="form-label text-bolder" style="color: #191C1F">Surface of the Land sqm:</label>
                <input type="number" class="form-control" name="surface_land_sqm" id="Surface" value="{{ $property->property_meta->surface_land_sqm ?? '' }}">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-5 col-12">
                <label for="Asked" class="form-label text-bolder" style="color: #191C1F">Asked Price:</label>
                <input type="text" class="form-control" name="asked_price" id="Asked" value="{{ $property->asked_price }}">
            </div>
            <div class="col-md-2 col-12 mt-0 mt-md-4 p-0 pt-md-3">
                <label for="Flexible" class="form-label text-bolder" style="color: #191C1F">Flexible:</label>
                <input class="form-check-input" type="checkbox" value="1" id="Flexible" name="is_price_flexible" {{ $check('is_price_flexible') }}>
            </div>
            <div class="col-md-3 col-12 mt-0 mt-md-4 p-0 pt-md-3">
                <label for="Price_Upon_Request" class="form-label text-bolder" style="color: #191C1F">Price Upon Request:</label>
                <input class="form-check-input" type="checkbox" name="is_price_request" value="1" id="Price_Upon_Request" {{ $check('is_price_request') }}>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4 col-12">
                <label for="Arnona" class="form-label text-bolder" style="color: #191C1F">Arnona 2 months:</label>
                <input type="text" class="form-control" name="arnona_2_month" id="Arnona" value="{{ $property->property_meta->arnona_2_month ?? '' }}">
            </div>
            <div class="col-md-8 col-12">
                <label for="Condominium" class="form-label text-bolder" style="color: #191C1F">Condominium Fees:</label>
                <input type="number" class="form-control" name="condominimum_fees" id="Condominium" value="{{ $property->property_meta->condominimum_fees ?? '' }}">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <label for="Agent" class="form-label text-bold" style="color: #191C1F">Agent fees ch</label>
                <input type="number" class="form-control" id="Agent" name="agent_fees" value="{{ $property->property_meta->agent_fees ?? '' }}">
                @error('agent_fees') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="col-md-6">
                <label for="agents" class="form-label text-bold" style="color: #191C1F">Share with other agents (% Shared)</label>
                <div class="d-flex align-items-center justify-content-between">
                    <input class="form-check-input me-4" type="checkbox" name="is_share_other_agent" value="1" id="is_share_other_agent" {{ ($property->property_meta->is_share_other_agent ?? '') == '1' ? 'checked' : '' }}>
                    <input type="number" class="form-control" id="agents" name="share_other_agent_percentage" value="{{ $property->property_meta->share_other_agent_percentage ?? '' }}">
                </div>
                @error('share_other_agent_percentage') <small class="text-danger d-block">{{ $message }}</small> @enderror
            </div>
        </div>


        <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Add Visibility Options:</h6>

        @php
        $selectedOptions = json_decode($property->visivility_options, true) ?? [];
    @endphp
    
    <div class="row mb-4">
        @php
            $options = [
                'New Ad',
                'Top Ad',
                'Preferred Ad',
                'Large Visibility',
                'Video First Ad'
            ];
        @endphp
    
        @foreach ($options as $index => $option)
            <div class="col-md-auto col-6">
                <div class="btn-group w-100" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox"
                           class="btn-check"
                           id="btncheck{{ $index + 1 }}"
                           name="visivility_options[]"
                           value="{{ $option }}"
                           autocomplete="off"
                           {{ in_array($option, $selectedOptions) ? 'checked' : '' }}>
                    <label class="btn btn-primary px-4 py-2" for="btncheck{{ $index + 1 }}">{{ $option }}</label>
                </div>
            </div>
        @endforeach
    </div>
    
    </div>
</div>
