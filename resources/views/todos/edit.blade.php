@extends('layout')

@section('content')
    <h1>Edit To-Do</h1>

    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $todo->title }}" required>
        <input type="text" name="location" value="{{ $todo->location }}">
        <input type="text" name="address" value="{{ $todo->address }}">
        <input type="datetime-local" name="due_date" value="{{ $todo->due_date }}">
        <textarea name="description">{{ $todo->description }}</textarea>
        <button type="submit">Update To-Do</button>
    </form>

    <a href="{{ route('todos.index') }}">Back to list</a>
@endsection

