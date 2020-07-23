<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $guarded = [];

    public function filiere()
    {
        return $this->belongsTo('Filiere::class');
    }

    public function modalite()
    {
        return $this->belongsTo('Modalite::class');
    }

    public function partenaire()
    {
        return $this->belongsTo('Partenaire::class');
    }

    public function statut()
    {
        return $this->belongsTo('Statu::class');
    }

    public function validation()
    {
        return $this->belongsTo('Validation::class');
    }
}
