@extends('layouts.default')

@section('content')
    @include('layouts.header')
    </br>
    <main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb rounded-0">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><b>{{trans('home.home')}}</b></a></li>
            <li class="breadcrumb-item active" aria-current="page">{{trans('home.diseases')}}</li>
            </ol>
        </nav>
    </div>
    <div class="container" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
    <div class="row">
            <div class="col-md-3" style="padding-top:10px;">
                    <div class="card rounded-0" style="box-shadow: 0 0 2px 1px black;">
                        <div class="card-header">                 
                                <a class="card-title" data-toggle="collapse" href="#filter1" aria-expanded="true" aria-controls="filter1"><i class="fa fa-list"></i> {{trans('home.category')}}
                                </a>    
                        </div>
                        @desktop
                    <div id="filter1" class="collpase">
                        @elsedesktop
                        <div id="filter1" class="collpase collapsing">
                        @enddesktop
                            <div class="card-body" style="line-height:30px;">
                                @if ($all)
                                <a href="{{route('diseases')}}"><h6>{{$all}}</h6></a>                                   
                                @endif
                                <div class="filter-setting">
                                    <div class="scroll-v-250px">
                                        @foreach ($dcategories as $dcategory)
                                    <div class="padding-v-xs" style="padding:5px;"><a style="display:flex;font-size:15px;" href="{{ route('diseases',['dcategory'=>$dcategory->slug]) }}">
                                            <i class="{{$dcategory->icon}}" style="font-size:25px;"></i>&nbsp;
                                        {{App::getLocale()=='en' ? $dcategory->name_en: $dcategory->name_ar}}</a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>  
            <div class="col-md-9">
                    <div class="container">
                        <div class="card" style="border:0;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <h3><i class="{{$categoryicon}}" style="color:#336305;"></i>&nbsp;{{$categoryName}}</h3></div>
                                    <div class="col-lg-6">
                                    <form action="{{route('search')}}" method="GET">
                                        @csrf
                                        <div class="form-group" >
                                            <div class="input-group">
                                    <input type="text" class="form-control col-lg-6 rounded-0" name="query" placeholder="{{trans('home.search')}}" />
                                    <button class="btn btn-danger rounded-0" type="button">
                                        <i class=" fa fa-search"></i>
                                    </button>
                                </div>
                                </div></form>
                            </div>
                                </div>
                                <hr> 
                                @if (Request::get('dcategory'))
                                <div class="row">
                                        @foreach ($diseases as $disease)
                                            <div class="col-6 col-md-4" >
                                            <a href="{{route('view_diseases',$disease->slug)}}">{{App::getLocale()=='en' ? $disease->name_en: $disease->name_ar}}</a>
                                              </div>
                                        @endforeach
                                </div> 
                                @else    
                                <div class="container">
                                  @foreach ($dcategories as $dcategory)
                                  <div class="row">
                                  <h3 style="font-family:calibri;"><b><i class="{{$dcategory->icon}}" style="font-size:30px;color:#336305;"></i>&nbsp;{{App::getLocale()=='en' ? $dcategory->name_en: $dcategory->name_ar}}</b></h3>
                                  </div>
                                  <div class="row" style="padding-left:0;">
                                  @foreach ($dcategory->diseases()->get() as $disease)
                                  <div class="col-md-4" style="padding-top:5px;text-align:center">
                                  <a href="{{route('view_diseases',$disease->slug)}}">{{App::getLocale()=='en' ? $disease->name_en: $disease->name_ar}}</a>
                                    </div>
                                  @endforeach
                                </div><hr>
                                  @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                  </div>
            </div>
    </div>
    </div>
    </main>
    <div class="clearfix"></div>    
    @include('layouts.footer')
@endsection