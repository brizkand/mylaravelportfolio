@component('mail::message')
<p>Hi, I'm {{$data['name']}}</p>
<p>My email address is {{$data['email']}}</p>

<p>{{$data['message']}}</p>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
