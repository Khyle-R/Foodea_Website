@component('mail::message')
# Dear, {{ $mailData['fname']. ' '. $mailData['lname'] }}
 
<p>Here is the password verification code to reset your account.</p><br>

@component('mail::panel')
<h2>
{{ $mailData['code'] }}
</h2>
@endcomponent

<br>
<p>
This step is required to verify your account. 
This email message was auto-generated. Please do not respond.<br><br>
</p>

<p>
Thank you,<br>
{{ config('app.name') }}
</p>
@endcomponent