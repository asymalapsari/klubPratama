@extends('admin-layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-5"><strong> Data Pemain Baru </strong></h1>
<form action="{{URL::to('/store-biodata')}}" method="post">
@csrf
    <h2 class="mt-5">Profil Pemain</h2>
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" required name="nama">
            <div class="invalid-feedback">
                Harap isi!
            </div>
        </div>
        <div class="mb-3">
            <label for="tanggallahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggallahir" required name="tanggal_lahir">
            <div class="invalid-feedback">
                Harap isi!
            </div>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" required name="alamat">
            <div class="invalid-feedback">
                Harap isi!
            </div>
        </div>
        <div class="mb-3">
            <label for="nomorhp">Nomor HP</label>
            <input type="tel" class="form-control" id="nomorhp" required name="nomorhp">
            <div class="invalid-feedback">
                Harap isi!
            </div>
        </div>
        <!-- <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" required>
            <div class="invalid-feedback">
                Harap isi!
            </div>
        </div> -->
        <!-- <h2 class="mt-5">Fisik</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="kecepatan">Kecepatan<br><span class="text-muted">Waktu tempuh sprint jarak menengah</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="akselerasi">Akselerasi<br><span class="text-muted">Waktu tempuh sprint jarak pendek</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                    Harap isi!
                 </div>
             </div>
            <div class="col-md-3 mb-3">
                <label for="stamina">Stamina<br><span class="text-muted">Waktu tempuh sjogging jarak panjang</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="keseimbangan-tubuh">Keseimbangan Tubuh<br><span class="text-muted">Waktu tempuh berjalan di atas plank</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="">
                 <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="kecepatan">Lompatan<br><span class="text-muted">Tinggi lompatan maksimal</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
        </div>
        <h2 class="mt-5">Keahlian</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="dribble">Dribble<br><span class="text-muted">Waktu tempuh menggiring bola</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="sundulan">Sundulan<br><span class="text-muted">Jumlah bola yang goal melalui sundulan</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
            <div class="col-md-3 mb-3">
                    <label for="akurasi">Akurasi Umpan + Tendangan<br><span class="text-muted">Jumlah goal melalui tendangan</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
            <div class="col-md-3 mb-3">
                    <label for="bertahan">Bertahan<br><span class="text-muted">Teknik yang digunakan untuk bertahan</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
            <div class="col-md-3 mb-3">
                    <label for="menyerang">Menyerang<br><span class="text-muted">Teknik yang digunakan untuk menyerang</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
        </div>
        <h2 class="mt-5">Karakter</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="konsistensi">Konsistensi<br><span class="text-muted">Konsistensi beberapa pertandingan</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="mental">Mental Bertanding<br><span class="text-muted">Kesiapan pemain</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
            <div class="col-md-3 mb-3">
                    <label for="determinasi">Determinasi<br><span class="text-muted">Seberapa kuat motivasi pemain</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
            <div class="col-md-3 mb-3">
                    <label for="visi">Visi<br><span class="text-muted">Seberapa kuat visi pemain</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
            <div class="col-md-3 mb-3">
                    <label for="team-work">Team Work<br><span class="text-muted">Kerja sama pemain</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
        </div> -->
        <br>
        <input type="submit" class="btn btn-primary btn-block" value="Submit">
        <br>
    </form>
    </div>
@endsection
