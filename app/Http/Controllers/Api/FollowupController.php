<?php

namespace App\Http\Controllers;

use App\Models\Followup;
use Illuminate\Http\Request;

class FollowupController extends Controller
{
    

    public function index()
    {
        $followups = Followup::included()->filter()->sort()->get();
        return response()->json($followups);
    }

    public function store(Request $request)
    {
        $request->validate([
            'progress_evaluation' => 'required|max:255',
            'activities_carriedout' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'practical_stage' => 'required|max:255',
            'log' => 'required|integer',
            'agreement_report' => 'required|date', // Corrigiendo el nombre del campo
        ]);

        $followup = Followup::create($request->all());
        return response()->json($followup, 201);
    }

    public function show($id)
    {
        $followup = Followup::included()->findOrFail($id);
        return response()->json($followup);
    }

    public function update(Request $request, Followup $followup)
    {
        $request->validate([
            'progress_evaluation' => 'required|max:255',
            'activities_carriedout' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'practical_stage' => 'required|max:255',
            'log' => 'required|integer',
            'agreement_report' => 'required|date', // Corrigiendo el nombre del campo
        ]);

        $followup->update($request->all());
        return response()->json($followup);
    }

    public function destroy(Followup $followup)
    {
        $followup->delete();
        return response()->json(null, 204);
    }
}


