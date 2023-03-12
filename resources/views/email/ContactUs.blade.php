@component('mail::message')
# Dear, Foodea
 
<p>{{ $mailData['text'] }}</p><br>

<br>

<p>
Thank you,<br>
{{ $mailData['name'] }}
</p>
@endcomponent