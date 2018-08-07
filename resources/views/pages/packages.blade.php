@extends('layouts.default')
@section('content')
    @include('layouts.header')</br>
    <main id="main" dir="{{App::getLocale()=='en' ? '': 'rtl'}}">
            <div class="container" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
                  <h2>{{trans('extra.allprogram')}}</h2>
                  <hr>
                  <div class="row">
                    @foreach ($packages as $package)
                    <div class="col-lg-4 col-sm-6 portfolio-item" style="margin-bottom:15px;">
                        <div class="card text-center rounded-0" style="border:0;">
                          <div style="text-align:center;">
                              <a href="{{route('view_packages',$package->slug)}}">
                        <img class="img-fluid" src="{{asset('storage/'.$package->logo)}}" alt="{{$package->slug}}" width="125" height="125"></a></div>
                          <div class="card-body">
                            <h4 class="card-title">
                              <a href="{{route('view_packages',$package->slug)}}">{{App::getLocale()=='en' ? $package->name_en: $package->name_ar}}</a>
                            </h4>
                          </div>
                        </div>
                      </div>
                    @endforeach
                    <ul class="pagination justify-content-center mb-4">
                        {{$packages->links()}}
                    </ul>
                  </div>
            </div>
    </main>
    @include('layouts.footer')
@endsection