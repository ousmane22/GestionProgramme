<?php

namespace App\Http\Controllers;

use App\Models\Statu;
use App\Models\Filiere;
use App\Models\Modalite;
use App\Models\Programm;
use App\Models\Programme;
use App\Models\Partenaire;
use App\Models\Validation;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/home');
    }

    public function addProgramme()
    {
        $filiere = Filiere::all();
        $modalite = Modalite::all();
        $statut = Statu::all();
        $validation = Validation::all();
        $partenaire = Partenaire::all();
        $prog = Programme::all();
        return view('programme.add', compact('prog', 'filiere', 'modalite', 'statut', 'validation', 'partenaire'));
    
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
        $data  = $request->validate([
            'NOM' => 'required|string|unique:programmes',
            'description' => 'required',
            'filiere_id' => 'required',
            'statu_id' => 'required',
            'modalite_id' => 'required',
            'validation_id' => 'required',
            'partenaire_id' => 'required',
        ]);

        $programme =   Programme::create($data);
        $programme->save();
        Flashy::message('success', 'programme ajouté avec success');
        return redirect()->route('liste.programme');

    }

    public function ListProgramme()
    {
        $programme = Programme::paginate(9);
        return view('programme.liste',compact('programme'));
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
        $filiere = Filiere::all();
        $modalite = Modalite::all();
        $statut = Statu::all();
        $validation = Validation::all();
        $partenaire = Partenaire::all();
        $prog = Programme::all();

        $programme = Programme::findOrFail($id);
        return view('programme.edit',compact('programme','prog', 'filiere', 'modalite', 'statut', 'validation', 'partenaire'));
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
        $data  = $request->validate([
            'NOM' => 'required|string',
            'filiere_id' => 'required',
            'statu_id' => 'required',
            'modalite_id' => 'required',
            'validation_id' => 'required',
            'partenaire_id' => 'required',
        ]);

        $programme = Programme::findOrFail($id);
        $programme->update($data);
        Flashy::message('programme modifié avec success');
        return redirect()->route('liste.programme');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $programme = Programme::findOrFail($id);
        $programme->delete();
        return redirect()->route('liste.programme')->with('success', 'programme supprimmé avec success');

    }
}
