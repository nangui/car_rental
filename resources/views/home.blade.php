@extends('layouts.app')

@section('content')
<div class="py-5" style="background-color: #4f5dec;">
   &nbsp;
</div>
<div class="container mt-n5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="animated fadeInUp" id="card-container">
                <div class="card rounded-0 bg-white">
                    <div class="card-header bg-white border-0">
                        <h6>Voitures <span class="badge badge-danger float-right">64</span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <i class="fas fa-car fa-2x"></i>
                                <h4>400</h4>
                            </div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="">
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
                        <h6>Marques <span class="badge badge-primary float-right">28</span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <i class="fas fa-car fa-2x"></i>
                                <h4>400</h4>
                            </div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="">
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
                        <h6>Modeles <span class="badge badge-danger float-right">51</span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <i class="fas fa-car fa-2x"></i>
                                <h4>400</h4>
                            </div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="">
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
                        <h6>Comptes <span class="badge badge-danger float-right">21</span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <i class="fas fa-car fa-2x"></i>
                                <h4>400</h4>
                            </div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="">
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
                        <h6>Annonces <span class="badge badge-danger float-right">31</span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <i class="fas fa-car fa-2x"></i>
                                <h4>400</h4>
                            </div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="">
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
                        <h6>Modeles <span class="badge badge-danger float-right">51</span></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <i class="fas fa-car fa-2x"></i>
                                <h4>400</h4>
                            </div>
                            <div class="d-flex align-items-end">
                                <div class="btn-group float-right">
                                    <a class="btn btn-sm btn-outline-primary" href="">
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
@endsection
