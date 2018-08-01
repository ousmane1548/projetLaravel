<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\etudiant;

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
     * @return \Illuminate\Http\Response
     */
     /* cette fonction permet d'afficher tout le contenu de la table etudiants*/
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('home', compact('etudiants'));
    }
}
