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
    <link rel="stylesheet" href="{{ asset('agent-assets/css/toastr.css') }}" />
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

        .notification-time {
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

                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0 user-img-icon" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="true">
                                <img src="{{ asset('agent-assets/img/team-4.jpg') }}" alt="">
                            </a>
                          
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">{{auth()->user()->name}}</span> 
                                                </h6>
                                            
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <form class="dropdown-item border-radius-md" action="{{route('logout')}}" method="post">
                                       @csrf
                                       <button type="submit" class="btn btn-primary">Logout</button>
                                    </form>
                               </li>
                            </ul>
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


    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-center p-4" style="border-radius: 12px;">
                <div class="modal-body">
                    <div class="mb-3">
                        <i class="material-symbols-rounded text-primary" style="font-size: 50px;">verified</i>
                    </div>
                    <h3 class="mb-3" style="color:#0d6efd;">Success</h3>
                    <p class="mb-4">{{ session('success') }}</p>
                    <button type="button" class="btn btn-primary px-4" data-bs-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('agent-assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('agent-assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('agent-assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('agent-assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('agent-assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('agent-assets/js/toastr.min.js') }}"></script>
    @if (session()->has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var modal = new bootstrap.Modal(document.getElementById('exampleModalCenter'));
                modal.show();
            });
        </script>
    @endif

    @if (session()->has('errors'))
        <script>
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}')
            @endforeach
        </script>
    @endif

    @stack('scripts')


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
