<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Visit;
use Illuminate\Support\Facades\Auth;

class ImmoController extends Controller
{
    //
    public function index(Property $properties)
    {
        $favorites = Property::latest()->take(3)->get();
        $properties = Property::latest()->take(12)->get();
        return view('index',compact('properties','favorites'));
    }
    public function about()
    {
        return view('about-us');
    }
    public function property_list(Property $properties)
    {
        $properties = Property::all();
        $properties = Property::paginate(6);
        $total = Property::count();
        return view('property-list',compact('properties','total'));
    }
    public function visit(Visit $visit)
    {
        $propertyIds = Property::where('user_id', Auth::id())->pluck('id');
        //recuperer le nombre de visites planifiees dont la date est superieure a la date actuelle par l'utilisateur connecte
        if (Auth::user()->rule === 'admin') {
            $visits = Visit::all();
        }else if(Auth::user()->rule === 'bailleur'){
            $visits = Visit::whereIn('property_id', $propertyIds)->where('visit_datetime', '>', now())->orderBy('visit_datetime', 'desc')->get();
        }else{
            $visits = Auth::user()->visits;
        }

        return view('visit', compact('visits'));
    }
    public function rent()
    {
        return view('');
    }
    public function wallet()
    {
        return view('portefeuille-client');
    }
    public function profil()
    {
        return view('my-profile');
    }
    public function message()
    {
        return view('message');
    }
    public function blog_detail()
    {
        return view('blog-detail');
    }
    public function blog()
    {
        return view('blog');
    }
    public function blog_grid()
    {
        return view('blog-grid');
    }
    public function signIn()
    {
        return view('signIn');
    }
    public function signUp()
    {
        return view('signUp');
    }

}
