@extends('admin.layouts.master')

@section('content')
<h4 class="main-title">Liste des demandes d'adhésions</h4>

<div class="users-table table-wrapper">
    <table class="posts-table  table-striped table-hover">
      <thead>
        <tr class="users-table-info local-green text-white local" style="background-color: #105510!important;">
          <th class="px-3">Nom & Prénoms</th>
          <th class="px-3">Author</th>
          <th class="px-3">Status</th>
          <th class="px-3">Date</th>
          <th class="px-3">Action</th>
        </tr>
      </thead>
      <tbody>

        @if (count($adhs)>0)
        @foreach ($adhs as $adh)  
        <tr class="my-s3">
            <td>Jenny Wilson</td>
            <td>
                <div class="pages-table-img">
                Jenny Wilson
                </div>
            </td>
            <td><span class="badge-pending">En attente</span></td>
            <td>{{date('d/m/Y')}}</td>
            <td>
                <span class="btn btn-sm btn-warning">Réjetter</span>
                <span class="btn btn-sm btn-success">Valider</span>
            </td>
        </tr>
        @endforeach
        @else
            <tr class="text-center">
                <td colspan="5">
                    Aucun démande pour l'instant
                </td>
            </tr>
        @endif

      </tbody>
    </table>
  </div>
@endsection