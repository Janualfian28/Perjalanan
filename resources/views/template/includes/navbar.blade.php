<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
        <div class="text-warning">PEDULI</div>
        <div class="text-1000">DIRI</div>
      </a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
          <li class="nav-item">
            <a class="nav-link fw-medium" href="/dashboard">Home</a>
          </li>
          @if( auth()->user()->role == 'admin' )
          <li class="nav-item">
            <a class="nav-link fw-medium" href="/datauser">Data User</a>
          </li>
          @endif
          @if( auth()->user()->role == 'user' || auth()->user()->role == 'admin')
          <li class="nav-item">
            <a class="nav-link fw-medium" href="/perjalanan">Perjalanan</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link fw-medium active" aria-current="page" href="/profile/index/{{ auth()->user()->id }}">Profile</a>
          </li>
          @endif
          <li class="nav-item" >
            <a class="nav-link fw-medium" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>