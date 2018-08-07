@if ($news->count()>0)
    
<section id="services" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}};padding-top:10px;">
    <div class="container">
            <div style="text-align:center;" class="heading-custom">
              <h2 style="padding: 10px;">{{trans('extra.news')}}</h2>
              
          </div>
      </div>

      <div class="container">
            <div class="row">
                    
            @foreach ($news as $new)
            <div class="col-md-6 newsborder">
            
            <div class="span6 news">
            <div class="row">
                    
              <div class="col-3">
              <img src="{{asset('storage/'.$new->image)}}" width="112" height="112"  class="img-fluid" alt="Responsive image">
              </div>
              
            <div class="col-9" style="text-align:{{App::getLocale()=='en'?'left':'right'}};">
            <p><b>{{App::getLocale()=='en' ? $new->name_en : $new->name_ar}}</b></p>
            <a href="{{route('view_news',$new->slug)}}" style="float:{{App::getLocale()=='en'?'right':'left'}}">{{trans('extra.read')}}</a>
            
              </div>
            
              </div>
              </div>
            
            </div>
            @endforeach
            
            
            </div>
            <div class="text-center">
               <a href="{{route('news')}}" style="font-size:16px;">{{trans('extra.allnews')}}<i class="fa fa-arrow-{{App::getLocale()=='en'? 'right': 'left'}}"></i></a>
           </div>
        </div>
            
            
</section></br>
@endif