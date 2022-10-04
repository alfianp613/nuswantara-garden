@extends('layouts/login')

@section('container')
<div class="row">
       <!-- Section 1 -->
       <div class="row section1">
      <div class="col-6">
        <img src="img/Nuswantara.jpg" alt="section1" class="img-fluid">
      </div>
      <div class="col-5">
        <h3> Nuswantara Garden</h3>
        <p>Maju untuk Petani Atsiri</p>
      </div>
      </div>
    </div>

    <!-- Section 2 -->
    <div class="row section2">
      <div class="col-6">
        <img src="img/donasi.jpg" alt="section1" class="img-fluid" style="padding bottom : 20px;">
        <h3> DONATUR</h3>
        <p>Mari Berbagi Untuk Kejayaan Petani Negeri</p>
        <a href="/blog/berita2/" class="btn btn-primary"> More Info</a>
      </div>
      <div class="col-6">
        <img src="img/petani.jpg" alt="section1" class="img-fluid">
        <h3> PETANI</h3>
        <p>Berikan project pertanian terbaikmu !!!</p>
        <a href="/blog/berita3/" class="btn btn-primary"> More Info</a>
      </div>
      </div>
    </div>
    <!-- end section two -->
</div>
@endsection