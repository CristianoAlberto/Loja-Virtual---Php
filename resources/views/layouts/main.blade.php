<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" stype="text/css" href="/css/estilo.css">
</head>
<body >

    <div>
        @if (session('msg'))
            <p class="msg">{{ session('msg') }}</p>
        @endif
        @yield('content')
    </div>
    <footer><h4 class="rodape mt-5">Loja Virtual &copy;</h4></footer>
</body>
</html>
