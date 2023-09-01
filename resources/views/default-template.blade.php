<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('template.head')
    </head>
    <body>
        <div id="main" class="row">
            @yield('contents')
        </div>
    </body>
</html>
