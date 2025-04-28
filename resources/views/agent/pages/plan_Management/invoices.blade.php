<x-agent.app>
  <div class="container  padding-xxl">
    <div class="d-md-flex justify-content-between  ">

      <h4 class="greading"> Invoices</h4>
      <div class="d-none d-md-flex align-items-center ">
        <a href="#" class="text-decoration-none fw-bold"
          style="color: #0666EB; font-size: 14px; border-bottom: 1px solid #0666EB;">
          Dashboard
        </a>
        <img src="{{ asset('agent-assets/img/Icon.svg') }}" alt="Icon" class="mx-2">
        <span style="font-size: 14px;">Invoices & Billing</span>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form action="" method="">
          <div class="card  my-4 px-4">
            <div class="card-body">
              <h4 class="text-bold text-primary" style="font-size: 18px; color: #191C1F;">Shared Searches
              </h4>
              <p class=" text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto distinctio
                repellat assumenda reiciendis a numquam minima doloribus accusamus sapiente soluta animi ut vero
                reprehenderit eum, laboriosam tenetur pariatur quaerat possimus quos quam esse rem eos. Eveniet
                explicabo minus tempore laborum labore tenetur, quae, quam sequi optio corrupti porro assumenda odit.
              </p>


              <div class="table-responsive p-0 border border-radius-2xl">
                @if($charges->count()> 0)
                <table class="table align-items-center mb-0">
                  <thead class="t-head">
                    <tr>
                      <th class="text-dark custom-text padding-custom ps-4">
                        Date</th>

                      <th class="text-dark custom-text padding-custom">
                        Amount ($)</th>

                      <th class="text-center text-dark custom-text  padding-custom">
                        Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($charges as $charge)
                        
                    <tr>
                      <td class="fs-6 text-xs fw-bold px-4">
                        {{$charge->created_at->format('Y-m-d')}}
                      </td>

                      <td class="ps-0 text-xs fw-bold">
                        {{Sohoj::price($charge->total)}}
                      </td>

                      <td class="d-flex justify-content-center align-items-center">
                        <div class="btn btn-primary">Download
                          <i class="fa-solid fa-download"></i>
                        </div>
                      </td>

                    </tr>
                    @endforeach

                  </tbody>
     
                </table>
                @else
                <p class="text-center text-danger">Data not found</p>
                @endif
              </div>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


</x-agent.app>