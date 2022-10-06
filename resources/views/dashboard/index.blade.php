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

<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Project</th>
              <th scope="col">Dana Terkumpul</th>
              <th scope="col">Target Pendanaan</th>
              <th scope="col">Saldo saat ini</th>
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
                    <td>Rp {{$project->dana_terkumpul-$project->dana_terambil}}</td>
                    <td>{{$project->status_project}}</td>
                    <td><div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{($project->dana_terkumpul/$project->target_pendanaan)*100}}%;" aria-valuenow="{{$project->dana_terkumpul}}" aria-valuemin="0" aria-valuemax="{{$project->target_pendanaan}}">{{($project->dana_terkumpul/$project->target_pendanaan)*100}}%</div>
                      </div></td>
                    <td><a href="/dashboard/project/{{$project->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>  
                        <a href="/dashboard/project/{{$project->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a> 
                        <a href="/dashboard/project/{{$project->slug}}/{{auth()->user()->petani->nik}}/payment" class="badge bg-success"><span data-feather="dollar-sign"></span></a>
                        <form action="/dashboard/project/{{$project->slug}}" method="post" class="d-inline"> 
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah kamu yakin?')"><span data-feather="x-circle"></span></button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach

@endsection