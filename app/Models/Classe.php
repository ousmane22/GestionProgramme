<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $guarded = [];
    public function programmetech()
    {
        return $this->hasMany(ProgrammeTech::class);
    }
}
