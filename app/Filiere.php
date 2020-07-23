<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $guarded =[];

    public function programmes()
    {
        return $this->hasMany('Programme::class');
    }
}
