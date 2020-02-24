<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KepalaStaf extends Model
{
    protected $table = "kepala_staf";
	protected $fillable = ['nama','username','email','password','foto'];
}
