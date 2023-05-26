<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('pageTitle', 'Laravel Ready') | {{ config('app.name') }} </title>

{{-- Favicon --}}
<link rel="icon" href="https://fav.farm/👻" />

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/vendor/fortify-ui/sass/starter/auth.scss', 'resources/js/app.js'])
