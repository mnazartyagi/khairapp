@extends('layouts.default')
@section('content')
    @include('layouts.header')</br>
    <main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}};">
            <div class="container">
            <h2>{{App::getLocale()=='en' ? $news->name_en : $news->name_ar}}</h2>
            <p>{!!App::getLocale()=='en' ? $news->description_en : $news->description_ar!!}</p>
            </div>
    </main>
    @include('layouts.footer')
@endsection