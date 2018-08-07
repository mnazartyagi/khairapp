@extends('layouts.default')
@section('content')
    @include('layouts.header')</br>
    <main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <div class="container" style="padding-bottom:20px;">
            <div style="text-align:center">
                <h2>{{trans('extra.news')}}</h2>
                <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                        <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                        <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                        <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                </p>
            </div>
            <div class="row">
                @foreach ($news as $new)
                <div class="col-md-4" style="padding-top:10px;">
                        <div class="card rounded-0">
                        <img class="card-img-top rounded-0" src="{{asset('storage/'.$new->image)}}" height="200" width="400" alt="Card image cap">
                                <small style="margin-{{App::getLocale()=='en'?'left':'right'}}:10px;margin-top:5px;">{{$new->updated_at->format('d M Y')}}</small>
                                <div class="card-body">
                                  <h4 class="card-title">{{App::getLocale()=='en' ? $new->name_en : $new->name_ar}}</h4>
                                {!!App::getLocale()=='en' ? str_limit($new->description_en,200): str_limit($new->description_ar,200)!!}
                                <a href="{{route('view_news',$new->slug)}}" style="float:{{App::getLocale()=='en'?'right':'left'}};" class="btn btn-primary btn-sm rounded-0">{{trans('extra.read')}}</a>
                                </div>
                        </div>
                </div> 
                @endforeach
                <ul class="pagination justify-content-center mb-4">
                        {{$news->links()}}
                    </ul>
            </div>
        </div>
    </main>
    @include('layouts.footer')
@endsection