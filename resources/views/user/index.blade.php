@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="dropdown">
                 
                <button id="dLabel" type="button" class="btn btn-primary" data-bs-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
                </button>
 
                <div class="dropdown-menu" aria-labelledby="dLabel">
                    <div class="row total-header-section">
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['harga'] * $details['stok'] @endphp
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                            <p>Total: <span class="text-success">Rp. {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ asset('images') }}/{{ $details['gambar'] }}.png" class="w-50"/>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['nama'] }}</p>
                                    <span class="price text-success"> ${{ $details['harga'] }}</span> <span class="count"> Quantity:{{ $details['stok'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
</div>
    
<br/>
<div class="container">
    
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
</div>

<div class="container-fluid row">
    @foreach ($produk as $p)
    <div class="card me-5" style="width: 15rem;
    
    
    ">
        <img src="{{ asset('images') }}/{{ $p->gambar }}.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">{{ $p->nama }}</h5>
          <p class="card-text">Rp. {{ $p->harga }}</p>
          <p class="card-text">Stok tersedia: {{ $p->stok }}</p>
          <div class="justify-content-around">
            <a href="{{ route('add_to_cart', $p->id) }}" class="btn btn-primary">Add Cart</a>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
    </div>    
    @endforeach
</div>

@endsection