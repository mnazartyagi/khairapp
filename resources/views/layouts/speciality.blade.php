<section id="contact" style="padding-top: 10px;" class="wow fadeInUp" dir="{{App::getLocale()=='en' ? '': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <div class="container">
          <div class="heading-custom">
            <h2 style="padding-bottom: 10px;padding-top: 10px;">{{trans('home.premium')}}</h2>
           </div>
  
          <div class="row contact-info">
            @foreach ($packages as $package)
            <div class="col-md-3">
                <div class="speciality-content">
                    <a href="{{route('view_packages',$package->slug)}}">
                  <img src="{{asset('storage/'.$package->logo)}}" alt="" height="125" width="125">
                <h3>{{App::getLocale()=='en' ? $package->name_en : $package->name_ar}}</h3></a>
                  <p></p>
                </div>
            </div>
            @endforeach        
          </div>
         <div class="text-center">
            <a href="{{route('packages')}}" style="font-size:16px;">More Packages <i class="fa fa-arrow-{{App::getLocale()=='en' ? 'right' :'left'}}"></i></a>
        </div>
       
        </div>
</section>