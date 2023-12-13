@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex align-items-center">
        <div class="col-md-8">
            <img src="{{ asset('/images/page_img.png') }}" alt="" class="" style="width: 30.5rem">
        </div>
        <div class="col-md-4">
            <p class="h1 w-100 text-end" style="font-family: 'libre baskerville'; font-size:55px; color: #656B6A">SENTUHAN MAGIS SENI MENANTI KAMU!!</p>
            <a href="{{ route('index') }}" class="btn rounded-pill text-white btn-lg mt-5" style="background-color: #A9C1C0; font-family:'manuale'; width: 15rem;">
                GO, SHOP NOW
            </a>
        </div>
    </div>
</div>
@endsection