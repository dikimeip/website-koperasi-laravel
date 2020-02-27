<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    protected $table = "tabungan";
    protected $fillable = ['customer_id','jumlah','tanggal','keterangan','admin'];

    public function customer()
    {
    	return $this->belongsTo('App\Customers') ;
    }
}
