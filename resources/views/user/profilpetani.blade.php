@extends('layouts/main')

@section('container')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Offcanvas navbar template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/offcanvas-navbar/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      @if ($user->image)
		<img class="d-block mx-auto mb-4 rounded-circle" src="{{asset('storage/'.$user->image)}}" alt="test" width="250px" height="250px">
		@else
		<img class="d-block mx-auto mb-4 rounded-circle" src="https://randomuser.me/api/portraits/men/1.jpg" alt="test" width="250px" height="250px">
		@endif
      <h2>Biodata </h2>
      <p class="lead"></p>
    </div>

  <div class="my-5 p-5 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Biodata Petani</h6>
    <div class="d-flex text-muted pt-3">
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">Nama</strong>
        {{$user->name}}
      </p>
    </div>
    <div class="d-flex text-muted pt-3">
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">E-mail</strong>
        {{$user->email}}
      </p>
    </div>
    <div class="d-flex text-muted pt-3">
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">No. Telepon</strong>
        {{$user->petani->no_telepon}}  
      </p>
    </div>
    <div class="d-flex text-muted pt-3">
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">Komoditas</strong>
        {{$user->petani->komoditas}} </p>
    </div>
    <div class="d-flex text-muted pt-3">
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">Alamat</strong>
        {{$user->petani->alamat}} </p>
    </div>
</main>
<h2>List Project</h2>
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
           <p class="card-text">Dana terkumpul sebesar Rp {{$project->dana_terkumpul}} dari target sebesar Rp {{$project->target_pendanaan}} </p>
           <p class="card-text"> {{$project->excerpt}} </p>
           <a href="/project/{{ $project->slug }}" class="text-decoration-none btn btn-primary">Lihat selengkapnya</a>
       </div>
   </div>
   </article>    
   @endforeach

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="offcanvas.js"></script>
  </body>
</html>
   
@endsection