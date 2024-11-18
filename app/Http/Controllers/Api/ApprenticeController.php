<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()
    {
        $apprentice = Apprentice::included()->filter()->sort()->getOrPaginate();
        return response()->json($apprentice);
    }

    public function store(Request $request)
    {
        $request->validate([
            'program' => 'required|max:255',
            'ficha' => 'required|date',
            'id_Contract' => 'required|max:255',
            'id_trainer' => 'required|max:255',

        ]);

        $apprentice = Apprentice::create($request->all());
        return response()->json($apprentice, 201);
    }

    public function show($id)
    {
        $apprentice = Apprentice::included()->findOrFail($id);
        return response()->json($apprentice);
    }

    public function update(Request $request, Apprentice $apprentice)
    {
        $request->validate([
            'program' => 'required|max:255',
            'ficha' => 'required|date',
            'id_Contract' => 'required|max:255',
            'id_trainer' => 'required|max:255',

        ]);

        $apprentice->update($request->all());
        return response()->json($apprentice);
    }

    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        return response()->json(null, 204);
    }
}


