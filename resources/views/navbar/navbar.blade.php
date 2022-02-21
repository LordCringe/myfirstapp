<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="/">Blogac.ID</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
            <a class="nav-link {{ ($active === "post") ? 'active' : '' }}" href="/posts">Blog</a>
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
            @auth
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle tombol" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                Welcome Back, {{ auth()->user()->name }}
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-door-closed-fill"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </div>
            @else
            <a href="/login" class=" {{ ($active === "login") ? 'active' : '' }} btn btn-primary tombol" >Login</a>
            @endauth
          </div>
        </div>
    </div>
</nav>
