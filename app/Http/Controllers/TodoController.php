<?php


namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    // Display a listing of the todos
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    // Show the form for creating a new todo
    public function create()
    {
        return view('todos.create');
    }

    // Store a newly created todo in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'due_date' => 'nullable|date',
        ]);

        Todo::create($validatedData);

        return redirect()->route('todos.index')->with('success', 'To-Do created successfully.');
    }

    // Show the form for editing the specified todo
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    // Update the specified todo in the database
}