@extends('layouts.app')

@section('style')
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Roboto', sans-serif;
    }

    .card {
        margin-top: 100px;
        border: none;
        border-radius: 1rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-google {
        background-color: #4285F4;
        color: white;
    }

    .btn-facebook {
        background-color: #3b5998;
        color: white;
    }

    .btn-social {
        width: 100%;
        border-radius: 0.5rem;
        margin-top: 10px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="mb-0">{{ __('Login') }}</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <div class="text-center my-3">
                            <span>Or login with:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('auth.google') }}"
                                class="btn btn-google btn-social d-flex align-items-center"
                                style="flex: 1; margin-right: 5px;">
                                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                                    alt="Google" style="width: 30px; margin-right: 10px;"> <!-- Increased icon size -->
                                Google
                            </a>
                            <a href="{{ route('auth.facebook') }}"
                                class="btn btn-facebook btn-social d-flex align-items-center"
                                style="flex: 1; margin-left: 5px;">
                                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                                    alt="Facebook" style="width: 30px; margin-right: 10px;">
                                Facebook
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection