<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('header')
    @vite('resources/css/app.css')
</head>

<body>
    @yield('content')

    @yield('script')
</body>
</html>
