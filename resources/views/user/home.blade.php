@extends('layouts/main')

@section('container')
    <h1>Halaman Home</h1>
    @auth
        <p>Halo,{{auth()->user()->nama}}</p>
    @else
    <p>EaeAeaea</p>
    @endauth
@endsection