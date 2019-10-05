<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable =[
        'price' , 'quantity'  
    ];
    public function orders(){
       return  $this -> hasMany(Order::class);
    }

    public function products(){
        return  $this -> hasMany(Product::class);
     }
}
