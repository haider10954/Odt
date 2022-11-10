@extends('web.layouts.web_layout')

@section('title', 'Odt - '.__('Signup'))

@section('content')
    <div class="auth-wrapper">

        <div class="auth-form-container">

            <a href="{{ route('web_index') }}" class="mb-4 text-center heading">odt.</a>

            <form action="{{ route('web_auth_signup') }}" method="POST">
                @csrf
                <div class="auth-form">

                    <p class="font-weight-600">{{ __('Signup') }}</p>

                    <div class="form-group mb-3">

                        <input type="text" name="name" class="form-control rounded-0" placeholder="{{ __('Name') }}" value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger text-left d-block">{{ $message }}</small>
                        @enderror

                    </div>

                    <div class="form-group mb-3">

                        <input type="email" name="email" class="form-control rounded-0" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}">
                        @error('email')
                            <small class="text-danger text-left d-block">{{ $message }}</small>
                        @enderror

                    </div>

                    <div class="form-group mb-3">

                        <input type="text" name="number" class="form-control rounded-0" placeholder="{{ __('Mobile Number') }}" value="{{ old('number') }}">
                        @error('email')
                            <small class="text-danger text-left d-block">{{ $message }}</small>
                        @enderror

                    </div>


                    <div class="form-group mb-3">

                        <input type="password" name="password" class="form-control rounded-0" placeholder="{{ __('Password') }}" value="{{ old('password') }}">
                        @error('password')
                            <small class="text-danger text-left d-block">{{ $message }}</small>
                        @enderror

                    </div>

                    <div class="form-group mb-3">

                        <input type="password" name="password_confirmation" class="form-control rounded-0" placeholder="{{ __('Confirm Password') }}" value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <small class="text-danger text-left d-block">{{ $message }}</small>
                        @enderror

                    </div>

                    {{-- <p class="text-muted text-left"><i class="fa fa-check-circle mx-2"></i>로그인 상태 유지</p> --}}

                    <button type="submit" class="btn w-100 btn-theme btn-warning rounded-0">{{ __('Sign Up') }}</button>

                    <p class="mt-4 text-muted text-center">

                        <a href="javascript:void(0)" class="text-muted">{{ __('Forget Password') }}?</a> <span class="mx-2">|</span> <a
                            href="{{ route('web_login') }}" class="text-muted">{{ __('Login') }}</a>

                    </p>

                </div>
            </form>

        </div>

    </div>
@endsection
