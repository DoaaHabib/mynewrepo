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
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">

<div class="pull-left mb-2">
<h2>Edit task</h2>
</div>

<div class="pull-right">
<a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>
</div>

@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('tasks.update',$task->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>name_task</strong>
<input type="text" name="name_task" value="{{$task->name_task}}" class="form-control" placeholder="Name_task">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>describe</strong>
<input type="text" name="describe" value="{{$task->describe}}" class="form-control" placeholder="describe">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>link</strong>
<input type="text" name="link" value="{{$task->link}}" class="form-control" placeholder="link">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>points</strong>
<input type="text" name="points" value="{{$task->points}}" class="form-control" placeholder="points">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>date</strong>
<input type="text" name="date" value="{{$task->date}}" class="form-control" placeholder="date">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>date_end</strong>
<input type="text" name="date_end" value="{{$task->date_end}}" class="form-control" placeholder="date_end">
</div>
</div>
<button type="submit" class="btn btn-primary ml-3" >Update</button>
</div>
</form>
</div>
</div>
</div>

@endsection