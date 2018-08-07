<footer id="footer" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
    <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3 footer-about">
            <a href="{{route('home')}}"><img class="logo-footer" src="{{asset('storage/logo/logo.png')}}" alt="logo-footer" data-at2x="{{asset('storage/logo/logo.png')}}"></a>
              <p>
                  {{trans('home.line1')}}
                  {{trans('home.line2')}}
              </p>

                  </div>
            <div class="col-md-4 offset-md-1 footer-contact ">
              <h3>{{trans('home.contact')}}</h3>
                  <p><i class="fa fa-map-marker"></i> Ist floor, Machingal Tower, Kolappuram, Kerala-676305</p>
                  <p><i class="fa fa-phone"></i> 04942468004</p>
                  <p><i class="fa fa-envelope"></i> <a href="mailto:hello@domain.com" style="color:#fff">contact@natukair.com</a></p>
                  
                  </div>
                  <div class="col-md-4 footer-links">
                    <div class="row">
                      <div class="col">
                        <h3>{{trans('home.link')}}</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p><a href="{{route('diseases')}}">{{trans('home.diseases')}}</a></p>
                        <p><a href="{{route('hospitals')}}">{{trans('home.hospitals')}}</a></p>
                        <p><a href="{{route('packages')}}">{{trans('home.package')}}</a></p>
                        <p><a href="{{route('blogs')}}">{{trans('home.blog')}}</a></p>
                      </div>
                      <div class="col-md-6">
                        <p><a href="{{route('about')}}">{{trans('home.about')}}</a></p>
                        <p><a href="{{route('how_works')}}">{{trans('home.how')}}</a></p>
                        <p><a href="{{route('faq')}}">{{trans('home.faq')}}</a></p>
                        <p><a href="{{route('privacy')}}">{{trans('about.privacy')}} </a></p>
                      </div>
                    </div>
                  </div>
            </div>    
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
               <div class="col-md-6 footer-copyright">
                    &copy; Natukair 2018
                  </div>
               <div class="col-md-6 footer-social">
                    <a href="https://www.facebook.com/natukair/"><i class="fa fa-facebook-f"></i></a> 
          <a href="#"><i class="fa fa-snapchat"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a> 
          <a href="https://www.youtube.com/channel/UC11tDTw4TOLTDdT6TiEI16g"><i class="fa fa-youtube"></i></a>
                  </div>
             </div>
        </div>
      </div>
</footer><!-- #footer -->