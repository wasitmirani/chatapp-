{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.backend.authmaster')

@section('content')


<div class="login-wrapper">
    <div class="loginbox">
        <div class="log-header">
            <a href="javascript:void(0);" class="navbar-brand logo">
                <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" width="35" alt="Logo">
                <span>{{config('app.name')}}</span>
            </a>
        </div>
        <h1>Welcome to <span>{{config('app.name')}}</span> <br>Get’s Started</h1>
        <form method="POST" class="form-signin" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                <span class="profile-views">
                <img src="{{asset('assets/img/icon/mail-icon.svg')}}"
                        alt="">
                </span>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control pass-input @error('password') is-invalid @enderror" >
                <span class="profile-views feather-eye-off toggle-password"></span>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <a class="forgot-link" href="{{route('password.request')}}">Forgot Password ?</a>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-signin" type="submit">Sign In</button>
            </div>
            <div class="dont-have">Don't have an account? <a href="register.html">Register</a></div>
            <div class="login-or">
                <p class="span-or">or</p>
            </div>

            <div class="social-login">
                <a href="#"><img src="assets/img/google.png" class="img-fluid"
                        alt="Logo"></a>
                <a href="#"><img src="assets/img/fb.png" class="img-fluid" alt="Logo"></a>
            </div>

        </form>
    </div>
</div>

@endsection
