<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Monolog\Handler\FirePHPHandler;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tasks = Task::where('id', '2')->first();
        // return $tasks;

        $tasks = Task::all();
        return view('tasks.index', compact('tasks')); //compact function sends data to the index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->title . $request->time;

        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required',
            'time' => 'required',
        ]);

        // Eloquent query 
        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->time = $request->time;

        $task->save();

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Task $task)
    public function show(string $id)
    {
        $task = Task::where('id', $id)->first();
        if (!$task) {
            return redirect()->route('tasks.index');
        }
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Task $task) 
    public function edit(string $id)
    {
        $task = Task::where('id', $id)->first();
        if (!$task) {
            // abort(404);
            // or
            return redirect()->route('tasks.index');
        }
        // return $task;
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Task $task)
    public function update(Request $request, string $id)
    {
        // validation
        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required',
            'time' => 'required',
        ]);

        // fetch old data
        $task = Task::where('id', $id)->first();
        if (!$task) {
            abort(404);
        }

        $task->title = $request->title;
        $task->description = $request->description;
        $task->time = $request->time;

        $task->update();

        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Task $task)
    public function destroy(string $id)
    {
        $task = Task::where('id', $id)->first();
        if (!$task) {
            abort(404);
        }

        $task->delete();
        return redirect()->route('tasks.index');
    }
}
