@extends('layouts.template')

@section('content')
<div class="container mb-10 mt-4 ">
 <form action="{{ route('storeRef') }}" method="post" enctype="multipart/form-data" class="dropzone">
 @csrf
  <div class="from-group">
   <label for="">Réferentiel</label>
   <input type="file" name="NOM" class="form-control">
  </div>

  <div class="from-group mt-3">
   <label for="" class="">Programme</label>
   <select name="programme_id" id="" class="form-control">
    <option value="">choisir le programme</option>
    @foreach($programme as $programmes)
    <option value="{{ $programmes->id }}">{{ $programmes->NOM }}</option>
    @endforeach
   </select>
  </div>

  <div class="from-group mt-2">
   <button type="submit" class="btn btn-success">Enregistrer</button>
  </div>

 </form>
</div>
@endsection