@extends('layouts.default')
@section('content')
    @include('layouts.header')
    </br>
    <main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
      </div>
      <div class="container" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
          <div class="row" style="padding-left:15px">
            <!-- Title -->
            <h2 class="mt-4">{{App::getLocale()=='en' ? $blog->name_en: $blog->name_ar}}</h2>
          </div>
          <div class="row" style="padding-left:15px">
             <p>Posted on {{$blog->created_at->format('d M Y')}}</p>
          </div>
          <div class="addthis_inline_share_toolbox"></div>
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-md-9">
          <!-- Preview Image -->
          <img class="img-fluid rounded-0 banners" src="{{asset('storage/'.$blog->image)}}" width="900" alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead">{!!App::getLocale()=='en' ? $blog->description_en: $blog->description_ar!!}</p>
          <hr>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-3">

          <!-- Categories Widget -->
          <div class="card rounded-0">
            <h6 class="card-header">{{trans('home.category')}}</h6>
            <div class="card-body">
                  @foreach ($dcategories as $dcategory)
                  <a href="{{ route('blogs',['dcategory'=>$dcategory->slug]) }}"><h6>
                      <i class="{{$dcategory->icon}}" style="font-size:25px;"></i>&nbsp;
                      {{App::getLocale()=='en' ? $dcategory->name_en : $dcategory->name_ar}}</h6></a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- /.row -->

    </div>
    </main>
    @include('layouts.footer')
@endsection