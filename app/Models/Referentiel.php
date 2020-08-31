<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referentiel extends Model
{
    protected $guarded = [];
    public $timestamps = false;


   

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function demandeprogramme()
    {
        return $this->belongsToMany(DemandeProgramme::class, 'demande_referentiel','referentiel_id','demande_id');
    }

   
    
}
