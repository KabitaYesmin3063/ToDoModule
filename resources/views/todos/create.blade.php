@extends('layout')

@section('content')
    <h1>Create New To-Do</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <input type="text" name="location" placeholder="Location">
        <input type="text" name="address" placeholder="Address">
        <input type="datetime-local" name="due_date">
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Create To-Do</button>
    </form>

    <a href="{{ route('todos.index') }}">Back to list</a>
@endsection
