
@extends('layouts/main')

@section('container')
    <h1>Halaman Project</h1>

    @foreach ($projects as $project)
    <article class="mb-5 border-bottom pb-4">
    <div class="card mb-3">
        @if ($project->image)
        <img src="{{asset('storage/'.$project->image)}}" class="card-img-top" alt="thumbnail" height="400px">
        @else
        <img src="https://source.unsplash.com/1200x400?pertanian,agriculture" class="card-img-top" alt="thumbnail">
        @endif
       
        <div class="card-body">
            <h5 class="card-title">     
            <a href="/project/{{ $project->slug }}" class="text-decoration-none">{{$project->title}}</a> </h5>
            <p class="card-text">Petani: <a href="/petani/{{$project->petaniid}}" class="text-decoration-none"> {{$project->user->name}} </a></p>
            <p class="card-text text-muted">Diposting {{$project->created_at->diffForHumans()}}</a></p>
            <p class="card-text">Dana terkumpul sebesar Rp {{$project->dana_terkumpul}} dari target sebesar Rp {{$project->target_pendanaan}} </p>
            <p class="card-text"> {{$project->excerpt }} </p>
            <a href="/project/{{ $project->slug }}" class="text-decoration-none btn btn-primary">Lihat selengkapnya</a>
        </div>
    </div>
    </article>    
    @endforeach
@endsection