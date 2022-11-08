@extends('Layout.Mainlayout')
@section('css')
<!-- Layout styles -->
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
<!-- End Layout styles -->
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
@endsection
@section('script')
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/todolist.js"></script>
@endsection
@section('content-wrapper')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>show client</title>
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{asset('assets/css/styleshow.css')}}">
        
        <!-- End Layout styles -->
    </head>
<body>
@if ($company->bloked==0)
    

                                                
                                      
@if ($company->gender =="femme"&&($company->type=="visitor"||$company->type=="admin"))
<section class="sec" >
    <header>

                        <ul>
                     
                                       <li><a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a></li>
                          </ul>
</header>
<div class="content">
    <div class="textBox">
        <h2>
            
            {{ $company->full_name }}<br>
            <span>{{ $company->gender }}</span></h2><br>
        
            <strong> {{ $company->logo }}</strong>
            
        
        
        <a herf="#"><img src="{{asset('assets/images/faces/phone4.png')}}" width="100px" >
        tel: {{ $company->phone }} </a><br>
        <a herf="#"><img src="{{asset('assets/images/faces/title.png')}}" width="80px" >
        title: {{ $company->title }} </a>
    </div>
    
    
    <div class="imgBox">
        <img src="{{asset('assets/images/faces/photo1.webp')}}" class="">
    </div>  
</div>
<ul class="sci">
    <li><a href={{ $company->link_facebook }}><img src="{{asset('assets/images/faces/facebook.png')}}" ></a></li>
    <li><a href={{ $company->link_instgram }}><img src="{{asset('assets/images/faces/instagram.png')}}"></a></li>
    <li><a href={{ $company->email }}><img src="{{asset('assets/images/faces/email7.png')}}" width="90px" style="margin-top:-20px";></a></li>
    
</ul>

</section>
@else($company->gender =="man"&&($company->type=="visitor"||$company->type=="admin"))
<section class="sec2" >
    <header>
                        <ul>
                                       <li><a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a></li>
                          </ul>
</header>
<div class="content">
    <div class="textBox">
        <h2>{{ $company->full_name }}<br><span>{{ $company->gender }}</span></h2><br>
        
          <p>{{ $company->logo }} </p>
        
        <a herf="#"><img src="{{asset('assets/images/faces/phone4.png')}}" width="100px" >
        tel: {{ $company->phone }} </a>
        <br>
        <a herf="#"><img src="{{asset('assets/images/faces/title.png')}}" width="80px" >
        title: {{ $company->title }} </a>
    </div>
    
    
    <div class="imgBox">
        <img src="{{asset('assets/images/faces/social14.jpg')}}" class="">
    </div>  
</div>
<ul class="sci">
    <li><a href={{ $company->link_facebook }}><img src="{{asset('assets/images/faces/facebook.png')}}" ></a></li>
    <li><a href={{ $company->link_instgram }}><img src="{{asset('assets/images/faces/instagram.png')}}"></a></li>
    <li><a href={{ $company->email }}><img src="{{asset('assets/images/faces/email7.png')}}" width="90px" style="margin-top:-20px";></a></li>
    
</ul>

</section>
@endif
@else
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
</div>

@endif

</body>
</html>
@endsection


  
