<section id="about" style="background-color: #f7f6f6;padding-top: 20px;"class="wow fadeInUp" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
    <div class="container">
        <div class="row">
                <div class="col-lg-6 content" style="justify-content:center;padding:20px;">
                        <div class="row">
                        <div class="col-lg-6" style="border-right: 1px solid #d7d7d7;">
                        <p class="text-center"><img src="{{asset('storage/logo/logo.png')}}" height="125" width="125" alt=""></p>
                              <h1 style="text-align:center; margin: 0 0 0px 0;">692</h1>
                              <p style="text-align:center;">{{trans('home.patientserve')}}</p>
                              </div>
                              <div class="col-lg-6" style="padding-top:20px;">  
                              <h1 style="text-align:center; margin: 0 0 0px 0;">50+</h1>
                              <p style="text-align:center;">{{trans('home.hospitals')}}</p>
                              <hr>
                              <h1 style="text-align:center; margin: 0 0 0px 0;">100+</h1>
                              <p style="text-align:center;">{{trans('home.liesure')}}</p>
                              </div>
                            </div>
                </div>
              <br>
              <br>

          <div class="col-lg-6 content" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
            <h2>{{trans('home.health')}}</h2>
            <p>{{trans('home.line1')}}
            </p>
            <p> {{trans('home.line2')}}
            </p>

          </div>
        </div>
    </div>
</section>