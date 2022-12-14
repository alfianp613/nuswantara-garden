<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        return view('user.projects', [
            "title" => "Project",
            "projects" => Project::with('user')->latest()->get()
        ]);
    }

    public function show(Project $project)
    {
        return view('user.project',[
            "title" => "Single Project",
            "project" => $project
        ]);
    }

    public function checkSlug(Request $request){
        $slug=SlugService::createSlug(Project::class, 'slug', $request->title);
        return response()->json(['slug'=>$slug]);
    }


    
}