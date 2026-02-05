<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\FormContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }
    public function store(ContactRequest $request)
    {
        // Utiliser les données validées pour l'enregistrement
        $data = $request->validated();

        // Enregistrer le contact en base de données
        Contact::create($data);

        // Envoyer l'email de notification
       // Mail::to('administrateur@chezmoi.com')->send(new FormContactMail($request->except('_token')));

        return redirect()->route('contact.index')->with('success', 'Votre message a été envoyé avec succès !');
    }

}
