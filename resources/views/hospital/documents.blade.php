@extends('layouts.default')
@section('content')
@include('hospital.partials.nav')
@include('hospital.partials.logout')
      <div class="content-wrapper" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}};padding-top:70px;">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb rounded-0">
            <li class="breadcrumb-item">
              <a href="{{route('hospital.dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Documents</li>
          </ol>
          <!-- Icon Cards-->
        </div>
        <div class="container-fluid">
                <div class="row">
                        <div class="container">
                    <div class="row m-y-2">
                        <!-- edit form column -->
                        <div class="col-lg-12"><h3> My Document </h3><hr> </div>
                        <div class="col-lg-8 push-lg-4 personal-info">
                             <form role="form" method="POST" action="{{route('hospital.postdocuments')}}" enctype="multipart/form-data">
                                @csrf
                
                                <div class="form-group">
                                    <div class="col-lg-9">
                                    
                <input type="file" name="documents[]" multiple required/>
                                    <div class="input-group">
                      <span class="input-group-btn">
                        <button class="browse btn btn-primary input-lg" type="submit">Upload</button>
                      </span>
                        </div>
                        <p><i>***To receive a treatment program please upload all the medical records and first page of the passport of the patient. This is necessary for creating a profile of the patient in the clinic (anonymous requests are not excepted)</i></p>
                            </div>
                         </div>
                            </form>
                        </div>  
                    </div>
                </div>
                <hr />
                </div>
                  </div> 
                  <div class="container">    
                      <div class="row">
                        <div class="col-lg-12"><br><br><h3> Documents Uploaded </h3><hr> </div>
                <table class="table table-bordered col-lg-10">
                    <thead>
                      <tr>
                        <th>Upload Date</th>
                        <th>File</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($documents as $document)
                        <tr>
                          <td>{{$document->created_at->format('d M Y')}}</td>
                          <td><a href="{{asset('storage/'.$document->filename)}}" target="_blank">{{$document->file}}</a></td>
                          <form action="{{route('hospital.deletedocuments',$document->id)}}" method="POST">
                            @csrf
                          <td><button type="submit" role="button" class="btn btn-danger">Delete</button></td>
                        </form>
                        </tr> 
                        @endforeach
                    </tbody>
                  </table>
                      </div>
                    </div>
      </div>
@include('hospital.partials.footer')          
@endsection