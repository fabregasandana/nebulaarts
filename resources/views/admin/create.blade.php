@extends('layouts.app')

@section('content')
    
<div class="container">
<div class="row">
<div class="col-md-12 mt-3">
<h3>Tambah Produk</h3>
<form action="/sale" method="post">
    @csrf
<div class="form-group">
<label for="name">Nama</label>
<input class="form-control" type="username" name="nama" id="name" placeholder="Masukkan Nama">
</div>
<div class="form-group">
<label for="jurusan">Gambar</label>
<input class="form-control" type="text" name="gambar" id="jurusan" placeholder="Masukkan Gambar">
</div>
<div class="form-group">
<label for="angkatan">Harga</label>
<input class="form-control" type="number" name="harga" id="angkatan" placeholder="Masukkan Harga">
</div>
<div class="form-group">
<label for="kelas">Stok</label>
<input class="form-control" type="number" name="stok" id="kelas" placeholder="Masukkan Stok">
</div>
<div class="form-group float-right mt-3">
<button class="btn btn-lg btn-danger" type="reset">Reset</button>
<button class="btn btn-lg btn-primary" type="submit">Submit</button>
</div>
</form>
</div>
</div>
</div>

@endsection