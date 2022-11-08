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
<div class="container mt-2">
  <div class="row">
      <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                </div>
              <div class="pull-right mb-2">
               <a class="btn btn-success" href="{{ route('companies.create') }}"> Create Client</a>
              </div>
       </div>
   </div>
@if ($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{ $message }}</p>
  </div>
@endif
<table class="table table-bordered">
<tr>
<th>full_Name</th>
<th>email</th>
<th>state</th>
<th>bloked</th>
<th width="280px">Action</th>
</tr>
@foreach ($companies as $company)
<tr>
<td>{{ $company->full_name }}</td>
<td>{{ $company->email }}</td>
<td>{{ $company->state }}</td>
<td>{{ $company->bloked }}</td>
<td>
<form action="{{ route('companies.destroy',$company->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
<a class="btn btn-primary" href="{{ route('companies.show',$company->id) }}">show</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $companies->links() !!}

@endsection