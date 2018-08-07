@extends('layouts.default')
@section('content')
    @include('layouts.header')</br></br>
    <div class="container" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
            <div style="text-align:center;" class="heading-custom">
                    <h2>{{trans('about.who')}}</h2>
                    <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #e24253;"> 
                        <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                        <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                        <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                    </p>
            </div>
           
            <div style="text-align:center;">
                <p>{{trans('about.who1')}}</p>
              </div>
              <br>
              <hr>
              <br>
             
            <div style="text-align:center;" class="heading-custom">
                <h2>{{trans('about.mission')}}</h2>
                <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #e24253;"> 
                    <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                    <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                    <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                </p>
            </div>
            <div style="text-align:center;">
                <p>{{trans('about.mission1')}}</p>
              </div>      
    </div>
    <br>
    <hr>
    <br>

    <div class="container">
                <div style="text-align:center;" class="heading-custom">
                  <h2>{{trans('home.value')}}</h2>
                  <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                      <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                      <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                      <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                  </p>
              </div>
          </div>
    

    <div class="container" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
                <div class="row text-center">
                     <div class="col-md-4" style="padding:10px;">
                       <i class="icon icon-quality2-font" style="font-size:40px;color:#35630c"></i>
                       <h3> <b> {{trans('home.valueh3')}} </b> </h3>
                       <p> {{trans('home.valuep3')}}</p>
                      </div>
     
                      <div class="col-md-4" style="padding:10px;">
                       <i class="icon icon-001-libra" style="font-size:40px;color:#35630c"></i>
                       <h3><b>{{trans('home.valueh2')}}</b></h3>
                       <p>{{trans('home.valuep2')}} </p>
                       </div>
     
                    <div class="col-md-4" style="padding:10px;">
                       <i class="icon icon-empathy2-font" style="font-size:40px;color:#35630c"></i>
                     <h3><b>{{trans('home.valueh1')}}</b></h3>
                       <p>{{trans('home.valuep1')}}</p>
                     </div>

                     <div class="col-md-4" style="padding:10px;">
                           <i class="icon icon-023-success" style="font-size:40px;color:#35630c"></i>
                       <h3><b>{{trans('home.valueh6')}}</b></h3>
                       <p>{{trans('home.valuep6')}}</p>
                      </div>
     
                      <div class="col-md-4" style="padding:10px;">
                       <i class="icon icon-ecology-font" style="font-size:40px;color:#35630c"></i>
                      <h3><b> {{trans('home.valueh5')}}</b></h3>
                       <p>{{trans('home.valuep5')}}</p>
                       </div>
     
                    <div class="col-md-4" style="padding:10px;">
                       <i class="icon icon-educate-font" style="font-size:40px;color:#35630c"></i>    
                    <h3><b>{{trans('home.valueh4')}}</b></h3>
                       <p>{{trans('home.valuep4')}}</p>
                     </div>
                   </div>
          </div>

          <br>
          <hr>
          <br>




          <div class="container" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
                        <div style="text-align:center;" class="heading-custom">
                          <h2>{{trans('home.leader')}}</h2>
                          <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                              <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                              <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                              <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                          </p>
                      </div>

                                <div class="container" id="team">
                                  <div class="row">

                                      <div class="col-lg-3 col-md-6" data-toggle="modal" data-target="#bash">
                                          <div class="member">
                                            <div class="pic"><img src="{{asset('storage/images/team/200/basheer2.jpg')}}" alt=""></div>
                                            <div class="details">
                                              <h4>{{trans('about.basheer')}}</h4>
                                              <span>{{trans('about.basheerjob')}}</span>
                                            </div>
                                          </div>
                                        </div>

                                     
                                     <div class="modal fade" id="bash">
                                        <div class="modal-dialog modal-lg modal-md">
                                          <div class="modal-content">
                                            <div class="modal-body">
                                            <a href="index.html#" data-dismiss="modal" class="class pull-right"><span class="fa fa-remove"></span></a><br>
                                               <br>
                                              <div class="row">
                                                <div class="col-md-6 text-center">
                                                  <img src="{{asset('storage/images/team/300/basheer3.jpg')}}" style="max-width:300px;">
                                                </div>
                                                <div class="col-md-6">
                                                  <h4><span>{{trans('about.basheer')}}</span></h4>
                                                  <p>{{trans('about.basheerdesc')}}</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                   



                                      <div class="col-lg-3 col-md-6" data-toggle="modal" data-target="#munira">
                                          <div class="member">
                                            <div class="pic"><img src="{{asset('storage/images/team/200/munira.jpg')}}" alt=""></div>
                                            <div class="details">
                                              <h4>{{trans('about.munira')}}</h4>
                                              <span>{{trans('about.munirajob')}}</span>
                                            </div>
                                          </div>
                                        </div>
                          



                                    <div class="modal fade" id="munira">
                                        <div class="modal-dialog modal-lg modal-md">
                                          <div class="modal-content">
                                            <div class="modal-body">
                                            <a href="index.html#" data-dismiss="modal" class="class pull-right"><span class="fa fa-remove"></span></a><br>
                                               <br>
                                              <div class="row">
                                                <div class="col-md-6 text-center">
                                                  <img src="{{asset('storage/images/team/300/munira.jpg')}}" style="max-width:300px;">
                                                </div>
                                                <div class="col-md-6">
                                                  <h4><span>{{trans('about.munira')}}</span></h4>
                                                  <p>{{trans('about.muniradesc')}}</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>



                                      
                                      
                                      <div class="col-lg-3 col-md-6" data-toggle="modal" data-target="#fazil">
                                          <div class="member">
                                            <div class="pic"><img src="{{asset('storage/images/team/200/fazil.jpg')}}" alt=""></div>
                                            <div class="details">
                                              <h4>{{trans('about.fazil')}}</h4>
                                              <span>{{trans('about.faziljob')}}</span>
                                            </div>
                                          </div>
                                        </div>

                                   


                                      <div class="modal fade" id="fazil">
                                          <div class="modal-dialog modal-lg modal-md">
                                            <div class="modal-content">
                                              <div class="modal-body">
                                              <a href="index.html#" data-dismiss="modal" class="class pull-right"><span class="fa fa-remove"></span></a><br>
                                                 <br>
                                                <div class="row">
                                                  <div class="col-md-6 text-center">
                                                    <img src="{{asset('storage/images/team/300/fazil.jpg')}}" style="max-width:300px;">
                                                  </div>
                                                  <div class="col-md-6">
                                                    <h4><span>{{trans('about.fazil')}}</span></h4>
                                                    <p>{{trans('about.fazildesc')}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>




                                      <div class="col-lg-3 col-md-6" data-toggle="modal" data-target="#sai">
                                          <div class="member">
                                            <div class="pic"><img src="{{asset('storage/images/team/200/shree2.jpg')}}" alt=""></div>
                                            <div class="details">
                                              <h4>{{trans('about.saidalvi')}}</h4>
                                              <span>{{trans('about.saidalvijob')}}</span>
                                            </div>
                                          </div>
                                        </div>

                          
                                  



                                    <div class="modal fade" id="sai">
                                        <div class="modal-dialog modal-lg modal-md">
                                          <div class="modal-content">
                                            <div class="modal-body">
                                            <a href="index.html#" data-dismiss="modal" class="class pull-right"><span class="fa fa-remove"></span></a><br>
                                               <br>
                                              <div class="row">
                                                <div class="col-md-6 text-center">
                                                  <img src="{{asset('storage/images/team/300/sree3.jpg')}}" style="max-width:300px;">
                                                </div>
                                                <div class="col-md-6">
                                                  <h4><span>{{trans('about.saidalvi')}}</span></h4>
                                                  <p>{{trans('about.saidalvidesc')}}</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>


                                      <div class="col-lg-3 col-md-6" data-toggle="modal" data-target="#seehan">
                                          <div class="member">
                                            <div class="pic"><img src="{{asset('storage/images/team/200/seehan2.jpg')}}" alt=""></div>
                                            <div class="details">
                                              <h4>{{trans('about.seehan')}}</h4>
                                              <span>{{trans('about.seehanjob')}}</span>
                                            </div>
                                          </div>
                                        </div>
                          
                                    




                                    <div class="modal fade" id="seehan">
                                        <div class="modal-dialog modal-lg modal-md">
                                          <div class="modal-content">
                                            <div class="modal-body">
                                            <a href="index.html#" data-dismiss="modal" class="class pull-right"><span class="fa fa-remove"></span></a><br>
                                               <br>
                                              <div class="row">
                                                <div class="col-md-6 text-center">
                                                  <img src="{{asset('storage/images/team/300/seehan3.jpg')}}" style="max-width:300px;">
                                                </div>
                                                <div class="col-md-6">
                                                  <h4><span>{{trans('about.seehan')}}</span></h4>
                                                  <p>{{trans('about.seehandesc')}}</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                          
                                </div>
                       
                </div>
                <br>
                <hr>
                <br>


                <div class="container" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
                    <div style="text-align:center;" class="heading-custom">
                      <h2>{{trans('home.techn')}}</h2>
                      <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                          <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                          <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                          <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                      </p>
                  </div>

                            <div class="container" id="team">
                              <div class="row">
                                <div class="col-md-3"></div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="member">
                                        <div class="pic"><img src="{{asset('storage/images/team/200/shadab2.jpg')}}" alt=""></div>
                                        <div class="details">
                                          <h4>{{trans('about.shadab')}}</h4>
                                          <span>{{trans('about.shadabjob')}}</span>
                                        </div>
                                      </div>
                                    </div>

                               



                                  <div class="col-lg-3 col-md-6" >
                                      <div class="member">
                                        <div class="pic"><img src="{{asset('storage/images/team/200/tyagi2.jpg')}}" alt=""></div>
                                        <div class="details">
                                          <h4>{{trans('about.nazar')}}</h4>
                                          <span>{{trans('about.nazarjob')}}</span>
                                        </div>
                                      </div>
                                    </div> <div class="col-md-3"></div>  

                              </div>
                      
                            </div>
                   
            </div>


            <br>
            <br>
            <br>



                <div class="container" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
                    <div style="text-align:center;" class="heading-custom">
                      <h2>{{trans('home.advisory')}}</h2>
                      <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                          <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                          <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                          <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                      </p>
                  </div>

                            <div class="container" id="team" style="text-align:center;">
                              <div class="row">

                                  <div class="col-lg-3 col-md-6" data-toggle="modal" data-target="#rashidi">
                                      <div class="member">
                                        <div class="pic"><img src="{{asset('storage/images/team/200/alrashidi1.jpg')}}" alt=""></div>
                                        <div class="details">
                                          <h4>{{trans('about.alrashidi')}}</h4>
                                          <span>{{trans('about.alrashidijob')}}</span>
                                        </div>
                                      </div>
                                    </div>



                                <div class="modal fade" id="rashidi">
                                    <div class="modal-dialog modal-lg modal-md">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                        <a href="index.html#" data-dismiss="modal" class="class pull-right"><span class="fa fa-remove"></span></a><br>
                                           <br>
                                          <div class="row">
                                            <div class="col-md-6 text-center">
                                              <img src="{{asset('storage/images/team/300/alrashidi2.jpg')}}" style="max-width:300px;">
                                            </div>
                                            <div class="col-md-6">
                                              <h4><span>{{trans('about.alrashidi')}}</span></h4>
                                              <p>{{trans('about.alrashididesc')}}
                                                  </p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>




                                  <div class="col-lg-3 col-md-6" data-toggle="modal" data-target="#mansor">
                                      <div class="member">
                                        <div class="pic"><img src="{{asset('storage/images/team/200/mansor.jpg')}}" alt=""></div>
                                        <div class="details">
                                          <h4>{{trans('about.mansor')}}</h4>
                                          <span>{{trans('about.mansorjob')}}</span>
                                        </div>
                                      </div>
                                    </div>
                                  
                      
                           


                                <div class="modal fade" id="mansor">
                                    <div class="modal-dialog modal-lg modal-md">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                        <a href="index.html#" data-dismiss="modal" class="class pull-right"><span class="fa fa-remove"></span></a><br>
                                           <br>
                                          <div class="row">
                                            <div class="col-md-6 text-center">
                                              <img src="{{asset('storage/images/team/300/mansor.jpg')}}" style="max-width:300px;">
                                            </div>
                                            <div class="col-md-6">
                                              <h4><span>{{trans('about.mansor')}}</span></h4>
                                              <p>{{trans('about.mansordesc')}}</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>



                                  <div class="col-lg-3 col-md-6" data-toggle="modal" data-target="#kamran">
                                      <div class="member">
                                        <div class="pic"><img src="{{asset('storage/images/team/200/shah.jpg')}}" alt=""></div>
                                        <div class="details">
                                          <h4>{{trans('about.kamran')}}</h4>
                                          <span>{{trans('about.kamranjob')}}</br> {{trans('about.kamranjob2')}}</span>
                                        </div>
                                      </div>
                                    </div>

                      
  

                                <div class="modal fade" id="kamran">
                                    <div class="modal-dialog modal-lg modal-md">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                        <a href="index.html#" data-dismiss="modal" class="class pull-right"><span class="fa fa-remove"></span></a><br>
                                           <br>
                                          <div class="row">
                                            <div class="col-md-6 text-center">
                                              <img src="{{asset('storage/images/team/300/shah.jpg')}}" style="max-width:300px;">
                                            </div>
                                            <div class="col-md-6">
                                              <h4><span>{{trans('about.kamran')}}</span></h4>
                                              <p>{{trans('about.kamrandesc')}}</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-lg-3 col-md-6" data-toggle="modal" data-target="#ibrahim">
                                      <div class="member">
                                        <div class="pic"><img src="{{asset('storage/images/team/200/Ikutty.jpg')}}" alt=""></div>
                                        <div class="details">
                                          <h4>{{trans('about.ibrahim')}}</h4>
                                          <span>{{trans('about.ibrahimjob')}}</span>
                                        </div>
                                      </div>
                                    </div>


                      

                                <div class="modal fade" id="ibrahim">
                                    <div class="modal-dialog modal-lg modal-md">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                        <a href="index.html#" data-dismiss="modal" class="class pull-right"><span class="fa fa-remove"></span></a><br>
                                           <br>
                                          <div class="row">
                                            <div class="col-md-6 text-center">
                                              <img src="{{asset('storage/images/team/300/Ikutty.jpg')}}" style="max-width:300px;">
                                            </div>
                                            <div class="col-md-6">
                                              <h4><span>{{trans('about.ibrahim')}}</span></h4>
                                              <p>{{trans('about.ibrahimdesc')}}</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-md-4"></div>

                                  <div class="col-lg-3 col-md-6" data-toggle="modal" data-target="#poo">
                                      <div class="member">
                                        <div class="pic"><img src="{{asset('storage/images/team/200/seeraj2.jpg')}}" alt=""></div>
                                        <div class="details">
                                          <h4>{{trans('about.poo')}}</h4>
                                          <span>{{trans('about.poojob')}}</span>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="modal fade" id="poo">
                                        <div class="modal-dialog modal-lg modal-md">
                                          <div class="modal-content">
                                            <div class="modal-body">
                                            <a href="index.html#" data-dismiss="modal" class="class pull-right"><span class="fa fa-remove"></span></a><br>
                                               <br>
                                              <div class="row">
                                                <div class="col-md-6 text-center">
                                                  <img src="{{asset('storage/images/team/300/seeraj3.jpg')}}" style="max-width:300px;">
                                                </div>
                                                <div class="col-md-6">
                                                  <h4><span>{{trans('about.poo')}}</span></h4>
                                                  <p>{{trans('about.poodesc')}}</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                    <div class="col-lg-3 col-md-6" data-toggle="modal" data-target="#arun">
                                        <div class="member">
                                          <div class="pic"><img src="{{asset('storage/images/team/200/arun.jpg')}}" alt=""></div>
                                          <div class="details">
                                            <h4>{{trans('about.arun')}}</h4>
                                            <span>{{trans('about.arunjob')}}</span>
                                          </div>
                                        </div>
                                      </div>



    
                                      <div class="modal fade" id="arun">
                                          <div class="modal-dialog modal-lg modal-md">
                                            <div class="modal-content">
                                              <div class="modal-body">
                                              <a href="index.html#" data-dismiss="modal" class="class pull-right"><span class="fa fa-remove"></span></a><br>
                                                 <br>
                                                <div class="row">
                                                  <div class="col-md-6 text-center">
                                                    <img src="{{asset('storage/images/team/300/arun.jpg')}}" style="max-width:300px;">
                                                  </div>
                                                  <div class="col-md-6">
                                                    <h4><span>{{trans('about.arun')}}</span></h4>
                                                    <p>{{trans('about.arundesc')}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>


                                      
    
                                            <div class="col-lg-3 col-md-4"></div>



                              </div>
                      
                            </div>
                   
            </div><hr>
    @include('layouts.footer')
@endsection