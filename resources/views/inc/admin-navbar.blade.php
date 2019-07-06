<nav class="navbar navbar-expand-md navbar-dark q" style="margin-bottom: 0; background-color: #000000">
        <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
            <img src="{{asset('img/logo_pratama.png')}}" height="40" width="40">
            <strong>Admin</strong>
        </a>
        <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-light"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

        </div>
        <div>
                <a class="btn btn-primary" href="{{route('admin.dashboard')}}">Sign Out</a>
            </div>
      </nav>
