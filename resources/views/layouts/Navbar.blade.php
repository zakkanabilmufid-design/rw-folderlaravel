    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="Aplikasi Lrvl">Aplikasi Lrvl</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Produk">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Transaksi">Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Laporan">Laporan</a>
            </li>
          </ul>
        </div>
      </div>

      @auth
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
          data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user ()->name }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href=" route('profile')">Profile</a></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
              </form>
  </li>
          </ul>
        </div>
      @else
      <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
      @endauth 
      </ul>
    </div> 
  </div> 
</nav>
