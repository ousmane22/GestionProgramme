  @extends('inc.file1')
  @section('content')

                <!-- Page Content -->
                <div class="content mt-7 mb-10">
                    
                    <!-- Full Table -->
                    <div class="block">
                    
                        <div class="block-content">
                            
                            <div class="table-responsive">
              
                                <table class="table table-bordered table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                           
                                            <th class="serie_show">SERIES</th>
                                            <th class="serie_show">MATIERES</th>
                                   
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                      @foreach($serie as  $series)
                                        <tr>
                                           
                                          <td class="serie_show"> {{ $series->nomSerie }}</td>
                                            
                                            <td class="class="serie_show"">
                                                <ul class="list-group">
                                                  @foreach($series->matieres as $mat)
                                                  <li class="serie_show list-group-item">{{ $mat->nomMatiere }}</li>
                                                  @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
                    <!-- END Full Table -->
@endsection

