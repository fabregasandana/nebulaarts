@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    <div class="my-4 col-12">
    <h1 class="float-left">Daftar Produk</h1>
    <a class="btn btn-primary float-right mt-2" href="{{url('/sale/create')}}" role="button">Tambah Produk</a>
    </div>
    <div class="col-12">
    <table class="table table-stripped">
    <thead class="thead-primary">
    <tr>
    <th class="text-center">No</th>
    <th>Nama Produk</th>
    <th>Gambar</th>
    <th class="text-center">Harga</th>
    <th>Stok</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($produk as $p)
    <tr>
    <td class="text-center">{{ $loop->iteration }}</td>
    <td>{{ $p->nama }}</td>
    <td><img src="{{ asset('images') }}/{{ $p->gambar}}.png" class="w-25"></td>
    <td class="text-center">Rp. {{ $p->harga }}</td>
    <td>{{ $p->stok }}</td>
    <td>
    <a href="/admin/{{ $p->id }}/edit" class="btn btn-primary">edit</a>
    <form action="/admin/{{ $p->id }}" method="post" class="delete-form">
        @csrf
        @method("DELETE")
        <input type="submit" value="delete" class="btn">
    </form>
    </td>
    </tr>
        @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>

@endsection