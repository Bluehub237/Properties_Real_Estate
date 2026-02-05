<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // validation et stockage de la réservation
        $validated = $request->validate([
            'property_id' => 'required|exists:properties,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'start_date' => 'required|date',
            'time' => 'required|integer|min:1',
            'message' => 'nullable|string',
        ]);

        $reservation = Reservation::create([
            'user_id' => Auth::id(), // si connecté, sinon null
            'property_id' => $validated['property_id'],
            'start_date' => $validated['start_date'],
            'time' => $validated['time'],
            'message' => $validated['message'] ?? null,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
        ]);
        // changement du statut de la propriété à "réservé"
        $property = Property::find($validated['property_id']);
        $property->status = 'reserved';
        $property->save();

        return redirect()->back()->with('success', 'Réservation enregistrée avec succès.');
    }
}
