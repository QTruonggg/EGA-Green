<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function viewCategory(){
        $category = Category::all();
        return view('backend.category.list',
        ['title'=>'Danh sách Category']
        , compact('category'));
        
    }
    public function createCategory(){
        return view('backend.category.create', 
        ['title'=>'Thêm Category']
        );
    }
    public function storeCategory(Request $request){
        $requi = [
            'name'  => 'required|max:255',
            'image'   => 'required'
        ];
        $messages = [
            'name.required'    => 'Nhập tên !!!',
            'image.required'  => 'Nhập ảnh !!!'
        ];
        $validate = $request->validate($requi, $messages);
        $data = $request->all();
        Category::create($data);
        return redirect(route('admin.Category'))->with('success','Thêm danh mục thành công');
    }

    public function getUpdateCategory($id){
        $category_detail = Category::findOrFail($id);
        return view('backend.category.update', 
        ['title'=>'Chỉnh sửa Category'], compact('category_detail'));
    }

    public function updateCategory(Request $request, $id){
        $category = Category::findOrFail($id);
        $data = $request->all();
        $category->update($data);
        return redirect(route('admin.Category'));
    }

    public function deletecategory($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(route('admin.Category'));
    }

}