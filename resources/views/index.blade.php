@extends('layouts/login')

@section('container')
<div class="row align-items-center">
  <style>
    /* CSS SLIDER */
    * {
        box-sizing: border-box;
    }
    .mySlides {
        display: none;
    }
    .img-slider {
        vertical-align: middle;
        height: 630px;
        object-fit: cover;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Caption text */
    .text-slider {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {
            opacity: 0.4;
        }
        to {
            opacity: 1;
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .text-slider {
            font-size: 11px;
        }
    }
    /* END CSS SLIDER */
  </style>
  <div class="col-lg-8">
    <div class="slider mx-auto">
      <div class="slideshow-container">
          <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img
                  class="img-slider"
                  src="img/donasi.jpg"
                  style="width: 100%"
              />
              <div class="text-slider">Caption Text</div>
          </div>

          <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img
                  class="img-slider"
                  src="img/donasi.jpg"
                  style="width: 100%"
              />
              <div class="text-slider">Caption Two</div>
          </div>

          <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img
                  class="img-slider"
                  src="img/donasi.jpg"
                  style="width: 100%"
              />
              <div class="text-slider">Caption Three</div>
          </div>
      </div>
      <br />

      <div style="text-align: center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
      </div>
    </div>
  </div>

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