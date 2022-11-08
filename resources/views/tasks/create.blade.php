@extends('Layout.Mainlayout')
@section('css')
<!-- Layout styles -->
<link rel="stylesheet" href="/assets/css/style.css">
<!-- End Layout styles -->
<link rel="shortcut icon" href="assets/images/favicon.ico" />
@endsection
@section('script')
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/todolist.js"></script>
@endsection
@section('content-wrapper')



 <div class="col-lg-12 margin-tb">
   <div class="pull-left mb-2">
     <h2>Add task</h2>
      </div>
   <div class="pull-right">
     <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>
    </div>
</div>

@if(session('status'))
  <div class="alert alert-success mb-1 mt-1">
   {{ session('status') }}
  </div>
@endif
<form action="{{route('tasks.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>name_task:</strong>
<input type="text" name="name_task" class="form-control" placeholder="name_task">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>describe</strong>
<input type="text" name="describe" class="form-control" placeholder="describe">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>link</strong>
<input type="text" name="link" class="form-control" placeholder="link">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>points</strong>
<input type="text" name="points" class="form-control" placeholder="points">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>type</strong>

<select name="type" id="" class="form-control" placeholder="type">
  <option value="facebook">facebook</option>
  <option value="instgram">instgram</option>
  <option value="youtube">youtube</option>
</select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>date</strong>
<select name="date" id="" class="form-control" placeholder="date">
  <option value="DD-MM-YY">1</option>
  <option value="DD-MM-YY">2</option>
  <option value="DD-MM-YY">3</option>
</select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>date_end</strong>
<input type="text" name="date_end" class="form-control" placeholder="date_end">
</div>
</div>
<button type="submit" class="btn btn-primary ml-3" >Submit</button>
</form>
@endsection



