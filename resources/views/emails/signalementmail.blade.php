<x-mail::message>
# Signalement d'un Post : ({{$idpost}})

{{-- The body of your message. --}}
{{$raison}}

<x-mail::button :url="'https://lepoto.stephanetoukam.com'" :color="'primary'">
lepoto
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
