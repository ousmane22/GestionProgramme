<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $guarded = [];

    public function programm()
    {
        return $this->hasMany(Programm::class);
    }

    // public function etablissement()
    // {
    //     return $this->belongsToMany(Etablissement::class);
    // }

}

