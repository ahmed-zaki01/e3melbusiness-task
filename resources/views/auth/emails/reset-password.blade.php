@component('mail::message')
# Admin Reset Password

This email was sent to reset your password, please click on the button,

@component('mail::button', ['url' => route('dashboard.reset_password', $data['token']  ) ] )
Reset
@endcomponent
Or you can click on the link below <br>
<a href="{{ route('dashboard.reset_password', $data['token']  )}}">{{ route('dashboard.reset_password' , $data['token']  ) }}</a>

<br>Thanks,<br>
{{ config('app.name') }}
@endcomponent
