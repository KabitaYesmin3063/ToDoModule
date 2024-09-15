@extends('layout')

@section('content')
    <h1>To-Do List</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <input type="text" name="location" placeholder="Location">
        <input type="text" name="address" placeholder="Address">
        <input type="datetime-local" name="due_date">
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Add To-Do</button>
    </form>

    <ul>
        @foreach($todos as $todo)
            <li>
                <h2>{{ $todo->title }}</h2>
                <p>{{ $todo->description }}</p>
                <p>{{ $todo->location }} - {{ $todo->address }}</p>
                <p>Due: {{ $todo->due_date }}</p>
                <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('todos.create') }}">Create New To-Do</a>

@endsection
