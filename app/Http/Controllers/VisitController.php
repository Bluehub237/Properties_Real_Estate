<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class VisitController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $totalVisits = Visit::count();
        $upcomingVisits = Visit::where('status', 'pending')->count();
        $completedVisits = Visit::where('status', 'confirmed')->count();
        $canceledVisits = Visit::where('status', 'cancelled')->count();

            $visits = Visit::with('property', 'user')
                ->orderBy('created_at', 'desc')
                ->paginate(5);


        return view('admin.dashboard_visit', compact('visits', 'totalVisits', 'upcomingVisits', 'completedVisits', 'canceledVisits'));
    }
    public function store(Request $request, Property $property)
    {
        // Vérifier si l'utilisateur a déjà une visite pour cette propriété
        if (Visit::where('user_id', Auth::id())->where('property_id', $property->id)->exists() && Visit::where('visit_datetime', '>=', now())->exists()) {
            return redirect()->back()->with('error', 'Vous avez déjà réservé une visite pour cette propriété.');
        }

        $validated = $request->validate([
            'persons' => 'required|integer|min:1|max:3',
            'visit_datetime' => 'required|date|after:now',
            'status' => 'in:pending,confirmed,cancelled',
        ]);

        $visit = Visit::create([
            'user_id' => Auth::id(),
            'property_id' => $property->id,
            'persons' => $validated['persons'],
            'visit_datetime' => $validated['visit_datetime'],
            'status' => $validated['status'] ?? 'pending',
        ]);
        return redirect()->back()->with('success', 'Visite Enregistrée avec succès.');
    }
    public function destroy(Request $request, Visit $visit)
    {
        $request->validate([
            'visit_id' => 'required|exists:visits,id',
        ]);

        $visit = Visit::find($request->input('visit_id'));
        $visit->delete();

        return redirect()->back()->with('success', 'Visit deleted successfully.');
    }
    public function update(Request $request, Visit $visit)
    {
        $request->validate([
            'visit_id' => 'required|exists:visits,id',
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);
        // Mettre a jour le statut de la visite
        $visit = Visit::find($request->input('visit_id'));
        $visit->status = $request->input('status');
        $visit->save();

        return redirect()->back()->with('success', 'Visit updated successfully.');
    }
}
