<x-agent.app>
    <div class="d-md-flex justify-content-between mx-4 my-3">

        <h4 class="greading"> Shared Properties</h4>
        <div class="d-none d-md-flex align-items-center ">
            <a href="#" class="text-decoration-none fw-bold"
                style="color: #0666EB; font-size: 14px; border-bottom: 1px solid #0666EB;">
                Dashboard
            </a>
            <img src="{{ asset('agent-assets/img/Icon.svg') }}" alt="Icon" class="mx-2">
            <span style="font-size: 14px;">Shared Properties & Searches</span>
        </div>
    </div>
    <div class="card mx-4">
        <div class="card-body">
            <h4 class="text-bold text-primary" style="font-size: 18px; color: #191C1F;">Shared
                Properties
            </h4>
            <p class=" text-dark">Lorem ipsum dolor sit amet, Veritatis omnis sit eius unde sunt libero
                ad
                perferendis, reiciendis ut eveniet voluptate doloremque nemo error quis!</p>
            <form action="{{ route('agent.dashboard.shared_properties.update', $sharedProperty) }}" method="POST">
                @csrf
                @method('PUT') <!-- Important for updating -->
                <div class="row mb-4">
                    <div class="col-md-12 col-12">
                        <label for="" class="form-label text-bold" style="color: #191C1F">Filters</label>
                        <div class="row mb-4">

                            <div class="col-md-4">
                                <label for="buy_rent" class="form-label text-bold" style="color: #191C1F">Buy/Rent</label>
                                <select class="form-select custom-select" name="buy_rent" id="buy_rent">
                                    <option disabled {{ !$sharedProperty->buy_rent ? 'selected' : '' }}>Open this select menu</option>
                                    <option value="Buy" {{ $sharedProperty->buy_rent == 'Buy' ? 'selected' : '' }}>Buy</option>
                                    <option value="Rent" {{ $sharedProperty->buy_rent == 'Rent' ? 'selected' : '' }}>Rent</option>
                                    <option value="Sell" {{ $sharedProperty->buy_rent == 'Sell' ? 'selected' : '' }}>Sell</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="city" class="form-label text-bold" style="color: #191C1F">City</label>
                                <input type="text" class="form-control" name="city" id="city" value="{{ old('city', $sharedProperty->city) }}">
                            </div>

                            <div class="col-4">
                                <label for="date" class="form-label text-bold" style="color: #191C1F">Date of Entry</label>
                                <input type="date" class="form-control" name="date" id="date" value="{{ old('date', $sharedProperty->date) }}">
                            </div>

                        </div>

                        <div class="row mb-4">

                            <div class="col-md-4">
                                <label for="property_type" class="form-label text-bold" style="color: #191C1F">Property Type</label>
                                <select class="form-select custom-select" name="property_type" id="property_type">
                                    <option disabled {{ !$sharedProperty->property_type ? 'selected' : '' }}>Open this select menu</option>
                                    <option value="Sell" {{ $sharedProperty->property_type == 'Sell' ? 'selected' : '' }}>Sell</option>
                                    <option value="Rent" {{ $sharedProperty->property_type == 'Rent' ? 'selected' : '' }}>Rent</option>
                                    <option value="Short-term" {{ $sharedProperty->property_type == 'Short-term' ? 'selected' : '' }}>Short-term</option>
                                    <option value="New Projects" {{ $sharedProperty->property_type == 'New Projects' ? 'selected' : '' }}>New Projects</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="badrooms" class="form-label text-bold" style="color: #191C1F">Bedrooms</label>
                                <select class="form-select custom-select" name="badrooms" id="badrooms">
                                    <option disabled {{ !$sharedProperty->badrooms ? 'selected' : '' }}>Open this select menu</option>
                                    <option value="1" {{ $sharedProperty->badrooms == '1' ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ $sharedProperty->badrooms == '2' ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ $sharedProperty->badrooms == '3' ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ $sharedProperty->badrooms == '4' ? 'selected' : '' }}>4</option>
                                    <option value="5" {{ $sharedProperty->badrooms == '5' ? 'selected' : '' }}>5+</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="budget" class="form-label text-bold" style="color: #191C1F">Budget</label>
                                <input type="number" class="form-control" name="budget" id="budget" value="{{ old('budget', $sharedProperty->budget) }}">
                            </div>

                        </div>

                        <div class="text-end">
                            <button class="btn btn-primary px-4 py-2">Submit</button>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>
</x-agent.app>