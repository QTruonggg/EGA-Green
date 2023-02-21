<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProducts;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProductList() {
        $product = Products::all();
        $productLenght = count($product);
        return view('backend.product.list',['breadcrumb'=>'Danh sách sản phẩm'],compact('product','productLenght'));
    }

    public function getCreateProduct() {
        // $category_id = Product::where('category_id','=', '1')->where('status','=','0')->get();
        $categorys_id = CategoryProducts::where('parent_id' ,'=' , '0')->with('childs')->get();
        return view('backend.product.create',['breadcrumb'=>'Thêm sản phẩm'],compact('categorys_id'));
    }
    public function addProduct( Request $request) {
        $data = $request->all();
        // dd($data);
        $validate = $request->validate([
            'name'=>'required|max:255',
            'code'=>'required',
            'qty'=>'required',
            'oldPrice'=>'required|numeric',
            'percent_discount'=>'numeric',
            'salePrice'=>'required',
            'images'=>'required',
            'seo_description'=>'max:2000',
        ], [
            'name.required'=>'Bạn chưa nhập tên sản phẩm!',
            'code.required'=>'Bạn chưa nhập mã sản phẩm!',
            'qty.required'=>'Bạn chưa nhập số lượng!',
            'oldPrice.required'=>'Bạn chưa nhập giá gốc sản phẩm!',
            'oldPrice.numeric'=>'Vui lòng kiểm tra lại giá gốc!',
            'images.required'=>'Vui lòng nhập ảnh!',
            'percent_discount.numeric'=>'Vui lòng kiểm tra lại phần trăm giảm giá!',
        ]);
        Products::create($data);
        // dd($data);
        return back()->with('success', 'Thêm thành công sản phẩm !');
    }

    public function getUpdateProduct($id) {
        $product = Products::find($id);
        $categorys_id = CategoryProducts::where('parent_id' ,'=' , '0')->with('childs')->get();
        return view('backend.product.update',['breadcrumb'=>'Chỉnh sửa sản phẩm'], compact('product','categorys_id'));
    }

    public function updateProduct($id, Request $request) {
        $data_update = $request->all();
        // dd($data);
        $product_update = Products::findOrFail($id);
        $product_update -> update($data_update);
        return redirect(route('admin.showProductList'))->with('success', 'Chỉnh sửa thành công'); 
    }

    public function deleteProduct($id) {
        $product_delete = Products::find($id) ;
        $product_delete->delete();
        return back()->with('mess', 'Xóa thành công sản phẩm');        
    }
    
}
