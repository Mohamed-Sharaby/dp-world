@component('mail::message')


New submission is received  :

<span style="font-weight: bold">Name</span> : {{$data->name}}
<br>
<span style="font-weight: bold">Email</span> : {{$data->email}}
<br>
{{--<span style="font-weight: bold">Pledge</span> : {{$data->pledge}}--}}
<br>
{{--Phone : {{$data->phone}}--}}
{{--<br>--}}
{{--Company Name : {{$data->company_name}}--}}
{{--<br>--}}
{{--<img src="{{$data->image}}" alt="img" width="150" height="70">--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

