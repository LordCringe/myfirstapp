<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="/">Blogac.ID</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
                <a class="nav-link {{ $active === 'post' ? 'active' : '' }}" href="/posts">Blog</a>
                <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                @guest
                    <a href="{{ route('login') }}"
                        class=" {{ $active === 'login' ? 'active' : '' }} btn btn-primary tombol">Login</a>
                @else
                    <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle tombol" href="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown">
                            Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer"></i> My
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-door-closed-fill"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>
