@extends('layouts.default')
@section('content')
@include('layouts.header')</br>
<div class="container"  dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <form class="form-signin" method="POST" action="{{ route('hospital.postlogin') }}" aria-label="{{ __('Login') }}">
            @csrf
                <div class="text-center mb-4">
                  <img class="mb-4" src="{{asset('storage/logo/logo.png')}}" alt="" width="72" height="72">
                  <h1 class="h3 mb-3 font-weight-normal">{{__('Hospital Login')}}</h1>
                </div>
          
                <div class="form-label-group">
                  <input name="email" type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email address" required autofocus>
                  @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                  @endif
                  <label for="inputEmail">{{ __('E-Mail Address') }}</label>
                </div>
          
                <div class="form-label-group">
                  <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="inputPassword"  placeholder="Password" required>
                  <label for="inputPassword">{{ __('Password') }}</label>
                  @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                  @endif
                </div>
          
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" name="remember" value="remember-me" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                  </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Sign In') }}</button>
              </form>
    </div>
@include('layouts.footer')    
@endsection
            