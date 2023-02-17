<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category_products;


class Category_productsController extends Controller
{
    // Danh sách danh mục
    public function showCategory_products()
    {
        $categories_products = Category_products::all();
        $dataLenght = count($categories_products);
        return view('backend.category_products.list', compact('categories_products', 'dataLenght'), ['breadcrumb' => 'Danh sách danh mục']);
    }

    // Thêm danh mục
    public function createCategory_products()
    {
        // $category_parent = Category::where('parent_id' , '=', 0)->get();
        // dd($category_parent);
        return view('backend.category_products.create', ['breadcrumb' => 'Thêm danh mục']);
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
        Category_products::create($dataCategory_products);
        return back()->with('success', 'Thêm danh mục thành công');
    }

    // Chỉnh sửa danh mục
    public function getUpdateCategory_products($id)
    {
        $category_product = Category_products::find($id);
        return view('backend.category_products.update', ['breadcrumb' => 'Chỉnh sửa danh mục'], compact('category_product'));
    }

    public function updatecategory_products(Request $request, $id)
    {
        $data_update = $request->all();
        $category_update = Category_products::find($id);
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
        $category_delete = Category_products::find($id);
        $category_delete->delete();
        return back()->with('success', 'Xóa danh mục thành công');
    }

    // tìm kiếm danh mục
    public function search(Request $request)
    {
        $categories_products = Category_products::where('name', 'LIKE', '%' . $request->name . '%')->get();
        $dataLenght = count($categories_products);
        return view('backend.category_products.list', [
            'breadcrumb' => 'Quản lý danh mục'
        ], compact('categories_products', 'dataLenght'));
    }
}
