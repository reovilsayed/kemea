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

                        <form action="{{ route('agent.dashboard.shared-search.update',$search) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @include('agent.pages.partials.search_form', ['search' => $search])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-agent.app>
