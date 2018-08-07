@component('mail::message')

Dear, {{$normaluser->name}},


@component('mail::button',['url'=>config('app.url'),'color'=>'green'])
    Go to website
@endcomponent

Thank you again for choosing us </br>
Regards Natukair
    
@endcomponent