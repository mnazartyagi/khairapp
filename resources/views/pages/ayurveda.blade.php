@extends('layouts.default')
@section('content')
    @include('layouts.header')

<main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <div class="container-fluid" style="padding:0;">
        
                <img class="img-fluid rounded-0 banners" src="{{asset('storage/images/ayurveda.jpg')}}" alt="" width="1920px">
        </div>

 <div class="container">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-12">
      <br>
    <div class="heading-custom" style="text-align:center">
            <h1>{{trans('home.ayur')}}</h1>
            <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                    <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                    <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                    <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                </p>
        </div>

    </br>



<p>{{trans('ayurved.line1')}}</p>
<p>{{trans('ayurved.line2')}}</p>

<hr>


<h5><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">{{trans('ayurved.que1')}} </a></h5>
<div id="collapseTwo" class="collapse">
<p>{{trans('ayurved.ans1')}}</p>
</div>

<hr>



<h5>  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">{{trans('ayurved.que2')}}</a> </h5>
<div id="collapseThree" class="collapse">
<p>{{trans('ayurved.ans2')}}</p>
</div>
<hr>



<h5> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">{{trans('ayurved.que3')}}</a></h5>
<div id="collapseFour" class="collapse">
<p>{{trans('ayurved.ans3.1')}}</p>
<p>{{trans('ayurved.ans3.2')}}</p>
</div>
<hr>



<h5>  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapsefive">{{trans('ayurved.que4')}}</a> </h5>
<div id="collapseFive" class="collapse">
<p>{{trans('ayurved.ans4')}}</p>
</div>
<hr>




<h5><a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">{{trans('ayurved.que5')}}</a></h5>
<div id="collapseSix" class="collapse">
<p>{{trans('ayurved.ans5')}}</p>

</div>
<hr>


<h5><a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">{{trans('ayurved.que6')}}</a></h5>
<div id="collapseSeven" class="collapse">
<p>{{trans('ayurved.ans6')}}</p>

</div>

    <hr>


<h5>
<a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">{{trans('ayurved.que7')}}</a></h5>
<div id="collapseEight" class="collapse">
<p>{{trans('ayurved.ans7')}}</p>
 
</div>
<hr>

<h5> <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">{{trans('ayurved.que8')}}</a></h5>
<div id="collapseNine" class="collapse">
<p>{{trans('ayurved.ans8.1')}}
<br>
{{trans('ayurved.ans8.2')}}<br>
{{trans('ayurved.ans8.3')}}<br>
{{trans('ayurved.ans8.4')}}<br>
</p>

</div>
<hr>


<h5> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">{{trans('ayurved.que9')}}</a></h5>
<div id="collapseTen" class="collapse">
<p>{{trans('ayurved.ans9')}}</p>
 
</div>
<hr>



<h5><a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">{{trans('ayurved.que10')}}</a></h5>
<div id="collapseEleven" class="collapse">
<p>{{trans('ayurved.ans10.1')}}</p>
<p>{{trans('ayurved.ans10.2')}}.</p>
 
</div>
<hr>





<h5><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">{{trans('ayurved.que11')}}</a></h5>
<div id="collapseTwelve" class="collapse">
<p>{{trans('ayurved.ans11')}}</p>
 
</div>
<hr>





<h5><a data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">{{trans('ayurved.que12')}}</a></h5>
<div id="collapseThirteen" class="collapse">
<p>{{trans('ayurved.ans12')}}</p>

</div>
<hr>





<h5><a data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">{{trans('ayurved.que13')}}</a></h5>
<div id="collapseFourteen" class="collapse">
<p>{{trans('ayurved.ans13')}}</p>
 
</div>
<hr>
  </div>
</div>
<!-- /.row -->

</div>

<div class="container" style="margin-top:50px;">
        <div style="padding:30px;background:#ede8e8b3;">
                    <div style="text-align:center">
                        <h4 class="form-title">
                            {{trans('extra.ayur')}}
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