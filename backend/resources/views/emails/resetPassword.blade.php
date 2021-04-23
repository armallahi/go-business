@component('mail::message')
# Reset Password

Your password reset code is {{ $code }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
