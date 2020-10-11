@extends('layouts.backend1')
@section('content')


<div>
  @if(session('success'))
  <div class="alert alert-success col-md-6 offset-3">
    {{ session('success') }}
  </div>
  @endif

  <h4 class="text-center pt-2" style="color:rgb(246, 120, 58);">Remplisser les informations de votre etablissement</h4>
  <form action="{{ route('renseiger.etablissement') }}" method="post" class="col-md-10 offset-1 mt-4 mb-8">
    @csrf
    <div class="form-group">
      <label for="etablissement_id">Choisir mon Etablissement</label>
      <select class="form-control" id="etablissement_id" name="etablissement_id">
        <option disabled>Choisir mon Etablissement</option>
        @foreach($etablissement as $eta)
        <option value="{{ $eta->id }}">{{ $eta->NOM_ETA }}</option>
        @endforeach
      </select>
      @error('etablissement_id')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

    <div class="form-group mt-3">
      <label for="niveau_id">Niveau</label>
      <select class="form-control" id="niveau_id" name="niveau_id">
        <option disabled>Choisir niveau</option>
        @foreach($niveau as $niveaux)
        <option value="{{ $niveaux->id }}">{{ $niveaux->TYPE }}</option>
        @endforeach
      </select>
      @error('niveau_id')<p class="text-danger">{{ $message }}@enderror</p>
    </div>


    <div class="form-group">
      <label for="programme_id">Programme</label>
      <select class="form-control" id="programme_id" name="programme_id">
        <option disabled>Choisir programme</option>
        @foreach($programme as $pro)
        <option value="{{ $pro->id }}">{{ $pro->NOM }}</option>
        @endforeach
      </select>
      @error('programme_id')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

    <div class="row mt-3">
      <div class="col">
        <label for="anne_aca">Année Programme</label>
        <input type="date" class="form-control" name="anne_aca">
        @error('anne_aca')<p class="text-danger">{{ $message }}@enderror</p>
      </div>

      <div class="col">
        <label for="anne_niv">Année Académique</label>
        <input type="number" class="form-control" name="anne_niv">
        @error('anne_niv')<p class="text-danger">{{ $message }}@enderror</p>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label for="Effectif_garcon">Effectifs Garçons</label>
        <input type="number" class="form-control" name="Effectif_garcon">
        @error('Effectif_garcon')<p class="text-danger">{{ $message }}@enderror</p>
      </div>
      <div class="col">
        <label for="Effectif_fille">Effectifs filles</label>
        <input type="number" class="form-control" name="Effectif_fille">
        @error('Effectif_fille')<p class="text-danger">{{ $message }}@enderror</p>
      </div>
    </div>

    <div class="mt-3">
      <button class="btn text-white" style="background-color:rgb(246, 120, 58);">Enregistrer</button>
    </div>
</div>
</form>
@stop