<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function category($category)
    {
        return view('products', ['category' => $category]);
    }
}
