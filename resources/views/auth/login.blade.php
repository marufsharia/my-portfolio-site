@extends('layouts.app')

@section('content')
    <div class="row min-vh-100">
        <div class="col-md-5 col-lg-6 col-xl-4 px-lg-5 d-flex align-items-center">
            <div class="w-100 py-5">
                <div class="text-center">
                    {{--                    <img src="img/brand/brand-1.svg" alt="..." style="max-width: 6rem;"--}}
                    {{--                                              class="img-fluid mb-4">--}}
                    <h1 class="display-4 mb-3">Sign in</h1>
                </div>
                <form method="POST" class="form-validate" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label>Email Address</label>
                        <input name="email" type="email" value="{{ old('email') }}"
                               autocomplete="email" required autofocus
                               data-msg="Please enter your email"
                               class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col">
                                <label>Password</label>
                            </div>
                        </div>

                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="current-password"
                               required data-msg="Please enter your password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col">
                                <div class="i-checks">
                                    <input class="checkbox-template" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('password.request') }}"
                                   class="form-text small text-muted">Forgot password?</a>
                            </div>
                        </div>

                    </div>

                    <!-- Submit-->
                    <button class="btn btn-lg btn-block btn-primary mb-3">Sign in</button>
                    <!-- Link-->
                    <p class="text-center">
                        <small class="text-muted text-center">Don't have an account yet? <a
                                    href="{{route('register')}}">Register</a>.
                        </small>
                    </p>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Image-->
            <div style="background-image: url({{asset('img/photos/victor-ene-1301123-unsplash.jpg')}});"
                 class="bg-cover h-100 mr-n3"></di
        </div>
    </div>
@stop
