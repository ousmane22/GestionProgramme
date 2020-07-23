<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Filiere;
use App\Modalite;
use App\Partenaire;
use App\Programme;
use App\Statu;
use App\Validation;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filiere = Filiere::all();
        $modalite = Modalite::all();
        $statut = Statu::all();
        $validation = Validation::all();
        $partenaire = Partenaire::all();
        $prog = Programme::all();
        return view('programme.show',compact('prog','filiere','modalite','statut','validation','partenaire'));
        
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

    public function showProg()
    {
      
      
        $fil = Filiere::all();
          
        $prog = Programme::paginate(8);
      return view('programme.programmeProf',compact('fil','prog'));
    }

    public function ShowDetails(Programme $prog)
    {
       $prog = Programme::all();
        return view('programme.programmeProf',compact('prog'));
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
