<x-agent.app>
    <div class="container padding-xxl">
        <h4 class="greading">Welcome Back Jannie !</h4>
        <p class="greading-pera">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, molestias.</p>

        <div class="row " style="margin-top: 35px">
            <div class="col-md-3">
                <div class="card widget">
                    <div class="d-flex align-items-center">
                        <div class="icon-section">
                            <i class="material-symbols-rounded ">apartment</i>
                        </div>
                        <p class="widget-name">Total Propertices</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between widget-price-sec">
                        <h1 class="widget-total">2,854</h1>
                        <p class="widget-percent"><i class="material-symbols-rounded opacity-5">arrow_upward</i>76.89%
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card widget">
                    <div class="d-flex align-items-center">
                        <div class="icon-section">
                            <i class="material-symbols-rounded ">apartment</i>
                        </div>
                        <p class="widget-name">Properties for Rent</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between widget-price-sec">
                        <h1 class="widget-total">2,854</h1>
                        <p class="widget-percent"><i class="material-symbols-rounded opacity-5">arrow_upward</i>76.89%
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card widget">
                    <div class="d-flex align-items-center">
                        <div class="icon-section">
                            <i class="material-symbols-rounded ">apartment</i>
                        </div>
                        <p class="widget-name">Properties for Sale</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between widget-price-sec">
                        <h1 class="widget-total">2,854</h1>
                        <p class="widget-percent"><i class="material-symbols-rounded opacity-5">arrow_upward</i>76.89%
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card widget">
                    <div class="d-flex align-items-center">
                        <div class="icon-section">
                            <i class="material-symbols-rounded ">
                                currency_exchange

                            </i>
                        </div>
                        <p class="widget-name">Revenue</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between widget-price-sec">
                        <h1 class="widget-total">2,854</h1>
                        <p class="widget-percent"><i class="material-symbols-rounded opacity-5">arrow_upward</i>76.89%
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 ">
                        <div class=" border-radius-lg pt-4 pb-4 d-flex justify-content-between pe-4">
                            <h4 class="text-capitalize ps-3 table-heading">Property Listings</h4>
                            <a href="" class="btn btn-primary">+Add New Property</a>
                        </div>
                    </div>
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
        </div>
    </div>
</x-agent.app>
