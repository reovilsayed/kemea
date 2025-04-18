<x-agent.app>
    <style>
        .btn-g-custom {
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 14px !important;
            font-weight: 500
        }

        .badge-light {
            background-color: #ffff;
            color: #8486A7;
            padding: 10px 20px;
            border-radius: 5px;
            border: 1px solid #8486A7 !important;
        }

        .btn-main {
            padding: 8px 10px
        }

        .btn-group {
            display: inline;
        }
    </style>
    <div class="container padding-xxl">
        <div class="d-flex justify-content-between">
            <h4 class="greading">Property Listings</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class=" text-primary fw-bold text-decoration-underline"
                            href="{{ route('agent.dashboard.properties.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Property Listings</li>
                </ol>
            </nav>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mt-3">

                <div class="input-group input-group-outline">

                    <div class="input-group mb-3 " style="flex-direction: column">
                        <form action="" method="get" class="">
                            <div class="input-group-prepend">
                                <button type="submit" class="input-group-text" id="basic-addon1">
                                    <i class="material-symbols-rounded opacity-5">search</i>

                                </button>
                            </div>
                            <input type="text" class="form-control p-3 w-100" placeholder="Search.."
                                style="padding-left: 35px !important" onfocus="focused(this)"
                                onfocusout="defocused(this)">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">

                <div class="d-flex justify-content-md-between flex-wrap">
                    <div class="btn-group is-filled mt-3" role="group"
                        aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                        <label class="btn btn-primary text-xs badge-primary btn-g-custom mb-0"
                            for="btncheck1">Sell</label>
                    </div>
                    <div class="btn-group is-filled mt-3" role="group"
                        aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                        <label class="btn btn-primary text-xs badge-light mb-0" for="btncheck2">Rent</label>
                    </div>
                    <div class="btn-group is-filled mt-3" role="group"
                        aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                        <label class="btn btn-primary text-xs badge-light mb-0" for="btncheck3">Short term</label>
                    </div>
                    <div class="btn-group is-filled mt-3" role="group"
                        aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                        <label class="btn btn-primary text-xs badge-light mb-0" for="btncheck4">New project</label>
                    </div>
                    <div class="btn-group is-filled mt-3 ms-2 ms-md-0">
                        <button type="submit" class="btn btn-main btn-primary">Search</button>
                    </div>
                </div>



            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-body px-0 pb-2 pt-0">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead class="t-head">
                                    <tr>
                                        <th class="text-dark custom-text padding-custom ps-3">
                                            Properties</th>
                                        <th class=" text-dark custom-text padding-custom">
                                            Listing Type</th>
                                        <th class="text-center text-dark custom-text padding-custom">
                                            Details</th>
                                        <th class="text-center text-dark custom-text  padding-custom">
                                            Status</th>
                                        <th class="text-center text-dark custom-text  padding-custom">
                                            Visibility Status</th>
                                        <th class="text-center text-dark custom-text  padding-custom">
                                            Home Staging</th>
                                        <th class="text-center text-dark custom-text  padding-custom">
                                            Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="{{ asset('agent-assets/img/team-2.jpg') }}"
                                                        class="avatar avatar-sm me-2 border-radius-circle"
                                                        alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">

                                                    <p class="text-xs font-weight-bold mb-0">Property Name</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs  mb-0 text-primary">Sell</p>

                                        </td>
                                        <td class="align-middle text-center text-sm">

                                            <p class="text-xs  mb-0">City: New York, ID: 123</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs  mb-0 "> <span style="font-size: 8px">🟢</span> Updated
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs  mb-0 "><span class="badge-primary">New</span> </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs  mb-0 "><a href="" class="text-primary">+Add
                                                    Staging Service</a> </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs  mb-0 ">
                                                <a href="" class="btn btn-custom-primary"> <i
                                                        class="material-symbols-rounded "> arrow_forward</i></a>
                                                <a href="" class="btn btn-custom-info"> <i
                                                        class="material-symbols-rounded "> colorize</i></a>
                                                <a href="" class="btn btn-custom-danger"> <i
                                                        class="material-symbols-rounded "> colorize</i></a>

                                            </p>

                                        </td>

                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href=""> <span class="btn btn-primary text-xs badge-primary btn-g-custom mb-0 me-3"
                        for="btncheck1">Drafts</span></a>
                <a href="{{ route('agent.dashboard.properties.create') }}"> <span class="btn btn-primary text-xs  btn-g-custom mb-0"
                        for="btncheck1">+Add New Property</span></a>

            </div>
        </div>
    </div>

</x-agent.app>
