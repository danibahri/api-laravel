<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = Todo::all();
        return response()->json($todo);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required|in:in progress,completed,cancelled'
        ]);

        $todo = Todo::create($request->all());

        return response()->json(['data' => $todo, 'message' => 'Todo created successfully'], 201);
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json(['message' => 'Todo deleted successfully'], 200);
    }
}
