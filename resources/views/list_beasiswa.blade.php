@extends('layouts.landing')
@section('title', 'List Beasiswa')
@section('content')
    <h2 class="text-center mt-5">Silahkan pilih jenis beasiswa:</h2>
    <div class="dropdown text-center">
        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pilih Beasiswa
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route("daftar-beasiswa") }}">Beasiswa Akademik</a></li>
            <li><a class="dropdown-item" href="{{ route("daftar-beasiswa") }}">Beasiswa Non Akademik</a></li>
            <li><a class="dropdown-item" href="{{ route("daftar-beasiswa") }}">Beasiswa Seni</a></li>
        </ul>
        <p style="margin-bottom: 400px"></p>
    </div>
  
@endsection