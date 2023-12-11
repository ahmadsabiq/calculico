<nav class="navbar navbar-expand-lg bg-secondary ">
    <div class="container">
      <a class="navbar-brand text-light" href="/">Calculico</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('/dashboard') }} ">
                     My Dashbord</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="POST">
                      @csrf
                      
                      <button type="submit" class="dropdown-item">Logout</button></form>
                  </li>
                </ul>
              </li>
                @else
              <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('login') }} ">Login
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('register') }} ">Register
                </a>
              </li>
              @endauth
            </ul>
      </div>
    </div>
  </nav>