
@extends('Layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="{{asset('https://unpkg.com/swiper/swiper-bundle.min.css')}}"
    />

     <!-- Bootstrap core CSS -->
     <link href="{{asset('dd/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{asset('dd/assets/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('dd/assets/css/templatemo-digimedia-v1.css')}}">
<link rel="stylesheet" href="{{asset('dd/assets/css/animated.css')}}">
<link rel="stylesheet" href="{{asset('dd/assets/css/owl.css')}}">
    <style>
      html,
      body {
        position: relative;
        height: 100%;
        background-color:#fff;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
      }

      .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
      }
    </style>
  </head>

  <body style="background-color:#fff";>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{asset('assets/images/faces/icon3.jpg')}}" />
        </div>
        <div class="swiper-slide">
          <img src="{{asset('assets/images/faces/icon1.webp')}}" />
        </div>
        <div class="swiper-slide">
          <img src="{{asset('assets/images/faces/icon5.webp')}}" />
        </div>
        <div class="swiper-slide">
          <img src="{{asset('assets/images/faces/icon4.jpg')}}" />
        </div>
       
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="{{asset('https://unpkg.com/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
 <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Social Media </h6>
                    <h2>We Boost Your Website Traffic</h2>
                    <p></p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Free Quote</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('dd/assets/images/slider-dec.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




<main class="main " style="background-color:#111";>
       <div class="content-container">
       <section class="system-overview-block" style="background-color:#FED8D5";> 
       <div class="container" >
            <div class="row">
                <div class="col-md-6 ">
                  <h1 style="font-size: 100px; color: white; text-shadow: 2px 2px 4px #000000;">Stay</h1><br>
                   <h2>in control of your projects</h2>
                  <p>Save time, streamline your processes, manage workflow, control document versions, catch red flags early, learn from real-time insights, and stay on top of your projects from day one.</p>
                  <a class="orange-button" href="#">who are we?</a>
                </div>
                <div class="col-lg-6">
                <img src="{{asset('assets/images/faces/photo2.webp')}}" class="img-fluid" style="box-shadow: 25px 25px 25px #fff;border-radius: 25px;" alt="...">
</div>
             <div class="col-lg-6">
              
           </div>
</DIV>
         <div class="card-body">
           <h5 class="card-title">Join us</h5>
              <p class="card-text">Follow all new to stay informed</p>
         </div>
       <ul class="list-group list-group-flush">
        <li class="list-group-item ">common questions??</li>
       </ul>
      <div class="card-body">
     <a href="#" class="card-link">Follow</a>
     <a href="#" class="card-link">Page Download</a>
  </div>
</div>

  </section>
    </div>
    </div>





  </body>
</html>
@endsection