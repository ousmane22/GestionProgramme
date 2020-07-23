 
  @extends('inc.file')
  @section('content')

  <div class="mt-5 col-md-8 mb-3">
    <select class="browser-default custom-select">
         <option selected>Open this select menu</option>
         @foreach($fil as $fils)
            <option value="">{{ $fils->NOM }}</option>
         @endforeach 
    </select>
  </div>


  
 <!-- Page Content -->

                
               
                   <div class="content content-boxed">
                    <div class="row row-deck py-4">
                  @foreach($prog as $progs) 
                <!-- Course -->
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <a class="block block-rounded block-link-pop">
                                <div class="block-content block-content-full text-center bg-amethyst">
                                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                        <i class="si si-vector fa-2x text-white-75"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                   <button class="btn btn-primary">{{ $progs->NOM }}</button>
                                   <P> {{ $progs->description }}</P>
                                   
                                </div>
                            </a>
                        </div>
                        <!-- END Course -->
                       @endforeach         
                    </div>
                </div>
                {{ $prog->links() }}
                
                <!-- END Page Content -->




@stop