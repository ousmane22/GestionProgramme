<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $guarded = [];
    public function programmetech()
    {
        return $this->hasMany('ProgrammeTech::class');
    }
}
