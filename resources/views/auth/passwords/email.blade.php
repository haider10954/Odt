@extends('web.layouts.web_layout')

@section('title','Odt - '.__('translation.Login'))

@section('content')
<div class="auth-wrapper">

    <div class="auth-form-container">

         <a href="{{ route('web_index') }}" class="mb-4 text-center heading">odt.</a>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="auth-form">

                <p class="font-weight-600">{{ __('translation.Reset Password') }}</p>

                @if (session('status'))
                    <div class="alert alert-success mb-3" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
   
                <div class="form-group mb-3">
                    <input type="email" name="email" id="email" class="form-control rounded-0" value="{{ old('email') }}" placeholder="{{ __('translation.Email Address') }}">
                    @error('email')
                        <small class="text-danger d-block text-left">{{ $message }}</small>
                    @enderror

                </div>
   
                <button type="submit" class="btn w-100 btn-theme btn-warning rounded-0">{{ __('translation.Send Password Reset Link') }}</button>
   
                <p class="mt-4 text-muted text-center">
   
                   <a href="{{ route('password.request') }}" class="text-muted"><a href="{{ route('web_signup') }}" class="text-muted">{{ __('translation.Signup') }}</a>
   
                </p>
   
            </div>
        </form>

    </div>

 </div>
@endsection