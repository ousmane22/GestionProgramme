@extends('layouts.backend')
@section('content')


<h1 class="text-center" style="color:rgb(246, 120, 58);">Détails de la Demande </h1>
@foreach($utilisateur as $progra)



<div class="text-center">

 <h5>
  Demandeur : {{ $progra->utilisateur->type }}
 </h5>
 <h5>
  @if( $progra->utilisateur->type == "chef Etablissement")
  Etablissement :

  {{ $progra->etablissement->NOM_ETA }}
  @endif

 </h5>
 <h5>

  @if( $progra->utilisateur->type == "partenaire")
  Partenaire :
  @endif
  @if( $progra->utilisateur->type == "partenaire")
  {{ $progra->partenaire->NOM }}
  @endif

 </h5>

 <h5>
  Niveau : @foreach($progra->niveau as $niv)
  <p style="color:  #020031;">{{ $niv->TYPE }}</p>
  @endforeach
 </h5>

 <H5>
  Motivation :
  <p>{{ $progra->motivation }}</p>
 </H5>
</div>
@endforeach
@endsection