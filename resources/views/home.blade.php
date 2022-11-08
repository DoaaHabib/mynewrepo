@extends('Layout.app')

@section('content')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>show task</title>
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{asset('assets/css/styleshow.css')}}">
        
        <!-- End Layout styles -->
       <!-- Bootstrap core CSS -->
    <link href="{{asset('dd/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{asset('dd/assets/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('dd/assets/css/templatemo-digimedia-v1.css')}}">
<link rel="stylesheet" href="{{asset('dd/assets/css/animated.css')}}">
<link rel="stylesheet" href="{{asset('dd/assets/css/owl.css')}}">




    </head>

    <div class="container">
      <div class="row">
@foreach ($task as $task)
@if ($task->type=="facebook")
<div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('assets/images/faces/icon5.webp')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Task</h6>
                  <h4>{{ $task->name_task }} <em>TASK</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>{{ $task->describe }}<a rel="nofollow" href="{{ $task->link }}" target="_blank">link task</a> </p>
                <ul class="list-group list-group-flush">
    <li >{{ $task->date }}</li>
    <li >{{ $task->dateend }}</li>
  </ul>
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="{{$task->points}}">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                          {{$task->points}}%<br>
                            <span>points</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                 
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @elseif($task->type=="instgram")
  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('assets/images/faces/icon1.webp')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Task</h6>
                  <h4>{{ $task->name_task }} <em>TASK</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>{{ $task->describe }}<a rel="nofollow" href="{{ $task->link }}" target="_blank">link task</a> </p>
                <ul class="list-group list-group-flush">
    <li >{{ $task->date }}</li>
    <li >{{ $task->dateend }}</li>
  </ul>
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="{{$task->points}}">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                          {{$task->points}}%<br>
                            <span>points</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                 
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @else
  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('assets/images/faces/icon4.jpg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Task</h6>
                  <h4>{{ $task->name_task }} <em>TASK</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>{{ $task->describe }}<a rel="nofollow" href="{{ $task->link }}" target="_blank">link task</a> </p>
                <ul class="list-group list-group-flush">
    <li >{{ $task->date }}</li>
    <li >{{ $task->dateend }}</li>
  </ul>
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="{{$task->points}}">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                          {{$task->points}}%<br>
                            <span>points</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                 
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
                  @endforeach
                  </div>
  </div>
                 






</body>
</html>  
@endsection
