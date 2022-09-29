<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    public function index()
    {
        return view('projects', [
            "title" => "Project",
            "projects" => Project::all()
        ]);
    }

    public function show(Project $project)
    {
        return view('project',[
            "title" => "Single Project",
            "project" => $project
        ]);
    }
}