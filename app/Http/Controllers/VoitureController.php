<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class VoitureController extends Controller
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
        return view('cars.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:100',
                'price' => 'required',
                'year' => 'required',
                "mileage" => "required",
                "color" => "required",
                "cylinder" => "required",
                "number_of_horses" => 'required|numeric',
                "custom_clearance" => "required",
                "chassis_number" => "required",
                "liter" => "required|numeric",
                "modele_id" => "required",
                "carburant_id" => "required",
                "constructeur_id" => "required",
                "transmission_id" => "required",
                "carosserie_id" => "required",
                "image" => "required|image|mimes:jpeg,jpg,png"
            ]
        );

        dd($request);

        DB::transaction(function () {

            $annonce = Annonce::create([
                'title' => $request->title,
                'description' => ($request->description) ? $request->description : 'Pas de description',
                'price' => $request->price,
                'compte_id' => Auth::user()->account->id
            ]);

            if ($request->hasFile('image')) {
                // $path = $request->photo->store('image');
                $file = Storage::putFile('images', $request->file('image'));
            }

            Voiture::create([
                'mileage' => $request->input('mileage'),
                'color' => $request->input('color'),
                'cylinder' => $request->input('cylinder'),
                'number_of_horses' => $request->input('number_of_horses'),
                'custom_clearance' => $request->input('custom_clearance'),
                'chassis_number' => $request->input('chassis_number'),
                'liter' => $request->input('liter'),
                'modele_id' => $request->input('modele_id'),
                'carburant_id' => $request->input('carburant_id'),
                'constructeur_id' => $reauest->input('constructeur_id'),
                'transmission_id' => $request->input('transmission_id'),
                'carosserie_id' => $request->input('carosserie_id'),
                'image' => $file,
            ]);
        });
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Voiture $voiture
     * @return \Illuminate\Http\Response
     */
    public function show(Voiture $voiture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function edit(Voiture $voiture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voiture $voiture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voiture $voiture)
    {
        //
    }
}
