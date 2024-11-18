<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        $trainer = Trainer::included()->filter()->sort()->getOrPaginate();
        return response()->json($trainer);
    }

    public function store(Request $request)
    {
        $request->validate([
            'number_of_monitoring_hours' => 'required|max:255',
            'month' => 'required|date',
            'number_of_trainees_assigned' => 'required|max:255',

        ]);

        $trainer = Trainer::create($request->all());
        return response()->json($trainer, 201);
    }

    public function show($id)
    {
        $trainer = Trainer::included()->findOrFail($id);
        return response()->json($trainer);
    }

    public function update(Request $request, Trainer $trainer)
    {
        $request->validate([
            'number_of_monitoring_hours' => 'required|max:255',
            'month' => 'required|date',
            'number_of_trainees_assigned' => 'required|max:255',
        ]);

        $trainer->update($request->all());
        return response()->json($trainer);
    }

    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return response()->json(null, 204);
    }
}
