@extends('layouts/main')

@section('container')
    
    @if(auth()->check())
        <h6>Halo, {{auth()->user()->name}}</h6>
    @endif

    <h4>List Project yang kamu donasikan:</h4>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Project</th>
            <th scope="col">Nominal Donasi</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$project->project->title}}</td>
                <td>Rp {{$nominal[$project->project->id]}}</td>
                <td><a href="/donasi/{{$project->project->slug}}/{{auth()->user()->id}}" class="btn btn-primary">Donasi Lagi</a></td>
            </tr>
        @endforeach
        </tbody>
      </table>
    
@endsection