<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('aperto-de-mao.png') }}">
    
    <title>@yield('titulo')</title>

</head>
<body>
    @yield('content')
 


<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
