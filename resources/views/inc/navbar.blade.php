<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'webBackend') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/services">Services</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @auth
                    <li><a href="/"> Welcome {{auth()->user()->name}}</a></li>
                    <li>
                        <form class="inline" method="POST" action="/logout">
                            @csrf
                            <button class="btn btn-dark" type="submit">
                                <i class="fa-solid fa-door-closed"></i> Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
                    </li>
                    <li>
                        <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
