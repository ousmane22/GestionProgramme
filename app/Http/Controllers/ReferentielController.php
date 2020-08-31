<?php

namespace App\Http\Controllers;

use App\Models\DemandeProgramme;
use App\Models\Programme;
use App\Models\Referentiel;
use Illuminate\Http\Request;
use League\CommonMark\Reference\Reference;

class ReferentielController extends Controller
{
   public function RefenctielProgramme()
   {
        $programme = Programme::all();        
        return view('refe',compact('programme'));
   }

   public function StoreReferentileWithProgramme(Request $request)
   {

        $data = $request->validate([
            'NOM' => 'required|unique:referentiels',
            'programme_id' => 'required',

        ]);

        $referentiel = new Referentiel();
        $referentiel->programme_id = request('programme_id');

        if ($request->hasFile('NOM')) {
            $file = $request->file('NOM');
            $name = $file->getClientOriginalName();
            $name = substr($name, 0, strrpos($name, "."));
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            //$filename = $name . '.' . $extension;
            $file->move(public_path('referentiel'), $filename);
            $referentiel->File = $filename;
            $referentiel->NOM = $name;
        }

        $referentiel->save();
        
   }

  
}

