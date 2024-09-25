<?php

namespace App\Http\Controllers;

use App\Models\notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::included()->filter()->sort()->getOrPaginate();
        return response()->json($notifications);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha_envio' => 'required|date',
            'contenido' => 'required|string|max:255',
        ]);

        $notification = Notification::create($request->all());
        return response()->json($notification, 201);
    }

    public function show($id)
    {
        $notification = Notification::included()->findOrFail($id);
        return response()->json($notification);
    }

    public function update(Request $request, Notification $notification)
    {
        $request->validate([
            'fecha_envio' => 'required|date',
            'contenido' => 'required|string|max:255',
        ]);

        $notification->update($request->all());
        return response()->json($notification);
    }

    public function destroy(Notification $notification)
    {
        $notification->delete();
        return response()->json(null, 204);
    }
}
