@extends('layouts/main')

@section('container')
    <h1>Halaman Home</h1>
    {{-- @auth
        <p>Halo,{{auth()->user()->nama}}</p>
    @else
    <p>EaeAeaea</p>
    @endauth --}}
    @unless (Auth::check())
    You are not signed in.
    @endunless
    @if(auth()->check())
        <p>Halo, {{auth()->user()->name}}</p>
    @endif
@endsection