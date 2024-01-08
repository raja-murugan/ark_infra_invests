@extends('layout.backend.guest')

@section('content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo" href="#"><img class="img-fluid for-light"
                                    src="{{ asset('assets/backend/images/logo/logo.jpg') }}" alt="looginpage" style="height: 80px;"><img class="img-fluid for-dark"
                                    src="{{ asset('assets/backend/images/logo/logo_dark.jpg') }}" alt="looginpage" style="height: 80px;"></a></div>
                        <div class="login-main">
                                <form class="theme-form" method="POST" action="{{ route('login') }}" autocomplete="off" autofill="off">
                                    @csrf
                                <h4>Sign in to account</h4>
                                <p>Enter your email & password to login</p>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        <div class="show-hide"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    {{-- <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1">Remember password</label>
                                    </div>
                                    <a class="link" href="forget-password.html">Forgot password?</a> --}}
                                    <div class="text-end mt-3">
                                        <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                    </div>
                                </div>

                                <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                        href="{{ route('register') }}">Create Account</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
