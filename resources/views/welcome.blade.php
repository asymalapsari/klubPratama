@extends('layouts.app')

@section('content')
      
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class></li>
      <li data-target="#myCarousel" data-slide-to="2" class></li>
    </ol>

    
    <div class="carousel-inner">
      <div class="carousel-item active">
      
        <img class="img-fluid" style="max-width:100%; height:auto;" src="{{asset('img/lapangan1.jpg')}}" alt="First slide">
        <div class="container">
              <div class="carousel-caption text-center" id="firstSlide" style="bottom: 25%;">
                <img src="{{asset('img/logo_pratama.png')}}" height="40%" width="40%">
                <h1 class="text-light">Pratama Sepak Bola</h1>
                <h3 class="text-light">"Jadilah yang Pertama"</h3>
              </div>
        </div>
      </div>

      <div class="carousel-item">
      <img class="second-slide" style="max-width:100%; height:auto" src="{{asset('img/lapangan1.jpg')}}" alt="Second slide">
            <div class="container">
              <div class="carousel-caption" id="secondSlide" style="bottom: 25%;">
                <h1 class="text-light">Dilatih oleh Pelatih Profesional</h1>
                <h4 class="text-light">Pratama Sepak Bola memiliki pelatih para mantan atlet sepak bola yang sangat berpengalaman dan bersertifikasi</h4>
                <p><a class="btn btn-lg btn-primary" href="#allContent" role="button">Learn more</a></p>
              </div>
            </div>    
      </div>
    
      <div class="carousel-item">
        <img class="third-slide" style="max-width:100%; height:auto" src="{{asset('img/lapangan1.jpg')}}" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right" id="thirdSlide" style="bottom: 30%;">
                <h1 class="text-light">Hasil Seleksi Pemain</h1>
                <h4 class="text-light">Pengumuman hasil pemain terpilih untuk menjadi perwakilan seleksi Timnas Indonesia</h4>
                <p><a class="btn btn-lg btn-primary" href="{{url('daftar-pemain')}}" role="button">View</a></p>
              </div>
            </div>
      </div>
    </div>

    
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<div class="wrapper" style="background-color:black" id="allContent">
  
<div class="container" style="padding-top:5%">
    <div class="row featurette">
          <div class="col-md-8">
            <h2 class="featurette-heading text-light" >Tentang Kami</h2>
            <p class="lead text-light">Pratama Sepak Bola adalah sebuah klub sepak bola yang berlokasi di Depok, Jawa Barat dan telah disertifikasi sebagai klub sepak bola terbaik di Jawa Barat. Kami menerima murid mulai dari usia 12 tahun hingga 21 tahun.</p>
          </div>
          <div class="col-md-4">
            <img class="featurette-image mx-auto d-block" src="{{asset('img/logo_pratama.png')}}" alt="Generic placeholder image" style="width: 50%;">
          </div>
        </div>
</div>
<br>
<hr style="background-color:white">
<div class="container marketing text-center" id="pelatih">
<div class="row">
  <div class="container text-center p-4">
    <h2 class="text-light"><strong>Pelatih Kami</strong></h2>
  </div>
  <div class="col-lg-4">
    <img class="rounded-circle" src="{{asset('img/pelatih1.jpg')}}" alt="Generic placeholder image" width="140" height="140">
    <br>
    <br>
    <h2 class="text-light">Indra Sjafri</h2>
    <p class="text-light">Seorang mantan pemain sepak bola. Indra Sjafri pernah membawa timnas junior merebut trofi juara pada turnamen sepak bola tingkat Asia, yaitu pada HKFA U-17 dan HKFA U-19 di Hongkong.</p>
  </div>
  <div class="col-lg-4">
    <img class="rounded-circle" src="{{asset('img/pelatih2.jpg')}}" alt="Generic placeholder image" width="140" height="140">
    <br>
    <br>
    <h2 class="text-light">Fachry Husaini</h2>
    <p class="text-light">Setelah pensiun sebagai pemain sepak bola pada tahun 2001, Fachry mengikuti kursus kepelatihan dan berhasil mendapat sertifkat C-1 dan sertifikat ini menjadi modal buat melatih sebuah tim sepak bola.</p>
  </div>
  <div class="col-lg-4">
    <img class="rounded-circle" src="{{asset('img/pelatih3.jpg')}}" alt="Generic placeholder image" width="140" height="140">
    <br>
    <br>
    <h2 class="text-light">Bima Sakti</h2>
    <p class="text-light">Pelatih yang merupakan mantan pemain Timnas Indonesia. Beliau pernah melatih Timnas Indonesia pada ajang Piala AFF 2018 yang berlangsung pada 8 November hingga 19 Desember.</p>
  </div>
</div>
</div>
<hr>

</div>


@endsection