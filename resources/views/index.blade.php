@extends('layouts/login')

@section('container')
<div class="row">
    <!-- section one -->
    <div class="col text-center">
      <section class="one">
        <h1>INI SLIDER</h1>
      </section>
    </div>
    <!-- end section one -->

    <!-- section two -->
    <div class="col text-center">
      <section class="two">
        <card class="card" style="width: 18rem">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="/login-user" class="btn btn-primary">DONASI</a>
            <a href="/login-petani" class="btn btn-primary">GALANG DANA</a>
          </div>
        </card>
      </section>
    </div>
    <!-- end section two -->
  </div>
@endsection