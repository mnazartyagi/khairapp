@extends('layouts.default')
@section('content')
@include('normal_user.partials.nav')
@include('normal_user.partials.logout')
      <div class="content-wrapper" dir="{{App::getLocale()=='en' ? 'auto': 'rtl'}}" style="text-align:{{App::getLocale()=='en' ? 'left': 'right'}};padding-top:70px;">
        
        <div class="container-fluid">
                <div class="row">
                        <div class="container">
                    <div class="row m-y-2">
                        <!-- edit form column -->
                        <div class="col-lg-12"><h3>{{trans('user.docu')}}</h3><hr> </div>
                        <div class="col-lg-8 push-lg-4 personal-info">
                             <form role="form" method="POST" action="{{route('normal_user.postdocuments')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-lg-3 col-form-label form-control-label"><b>{{trans('user.comment')}}</b></label>
                                    <br>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" name="file-desc" required/>
                                        <p>{{trans('user.comment2')}}</p>
                                    </div>
                
                                </div>
                
                                <div class="form-group">
                                    <div class="col-lg-9">
                                    
                <input type="file" name="documents[]" multiple required/>
                                    <div class="input-group">
                      <span class="input-group-btn">
                        <button class="browse btn btn-success input-lg" type="submit">{{trans('user.upload')}}</button>
                      </span>
                        </div>
                        <p><i>{{trans('user.uploadcomment')}}</i></p>
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
                        <div class="col-lg-12"><br><br><h3>{{trans('user.docuuplo')}}</h3><hr> </div>
                        @if ($documents->count()>0)
                        <table class="table table-bordered col-lg-10">
                            <thead>
                              <tr>
                                <th>{{trans('user.uploaddate')}}</th>
                                <th>{{trans('user.file')}}</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($documents as $document)
                                <tr>
                                  <td>{{$document->created_at->format('d M Y')}}</td>
                                  <td><a href="{{asset('storage/'.$document->filename)}}" target="_blank">{{$document->file}}</a></td>
                                  <form action="{{route('normal_user.deletedocuments',$document->id)}}" method="POST">
                                    @csrf
                                  <td><button type="submit" role="button">{{trans('user.delete')}}</button></td>
                                </form>
                                </tr> 
                                @endforeach
                            </tbody>
                          </table> 
                        @else
                            <p>{{trans('user.line')}}</p>
                        @endif
                    </div>
      </div>
@include('normal_user.partials.footer')          
@endsection