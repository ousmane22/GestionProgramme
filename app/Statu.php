<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
   protected $guarded =[];

    public function programme()
    {
       return  $this->hasMany('Programme::class');
    }
}
