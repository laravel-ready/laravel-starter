@extends('guest.layouts.layout')
@section('pageTitle', __('fortify-ui::auth.confirm_password'))

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
            {{ __('fortify-ui::auth.confirm_password') }}
        </h1>
    </div>

    <!-- Auth Form -->
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        {{-- Social Login --}}
        @include('fortify-ui::starter.components.social-login')

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

        <!-- Submit Button Container -->
        <div class="submit-button-container">
            <button type="submit" class="full-width">
                <span>
                    {{ __('fortify-ui::auth.confirm_password_button') }}
                </span>
            </button>
        </div>
    </form>
@endsection

@include('fortify-ui::starter.components.partials.eye-toggle-script')
