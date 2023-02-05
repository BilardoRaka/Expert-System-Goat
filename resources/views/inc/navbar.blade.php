<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <a class="navbar-brand" href="/">
      <img src="{{url('/images/goat.png')}}" height="25" class="d-inline-block align-top" alt="">
          <small>
              SPDP Kambing
          </small>
      </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link {{ ($active === "disease") ? 'active' : '' }}" href="/disease">Penyakit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "history") ? 'active' : '' }}" href="/history">Riwayat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "feedback") ? 'active' : '' }}" href="/feedback">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "passchange") ? 'active' : '' }}" href="/passchange">Ubah Password</a>
        </li>
        @endauth
      </ul>
      <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item">
              <form method="post" action="/logout" class="d-inline">
              @csrf
                  <button type="submit" class="btn btn-dark nav-link text-white">Logout</button>
              </form>
          </li>
          @endauth
          @guest
          <li class="nav-item">
              <button type="button" class="btn btn-dark nav-link text-white" data-target="#login" data-toggle="modal" data-whatever="@getbootstrap">Login</button>
          </li>    
          @endguest
      </ul>
    </nav>
      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="loginLabel">Admin SPDP Kambing</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/login" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Username :</label>
                  <input type="text" name="username" class="form-control" placeholder="username" required autofocus>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Password :</label>
                  <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-dark">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</header>