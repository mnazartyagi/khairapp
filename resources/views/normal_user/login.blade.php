@extends('layouts.default')
@section('content')
@include('layouts.header')</br>
<div class="container" dir="{{App::getLocale()=='en' ? '': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <form class="form-signin" method="POST" action="{{ route('normal_user.postlogin') }}" aria-label="{{ __('home.login') }}">
                @csrf
                    <div class="text-center mb-4">
                      <img class="mb-4" src="{{asset('storage/logo/logo.png')}}" alt="" width="72" height="72">
                      <h1 class="h3 mb-3 font-weight-normal">{{__('home.login')}}</h1>
                    </div>
              
                    <div class="form-label-group">
                      <input name="email" type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{trans('home.mail')}}" required autofocus>
                      @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                      @endif
                      <label for="inputEmail">{{ __('home.mail') }}</label>
                    </div>
              
                    <div class="form-label-group">
                      <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="inputPassword"  placeholder="{{trans('home.pass')}}" required>
                      <label for="inputPassword">{{ __('home.pass') }}</label>
                      @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                      @endif
                    </div>
              
                    <div class="checkbox mb-3" dir="{{App::getLocale()=='en' ? '': 'rtl'}}">
                      <label>
                        <input type="checkbox" name="remember" value="remember-me" {{ old('remember') ? 'checked' : '' }}> {{ __('home.remember') }}
                      </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" style="border-radius:0;background:#008bff;">{{ __('home.login') }}</button>
                    <a class="btn btn-link" href="{{ route('normal_user.password.request') }}">
                            {{ __('home.passforgot') }}
                    </a><br>
                    <div style="text-align:center;">
                    {{ __('home.newto') }}</br>
                    <a class="btn btn-danger btn-sm rounded-0" href="{{ route('normal_user.getsignup') }}">
                      {{ __('home.register')}}
                </a></div>
                  </form>
    </div><br>
@include('layouts.footer')    
@endsection
            