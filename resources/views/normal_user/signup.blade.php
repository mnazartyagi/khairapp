@extends('layouts.default')
@section('content')
@include('layouts.header')</br>
<div class="container" dir="{{App::getLocale()=='en' ? '': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form class="form-signin" method="POST" action="{{ route('normal_user.postsignup') }}" aria-label="{{ __('home.signup') }}">
                @csrf
                    <div class="text-center mb-4">
                      <img class="mb-4" src="{{asset('storage/logo/logo.png')}}" alt="" width="72" height="72">
                      <h1 class="h3 mb-3 font-weight-normal">{{__('home.signup')}}</h1>
                    </div>
              
                    <div class="form-label-group">
                            <input name="name" type="text" id="inputName" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="{{trans('home.name')}}" required autofocus>
                            @if ($errors->has('name'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                            @endif
                            <label for="inputName">{{ trans('home.name') }}</label>
                    </div>

                    <div class="form-label-group">
                      <input name="email" type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{trans('home.email')}}" required autofocus>
                      @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                      @endif
                      <label for="inputEmail">{{ trans('home.email') }}</label>
                    </div>

                    <div class="form-label-group">
                            <input name="number" type="text" id="mmhpn" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }} rounded-03" value="{{ old('number') }}" required autofocus>
                            @if ($errors->has('number'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('number') }}</strong>
                                  </span>
                            @endif
                            <label for="inputNumber"></label>
                    </div>
              
                    <div class="form-label-group">
                      <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} " id="inputPassword"  placeholder="{{trans('home.pass')}}" required>
                      <label for="inputPassword">{{ __('home.pass') }}</label>
                      @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                      @endif
                    </div>

                    <div class="form-label-group">
                            <input name="password_confirm" type="password" class="form-control" id="inputPasswordConfirm"  placeholder="{{trans('home.passconf')}}" required>
                            <label for="inputPasswordConfirm">{{ __('home.passconf') }}</label>
                            @if ($errors->has('password_confirm'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password_confirm') }}</strong>
                            </span>
                      @endif
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" style="border-radius:0;background:#008bff;">{{ __('home.signup') }}</button>
                    <a class="btn btn-link" href="{{ route('normal_user.getlogin') }}">
                            {{ __('home.already') }}
                    </a>
                  </form>
    </div>
@include('layouts.footer')    
@section('extra-js')
<script>
        $("#mmhpn").intlTelInput({
    
           geoIpLookup: function(callback) {
            $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
               var countryCode = (resp && resp.country) ? resp.country : "";
               callback(countryCode);
            });
          },
          
      initialCountry: "auto",
      allowExtensions: true,
      allowDropdown: true,
      autoFormat: false,
      autoHideDialCode: false,
      autoPlaceholder: false,
      defaultCountry: "auto",
      ipinfoToken: "yolo",
      nationalMode: false,
      numberType: "MOBILE",
      //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      //preferredCountries: ['cn', 'jp'],
        preventInvalidNumbers: true,
          utilsScript: "{{asset('reveal/lib/intel/build/js/utils.js')}}"
        });
      </script>
@endsection
@endsection
            