@extends('admin-layouts.app')

@section('content')
<div class="container">
<form action="{{URL::to('/store-kriteria')}}" method="post">
@csrf
        <h2 class="mt-5">Pemain</h2>
        <div class="col-md-3 mb-3">
                <label for="nama-pemain">Nama Pemain<br></label>
                <input type="text" class="form-control" id="nama-pemain" name="id" value="{{$table[0]->nama}}" disabled>
        </div>
       <!--  <select class="custom-select">
            @foreach($table as $t)
            <option value="{{$t->id}}">
                {{$t->nama}}
            </option>
            @endforeach
        </select> -->
        <h2 class="mt-5">Fisik</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="input-group">
                <label for="kecepatan">Kecepatan (Detik)<br><span class="text-muted">Waktu tempuh sprint jarak menengah</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="" name="kecepatan">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="akselerasi">Akselerasi (Detik)<br><span class="text-muted">Waktu tempuh sprint jarak pendek</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="" name="akselerasi">
                <div class="invalid-feedback">
                    Harap isi!
                 </div>
             </div>
            <div class="col-md-3 mb-3">
                <label for="stamina">Stamina (Detik)<br><span class="text-muted">Waktu tempuh sjogging jarak panjang</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="" name="stamina">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="keseimbangan-tubuh">Keseimbangan Tubuh (Detik)<br><span class="text-muted">Waktu tempuh berjalan di atas plank</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="" name="keseimbangan_tubuh">
                 <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="kecepatan">Lompatan (cm)<br><span class="text-muted">Tinggi lompatan maksimal</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="" name="lompatan">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
        </div>
        <h2 class="mt-5">Keahlian</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="dribble">Dribble (Detik)<br><span class="text-muted">Waktu tempuh menggiring bola</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="" name="dribble">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="sundulan">Sundulan (Jumlah)<br><span class="text-muted">Jumlah bola yang goal melalui sundulan</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="" name="sundulan">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
            <div class="col-md-3 mb-3">
                    <label for="akurasi">Akurasi Umpan + Tendangan (Jumlah)<br><span class="text-muted">Jumlah goal melalui tendangan</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="" name="akurasi_tendangan">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
            <div class="col-md-3 mb-3">
                    <label for="bertahan">Bertahan (Score)<br><span class="text-muted">Teknik yang digunakan untuk bertahan</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="" name="bertahan">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
            <div class="col-md-3 mb-3">
                    <label for="menyerang">Menyerang (Score)<br><span class="text-muted">Teknik yang digunakan untuk menyerang</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="" name="menyerang">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
        </div>
        <h2 class="mt-5">Karakter</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="konsistensi">Konsistensi (Score)<br><span class="text-muted">Konsistensi beberapa pertandingan</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="" name="konsistensi">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="mental">Mental Bertanding (Score)<br><span class="text-muted">Kesiapan pemain</span></label>
                <input type="number" class="form-control" id="zip" placeholder="" required="" name="mental_bertanding">
                <div class="invalid-feedback">
                    Harap isi!
                </div>
            </div>
            <div class="col-md-3 mb-3">
                    <label for="determinasi">Determinasi (Score)<br><span class="text-muted">Seberapa kuat motivasi pemain</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="" name="determinasi">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
            <div class="col-md-3 mb-3">
                    <label for="visi">Visi<br><span class="text-muted">Seberapa kuat visi pemain</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="" name="visi">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
            <div class="col-md-3 mb-3">
                    <label for="team-work">Team Work (Score)<br><span class="text-muted">Kerja sama pemain</span></label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="" name="team_work">
                    <div class="invalid-feedback">
                        Harap isi!
                    </div>
                </div>
        </div>
        <br>
        <input type="submit" class="btn btn-primary btn-block" value="Submit">
        <br>
    </form>
    </div>
@endsection
