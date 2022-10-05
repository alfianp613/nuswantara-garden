@extends('layouts/petani')

@section('container')

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
    {{ session('success')}}
    </div>
    @endif
    
    <h1>Halaman Home</h1>
    <p>Nama: {{auth()->user()->name}}</p>
    <p>Email: {{auth()->user()->email}}</p>
    <p>No Telepon: {{auth()->user()->petani->no_telepon}}</p>
    <p>Komoditas: {{auth()->user()->petani->komoditas}}</p>
    <p>Alamat: {{auth()->user()->petani->alamat}}</p>
@endsection