<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Sin definir')</title>
        <style>
            .active a {
                color: red;
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        @include('partials.nav')

        @yield('content')
    </body>
</html>