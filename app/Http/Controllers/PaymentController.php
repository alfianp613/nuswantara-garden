<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Pencairan;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function indexdonate(Project $project)
    {
        return view('user.donasi',[
            "title" => "Donasi ".$project->title,
            "project" => $project
        ]);
    }

    public function donate(Project $project,Request $request)
    {
        $validated = $request-> validate([
            'nominal'=>'required'
        ]);

        $validated['userid'] = auth()->user()->id;
        $validated['projectid'] = $project->id;

        Payment::create($validated);

        return redirect('/project');
    }
    public function indexpencairan(Project $project)
    {
        return view('dashboard.projects.pencairan',[
            "title" => "Donasi ".$project->title,
            "project" => $project
        ]);
    }
    public function pencairan(Project $project,Request $request)
    {
        $validated = $request-> validate([
            'nominal'=>'required|integer|between:1,'.$project->dana_terkumpul
        ]);
        
        $validated['userid'] = auth()->user()->id;
        $validated['projectid'] = $project->id;

        Pencairan::create($validated);

        return redirect('/dashboard')->with("success","Dana berhasil dicairkan :D");
    }
}