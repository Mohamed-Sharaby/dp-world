@component('mail::message')


Thank you <span style="font-weight: bold">{{ucfirst($data->name)}}</span> for submission.
<br>
<br>
<span style="font-weight: bold">Name</span> : {{$data->name}}
<br>
<span style="font-weight: bold">Email</span> : {{$data->email}}
<br>
<br>
Many thanks,
Admin
@endcomponent
