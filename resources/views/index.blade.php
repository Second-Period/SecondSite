<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/css/app.css',])
    <title>Document</title>
</head>
<body class="bg-gray-200 font-sans">
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>