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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.cssF">
    @stack('css')
    <style>
        .offcanvas-header {
            justify-content: space-between;
        }

        .offcanvas-header-button {
            display: flex;
            width: 70px;
            justify-content: space-between;
        }

        .offcanvas-header-button::after {
            padding-top: 3px;

        }

        .user-notification-img {
            width: 32px;
            height: 32px;
            border-radius: 100%;
        }

        .offcanvas-notification p {
            font-size: 14px;
            line-height: 20px;
        }

        .offcanvas-img-active-dot {
            font-size: 8px;
            position: absolute;
            top: -7px;
            left: -9px;
        }

        .user-notification-img-sec {
            margin-left: 22px;
            position: relative;
        }
        .notification-time{
            margin-bottom: 20px;
        }
    </style>


</head>

<body class="g-sidenav-show  bg-gray-100">


    <x-agent.sidebar />
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
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasNotification"
                                aria-controls="offcanvasNotification">

                                {{-- <button class="btn btn-primary" type="button">
                                    Button with data-bs-target
                                </button> --}}

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
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
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
        {{ $slot }}


    </main>



    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNotification"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Notifications</h5>
            <div class="dropdown mt-3 ">
                <button
                    class="offcanvas-header-button btn btn-secondary dropdown-toggle bg-transparent text-muted border border-2 "
                    type="button" data-bs-toggle="dropdown">
                    All
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>

        <div class="offcanvas-body p-0">

            <div class="border-bottom">
                <div class="d-flex mt-3">
                    <div class="">
                        <div class=" user-notification-img-sec" style="">
                            <span class=" offcanvas-img-active-dot">
                                🟢
                            </span>
                            <img class=" user-notification-img" src="{{ asset('agent-assets/img/team-1.jpg') }}"
                                alt="">

                        </div>
                    </div>
                    <div class="mx-3 offcanvas-notification">
                        <p class="mb-2 "><strong class="text-dark"> Ray Arnold </strong> left 6 comments on
                            <strong class="text-dark">Isla Nublar SOC2 compliance report</strong>
                        </p>
                        <p class="notification-time">Last Wednesday at 9:42 AM</p>
                    </div>
                </div>

            </div>
            <div class="border-bottom">
                <div class="d-flex mt-3">
                    <div class="">
                        <div class=" user-notification-img-sec" style="">
                            <span class=" offcanvas-img-active-dot">
                                🟢
                            </span>
                            <img class=" user-notification-img" src="{{ asset('agent-assets/img/team-1.jpg') }}"
                                alt="">

                        </div>


                        
                    </div>
                    <div class="mx-3 offcanvas-notification">
                        <p class="mb-2 "><strong class="text-dark"> Ray Arnold </strong> left 6 comments on
                            <strong class="text-dark">Isla Nublar SOC2 compliance report</strong>
                        </p>
                        <p class="notification-time">Last Wednesday at 9:42 AM</p>
                    </div>
                </div>

            </div>
            <div class="border-bottom">
                <div class="d-flex mt-3">
                    <div class="">
                        <div class=" user-notification-img-sec" style="">
                            <span class=" offcanvas-img-active-dot">
                                🟢
                            </span>
                            <img class=" user-notification-img" src="{{ asset('agent-assets/img/team-1.jpg') }}"
                                alt="">

                        </div>
                    </div>
                    <div class="mx-3 offcanvas-notification">
                        <p class="mb-2 "><strong class="text-dark"> Ray Arnold </strong> left 6 comments on
                            <strong class="text-dark">Isla Nublar SOC2 compliance report</strong>
                        </p>
                        <p class="notification-time">Last Wednesday at 9:42 AM</p>
                    </div>
                </div>

            </div>

            <div class=" my-5 ">
                <a class="d-flex justify-content-center" href="">Clear All</a>
            </div>




        </div>

    </div>
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
