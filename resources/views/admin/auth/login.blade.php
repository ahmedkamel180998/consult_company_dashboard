@extends('admin.auth.master')

@section('title', 'Login')

@section('content')
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form method="POST" action="{{route('admin.login.store')}}"
                  class="col-lg-3 col-md-4 col-10 mx-auto text-center">
                @csrf
                @include('admin.partials.language')
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{route('admin.index')}}">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg"
                         x="0px" y="0px" viewBox="0 0 120 120"
                         xml:space="preserve">
              <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	"/>
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	"/>
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	"/>
              </g>
            </svg>
                </a>
                <h1 class="h6 mb-3">{{ __('keywords.sign_in') }}</h1>
                <!-- Email Address -->
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">{{ __('keywords.email_address') }}</label>
                    <input type="email" id="inputEmail" class="form-control form-control-lg"
                           placeholder="{{ __('keywords.email_address') }}"
                           autofocus="" autocomplete="username" name="email" :value="old('email')">
                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>
                <!-- Password -->
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">{{ __('keywords.password') }}</label>
                    <input type="password" id="inputPassword" class="form-control form-control-lg"
                           placeholder="{{ __('keywords.password') }}"
                           name="password" autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> {{ __('keywords.stay_logged_in') }} </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('keywords.let_me_in') }}</button>
            </form>
        </div>
    </div>
@endsection