<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProducts;
use App\Models\SubCategoryProducts;
use Illuminate\Http\Request;

class Subcategory_productsController extends Controller
{
    public function showSubcategory_products()
    {
        $subcategories_products = SubCategoryProducts::all();
        $dataLenght = count($subcategories_products);
        $category_id = CategoryProducts::where('parent_id' ,'=' , 0) ->get();
        return view('backend.subcategory_products.list', compact('subcategories_products','category_id' , 'dataLenght'), ['breadcrumb' => 'Danh sách danh mục']);
    }

    public function getSubcategory_products() {
        // $category_id = Product::where('category_id','=', '1')->where('status','=','0')->get();
        $category_id = CategoryProducts::where('parent_id' ,'=' , 0) ->get();
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
        SubCategoryProducts::create($data);
        return back()->with('success', 'Thêm thành công danh mục!');
    }

    public function getUpdateSubcategory($id) {
        $subcategory_products = SubCategoryProducts::find($id);
        $category_id = CategoryProducts::where('parent_id' ,'=' , 0) ->get();
        return view('backend.subcategory_products.update',['breadcrumb'=>'Chỉnh sửa sản phẩm'], compact('subcategory_products','category_id'));
    }

    public function updateSubcategory($id, Request $request) {
        $data_update = $request->all();
        // dd($data);
        $subcategory_update = SubCategoryProducts::findOrFail($id);
        $subcategory_update -> update($data_update);
        return redirect(route('admin.Subcategory'))->with('success', 'Chỉnh sửa thành công'); 
    }


    public function deleteSubcategory_products($id)
    {
        $Subcategory_delete = SubCategoryProducts::find($id);
        $Subcategory_delete->delete();
        return back()->with('success', 'Xóa danh mục thành công');
    }


    public function search(Request $request)
    {
        $subcategories_products = CategoryProducts::where('name', 'LIKE', '%' . $request->name . '%')->get();
        $dataLenght = count($subcategories_products);
        return view('backend.subcategory_products.list', [
            'breadcrumb' => 'Quản lý danh mục'
        ], compact('subcategories_products', 'dataLenght'));
    }
}
