<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammeTech extends Model
{
    protected $guarded = [];
  public function classe()
    {
        return $this->belongsTo('Classe::class');
    }

    public function serie()
    {
        return $this->belongsTo('Serie::class');
    }

    public function matiere()
    {
        return $this->belongsTo('Matiere::class');
    }
}
