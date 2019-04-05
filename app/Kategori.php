<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $guarded=[];

    public function Produk(){
    	return $this->hasMany(Produk::class);
    }
}
