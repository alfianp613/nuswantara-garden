@extends('dashboard.layouts.main')

@section('container')
@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
    {{ session('success')}}
    </div>
    @endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{auth()->user()->name}}</h1>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Project</th>
        <th scope="col">Dana Terkumpul</th>
        <th scope="col">Target Pendanaan</th>
        <th scope="col">Status Project</th>
        <th scope="col">Progress Bar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($projects as $project)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$project->title}}</td>
            <td>Rp {{$project->dana_terkumpul}}</td>
            <td>Rp {{$project->target_pendanaan}}</td>
            <td>{{$project->status_project}}</td>
            <td><div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{($project->dana_terkumpul/$project->target_pendanaan)*100}}%;" aria-valuenow="{{$project->dana_terkumpul}}" aria-valuemin="0" aria-valuemax="{{$project->target_pendanaan}}">{{($project->dana_terkumpul/$project->target_pendanaan)*100}}%</div>
              </div></td>
            <td><a href="/dashboard/project/{{$project->slug}}" class="btn btn-primary">View</a>  
                <a href="/dashboard/project/{{$project->slug}}/edit" class="btn btn-success">Update</a> 
                <form action="/dashboard/project/{{$project->slug}}" method="post" class="d-inline"> 
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Apakah kamu yakin?')"> Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection