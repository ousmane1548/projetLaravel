<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request)
    {
        Etudiant::create($request->all());
        return back()->with('status', trans('etudiant.msgenregistrementok'));
    }


    public function show($id)
    {
        $etudiant = Etudiant::findorfail($id);

        $titre = Etudiant::findorfail($id);

        return view('etudiant.show',compact('etudiant','titre'));
    }

    public function edit($id)
    {
        $etudiant = Etudiant::findorfail($id);

        $titre = trans('etudiant.edition');
        return view('etudiant.edit',compact('etudiant'));
    }


    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findorfail($id);
        $etudiant->nom= $request->input('nom');
        $etudiant->prenom= $request->input('prenom');
        $etudiant->save();
        return back()->with('status', trans('etudiant.msgmiseajourok'));

    }

    public function destroy($id)
    {
        Etudiant::destroy($id);
        $etudiants = Etudiant::all();
        return view('home')->with('etudiants', $etudiants)->with('status', trans('etudiant.msgsupprimerok'));
    }

}
