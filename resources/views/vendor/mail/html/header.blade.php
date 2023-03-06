@props(['url'])
<tr>
<td class="header">
<a href="#" style="display: inline-block;">
@if (trim($slot) === 'Foodea')
<img src="https://foodea-website.herokuapp.com/image/foodea4.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
