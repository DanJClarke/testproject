<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{


    public function index()
    {
        $projects = Project::all();

        return view('projects.index', ['projects' => $projects]);
    }


    public function create()
    {
        return view('projects.create');
    }


    public function store()
    {
        //$project = new Project();

        //$project->title = request('title');

        //$project->description = request('description');

        //$project->save();


        /************ Or another way with validation *******************

        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);

        Project::create($attributes);

        */

        Project::create(request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]));

        return redirect('/projects');
    }


    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }


    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }


    public function update(Project $project)
    {

        //$project->title = request('title');

        //$project->description = request('description');

        //$project->save();

        $project->update(request(['title','description']));

        return redirect('/projects');
    }



    public function destroy(Project $project)
    {
        //$project = Project::find($id);

        //$project->delete();

        $project->delete();

        return redirect('/projects');
    }

}
