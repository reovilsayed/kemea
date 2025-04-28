<x-agent.app>
    <div class="container padding-xxl">
        <div class="d-md-flex justify-content-between  ">

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
        <div class="row">
            <div class="col-12">

                <div class="card  my-4 px-4">
                    <div class="card-body">
                        <h4 class="text-bold text-primary" style="font-size: 18px; color: #191C1F;">Shared
                            Properties
                        </h4>
                        <p class=" text-dark">Lorem ipsum dolor sit amet, Veritatis omnis sit eius unde sunt libero
                            ad
                            perferendis, reiciendis ut eveniet voluptate doloremque nemo error quis!</p>
                        <form action="{{ route('agent.dashboard.shared_properties.store') }}" method="POST">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-md-12 col-12">
                                    <label for="" class="form-label text-bold"
                                        style="color: #191C1F">Filters</label>
                                    <div class="row mb-4">
                                        <!-- <div class="col-md-4">
                                            <label for="city" class="form-label text-bold"
                                                style="color: #191C1F">Search</label>
                                            <input type="Search" class="form-control" id="city" placeholder="Search">
                                        </div> -->
                                        <div class="col-md-4">
                                            <label for="buy_rent" class="form-label text-bold"
                                                style="color: #191C1F">Buy/Rent</label>
                                            <select class="form-select custom-select" name="buy_rent"
                                                aria-label="Default select example" id="buy_rent">
                                                <option selected disabled>Open this select menu</option>
                                                <option value="Buy">Buy</option>
                                                <option value="Rent">Rent</option>
                                                <option value="Sell">Sell</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="city" class="form-label text-bold"
                                                style="color: #191C1F">City</label>
                                            <input type="text" class="form-control" name="city" id="city">
                                        </div>
                                        <div class="col-4">
                                            <label for="date" class="form-label text-bold"
                                                style="color: #191C1F">Date of
                                                Entry</label>
                                            <input type="date" class="form-control" name="date" id="date">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <label for="Property_for" class="form-label text-bold"
                                                style="color: #191C1F">Property
                                                Type</label>
                                            <select class="form-select custom-select"
                                                aria-label="Default select example" name="property_type" id="Property_for">
                                                <option disabled selected>Open this select menu</option>
                                                <option value="Sell">Sell</option>
                                                <option value="Rent">Rent</option>
                                                <option value="Short-term">Short-term</option>
                                                <option value="New Projects">New Projects</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="badrooms" class="form-label text-bold"
                                                style="color: #191C1F">Bedrooms</label>
                                            <select class="form-select custom-select" name="badrooms"
                                                aria-label="Default select example" id="badrooms">
                                                <option selected disabled>Open this select menu</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5+</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="budget" class="form-label text-bold"
                                                style="color: #191C1F">Budget</label>
                                            <input type="number" class="form-control" name="budget" id="budget">
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button class="btn btn-primary px-4 py-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <h4 class="text-bold py-3 mt-1" style="font-size: 18px; color: #191C1F;">My Shared Properties</h4>
                        <div class="col-md-6 mb-4">
                            <label for="" class="form-label text-bold" style="color: #191C1F">Search
                                Type</label>
                            <select class="form-select custom-select" aria-label="Default select example"
                                id="">
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
                                            Buy/Rent</th>
                                        <th class="text-dark custom-text  padding-custom">
                                            Budget</th>
                                        <th class="text-dark custom-text  padding-custom">
                                            Bedrooms</th>
                                        <th class="text-center text-dark custom-text  padding-custom">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sharedProperty as $shared)
                                    <tr>
                                        <td class="fs-6 text-xs fw-bold px-4">
                                            {{ $shared->city }}
                                        </td>
                                        <td class="ps-0 text-xs fw-bold">
                                            {{ $shared->property_type }}
                                        </td>
                                        <td class="ps-0 text-xs fw-bold">
                                            {{ $shared->buy_rent }}
                                        </td>
                                        <td class="ps-0 text-xs fw-bold">
                                            ${{ number_format($shared->budget, 2) }}
                                        </td>
                                        <td class="ps-0 text-xs fw-bold">
                                            {{ $shared->badrooms }}
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a href="{{ route('agent.dashboard.shared_properties.edit', $shared->id) }}" class="btn btn-custom-info me-1">
                                                    <i class="material-symbols-rounded">colorize</i>
                                                </a>
                                                <form action="{{ route('agent.dashboard.shared_properties.destroy', $shared->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-custom-danger me-1" onclick="return confirm('Are you sure you want to delete this?')" type="submit">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                                <button class="btn btn-custom-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal" 
                        data-buy-rent="{{ $shared->buy_rent }}"
                        data-city="{{ $shared->city }}"
                        data-property-type="{{ $shared->property_type }}"
                        data-bedrooms="{{ $shared->badrooms }}"
                        data-budget="{{ number_format($shared->budget, 2) }}"
                        data-date-entry="{{ $shared->date }}">
                    <i class="material-symbols-rounded">arrow_forward</i>
                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>


                        <h4 class="text-bold py-3 mt-1 " style=" font-size: 18px; color: #191C1F;">Other Shared Properties</h4>
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
                                        <!-- <th class="text-center text-dark custom-text  padding-custom">
                                            Actions</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($otherSharedProperty as $other)
                                    <tr>
                                        <td class="fs-6 text-xs fw-bold px-4">
                                            {{ $other->city }}
                                        </td>
                                        <td class="ps-0 text-xs fw-bold">
                                            {{ $other->property_type }}
                                        </td>
                                        <td class="ps-0 text-xs fw-bold">
                                            {{ $other->buy_rent }}
                                        </td>
                                        <td class="ps-0 text-xs fw-bold">
                                            ${{ number_format($other->budget, 2) }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">My Shared Properties</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark text-dark fs-4"></i></button>
      </div>
      <div class="modal-body">
        <table class="table table-borderless">
        <tbody>
                <tr>
                  <th scope="row">Buy/Rent</th>
                  <td class="text-end" id="modal-buy-rent"></td>
                </tr>
                <tr>
                  <th scope="row">City</th>
                  <td class="text-end" id="modal-city"></td>
                </tr>
                <tr>
                  <th scope="row">Property Type</th>
                  <td class="text-end" id="modal-property-type"></td>
                </tr>
                <tr>
                  <th scope="row">Bedrooms</th>
                  <td class="text-end" id="modal-bedrooms"></td>
                </tr>
                <tr>
                  <th scope="row">Budget</th>
                  <td class="text-end" id="modal-budget"></td>
                </tr>
                <tr>
                  <th scope="row">Date of Entry</th>
                  <td class="text-end" id="modal-date-entry"></td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@push('scripts')
    <script>
        const modal = document.getElementById('exampleModal');
        modal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            document.getElementById('modal-buy-rent').textContent = button.getAttribute('data-buy-rent');
            document.getElementById('modal-city').textContent = button.getAttribute('data-city');
            document.getElementById('modal-property-type').textContent = button.getAttribute('data-property-type');
            document.getElementById('modal-bedrooms').textContent = button.getAttribute('data-bedrooms');
            document.getElementById('modal-budget').textContent = '$' + button.getAttribute('data-budget');
            document.getElementById('modal-date-entry').textContent = button.getAttribute('data-date-entry');
        });
    </script>
@endpush
</x-agent.app>