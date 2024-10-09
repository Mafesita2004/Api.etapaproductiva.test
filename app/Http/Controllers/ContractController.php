<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();
        return response()->json($contracts);
    }

    public function store(Request $request)
    {
        // Validación de los datos de entrada
        $request->validate([
            'codigo' => 'required|integer',
            'tipo' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'id_company' => 'required|exists:companies,id',
        ]);

        $contract = Contract::create($request->all());
        return response()->json($contract, 201);
    }

    public function show($id)
    {
        $contract = Contract::findOrFail($id);
        return response()->json($contract);
    }

    public function update(Request $request, Contract $contract)
    {
        $request->validate([
            'codigo' => 'required|integer',
            'tipo' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'id_company' => 'required|exists:companies,id',
        ]);

        $contract->update($request->all());
        return response()->json($contract);
    }

    public function destroy(Contract $contract)
    {
        $contract->delete();
        return response()->json(null, 204);
    }
}
