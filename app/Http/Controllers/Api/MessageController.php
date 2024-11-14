<?php

namespace App\Http\Controllers;

use App\Models\Message; // Asegúrate de importar el modelo correcto
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Recupera todos los mensajes, aplicando los scopes incluidos y de ordenamiento
        $messages = Message::included()->sort()->get();

        return response()->json($messages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validación de los datos de entrada
        $request->validate([
            'mensaje' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'id_role' => 'required|exists:roles,id',
            'id_user_register' => 'required|exists:user_registers,id',
        ]);

        // Creación del nuevo mensaje
        $message = Message::create($request->all());

        return response()->json($message, 201); // Respuesta con código 201
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        // Recupera un mensaje específico, aplicando el scope de inclusión
        $message = Message::included()->findOrFail($id);

        return response()->json($message);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Message $message)
    {
        // Validación de los datos de entrada
        $request->validate([
            'mensaje' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'id_role' => 'required|exists:roles,id',
            'id_user_register' => 'required|exists:user_registers,id',
        ]);

        // Actualización del mensaje
        $message->update($request->all());

        return response()->json($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Message $message)
    {
        // Elimina el mensaje
        $message->delete();

        return response()->json(null, 204); // Respuesta vacía con código 204
    }
}
