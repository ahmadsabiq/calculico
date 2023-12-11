<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">

  <div class="offcanvas-md offcanvas-end bg-body-secondary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel" style=" height: 100vh;">

      <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Calculico</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">

          <ul class="nav flex-column">
              <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                  <a class="nav-link d-flex align-items-center gap-2" aria-current="page" href="/dashboard">
                      <i class="bi bi-microsoft"></i>
                      Dashboard
                  </a>
              </li>
              <li class="nav-item {{ Request::is('dashboard/latihan') ? 'active' : '' }}">
                  <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/latihan">
                      <i class="bi bi-dice-3-fill"></i>
                      Latihan
                  </a>
              </li>
              <li class="nav-item {{ Request::is('dashboard/laporan') ? 'active' : '' }}">
                  <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/laporan">
                      <i class="bi bi-file-bar-graph-fill"></i>
                      Laporan
                  </a>
              </li>
          </ul>

          {{-- Administrator --}}
          @can('admin')
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Administrator</span></h6>
          <ul class="nav flex-column">
              <li class="nav-item {{ Request::is('dashboard/user*') ? 'active' : '' }}">
                  <a class="nav-link" href="/dashboard/user">
                      <i class="bi bi-people-fill"></i>
                      Kelola Akun Pengguna
                  </a>
              </li>
              <li class="nav-item {{ Request::is('pendinguser') ? 'active' : '' }}">
                  <a class="nav-link" href="/pendinguser">
                      <i class="bi bi-person-check-fill"></i>
                      Aktivasi Akun Pengguna
                  </a>
              </li>
          </ul>
          @endcan

          {{-- User --}}
          <hr class="my-3">
          <ul class="nav flex-column mb-auto">
              <li class="nav-item {{ Request::is('dashboard/ganti-password') ? 'active' : '' }}">
                  <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/ganti-password">
                      <i class="bi bi-key-fill"></i>
                      Ganti Password
                  </a>
              </li>
              <li class="nav-item">
                  <form class="nav-link d-flex align-items-center gap-2" action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger w-100 mt-4"><i class="bi bi-arrow-bar-left"></i> Logout</button>
                  </form>
              </li>
          </ul>
      </div>
  </div>
</div>
