<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function create()
    {
        return view('abonnement');
    }
    public function update(Request $request, User $user)
    {
        // Logique pour traiter l'abonnement de l'utilisateur
        // Par exemple, mettre à jour le rôle de l'utilisateur dans la base de données
        
        $user->update(['rule' => 'bailleur',]);

        return redirect()->route('property.create')->with('success', 'Abonnement réussi! Vous êtes maintenant propriétaire.');
    }
}
