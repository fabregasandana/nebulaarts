@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
    <div class="col-md-12 mt-3">
    <h3>Edit Produk</h3>
    <form action="/edit/{{ $produk->id }}" method="post">
        @csrf
        @method("PUT")
    <div class="form-group">
    <label for="name">Nama</label>
    <input class="form-control" type="username" name="nama" id="name" value="{{ $produk->nama }}">
    </div>
    <div class="form-group">
    <label for="jurusan">Gambar</label>
    <input class="form-control" type="text" name="gambar" id="jurusan" value="{{ $produk->gambar }}">
    </div>
    <div class="form-group">
    <label for="angkatan">Harga</label>
    <input class="form-control" type="number" name="harga" id="angkatan" value="{{ $produk->harga }}">
    </div>
    <div class="form-group">
    <label for="kelas">Stok</label>
    <input class="form-control" type="number" name="stok" id="kelas" value="{{ $produk->stok }}">
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