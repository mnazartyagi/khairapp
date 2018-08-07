@extends('layouts.default')
@section('content')
    @include('layouts.header')</br>
    <div class="container" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
            <div style="text-align:center;" class="heading-custom">
                    <h2>{{trans('about.privacy')}}</h2>
                    <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #e24253;"> 
                        <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                        <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                        <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
                    </p>
            </div>
        <div class="row">
                <p>{{trans('about.pline1')}}</p>

                <p>{{trans('about.pline2')}}</p>
                <p>{{trans('about.pline3')}}</p>
                <p>{{trans('about.pline4')}}</p>

                <p>{{trans('about.pline5')}}</p>

                <p>{{trans('about.pline6')}}</p>

                <p>{{trans('about.pline7')}}</p>

                <p>{{trans('about.pline8')}}</p>

                <p><b>{{trans('about.pline9')}}</b></p>
        </div>
    </div>
    @include('layouts.footer')
@endsection