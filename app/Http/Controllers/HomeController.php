<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
use App\Carburant;
use App\Carosserie;
use App\Compte;
use App\Constructeur;
use App\Marque;
use App\Modele;
use App\Transmission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with('count_marques', Marque::all()->count())
            ->with('count_modeles', Modele::all()->count())
            ->with('count_annonces', Annonce::all()->count())
            ->with('count_transmissions', Transmission::all()->count())
            ->with('count_carosseries', Carosserie::all()->count())
            ->with('count_carburants', Carburant::all()->count())
            ->with('count_comptes', Compte::all()->count())
            ->with('count_constructeurs', Constructeur::all()->count());
    }
}
