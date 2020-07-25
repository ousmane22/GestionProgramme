 
  @extends('inc.file')
  @section('content')

  

  
 <!-- Page Content -->

                
               
                   <div class="content content-boxed">
                    <div class="row row-deck py-4">
                  @foreach($fil_prog as $progs) 
                <!-- Course -->
                       <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="block block-rounded block-link-pop">
                                <div class="block-content block-content-full text-center bg-amethyst">
                                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                        <i class="si si-vector fa-2x text-white-75">{{ $progs->NOM }}</i>
                                    </div>
                                </div>
                             <a href="{{ route('show.description',$progs->description) }}" type="button" class="btn btn-info ml-4 mt-2">Voir description</a>
                        </div>
                        </div>
                        <!-- END Course -->
                       @endforeach         
                    </div>
                </div>
              
                
                <!-- END Page Content -->

                  

@stop