<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do Module</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Link to your CSS file -->
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="{{ route('todos.index') }}">Home</a></li>
            <li><a href="{{ route('todos.index') }}">To-Do List</a></li>
            <li><a href="{{ route('todos.create') }}">Create To-Do</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
