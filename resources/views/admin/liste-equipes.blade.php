@extends('admin.layouts.master')

@section('content')
<div class="d-flex justify-content-between">
    <h4 class="main-title">L'ÉQUIPE PSPSCI</h4>
    <button class="btn btn-sm local-green" style="height: 35px;" data-bs-toggle="modal" data-bs-target="#addMembreModal">Ajouter un membre</button>
</div>

  
  <!-- Modal -->
  <div class="modal fade" id="addMembreModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addMembreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="{{route('admin.teams.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="addMembreModalLabel">Formulaire d'ajout d'un membre</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #d9dfe9!important;">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="" class="form-label"> Titre : </label>
                            </div>
                            <div class="form-group  col-sm-8">
                                <input type="text" name="titre" id="" class="form-control" placeholder="Dr.; Pr....">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="" class="form-label"> Nom : <span class="text-danger">*</span></label>
                            </div>
                            <div class="form-group  col-sm-8">
                                <input type="text" name="nom" id="" class="form-control" placeholder="nom">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="" class="form-label"> Prénoms : <span class="text-danger">*</span></label>
                            </div>
                            <div class="form-group  col-sm-8">
                                <input type="text" name="prenoms" id="" class="form-control" placeholder="Prenoms">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="" class="form-label"> Fonction : <span class="text-danger">*</span></label>
                            </div>
                            <div class="form-group  col-sm-8">
                                <input type="text" name="fonction" id="" class="form-control" placeholder="Président, Sécretaire, Adjoint, ...etc">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="" class="form-label"> Photo : <span class="text-danger">*</span></label>
                            </div>
                            <div class="form-group  col-sm-8">
                                <input type="file" name="photo" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="" class="form-label"> Facebook : </label>
                            </div>
                            <div class="form-group  col-sm-8">
                                <input type="text" name="facebook" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="" class="form-label"> Instagram : </label>
                            </div>
                            <div class="form-group  col-sm-8">
                                <input type="text" name="instagram" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="" class="form-label"> LinkedIn : </label>
                            </div>
                            <div class="form-group  col-sm-8">
                                <input type="text" name="linkedin" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="" class="form-label"> x (Twitter) : </label>
                            </div>
                            <div class="form-group  col-sm-8">
                                <input type="text" name="x" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="" class="form-label"> Skype : </label>
                            </div>
                            <div class="form-group  col-sm-8">
                                <input type="text" name="skype" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="" class="pt-3 pb-2">Description</label>
                    <div class="">
                        <textarea id="description" name="description" id="" class="form-control" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-outline-success">Sauvegarder</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<div class="users-table table-wrapper">
    <table class="posts-table  table-striped table-hover">
      <thead>
        <tr class="users-table-info bg-success text-white" style="background-color: #105510!important;">
          <th class="px-3">Nom & Prénoms</th>
          <th class="">Fonction</th>
          <th class="text-cesnter">Status</th>
          <th class="px-3">Date</th>
          <th class="px-3">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($teams as $team)
        <tr class="">
            <td><strong>{{ucwords($team->full_name)}}</strong></td>
            <td>
                <div class="pages-table-img">
                    {{ucfirst($team->fonction)}}
                </div>
            </td>
            <td class="text-cesnter">
                @if ($team->statut)
                <span class="badge bg-success">Actif</span>
                @else 
                <span class="badge bg-danger">Inactif</span>
                @endif
            </td>
            <td>{{date('d/m/Y', strtotime($team->created_at))}}</td>
            <td>
                <span class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#updateMembreModal">Modifier</span>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

@section('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection