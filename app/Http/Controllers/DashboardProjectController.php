<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.projects.createproject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        return redirect('/dashboard')->with("success",'Project baru berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('dashboard.projects.show',[
            "project" => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.editproject',[
            "project" => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $rules = [
            'title' => 'required|max:255',
            'status_project' => 'required',
            'target_pendanaan' => 'required',
            'deskripsi_project' => 'required'
        ];

        if($request->slug != $project->slug){
            $rules['slug'] = 'required|unique:projects';
        }
        
        $validated = $request->validate($rules);
        
        $validated['petaniid'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->deskripsi_project),200);

        Project::where('id', $project->id)
                ->update($validated);

        return redirect('/dashboard')->with("success",'Project berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Project::destroy($project->id);
        return redirect('/dashboard')->with("success",'Project baru berhasil dihapus!');
    }
}