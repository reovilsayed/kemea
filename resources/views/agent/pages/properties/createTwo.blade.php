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
            Add New Property - Step 1/3
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
                <h4 class="text-bold" style="font-size: 18px; color: #191C1F;">Basic Information:</h4>

                <div class="row mb-4">
                    <div class="col-md-6 col-12">
                        <label for="Property_for" class="form-label text-bold" style="color: #191C1F">Property
                            for:</label>
                        <select class="form-select custom-select" aria-label="Default select example" id="Property_for">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>


                <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Property Address:</h6>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <label for="city" class="form-label text-bold" style="color: #191C1F">City :</label>
                        <input type="text" class="form-control" id="city" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <label for="Street" class="form-label text-bold" style="color: #191C1F">Street:</label>
                        <input type="text" class="form-control" id="Street" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <label for="Number" class="form-label text-bold" style="color: #191C1F">Number:</label>
                        <input type="number" class="form-control" id="Number" placeholder="00">
                    </div>
                </div>


                <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Show the address in the ad:</h6>

                <div class="row mb-4">
                    <div class="col-md-2 col-3">
                        <input class="form-check-input" type="checkbox" value="" id="Yes">
                        <label for="Yes" class="form-label" style="color: #191C1F">Yes</label>
                    </div>
                    <div class="col-md-2 col-3">
                        <input class="form-check-input" type="checkbox" value="" id="no">
                        <label for="no" class="form-label" style="color: #191C1F">No</label>
                    </div>
                    <div class="col-md-5 col-6">
                        <input class="form-check-input" type="checkbox" value="" id="Without">
                        <label for="Without" class="form-label" style="color: #191C1F">Without the street
                            number</label>
                    </div>
                </div>


                <div class="row row-cols-1 mb-4">
                    <div class="">
                        <label for="Property_for" class="form-label text-bold"
                            style="color: #191C1F">Neighborhood/Quarter</label>
                        <input type="text" class="form-control" id="city" placeholder="">
                    </div>
                </div>


                <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Area Selection:</h6>

                <div class="row mb-4">
                    <div class="col-md-3 col-6">
                        <input class="form-check-input" type="checkbox" value="" id="North">
                        <label for="North" class="form-label" style="color: #191C1F">North</label>
                    </div>
                    <div class="col-md-3 col-6">
                        <input class="form-check-input" type="checkbox" value="" id="Center">
                        <label for="Center" class="form-label" style="color: #191C1F">Center</label>
                    </div>
                    <div class="col-md-3 col-6">
                        <input class="form-check-input" type="checkbox" value="" id="Jerusalem">
                        <label for="Jerusalem" class="form-label" style="color: #191C1F">Jerusalem</label>
                    </div>
                    <div class="col-md-3 col-6">
                        <input class="form-check-input" type="checkbox" value="" id="South">
                        <label for="South" class="form-label" style="color: #191C1F">South</label>
                    </div>
                </div>

                <div class="row row-cols-1 mb-4">
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Exclusivity">
                        <label for="Exclusivity" class="form-label text-bolder"
                            style="color: #191C1F">Exclusivity</label>

                        <p style="color: #191C1F; font-size: 14px;" class="">Lorem ipsum dolor sit amet,
                            consectetur
                            adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            aliquip ex ea commodo consequat.</p>
                    </div>
                </div>

                <div class="row row-cols-1 mb-4">
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Exceptional_property">
                        <label for="Exceptional_property" class="form-label text-bolder"
                            style="color: #191C1F">Exceptional
                            property</label>

                        <p style="color: #191C1F; font-size: 14px;" class="">Lorem ipsum dolor sit amet,
                            consectetur
                            adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="row row-cols-1 mb-4">
                    <div class="">
                        <input class="form-check-input" type="checkbox" value="" id="Off_Market">
                        <label for="Off_Market" class="form-label text-bolder" style="color: #191C1F">Off
                            Market</label>

                        <p style="color: #191C1F; font-size: 14px;" class="">Lorem ipsum dolor sit amet,
                            consectetur
                            adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi
                            ut
                            aliquip ex ea commodo consequat.</p>
                    </div>
                </div>


                <div class="row mb-4">
                    <div class="col-md-6 col-12">
                        <label for="Home_Type" class="form-label text-bold" style="color: #191C1F">Home Type</label>
                        <select class="form-select custom-select" aria-label="Default select example" id="Home_Type">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4 col-12">
                        <div class=" d-md-flex align-items-center">
                            <label for="Size" class="form-label text-bolder w-md-25" style="color: #191C1F">Size
                                sqm:</label>
                            <input type="text" class="form-control w-md-60" id="Size" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class=" d-md-flex align-items-center">
                            <label for="Surface" class="form-label text-bolder w-md-40"
                                style="color: #191C1F">Surface
                                of
                                the
                                Land sqm:</label>

                            <input type="text" class="form-control w-md-35" id="Surface" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-5 col-12">
                        <div class="d-md-flex align-items-center">
                            <label for="Asked" class="form-label text-bolder w-md-25" style="color: #191C1F">Asked
                                Price:</label>
                            <input type="text" class="form-control h-auto" id="Asked" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-2 col-12 mt-3 mt-md-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="Flexible" class="form-label text-bolder me-4"
                                style="color: #191C1F; ">Flexible:</label>
                            <div class="">
                                <input class="form-check-input" type="checkbox" value="" id="Yes">
                                <label for="Yes" class="form-label" style="color: #191C1F">Yes</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 mt-3 mt-md-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="Price_Upon_Request" class="form-label text-bolder me-4"
                                style="color: #191C1F">Price
                                Upon Request:</label>
                            <div class="">
                                <input class="form-check-input" type="checkbox" value="" id="Yes1">
                                <label for="Yes1" class="form-label" style="color: #191C1F">Yes</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4 col-12">
                        <div class=" d-md-flex align-items-center">
                            <label for="Arnona" class="form-label text-bolder w-md-25"
                                style="color: #191C1F">Arnona 2
                                months:</label>
                            <input type="text" class="form-control w-md-60" id="Arnona" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class=" d-md-flex align-items-center">
                            <label for="Condominium" class="form-label text-bolder w-md-40"
                                style="color: #191C1F">Condominium
                                Fees:</label>

                            <input type="text" class="form-control w-md-35" id="Condominium" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="">
                            <label for="Agent" class="form-label text-bold" style="color: #191C1F">Agent fees
                                ch</label>
                            <input type="text" class="form-control" id="Agent" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="agents" class="form-label text-bold" style="color: #191C1F">Share with
                            other
                            agents
                            (% Shared)</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input class="form-check-input me-4" type="checkbox" value="" id="North">
                            <input type="text" class="form-control" id="agents" placeholder="">
                        </div>
                    </div>
                </div>


                <h6 class="text-bold" style="font-size: 14px; color: #191C1F;">Add Visibility Options:</h6>

                <div class="row mb-4">
                    <div class="col-md-auto col-6">
                        <div class="btn-group w-100" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-primary px-4 py-2" for="btncheck1">New Ad</label>
                        </div>
                    </div>
                    <div class="col-md-auto col-6">
                        <div class="btn-group w-100" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                            <label class="btn btn-primary px-4 py-2" for="btncheck2">Top Ad</label>
                        </div>
                    </div>
                    <div class="col-md-auto col-6">
                        <div class="btn-group w-100" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                            <label class="btn btn-primary px-4 py-2" for="btncheck3">Preferred Ad</label>
                        </div>
                    </div>
                    <div class="col-md-auto col-6">
                        <div class="btn-group w-100" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                            <label class="btn btn-primary px-md-4 py-2" for="btncheck4">Large Visibility</label>
                        </div>
                    </div>
                    <div class="col-md-auto col-6">
                        <div class="btn-group w-100" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                            <label class="btn btn-primary px-4 py-2" for="btncheck5"> Video First Ad</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="d-flex justify-content-end align-items-center p-4">
                    <button type="submit" class="btn btn-outline-primary px-4 me-4" style="font-size: 14px;"><img src="{{ asset('agent-assets/img/save.svg') }}" alt=""> Save Draft</button>
                    <a href="#" class="btn btn-primary px-4 py-2" style="font-size: 14px;">Next -></a>
                </div>
            </div>
        </div>
    </form>
</x-agent.app>
