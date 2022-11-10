@extends('web.layouts.web_layout')

@section('title','Odt - '.__('translation.Login'))

@section('content')
<div class="auth-wrapper">

    <div class="auth-form-container">

         <a href="{{ route('web_index') }}" class="mb-4 text-center heading">odt.</a>

        <form action="{{ route('web_auth_login') }}" method="POST">
            @csrf
            <div class="auth-form">

                <p class="font-weight-600">{{ __('translation.Login') }}</p>

                @if(Session::has('message'))
                    <div class="alert alert-danger mb-3">{{ Session::get('message') }}</div>
                @endif
   
                <div class="form-group mb-3">
                    <input type="email" name="email" class="form-control rounded-0" value="{{ old('email') }}" placeholder="{{ __('translation.Email Address') }}">
                    @error('email')
                        <small class="text-danger d-block text-left">{{ $message }}</small>
                    @enderror

                </div>
   
                <div class="form-group mb-3">
   
                    <input type="password" name="password" class="form-control rounded-0" value="{{ old('password') }}" placeholder="{{ __('translation.Password') }}">
                    @error('password')
                        <small class="text-danger d-block text-left">{{ $message }}</small>
                    @enderror

                </div>
   
                {{-- <p class="text-muted text-left"><i class="fa fa-check-circle mx-2"></i>로그인 상태 유지</p> --}}
   
                <button type="submit" class="btn w-100 btn-theme btn-warning rounded-0">{{ __('translation.Login') }}</button>
   
                <p class="mt-4 text-muted text-center">
   
                   <a href="{{ route('password.request') }}" class="text-muted">{{ __('translation.Forget Password') }}?</a>   <span class="mx-2">|</span>  <a href="{{ route('web_signup') }}" class="text-muted">{{ __('translation.Signup') }}</a>
   
                </p>
   
            </div>
        </form>

    </div>

 </div>
@endsection