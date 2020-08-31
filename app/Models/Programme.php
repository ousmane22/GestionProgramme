<?php

namespace App\Models;

use App\Models\DemandeProgramme;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function modalite()
    {
        return $this->belongsTo(Modalite::class);
    }

    public function partenaire()
    {
        return $this->belongsTo(Partenaire::class);
    }

    public function statu()
    {
        return $this->belongsTo(Statu::class);
    }

    public function validation()
    {
        return $this->belongsTo(Validation::class);
    }


    public function referentiel()
    {
        return $this->hasMany(Referentiel::class);
    }
    
    

    public function programm()
    {
        return $this->hasMany(Programm::class);
    }

    public function demandeprogramme()
    {
        return $this->hasMany(DemandeProgramme::class);
    }
}
