<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Matiere;
use App\ProgrammeTech;
use App\Serie;
use Illuminate\Http\Request;

class PROTECHController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serie = Serie::all();
        $classe = Classe::all();
        $matiere = Matiere::all();
        $pt = ProgrammeTech::distinct()->select('idClasse')->where('idSerie','=' ,1)->groupBy('idClasse')->get();
        dd($pt);
        return view('programme.Technique',compact('serie','classe','matiere','pt'));
       
    }

    // public function showClasse($id)
    // {
    //     $classe = Classe::where('idSerie',$id)->get();
    //     return json_encode($classe);
    // }

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
