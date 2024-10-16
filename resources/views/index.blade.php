@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>

    @if(session('success'))
    <div class="alert alert-success mt-2">
        {{ session('success') }}
    </div>
    @endif

    <ul class="list-group mt-4">
        @foreach($tasks as $task)
        <li class="list-group-item">
            <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection