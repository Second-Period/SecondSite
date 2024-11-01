<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/css/app.css','resources/js/carrinho.js'])
    <title>Document</title>
</head>
<body class="bg-gray-200 font-sans">
    @if (Request::route()->named('about'))
    
    @else
        @include('partials.navbar')
    @endif

    <main>
        @yield('content')
    </main>

    @if (Request::route()->named('cadastro') || Request::route()->named('login') || Request::route()->named('about'))
        
    @else
        @include('partials.footer.footer')    
    @endif
    
    @if (Request::route()->named('about'))
        @include('partials.footer.about_footer')
    @endif
</body>
</html>