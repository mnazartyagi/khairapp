@extends('layouts.default')
@section('content')
@include('hospital.partials.nav')
@include('hospital.partials.logout')
<div class="content-wrapper" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}};padding-top:70px;">
        <div class="container-fluid">
          <ol class="breadcrumb rounded-0">
            <li class="breadcrumb-item">
              <a href="{{route('hospital.dashboard')}}">Dashboard</a>
            </li>
        <li class="breadcrumb-item active">My profile</li>
          </ol>
        </div>
        <div class="container-fluid">
                <div class="col-lg-8 push-lg-4 personal-info">
                        <form role="form" action="{{route('hospital.postprofile')}}" method="POST">
                            @csrf
                           <div class="form-group row">
                               <label class="col-lg-3 col-form-label form-control-label"><b>Hospital Name</b></label>
                               <div class="col-lg-8">
                                   <input class="form-control" type="text" name="name_en" value="{{Auth::user()->name_en}}" required/>
                               </div>            
                           </div>
                            <div class="form-group row">
                               <label class="col-lg-3 col-form-label form-control-label">Contact Number</label>
                               <div class="col-lg-8">
                                   <input class="form-control" type="text" name="number" value="{{Auth::user()->number}}" required/>
           
                               <p> Contact Number will not be shared with the users</p>
                               </div>
                           </div>
           
                           <div class="form-group row">
                               <label class="col-lg-3 col-form-label form-control-label">Ambience</label>
                               <div class="col-lg-8">
                                   <select name="ambiance" class="form-control" size="0" required> 
                                     <option value="" selected="selected">{{Auth::user()->ambiance}}</option> 
                                     <option value="Beach">Beach</option>
                                     <option value="Hill Station">Hill Station</option>
                                     <option value="Lake">Lake</option>
                                     <option value="Island">Island</option>
                                     <option value="Village">Village</option>
                                     <option value="Forest">Forest</option>
                                     <option value="Town">Town</option>
                                     <option value="Palace">Palace</option>
                                   </select>
                               </div>
                           </div>
                            <div class="form-group row">
                               <label class="col-lg-3 col-form-label form-control-label">Established</label>
                               <div class="col-lg-8">
                                   <input class="form-control" name="established" type="date" value="{{Auth::user()->established}}" required/>
                               </div>
                           </div>
                           <div class="form-group row">
                               <label class="col-lg-3 col-form-label form-control-label">Accreditation</label>
                               <div class="col-lg-8">
                                   <input class="form-control" name="accreditation" type="text" value="{{Auth::user()->accreditation}}" required/>
                               </div>
                           </div>
                             <div class="form-group row">
                               <label class="col-lg-3 col-form-label form-control-label">Treatment Speciality</label>
                               <div class="col-lg-8">
                                   <select name="treatment"  class="form-control" size="0" required> 
                                     <option value="{{Auth::user()->treatment}}" selected="selected">{{Auth::user()->treatment}}</option> 
                                     <option value="Ayurveda">Ayurveda</option> 
                                     <option value="Naturopathy">Naturopathy</option>
                                     <option value="Ayurveda and Yoga">Ayurveda and Yoga</option>
                                     <option value="Ayurveda and Yoga">Ayurveda, Naturopathy and Yoga</option>                                     
                                   </select>
                               </div>
                           </div>          
                            <div class="form-group row">
                               <label class="col-lg-3 col-form-label form-control-label"><b>Nearest Airport</b></label>
                               <div class="col-lg-8">
                                   <input class="form-control" name="nearest_airport" type="text" value="{{Auth::user()->nearest_airport}}" required/>
                               </div>                       
                           </div>
                           <div class="form-group row">
                               <label class="col-lg-3 col-form-label form-control-label"><b>Description</b></label>
                               <div class="col-lg-8">
                                   <textarea name="description" placeholder="Enter Hospital description" rows="4" class="form-control" required></textarea>
                               </div>
                           </div>                
                              <div class="form-group row">
                               <label class="col-lg-3 col-form-label form-control-label"></label>
                               <div class="col-lg-9">
                                   <input type="submit" class="btn btn-primary" value="Save Changes" />
                               </div>
                           </div>
                       </form>
                   </div>
        </div>
</div>
@include('hospital.partials.footer')
@endsection