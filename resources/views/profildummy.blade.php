@extends('layouts/main')

@section('container')
   <h2>Profil Petani</h2>
   <p>Nama: {{$user->name}}</p>
   <p>Email: {{$user->email}}</p>
   <p>Komoditas: {{$user->petani->komoditas}}</p>
   <p>No Telepon: {{$user->petani->no_telepon}}</p>
   <p>Alamat: {{$user->petani->alamat}}</p>
   <br>
   <h2>List Project</h2>
   @foreach ($projects as $project)
   <article class="mb-5 border-bottom pb-4">
   <div class="card mb-3">
       <img src="..." class="card-img-top" alt="...">
       <div class="card-body">
           <h5 class="card-title">     
           <a href="/project/{{ $project->slug }}" class="text-decoration-none">{{$project->title}}</a> </h5>
           <p class="card-text">Petani: <a href="/petani/{{$project->petaniid}}" class="text-decoration-none"> {{$project->user->name}} </a></p>
           <p class="card-text">Dana terkumpul sebesar Rp {{$project->dana_terkumpul}} dari target sebesar Rp {{$project->target_pendanaan}} </p>
           <p class="card-text"> {{$project->excerpt}} </p>
           <a href="/project/{{ $project->slug }}" class="text-decoration-none btn btn-primary">Lihat selengkapnya</a>
       </div>
   </div>
   </article>    
   @endforeach
@endsection