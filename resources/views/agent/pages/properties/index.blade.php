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
        <form action="{{ route('agent.dashboard.properties.index') }}" method="GET" class="w-100">
            <div class="row align-items-center">
                <div class="col-md-6 mt-3">
                    <div class="input-group input-group-outline">
                        <div class="input-group mb-3" style="flex-direction: column">
                            <div class="input-group-prepend">
                                <button type="submit" class="input-group-text" id="basic-addon1">
                                    <i class="material-symbols-rounded opacity-5">search</i>
                                </button>
                            </div>
                            <input type="text" name="search" class="form-control p-3 w-100"
                                placeholder="Search ...." style="padding-left: 35px !important"
                                value="{{ request('search') }}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex justify-content-md-between flex-wrap">

                        @foreach (['Sell', 'Rent', 'Short-term', 'New Projects'] as $type)
                            <div class="btn-group is-filled mt-3" role="group">
                                <input type="checkbox" class="btn-check" id="btncheck_{{ $type }}"
                                    name="property_type[]" value="{{ $type }}"
                                    {{ in_array($type, (array) request('property_type')) ? 'checked' : '' }}>
                                <label class="btn btn-primary text-xs badge-light mb-0"
                                    for="btncheck_{{ $type }}">
                                    {{ $type }}
                                </label>
                            </div>
                        @endforeach

                        <div class="btn-group is-filled mt-3 ms-2 ms-md-0">
                            <button type="submit" class="btn btn-main btn-primary">Search</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>


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
                                            Home Type</th>
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
                                       
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1 align-items-center">
                                                    <div>
                                                        <img src="{{ Storage::url($property->property_meta_attachments?->property_photos[0] ) }}"
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
                            {{-- < <div class="d-flex justify-content- mt-3">
                                {{ $properties->links('pagination::bootstrap-5') }}
                            </div> --}}

                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href=""> <span class="btn btn-primary text-xs badge-primary btn-g-custom mb-0 me-3"
                        for="btncheck1">Drafts</span></a>
                <a href="{{ route('agent.dashboard.properties.create') }}"> <span
                        class="btn btn-primary text-xs  btn-g-custom mb-0" for="btncheck1">+Add New
                        Property</span></a>

            </div>
        </div>
    </div>

    <div class="modal fade" id="boostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('agent.dashboard.boost.store') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title">Property Boost</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="property_id" id="property_id">
                        @foreach ($boostPrices as $price)
                            <div class="form-check">
                                <input class="form-check-input" id="form-radio-{{ $price->id}}" type="radio"
                                    name="push_price_id" value="{{ $price->id }}" required>
                              

                                <label class="form-check-label" for="form-radio-{{ $price->id}}"><b>{{ $price->name }}</b> for
                                    <b>{{ Sohoj::price($price->price) }}</b></label>
                            </div>
                        @endforeach




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const boostButtons = document.querySelectorAll('.boost-button');
            
            const propertyInput = document.getElementById('property_id');

            boostButtons.forEach(button => {
                button.addEventListener('click', function() {
                
                    const propertyId = this.getAttribute('data-property-id');
                    propertyInput.value = propertyId;
                });
            });
        });
    </script>
</x-agent.app>
