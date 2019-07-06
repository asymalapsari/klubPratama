@extends('admin-layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-5">Detail Pemain</h1>
    
    <h2 class="mt-5">Biodata Pemain</h2>
    <div class="row">
        <div class="col-md-3 mb-3">
                <label for="nama-pemain">Nama Pemain<br></label>
                <input type="text" class="form-control" id="nama-pemain" value="{{$table[0]->nama}}" disabled>
        </div>
        <div class="col-md-3 mb-3">
                <label for="tanggal_lahir">Tanggal Lahir<br></label>
                <input type="text" class="form-control" id="tanggal_lahir" value="{{$table[0]->tanggal_lahir}}" disabled>
        </div>
        <div class="col-md-3 mb-3">
                <label for="alamat">Alamat<br></label>
                <input type="text" class="form-control" id="alamat" value="{{$table[0]->alamat}}" disabled>
        </div>
        <div class="col-md-3 mb-3">
                <label for="nomor_hp">Nomor HP<br></label>
                <input type="text" class="form-control" id="nomor_hp" value="{{$table[0]->nomor_hp}}" disabled>
        </div>
        </div>
        
        <h2 class="mt-5">Kemampuan Pemain</h2>
        <div class="row">
        <div class="col-md-3 mb-3">
                <label for="penyerang">Penyerang<br></label>
                <input type="text" class="form-control" id="penyerang" value="{{$table[0]->nilai_pemain_menyerang}}" disabled>
        </div>
        <div class="col-md-3 mb-3">
                <label for="tengah">Gelandang<br></label>
                <input type="text" class="form-control" id="tengah" value="{{$table[0]->nilai_pemain_tengah}}" disabled>
        </div>
        <div class="col-md-3 mb-3">
                <label for="bertahan">Bertahan<br></label>
                <input type="text" class="form-control" id="bertahan" value="{{$table[0]->nilai_pemain_bertahan}}" disabled>
        </div>

        </div>
        <a href="/edit/{{$table[0]->id}}" class="btn btn-primary">Edit</a>
    </div>

@endsection
