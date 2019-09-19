<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    //protected $table ="peminjams";


public function buku()
    {
    	return $this->belongsTo('App\Buku', 'id_buku','id');
   
    }
}