@component('mail::message')
# Congratulations, {{ $mailData['fname']. ' '. $mailData['lname'] }}
 
<p>Your application has been approved. Please install the application to start your journey with us.</p><br>

@component('mail::panel')
<a href="http://127.0.0.1:8000/superadmin_rider">
Click here
</a>
@endcomponent

<br>
<p>
Thank you for trusting foodea. If you have any questiong please message us.<br><br>
</p>

<p>
{{ config('app.name') }}
</p>
@endcomponent