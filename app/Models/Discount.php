<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillabe = [
        'type',
        'discount'
    ];

    public function products(){
        return $this->hasMany(\App\Models\Product::class);
    }

}
