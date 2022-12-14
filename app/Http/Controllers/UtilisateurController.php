<?php

namespace App\Http\Controllers;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $utilisateurs = Utilisateur::all(); //permet de recuperer les donnees dans la base 
        return View('utilisateurs.index', compact('utilisateurs')); // compact c'est pour afficher la valeur recuperer 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View("utilisateur.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'poste' => 'required',
            'email' => 'required',
            'mot_de_pass' => 'required',
            'confirmation_mot_de_pass' => 'required',
            'telephone' => 'required',
        ]);
          Utilisateur::create($validatedData);
    
        return redirect('/utilisateurs')->with('success', 'Utilisateur créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
