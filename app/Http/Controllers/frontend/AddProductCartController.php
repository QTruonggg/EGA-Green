<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class AddProductCartController extends Controller
{
    public function addCartajax(Request $request) {

        $id = $request->input('id');
        $qty = $request->input('qty');

        $product = Products::FindOrFail($id);

        // dd($product);
        Cart::add([
            'id' => $product->id,
            'name'=>$product->name,
            'price'=>$product->salePrice,
            'qty'=> $qty,
            'weight' => $product-> status,
            'options' => ['images'=>$product['images'],
                        'code'=>$product['code'],
                        'discount'=>$product['percent_discount'],
                        'price'=>$product['salePrice'],
            ]
        ]);
        return back()->with(['success'=> 'Thêm vào giỏ hàng thành công','qty'=>Cart::count()]);
    }
    public function showCartList() {
        // SEOMeta::setTitle("Giỏ hàng");
        $productCart = Cart::content();
        return view('frontend.shopping_cart.index',compact('productCart'));
    } 
    public function deleteCart($rowId) {
        Cart::remove($rowId);
        return back()->with('success', 'Xóa sản phẩm thành công ' );
    }
}