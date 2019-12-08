<?php

namespace App\Http\Controllers;

use App\Carosserie;
use Illuminate\Http\Request;

class CarosserieController extends Controller
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
            'libelle' => 'required|unique:carosseries'
        ]);

        Carosserie::create([
            'libelle' => $request->libelle
        ]);

        return redirect()->back()->with('message', 'Le type de carosserie a bien ete enregistree');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carosserie  $carosserie
     * @return \Illuminate\Http\Response
     */
    public function show(Carosserie $carosserie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carosserie  $carosserie
     * @return \Illuminate\Http\Response
     */
    public function edit(Carosserie $carosserie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carosserie  $carosserie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carosserie $carosserie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carosserie  $carosserie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carosserie $carosserie)
    {
        //
    }
}
