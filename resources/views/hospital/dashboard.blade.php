@extends('layouts.default')
@section('content')
@include('hospital.partials.nav')
@include('hospital.partials.logout')
<div class="content-wrapper"  dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}};padding-top:70px;">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb rounded-0">
            <li class="breadcrumb-item">
              <a href="{{route('hospital.dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
          </ol>
          <!-- Icon Cards-->
        </div>
        <div class="container-fluid">
            <h1>Hello, {{Auth::user()->name_en}}</h1>
        </div>
</div>
@include('hospital.partials.footer')    
@endsection