@extends('layouts.app')

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

                                {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

                                {{--@error('password')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                    {{--<label class="form-check-label" for="remember">--}}
                                        {{--{{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--@if (Route::has('password.request'))--}}
                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--{{ __('Forgot Your Password?') }}--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@section('content')
    <div class="row min-vh-100">
        <div class="col-md-5 col-lg-6 col-xl-4 px-lg-5 d-flex align-items-center">
            <div class="w-100 py-5">
                <div class="text-center"><img src="img/brand/brand-1.svg" alt="..." style="max-width: 6rem;"
                                              class="img-fluid mb-4">
                    <h1 class="display-4 mb-3">Sign in</h1>
                </div>
                <form method="get" class="form-validate">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input name="loginUsername" type="email" autocomplete="off" required
                               data-msg="Please enter your email" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <div class="row">
                            <div class="col">
                                <label>Password</label>
                            </div>
                            <div class="col-auto"><a href="#" class="form-text small text-muted">Forgot password?</a>
                            </div>
                        </div>
                        <input name="loginPassword" type="password" required data-msg="Please enter your password"
                               class="form-control">
                    </div>
                    <!-- Submit-->
                    <button class="btn btn-lg btn-block btn-primary mb-3">Sign in</button>
                    <!-- Link-->
                    <p class="text-center">
                        <small class="text-muted text-center">Don't have an account yet? <a href="register-2.html">Register</a>.
                        </small>
                    </p>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Image-->
            <div style="background-image: url(img/photos/victor-ene-1301123-unsplash.jpg);"
                 class="bg-cover h-100 mr-n3"></div>
        </div>
    </div>
@stop
