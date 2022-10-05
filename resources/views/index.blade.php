@extends('layouts/login')

@section('container')
<div class="row align-items-center">
  @include('partials/slider')
  <style>
    /*  */
    .card {
        border-radius: 25px;
        background-color: #b3bb99;
    }
    .card-text {
        color: #2c4a44;
    }
    /* END CSS CARD */

    .button-user-petani {
        background-color: #2c4a44;
    }
    .button-user-petani:hover {
        background-color: #ece3d4;
        border-radius: 30px;
    }
    .card a {
        color: #ece3d4;
    }
    .card a:hover {
        color: #2c4a44;
    }
    /*  */
  </style>
  <div class="col-lg-4">
    <div class="content text-center">
      <card class="card mx-auto" style="width: 18rem">
          <div class="card-body">
              <h5 class="card-title">
                  Special title treatment
              </h5>
              <p class="card-text">
                  With supporting text below as a natural
                  lead-in to additional content.
              </p>
              <a
                  href="/login"
                  class="btn button-user-petani"
                  >DONASI</a
              >
              <a
                  href="/login"
                  class="btn button-user-petani"
                  >GALANG DANA</a
              >
          </div>
      </card>
    </div>
  </div>
</div>

<script>
  let slideIndex = 0;
  showSlides();

  function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
          slideIndex = 1;
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(
              " active",
              ""
          );
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
  }
</script>
@endsection