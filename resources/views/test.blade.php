

@extends('Layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-body">
                @include('flash::message')
                <form action="{{ route('test') }}" method="post">
                    @csrf
                    <input type="text" name="name" class="form-control">
                    <input type="submit" value="Submit" style="margin-top: 10px;">
                </form>
            </div>
            </div>
        </div>
    </div>
    <script>
        $('#flash-overlay-modal').modal();
    </script>
</div>
@endsection  