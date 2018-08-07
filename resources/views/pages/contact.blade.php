@extends('layouts.default')

@section('content')
    @include('layouts.header')</br>
    <main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}">
      <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><b>{{trans('home.home')}}</b></a></li>
            <li class="breadcrumb-item active" aria-current="page">{{trans('home.contact')}}</li>
            </ol>
        </nav>
    </div>
    <section id="contact" class="wow fadeInUp">
        <div class="container">
          <div style="text-align:center" class="heading-custom">
            <h2>{{trans('home.contact')}}</h2>
            <p class="title-devider wow fadeInUp"  data-wow-delay="0.3s" style="color: #35630c;"> 
                <span class="line-1 wow fadeInUp"  data-wow-delay="2.0s">  </span> 
                <span class="line-2 wow fadeInUp"  data-wow-delay="1.8s">  </span> 
                <span class="line-3 wow fadeInUp"  data-wow-delay="1.6s">  </span>
            </p>
          </div>
  
          <div class="row contact-info">
  
            <div class="col-md-4">
              <div class="speciality-content">
                <i class="ion-ios-location-outline"></i>
                <h3>{{trans('home.address')}}</h3>
                <p>Ist floor, Machingal Tower, National Highway, Kolappuram, Malappuram Dist., Kerala</p>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="speciality-content">
                <i class="ion-ios-telephone-outline"></i>
                <h3>{{trans('home.phone')}}</h3>
                <p><a href="tel:+914942468004">04942468004</a></p>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="speciality-content">
                <i class="ion-ios-email-outline"></i>
                <h3>{{trans('home.mail')}}</h3>
                <p><a href="mailto:contact@natukair.com">contact@natukair.com</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
        <div id="google-map" data-latitude="11.058856" data-longitude="75.934484"></div>
        </div>
      <div class="container">
          <form action="{{route('post.contact')}}" method="POST" role="form">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="{{trans('home.name')}}"/>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="{{trans('home.email')}}" required />
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="{{trans('home.subj')}}" required/>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="{{trans('home.message')}}" required></textarea>
            </div>
            <div class="text-center"><input type="submit" class="btn btn-danger rounded-0" value="{{trans('home.submit')}}"/></div>
          </form>
      </div>
</section>
    </main>
    @include('layouts.footer')
@endsection