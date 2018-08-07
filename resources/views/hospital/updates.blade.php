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
            <li class="breadcrumb-item active">Updates</li>
          </ol>
          <!-- Icon Cards-->
        </div>
        <div class="container-fluid">
                <div class="row">
                        <div class="container">
                    <div class="row m-y-2">
                        <!-- edit form column -->
                        <div class="col-lg-12"><h3> My Updates </h3><hr> </div>
                        <div class="col-lg-8 push-lg-4 personal-info">
                             <form role="form" method="POST" action="{{route('hospital.postupdates')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-lg-3 col-form-label form-control-label"><b>Update Something</b></label>
                                    <br>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" type="text" rows="3" name="update" required></textarea>
                                    </div>
                
                                </div>
                
                                <div class="form-group">
                                    <div class="col-lg-9">
                                    
                <input type="file" name="document"/>
                                    <div class="input-group">
                      <span class="input-group-btn">
                        <button class="browse btn btn-primary input-lg" type="submit">Upload</button>
                      </span>
                        </div>
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
                        <div class="col-lg-12"><br><br><h3> Updates </h3><hr> </div>
                <table class="table table-bordered col-lg-10">
                    <thead>
                      <tr>
                        <th>Upload Date</th>
                        <th>Update</th>
                        <th>File</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($documents as $document)
                        <tr>
                          <td>{{$document->created_at->format('d M Y')}}</td>
                          <td>{{$document->update}}</td>
                          @if ($document->filename)
                          <td><a href="{{asset('storage/'.$document->filename)}}" target="_blank">Download</a></td>                             
                          @endif
                        </tr> 
                        @endforeach
                    </tbody>
                  </table>
                      </div>
                    </div>
      </div>
@include('hospital.partials.footer')          
@endsection