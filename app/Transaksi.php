<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $guarded=[];

    // public function customer()
    // {
    // 	return $this->belongsTo(Customer::class,'id_customer');
    // }

     public function produk()
    {
    	return $this->belongsTo(Produk::class,'id_produk');
    }

    public function customer()
    {
    	return $this->belongsTo(Customer::class,'id_customer');
    }
}
