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
        
        return view('projects.index', compact('projects'));
    }

    // Show project page
    public function show(Project $project) {

        return view('projects.show', compact('project'));
    }

    // Create project page
    public function create() {
        
        return view('projects.create');
    }

    // Create project page
    public function store() {
        
        Project::create(request(['title','description']));

        return redirect('/projects');
    }

    public function edit(Project $project) { // example.com/projects/1/edit

        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {

        $project->update(request(['title','description']));

        return redirect('/projects');
    }

    public function destroy(Project $project) {

        $project->delete();

        return redirect('/projects');
    }
}
