<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function products(){
        return $this->hasMany(\App\Models\Product::class);
    }

    public function getDiscountsAttribute(){

        //Funcion para obtener el mayor porcentaje de descuento que posee la categoria

        $discounts = [0];

        foreach($this->products as $product){

            if ($product->discount_id !== null &&
                !in_array($product->discount->discount, $discounts)) {
                
                    array_push($discounts, $product->discount->discount);

            }
        }

        return max($discounts);

    }

}
