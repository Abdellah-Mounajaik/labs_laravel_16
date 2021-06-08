@component('mail::message')
# Introduction

<h2 style="color: green">Subject : {{ $mail->subject }}</h2>
<h2>Email : {{ $mail->mail }}</h2>
<h2>message : {{ $mail->message }}</h2>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent