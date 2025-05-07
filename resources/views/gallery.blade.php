@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
    <h1>Galeri</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('images/kiri.jpeg') }}" class="img-fluid" alt="Jas Kantor">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/tengah.jpeg') }}" class="img-fluid" alt="Free">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/kanan.jpeg') }}" class="img-fluid" alt="Basketball">
        </div>
    </div>
@endsection
