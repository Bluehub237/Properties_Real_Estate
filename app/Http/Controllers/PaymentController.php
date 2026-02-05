<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Contrat $contrat)
    {
        // Récupérer les paiements avec les relations nécessaires
        $payments = Payment::with(['contrat.property', 'user'])
            ->orderBy('payment_date', 'desc')
            ->paginate(5);

        // Calculer les statistiques
        $currentMonth = now()->startOfMonth();
        $Montant_month = Payment::whereDate('payment_date', '>=', $currentMonth)->sum('amount');
        $pending = Payment::where('status', 'pending')->sum('amount');
        $retard = Payment::where('status', 'retard')->sum('amount');
        $totalAnnual = Payment::whereYear('payment_date', now()->year)->sum('amount');

        return view('admin.dashboard_payment', compact('payments', 'Montant_month', 'pending', 'retard', 'totalAnnual','contrat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Contrat $contrat, Request $request)
    {
        return view('payment', compact('contrat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Contrat $contrat)
    {
        $validated = $request->validate([
            'amount' => 'required|string', // le montant arrive formaté, on le nettoie ensuite
            'payment_method' => 'required|string',
            'phone' => 'required|string|max:9',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        // Nettoyer le montant pour enlever les espaces et le convertir en entier
        $amount = (int)str_replace([' ', ','], '', $validated['amount']);

        $payment = Payment::create([
            'contrat_id' => $contrat->id,
            'user_id' => $validated['user_id'],
            'amount' => $amount,
            'payment_method' => $validated['payment_method'],
            'phone' => $validated['phone'],
            'payment_date' => now(),
        ]);

        // Mettre à jour le statut du contrat si c'est le premier paiement
        if ($contrat->status === 'en_attente_signature' || $contrat->status === 'signe') {
            $contrat->update(['status' => 'actif']);
        }
        // Mettre a jour le statut de la propriete liee au contrat
        $contrat->property->update(['status' => 'rent']);

        return redirect()->route('house.wallet')->with('success', 'Paiement effectué avec succès.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment, User $user)
    {
        try {
            // Vérifier que l'utilisateur a la permission de supprimer ce paiement
            // Optionnel : vous pouvez ajouter une vérification d'autorisation
            if (!$user || !$user->can('delete', $payment)) {
                return redirect()->route('admin.payments')
                    ->with('error', 'Vous n\'avez pas la permission de supprimer ce paiement.');
            }

            $payment->delete();

            return redirect()->route('admin.payments')
                ->with('success', 'Paiement supprimé avec succès.');
        } catch (\Exception $e) {
            return redirect()->route('admin.payments')
                ->with('error', 'Erreur lors de la suppression du paiement.');
        }
    }
}
