@extends('layouts.default')
@section('content')
    @include('layouts.header')</br></br>
    <main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <div class="container">
                <div style="text-align:center;" class="heading-custom">
                        <h1>{{trans('faq.faq')}}</h1>
                        <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                            <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                            <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                            <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                        </p>
                </div>
                <div class="container">
                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="card rounded-0">
                                  <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{trans('faq.faqh1')}}</a>
                                    </h5>
                                  </div>
                        
                                  <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body">
                                      <p>{{trans('faq.faqp1')}}</p>  
                                    </div>
                                  </div>
                                </div>
                                <div class="card rounded-0">
                                  <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">{{trans('faq.faqh2')}}
                                      </a>
                                    </h5>
                                  </div>
                                  <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                       <p>{{trans('faq.faqp2')}}</p> 
                                    </div>
                                  </div>
                                </div>
                                <div class="card rounded-0">
                                  <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">{{trans('faq.faqh3')}}</a>
                                    </h5>
                                  </div>
                                  <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>{{trans('faq.faqp3')}}</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="card rounded-0">
                                        <div class="card-header" role="tab" id="headingFour">
                                          <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">{{trans('faq.faqh4')}}</a>
                                          </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                                          <div class="card-body">
                                              <p>{{trans('faq.faqp4')}}</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card rounded-0">
                                            <div class="card-header" role="tab" id="headingFive">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">{{trans('faq.faqh5')}}</a>
                                              </h5>
                                            </div>
                                            <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                                              <div class="card-body">
                                                 <p>{{trans('faq.faqp5')}}</p>
                                              </div>
                                            </div>
                                    </div>
                                    <div class="card rounded-0">
                                            <div class="card-header" role="tab" id="headingSix">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">{{trans('faq.faqh6')}}</a>
                                              </h5>
                                            </div>
                                            <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
                                              <div class="card-body">
                                                  <p>{{trans('faq.faqp6')}}</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card rounded-0">
                                                <div class="card-header" role="tab" id="heading7">
                                                  <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">{{trans('faq.faqh7')}}</a>
                                                  </h5>
                                                </div>
                                                <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7">
                                                  <div class="card-body">
                                                        <p>{{trans('faq.faqp7.1')}}</p>
                                                        <p>{{trans('faq.faqp7.2')}}</p>
                                                        <p>{{trans('faq.faqp7.3')}}</p>
                                                        <p>{{trans('faq.faqp7.4')}}</p>
                                                        <p>{{trans('faq.faqp7.5')}}</p>
                                                        <p>{{trans('faq.faqp7.6')}}</p>                                                        
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card rounded-0">
                                                    <div class="card-header" role="tab" id="heading8">
                                                      <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">{{trans('faq.faqh8')}}</a>
                                                      </h5>
                                                    </div>
                                                    <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8">
                                                      <div class="card-body">
                                                          <p>{{trans('faq.faqp8')}}</p>
                                                      </div>
                                                    </div>
                                    </div>  
                                    <div class="card rounded-0">
                                            <div class="card-header" role="tab" id="heading9">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">{{trans('faq.faqh9')}}</a>
                                              </h5>
                                            </div>
                                            <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9">
                                              <div class="card-body">
                                                   <p> {{trans('faq.faqp9.1')}}</p>
                                                    <p>{{trans('faq.faqp9.2')}}</p>
                                                    <p>{{trans('faq.faqp9.3')}}</p>
                                                    <p>{{trans('faq.faqp9.4')}}</p>     
                                              </div>
                                            </div>
                                    </div>
                                    <div class="card rounded-0">
                                            <div class="card-header" role="tab" id="heading10">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">{{trans('faq.faqh10')}}</a>
                                              </h5>
                                            </div>
                                            <div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="heading10">
                                              <div class="card-body">
                                                    <p>{{trans('faq.faqp10.1')}}</p>
                                                    <p>{{trans('faq.faqp10.2')}}</p>
                                                    <p>{{trans('faq.faqp10.3')}}</p>
                                                   <p>{{trans('faq.faqp10.4')}}</p>
                                                   <p>{{trans('faq.faqp10.5')}}</p>    
                                                    <p>{{trans('faq.faqp10.6')}}</p>
                                                   <p>{{trans('faq.faqp10.7')}}</p>    
                                                    <p>{{trans('faq.faqp10.8')}}</p>
                                                   <p>{{trans('faq.faqp10.9')}}</p>
                                                   <p>{{trans('faq.faqp10.10')}}</p> 
                                              </div>
                                            </div>
                                    </div>
                                    <div class="card rounded-0">
                                            <div class="card-header" role="tab" id="heading11">
                                              <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">{{trans('faq.faqh11')}}</a>
                                              </h5>
                                            </div>
                                            <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11">
                                              <div class="card-body">
                                                    <p>{{trans('faq.faqp11')}}</p>
                                              </div>
                                            </div>
                                    </div>
                                    
                              </div>
                </div>
        </div>
    </main>
    @include('layouts.footer')
@endsection