@extends('dashboard.layouts.main')

@section('container')
<article>
    <div class="container mt-2 mb-1">
        <a href="/dashboard" class="btn btn-secondary">Kembali</a> 
        <a href="/dashboard/project/{{$project->slug}}/edit" class="btn btn-success">Update</a> 
        <form action="/dashboard/project/{{$project->slug}}" method="post" class="d-inline"> 
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('Apakah kamu yakin?')"> Delete</button>
        </form>
    </div>
    @if ($project->image)
        <img src="{{asset('storage/'.$project->image)}}" class="card-img-top" alt="thumbnail">
    @else
        <img src="https://source.unsplash.com/1200x400?pertanian,agriculture" class="card-img-top" alt="thumbnail">
    @endif

    <h2>{{$project->title}}</h2>
    
    <br>
    <div class="progress" style="width: 50%">
        <div class="progress-bar" role="progressbar" style="width: {{($project->dana_terkumpul/$project->target_pendanaan)*100}}%;" aria-valuenow="{{$project->dana_terkumpul}}" aria-valuemin="0" aria-valuemax="{{$project->target_pendanaan}}">{{($project->dana_terkumpul/$project->target_pendanaan)*100}}%</div>
      </div>
    <p>Dana terkumpul sebesar Rp {{$project->dana_terkumpul}} dari target sebesar Rp {{$project->target_pendanaan}} </p>
    <p class="text-muted">Diposting {{$project->created_at->diffForHumans()}}</a></p>
    <p> {!! $project->deskripsi_project !!} </p>
    
</article>
@endsection