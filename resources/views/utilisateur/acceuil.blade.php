@extends('layouts.template')

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<style type="text/css">
  .dropdown-toggle {
    height: 40px;
    width: 400px !important;
  }
</style>


<h1 class="text-center mt-4">DIVISION DE LA PEDAGOGIE</h1>
<h4 class="text-center">Formulaire de demande de ressources pédagogiques et didactiques de formation professionnelle et technique</h4>
<div class="col-md-6 col-lg-12 mb-10">
  <form action="{{ route('store.DP') }}" method="post">
    @csrf
    <div class="row">
      <div class="col">
        <label for="">Etablissement</label>
        <select name="etablissement_id" id="etablissement_id" class="form-control">
          <option value="" disabled>Etablissement</option>
          @foreach($etablissement as $et)
          <option value="{{ $et->id }}">{{ $et->NOM_ETA }}</option>
          @endforeach
          @error('etablissement_id')<p class="text-danger">{{ $message }}@enderror</p>
        </select>
      </div>
      <div class="col">
        <label for="">Statut</label>
        <select id="" name="statut" class="form-control">
          <option value="prive">Privé</option>
          <option selected="" value="public">Public</option>
          <option value="mefpa">Agrée par le MEFPA</option>
          <option value="programme">Projet programme</option>
          <option value="autre">Autre</option>
        </select>
        @error('statut')<p class="text-danger">{{ $message }}@enderror</p>
      </div>
    </div>

    <div class="row pt-4">
      <div class="col">
        <label for="">Domaine ou secteur d’activité</label>
        <select name="programme_id" id="" class="form-control">
          <option value="" disabled>Programme</option>
          <option value="{{ $programme->id }}">{{ $programme->NOM }}</option>
        </select>
        @error('programme_id')<p class="text-danger">{{ $message }}@enderror</p>
      </div>

      <div class="col">
        <label for="">Filiére</label>
        <select name="filiere_id" id="" class="form-control">
          <option value="" disabled>Filiere</option>
          <option value="{{ $programme->filiere->id }}">{{ $programme->filiere->NOM }}</option>
        </select>
        @error('filiere_id')<p class="text-danger">{{ $message }}@enderror</p>
      </div>
    </div>


    <div class="form-group">
      <label for="">Motifs de la demande</label>
      <select name="motif" id="" class="form-control">
        <option value="adaptation">Adaptation</option>
        <option value="revision">Révision</option>
        <option value="mefpa">Implantation</option>
        <option value="existante">Mise à jour d’une ressource existante</option>
        <option value="autre">Autre</option>
      </select>
      @error('motif')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

  
    <div class="form-group">
      <label for="">Réferentiel</label>
      <select name="referentiel_id[]" id="" class="form-control" multiple>
        <option value="" disabled>Réferentiel</option>
        @foreach($referentiel as $referentiels)
        <option value="{{ $referentiels->id }}">{{ $referentiels->NOM }}</option>
        @endforeach
      </select>
      @error('filiere_id')<p class="text-danger">{{ $message }}@enderror</p>
    </div>


    <h4>Disposez-vous des ressources nécessaires?
      <input type="radio" name="RessourceNecessaire" value="oui" id="oui"><label for="">OUI</label>
      <input type="radio" name="RessourceNecessaire" id="non" value="non"><label for="">NON</label>
      @error('RessourceNecessaire')<p class="text-danger">{{ $message }}@enderror</p>
    </h4>

    <h4>
      Souhaitez-vous un appui?
      <input type="radio" name="appui" id="oui" value="oui"><label for="">OUI</label>
      <input type="radio" name="appui" id="non" value="non"><label for="">NON</label>
      @error('appui')<p class="text-danger">{{ $message }}@enderror</p>
    </h4>

    <button type="submit" class="btn btn-success col-md-12">Enregistrer</button>
  </form>
</div>
@endsection


<script type="text/javascript">
  $(document).ready(function() {
    $('select').selectpicker();
  });
</script>