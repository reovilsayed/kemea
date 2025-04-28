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
                <option selected>Choose</option>
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
                <td class="text-end" id="modal-search_typet"></td>
              </tr>
              <tr>
                <th scope="row">Property Type</th>
                <td class="text-end" id="modal-property_type"></td>
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
                <th scope="row">City</th>
                <td class="text-end" id="modal-City"></td>
              </tr>
              <tr>
                <th scope="row">Date of Entry</th>
                <td class="text-end" id="modal-date_of_entry"></td>
              </tr>
            </tbody>
          </table>
          <p id="modal-comment"></P>
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

  <script>
    const modal = document.getElementById('exampleModal');
    modal.addEventListener('show.bs.modal', function(event) {
      const button = event.relatedTarget;
      document.getElementById('modal-search_typet').textContent = button.getAttribute('data-search_type');
      document.getElementById('modal-property_type').textContent = button.getAttribute('data-property_type');
      document.getElementById('modal-bedrooms').textContent = button.getAttribute('data-bedrooms');
      document.getElementById('modal-budget').textContent = '$' + button.getAttribute('data-budget');
      document.getElementById('modal-date_of_entry').textContent = button.getAttribute('data-date_of_entry');
      document.getElementById('modal-City').textContent = button.getAttribute('data-city');
      document.getElementById('modal-comment').textContent = button.getAttribute('data-comment');
    });
  </script>

</x-agent.app>