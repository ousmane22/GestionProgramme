<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Filiere;
use App\Models\Modalite;
use App\Models\Niveau;
use App\Models\Partenaire;
use App\Models\Programme;
use App\Models\Statu;
use App\Models\Validation;
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
        
        return view('programme.show');
        
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
        $prog = Programme::orderBy('id', 'DESC')->paginate(8);
        return view('programme.programmeProf',compact('fil','prog'));
    }

    public function Showfil($id)
    {

        $fil_prog = Programme::where('filiere_id',$id)->get();
         $fil = Filiere::all();
        return view('programme.show',compact('fil_prog','fil'));
        
    }

    public function Showdescription($id)
    {
            $description = Programme::where('description',$id)->get();
            return view('programme.description',compact('description'));
        
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
