<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name','address','city','zipCode','phoneNumber',''
    ];

    public function products(){
        return $this->belongsToMany(Product::class);
    }

}
