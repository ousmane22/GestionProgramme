<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Programme;
use App\Models\Referentiel;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Models\DemandeProgramme;
use App\Models\DemandeReferentiel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Models\DemandeprogrammeReferentiel;

class DProgrammeController extends Controller
{

    
    public function getidProgramme($id)
    {
        $referentiel = Referentiel::where('programme_id',$id)->get();

        $filiere = Filiere::all();
        $etablissement = Etablissement::all();
        $programme = Programme::findOrFail($id);    
        return view('utilisateur/acceuil', compact('programme','etablissement','filiere','referentiel'));
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'programme_id' => 'required',
            'etablissement_id' => 'required',
            'filiere_id' => 'required',
            'appui' => 'required',
            'RessourceNecessaire' => 'required',
            'motif' => 'required',
        ]);

        $dp = new DemandeProgramme($data);
        $dp->utilisateur_id =Auth::guard('utilisateur')->user()->id;
        $dp->save();

        $id_demande = $dp->id;

        
        $longueur = count($request->referentiel_id);

        for($i=0; $i<$longueur; $i++) 
        {
            $referentiel =  new DemandeReferentiel();
            $referentiel->demande_id = (int)$id_demande;
            $referentiel->referentiel_id = (int)$request->referentiel_id[$i];
            $referentiel->save();
        }
        return redirect()->route('programme')->with('success', 'Demande envoyé avec success');
    }

    public function UtilisateurProgramme()
    {
   
        // $utilisateur_id = Utilisateur::with('DProgramme')
        // ->where('id', Auth::guard('utilisateur')->user()->id)
        //     ->orderBy('id', 'DESC')->paginate(5);

        // $demandeprogramme = DemandeProgramme::with('referentiel')->get();

        $utilisateurProgramme = DemandeProgramme::with('utilisateur')
        ->with('referentiel')
       ->get();
      

        return view('utilisateur.MesProgrammes',compact('utilisateurProgramme'));
    }



    public function ifDemandeIsValid($file)
    {
        /* $ref =DemandeProgramme::with('referentiel')
        ->where('id',$id)
        ->get();

            foreach($ref as $reference)
            {
                foreach($reference->referentiel as $references)
                {
                    $filename = $references->File;
                    $path = public_path('referentiel\\'.$filename);     
                        header('content-type:application/pdf');
                        echo file_get_contents($path);
                
                }
           
        } */

        $path = public_path('referentiel\\' . $file);
        header('content-type:application/pdf');
        echo file_get_contents($path);
        
        return view('utilisateur.OpenReferentiel',compact('ref'));
    
    }

   
}
