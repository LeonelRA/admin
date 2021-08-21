<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'excerpt',
        'description',
        'price',
        'stock',
        'image',
        'status'
    ];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function category(){
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function discount(){
        return $this->belongsTo(\App\Models\Discount::class);
    }


    public function getDiscountPriceAttribute(){

        //Haciendo los calculos para el precio del descuento

        if (!empty($this->discount)) {

            if ($this->discount->type == 'percentage') {
                $discount = ($this->price * $this->discount->discount) / 100;

                return round($this->price - $discount, 2);

            }else {

                return round($this->price - $this->discount->discount, 2);

            }

        }
    }

    public function getImageAttribute($image){
        return 'img/products/'.$image;
    }


}
