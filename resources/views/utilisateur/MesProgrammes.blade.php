@extends('layouts.template')
@section('content')


<!-- Hero -->
<div class="bg-body-light">
 <div class="content content-full">
  <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
   <h1 class="flex-sm-fill h3 my-2 text-center" style="color:rgb(246, 120, 58);">
    Mes Programmes <span class="badge badge-info"></span>
   </h1>
  </div>
 </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">

 <!-- Full Table -->
 <div class="block">

  <div class="block-content">

   <div class="table-responsive">
    <table class="table table-bordered table-striped table-vcenter">
     <thead>
      <tr>

       <th>Programme</th>
       <th>Filiere</th>
       <th>Etablissement</th>
       <th>Appuis</th>
       <th>Ressource</th>
       <th>Motif</th>
       <th class="">etat</th>
       <th class="">referentiel</th>
       <th>Réferentiel</th>
      </tr>
     </thead>

     <tbody>
      @foreach($utilisateurProgramme as $progra)
      <tr>
       <td class="font-w600 font-size-sm">
        <P style="color:  #020031;">{{ $progra->programme->NOM }}</P>
       </td>
       <td class=" font-w600 font-size-sm">
        <p style="color:  #020031;">{{ $progra->filiere->NOM }}</p>
       </td>
       <td class="font-w600 font-size-sm">
        <p style="color:  #020031;">{{ $progra->etablissement->NOM_ETA }}</p>
       </td>
       <td class="font-w600 font-size-sm">
        <p style="color:  #020031;">{{ $progra->appui}}</p>
       </td>

       <td class="font-w600 font-size-sm">
        <p style="color:  #020031;">{{ $progra->RessourceNecessaire }}</p>
       </td>

       <td class="font-w600 font-size-sm">
        <p style="color:  #020031;">{{ $progra->motif}}</p>
       </td>


       <td class="font-w600 font-size-sm">
        <button class="text-white btn" style="background-color:rgb(246, 120, 58); border-radius:4px">{{ $progra->etat}}</button>
       </td>

       @foreach($progra->referentiel as $referentiels)
       <td class="font-w600 font-size-sm">
        <p style="color:  #020031;">{{ $referentiels->NOM}}</p>

       </td>

       <td>
        @if($progra->etat == 'validé')
        <a href="{{ route('getReferentiel',$referentiels->File) }}" class="btn btn-success">Télécharger</a>
        @else
        <button class="btn btn-danger" disabled>Verrouiller</button>
        @endif
       </td>
       @endforeach
      </tr>
      @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </div>
</div>

@endsection