<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::all();
        $properties = Property::paginate(5);
        $total = Property::count();
        $pending = Property::where('status', 'pending')->count();
        $rent = Property::where('status', 'rent')->count();

        return view('admin.dashboard_property', compact('properties', 'total', 'pending', 'rent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->rule === 'locataire') {
            return redirect()->route('house.abonnement')->with('error', 'Vous n\'avez pas la permission d\'ajouter une propriété.Abonnez-vous en tant que propriétaire.');
        } else {
            return view('add-property');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyRequest $request)
    {
        $data = $request->validated();

        // Stocker la vidéo
        if ($request->hasFile('video')) {
            $data['video'] = $request->file('video')->store(config('videos.path'), 'public');
        }

        // Traiter les photos
        if ($request->hasFile('photos')) {
            $photos = [];
            foreach ($request->file('photos') as $photo) {
                $photos[] = $photo->store(config('images.path'), 'public');
            }
            $data['photos'] = json_encode($photos);
        }

        //
        $amenities = $request->input('amenities', []);
        if (!empty($amenities)) {
            $data['amenities'] = json_encode($amenities);
        } else {
            $data['amenities'] = json_encode([]);
        }

        $data['user_id'] = Auth::id();

        // Crée le modèle (Eloquent)
        $property = Property::create($data);

        return redirect()->route('property.create')
            ->with('success', 'Propriété ajoutée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        
        return view('property-details-v1', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view('property_edit', compact('property'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyRequest $request, Property $property)
    {
       // $data = $request->validated();
       // $property->update($data);

       /* modification du statut de la propriete */
        $property->update(['status' => 'confirmed']);
        return redirect()->route('property.index')
            ->with('success', 'Propriété mise à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('property.index')
            ->with('success', 'Propriété supprimée avec succès!');
    }
}
