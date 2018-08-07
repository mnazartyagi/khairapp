<section id="testimonials"  style="background-color: #f7f6f6;padding-top: 15px;" class="wow fadeInUp" dir="{{App::getLocale()=='en' ? '': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <div class="container">
                <div class="container">
                        <div style="text-align:center;" class="heading-custom">
                          <h2>{{trans('yoga.testimonial')}}</h2>
                         
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-8 col-center m-auto">
                          <div id="testi" class="carousel slide" data-ride="carousel">
                              <!-- Carousel indicators -->
                              <!-- Wrapper for carousel items -->
                              <div class="carousel-inner">
                                  <div class="item carousel-item active">
                                    <p class="testimonial">{{trans('yoga.testi1')}}</p>
                                      <p class="overview"><img src="{{asset('storage/images/testimonial/jeelani.jpg')}}" class="rounded-circle" alt="" height="50" width="50">&nbsp;&nbsp;<b>{{trans('yoga.testi1name')}}</b>{{trans('yoga.testi1loc')}}</p>
                                  </div>
                                  <div class="item carousel-item">
                                      
                                        <p class="testimonial">{{trans('yoga.testi2')}}</p>
                                            
                                                  
                                              
                                        <p class="overview"><img src="{{asset('storage/images/testimonial/kewami.png')}}" class="rounded-circle" alt="" height="50" width="50">&nbsp;&nbsp; <b>{{trans('yoga.testi2name')}}</b>{{trans('yoga.testi2loc')}}</p>
                                    </div>
                                  <div class="item carousel-item">
                                      
                                      <p class="testimonial">{{trans('yoga.testi3')}}</p>
                                          
                                                
                                            
                                      <p class="overview"><img src="{{asset('storage/images/testimonial/abdul.png')}}" class="rounded-circle" alt="" height="50" width="50">&nbsp;&nbsp; <b>{{trans('yoga.testi3name')}}</b>{{trans('yoga.testi3loc')}}</p>
                                  </div>
                                  <div class="item carousel-item">
                                      
                                        <p class="testimonial">{{trans('yoga.testi4')}}</p>
                                            
                                                  
                                              
                                        <p class="overview"><img src="{{asset('storage/images/testimonial/BiNGWEN.jpg')}}" class="rounded-circle" alt="" height="50" width="50">&nbsp;&nbsp; <b>{{trans('yoga.testi4name')}}</b>{{trans('yoga.testi4loc')}}</p>
                                    </div>

                              </div>
                              @desktop
                              <a class="carousel-control left carousel-control-prev" href="#testi"
                              data-slide="prev">
         
                <i class="fa fa-angle-left"></i>
         
              </a>
         <a class="carousel-control right carousel-control-next" href="#testi"
                              data-slide="next">
         
                <i class="fa fa-angle-right"></i>
         
              </a>
              @enddesktop
                          </div>
                      </div>
                  </div>
  
        </div>
      </section>