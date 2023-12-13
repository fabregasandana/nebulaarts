@extends('layouts.app')
@section('content')
      
<div class="row">
    @foreach ($produk as $p)
        <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
            <div class="img_thumbnail productlist">
                <img src="{{ asset('img') }}/{{ $p->gambar }}" class="img-fluid">
                <div class="caption">
                    <h4>{{ $p->nama }}</h4>
                    <p><strong>Price: </strong> Rp. {{ $p->harga }}</p>
                    <p class="btn-holder"><a href="{{ route('add_to_cart', $p->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
      
@endsection