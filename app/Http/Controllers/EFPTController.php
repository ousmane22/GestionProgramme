<?php

namespace App\Http\Controllers;

use App\Models\FaireP;
use App\Models\Departement;
use App\Models\Etablissement;
use App\Models\Filiere;
use App\Models\Niveau;
use App\Models\Programm;
use App\Models\Programme;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EFPTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etablissement = Etablissement::get();

        $efGarcon = DB::table('programms')
            ->sum('Effectif_garcon');


        $efFille = DB::table('programms')
            ->sum('Effectif_fille');

        return view('EFPT.show',compact('etablissement', 'efGarcon', 'efFille'));
    }

    public function Showdepartement($id)
    {
        $reg = Departement::where('region_id', $id)
            ->withCount('etablissement')
            ->get();

        $region_dep  = Region::findOrFail($id)
            ->where('id', $id)
            ->get();

       
        return view('EFPT.departement', compact('reg', 'region_dep'));
    }


    public function DepartWithEtabli($id)
    {
        $depart = Etablissement::where('departement_id',$id)
        ->get();

        $dep_et  = Departement::findOrFail($id)
        ->where('id',$id)
        ->get();
        return view('EFPT.departInfo', compact('depart', 'dep_et'));
    }
    

    public function ProparEtablissement($id)
    {      
        $eta_pro = Programm::where('etablissement_id',$id)->get();  
        return view('EFPT.showProg',compact('eta_pro'));
    }



    public function ProgrammeInfo($id)
    {

        $programme = Programm::where('programme_id',$id)
        ->get();

        $pro = Programme::findOrFail($id)
        ->where('id',$id)
        ->get();

        //statistique departemental
        $dep_eta_sFille = DB::table('programms')
        ->join('etablissements','etablissements.id','=','programms.etablissement_id')
        ->where('programme_id', $id)
        ->sum('Effectif_fille');
  
        $dep_eta_sGarcon = DB::table('programms')
        ->join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
        ->where('programme_id', $id)
        ->sum('Effectif_garcon');

        //statistique regional
        $sFille = DB::table('programms')
        ->join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
        ->join('departements', 'etablissements.departement_id', '=', 'departements.id')
        ->where('programme_id',$id)
        ->sum('Effectif_fille');


        $sGarcon = DB::table('programms')
        ->join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
        ->join('departements', 'etablissements.departement_id', '=', 'departements.id')
        ->where('programme_id', $id)
        ->sum('Effectif_garcon');

        
        return view('EFPT.infoPro', compact('programme','pro', 'dep_eta_sGarcon', 'dep_eta_sFille',
            'sGarcon','sFille'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

/**select `departements`.`ID_DEPT`, `departements`.`NOM_DEPT`, `Count(etablissements`.`NOM_ETA)` as `Nombre` from `departements` inner join `etablissements` on `departements`.`ID_DEPT` = */
