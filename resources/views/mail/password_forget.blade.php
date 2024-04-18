@component('mail::message')
Beste {{ $fullname }},

@component('mail::panel')
Hier uw nieuwe wachtwoord: {{ $password }}
@endcomponent

Met vriendelijke groeten,<br>
Van Dissil
@endcomponent