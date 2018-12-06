<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    // Index page
    public function index() {

        $projects = \App\Project::all();

        // this will return JSON
        //return $projects;
        
        return view('projects.index', [
        'projects' => $projects,
        'stringliteral' => 'Hello Projects!!!',
        'foo' => request('title', 'Try entering a url parameter \'title\' with whatever value you want')
        ]);
    }
}
