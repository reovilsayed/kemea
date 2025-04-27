<div class="row mb-4">
    <div class="col-md-12 col-12">
        <label for="Property_for" class="form-label text-bold" style="color: #191C1F">Filters</label>
        <div class="row mb-4">
            <div class="col-md-4">
                <label for="search_type" class="form-label text-bold" style="color: #191C1F">Buy/Rent</label>
                <select class="form-select custom-select @error('search_type') is-invalid @enderror" name="search_type"
                    id="search_type">
                    <option disabled {{ old('search_type', $search->search_type ?? '') == '' ? 'selected' : '' }}>
                        Open this select menu</option>
                    <option value="Buy"
                        {{ old('search_type', $search->search_type ?? '') == 'Buy' ? 'selected' : '' }}>
                        Buy</option>
                    <option value="Sell"
                        {{ old('search_type', $search->search_type ?? '') == 'Sell' ? 'selected' : '' }}>
                        Sell</option>
                    <option value="Rent"
                        {{ old('search_type', $search->search_type ?? '') == 'Rent' ? 'selected' : '' }}>
                        Rent</option>
                </select>
                @error('search_type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="city" class="form-label text-bold" style="color: #191C1F">City</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                    id="city" value="{{ old('city', $search->city ?? '') }}" placeholder="City Name">
                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="property_type" class="form-label text-bold" style="color: #191C1F">Property Type</label>
                <select class="form-select custom-select @error('property_type') is-invalid @enderror"
                    name="property_type" id="property_type">
                    <option disabled {{ old('property_type', $search->property_type ?? '') == '' ? 'selected' : '' }}>
                        Select Property Type</option>
                    <option value="House"
                        {{ old('property_type', $search->property_type ?? '') == 'House' ? 'selected' : '' }}>
                        House</option>
                    <option value="Villa"
                        {{ old('property_type', $search->property_type ?? '') == 'Villa' ? 'selected' : '' }}>
                        Villa</option>
                    <option value="Apartment"
                        {{ old('property_type', $search->property_type ?? '') == 'Apartment' ? 'selected' : '' }}>
                        Apartment</option>
                    <option value="Cottage"
                        {{ old('property_type', $search->property_type ?? '') == 'Cottage' ? 'selected' : '' }}>
                        Cottage</option>
                    <option value="Townhouse"
                        {{ old('property_type', $search->property_type ?? '') == 'Townhouse' ? 'selected' : '' }}>
                        Townhouse</option>
                    <option value="Studio"
                        {{ old('property_type', $search->property_type ?? '') == 'Studio' ? 'selected' : '' }}>
                        Studio</option>
                </select>
                @error('property_type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <label for="bedrooms" class="form-label text-bold" style="color: #191C1F">Bedrooms</label>
                <select name="bedrooms" class="form-select custom-select" id="bedrooms">
                    <option value="1" {{ old('bedrooms', $search->bedrooms ?? '') == '1' ? 'selected' : '' }}>
                        1</option>
                    <option value="2" {{ old('bedrooms', $search->bedrooms ?? '') == '2' ? 'selected' : '' }}>
                        2</option>
                    <option value="3" {{ old('bedrooms', $search->bedrooms ?? '') == '3' ? 'selected' : '' }}>
                        3</option>
                    <option value="4" {{ old('bedrooms', $search->bedrooms ?? '') == '4' ? 'selected' : '' }}>
                        4</option>
                    <option value="5" {{ old('bedrooms', $search->bedrooms ?? '') == '5' ? 'selected' : '' }}>
                        5+</option>
                </select>
                @error('bedrooms')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="budget" class="form-label text-bold" style="color: #191C1F">Budget</label>
    

                <input type="text" class="form-control @error('budget') is-invalid @enderror" name="budget"
                id="budget" placeholder="Budget" value="{{ old('budget', $search->budget ?? '') }}">

                @error('budget')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="entry_date" class="form-label text-bold" style="color: #191C1F">Date of Entry</label>
                <input type="date" class="form-control @error('entry_date') is-invalid @enderror" name="entry_date"
                    id="entry_date" value="{{ old('entry_date', $search->date_of_entry?->format('Y-m-d') ?? '') }}">
                @error('entry_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <label for="comment" class="form-label text-bold" style="color: #191C1F">Comment</label>
                <input type="text" class="form-control @error('comment') is-invalid @enderror" id="comment"
                    name="comment" value="{{ old('comment', $search->comment ?? '') }}" placeholder="">
                @error('comment')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-4">
                <div class="row mt-4 justify-content-end">
                    <div class="col-5 pt-3 d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary w-90 m-0">Cancel</button>
                    </div>
                    <div class="col-5 pt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-90 m-0">Add</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
