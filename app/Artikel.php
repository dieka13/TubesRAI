<?php

namespace TubesRAI;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
	public function kader()
	{
		return $this->belongsTo('App\User');
	}
}
