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
       
            <div class="pull-left">
                <h2> Show task</h2>
            </div>
            <table class="table table-bordered">
<tr>
<th>name_task</th>
<th>describe</th>
<th>type</th>
<th>date</th>
<th>date_end</th>
</tr>
@foreach ($task as $task)
<tr>
<td>{{ $task->name_task }}</td>
<td>{{ $task->describe }}</td>
<td>{{ $task->type }}</td>
<td>{{ $task->date}}</td>
<td>{{ $task->date_end}}</td>
</tr>
@endforeach
</table>



            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>
            </div>

        
    </div> 
@endsection