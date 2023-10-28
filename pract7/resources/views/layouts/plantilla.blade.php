<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    <title>@yield('titulo')</title>

    @vite(['resources/js/app.js'])
    
    
</head>
<body>
    
    @include('partials.navbar')

    @yield ('contenido')
    
    <footer class="footer">
        <link rel="stylesheet" href="{{ asset('css/styleP.css') }}">
        @component('partials.footer', ['now' => $now])
        @endcomponent
    </footer>
    
</body>
</html>