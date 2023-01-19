<!DOCTYPE html>
<html lang="en">
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>mc - auto</title>
</head>
<body class="@yield('body-class')">
    <x-header />
    
        @yield('content')

    <x-footer/>
</body>
</html>