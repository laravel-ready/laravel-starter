<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts._partials.head')
</head>

<body>
    <div id="app">
        @include('layouts.app.partials.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
