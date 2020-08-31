<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $guarded = [];

    public function series()
    {
        return $this->belongsToMany(Serie::class);
    }
}
