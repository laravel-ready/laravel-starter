@extends('layouts.guest')
@section('pageTitle', __('fortify-ui::auth.login'))

@php
    $defaultUser = config('app.debug')
        ? app()
            ->make(\App\Models\User::class)
            ::where('email', 'super_admin@example.com')
            ->where('email', 'admin@example.com')
            ->first()
        : false;
@endphp

@section('content')
    <!-- Title -->
    <div class="title">
        <!-- Form Title -->
        <h1 class="form-title">
            {{ __('fortify-ui::auth.login') }}
        </h1>
    </div>

    <!-- Auth Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Social Login --}}
        @include('fortify-ui::starter.components.social-login')

        <!-- Email Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="email">
                @include('fortify-ui::starter.components.svg-icons.email')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="email" name="email" type="email"
                placeholder="{{ __('fortify-ui::auth.form.placeholder_email_address') }}"
                value="{{ $defaultUser->email ?? null }}" required />
        </div>

        <!-- Password Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="password">
                @include('fortify-ui::starter.components.svg-icons.password')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="password" name="password" type="password"
                placeholder="{{ __('fortify-ui::auth.form.placeholder_password') }}"
                value="{{ $defaultUser->email ?? null }}" required />

            <!-- Eye Toggle -->
            <button type="button" id="eye-toggle" class="eye-toggle" data-input-id="password">
                @include('fortify-ui::starter.components.svg-icons.eye-open')
                @include('fortify-ui::starter.components.svg-icons.eye-close')
            </button>
        </div>

        <!-- Remember Me / Password Forgot -->
        <div class="remember-forgot-row">
            <!-- Check Input Container -->
            <div class="check-input-container">
                <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>

                <label for="remember">
                    {{ __('fortify-ui::auth.form.remember_me') }}
                </label>
            </div>

            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('fortify-ui::auth.form.link_forgot_your_password') }}
            </a>
        </div>

        {{-- Errors --}}
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $error }}
                                </strong>
                            </span>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Submit Button Container -->
        <div class="submit-button-container">
            <button type="submit">
                <span>
                    {{ __('fortify-ui::auth.login') }}
                </span>

                @include('fortify-ui::starter.components.svg-icons.login-gate')
            </button>
        </div>
    </form>
@endsection

@include('fortify-ui::starter.components.partials.eye-toggle-script')
