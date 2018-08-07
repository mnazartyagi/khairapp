<section id="intro" style="color:#35630c"  dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
    <div class="intro-content" style="justify-content:center">
      <div class="container">
            <div align="center">
                <!-- <a data-fancybox href="https://www.youtube.com/watch?v=FOa3fGdMNMY" style="padding: 0 20px;
            display: inline-block;
            border: 1px solid black;
            font-size: 18px;
            line-height: 40px;
            color: black; " class="hp-video">
            {{trans('home.howv')}}&nbsp;&nbsp;&nbsp;<span class="fa fa-play-circle"></span></a>-->
            <br><br>
          </div>
        </div>
        <div class="container">
        <h3 style="font-size:2.5rem;font-weight:500;" ><strong style="color:brown;">{{trans('home.treatment')}}</strong></h3>
        <h5 style="font-size:1.3rem; color:black;">{{trans('home.find')}}</h5>
        </div>
        <div class="container" style="padding:20px;">
        <div align="center">
            <form action="{{route('search')}}" method="GET">
                    <div class="input-group col-lg-8">
                        <div class="input-group-prepend d-none d-lg-block">
                            <span class="input-group-text" style="color:#fff;background-color: #0fb0aa;
                            border: 1px solid #0fb0aa;border-radius:0;"><b>{{trans('home.beforinput')}}</b></span>
                          </div>
                        <input type="text" class="search-query form-control" style="border-radius:0;"  placeholder="{{trans('home.placeholder')}}" name="query"/>
                          <span class="input-group-btn">
                            <button class="btn" type="search" style="border-radius:0; background-color:#008bff;">
                            <i class="fa fa-search" style="color:white;"></i>&nbsp;&nbsp;<b style="color:white;">{{trans('home.search')}}</b>
                            </button>
                          </span>
                    </div>
            </form>
        </div>
        </div> 
        <div class="container">   
        <div align="center">
            <div class="section-header d-none d-lg-block" style="margin-top:15vh; margin-bottom: -17vh;">
              <div class="row">
              <div class="col-md-4" style="color:white;">
                <a href="{{route('ayurveda')}}" style="color:#fff;">
                <i class="icon icon-ayurveda-font" style="font-size:50px;"></i>
                <h4>{{trans('home.ayur')}}</h4></a>
                </div>
                <div class="col-md-4" style="color:white;">
                    <a href="{{route('naturopathy')}}" style="color:#fff;"> 
                  <i class="icon icon-naturopathy-font" style="font-size:50px;"></i>
                  <h4>{{trans('home.natur')}}</h4></a>
                </div>
                <div class="col-md-4" style="color:white;">
                    <a href="{{route('yoga')}}" style="color:#fff;">
                  <i class="icon icon-yoga-font" style="font-size:50px;"></i>
                  <h4>{{trans('home.yoga')}}</h4></a>
                </div>
              </div>  
            </div>


            <div class="section-header d-md-none" style="margin-top:15vh; margin-bottom: -17vh;">
                <div class="row ">
                <div class="col-md-4" style="color:#a52a2a;">
                  <i class="icon icon-ayurveda-font" style="font-size:50px;"></i>
                  <a href="{{route('ayurveda')}}" style="color:#a52a2a;"><h4>{{trans('home.ayur')}}</h4></a>
                  </div>
                  <div class="col-md-4" style="color:#a52a2a;">
                    <i class="icon icon-naturopathy-font" style="font-size:50px;"></i>
                    <a href="{{route('naturopathy')}}" style="color:#a52a2a;"><h4>{{trans('home.natur')}}</h4></a>
                  </div>
                  <div class="col-md-4" style="color:#a52a2a;">
                    <i class="icon icon-yoga-font" style="font-size:50px;"></i>
                    <a href="{{route('yoga')}}" style="color:#a52a2a;"> <h4>{{trans('home.yoga')}}</h4></a>
                  </div>
                </div>  
              </div>



          </div>
        </div>
        
        </div>

        <div class="d-none d-md-block">
            <div id="bgbanner">
            </div>
        </div>
            
    </div>  
  </section>