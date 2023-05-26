<!-- Navbar -->
<nav class="navbar">
    <!-- Nav Container -->
    <div class="nav-container">
        <!-- Logo Link -->
        <a class="logo-link" href="{{ url('/') }}">
            <!-- Site Name -->
            <span class="site-name">
                {{ config('app.name', 'Laravel Starter') }}
            </span>
        </a>

        <!-- Hamburger Menu -->
        <button class="hamburger-menu" data-collapse-toggle="navbar-multi-level" type="button"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span>
                Open main menu
            </span>

            <svg class="class-svg-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <!-- Auth Links -->
        <div class="auth-links" id="navbar-multi-level">
            <!-- Link List -->
            <ul class="link-list">
                @guest

                    <!-- Login -->
                    <li class="login">
                        <a href="{{ route('login') }}">
                            {{ __('fortify-ui::auth.login') }}
                        </a>
                    </li>

                    <!-- Register -->
                    <li class="register">
                        <a href="{{ route('register') }}">
                            {{ __('fortify-ui::auth.register') }}
                        </a>
                    </li>

                @endguest

                @auth
                    <!-- Login -->
                    <li class="login">
                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('fortify-ui::auth.logout') }}

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
