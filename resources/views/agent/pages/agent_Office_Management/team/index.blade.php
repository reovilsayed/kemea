<x-agent.app>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
      <h4 class="greading">Team Management</h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class=" text-primary fw-bold text-decoration-underline"
              href="{{ route('agent.dashboard.properties.index') }}">Dashboard</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Team Management</li>
        </ol>
      </nav>
    </div>
    <div class="row align-items-center">


    </div>

    <div class="row">
      <div class="col-12">
        <div class="card my-4 px-4">
          <div class="card-body px-0 pb-2 pt-0">
            <div class="d-flex justify-content-between w-100">
              <p class="text-bolder text-secondary mt-5">Agents list: ({{ $team_management->count() }})</p>
              <div class="mt-4">
                <a href="{{ route('agent.dashboard.team_management.create') }}" class="btn btn-primary px-4 py-2"> New Agent +
                </a>
              </div>
            </div>
            <form action="{{ route('agent.dashboard.team_management.index') }}" method="get">
              <div class="input-group mb-3">
                <div class="d-flex w-100">
                  <div>
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="material-symbols-rounded opacity-5">search</i>

                      </span>
                    </div>
                    <input type="text" name="search" class="form-control search-custom-radius" value="{{ request('search') }}" placeholder="Search Agent "
                      style="padding-left: 35px !important">
                  </div>
                  <div>
                    <button class="btn btn-primary ms-3 " type="submit" style="height:41px; width: 100px;">search
                    </button>
                  </div>
                </div>

              </div>
            </form>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead class="t-head">
                  <tr>
                    <th class="text-dark custom-text padding-custom ps-3">
                      Agent Name</th>
                    <th class=" text-dark custom-text padding-custom">
                      Address</th>
                    <th class="text-center text-dark custom-text padding-custom">
                      Email</th>
                    <th class="text-center text-dark custom-text  padding-custom">
                      Contact</th>
                    <th class="text-center text-dark custom-text  padding-custom">
                      Action</th>



                  </tr>
                </thead>
                <tbody>
                  @foreach ($team_management as $team)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="{{ asset('agent-assets/img/team-2.jpg') }}"
                            class="avatar avatar-sm me-2 border-radius-circle" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <p class="text-xs font-weight-bold mb-0">{{ $team->first_name }} {{ $team->last_name }}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs mb-0">{{ $team->address }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <p class="text-xs mb-0">{{ $team->email }}</p>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs mb-0">{{ $team->phone }}</p>
                    </td>
                    <td class="text-center">
                      <div class="d-flex justify-content-center align-items-center">
                        <a href="{{ route('agent.dashboard.team_management.edit', $team->id) }}" class="btn btn-custom-info me-1">
                        <i class="material-symbols-rounded ">
                        </a>
                        <form action="{{ route('agent.dashboard.team_management.destroy', $team->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-custom-danger me-1">
                            <i class="fa-solid fa-trash-can"></i>
                          </button>
                        </form>
                      </div>
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

</x-agent.app>