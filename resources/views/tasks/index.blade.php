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

   <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right mb-2">
          <a class="btn btn-success" href="{{ route('tasks.create') }}"> Create task</a>
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
<th>name_task</th>
<th>describe</th>
<th>date</th>
<th>date_end</th>
<th width="280px">Action</th>
</tr>
@foreach ($task as $task)
<tr>
<td>{{ $task->name_task }}</td>
<td>{{ $task->describe }}</td>
<td>{{ $task->date}}</td>
<td>{{ $task->date_end}}</td>
<td>
<form action="{{ route('tasks.destroy',$task->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
<a class="btn btn-primary" href="{{ route('tasks.show',$task->id) }}">Show</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>


@endsection

