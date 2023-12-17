<x-mail::message>
# Nom   : {{$data['nom']}}

email : {{$data['email']}}
{{-- The body of your message. --}}
{{$message}}

<x-mail::button :url="'https://lepoto.stephanetoukam.com'" :color="'primary'">
lepoto
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
