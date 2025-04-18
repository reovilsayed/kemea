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

    .VirtualText {
      font-size: 18px;
      line-height: 24.8px;
    }
  </style>
  <div class="container padding-xxl">
    <div class="d-flex justify-content-between">
      <h4 class="greading">Visibilities</h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class=" text-primary fw-bold text-decoration-underline"
              href="{{ route('agent.dashboard.properties.index') }}">Dashboard</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Visibilities</li>
        </ol>
      </nav>
    </div>
    <div class="row align-items-center">


    </div>

    <div class="row">
      <div class="col-12">
        <div class="card my-4 px-4">

          <div class="card-body px-0 pb-2 pt-0">
              <p class="text-bolder text-dark mt-5">Home Staging Services</p>
              <p class="text-dark VirtualText mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero minus
                consectetur odio, magnam atque earum
                ducimus nemo neque! Sed, rerum. Natus optio sint labore at ullam rerum laboriosam ratione asperiores
                eaque,
                commodi sapiente! Impedit, et doloribus! Delectus quos omnis suscipit possimus alias maxime odit fugiat
                rem
                itaque? Autem, sapiente velit excepturi voluptate consequuntur possimus illo facilis quod ad at natus
                architecto facere quae, maxime debitis sed amet numquam soluta totam. Quo iste sapiente vero nemo porro
                nesciunt est consectetur eum autem nobis laboriosam, sunt at ducimus dolorum saepe reiciendis a eligendi
                ipsam
                assumenda veritatis quaerat esse in impedit! Qui adipisci et reprehenderit eius. Totam modi sapiente
                cupiditate culpa iure quo, voluptatem temporibus! Impedit eum cum odio harum esse quam iste soluta velit
                magni
                voluptate dolores maiores pariatur enim aliquam
                itaque? Autem, sapiente velit excepturi voluptate consequuntur possimus illo facilis quod ad at natus
                architecto facere quae, maxime debitis sed amet numquam soluta totam. Quo iste sapiente vero nemo porro
                nesciunt est consectetur eum autem nobis laboriosam, sunt at ducimus dolorum saepe reiciendis a eligendi
                ipsam
                assumenda veritatis quaerat esse in impedit! Qui adipisci et reprehenderit eius. Totam modi sapiente
                cupiditate culpa iure quo, voluptatem temporibus! Impedit eum cum odio harum esse quam iste soluta velit
                magni
                voluptate dolores maiores pariatur enim aliquam,</p>
              <p class="text-bolder text-dark mt-5">Properties</p>

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
                            class="avatar avatar-sm me-2 border-radius-circle" alt="user1">
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
                      <button disabled href="" class="btn btn-custom-primary"> <i
                      class="material-symbols-rounded "> arrow_forward</i></button>
                      </p>
                    </td>
                    

                  </tr>

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="{{ asset('agent-assets/img/team-2.jpg') }}"
                            class="avatar avatar-sm me-2 border-radius-circle" alt="user1">
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
                      <button href="" class="btn btn-custom-primary"> <i
                      class="material-symbols-rounded "> arrow_forward</i></button>
                      </p>
                    </td>
                    

                  </tr>

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="{{ asset('agent-assets/img/team-2.jpg') }}"
                            class="avatar avatar-sm me-2 border-radius-circle" alt="user1">
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
                      <button href="" class="btn btn-custom-primary"> <i
                      class="material-symbols-rounded "> arrow_forward</i></button>
                      </p>
                    </td>
                    

                  </tr>

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="{{ asset('agent-assets/img/team-2.jpg') }}"
                            class="avatar avatar-sm me-2 border-radius-circle" alt="user1">
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
                      <button disabled href="" class="btn btn-custom-primary"> <i
                      class="material-symbols-rounded "> arrow_forward</i></button>
                      </p>
                    </td>
                    

                  </tr>

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="{{ asset('agent-assets/img/team-2.jpg') }}"
                            class="avatar avatar-sm me-2 border-radius-circle" alt="user1">
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
                      <button href="" class="btn btn-custom-primary"> <i
                      class="material-symbols-rounded "> arrow_forward</i></button>
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