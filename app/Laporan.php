<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
      'user_id', 'pngjuan_id'
    ];
}
