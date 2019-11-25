<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

use App\Project;

class ProjectTasksController extends Controller
{

    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required']);

        $project->addTask($attributes);

        /*
        Task::create([
            'project_id' => $project->id,
            'description' => request('description')
        ]);

        */

        return back();
    }

    /* This has been totally superseeded by a new controller to handel the completed state.

    public function update(Task $task)
    {


        $method = request()->has('completed') ? 'complete' : 'incomplete';

        $task->$method();

        /*


        //=============VERSON 4 ==================

        request()->has('completed') ? $task->complete() : $task->incomplete();
        }

        //=============VERSON 3 ==================

        if(request()->has('completed')){
            $task->complete();
        }else{
            $task->incomplete();
        }

        //=============VERSON 2 ==================

        $task->complete(request()->has('completed'));

        /*

        //=============VERSON 1 ==================
        $task->update([
            'completed' => request()->has('completed')
        ]);


        return back();
    }
    */


}
