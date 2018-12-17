<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class ProjectTasksController extends Controller
{
    //

    public function update(Task $task) {

        //$task->update(request(['completed']));
        $task->update([
            'completed' => request()->has('completed')
            ]);

        // this redirects back to the last page.
        return back();

        /*dd(request()->all());*/
    }
}