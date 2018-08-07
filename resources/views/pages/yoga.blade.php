@extends('layouts.default')
@section('content')
    @include('layouts.header')

<main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <div class="container-fluid" style="padding:0;">
        
                <img class="img-fluid rounded-0 banners" src="{{asset('storage/images/yoga.jpg')}}" alt="" width="1920px">
        </div>


 <div class="container">
<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-12">

    <br>
    <div class="heading-custom" style="text-align:center">
            <h1>{{trans('home.yoga')}}</h1>
            <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                    <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                    <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                    <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                </p>
        </div>

<br>

<p style="font-weight:500;">{{trans('yoga.line1')}}</p>
<p style="font-weight:500;">{{trans('yoga.line2')}}</p>

<h4><b>{{trans('yoga.h1')}}</b></h4>

<div style="font-weight:500;">

    <ul>

        <li>{{trans('yoga.p1')}}</li>
        <li>{{trans('yoga.p2')}}</li>
        <li>{{trans('yoga.p3')}}</li>
        <li>{{trans('yoga.p4')}}</li>
        <li>{{trans('yoga.p5')}}</li>
        <li>{{trans('yoga.p6')}}</li>
        <li>{{trans('yoga.p7')}}</li>
        <li>{{trans('yoga.p8')}}</li>
    </ul>
</div>

  </div>


</div>
<!-- /.row -->

</div>

<div class="container" style="margin-top:50px;">
        <div style="padding:30px;background:#ede8e8b3;">
                    <div style="text-align:center">
                        <h4 class="form-title">
                            {{trans('yoga.consult')}}
                        </h4>
                    </div>
                    
                    <div class="text-center"><p style="margin:0;">{{trans('yoga.toget')}} </p>
                        @auth('normal_user')
                    <a class="btn btn-danger btn-md rounded-0" href="{{route('normal_user.getprofile')}}">{{trans('yoga.click')}}</a>
                        @endauth
                        @guest('normal_user')
                        <button type="button" class="btn btn-danger btn-md rounded-0" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#signup">{{trans('yoga.click')}}</button>
                        @endguest
                        <div class="modal" id="signup" tabindex="-1" role="dialog" aria-labelledby="signupTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content rounded-0" style="margin:1rem">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="card" style="border:0px">
                                            <article class="card-body">
                                            <h4 class="card-title text-center mb-4 mt-1">{{trans('home.signupmessage')}}</h4>
                                                <hr>
                                                <form class="form-signin" method="POST" action="{{ route('normal_user.postsignup') }}" aria-label="{{ __('Signup') }}">
                                                        @csrf
                                                      
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
                                                                    <input name="number" type="text" id="mmhp" pattern="[\+]\d{5,}" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" value="{{ old('number') }}"  required autofocus>
                                                                    @if ($errors->has('number'))
                                                                          <span class="invalid-feedback" role="alert">
                                                                              <strong>{{ $errors->first('number') }}</strong>
                                                                          </span>
                                                                    @endif
                                                            </div>
                                                      
                                                            <div class="form-label-group">
                                                              <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="inputPassword"  placeholder="{{__('home.pass')}}" required>
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
                                                <hr>
                                            </article>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div></div>
                  
                </div>
    </div></br>

</main>
    @include('layouts.footer')
@endsection