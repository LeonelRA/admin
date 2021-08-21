<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke(){

        return view('admin/home')->with([
            'categories' => Category::withCount('products')->get(),
            'discounts' => Discount::withCount('products')->orderByDesc('products_count')->limit(8)->get(),

        ]);
    }
}
