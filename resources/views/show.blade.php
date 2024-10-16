@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>

    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Edit</a>

    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection