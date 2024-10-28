<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index()
    {
        $tasks  = Task::all();
        return view('tasks.index',compact('tasks'));
    }
    public function create()
    {
        return view('tasks.crete');
    }

    public function store(Request $request)
    {
        $tasks = Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function show(string $id)
    {
        $task = Task::find($id);
        return view('tasks.show',compact('task'));
    }

    
    public function edit(string $id)
    {
        $task = Task::find($id);
        return view('tasks.edit',compact('task'));
    }

    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        $task->update($request->all());
        return redirect()->route('tasks.index');
    }

    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
