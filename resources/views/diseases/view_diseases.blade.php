@extends('layouts.default')
@section('content')
    @include('layouts.header')
    <main id="main" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}}">
        <section id="intro" style="color:black;height:40vh">
            <div class="intro-content" style="justify-content:center">
                <div class="container">
                <h2><strong>{{App::getLocale()=='en' ? $disease->name_en: $disease->name_ar}}</strong></h2>
                </div> 
            </div>
        </section>
        <div class="container mt-4">
                <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-ayurveda-tab" data-toggle="tab" href="#nav-ayurveda" role="tab" aria-controls="nav-ayurveda" aria-selected="true">{{trans('home.ayur')}}</a>
                          <a class="nav-item nav-link" id="nav-naturo-tab" data-toggle="tab" href="#nav-naturo" role="tab" aria-controls="nav-naturo" aria-selected="false">{{trans('home.natur')}}</a>
                        </div>
                      </nav>
                <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-ayurveda" role="tabpanel" aria-labelledby="nav-ayurveda-tab">
                          <div class="container"><br>
                                       <div>
                                           <h2>{{trans('yoga.ayurpres')}}</h2>
                                       <p>{{App::getLocale()=='en'? $disease->ayur_presc_en : $disease->ayur_presc_ar}}</p>
                                       </div><hr>  
                                       <div>
                                           <h2>{{trans('yoga.treatproced')}}</h2>
                                       <p>{!!App::getLocale()=='en'? $disease->treat_proced_en : $disease->treat_proced_ar!!}</p>
                                       </div><hr>
                                       <div>
                                           <h2>{{trans('yoga.staydur')}}</h2>
                                           <p>{{App::getLocale()=='en'? $disease->stay_dur_en : $disease->stay_dur_ar}}</p>
                                       </div><hr>  
                                       <div>
                                           <h2>{{trans('yoga.expout')}}</h2>
                                           <p>{{App::getLocale()=='en'? $disease->exp_outcome_en : $disease->exp_outcome_ar}}</p>
                                       </div><hr>
                                       <div>
                                           <h2>{{trans('yoga.costest')}}</h2>
                                           <p>{{$disease->cost}}</p>
                                       </div><hr>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="nav-naturo" role="tabpanel" aria-labelledby="nav-naturo-tab">
                            <div class="container"><br>
                                           <div>
                                               <h2>{{trans('yoga.procenatur')}}</h2>
                                           <p>{!!App::getLocale()=='en'? $disease->natur_proce_en : $disease->natur_proce_ar!!}</p>
                                           </div><hr>
                                           <div>
                                               <h2>{{trans('yoga.staydur')}}</h2>
                                               <p>{{App::getLocale()=='en'? $disease->dur_stay_natur_en : $disease->dur_stay_natur_ar}}</p>
                                           </div><hr> 
                                           @if ($disease->exp_out_natur_en||$disease->exp_out_natur_ar)
                                           <div>
                                                <h2>{{trans('yoga.expout')}}</h2>
                                                <p>{{App::getLocale()=='en'? $disease->exp_out_natur_en : $disease->exp_out_natur_ar}}</p>
                                            </div><hr> 
                                           @endif 
                                           <div>
                                               <h2>{{trans('yoga.costest')}}</h2>
                                               <p>{{$disease->cost_natur}}</p>
                                           </div><hr>
                            </div>
                        </div>
                      </div>
                </div>
                @include('layouts.personal')
                
    </main>
    @include('layouts.footer')
@endsection