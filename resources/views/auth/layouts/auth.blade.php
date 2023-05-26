<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.partials.head')
</head>

<body>
    <div id="app">
        @include('layouts.partials.navbar')

        <main>
            <!-- Auth Card Container -->
            <div class="auth-card-container">
                @yield('content')
            </div>
        </main>
    </div>

    <footer>
        @yield('footerScripts')
    </footer>
</body>

</html>
