<nav class="navbar my-bg-dark" data-bs-theme="dark">
  <div class="container">
    <h3 class="title my-text-light my-2">VehicleOrder</h3>    
      @if (isset($user))
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="offcanvas offcanvas-end my-bg-white my-text-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Login Sebagai :
              <span>
                @if ($user->id == 1)
                    <h1 class="my-text-yellow">superior</h1>
                @endif
                @if ($user->id == 2)
                    <h1 class="my-text-yellow">admin</h1>
                @endif
              </span>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link my-text-dark text-dark-list" href="/dashboard">Dashboard</a>
              </li>

              @if ($user->id == 2)
              <li class="nav-item">
                <a class="nav-link my-text-dark text-dark-list" href="/form">Form Pemesanan</a>
              </li>
              @endif
              <li class="nav-item">
                <a class="nav-link my-text-dark text-dark-list" href="/order">Daftar Pengajuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link my-text-dark text-dark-list" href="/serviceSchedule">Jadwal Service</a>
              </li>
              @if ($user->id == 1)
              <li class="nav-item">
                <a class="nav-link my-text-dark text-dark-list" href="/history">Riwayat Peminjaman</a>
              </li>
              @endif

              <li class="nav-item mt-2">
                <form action="/logout" method="GET">
                  <button type="submit" class="btn my-btn2">Logout</button>
                </form>
              </li>
            </ul>
          </div>  
        </div>
      @endif
      
    
  </div>
</nav>