<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style='font-weigth:bold;color:Gold;'>Mail de Notification</h1>
    <p>Félicitation <b>{{ $user->name }}</b> pour votre inscription sur <b><a href="https://lepoto.stephanetoukam.com">lepoto</a></b>. Merci d'utiliser notre application.</p>
{{-- 
    @foreach (auth()->user()->notifications as $notification) 
    {
        {{ $notification }}
    }
    @endforeach --}}

</body>
</html>