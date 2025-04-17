<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{{ asset('agent-assets/img/favicon-1.png') }}">
    <title>
        Kemea
    </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link id="pagestyle" href="{{ asset('agent-assets/css/style.css') }}" rel="stylesheet" />




</head>

<body class="g-sidenav-show  bg-gray-100">


    <aside class="sidenav navbar border-top-0 navbar-vertical navbar-expand-xs  fixed-start  bg-white"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand px-4 py-3 m-0" href="dashboard-2.html" target="_blank">
                <img src="{{ asset('agent-assets/img/logo-1.png') }}" class="navbar-brand-img" width="123"
                    height="36" alt="main_logo">

            </a>
        </div>

        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active bg-gradient-primary text-white" href="dashboard.html">
                        <span class="material-symbols-rounded opacity-5">
                            speed
                        </span>

                        <span class="nav-link-text ms-1">Dashboards</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link text-dark collapsed" data-bs-toggle="collapse"
                        data-bs-target="#home-collapse" aria-expanded="false">
                        <i class="material-symbols-rounded opacity-5">apartment</i>

                        <span class="nav-link-text ms-1">Propertices Management</span> <i
                            class=" ms-2 fas fa-angle-down" style="font-size: 10px"></i>
                    </a>
                    <div class="collapse" id="home-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="nav-link ms-4  text-dark bg-white">Add Propertices</a></li>
                            <li><a href="#" class="nav-link ms-4  text-dark bg-white">Listed Propertices</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="billing.html">
                        {{-- <i class="material-symbols-rounded opacity-5">receipt_long</i> --}}
                        <i class="material-symbols-rounded opacity-5">calendar_month</i>
                        <span class="nav-link-text ms-1">Tour Reservation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="virtual-reality.html">
                        <i class="material-symbols-rounded opacity-5">other_houses</i>
                        <span class="nav-link-text ms-1">Virtual Home Staging</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="rtl.html">
                        <i class="material-symbols-rounded opacity-5">other_houses</i>
                        <span class="nav-link-text ms-1">Visibilities</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="notifications.html">
                        <i class="material-symbols-rounded opacity-5">notifications</i>
                        <span class="nav-link-text ms-1">Notifications</span>
                    </a>
                </li>

            </ul>
        </div>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar bg-white navbar-main navbar-expand-lg p-0 pt-1  shadow-none " id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">

                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4  justify-content-between"
                    id="navbar">
                    <div class=" pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            {{-- <label class="form-label">Type here...</label> --}}
                            {{-- <input type="text" class="form-control" placeholder="Search..."> --}}

                            <div class="input-group mb-3">
                                <form action="" method="get">
                                    <div class="input-group-prepend">
                                        <button type="submit" class="input-group-text" id="basic-addon1">
                                            <i class="material-symbols-rounded opacity-5">search</i>

                                        </button>
                                    </div>
                                    <input type="text" class="form-control p-3 search-custom-radius"
                                        placeholder="Search.." style="padding-left: 35px !important">
                                </form>
                            </div>

                        </div>
                    </div>
                    <ul class="navbar-nav d-flex align-items-center  justify-content-end">


                        <li class="nav-item d-xl-none ps-3 pb-2 pe-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link p-0 text-body" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item dropdown pe-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0 notification-icon"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('agent-assets/img/notification-bell.png') }}" alt="">
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('agent-assets/img/team-2.jpg') }}"
                                                    class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="https://demos.creative-tim.com/material-dashboard/assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a href="sign-in.html" class="nav-link text-body font-weight-bold px-0 user-img-icon">
                                <img src="{{ asset('agent-assets/img/team-4.jpg') }}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        {{$slot}}
    </main>

    <script src="{{ asset('agent-assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('agent-assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('agent-assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('agent-assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('agent-assets/js/plugins/chartjs.min.js') }}"></script>


    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script src="{{ asset('agent-assets/js/material-dashboard.min2167.js?v=3.2.0') }}"></script>

</body>



</html>
