<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    # ToDo : 渡ってきたTaskをどうやってJSONに変換して返しているのかソースを確認
    public function show(Task $task)
    {
        return $task;
    }

    public function store(Request $request)
    {
        return Task::create($request->all());
    }
    
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return $task;
    }
}
