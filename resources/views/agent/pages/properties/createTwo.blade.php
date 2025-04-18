<x-agent.app>
    @push('css')
        <style>
            .custom-select {
                padding: 0.5rem 1rem 0.5rem 14px !important;
            }

            .custom-select:focus {
                box-shadow: none !important;
                border: 1px solid #404040 !important;
            }
        </style>
    @endpush

    <div class="d-md-flex justify-content-between align-items-center p-4">
        <h4 class="m-0" style="font-size: 20px; color: #0666EB;">
           <img src="{{ asset('agent-assets/img/Group 427321418.svg') }}" alt=""> Add New Property - Step 2/3
        </h4>

        <div class="d-none d-md-flex align-items-center gap-2">
            <a href="#" class="text-decoration-none fw-bold"
                style="color: #0666EB; font-size: 14px; border-bottom: 1px solid #0666EB;">
                Dashboard
            </a>
            <img src="{{ asset('agent-assets/img/Icon.svg') }}" alt="Icon" class="mx-2">
            <span style="font-size: 14px;">Add New Property</span>
        </div>
    </div>


    <form action="" method="">
        <div class="card m-4">
            <div class="card-body">
                <h4 class="text-bolder mt-3" style="font-size: 18px; color: #191C1F;">Basic Features</h4>

                <div class="row mb-4 mt-3">
                    <div class="col-md-6 col-12">
                        <label for="city" class="form-label text-bold" style="color: #191C1F">Rooms</label>
                        <div class="row row-cols-auto">
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Rooms1">
                                <label for="Rooms1" class="form-label" style="color: #191C1F">1</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Rooms2">
                                <label for="Rooms2" class="form-label" style="color: #191C1F">2</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Rooms3">
                                <label for="Rooms3" class="form-label" style="color: #191C1F">3</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Rooms4">
                                <label for="Rooms4" class="form-label" style="color: #191C1F">4</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Rooms5">
                                <label for="Rooms5" class="form-label" style="color: #191C1F">5+</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="city" class="form-label text-bold" style="color: #191C1F">Bedrooms</label>
                        <div class="row row-cols-auto">
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Bedrooms1">
                                <label for="Bedrooms1" class="form-label" style="color: #191C1F">1</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Bedrooms2">
                                <label for="Bedrooms2" class="form-label" style="color: #191C1F">2</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Bedrooms3">
                                <label for="Bedrooms3" class="form-label" style="color: #191C1F">3</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Bedrooms4">
                                <label for="Bedrooms4" class="form-label" style="color: #191C1F">4</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Bedrooms5">
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
                                <input class="form-check-input" type="checkbox" value="" id="Bathrooms1">
                                <label for="Bathrooms1" class="form-label" style="color: #191C1F">1</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Bathrooms2">
                                <label for="Bathrooms2" class="form-label" style="color: #191C1F">2</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Bathrooms3">
                                <label for="Bathrooms3" class="form-label" style="color: #191C1F">3</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Bathrooms4">
                                <label for="Bathrooms4" class="form-label" style="color: #191C1F">4</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Bathrooms5">
                                <label for="Bathrooms5" class="form-label" style="color: #191C1F">5+</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="city" class="form-label text-bolder" style="color: #191C1F">Toilets</label>
                        <div class="row row-cols-auto">
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Toilets1">
                                <label for="Toilets1" class="form-label" style="color: #191C1F">1</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Toilets2">
                                <label for="Toilets2" class="form-label" style="color: #191C1F">2</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Toilets3">
                                <label for="Toilets3" class="form-label" style="color: #191C1F">3</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Toilets4">
                                <label for="Toilets4" class="form-label" style="color: #191C1F">4</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="Toilets5">
                                <label for="Toilets5" class="form-label" style="color: #191C1F">5+</label>
                            </div>
                        </div>
                    </div>
                </div>

                <h6 class="text-bolder" style="font-size: 14px; color: #191C1F;">Additional Features</h6>
                <div class="row row-cols-auto mb-4">
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Master">
                        <label for="Master" class="form-label" style="color: #191C1F">Master Bedroom</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Conditioner">
                        <label for="Conditioner" class="form-label" style="color: #191C1F">Air Conditioner</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Accessible">
                        <label for="Accessible" class="form-label" style="color: #191C1F">Accessible</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Shelter">
                        <label for="Shelter" class="form-label" style="color: #191C1F">Shelter</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Garbagechute">
                        <label for="Garbagechute" class="form-label" style="color: #191C1F">Garbage chute</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Windowbars">
                        <label for="Windowbars" class="form-label" style="color: #191C1F">Window bars</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Furnished">
                        <label for="Furnished" class="form-label" style="color: #191C1F">Furnished</label>
                    </div>
                </div>

                <div class="row row-cols-auto mb-4">
                    <div class="">
                        <label for="city" class="form-label text-bolder" style="color: #191C1F">View:</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="None">
                        <label for="None" class="form-label" style="color: #191C1F">None</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Overlooked">
                        <label for="Overlooked" class="form-label" style="color: #191C1F">Overlooked</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Clear">
                        <label for="Clear" class="form-label" style="color: #191C1F">Clear</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Exceptional">
                        <label for="Exceptional" class="form-label" style="color: #191C1F">Exceptional</label>
                    </div>
                </div>

                <div class="row row-cols-auto mb-4">
                    <div class="">
                        <label for="city" class="form-label text-bolder" style="color: #191C1F">Exposure:</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="North">
                        <label for="North" class="form-label" style="color: #191C1F">North</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="South">
                        <label for="South" class="form-label" style="color: #191C1F">South</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="East">
                        <label for="East" class="form-label" style="color: #191C1F">East</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="West">
                        <label for="West" class="form-label" style="color: #191C1F">West</label>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6 col-12">
                        <label for="city" class="form-label text-bolder" style="color: #191C1F">Balconies</label>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <input type="text" class="form-control" id="city" placeholder="Number">
                            </div>
                            <div class="col-md-6 col-12  mt-3 mt-md-0">
                                <input type="text" class="form-control" id="Street" placeholder="Surface">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mt-3 mt-md-0">
                        <label for="city" class="form-label text-bolder" style="color: #191C1F">Terraces</label>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <input type="text" class="form-control" id="city" placeholder="Number">
                            </div>
                            <div class="col-md-6 col-12 mt-3 mt-md-0">
                                <input type="text" class="form-control" id="Street" placeholder="Surface">
                            </div>
                        </div>
                    </div>
                </div>

                <h6 class="text-bolder" style="font-size: 14px; color: #191C1F;">Extra Features</h6>
                <div class="row row-cols-auto mb-4">
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Sukkah">
                        <label for="Sukkah" class="form-label" style="color: #191C1F">Sukkah</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Pool">
                        <label for="Pool" class="form-label" style="color: #191C1F">Pool</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Garden">
                        <label for="Garden" class="form-label" style="color: #191C1F">Garden</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Elevator">
                        <label for="Elevator" class="form-label" style="color: #191C1F">Elevator</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Parking">
                        <label for="Parking" class="form-label" style="color: #191C1F">Parking</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Charging">
                        <label for="Charging" class="form-label" style="color: #191C1F">Car Charging Station</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Gym">
                        <label for="Gym" class="form-label" style="color: #191C1F">Gym</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="StrollerRoom">
                        <label for="StrollerRoom" class="form-label" style="color: #191C1F">Stroller Room</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Warehouse">
                        <label for="Warehouse" class="form-label" style="color: #191C1F">Warehouse</label>
                    </div>
                </div>

                <h6 class="text-bolder" style="font-size: 14px; color: #191C1F;">Floor</h6>
                <div class="row">
                    <div class="col-md-8 col-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <input type="text" class="form-control" id="Street" placeholder="Number">
                            <label for="Flexible" class="form-label text-bolder mx-3">On</label>
                            <input type="text" class="form-control" id="Street" placeholder="Number">
                            <div class="d-flex ms-3 w-70">
                                <input class="form-check-input" type="checkbox" value="" id="LastFloor">
                                <label for="LastFloor" class="form-label" style="color: #191C1F">Last Floor</label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row row-cols-auto mb-4 mt-4">
                    <div class="">
                        <label for="city" class="form-label text-bolder" style="color: #191C1F">View:</label>
                    </div>
                    <div class="">
                        <input type="date" class="form-control" id="Street" placeholder="Number">
                    </div>
                </div>

                <h6 class="text-bolder" style="font-size: 14px; color: #191C1F;">Property Condition:</h6>
                <div class="row row-cols-auto mb-4">
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Renovated">
                        <label for="Renovated" class="form-label" style="color: #191C1F">Renovated</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Preserved">
                        <label for="Preserved" class="form-label" style="color: #191C1F">Preserved</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Worktobedone">
                        <label for="Worktobedone" class="form-label" style="color: #191C1F">Work to be done</label>
                    </div>
                </div>


                <h6 class="text-bolder" style="font-size: 14px; color: #191C1F;">Entry Date:</h6>
                <div class="row row-cols-auto mb-4">
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Immediate">
                        <label for="Immediate" class="form-label" style="color: #191C1F">Immediate</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Flexible">
                        <label for="Flexible" class="form-label" style="color: #191C1F">Flexible</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="WithaTenant">
                        <label for="WithaTenant" class="form-label" style="color: #191C1F">With a Tenant</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-3">
            <div class="col-md-6 col-12 align-content-around">
                <a href="{{ route('agent.dashboard.properties.create') }}" class="btn px-5 text-dark-light py-2" style="font-size: 14px; color: #0666EB; background-color: #0666eb47;"> <- Previous</a>
            </div>
            <div class="col-md-6 col-12">
                <div class="d-flex justify-content-md-end align-items-center">
                    <button type="submit" class="btn btn-outline-primary px-4 me-4" style="font-size: 14px;"><img
                            src="{{ asset('agent-assets/img/save.svg') }}" alt=""> Save Draft</button>
                    <a href="#" class="btn btn-primary px-5 py-2" style="font-size: 14px;">Next -></a>
                </div>
            </div>
        </div>
    </form>
</x-agent.app>
