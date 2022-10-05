
@extends('layouts/main')

@section('container')
    <article>
        <h2><a href="">{{$project->title}}</a> </h2>
        <p>Petani: <a href="/petani/{{$project->petaniid}}"> {{$project->user->name}} </a></p>
        <p>Dana terkumpul sebesar Rp {{$project->dana_terkumpul}} dari target sebesar Rp {{$project->target_pendanaan}} </p>
        <p> {!! $project->deskripsi_project !!} </p>
        
    </article>
    <a href="#">Donasi disini!!!</a>
    <br>
    <a href="/project">Kembali</a>
@endsection