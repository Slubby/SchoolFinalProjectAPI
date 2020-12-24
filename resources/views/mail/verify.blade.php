@component('mail::message')

# Please verify your email!

@component('mail::button', ['url' => $url])
Verify email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
