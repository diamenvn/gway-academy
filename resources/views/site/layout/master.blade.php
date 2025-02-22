<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        @vite(['resources/sass/app.scss', 'resources/sass/mixin.scss', 'resources/js/app.js'])
    </head>

    <body>
        @include('site.layout.header')
        @yield('content')
        @include('site.layout.footer')
    </body>

</html>