@extends('layouts.app')

@section('content')
<div class="py-5" style="background-color: #4f5dec;">
   &nbsp;
</div>
<div class="container mt-n5">
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
            <div class="animated fadeInUp" id="card-container">
                <div class="card rounded-0 bg-white">
                    <div class="card-header bg-white border-0">
                        <h6>Annonces <span class="badge badge-danger float-right">
                            {{$count_annonces ?? ''}}
                        </span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            </div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('addCar') }}">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <a class="btn btn-sm btn-outline-primary" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 bg-white">
                    <div class="card-header bg-white border-0">
                        <h6>Marques <span class="badge badge-primary float-right">
                            {{$count_marques ?? ''}}    
                        </span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            </div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="#" data-toggle="modal" data-target="#marqueModal">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('listMarques') }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 bg-white">
                    <div class="card-header bg-white border-0">
                        <h6>Modeles <span class="badge badge-danger float-right">
                            {{$count_modeles ?? ''}}    
                        </span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                            </div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="#" data-toggle="modal" data-target="#modeleModal">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <a class="btn btn-sm btn-outline-primary" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(Auth::user()->account->is_admin)
                <div class="card rounded-0 bg-white">
                    <div class="card-header bg-white border-0">
                        <h6>Comptes <span class="badge badge-danger float-right">
                            {{$count_comptes ?? ''}}    
                        </span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div></div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="#" data-toggle="modal" data-target="#accountModal">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <a class="btn btn-sm btn-outline-primary" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="card rounded-0 bg-white">
                    <div class="card-header bg-white border-0">
                        <h6>Carosseries <span class="badge badge-danger float-right">
                            {{$count_carosseries ?? ''}}    
                        </span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div></div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="#" data-toggle="modal" data-target="#carosserieModal">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <a class="btn btn-sm btn-outline-primary" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 bg-white">
                    <div class="card-header bg-white border-0">
                        <h6>Transmission <span class="badge badge-danger float-right">
                            {{$count_transmissions ?? ''}}    
                        </span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div></div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="#" data-toggle="modal" data-target="#transmissionModal">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <a class="btn btn-sm btn-outline-primary" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 bg-white">
                    <div class="card-header bg-white border-0">
                        <h6>Carburant <span class="badge badge-danger float-right">
                            {{$count_carburants ?? ''}}    
                        </span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div></div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="#" data-toggle="modal" data-target="#carburantModal">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <a class="btn btn-sm btn-outline-primary" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 bg-white">
                    <div class="card-header bg-white border-0">
                        <h6>Constructeur <span class="badge badge-danger float-right">
                            {{$count_constructeurs ?? ''}}    
                        </span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div></div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="#" data-toggle="modal" data-target="#constructeurModal">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <a class="btn btn-sm btn-outline-primary" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(Auth::user()->account->is_admin)
        <div class="col-md-12">
            <div class="mt-3 p-3 bg-white shadow-sm">
                <h2 class="text-center mb-3">Parametres du site</h2>
                <div>
                    <form class="w-100" method="POST" action="{{ url('settings') }}">
                        @csrf
                        <div class="grid-3">
                            <div class="form-group">
                                <label for="email">E-mail du site</label>
                                <input name="email" id="email"
                                    class="form-control" value="{{ $setting->email }}">
                            </div>
                            <div class="form-group">
                                <label for="">Numero de telephone</label>
                                <input name="site_phone" id="site_phone"
                                    type="text" class="form-control" value="{{ $setting->site_phone }}">
                            </div>
                            <div class="form-group">
                                <label for="site_name">Nom du site</label>
                                <input name="site_name" id="site_name"
                                    type="text" class="form-control" value="{{ $setting->site_name }}">
                            </div>
                            <div class="form-group">
                                <label for="site_slogan">Slogan du site</label>
                                <input name="site_slogan" id="site_slogan"
                                    type="text" class="form-control" value="{{ $setting->site_slogan }}">
                            </div>
                            <div class="form-group">
                                <label for="site_copyright">Copyright du site</label>
                                <input name="site_copyright" id="site_copyright"
                                    type="text" class="form-control" value="{{ $setting->site_copyright }}">
                            </div>
                            <div class="form-group">
                                <label for="site_facebook">Compte Facebook</label>
                                <input name="site_facebook" id="site_facebook"
                                    type="text" class="form-control" value="{{ $setting->site_facebook }}">
                            </div>
                            <div class="form-group">
                                <label for="site_twitter">Compte twitter</label>
                                <input name="site_twitter" id="site_twitter"
                                    type="text" class="form-control" value="{{ $setting->site_twitter }}">
                            </div>
                            <div class="form-group">
                                <label for="site_linkedin">Compte linkedin</label>
                                <input name="site_linkedin" id="site_linkedin"
                                    type="text" class="form-control" value="{{ $setting->site_linkedin }}">
                            </div>
                            <div class="form-group">
                                <label for="site_latitude">Latitude du local</label>
                                <input name="site_latitude" id="site_latitude"
                                    type="text" class="form-control" value="{{ $setting->site_latitude }}">
                            </div>
                            <div class="form-group">
                                <label for="site_longitude">Longitude du local</label>
                                <input name="site_longitude" id="site_longitude"
                                    type="text" class="form-control" value="{{ $setting->site_longitude }}">
                            </div>
                            <div class="form-group">
                                <label for="">Adresse du site</label>
                                <input class="form-control" name="site_address"
                                    id="site_address" type="text" value="{{ $setting->site_address }}">
                            </div>
                            <div class="form-group">
                                <label for="btn-save" style="opacity: 0;">Bouton d'enregistrement</label>
                                <button type="submit"
                                        class="btn btn-block btn-primary"
                                        style="background-color: #4f5dec; border-color: #4f5dec;">Sauvegarder les infos</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @else
        <div class="col-md-12">
            <div class="grid-3"></div>
        </div>
        @endif
    </div>
</div>
@include('modals.modele')
@include('modals.marque')
@include('modals.carburant')
@include('modals.carosserie')
@include('modals.transmission')
@include('modals.constructeur')
@endsection
