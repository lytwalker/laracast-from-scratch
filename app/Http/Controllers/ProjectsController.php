<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    // Index page
    public function index() {

        $projects = Project::all();

        // this will return JSON
        //return $projects;
        
        return view('projects.index', [
        'projects' => $projects,
        'stringliteral' => 'Hello Projects!!!',
        'foo' => request('title', 'Try entering a url parameter \'title\' with whatever value you want')
        ]);
    }

    // Create project page
    public function create() {
        
        return view('projects.create');
    }

    // Create project page
    public function store() {
        
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');
        
        $project->save();

        return redirect('/projects');
    }

    public function edit($id) { // example.com/projects/1/edit

        $project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));
    }

    public function update($id) {

        $project = Project::findOrFail($id);

        $project->title = request('title');
        $project->description = request('description');
        
        $project->save();

        return redirect('/projects');
    }

    public function destroy($id) {

        Project::findOrFail($id)->delete();

        return redirect('/projects');
    }
}
