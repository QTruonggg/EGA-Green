<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category_products;
use App\Models\Subcategory_products;
use Illuminate\Http\Request;

class Subcategory_productsController extends Controller
{
    public function showSubcategory_products()
    {
        $subcategories_products = Subcategory_products::all();
        $dataLenght = count($subcategories_products);
        $category_id = Category_products::where('parent_id' ,'=' , 0) ->get();
        return view('backend.subcategory_products.list', compact('subcategories_products','category_id' , 'dataLenght'), ['breadcrumb' => 'Danh sách danh mục']);
    }

    public function getSubcategory_products() {
        // $category_id = Product::where('category_id','=', '1')->where('status','=','0')->get();
        $category_id = Category_products::where('parent_id' ,'=' , 0) ->get();
        return view('backend.subcategory_products.create',['breadcrumb'=>'Thêm sản phẩm'],compact('category_id'));
    }

    public function addSubcategory_products( Request $request) {
        $data = $request->all();
        $validate = $request->validate([
            'name'=>'required|max:255',
            'seo_title'     => 'required|max:255',
            'seo_keyword' => 'required|max:255',
            'seo_description'        => 'required|max:255',
        ], [
            'name.required'=>'Bạn chưa nhập tên sản phẩm',
            'seo_title.required' => 'Chưa nhập tiêu đề tìm kiếm',
            'seo_keyword.required' => 'Chưa nhập từ khóa tìm kiếm',
            'seo_description.required' => 'Chưa nhập miêu tả tìm kiếm',
        ]);
        Subcategory_products::create($data);
        dd($data);
        return back()->with('success', 'Thêm thành công danh mục!');
    }

    public function getUpdateSubcategory($id) {
        $subcategory_products = Subcategory_products::find($id);
        $category_id = Category_products::where('parent_id' ,'=' , 0) ->get();
        return view('backend.subcategory_products.update',['breadcrumb'=>'Chỉnh sửa sản phẩm'], compact('subcategory_products','category_id'));
    }

    public function updateSubcategory($id, Request $request) {
        $data_update = $request->all();
        // dd($data);
        $subcategory_update = Subcategory_products::findOrFail($id);
        $subcategory_update -> update($data_update);
        return redirect(route('admin.Subcategory'))->with('success', 'Chỉnh sửa thành công'); 
    }


    public function deleteSubcategory_products($id)
    {
        $Subcategory_delete = Subcategory_products::find($id);
        $Subcategory_delete->delete();
        return back()->with('success', 'Xóa danh mục thành công');
    }


    public function search(Request $request)
    {
        $subcategories_products = Category_products::where('name', 'LIKE', '%' . $request->name . '%')->get();
        $dataLenght = count($subcategories_products);
        return view('backend.subcategory_products.list', [
            'breadcrumb' => 'Quản lý danh mục'
        ], compact('subcategories_products', 'dataLenght'));
    }
}
