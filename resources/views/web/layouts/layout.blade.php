<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('web.layouts.partials.head')
</head>

<body>
    <div id="app">
        @include('web.layouts.partials.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
