@extends('layouts.default')

@section('content')
    @include('layouts.header')
    <main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
            <div class="container-fluid" style="padding:0;">
        
                <img  class="img-fluid rounded-0 package" src="{{asset('storage/'.$package->image_main)}}" alt="{{$package->slug}}" width="1920">
            </div>
 <div class="container" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">

    <div style="text-align:center" class="heading-custom">
        <h2 class="my-3">{{App::getLocale()=='en' ? $package->name_en: $package->name_ar}}</h2>
        <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
            <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
            <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
            <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
        </p>
      </div>
      <div class="container mt-4">
            <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active col-6" id="nav-ayurveda-tab" data-toggle="tab" href="#nav-ayurveda" role="tab" aria-controls="nav-ayurveda" aria-selected="true">{{trans('home.ayur')}}</a>
                      <a class="nav-item nav-link col-6" id="nav-naturo-tab" data-toggle="tab" href="#nav-naturo" role="tab" aria-controls="nav-naturo" aria-selected="false">{{trans('home.natur')}}</a>
                    </div>
                  </nav>
            <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-ayurveda" role="tabpanel" aria-labelledby="nav-ayurveda-tab">
                      <div class="container"><br>
                        {!!App::getLocale()=='en' ? $package->ayur_details_en : $package->ayur_details_ar!!}
                    </div>
                    </div>
                    <div class="tab-pane fade" id="nav-naturo" role="tabpanel" aria-labelledby="nav-naturo-tab">
                        <div class="container"><br>
                            {!!App::getLocale()=='en' ? $package->natur_details_en : $package->natur_details_ar!!}
                        </div>
                    </div>
                  </div>
            </div>
<!-- /.row -->
</div> 
@include('layouts.personal')
    </main>   
    @include('layouts.footer')
@endsection