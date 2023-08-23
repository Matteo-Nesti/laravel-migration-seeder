<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>

    {{-- cdns --}}
    @yield('cdns')
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>

    @yield('main')

</body>

</html>
