@extends('Layout.Mainlayout')
@section('css')
<!-- Layout styles -->
<link rel="stylesheet" href="/assets/css/style.css">
<!-- End Layout styles -->
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
<h2>Edit client</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{route('companies.update',$company->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>client Name</strong>
<input type="text" name="name" value="{{$company->name}}" class="form-control" placeholder="client Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>full_Name:</strong>
<input type="text" name="full_name" value="{{$company->full_name}}" class="form-control" placeholder="full_Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>email</strong>
<input type="email" name="email" value="{{$company->email}}" class="form-control" placeholder="Client Email">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>password</strong>
<input type="text" name="password" value="{{$company->password}}" class="form-control" placeholder="password:">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Points_Balance</strong>
<input type="text" name="Points_Balance" value="{{$company->Points_Balance}}" class="form-control" placeholder="points_balance">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>title</strong>
<input type="text" name="title" value="{{$company->title}}" class="form-control" placeholder="title">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>phone:</strong>
<input type="text" name="phone" value="{{$company->phone}}"  class="form-control" placeholder="phone">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>type:</strong>
<input type="text" name="type" value="{{$company->type}}" class="form-control" placeholder="type">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>gender:</strong>
<input type="text" name="gender" value="{{$company->gender}}"  class="form-control" placeholder="gender">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>link_facebook</strong>
<input type="text" name="link_facebook" value="{{$company->link_facebook}}"  class="form-control" placeholder="link_facebook">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>link_instgram:</strong>
<input type="text" name="link_instgram" value="{{$company->link_instgram}}"  class="form-control" placeholder="linl_instgram">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>logo:</strong>
<input type="text" name="logo" value="{{$company->logo}}"  class="form-control" placeholder="logo">
</div>
</div>
<button type="submit" class="btn btn-primary ml-3" >update clinet</button>
</div>
</form>
@endsection