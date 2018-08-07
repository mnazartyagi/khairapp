 @if ($offers->count()>0)
 <section id="testimonial" style="padding-bottom: 10px;" class="wow fadeInUp" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}};">
    <div class="container">
      
      <div class="owl-carousel testimonials-carousel">
        @foreach ($offers as $offer)
            
      <a  href="{{route('view_offer',$offer->slug)}}">
            <div class="testimonial-item">
                <img class="card-img-top img-fluid offer_main" src="{{asset('storage/'.$offer->image_feature)}}" width="300" alt="Card image cap">
                <div class="container">
                <h3>{{App::getLocale()=='en'? $offer->name_en : $offer->name_ar }}</h3>
                {{App::getLocale()=='en'? $offer->main_page_line_en : $offer->main_page_line_ar }}
            </div>
            </div></a>
        @endforeach
          


      </div>

    </div>
  </section> 
 @endif
 