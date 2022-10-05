
@extends('layouts/main')

@section('container')
    <article>
        <h2><a href="">{{$project->title}}</a> </h2>
        <p>Petani: <a href="/petani/{{$project->petaniid}}"> {{$project->user->name}} </a></p>
        <div class="progress" style="width: 50%">
            <div class="progress-bar" role="progressbar" style="width: {{($project->dana_terkumpul/$project->target_pendanaan)*100}}%;" aria-valuenow="{{$project->dana_terkumpul}}" aria-valuemin="0" aria-valuemax="{{$project->target_pendanaan}}">{{($project->dana_terkumpul/$project->target_pendanaan)*100}}%</div>
          </div>
        <p>Dana terkumpul sebesar Rp {{$project->dana_terkumpul}} dari target sebesar Rp {{$project->target_pendanaan}} </p>
        <p> {!! $project->deskripsi_project !!} </p>
        
    </article>
    <a href="/donasi/{{$project->slug}}/{{auth()->user()->id}}">Donasi disini!!!</a>
    <br>
    <a href="/project">Kembali</a>
@endsection