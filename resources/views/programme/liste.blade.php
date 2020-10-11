  @extends('layouts.backend')
  @section('content')

  <!-- Page Content -->
  <div class="content">
    <!-- Full Table -->
    <div class="block">
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      <h1 class="text-center" style="color:rgb(246, 120, 58);">Liste Des Programmes</h1>
      <div class="block-content">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-vcenter">
            <thead style="color:rgb(246, 120, 58);">
              <tr>
                <th class="">Nom</th>
                <th class="">Filiere</th>
                <th>Niveau</th>
                <th class="">Status</th>
                <th class="">Modalite</th>
                <th class="">Validation</th>
                <th class="">Partenaire</th>
                <th>Action</th>
                <th>Referentiel</th>
              </tr>
            </thead>

            <tbody>
              @foreach($programme as $programmes)
              <tr>
                <td>{{ $programmes->NOM }}</td>
                <td>{{ $programmes->filiere->NOM }}</td>

                <td>
                  @foreach($programmes->niveau as $niv)
                  {{ $niv->TYPE }},
                  @endforeach
                </td>

                <td>{{ $programmes->statu->TYPE }}</td>
                <td>{{ $programmes->modalite->TYPE }}</td>
                <td>{{ $programmes->validation->NOM }}</td>
                <td>{{ $programmes->partenaire->NOM }}</td>
                <td>
                  <a href="{{ route('edit.programme',$programmes->id) }}"><i class="fa fa-edit" style="color:rgb(246, 120, 58);"></i></a>
                  <a href="{{ route('delete.programme',$programmes->id) }}" onclick="return confirm('Vouler vous supprimez ce programme')"><i class="fa fa-trash-restore-alt" style="color:red;"></i></a>
                </td>
                <td>
                   <a href="{{ route('referentielProgramme',$programmes->id) }}" class="btn btn-dark">Ajouter Référentiel</i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            {{ $programme->links() }}
          </table>
        </div>
      </div>
    </div>
  </div>
  {{ $programme->links() }}
  <!-- END Full Table -->
  @endsection