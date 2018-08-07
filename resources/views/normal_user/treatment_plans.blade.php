@extends('layouts.default')
@section('content')
    @include('normal_user.partials.nav')</br>
    @include('normal_user.partials.logout')
    <div class="content-wrapper"  dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}};padding-top:70px;">
            
            <div class="container">
                    <h2>{{trans('user.yourtreat')}}</h2>
                <hr>
            </div>
            <div class="container">   
                        @if ($plans->count()>0)
                        <table class="table table-bordered col-lg-10">
                                <thead>
                                  <tr>
                                    <th>{{trans('user.uploaddate')}}</th>
                                    <th>{{trans('user.plan')}}</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                        @foreach ($plans as $plan)
                                        <tr>
                                            <th>{{$plan->created_at->format('d M Y')}}</th>
                                            <th>{{$plan->plan_name}}</th>
                                            <th><a href="/storage/{{ json_decode($plan->file)[0]->download_link}}">{{trans('user.download')}}</a></th>
                                         </tr>
                                        @endforeach
                                </tbody>
                              </table>
                        @else
                            <h4>{{trans('user.treatline')}}</h4>
                        @endif
              
            </div>
    </div>

    @include('normal_user.partials.footer')
@endsection