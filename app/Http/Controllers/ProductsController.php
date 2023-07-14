<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class ProductsController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
        
    }

    public function index(Request $request) {

        $search = $request->search;
        $findProduct = $this->product->getProductsSearchIndex(search1: $search ?? '');
        
        return view('pages.products.pagination', compact('findProduct'));
    }

    public function delete(Request $request) {
        
    }
}
