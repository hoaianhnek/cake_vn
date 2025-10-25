<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ asset('/') }}">
    <title>Banh Viet</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('css')
</head>
<body class="antialiased bg-white font-sans">
    @include('user.layouts.header')

    @include('user.layouts.temp')

    @yield('content')

    @include('user.layouts.footer')

    @yield('js-script')
</body>
</html>
