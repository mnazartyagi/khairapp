<section id="services" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
  <div class="container">
      <div style="text-align:center;" class="heading-custom">
        <h2>{{trans('home.how')}}</h2>
        <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
            <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
            <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
            <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
        </p>
      </div>

      <div class="row" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">

        <div class="col-md-4">
          <div class="box wow">
            <div class="icon"><i class="fa fa-check-square-o"></i></div>
            <p class="description">{{trans('home.how1')}}</p>
          </div>
        </div>

        <div class="col-md-4">
            <div class="box wow" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-stethoscope"></i></div>
              <p class="description">{{trans('home.how3')}}</p>
            </div>
          </div>

          <div class="col-md-4">
              <div class="box wow" data-wow-delay="0.2s">
                <div class="icon"><i class="fa fa-file-text-o"></i></div>
                <p class="description">{{trans('home.how4')}}</p>
              </div>
            </div>

        <div class="col-md-4">
          <div class="box wow">
            <div class="icon"><i class="fa fa-user-o"></i></div>
            <p class="description">{{trans('home.how2')}}</p>
          </div>
        </div>
  
          <div class="col-md-4">
            <div class="box wow" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-home"></i></div>
              <p class="description">{{trans('home.how6')}}</p>
            </div>
          </div>
          <div class="col-md-4" style="">
            <div class="box wow" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-mobile"></i></div>
              <p class="description">{{trans('home.how7')}}</p>
            </div>
          </div>

      </div>
    </div>
  </section>