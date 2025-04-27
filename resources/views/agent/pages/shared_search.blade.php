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

                <div class="card  my-4 px-4">
                    <div class="card-body">
                        <h4 class="text-bold text-primary" style="font-size: 18px; color: #191C1F;">Shared Searches
                        </h4>
                        <p class=" text-dark">Lorem ipsum dolor sit amet, Veritatis omnis sit eius unde sunt libero
                            ad
                            perferendis, reiciendis ut eveniet voluptate doloremque nemo error quis!</p>

                        <form action="{{ route('agent.dashboard.shared-search.store') }}" method="POST">
                            @csrf
                            @include('agent.pages.partials.search_form', ['search' => $search])
                        </form>

                        <h4 class="text-bold " style="font-size: 18px; color: #191C1F;">My Searches</h4>
                        <div class="col-md-6 mb-4">
                            <label for="Property_for" class="form-label text-bold" style="color: #191C1F">Search
                                Type</label>
                            <select class="form-select custom-select" aria-label="Default select example"
                                id="Property_for" onchange="updateUrl()">
                                <option selected >Choose</option>
                                <option value="Buy" {{request()->property_for =='Buy' ? 'Selected' : ''}}>Buy</option>
                                <option value="Rent" {{request()->property_for =='Rent' ? 'Selected' : ''}}>Rent</option>
                                <option value="Sell" {{request()->property_for =='Sell' ? 'Selected' : ''}}>Sell</option>
                            </select>
                        </div>
                        @include('agent.pages.partials.search_table', [
                            'searches' => $myOwnSearches,
                            'type' => 'own',
                        ])
                        <h4 class="text-bold py-4 " style="font-size: 18px; color: #191C1F;">Other Searches</h4>
                        @include('agent.pages.partials.search_table', [
                            'searches' => $otherSearches,
                            'type' => 'others',
                        ])
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function updateUrl() {
            var selectedValue = document.getElementById("Property_for").value; // Get selected value
            var currentUrl = window.location.href.split('?')[0]; // Get current URL without query params
            var newUrl = currentUrl + '?property_for=' + selectedValue; // Append the selected value as query parameter

            window.location.href = newUrl; // Redirect to the new URL
        }
    </script>

</x-agent.app>
