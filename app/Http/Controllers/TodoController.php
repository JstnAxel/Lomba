<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $categories = Category::all();

        return view('dashboard', compact('tasks', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('tasks.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'activity' => 'required',
            'category_id' => 'required',
        ]);

        Task::create($validatedData);

        return redirect()->route('dashboard')->with('success', 'Task berhasil Ditambahkan.');
    }

    public function edit(Task $task)
    {
        $categories = Category::all();

        return view('tasks.edit', compact('task', 'categories'));
    }

    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'activity' => 'required',
            'category_id' => 'required',
        ]);

        $task->update($validatedData);

        return redirect()->route('dashboard')->with('success', 'Task berhasil di update.');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('dashboard')->with('success', 'Task berhasil di hapus.');
    }
}