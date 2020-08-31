<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $guarded = [];

    public function matieres()
    {
        return $this->belongsToMany(Matiere::class);
    }
}
