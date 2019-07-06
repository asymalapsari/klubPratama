<nav class="navbar navbar-expand-md navbar-dark q" style="margin-bottom: 0; background-color: #000000">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
            <img src="{{asset('img/logo_pratama.png')}}" height="40" width="40">
            <strong>Pratama Sepak Bola</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('listpemain')}}">Daftar pemain</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('hasilseleksi')}}">Hasil Seleksi</a>
            </li> --}}
          </ul>
        </div>
        <div>
                <a class="btn btn-primary" href="{{route('login')}}">Admin</a>
            </div>
      </nav>
