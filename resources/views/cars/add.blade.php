@extends('layouts.app')

@section('content')
<div class="py-5" style="background-color: #4f5dec;">
    &nbsp;
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="w-100">
                @if ($errors->any())
                    <div class="py-2 alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                        </ul>
                    </div>
                @else
                    @if (session('message'))
                        <div class="py-2 pl-2 alert alert-success">{{ session('message') }}</div>
                    @endif
                @endif
            </div>
            <div class="mt-3 p-3 bg-white shadow-sm">
                <h2 class="text-center mb-3">Publier une annonce</h2>
                <div>
                    <form class="w-100" enctype="multipart/form-data" method="POST" action="{{ route('saveCar') }}">
                        @csrf
                        <fieldset class="border p-3 pl-2">
                            <legend class="px-2" style="width: 30%;">Informations de l'annonce</legend>
                            <div class="form-group w-25">
                                <label for="title-annonce">Titre</label>
                                <input class="form-control" name="title" id="title-annonce" placeholder="Entrer le titre">
                            </div>
                            <div class="form-group w-50">
                                <label for="title-annonce">Description</label>
                                <textarea cols="5" name="description" rows="4" class="form-control" placeholder="Entrer la description"></textarea>
                            </div>
                            <div class="form-group w-25">
                                <label for="price-annonce">Prix (F CFA)</label>
                                <input class="form-control" name="price" id="price-annonce" placeholder="Entrer le prix">
                            </div>
                        </fieldset>
                        <fieldset class="border p-3 pl-2 mt-3">
                            <legend class="px-2" style="width: 30%;">Informations de la voiture</legend>
                            <div class="grid-3">
                                <div class="form-group">
                                    <label for="year">Annee de mis en production </label>
                                    <input class="form-control" type="text" name="year" id="year" placeholder="Entrer l'annee">
                                </div>
                                <div class="form-group">
                                    <label for="mileage">Kilometrage</label>
                                    <input class="form-control" type="number" min="0" name="mileage" id="year" placeholder="Kilometrage">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input class="form-control-file" type="file" min="0" name="image" id="image" placeholder="Image">
                                </div>
                                <div class="form-group">
                                    <label for="color">Couleur de carosserie</label>
                                    <input class="form-control" type="color" name="color" id="color" placeholder="Entrer la couleur">
                                </div>
                                <div class="form-group">
                                    <label for="cylinder">Cylindre</label>
                                    <input class="form-control" type="number" name="cylinder" id="cylinder" placeholder="Cylindre">
                                </div>
                                <div class="form-group">
                                    <label for="custom_clearance">Nombre de chevaux</label>
                                    <input class="form-control" type="number" name="number_of_horses" id="number_of_horses" placeholder="Nombre de chevaux">
                                </div>
                                <div class="form-group">
                                    <label for="custom_clearance">Dedouanement</label>
                                    <input class="form-control" type="date" name="custom_clearance" id="custom_clearance" placeholder="Dedouanement">
                                </div>
                                <div class="form-group">
                                    <label for="custom_clearance">Numero du chassis</label>
                                    <input class="form-control" type="text" name="chassis_number" id="chassis_number" placeholder="Dedouanement">
                                </div>
                                <div class="form-group">
                                    <label for="custom_clearance">Capacite du reservoire (Litre)</label>
                                    <input class="form-control" type="number" min="0" name="liter" id="liter" placeholder="Entrer la capacite du reservoir">
                                </div>
                                <div class="form-group">
                                    <label for="custom_clearance">Choix du modele</label>
                                    <select class="custom-select pr-4 rounded" name="modele_id" id="modele_id">
                                        <option value="">-- Selectionner --</option>
                                        @foreach ($modeles as $item)
                                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="carburant_id">Choisir le type de carburant</label>
                                    <select class="custom-select pr-4 rounded" name="carburant_id" id="carburant_id">
                                        <option value="">-- Selectionner --</option>
                                        @foreach ($carburants as $item)
                                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="constructeur_id">Choix du constructeur</label>
                                    <select class="custom-select pr-4 rounded" name="constructeur_id" id="constructeur_id">
                                        <option value="">-- Selectionner --</option>
                                        @foreach ($constructeurs as $item)
                                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="transmission_id">Choix de la transmission</label>
                                    <select class="custom-select pr-4 rounded" name="transmission_id" id="transmission_id">
                                        <option value="">-- Selectionner --</option>
                                        @foreach ($transmissions as $item)
                                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="carosserie_id">Type de Carosserie</label>
                                    <select class="custom-select pr-4 rounded" name="carosserie_id" id="carosserie_id">
                                        <option value="">-- Selectionner --</option>
                                        @foreach ($carosseries as $item)
                                            <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <div class="text-right mt-3">
                            <button class="btn btn-primary" type="submit" style="background-color: #4f5dec; border-color: #4f5dec;">Valider la creation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
