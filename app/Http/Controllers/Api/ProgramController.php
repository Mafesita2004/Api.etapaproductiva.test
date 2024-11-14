<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::included()->filter()->sort()->get();
        return response()->json($programs);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $program= Program::create($request->all());

        return response()->json($program, 201);
    }

    public function show($id)
    {
        $program= Program::included()->findOrFail($id);
        return response()->json($program);
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $program->update($request->all());

        return response()->json($program);
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return response()->json(null, 204);
    }
}
