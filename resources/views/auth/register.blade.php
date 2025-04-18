@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <input type="hidden" name="role" value="user">

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="col-md-6 card my-auto mx-auto login-info login-2-info">
        <div class="login-header">
            <h1 class="text-primary text-center">Signup</h1>
            <h5 class="text-dark text-center">Provide a detail and Signup</h5>
        </div>
        <form method="POST" action="{{ route('register') }}">
            <div class="login-input m-auto">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Enter Your Name</label>
                    <input id="name" type="text"
                        class="form-control castom-login-input @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name" />

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Email address</label>
                    <input id="email" type="email" class="form-control castom-login-input  @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        placeholder="Email address" />

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label fw-bold">Password</label>
                    <input id="password" type="password" class="form-control castom-login-input  @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label fw-bold">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control castom-login-input " name="password_confirmation" required autocomplete="new-password">
                </div>
                <input type="hidden" name="role" value="user">

                <div class="forgot-pass d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input check-box" id="check1" name="option1"
                            value="something" checked />
                        <label class="form-check-label" for="check1">Agreement</label>
                    </div>
                    <a class="Terms-Conditions" href="">Terms & Conditions</a>
                </div>
                <div class="login-button my-3">
                    <button type="submit" class="btn fw-bold btn-primary">
                        Signup
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
