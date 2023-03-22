@component('mail::message')
# Dear, {{ $mailData['fname']. ' '.$mailData['lname']  }}
 
<p>{{ $mailData['message'] }}</p><br>

<br>

<p>
Thank you,<br>
Foodea
</p>
@endcomponent