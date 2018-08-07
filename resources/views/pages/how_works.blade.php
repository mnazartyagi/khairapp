@extends('layouts.default')
@section('content')
    @include('layouts.header')</br>
    <main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
    @include('layouts.portfolio')
    <section id="services" style="background:#e7e3e36b;">
    <div class="container">
              <div style="text-align:center;" class="heading-custom">
                <h2>{{trans('home.why')}}</h2>
                <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                    <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                    <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                    <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                </p>
            </div>
        </div>
               <div class="container" style="text-align:center">
                     <div class="row">
                          <div class="col-md-4" style="padding:10px;">
                            <i class="fa fa-smile-o" style="font-size:40px;color:#35630c"></i>
                            <h3> <b>{{trans('home.whyh1')}}</b></h3>
                            <p> {{trans('home.whyp1')}}</p>
                           </div>

                           <div class="col-md-4" style="padding:10px;">
                            <i class="fa fa-phone" style="font-size:40px;color:#35630c"></i> 
                          <h3><b>{{trans('home.whyh8')}}</b></h3>
                            <p>{{trans('home.whyp8')}}.</p>
                            </div>
          
                         <div class="col-md-4" style="padding:10px;">
                            <i class="fa fa-heart-o" style="font-size:40px;color:#35630c"></i>
                          <h3><b>{{trans('home.whyh3')}}</b></h3>
                            <p> {{trans('home.whyp3')}}</p>
                          </div>

                          <div class="col-md-4" style="padding:10px;">
                                <i class="fa fa-plus-square-o" style="font-size:40px;color:#35630c"></i>
                            <h3><b>{{trans('home.whyh4')}}</b></h3>
                            <p>{{trans('home.whyp4')}}</p>
                           </div>

                           <div class="col-md-4" style="padding:10px;">
                              <i class="fa fa-snowflake-o" style="font-size:40px;color:#35630c"></i>
                              <h3><b>{{trans('home.whyh2')}}</b></h3>
                              <p>{{trans('home.whyp2')}} </p>
                              </div>
          
                         <div class="col-md-4" style="padding:10px;">
                            <i class="fa fa-check-square-o" style="font-size:40px;color:#35630c"></i>    
                         <h3><b>{{trans('home.whyh6')}}</b></h3>
                            <p> {{trans('home.whyp6')}}</p>
                          </div>

                          <div class="col-md-4" style="padding:10px;">
                              <i class="fa fa-paper-plane-o" style="font-size:40px;color:#35630c"></i>
                             <h3><b>{{trans('home.whyh5')}}</b></h3>
                              <p>{{trans('home.whyp5')}}</p>
                              </div>

                          <div class="col-md-4" style="padding:10px;">
                            <i class="fa fa-cutlery" style="font-size:40px;color:#35630c"></i>  
                            <h3><b>{{trans('home.whyh7')}}</b></h3>
                            <p>{{trans('home.whyp7')}}</p>
                           </div>
          
                         <div class="col-md-4" style="padding:10px;">
                            <i class="fa fa-handshake-o" style="font-size:40px;color:#35630c"></i> 
                          <h3><b>{{trans('home.whyh9')}}</b></h3>
                            <p>{{trans('home.whyp9')}}</p>
                          </div>
                        </div>
               </div>
              </section>
               <section id="services">
               <div class="container">
                  <div style="text-align:center;" class="heading-custom">
                    <h2>{{trans('home.criteria')}}</h2>
                    <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                        <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                        <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                        <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                    </p>
                </div>
            </div>

            <div class="container" style="text-align:center">
                <div class="row">
                     <div class="col-md-3" style="padding:10px;">
                       <i class="icon icon-check" style="font-size:40px;color:#35630c"></i>
                       <h3> <b></b></h3>
                       <p> {{trans('home.criteria1')}}</p>
                      </div>
     
                      <div class="col-md-3" style="padding:10px;">
                       <i class="icon icon-earth" style="font-size:40px;color:#35630c"></i>
                       <h3><b></b></h3>
                       <p>{{trans('home.criteria2')}} </p>
                       </div>
     
                    <div class="col-md-3" style="padding:10px;">
                       <i class="icon icon-medal" style="font-size:40px;color:#35630c"></i>
                     <h3><b></b></h3>
                       <p>{{trans('home.criteria3')}}</p>
                     </div>

                     <div class="col-md-3" style="padding:10px;">
                           <i class="icon icon-seeding" style="font-size:40px;color:#35630c;"></i>
                       <h3><b></b></h3>
                       <p>{{trans('home.criteria4')}}</p>
                      </div>
     
                    
                   </div>
          </div>
        </section>
        <section id="services" style="background:#e7e3e36b;">
          <div class="container">
              <div style="text-align:center;" class="heading-custom">
                <h2> {{trans('home.responsible')}}</h2>
                <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                    <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                    <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                    <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                </p>
            </div>
        </div>
        <div class="container" style="text-align:center">
            <div class="row">
                 <div class="col-md-4" style="padding:10px;">
                   <i class="icon icon-sehat-font-8" style="font-size:40px;color:#35630c"></i>
                   <h3> <b></b></h3>
                   <p>{{trans('home.responsible1')}}</p>
                  </div>
 
                  <div class="col-md-4" style="padding:10px;">
                   <i class="icon icon-sehat-font-15" style="font-size:40px;color:#35630c"></i>
                   <h3><b></b></h3>
                   <p>{{trans('home.responsible2')}} </p>
                   </div>
 
                <div class="col-md-4" style="padding:10px;">
                   <i class="icon icon-strategy" style="font-size:40px;color:#35630c"></i>
                 <h3><b></b></h3>
                   <p>{{trans('home.responsible3')}}</p>
                 </div>

                 <div class="col-md-2"></div>

                 <div class="col-md-4" style="padding:10px;">
                       <i class="icon icon-012-india" style="font-size:40px;color:#35630c;"></i>
                   <h3><b></b></h3>
                   <p>{{trans('home.responsible4')}}</p>
                  </div>

                  <div class="col-md-4" style="padding:10px;">
                      <i class="icon icon-005-phone-call" style="font-size:40px;color:#35630c;"></i>
                  <h3><b></b></h3>
                  <p>{{trans('home.responsible5')}}</p>
                 </div>
                 <div class="col-md-2"></div>
                
               </div>
      </div>
    </section>
    @include('layouts.get_consultation')
    </main>
    @include('layouts.footer')
@endsection