<?php

namespace App\Http\Controllers;

use App\Constructeur;
use Illuminate\Http\Request;

class ConstructeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|unique:constructeurs'
        ]);

        Constructeur::create([
            'libelle' => $request->libelle
        ]);

        return redirect()->back()->with('message', 'Le constructeur a bien ete enregistree');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Constructeur  $constructeur
     * @return \Illuminate\Http\Response
     */
    public function show(Constructeur $constructeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Constructeur  $constructeur
     * @return \Illuminate\Http\Response
     */
    public function edit(Constructeur $constructeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Constructeur  $constructeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Constructeur $constructeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Constructeur  $constructeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constructeur $constructeur)
    {
        //
    }
}
