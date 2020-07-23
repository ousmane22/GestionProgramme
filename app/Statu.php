<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
   protected $guarded =[];

    public function programme()
    {
        $this->hasMany('Programme::class');
    }
}
