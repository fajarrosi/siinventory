<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    //
        	protected $fillable = [
		'name'
	];	
	        public function persetujuan()
    {
        return $this->hasMany('App\Persetujuan');
    }
}
