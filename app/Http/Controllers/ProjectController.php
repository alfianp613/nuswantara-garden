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

    public function store(Request $request){
        $validated = $request-> validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:projects',
            'status_project' => 'required',
            'target_pendanaan' => 'required',
            'deskripsi_project' => 'required'
        ]);
        
        $validated['petaniid'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->deskripsi_project),200);

        Project::create($validated);

        return redirect('/homepetani')->with("success",'Project baru berhasil dibuat');

        
    }

    
}