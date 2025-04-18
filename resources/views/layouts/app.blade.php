<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>kemea</title>
    <!-- fontawesome link -->
    <link rel="stylesheet" href="fontawesome/css/all.css" />
    <!-- bootstrap link -->
    <link rel="stylesheet" href="{{ asset('agent-assets/login/css/bootstrap.min.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('agent-assets/login/style.css') }}" />
</head>

<body>
    <div class="container-fluid my-auto d-flex login2">
        @yield('content')
    </div>
</body>

</html>
