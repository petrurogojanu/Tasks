
@extends('layout.layout')
 
@section('content')
<a href="/tasks" class="btn btn-primary btn-primary"><i class="fas fa-arrow-left"></i>  Back</a>
<br><br>
            <h1>Showing Task {{ $task->title }}</h1>
 
    <div class="jumbotron text-center">
        <p>
            <strong>Task Title:</strong> {{ $task->title }}<br>
            <strong>Description:</strong> {{ $task->description }}
        </p>
    </div>
@endsection
 