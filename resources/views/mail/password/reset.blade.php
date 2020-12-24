@component('mail::message')

# Reset your password here!

@component('mail::button', ['url' => $url])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
