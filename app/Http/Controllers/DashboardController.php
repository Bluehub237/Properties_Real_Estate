<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Visit;
use App\Models\Payment;
use App\Models\User;


class DashboardController extends Controller
{
    public function index(Property $property, Visit $visit, Payment $payment, User $user)
    {

        // gestion du nombre de proprietes louees par le client
        // recupere les proprietes liees a l'utilisateur connecte
        //$properties = Auth::user()->properties;
        // $propertiesCount = $properties->count();
        //recuperer le nombre de visites planifiees dont la date est superieure a la date actuelle par l'utilisateur connecte
        // $visits = Auth::user()->visits;
        //$visitsCount = Visit::where('user_id', Auth::id())->where('visit_datetime', '>', now())->count();
        //recuperer chaque prix des proprietes dont user_id est egal a l'utilisateur connecte
        //$propertyprice = Property::select ('price')->where('user_id', Auth::id())->get();
        //$propertiesPrice = $propertyprice->sum('price');
        // recuperer les donnees des paiements lies aux proprietes de l'utilisateur connecte
        //$payments = Auth::user()->propertyPayments;

        // recuperer les donnees des paiements lies aux proprietes posseder par l'utilisateur connecte
        // $paymentData = Payment::where('')
        $user = Auth::user();

        if (Auth::user()->rule === 'admin') {

            $totalbailleurs = User::where('rule', 'bailleur')->count();
            $totalproperty = Property::count();
            $totallocataires = User::where('rule', 'locataire')->count();
            $totalvisites = Visit::where('visit_datetime', '>', now())->count();
            $totallocationactive = Property::where('status', 'rent')->count();
            $pendingPayments = Payment::where('status', 'pending')->count();

            return view('admin.page.index', compact('totalbailleurs', 'totalproperty', 'totallocataires', 'totalvisites', 'totallocationactive', 'pendingPayments'));
        } else if (Auth::user()->rule === 'bailleur') {

            // si l'utilisateur est un bailleur, retourner la vue du tableau de bord du bailleur avec les donnees appropriees
            //passer les proprietes, le nombre de proprietes, le nombre de visites et le total des prix des proprietes a la vue
            //le nombre de locataires qui occupent les proprietes du bailleur
            // $locatairesCount = Property::where('user_id', Auth::id())->where('status', 'rent')->count();
            $propertyIds = Property::where('user_id', Auth::id())->pluck('id');
            $properties = Property::where('user_id', Auth::id())->get();
            $propertiesCount = $properties->count();
            $visits = Visit::whereIn('property_id', $propertyIds)->where('visit_datetime', '>', now())->orderBy('visit_datetime', 'desc')->get();
            $visitsCount = $visits->count();
            $propertiesPrice = $user->properties->sum('price');
            $payments = Payment::wherehas('contrat.property', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })->orderBy('payment_date', 'desc')->get();
            $locatairesCount = Property::where('user_id', $user->id)->where('status', 'rent')->count();
            $rentedProperty = Property::where('user_id', $user->id)->where('status', 'rent');

            return view('bailleur.dashboard', compact('visits', 'payments', 'locatairesCount', 'properties', 'propertiesCount', 'visitsCount', 'propertiesPrice', 'rentedProperty'));
        } else {
            $visits = Auth::user()->visits;
            $visitsCount = Visit::where('user_id', Auth::id())->where('visit_datetime', '>', now())->count();
            $properties = Property::where('user_id', Auth::id())->get();
            $propertiesCount = $properties->count();
            $propertiesPrice = $user->properties->sum('price');
            $payments = Auth::user()->propertyPayments;

            return view('client.dashboard', compact('properties','visits', 'propertiesCount', 'visitsCount', 'propertiesPrice', 'payments'));
        }
    }
}
