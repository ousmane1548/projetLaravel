<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantController extends Controller
{    /* cette fonction permet de se connecter*/
     public function __construct()
    {
        $this->middleware('auth');
    }
    /*cette fonction permet d'ajouter un etudiant*/
    public function add(Request $request)
    {
        Etudiant::create($request->all());
        return back()->with('status', trans('etudiant.msgenregistrementok'));
    }

    /*cette fonction permet de selectionner les etudiant a partir de leur id*/
    public function show($id)
    {
        $etudiant = Etudiant::findorfail($id);

        $titre = Etudiant::findorfail($id);

        return view('etudiant.show',compact('etudiant','titre'));
    }
    /*cette fonction permet d'editer un etudiant*/
    public function edit($id)
    {
        $etudiant = Etudiant::findorfail($id);

        $titre = trans('etudiant.edition');
        return view('etudiant.edit',compact('etudiant'));
    }

    /*cette fonction permet de mettre a jour les informations de l'etudiant*/
    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findorfail($id);
        $etudiant->nom= $request->input('nom');
        $etudiant->prenom= $request->input('prenom');
        $etudiant->save();
        return back()->with('status', trans('etudiant.msgmiseajourok'));

    }
    /*cette fonction permet de supprimer un etudiant en connaissant son id */
    public function destroy($id)
    {
        Etudiant::destroy($id);

        return Redirect('home')->with('status', trans('etudiant.msgsupprimersok'));
    }

}
