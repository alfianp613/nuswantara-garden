<?php

namespace App\Http\Controllers;

use App\Models\Payment;
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
}