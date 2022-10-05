@extends('layouts/main')

@section('container')
    @if(auth()->check())
        <h6>Halo, {{auth()->user()->name}}</h6>
    @endif

    <h4>List Project yang kamu donasikan:</h4>
    
@endsection