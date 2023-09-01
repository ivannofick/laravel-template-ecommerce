<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('template.head')
    </head>
    <body>
        <div id="main" class="bg-white w-full">
            @yield('contents')
        </div>
        <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    </body>
</html>
