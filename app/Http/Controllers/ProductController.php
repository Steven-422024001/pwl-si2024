<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Product;

//import return type view
use Illuminate\View\View;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     *  index
     * 
     * @return void
     */
    public function index() : View
    {
        //get all products
        $product = new Product;
        $products = $product->get_product()->latest()->paginate(10);

        //render view with products
        return view('products.index', compact('products'));
    }
}
