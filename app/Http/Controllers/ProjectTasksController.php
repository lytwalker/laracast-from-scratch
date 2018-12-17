<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

use App\Project;

class ProjectTasksController extends Controller
{
    // Create project page
    public function store(Project $project) {

        $validated_attributes = request()->validate([
            'description' => ['required', 'min:15']
            ]);

        $project->addTask($validated_attributes);

        return back();
    }

    public function update(Task $task) {

        //$task->update(request(['completed']));
        $task->update([
            'completed' => request()->has('completed')
            ]);

        // this redirects back to the last page.
        return back();
    }
}