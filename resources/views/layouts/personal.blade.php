<div class="container" style="margin-top:50px;">
    <div style="padding:30px;background:#ede8e8b3;">
                <div style="text-align:center">
                    <h4 class="form-title">
                        {{trans('yoga.consult')}}
                    </h4>
                    <h5>{{trans('yoga.free')}}</h5>
                </div>
                
                <div class="text-center"><p style="margin:0;">{{trans('yoga.toget')}} </p>
                    @auth('normal_user')
                <a class="btn btn-danger btn-md rounded-0" href="{{route('normal_user.getprofile')}}">{{trans('yoga.click')}}</a>
                    @endauth
                    @guest('normal_user')
                    <a href="{{route('normal_user.getsignup')}}" class="btn btn-danger btn-md rounded-0">{{trans('yoga.click')}}</a>
                    @endguest
                </div>
              
            </div>
</div></br>