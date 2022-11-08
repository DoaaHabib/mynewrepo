@extends('Layout.app')
<link rel="stylesheet" href="/assets/css/style2.css">
<link rel="stylesheet" href="/assets/css/swiper.min.css">

@section('css')
<!-- Layout styles -->
<link rel="stylesheet" href="/assets/css/style.css">
<!-- End Layout styles -->
@endsection
@section('content')
 

<main class="main " style="background-color:#B095E5";>
       <div class="content-container">
       <section class="system-overview-block" style="background-color:#B095E5";> 
       <div class="container" >
            <div class="row">
                <div class="col-md-6 ">
                  <h1>Stay in control of your projects</h1>
                  <p>Save time, streamline your processes, manage workflow, control document versions, catch red flags early, learn from real-time insights, and stay on top of your projects from day one.</p>
                  <a class="orange-button" href="#">who are we?</a>
                </div>
                <div class="col-lg-6">
                <img src="{{asset('assets/images/faces/background6.webp')}}" class="img-fluid" alt="...">
</div>
             <div class="col-lg-6">
              
           </div>
</DIV>
         <div class="card-body">
           <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         </div>
       <ul class="list-group list-group-flush">
        <li class="list-group-item ">common questions??</li>
       </ul>
      <div class="card-body">
     <a href="#" class="card-link">Card link</a>
     <a href="#" class="card-link">Another link</a>
  </div>
</div>

  </section>
  <!--card3d-->
  <div class="swiper mySwiper">
      <div class="swiper-wrapper">
          <div class="swiper-slide">
            
            <div class="card">
               <img src="{{asset('assets/images/faces/icon1.webp')}}" /> 
               <div class="content">
               <p> hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
               <a href="#">read more</a>
               </div>
             </div>
          </div>
          <div class="swiper-slide">
            
            <div class="card">
               <img src="{{asset('assets/images/faces/icon3.jpg')}}" /> 
               <div class="content">
               <p> hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
               <a href="#">read more</a>
               </div>
             </div>
          </div>
          <div class="swiper-slide">
            
            <div class="card">
               <img src="{{asset('assets/images/faces/icon4.jpg')}}" /> 
               <div class="content">
               <p> hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
               <a href="#">read more</a>
               </div>
             </div>
          </div>
          <div class="swiper-slide">
            
            <div class="card">
               <img src="{{asset('assets/images/faces/icon5.jpg')}}" /> 
               <div class="content">
               <p> hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
               <a href="#">read more</a>
               </div>
             </div>
          </div>

       </div>
    </div>
    <script src="swiper.min.js"></script>
<script>
      var swiper = new Swiper("swiper mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 300,
          stretch: 0,
          depth: 10,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>

<!--////-->
  </div>
  
    </main>
<!-- before -->
<div class="container" >
     <div class="row">
         
          
         </div>
      </div>

</div>







    

@endsection
