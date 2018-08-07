<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-right">
        <i class="fa fa-address-book-o"></i> <a href="{{route('contact')}}">{{trans('home.contact')}}</a>&nbsp;&nbsp;
        @auth('normal_user')
        <i class="fa fa-user-o"></i><a href="{{route('normal_user.getprofile')}}">{{trans('user.account')}}</a>&nbsp;&nbsp;&nbsp;
        @endauth
        @guest('normal_user')
        <i class="fa fa-sign-in"></i><a href="{{route('normal_user.getlogin')}}">{{trans('home.login')}}</a>&nbsp;&nbsp;&nbsp;
        @endguest
        <form action="{{route('language.change')}}" method="POST" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
             @csrf
             <select class="selectpicker" style="color:#green; border-color:green; border-radius:0;" name="locale" onchange="this.form.submit()">
             <option value="en" {{App::getLocale()=='en' ? 'selected': ''}}>English</option>
                 <option value="ar" {{App::getLocale()=='ar' ? 'selected': ''}}>العربية</option>
             </select><noscript><input type="submit" value="Submit"></noscript>
           </form> 
      </div>  
      <div class="social-links float-left">
        <a href="{{route('about')}}">{{trans('home.about')}}</a>
        <a href="{{route('how_works')}}">{{trans('home.how')}}</a>
        <a href="{{route('blogs')}}">{{trans('home.blog')}}</a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      <a href="{{route('home')}}" class="scrollto"><img class="image-header" src="{{asset('storage/logo/nav-header.png')}}"></a>
      
      </div>
      <b>(Trial version)</b>
        <ul class="nav-menu pull-right" style="margin-right:50px;">
          <li class="d-lg-none d-xl-none"><a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#getCallback" style="padding: 7px 8px;"><i class="fa fa-phone fa-2x "></i></a>
            <div class="modal" id="getCallback" tabindex="-1" role="dialog" aria-labelledby="getCallbackTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content rounded-0" dir="{{App::getLocale()=='en' ? '': 'rtl'}}">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="card text-center" style="border:0">
                            <form role="form" action="{{route('post.callbacks')}}" method="POST">
                              @csrf
                            <h5 class="card-title"><b>{{trans('home.call-back')}}<b></h5>
                              <img class="profile-img mx-auto d-block img-responsive" src="{{asset('reveal/img/call.png')}}" alt="">
                              <hr>
                              <p class="card-text"> {{trans('home.callandconsul')}}</p>
                              <div class="form-group text-center">
                                       <input id="mhp"class="form-control form-control-sm rounded-0" name="number" type="text" required="" pattern="[\+]\d{5,}">
                                   </div>
                                   <div class="form-group">
                                       <button type="submit" class="btn btn-primary rounded-0">{{trans('home.call-back')}}</button>
                                   </div>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
          </li>  
        </ul>
      

      <nav id="nav-menu-container">
        <ul class="nav-menu " >
        <li class="{{Route::is('home') ? 'menu-active' : ''}}"><a href="{{route('home')}}">{{trans('home.home')}}</a></li>
          <li class="{{Route::is('diseases') ? 'menu-active' : ''}}"><a href="{{route('diseases')}}">{{trans('home.diseases')}}</a></li>
          <li class="{{Route::is('hospitals') ? 'menu-active' : ''}}"><a href="{{route('hospitals')}}">{{trans('home.hospitals')}}</a></li>
          <li class="{{Route::is('packages') ? 'menu-active' : ''}}"><a href="{{route('packages')}}">{{trans('home.package')}}</a></li>
          <li class="d-none d-md-block"><a style="color:white;background:#e24253;border-radius:0;padding-bottom:2px;margin-top:4px;padding-top:2px;" id="callback" class="btn btn-sm" href="#" data-toggle="dropdown" role="button">{{trans('home.call-back')}}</a>
            <div class="dropdown-menu dropdown-menu-right rounded-0" style="width:350px;" aria-labelledby="callback" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
                 <div class="px-3 py-2 text-center">
                     <form role="form" action="{{route('post.callbacks')}}" method="POST">
                       @csrf
                     <h5 class="form-title"><b>{{trans('home.call-back')}}<b></h5>
                       <img class="profile-img mx-auto d-block img-responsive" src="{{asset('storage/images/call.png')}}" alt="">
                       <hr>
                       <p class="form-text"> {{trans('home.callandconsul')}}</p>
                            <div class="form-group">
                                <input name="number" id="hp"class="form-control form-control-sm rounded-0" type="text" required="true" pattern="[\+]\d{5,}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block rounded-0">{{trans('home.call-back')}}</button>
                            </div>
                        </form>
                       </div>
                 </div>
           </li>
        <li class="d-lg-none d-xl-none"><a style="font-weight:400;" href="{{route('blogs')}}">{{trans('home.blog')}}</a></li>
        <li class="d-lg-none d-xl-none"><a style="font-weight:400;" href="{{route('how_works')}}">{{trans('home.how')}}</a></li>
        <li class="d-lg-none d-xl-none"><a style="font-weight:400;" href="{{route('about')}}">{{trans('home.about')}}</a></li>
        <li class="d-lg-none d-xl-none"><a style="font-weight:400;" href="{{route('contact')}}">{{trans('home.contact')}}</a></li>
        <li class="d-lg-none d-xl-none" style="margin-left:15px;font-size:20px;"><form action="{{route('language.change')}}" method="POST">
            @csrf
            <select name="locale" onchange="this.form.submit()">
            <option value="en" {{App::getLocale()=='en' ? 'selected': ''}}>{{trans('home.eng')}}</option>
                <option value="ar" {{App::getLocale()=='ar' ? 'selected': ''}}>العربية</option>
            </select><noscript><input type="submit" value="Submit"></noscript>
          </form></li>
        @guest
        <li class="d-lg-none d-xl-none"><a href="{{route('normal_user.getlogin')}}">Login</a></li>           
        @endguest
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->