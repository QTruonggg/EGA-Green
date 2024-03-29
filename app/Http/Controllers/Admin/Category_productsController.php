<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryProducts;
use App\Models\SubCategoryProducts;

class Category_productsController extends Controller
{
    // Danh sách danh mục
    public function showCategory_products()
    {
        $categories_products = CategoryProducts::all();
        $dataLenght = count($categories_products);
        return view('backend.category_products.list', compact('categories_products', 'dataLenght'), ['breadcrumb' => 'Danh sách danh mục']);
    }

    // Thêm danh mục
    public function createCategory_products()
    {
        $category_id = CategoryProducts::where('parent_id' , '=', '0')->get();
        // dd($category_id);
        return view('backend.category_products.create', ['breadcrumb' => 'Thêm danh mục'],compact('category_id'));
    }
    public function postCategory_products(Request $request)
    {
        $dataCategory_products = $request->all();
        $requi = [
            'name'        => 'required|max:255',
            'parent_id' => 'nullable',
            'seo_title'     => 'required|max:255',
            'seo_keyword' => 'required|max:255',
            'seo_description'        => 'required|max:255',
        ];
        $messages = [
            'name.required'    => 'Chưa nhập tên',
            'seo_title.required' => 'Chưa nhập tiêu đề tìm kiếm',
            'seo_keyword.required' => 'Chưa nhập từ khóa tìm kiếm',
            'seo_description.required' => 'Chưa nhập miêu tả tìm kiếm',
        ];
        $request->validate($requi, $messages);
        CategoryProducts::create($dataCategory_products);
        return back()->with('success', 'Thêm danh mục thành công');
    }

    // Chỉnh sửa danh mục
    public function getUpdateCategory_products($id)
    {
        $category_product = CategoryProducts::find($id);
        $category_id = CategoryProducts::where('parent_id' , '=', '0')->get();
        return view('backend.category_products.update', ['breadcrumb' => 'Chỉnh sửa danh mục'], compact('category_product', 'category_id'));
    }

    public function updatecategory_products(Request $request, $id)
    {
        $data_update = $request->all();
        $category_update = CategoryProducts::find($id);
        $requi = [
            'name'        => 'required|max:255',
            'parent_id' => 'nullable',
            'seo_title'     => 'required|max:255',
            'seo_keyword' => 'required|max:255',
            'seo_description'        => 'required|max:255',
        ];
        $messages = [
            'name.required'    => 'Chưa nhập tên',
            'seo_title.required' => 'Chưa nhập tiêu đề tìm kiếm',
            'seo_keyword.required' => 'Chưa nhập từ khóa tìm kiếm',
            'seo_description.required' => 'Chưa nhập miêu tả tìm kiếm',
        ];
        $request->validate($requi, $messages);
        $category_update->update($data_update);
        return redirect(route('admin.category_products'))->with('success', 'Chỉnh sửa thành công');
    }

    // xóa danh mục
    public function deleteCategory_products($id)
    {
        $category_delete = CategoryProducts::find($id);
        $category_delete->delete();
        return back()->with('success', 'Xóa danh mục thành công');
    }

    // tìm kiếm danh mục
    public function search(Request $request)
    {
        $categories_products = CategoryProducts::where('name', 'LIKE', '%' . $request->name . '%')->get();
        $dataLenght = count($categories_products);
        return view('backend.category_products.list', [
            'breadcrumb' => 'Quản lý danh mục'
        ], compact('categories_products', 'dataLenght'));
    }
}
