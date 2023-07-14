<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {

        $findProduct = Product::all();
        
        return view('pages.products.pagination', compact('findProduct'));
    }
}
