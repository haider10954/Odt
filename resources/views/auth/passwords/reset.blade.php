@extends('web.layouts.web_layout')

@section('title', 'Odt - '.__('translation.Signup'))

@section('content')
    <div class="auth-wrapper">

        <div class="auth-form-container">

            <a href="{{ route('web_index') }}" class="mb-4 text-center heading">odt.</a>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <div class="auth-form">

                    <p class="font-weight-600">{{ __('translation.Reset Password') }}</p>

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group mb-3">

                        <input type="email" name="email" class="form-control rounded-0" placeholder="{{ __('translation.Email Address') }}" value="{{ $email ?? old('email') }}" required>
                        @error('email')
                            <small class="text-danger text-left d-block">{{ $message }}</small>
                        @enderror

                    </div>

                    <div class="form-group mb-3">

                        <input type="password" name="password" class="form-control rounded-0" placeholder="{{ __('translation.Password') }}">
                        @error('password')
                            <small class="text-danger text-left d-block">{{ $message }}</small>
                        @enderror

                    </div>

                    <div class="form-group mb-3">

                        <input type="password" name="password_confirmation" class="form-control rounded-0" placeholder="{{ __('translation.Confirm Password') }}">
                        @error('password_confirmation')
                            <small class="text-danger text-left d-block">{{ $message }}</small>
                        @enderror

                    </div>

                    <button type="submit" class="btn w-100 btn-theme btn-warning rounded-0">{{ __('translation.Reset Password') }}</button>

                    <p class="mt-4 text-muted text-center">

                        <a href="javascript:void(0)" class="text-muted"><a
                            href="{{ route('web_login') }}" class="text-muted">{{ __('translation.Login') }}</a>

                    </p>

                </div>
            </form>

        </div>

    </div>
@endsection
