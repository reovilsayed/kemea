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

    <div class="d-flex justify-content-between align-items-center p-4">
        <h4 style="font-size: 20px; color: #0666EB;">Add New Property - Step 1/3</h4>
        <div class="">
            <a href="" style="color: #0666EB; border-bottom: 1px solid #0666EB; font-size: 14px;"
                class="text-bold">dashboard</a>
            <img src="{{ asset('agent-assets/img/Icon.svg') }}" alt="">
            <span style="font-size: 14px">Add New Property</span>
        </div>
    </div>

    <div class="card m-4">
        <div class="card-body">
            <h4 class="text-bold" style="font-size: 18px; color: #191C1F;">Basic Information:</h4>
        </div>

        <div class="row row-cols-2 mb-4">
            <div class="ps-4">
                <label for="Property_for" class="form-label text-bold" style="color: #191C1F">Property for:</label>
                <select class="form-select custom-select" aria-label="Default select example" id="Property_for">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <div class="card-body">
            <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Property Address:</h6>
        </div>
        <div class="row row-cols-3 mb-4">
            <div class="ps-4">
                <label for="city" class="form-label text-bold" style="color: #191C1F">City :</label>
                <input type="text" class="form-control" id="city" placeholder="00">
            </div>
            <div class="">
                <label for="Street" class="form-label text-bold" style="color: #191C1F">Street:</label>
                <input type="text" class="form-control" id="Street" placeholder="00">
            </div>
            <div class="pe-4">
                <label for="Number" class="form-label text-bold" style="color: #191C1F">Number:</label>
                <input type="number" class="form-control" id="Number" placeholder="00">
            </div>
        </div>


        <div class="card-body">
            <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Show the address in the ad:</h6>
        </div>
        <div class="row row-cols-5 mb-4">
            <div class="ps-4">
                <input class="form-check-input" type="checkbox" value="" id="Yes">
                <label for="Yes" class="form-label" style="color: #191C1F">Yes</label>
            </div>
            <div class="">
                <input class="form-check-input" type="checkbox" value="" id="no">
                <label for="no" class="form-label" style="color: #191C1F">No</label>
            </div>
            <div class="pe-4">
                <input class="form-check-input" type="checkbox" value="" id="Without">
                <label for="Without" class="form-label" style="color: #191C1F">Without the street number</label>
            </div>
        </div>


        <div class="row row-cols-1 mb-4">
            <div class="px-4">
                <label for="Property_for" class="form-label text-bold"
                    style="color: #191C1F">Neighborhood/Quarter</label>
                <input type="text" class="form-control" id="city" placeholder="">
            </div>
        </div>

        <div class="card-body">
            <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Area Selection:</h6>
        </div>
        <div class="row row-cols-6 mb-4">
            <div class="ps-4">
                <input class="form-check-input" type="checkbox" value="" id="North">
                <label for="North" class="form-label" style="color: #191C1F">North</label>
            </div>
            <div class="">
                <input class="form-check-input" type="checkbox" value="" id="Center">
                <label for="Center" class="form-label" style="color: #191C1F">Center</label>
            </div>
            <div class="pe-4">
                <input class="form-check-input" type="checkbox" value="" id="Jerusalem">
                <label for="Jerusalem" class="form-label" style="color: #191C1F">Jerusalem</label>
            </div>
            <div class="pe-4">
                <input class="form-check-input" type="checkbox" value="" id="South">
                <label for="South" class="form-label" style="color: #191C1F">South</label>
            </div>
        </div>

        <div class="row row-cols-1 mb-4">
            <div class="ps-4">
                <input class="form-check-input" type="checkbox" value="" id="Exclusivity">
                <label for="Exclusivity" class="form-label text-bolder" style="color: #191C1F">Exclusivity</label>

                <p style="color: #191C1F; font-size: 14px;" class="pe-4">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <div class="row row-cols-1 mb-4">
            <div class="ps-4">
                <input class="form-check-input" type="checkbox" value="" id="Exceptional_property">
                <label for="Exceptional_property" class="form-label text-bolder" style="color: #191C1F">Exceptional
                    property</label>

                <p style="color: #191C1F; font-size: 14px;" class="pe-4">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="row row-cols-1 mb-4">
            <div class="ps-4">
                <input class="form-check-input" type="checkbox" value="" id="Off_Market">
                <label for="Off_Market" class="form-label text-bolder" style="color: #191C1F">Off Market</label>

                <p style="color: #191C1F; font-size: 14px;" class="pe-4">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>


        <div class="row row-cols-2 mb-4">
            <div class="ps-4">
                <label for="Home_Type" class="form-label text-bold" style="color: #191C1F">Home Type</label>
                <select class="form-select custom-select" aria-label="Default select example" id="Home_Type">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <div class="row row-cols-2 mb-4">
            <div class="ps-4 d-flex align-items-center">
                <div class="">
                    <label for="Size" class="form-label text-bolder me-4" style="color: #191C1F">Size
                        sqm:</label>
                </div>
                <div class="">
                    <input type="text" class="form-control h-auto" id="Size" placeholder="">
                </div>
            </div>
            <div class="ps-4 d-flex align-items-center">
                <div class="">
                    <label for="Surface" class="form-label text-bolder me-4" style="color: #191C1F">Surface of the
                        Land sqm:</label>
                </div>
                <div class="">
                    <input type="text" class="form-control h-auto" id="Surface" placeholder="">
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-5">
                <div class="ps-4 d-flex align-items-center">
                    <div class="">
                        <label for="Asked" class="form-label text-bolder me-4" style="color: #191C1F">Asked
                            Price:</label>
                    </div>
                    <div class="">
                        <input type="text" class="form-control h-auto" id="Asked" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="ps-4 d-flex align-items-center">
                    <div class="">
                        <label for="Flexible" class="form-label text-bolder me-4"
                            style="color: #191C1F">Flexible:</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Flexible">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="ps-4 d-flex align-items-center">
                    <div class="">
                        <label for="Price_Upon_Request" class="form-label text-bolder me-4"
                            style="color: #191C1F">Price Upon Request:</label>
                    </div>
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Price_Upon_Request:">
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-2 mb-4">
            <div class="ps-4 d-flex align-items-center">
                <div class="">
                    <label for="Arnona" class="form-label text-bolder me-4" style="color: #191C1F">Arnona 2
                        months:</label>
                </div>
                <div class="">
                    <input type="text" class="form-control h-auto" id="Arnona" placeholder="">
                </div>
            </div>
            <div class="ps-4 d-flex align-items-center">
                <div class="">
                    <label for="Condominium" class="form-label text-bolder me-4" style="color: #191C1F">Condominium
                        Fees:</label>
                </div>
                <div class="">
                    <input type="text" class="form-control h-auto" id="Condominium" placeholder="">
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="ps-4">
                    <label for="Agent" class="form-label text-bold" style="color: #191C1F">Agent fees ch</label>
                    <input type="text" class="form-control" id="Agent" placeholder="">
                </div>
            </div>
            <div class="col-md-1 w-4">
                <div class="mt-4 pt-3">
                    <input class="form-check-input" type="checkbox" value="" id="North">
                </div>
            </div>
            <div class="col-md-5">
                <div class="">
                    <label for="agents" class="form-label text-bold" style="color: #191C1F">Share with other agents
                        (% Shared)</label>
                    <input type="text" class="form-control" id="agents" placeholder="">
                </div>
            </div>
        </div>

        <div class="card-body">
            <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Add Visibility Options:</h6>
        </div>
        <div class="row mb-4">
            <div class="col-md-2 ms-4">
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn btn-primary" for="btncheck1">Checkbox 1</label>
                </div>
            </div>
        </div>
    </div>
</x-agent.app>
