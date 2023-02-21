<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Products;

class HomeInterfaceController extends Controller
{
    public function showAllProduct() {
        $product = Products::all();
        $product_like = Products::orderBy('created_at', 'DESC')->take(5)->get();
        return view('frontend.product.index',compact('product', 'product_like'));
    }

    public function showDetailsProduct($id,$slug) {
        $product = Products::FindOrFail($id);
        $products = Products::orderBy('created_at', 'DESC')->get();
        return view('frontend.product_details.index', compact('product','products'));
    }

}
