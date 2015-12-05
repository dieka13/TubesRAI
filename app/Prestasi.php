<?php

namespace TubesRAI;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    public function kader()
    {
    	return $this->belongsTo('App\User');
    }
}
