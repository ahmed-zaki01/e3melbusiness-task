
@component('mail::message')
<link href="{{asset('css')}}/style.css" rel="stylesheet">

<h2 class="text-footer">{{ $data['title'] }}, </h2>
<h3 class="text-footer">{{ $data['head'] }}, </h3>

<h2 class="text-green">{{ $data['otp'] }}</h2>

<h4 class="text-footer">{{ $data['otp_expire'] }} {{$data['expire']}}</h4>

<h5 class="text-footer">{{ $data['greating'] }}, </h5>
<h5 class="text-footer">{{ $data['thaki'] }} </h5>

@endcomponent
