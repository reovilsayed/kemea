<x-agent.app>
    <div class="container  padding-xxl">
        <div class="d-md-flex justify-content-between  ">

            <h4 class="greading"> Shared Searches</h4>
            <div class="d-none d-md-flex align-items-center ">
                <a href="#" class="text-decoration-none fw-bold"
                    style="color: #0666EB; font-size: 14px; border-bottom: 1px solid #0666EB;">
                    Dashboard
                </a>
                <img src="{{ asset('agent-assets/img/Icon.svg') }}" alt="Icon" class="mx-2">
                <span style="font-size: 14px;">Shared Properties & Searches</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="">
                    <div class="card  my-4 px-4">
                        <div class="card-body">
                            <h4 class="text-bold text-primary" style="font-size: 18px; color: #191C1F;">Shared Searches
                            </h4>
                            <p class=" text-dark">Lorem ipsum dolor sit amet, Veritatis omnis sit eius unde sunt libero
                                ad
                                perferendis, reiciendis ut eveniet voluptate doloremque nemo error quis!</p>
                            <div class="row mb-4">
                                <div class="col-md-12 col-12">
                                    <label for="Property_for" class="form-label text-bold"
                                        style="color: #191C1F">Filters</label>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <label for="Property_for" class="form-label text-bold"
                                                style="color: #191C1F">Buy/Rent</label>
                                            <select class="form-select custom-select"
                                                aria-label="Default select example" id="Property_for">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="Property_for" class="form-label text-bold"
                                                style="color: #191C1F">City</label>
                                            <select class="form-select custom-select"
                                                aria-label="Default select example" id="Property_for">
                                                <option selected>City Name</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="Property_for" class="form-label text-bold"
                                                style="color: #191C1F">Property
                                                Type</label>
                                            <select class="form-select custom-select"
                                                aria-label="Default select example" id="Property_for">
                                                <option selected>House</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <label for="Property_for" class="form-label text-bold"
                                                style="color: #191C1F">Bedrooms</label>
                                            <select class="form-select custom-select"
                                                aria-label="Default select example" id="Property_for">
                                                <option selected>1+</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="Property_for" class="form-label text-bold"
                                                style="color: #191C1F">Budget</label>
                                            <select class="form-select custom-select"
                                                aria-label="Default select example" id="Property_for">
                                                <option selected>Min Budget</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="Property_for" class="form-label text-bold"
                                                style="color: #191C1F">Date of
                                                Entry</label>
                                            <select class="form-select custom-select"
                                                aria-label="Default select example" id="Property_for">
                                                <option selected>25-05-2025</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <label for="city" class="form-label text-bold"
                                                style="color: #191C1F">Commend</label>
                                            <input type="text" class="form-control" id="city" placeholder="">
                                        </div>
                                        <div class="col-4">
                                            <div class="row mt-4 justify-content-end">
                                                <div class="col-5 pt-3  d-flex justify-content-center">
                                                    <button type="button"
                                                        class="btn btn-secondary w-90 m-0">Cancel</button>
                                                </div>
                                                <div class="col-5 pt-3  d-flex justify-content-center">
                                                    <button type="button"
                                                        class="btn btn-primary w-90 m-0">Add</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <h4 class="text-bold " style="font-size: 18px; color: #191C1F;">My Searches</h4>
                            <div class="col-md-6 mb-4">
                                <label for="Property_for" class="form-label text-bold" style="color: #191C1F">Search
                                    Type</label>
                                <select class="form-select custom-select" aria-label="Default select example"
                                    id="Property_for">
                                    <option selected>Buy</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="table-responsive p-0 border border-radius-2xl">
                                    <table class="table align-items-center mb-0">
                                        <thead class="t-head">
                                            <tr>
                                                <th class="text-dark custom-text padding-custom ps-4">
                                                    City</th>
                                                <th class=" text-dark custom-text padding-custom">
                                                    Property Type</th>
                                                <th class="text-dark custom-text padding-custom">
                                                    Search Type</th>
                                                <th class="text-dark custom-text  padding-custom">
                                                    Budget</th>
                                                <th class="text-center text-dark custom-text  padding-custom">
                                                    Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fs-6 text-xs fw-bold px-4">
                                                    Miami
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Apartment
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Buy
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    $9876
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="" class="btn btn-custom-info me-1"> <i
                                                                class="material-symbols-rounded ">
                                                                colorize</i></a>
                                                        <a href="" class="btn btn-custom-danger me-1"> <i
                                                                class="fa-solid fa-trash-can"></i></a>
                                                        <a href="" class="btn btn-custom-primary"> <i
                                                                class="material-symbols-rounded ">
                                                                arrow_forward</i></a>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="fs-6 text-xs fw-bold px-4">
                                                    Miami
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Apartment
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Buy
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    $9876
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="" class="btn btn-custom-info me-1"> <i
                                                                class="material-symbols-rounded ">
                                                                colorize</i></a>
                                                        <a href="" class="btn btn-custom-danger me-1"> <i
                                                                class="fa-solid fa-trash-can"></i></a>
                                                        <a href="" class="btn btn-custom-primary"> <i
                                                                class="material-symbols-rounded ">
                                                                arrow_forward</i></a>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="fs-6 text-xs fw-bold px-4">
                                                    Miami
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Apartment
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Buy
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    $9876
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="" class="btn btn-custom-info me-1"> <i
                                                                class="material-symbols-rounded ">
                                                                colorize</i></a>
                                                        <a href="" class="btn btn-custom-danger me-1"> <i
                                                                class="fa-solid fa-trash-can"></i></a>
                                                        <a href="" class="btn btn-custom-primary"> <i
                                                                class="material-symbols-rounded ">
                                                                arrow_forward</i></a>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="fs-6 text-xs fw-bold px-4">
                                                    Miami
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Apartment
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Buy
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    $9876
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="" class="btn btn-custom-info me-1"> <i
                                                                class="material-symbols-rounded ">
                                                                colorize</i></a>
                                                        <a href="" class="btn btn-custom-danger me-1"> <i
                                                                class="fa-solid fa-trash-can"></i></a>
                                                        <a href="" class="btn btn-custom-primary"> <i
                                                                class="material-symbols-rounded ">
                                                                arrow_forward</i></a>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            <h4 class="text-bold py-4 " style="font-size: 18px; color: #191C1F;">Other Searches</h4>
                            <div class="table-responsive p-0 border border-radius-2xl">
                                    <table class="table align-items-center mb-0">
                                        <thead class="t-head">
                                            <tr>
                                                <th class="text-dark custom-text padding-custom ps-4">
                                                    City</th>
                                                <th class=" text-dark custom-text padding-custom">
                                                    Property Type</th>
                                                <th class="text-dark custom-text padding-custom">
                                                    Search Type</th>
                                                <th class="text-dark custom-text  padding-custom">
                                                    Budget</th>
                                                <th class="text-center text-dark custom-text  padding-custom">
                                                    Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fs-6 text-xs fw-bold px-4">
                                                    Miami
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Apartment
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Buy
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    $9876
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="" class="btn btn-custom-info me-1"> <i
                                                                class="material-symbols-rounded ">
                                                                colorize</i></a>
                                                        <a href="" class="btn btn-custom-danger me-1"> <i
                                                                class="fa-solid fa-trash-can"></i></a>
                                                        <a href="" class="btn btn-custom-primary"> <i
                                                                class="material-symbols-rounded ">
                                                                arrow_forward</i></a>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="fs-6 text-xs fw-bold px-4">
                                                    Miami
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Apartment
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Buy
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    $9876
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="" class="btn btn-custom-info me-1"> <i
                                                                class="material-symbols-rounded ">
                                                                colorize</i></a>
                                                        <a href="" class="btn btn-custom-danger me-1"> <i
                                                                class="fa-solid fa-trash-can"></i></a>
                                                        <a href="" class="btn btn-custom-primary"> <i
                                                                class="material-symbols-rounded ">
                                                                arrow_forward</i></a>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="fs-6 text-xs fw-bold px-4">
                                                    Miami
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Apartment
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Buy
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    $9876
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="" class="btn btn-custom-info me-1"> <i
                                                                class="material-symbols-rounded ">
                                                                colorize</i></a>
                                                        <a href="" class="btn btn-custom-danger me-1"> <i
                                                                class="fa-solid fa-trash-can"></i></a>
                                                        <a href="" class="btn btn-custom-primary"> <i
                                                                class="material-symbols-rounded ">
                                                                arrow_forward</i></a>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="fs-6 text-xs fw-bold px-4">
                                                    Miami
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Apartment
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    Buy
                                                </td>
                                                <td class="ps-0 text-xs fw-bold">
                                                    $9876
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="" class="btn btn-custom-info me-1"> <i
                                                                class="material-symbols-rounded ">
                                                                colorize</i></a>
                                                        <a href="" class="btn btn-custom-danger me-1"> <i
                                                                class="fa-solid fa-trash-can"></i></a>
                                                        <a href="" class="btn btn-custom-primary"> <i
                                                                class="material-symbols-rounded ">
                                                                arrow_forward</i></a>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-agent.app>
