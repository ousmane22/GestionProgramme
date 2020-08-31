<?php

namespace App\Models;

use CreateDemandeprogrammeReferentielTable;
use Illuminate\Database\Eloquent\Model;

class DemandeProgramme extends Model
{
    protected $guarded = [];
    protected $table = 'demandes';
    


  

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function referentiel()
    {
        return $this->belongsToMany(Referentiel::class,'demande_referentiel','demande_id','referentiel_id');
    }


    

}
