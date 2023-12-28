<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function store(Request $request)
    {

        $this->validate($request, [
            'company_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string',
            'user_id' => 'required|integer',
        ]);

        $tasks = Task::where('user_id', $request->user_id)->where('completed', false)->get();
        if (count($tasks) >= 5) {
            return response()->json([
                'message' => 'No se le pueden asignar mas tareas al usuario.',
            ], 422);
        }

        $task = Task::create([
            'company_id' => $request->company_id,
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);

        $user = User::find($request->user_id);

        return response()->json([
            'id' => $task->id,
            'name' => $task->name,
            'description' => $task->description,
            'user' => $user->name,
            'company' => $task->company->only(['id', 'name']),
        ]);
    }
}
