@extends('layouts.app')

@section('content')
    <div class="col-md-6 card my-auto mx-auto login-info login-2-info">
        <div class="login-header">
            <h1 class="text-primary text-center">Login</h1>
            <h5 class="text-dark text-center">Provide a detail and login</h5>
        </div>
        <div class="login-input m-auto">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label fw-bold">Email / Phone</label>
                    <input type="text" class="form-control castom-login-input @error('username') is-invalid @enderror"
                        id="username" name="username" value="{{ old('username') }}" required autocomplete="email" autofocus
                        placeholder="Email / Phone" />
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="Password" class="form-control castom-login-input @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" id="password" placeholder="Password" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="forgot-pass text-end">
                    <a href="">Forgot Password?</a>
                </div>
                <div class="login-button my-3">
                    <button type="submit" class="btn fw-bold btn-primary">Login</button>
                </div>
            </form>
            <div class="container-fluid">
                <div class="row login-link justify-content-between ">
                    <div class="col-4 border  link-button">
                        <a href="">
                            <img src="{{ asset('agent-assets/login/images/google.jpg') }}" alt="" />
                            <h6 class="text-dark">Google</h6>
                        </a>
                    </div>
                    <div class="col-4 border  link-button">
                        <a href="">
                            <img src="{{ asset('agent-assets/login/images/Facebook_Logo_2023.png') }}" alt="" />
                            <h6 class="text-dark">Facebook</h6>
                        </a>
                    </div>
                    <div class="col-4 border  link-button">
                        <a href="">
                            <img src="{{ asset('agent-assets/login/images/apple.png') }}" alt="" />
                            <h6 class="text-dark">Apple</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
