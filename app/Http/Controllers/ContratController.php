<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\Property;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContratController extends Controller
{
    // Méthode pour créer un contrat à partir d'une propriété
    public function createContrat(Property $property)
    {
        $tenant = Auth::user();
        $owner = $property->user;
        $contrat = Contrat::create([
            'reference' => 'CT-' . strtoupper(uniqid()),
            'property_id' => $property->id,
            'tenant_id' => $tenant->id,
            'owner_id' => $owner->id,
            'start_date' => now(),
            'end_date' => now()->addMonths($property->months),
            'amount' => $property->price,
            'deposit' => $property->deposit,
            'terms' => $this->getDefaultTerms(),
            'status' => 'en_attente_signature',
            'owner_signature' => $this->getOwnerSignature(),
            'signed_at' => null,
            'pdf_path' => null,
        ]);

        return view('contrat.signature', compact('property', 'tenant', 'owner', 'contrat'));
    }
    public function update(Request $request, Contrat $contrat, Property $property, User $user)
    {
        $contrat->load(['property', 'tenant', 'owner']);
        $tenant = Auth::user();
        $tenant = $contrat->tenant;
        $owner = $contrat->owner;
        $property = $contrat->property;

        // Logique de validation du contrat (signatures, etc.)
        if (Auth::id() !== $contrat->tenant_id) {
            abort(403, 'Vous n\'êtes pas autorisé à signer ce contrat.');
        }

        $request->validate([
            'signature' => 'required|string',
        ]);
        $base64Signature = $request->input('signature');
        // Enregistrer la signature
        $contrat->update([
            'tenant_signature' => $base64Signature,
            'status' => 'signe',
            'signed_at' => Carbon::now(),
        ]);


        // Après validation, générer le PDF du contrat

        $pdf = Pdf::loadView('contrat.pdf', compact('property', 'tenant', 'owner', 'contrat'));
        $pdfPath = 'contrats/contrat_' . $contrat->reference . '.pdf';
        Storage::disk('public')->put($pdfPath, $pdf->output());

        // Mettre à jour le chemin du PDF dans la base de données
        $contrat->pdf_path = $pdfPath;
        $contrat->save();

        return redirect()->route('payments.create', ['contrat' => $contrat->id])->with('success','Contrat signé et PDF generer. Veuillez proceder au paiement');
    }

    // Obtenir les termes par défaut du contrat
    public function getDefaultTerms()
    {
        return "Les présentes conditions générales régissent le contrat de location entre le propriétaire et le locataire. Le locataire s'engage à payer le loyer mensuel à temps, à entretenir la propriété en bon état et à respecter les règles de la copropriété. Le propriétaire s'engage à fournir un logement sûr et habitable. Toute violation des termes peut entraîner la résiliation du contrat.";
    }

    // Obtenir la signature du propriétaire
    private function getOwnerSignature()
    {
        // Signature par défaut ou stockée dans le profil
        return 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==';
    }
}
