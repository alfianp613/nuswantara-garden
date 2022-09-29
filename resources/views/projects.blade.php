
@extends('layouts/main')

@section('container')
    <h1>Halaman Project</h1>

    @foreach ($projects as $project)
    <article class="mb-5 border-bottom pb-4">
        <h2>
           <a href="/project/{{ $project->slug }}" class="text-decoration-none">{{$project->title}}</a> </h2>
        <p>Petani: <a href="#" class="text-decoration-none"> {{$project->nama_petani}} </a></p>
        <p>Dana terkumpul sebesar Rp {{$project->dana_terkumpul}} dari target sebesar Rp {{$project->target_pendanaan}} </p>
        <p> {{$project->excerpt}} </p>
        <a href="/project/{{ $project->slug }}" class="text-decoration-none">Lihat selengkapnya</a>
    </article>    
    @endforeach
@endsection