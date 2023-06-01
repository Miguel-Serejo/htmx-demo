<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body hx-boost="true">
    <div class="container">
        @yield('content')
    </div>
    <div class="links">
        @yield('links')
    </div>
    @yield('scripts')
</body>

</html>
