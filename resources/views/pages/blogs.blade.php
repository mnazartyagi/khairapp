@extends('layouts.default')

@section('content')
@include('layouts.header')
</br>
<main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
    <div class="container" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <small>{{$cnameprefix}}</small><h3>{{$categoryName}}</h3>
    </div>
    <div class="container" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">

      <div class="row">

          <div class="col-md-3">

              <!-- Categories Widget -->
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
                          <a href="{{route('blogs')}}"><h6>{{$all}}</h6></a>                                   
                          @endif
                          <div class="filter-setting">
                              <div class="scroll-v-250px">
                                  @foreach ($dcategories as $dcategory)
                              <div class="padding-v-xs" style="padding:5px;"><a style="display:flex;font-size:15px;" href="{{ route('blogs',['dcategory'=>$dcategory->slug]) }}">
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
        <!-- Blog Entries Column -->
        <div class="col-md-9" style="padding-top:10px;">
          <!-- Blog Post -->
          @foreach ($blogs as $blog)
          <div class="card rounded-0">
            <img class="card-img-top rounded-0 banners_blog" src="{{asset('storage/'.$blog->image)}}" width="700" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">{{App::getLocale()=='en' ? $blog->name_en: $blog->name_ar}}</h4>
              <p class="card-text">{!!App::getLocale()=='en' ? str_limit($blog->description_en,400): str_limit($blog->description_ar,400)!!}</p>
            <a href="{{route('view_blog',$blog->slug)}}" style="float:{{App::getLocale()=='en'?'right':'left'}};" class="btn btn-primary btn-sm rounded-0">{{trans('extra.read')}}</a>
            </div>
            <div class="card-footer text-muted">
              {{$blog->created_at->format('d M Y')}}
            </div>
          </div><hr>
          @endforeach
          <!-- Blog Post -->

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item {{$blogs->appends(request()->input())->nextPageUrl() ? '' : 'disabled'}}">
              <a class="page-link" href="{{$blogs->appends(request()->input())->nextPageUrl()}}">&{{App::getLocale()=='en'?'larr':'rarr'}}; {{trans('extra.old')}}</a>
            </li>
          <li class="page-item {{$blogs->appends(request()->input())->previousPageUrl() ? '' : 'disabled'}}">
              <a class="page-link" href="{{$blogs->appends(request()->input())->previousPageUrl()}}">{{trans('extra.new')}} &{{App::getLocale()=='en'?'rarr':'larr'}};</a>
            </li>
          </ul>
      </div>
        <!-- Sidebar Widgets Column -->
      </div>
      <!-- /.row -->

    </div>
</main>    
@include('layouts.footer')    
@endsection