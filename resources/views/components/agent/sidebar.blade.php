<aside class="sidenav navbar border-top-0 navbar-vertical navbar-expand-xs  fixed-start  bg-white" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href="dashboard-2.html" target="_blank">
            <img src="{{ asset('agent-assets/img/logo-1.png') }}" class="navbar-brand-img" width="123" height="36"
                alt="main_logo">

        </a>
    </div>

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link  {{ request()->is('agent/dashboard') ? 'active' : '' }} text-dark"
                    href="{{ route('agent.dashboard.dashboard') }}">
                    <span class="material-symbols-rounded opacity-5">
                        speed
                    </span>

                    <span class="nav-link-text ms-1">Dashboards</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)"
                    class="nav-link text-dark {{ request()->is('agent/dashboard/properties*') ? 'collapsed' : '' }}"
                    data-bs-toggle="collapse" data-bs-target="#home-collapse"
                    aria-expanded="{{ request()->is('agent/dashboard/properties*') ? 'true' : 'false' }}">
                    <i class="material-symbols-rounded opacity-5">apartment</i>

                    <span class="nav-link-text ms-1">Propertices Management</span> <i class=" ms-2 fas fa-angle-down"
                        style="font-size: 10px"></i>
                </a>
                <div class="collapse {{ request()->is('agent/dashboard/properties*') ? 'show' : '' }}"
                    id="home-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ route('agent.dashboard.properties.create') }}"
                                class="nav-link ms-4  text-dark bg-white  {{ request()->is('agent/dashboard/properties/create') ? 'active' : '' }}">Add
                                Propertices</a></li>
                        <li><a href="{{ route('agent.dashboard.properties.index') }}"
                                class="nav-link ms-4  text-dark bg-white {{ request()->is('agent/dashboard/properties') ? 'active' : '' }}">Listed
                                Propertices</a></li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ request()->is('agent/dashboard/tour-reservation') ? 'active' : '' }} "
                    href="{{ route('agent.dashboard.tour.reservation') }}">
                    {{-- <i class="material-symbols-rounded opacity-5">receipt_long</i> --}}
                    <i class="material-symbols-rounded opacity-5">calendar_month</i>
                    <span class="nav-link-text ms-1">Tour Reservation</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link text-dark collapsed" data-bs-toggle="collapse"
                    data-bs-target="#home-collapse3"
                    aria-expanded="{{ request()->is('agent/dashboard/properties*') ? 'true' : 'false' }}">
                    <i class="material-symbols-rounded opacity-5">apartment</i>

                    <span class="nav-link-text ms-1">Agent Office Management </span> <i class=" ms-2 fas fa-angle-down"
                        style="font-size: 10px"></i>
                </a>

                <div class="collapse {{ request()->is('agent/dashboard/team_management') || request()->is('agent/dashboard/office-profile') ? 'show' : '' }}"
                    id="home-collapse3" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ route('agent.dashboard.office.profile') }}"
                                class="nav-link ms-4  text-dark bg-white {{ request()->is('agent/dashboard/office-profile') ? 'active' : '' }}">Office
                                Profile</a></li>
                        <li><a href="{{ route('agent.dashboard.team_management.index') }}"
                                class="nav-link ms-4  text-dark bg-white {{ request()->is('agent/dashboard/team_management') ? 'active' : '' }}">Team
                                Management</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('agent.dashboard.virtual.service') }}">
                    <i class="material-symbols-rounded opacity-5">other_houses</i>
                    <span class="nav-link-text ms-1">Virtual Home Staging</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ request()->is('agent/dashboard/visibilities') ? 'active' : '' }}"
                    href="{{ route('agent.dashboard.visibilities') }}">
                    <i class="material-symbols-rounded opacity-5">other_houses</i>
                    <span class="nav-link-text ms-1">Visibilities</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ request()->is('agent/dashboard/shared-search') ? 'active' : '' }}"
                    href="{{ route('agent.dashboard.shared-search.index') }}">
                    <i class="material-symbols-rounded opacity-5">other_houses</i>
                    <span class="nav-link-text ms-1">Shared Search</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('agent.dashboard.shared_properties.index') }}">
                    <i class="material-symbols-rounded opacity-5">other_houses</i>
                    <span class="nav-link-text ms-1">Shared Properties</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ request()->is('agent/dashboard/messages/*') ? 'active' : '' }}"
                    href="{{ route('agent.dashboard.messages') }}">
                    <i class="material-symbols-rounded opacity-5">forum</i>
                    <span class="nav-link-text ms-1">Messages</span>
                </a>
            </li>
            @if (auth()->user()->officeProfile)
                <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->is('agent/dashboard/affiliate') ? 'active' : '' }}"
                        href="{{ route('agent.dashboard.affiliate') }}">
                        <i class="material-symbols-rounded opacity-5">tenancy</i>

                        <span class="nav-link-text ms-1">Affiliate Links</span>
                    </a>
                </li>
            @endif
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link text-dark collapsed" data-bs-toggle="collapse"
                    data-bs-target="#home-collapse1" aria-expanded="false">
                    <i class="material-symbols-rounded opacity-5">apartment</i>

                    <span class="nav-link-text ms-1">Plan Management </span> <i class=" ms-2 fas fa-angle-down"
                        style="font-size: 10px"></i>
                </a>
                <div class="collapse  {{ request()->is('agent/dashboard/plan-management') || request()->is('agent/dashboard/invoices') ? 'show' : '' }}"
                    id="home-collapse1" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ route('agent.dashboard.plan.management') }}"
                                class="nav-link ms-4  text-dark bg-white {{ request()->is('agent/dashboard/plan-management') ? 'active' : '' }}">Plan
                                Management</a></li>
                        <li><a href="{{ route('agent.dashboard.invoices') }}"
                                class="nav-link ms-4  text-dark bg-white {{ request()->is('agent/dashboard/invoices') ? 'active' : '' }}">Invoices</a>
                        </li>

                    </ul>
                </div>
            </li>

        </ul>
    </div>

</aside>
