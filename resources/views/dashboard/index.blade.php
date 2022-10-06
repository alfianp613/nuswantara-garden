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

<<<<<<< HEAD
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Project</th>
              <th scope="col">Status Project</th>
              <th scope="col">Target Pendanaan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>No</td>
                <td>Nama Project</td>
                <td>data</td>
                <td>action</td>
                <td>
                    <a href="" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
            </tr>

            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>placeholder</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              <td>irrelevant</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>visual</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>
      </div>

=======
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
>>>>>>> a3c9af15c13ef7d04ddbdaba41ced27b83e8c710

@endsection