<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <h2>Stand Blog<em>.</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog Entries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post') }}">Post Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>

                    @guest
                        {{-- Регистрация --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signup') }}">Sign Up</a>
                        </li>

                        {{-- Авторизация --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signin') }}">Sign In</a>
                        </li>
                    @endguest
                    @auth
                        {{-- Профиль --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                        </li> --}}

                        {{-- Выход --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Sign Out</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
