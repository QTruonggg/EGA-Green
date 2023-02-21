<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class AddProductCartController extends Controller
{
    public function addCartajax($id,Request $request) {
        $product = Products::FindOrFail($id);
        Cart::add([
            'id' => $product->id,
            'name'=>$request['name'],
            'price'=>(int)($request['salePrice']),
            'qty'=> (int)$request['quantity'],
            'weight' => $product-> status,
            'options' => ['images'=>$request['images'],
                        'code'=>$request['code'],
                        'discount'=>$request['percent_discount'],
                        'oldPrice'=>(int)($request['oldPrice']),
            ]
        ]);
        return response()->json(['success'=> 'Thêm vào giỏ hàng thành công','quantity'=>Cart::count()]);
    }
    public function showCartList() {
        // SEOMeta::setTitle("Giỏ hàng");
        return view('frontend.shopping_cart.index');
    } 
    public function deleteCart($rowId) {
        Cart::remove($rowId);
        return back()->with('success', 'Xóa sản phẩm thành công ' );
    }
}