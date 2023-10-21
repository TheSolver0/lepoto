<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lepoto1</title>
    <!-- <link rel="stylesheet" href="./bootstrap.css" class="rel"> -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    @vite(['resources/css/bootstrap.css'])
</head>
<body>   
    @include('partials.navbar')
    <div class="contenu">
        @yield('content')
    </div>
</body>
</html>