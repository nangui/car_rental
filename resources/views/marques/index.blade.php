@extends('layouts.app')

@section('content')
<div class="py-5" style="background-color: #4f5dec;">
    &nbsp;
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="p-3 bg-white shadow-sm">
                <h2 class="text-center mb-3">Liste des marques</h2>
                <div class="w-50">
                  @if($marques->count() > 0)
                    <table class="table-condensed w-100">
                      <thead>
                        <tr>
                          <th>#ID</th>
                          <th>Libelle</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($marques as $marque)
                            <tr>
                              <td>{{ $marque->id }}</td>
                              <td>{{ $marque->libelle }}</td>
                              <td class="d-flex" disabled>
                                <a href="#" class="btn btn-sm btn-primary mr-2">Voir</a>
                                <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  @else
                    <h5 class="text-center">Pas de marques</h5>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
