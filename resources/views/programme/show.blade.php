 @extends('layouts.template')
 @section('content')

 <!-- Page Content -->
 <div class="content content-boxed">
   <div class="row row-deck py-4">
     @foreach($fil_prog as $progs)
     <!-- Course -->
     <div class="col-md-6 col-lg-4 col-xl-3" title="Voir description">
       <a class="block block-rounded block-link-pop" title="Voir description" href="{{ route('show.description',$progs->description) }}">
         <div class="block-content block-content-full text-center" style="background-color:rgb(246, 120, 58);">
           <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
             <i class="fab  fa-2x text-white-75"></i>
           </div>
           <div class="font-size-sm text-white pb-6">
             <P class="" style="font-size: 15px;">{{ $progs->NOM }}</P>
           </div>
         </div>
         <div class="block-content block-content-full">
           <h5 class="mb-1">
             Niveau: @foreach($progs->programm as $p)
             {{$p->niveau->TYPE}}
             @endforeach
             <hr style="background-color: green;">
             Validation:{{$progs->validation->NOM}}
             <hr style="background-color: green;">
             Status:{{$progs->statu->TYPE}}
             <hr style="background-color: green;">
             Partenaire:{{$progs->partenaire->NOM}}
           </h5>
         </div>
       </a>
     </div>
     <!-- END Course -->
     @endforeach
   </div>
 </div>



 @endsection