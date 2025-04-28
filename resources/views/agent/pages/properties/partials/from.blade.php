<div class="card m-4">
    <div class="card-body">

        <h4 class="text-bold" style="font-size: 18px; color: #191C1F;">Basic Information:</h4>

        <div class="row mb-4">
            <div class="col-md-6 col-12">
                <label for="Property_for" class="form-label text-bold" style="color: #191C1F">Property for:</label>
                <select class="form-select custom-select" name="property_type" id="Property_for">
                    <option disabled {{ old('property_type', $property->property_type) ? '' : 'selected' }}>Open this select menu</option>
                    @foreach(['Sell', 'Rent', 'Short-term', 'New Projects'] as $type)
                    <option value="{{ $type }}" {{ old('property_type', $property->property_type) == $type ? 'selected' : '' }}>{{ $type }}</option>
                    @endforeach
                </select>
                @error('property_type')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Property Address:</h6>

        <div class="row mb-4">
            <div class="col-md-4">
                <label for="city" class="form-label text-bold" style="color: #191C1F">City :</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $property->city) }}" placeholder="00">
                @error('city')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="Street" class="form-label text-bold" style="color: #191C1F">Street:</label>
                <input type="text" class="form-control" id="Street" name="street" value="{{ old('street', $property->street) }}" placeholder="00">
                @error('street')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="Number" class="form-label text-bold" style="color: #191C1F">Number:</label>
                <input type="number" class="form-control" id="Number" name="apt_number" value="{{ old('apt_number', $property->apt_number) }}" placeholder="00">
                @error('apt_number')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Show the address in the ad:</h6>

        @php $address_value = old('is_show_address', $property->is_show_address); @endphp
        <div class="row mb-4">
            @foreach(['Yes', 'No', 'Without the street number'] as $value)
            <div class="col-md-{{ $value == 'Without the street number' ? '5' : '2' }} col-3">
                <input class="form-check-input single-select" type="checkbox" name="is_show_address" value="{{ $value }}" id="{{ Str::slug($value, '_') }}"
                    {{ $address_value == $value ? 'checked' : '' }}>
                <label for="{{ Str::slug($value, '_') }}" class="form-label" style="color: #191C1F">{{ $value }}</label>
            </div>
            @endforeach
            @error('is_show_address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="row row-cols-1 mb-4">
            <div class="">
                <label for="quarter" class="form-label text-bold" style="color: #191C1F">Neighborhood/Quarter</label>
                <input type="text" class="form-control" name="quarter" id="quarter" value="{{ old('quarter', $property->quarter) }}">
                @error('quarter')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Area Selection:</h6>

        @php $area = old('area', $property->area); @endphp
        <div class="row mb-4">
            @foreach (['North', 'Center', 'Jerusalem', 'South'] as $option)
            <div class="col-md-3 col-6">
                <input class="form-check-input area-select" type="checkbox" name="area" value="{{ $option }}" id="{{ $option }}"
                    {{ $area == $option ? 'checked' : '' }}>
                <label for="{{ $option }}" class="form-label" style="color: #191C1F">{{ $option }}</label>
            </div>
            @endforeach
            @error('area')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Special checkboxes --}}
        @php
        $check = fn($field) => old($field, $property->$field) ? 'checked' : '';
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
            </div>
            @error($field)
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        @endforeach

        <div class="row mb-4">
            <div class="col-md-6 col-12">
                <label for="Home_Type" class="form-label text-bold" style="color: #191C1F">Home Type</label>
                <select class="form-select custom-select" name="home_type" id="Home_Type">
                    <option disabled {{ old('home_type', $property->home_type) ? '' : 'selected' }}>Open this select menu</option>
                    @foreach (['Apartment', 'House', 'Villa', 'Cotage', 'Condominimum', 'Town house', 'Studio'] as $type)
                    <option value="{{ $type }}" {{ old('home_type', $property->home_type) == $type ? 'selected' : '' }}>{{ $type }}</option>
                    @endforeach
                </select>
                @error('home_type')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        {{-- Size and Surface --}}
        <div class="row mb-4">
            <div class="col-md-4 col-12">
                <label for="Size" class="form-label text-bolder" style="color: #191C1F">Size sqm:</label>
                <input type="number" class="form-control" name="size_sqm" id="Size" value="{{ old('size_sqm', $property->property_meta->size_sqm ?? '') }}">
                @error('size_sqm')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-8 col-12">
                <label for="Surface" class="form-label text-bolder" style="color: #191C1F">Surface of the Land sqm:</label>
                <input type="number" class="form-control" name="surface_land_sqm" id="Surface" value="{{ old('surface_land_sqm', $property->property_meta->surface_land_sqm ?? '') }}">
                @error('surface_land_sqm')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        {{-- Asked price + checkboxes --}}
        <div class="row mb-4">
            <div class="col-md-5 col-12">
                <label for="Asked" class="form-label text-bolder" style="color: #191C1F">Asked Price:</label>
                <input type="text" class="form-control" name="asked_price" id="Asked" value="{{ old('asked_price', $property->asked_price) }}">
                @error('asked_price')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-2 col-12 mt-0 mt-md-4 p-0 pt-md-3">
                <label for="Flexible" class="form-label text-bolder" style="color: #191C1F">Flexible:</label>
                <input class="form-check-input" type="checkbox" value="1" id="Flexible" name="is_price_flexible" {{ $check('is_price_flexible') }}>
                @error('is_price_flexible')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-3 col-12 mt-0 mt-md-4 p-0 pt-md-3">
                <label for="Price_Upon_Request" class="form-label text-bolder" style="color: #191C1F">Price Upon Request:</label>
                <input class="form-check-input" type="checkbox" name="is_price_request" value="1" id="Price_Upon_Request" {{ $check('is_price_request') }}>
                @error('is_price_request')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        {{-- Arnona and Condominium fees --}}
        <div class="row mb-4">
            <div class="col-md-4 col-12">
                <label for="Arnona" class="form-label text-bolder" style="color: #191C1F">Arnona 2 months:</label>
                <input type="text" class="form-control" name="arnona_2_month" id="Arnona" value="{{ old('arnona_2_month', $property->property_meta->arnona_2_month ?? '') }}">
                @error('arnona_2_month')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-8 col-12">
                <label for="Condominium" class="form-label text-bolder" style="color: #191C1F">Condominium Fees:</label>
                <input type="number" class="form-control" name="condominimum_fees" id="Condominium" value="{{ old('condominimum_fees', $property->property_meta->condominimum_fees ?? '') }}">
                @error('condominimum_fees')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        {{-- Agent fees --}}
        <div class="row mb-4">
            <div class="col-md-6">
                <label for="Agent" class="form-label text-bold" style="color: #191C1F">Agent fees ch</label>
                <input type="number" class="form-control" id="Agent" name="agent_fees" value="{{ old('agent_fees', $property->property_meta->agent_fees ?? '') }}">
                @error('agent_fees')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="agents" class="form-label text-bold" style="color: #191C1F">Share with other agents (% Shared)</label>
                <div class="d-flex align-items-center justify-content-between">
                    <input class="form-check-input me-4" type="checkbox" name="is_share_other_agent" value="1" id="is_share_other_agent" {{ old('is_share_other_agent', $property->property_meta->is_share_other_agent ?? '') == '1' ? 'checked' : '' }}>
                    <input type="number" class="form-control" id="agents" name="share_other_agent_percentage" value="{{ old('share_other_agent_percentage', $property->property_meta->share_other_agent_percentage ?? '') }}">
                </div>
                @error('share_other_agent_percentage')
                <small class="text-danger d-block">{{ $message }}</small>
                @enderror
            </div>
        </div>

    </div>
</div>