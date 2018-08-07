@extends('layouts.default')
@section('content')
    @include('layouts.header')</br>
    <main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
    <div class="container" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb rounded-0">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><b>{{trans('home.home')}}</b></a></li>
            <li class="breadcrumb-item active" aria-current="page">{{trans('home.hospitals')}}</li>
            </ol>
        </nav>
        <h3>{{trans('home.hospitals')}}</h3>
    </div>
    
    <div class="container" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <div class="row">
                <div class="col-md-3">
                            <div class="card rounded-0" style="box-shadow: 0 0 2px 1px black;">
                                <div class="card-header text-center rounded-0">                   
                                    <a class="card-title" data-toggle="collapse" href="#filter1" aria-expanded="true" aria-controls="filter1">{{trans('home.filter')}}
                                </a> 
                                </div>
                                @desktop
                              <div id="filter1" class="collpase">
                                @elsedesktop
                                 <div id="filter1" class="collpase collapsing">
                                @enddesktop
                                    <div class="card-body">
                                        <div class="filter-setting">
                                            <label>{{trans('home.bytreat')}}</label>
                                            </a>
                                            <br>
                                            <div id="coll-1" class="collapse show">
                                                @foreach ($treatments as $treatment)
                                                <div class="padding-v-xs"> <a href="{{route('hospitals',['treatment'=>$treatment->slug])}}">
                                                        {{App::getLocale()=='en' ? $treatment->name_en: $treatment->name_ar}}</a>
                                                </div>
                                                @endforeach
                                            </div>
                                            <hr class="line">
                                            <label>{{trans('home.byambian')}}</label>
                                            </a>
                                            <br>
                                            <div id="coll-2" class="scroll-v-250px collapse show">
                                                @foreach ($ambiances as $ambiance)
                                                <div class="padding-v-xs">
                                                     <a href="{{route('hospitals',['ambiance'=>$ambiance->slug])}}">
                                                        
                                                    {{App::getLocale()=='en' ? $ambiance->name_en: $ambiance->name_ar}}</a>
                                                </div>
                                                @endforeach
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
            <div class="col-md-9" style="padding:10px;">
            <div class="container">
                <div class="infinite-scroll" id="updatediv">
            @foreach ($hospitals as $hospital)
            <div class="row">
                <div class="col-md-4 text-center" style="padding:5px;">
                        <div class="container" style="width:300px;border:1px solid black;">

                        <div id="HospitalCaro{{$hospital->slug}}" class="carousel carouselll slide" data-ride="carousel" >
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100 img-fluid" src="{{asset('storage/'.$hospital->image)}}" alt="First slide" style="height:226px;">
                                    </div>
                                    @if ($hospital->images)
                                    @foreach(json_decode($hospital->images,true) as $img)
                                    <div class="carousel-item">
                                        <img class="d-block w-100 img-fluid" src="{{asset('storage/'.$img)}}" alt="Second slide" style="height:226px;">
                                    </div>
                                    @endforeach
                                    @endif
                                    
                                  </div>
                                  <a class="carousel-control-prev" href="#HospitalCaro{{$hospital->slug}}" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  </a>
                                  <a class="carousel-control-next" href="#HospitalCaro{{$hospital->slug}}" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 </a>
                                </div>
                                </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <h3 class="text-center">{{App::getLocale()=='en' ? $hospital->name_en: $hospital->name_ar}}</h3>
                    <div class="row">
                    <div class="col-md-8">
                        <ul class="list-unstyled" style="font-weight:400;">
                            <li><b>{{trans('home.loc')}}</b>&nbsp;{{App::getLocale()=='en' ? $hospital->location_en: $hospital->location_ar}}</li>
                            @if($hospital->ambiances()->first())
                                <li><b>{{trans('home.amb')}}</b>&nbsp;{{App::getLocale()=='en' ? $hospital->ambiances()->first()->name_en: $hospital->ambiances()->first()->name_ar}}</li>
                                @endif
                            <li><b>{{trans('home.spc')}}</b>&nbsp;{{App::getLocale()=='en' ? $hospital->treatments()->first()->name_en: $hospital->treatments()->first()->name_ar}}</li>
                            <li><b>{{trans('home.accre')}}</b>&nbsp;{{$hospital->accreditation}}</li>
                            <li><b>{{trans('home.airport')}}</b>&nbsp;{{App::getLocale()=='en' ? $hospital->nearest_airport_en: $hospital->nearest_airport_ar}}</li>
                            
                        </ul>
                </div>
                <div class="col-md-4" style="text-align:-webkit-center;">
                    @if ($hospital->trip_advisor_div_id)
                    <div id="TA_cdsratingsonlynarrow{{$hospital->trip_advisor_div_id}}" class="TA_cdsratingsonlynarrow">
                        </div>
                    @endif
                </div>
            </div>
                </div>
            </div>
            <div class="row">
                    @if ($hospital->description_en||$hospital->description_ar)
                    <b> {{trans('home.over')}}</b>:
                    <div class="hospitaloverview" style="font-weight:400;">
                   {!!App::getLocale()=='en' ? $hospital->description_en: $hospital->description_ar!!}
                        </div>   
                    @endif
            </div>
        <div class="row" style="float:{{App::getLocale()=='en'?'right':'left'}};margin-{{App::getLocale()=='en'?'right':'left'}}:5px;padding-top:5px;">
            @auth('normal_user')
            <a style="color:#fff;" class="btn btn-danger btn-sm rounded-0"  data-toggle="modal" data-backdrop="static" data-keyboard="false" href="#getQuote{{$hospital->slug}}">{{trans('home.getquote')}}</a>
            @endauth
            @guest('normal_user')
        <a href="{{route('normal_user.getsignup')}}" class="btn btn-danger btn-sm rounded-0">{{trans('home.getquote')}}</a>
            @endguest
        <div class="modal" id="getQuote{{$hospital->slug}}" tabindex="-1" role="dialog" aria-labelledby="getQuote{{$hospital->slug}}Title" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content rounded-0" style="margin:1rem">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="card" style="border:0px">
                                    <div class="card-body">
                                        <h4 class="card-title text-center mb-4 mt-1">{{trans('home.getquote')}}</h4>
                                        <hr>
                                        <form class="form" role="form" action="{{route('post.quote')}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                 <div class="input-group-prepend">
                                                   <span class="input-group-text rounded-0"> <i class="fa fa-user-circle"></i> </span>
                                                    </div>
                                                <input name="name" class="form-control rounded-0" placeholder="{{trans('home.name')}}" type="text" required="">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                 <div class="input-group">
                                                    <div class="input-group-prepend">
                                                     <span class="input-group-text rounded-0"> <i class="fa fa-envelope"></i> </span>
                                                      </div>
                                                      <input name="email" placeholder="{{trans('home.email')}}" class="form-control rounded-0" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                 <div class="input-group">
                                                    <div class="input-group-prepend">
                                                     <span class="input-group-text rounded-0"> <i class="fa fa-envelope"></i> </span>
                                                      </div>
                                                      
                                                      <input name="hosp_name" value="{{$hospital->name_en}}" class="form-control rounded-0" type="text" readonly>
                                                  
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                 <div class="input-group">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text rounded-0"> <i class="fa fa-phone"></i> </span>
                                                        </div>
                                                    <input name="number" class="form-control rounded-0"  placeholder="{{trans('home.phonewithcountry')}}" type="text" required="" pattern="[\+]\d{5,}">
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                    <div class="input-group">
                                                    <textarea name="disease_desc" placeholder="{{trans('home.description')}}" class="form-control rounded-0" rows="4" required=""></textarea>
                                                    </div> <!-- input-group.// -->
                                                </div>
                                             <div class="form-group">
                                                 <button type="submit" class="btn btn-danger btn-block rounded-0">{{trans('home.getquote')}}</button>
                                             </div>
                                         </form>
                                        <hr>
                                        </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </br><hr>
            @endforeach
            <ul class="pagination justify-content-center mb-4">
                {{$hospitals->appends(request()->input())->links()}}
            </ul>
        </div>
            </div>
        </div>
      </div>
        </div>
    </main>
    <br>
    @include('layouts.footer')
    @endsection
    @section('extra-js')
    <script>
    $('ul.pagination').hide();
  $(function() {
      $('.infinite-scroll').jscroll({
          autoTrigger: true,
          loadingHtml: '<div style="text-align:center;"><img class="center-block" height="100" width="100" src="storage/images/giphy.gif" alt="Loading..." /></div>',
          padding: 0,
          nextSelector: '.pagination li.active + li a',
          contentSelector: 'div.infinite-scroll',
          callback: function() {
              $('ul.pagination').remove();
          }
      });
  });
    </script>
    <script>
    $(function(){

$(".hospitaloverview").elimore({
    maxLength: 140,
  moreText: "&nbsp;More",
  lessText: "&nbsp;Less"
});

});
    </script>
    
    @foreach ($hospitals as $hospital)
<script async src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq={{$hospital->trip_advisor_div_id}}&amp;locationId={{$hospital->trip_advisor_loca_id}}&amp;lang=en_US&amp;border=true&amp;display_version=2"></script>
    @endforeach
    @endsection