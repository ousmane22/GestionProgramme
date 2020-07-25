<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
  protected $guarded =[];

    public function programme()
    {
       return $this->hasMany('Programme::class');
    }
}
