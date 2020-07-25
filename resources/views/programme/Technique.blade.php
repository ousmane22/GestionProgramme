@extends('layouts.template')


  @section('content')
    
     <div>
        @foreach( $serie as $series )
          <a class="btn btn-info btn-link">
            Série {{ $series->nomSerie }}
          </a>
        @endforeach
     </div>

     <div>
         @foreach( $classe as $classes )
          <a href="" class="btn btn-info">
             {{ $classes->nomClasse }}
          </a>
          @endforeach
     </div>

     <!-- <div>
         @foreach( $matiere as $matieres )
          <a class="btn btn-info">
           {{ $matieres->nomMatiere }}
          </a>
          @endforeach
     </div> -->

     <div>
         @foreach( $pt as $pts )
          <a href="" class="btn btn-info" value=" {{ $pts->idMatiere }}">
            {{ $pts->nomMatiere }}
          </a>
          @endforeach
     </div>


  @endsection