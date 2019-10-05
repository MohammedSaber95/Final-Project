<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'name','address','city','zipCode','phoneNumber','cart_id','subTotal'
    ];

    public function cart(){
        return $this->belongsTo(Cart::class);
    }

}
