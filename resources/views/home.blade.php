@extends('layouts.default')

@section('content')
    @include('layouts.header')
    @include('layouts.search-bar')
    @include('layouts.offer')
    @include('layouts.video')
    @include('layouts.speciality')
    @include('layouts.get_consultation')
    @include('layouts.why')
    @include('layouts.testimonial')
    @include('layouts.news')
    @include('layouts.footer')
@endsection
@section('extra-js')
@if ($offers->count()>3)
<script>
        $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: false,
    loop: true,
    nav:true,
    
    navText: [
			"<i class='fa fa-angle-left' style='font-size:50px;'></i>",
			"<i class='fa fa-angle-right' style='font-size:50px;'></i>"
    ],
    responsive: { 0: { items: 1 }, 768: { items: 2 }, 900: { items: 3 } }
  });
    </script>
@else
<script>
        $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: false,
    nav:true,
    responsive: { 0: { items: 1 ,
    
        loop: true,}, 768: { items: 2 ,
        
    loop: false,}, 900: { items: 3 ,
    
        loop: false,} }
  });
    </script>
@endif
    
@endsection

