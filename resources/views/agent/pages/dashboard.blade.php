<x-agent.app>
    <div class="container padding-xxl">
        <h4 class="greading">Welcome Back {{auth()->user()->name}} !</h4>
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
                        <h1 class="widget-total">{{$total_properties}}</h1>
                        {{-- <p class="widget-percent"><i class="material-symbols-rounded opacity-5">arrow_upward</i>76.89%
                        </p> --}}
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
                        <h1 class="widget-total">{{$total_properties_rent}}</h1>
                        {{-- <p class="widget-percent"><i class="material-symbols-rounded opacity-5">arrow_upward</i>76.89%
                        </p> --}}
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
                        <h1 class="widget-total">{{$total_properties_sell}}</h1>
                        {{-- <p class="widget-percent"><i class="material-symbols-rounded opacity-5">arrow_upward</i>76.89%
                        </p> --}}
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
                        <h1 class="widget-total">{{Sohoj::price($total_revenue)}}</h1>
                        {{-- <p class="widget-percent"><i class="material-symbols-rounded opacity-5">arrow_upward</i>76.89%
                        </p> --}}
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
                            <a href="{{ route('agent.dashboard.properties.create') }}" class="btn btn-primary">+Add New Property</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2 pt-0">
                        <div class="table-responsive p-0">
                            @if($properties->count() > 0)
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
                                    @foreach ($properties as $property)
                                    {{-- @dd($properties) --}}
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="{{ Storage::url($property->property_meta->property_photo ?? '') }}"
                                                        class="avatar avatar-sm me-2 border-radius-circle"
                                                        alt="user1">
                                                </div>

                                                <div class="d-flex flex-column justify-content-center">

                                                    <p class="text-xs font-weight-bold mb-0"><span
                                                            class="badge-primary">{{ $property->property_type }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs  mb-0 text-primary">{{ $property->home_type }}</p>

                                        </td>
                                        <td class="align-middle text-center text-sm">

                                            <p class="text-xs  mb-0">City: {{ $property->city }}, Street:
                                                {{ $property->street }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs  mb-0 "> <span style="font-size: 8px">🟢</span>
                                                Updated
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            @if ($property->is_boosted)
                                          
                                                <p class="text-xs  mb-0 "><span
                                                        class="badge-primary">{{ $property->boost?->boostPrice?->name }}</span>
                                                </p>
                                            @else
                                                <p class="text-xs  mb-0 "><span class="badge-primary">New</span>
                                                </p>
                                            @endif
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs  mb-0 "><a href="" class="text-primary">+Add
                                                    Staging Service</a> </p>
                                        </td>
                                        <td class="align-middle text-center d-flex justify-content-around">
                                            <p class="text-xs  mb-0 ">
                                                <a href="" class="btn btn-custom-primary"> <i
                                                        class="fa-solid fa-copy"></i></a>
                                                <a href="{{ route('agent.dashboard.properties.edit', $property) }}"
                                                    class="btn btn-custom-info"> <i
                                                        class="fa-solid fa-pen-nib"></i></a>
                                            <div class="">
                                                <form
                                                    action="{{ route('agent.dashboard.properties.destroy', $property) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this property?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-custom-danger"
                                                        title="Delete Property">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            @if(!$property->is_boosted)
                                            <a href="javascript::void(0)" class="btn btn-custom-primary boost-button"
                                                data-bs-toggle="modal" data-bs-target="#boostModal"
                                                data-property-id="{{ $property->id }}">Boost</a>

                                            </p>
                                            @endif

                                        </td>

                                    </tr>
                                @endforeach
                              
                                </tbody>
                            </table>
                            @else
                            <p class="text-danger text-center">Properties not found</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-agent.app>
