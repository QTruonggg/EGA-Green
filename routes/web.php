<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\Category_productsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\Subcategory_productsController;
use App\Http\Controllers\frontend\AddProductCartController;
use App\Http\Controllers\frontend\HomeInterfaceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('admin/login', [LoginController::class, 'showLogin'])->name('admin.showlogin');
Route::get('admin', [LoginController::class, 'showLogin'])->name('admin.showlogin');
// đăng nhập 
Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login');
// Đăng xuất trang quản lí
Route::get('/admin/logout',[LoginController::class,'logout'])->name('admin.logout');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', [LoginController::class, 'showHome'])->name('admin.home');

    // banner
    Route::prefix('banner')->group(function() {
        Route::get('list',[BannerController::class,'viewBannerList'])->name('admin.viewBannerList');
        Route::get('create',[BannerController::class,'createBanner'])->name('banner.create');
        Route::post('create',[BannerController::class,'storeBanner']);
        Route::get('update/{id}',[BannerController::class,'getUpdateBanner'])->name('banner.getUpdate');
        Route::post('update/{id}',[BannerController::class,'updateBanner'])->name('banner.update');
        Route::get('deletebanner/{id}', [BannerController::class, 'deleteBanner'])->name('banner.delete');
    });

    Route::prefix('category')->group(function() {
        Route::get('list',[CategoryController::class,'viewCategory'])->name('admin.Category');
        Route::get('create',[CategoryController::class,'createCategory'])->name('category.create');
        Route::post('create',[CategoryController::class,'storeCategory']);
        Route::get('update/{id}',[CategoryController::class,'getUpdateCategory'])->name('category.getUpdate');
        Route::post('update/{id}',[CategoryController::class,'updateCategory'])->name('category.update');
        Route::get('deletecategory/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
    });
  
    Route::prefix('category_products')->group(function() {
        Route::get('/', [Category_productsController::class, 'showCategory_products'])->name('admin.category_products');
        Route::get('create', [Category_productsController::class, 'createCategory_products'])->name('admin.createCategory_products');
        Route::post('create', [Category_productsController::class, 'postCategory_products'])->name('admin.postCategory_products');
        Route::get('update-{id}', [Category_productsController::class, 'getUpdateCategory_products'])->name('admin.getUpdateCategory_products');
        Route::post('update-{id}', [Category_productsController::class, 'updatecategory_products'])->name('admin.updateCategory_products');
        Route::get('delete-{id}', [Category_productsController::class, 'deleteCategory_products'])->name('admin.deleteCategory_products');
        Route::get('search', [Category_productsController::class,'search'])->name('admin.category_products.search');
    });

    Route::prefix('subcategory_products')->group(function() {
        Route::get('/', [Subcategory_productsController::class, 'showSubcategory_products'])->name('admin.Subcategory');
        Route::get('create', [Subcategory_productsController::class, 'getSubcategory_products'])->name('admin.createSubcategory');
        Route::post('create', [Subcategory_productsController::class, 'addSubcategory_products'])->name('admin.postSubcategory');
        Route::get('update-{id}', [Subcategory_productsController::class, 'getUpdateSubcategory'])->name('admin.getUpdateSubcategory');
        Route::post('update-{id}', [Subcategory_productsController::class, 'updateSubcategory'])->name('admin.updateSubcategory');
        Route::get('delete-{id}', [Subcategory_productsController::class, 'deleteSubcategory_products'])->name('admin.deleteSubcategory');
        Route::get('search', [Subcategory_productsController::class,'search'])->name('admin.subcategory.search');
    });

    Route::prefix('products')->group(function() {
        Route::get('list', [ProductsController::class,'showProductList'])->name('admin.showProductList');
        Route::get('create', [ProductsController::class,'getCreateProduct'])->name('admin.getCreateProduct');
        Route::post('create', [ProductsController::class,'addProduct'])->name('admin.addProduct');
        Route::get('list/update/{id}', [ProductsController::class,'getUpdateProduct'])->name('admin.getUpdateProduct');
        Route::post('list/update/{id}', [ProductsController::class,'updateProduct'])->name('admin.updateProduct');
        Route::get('list/delete/{id}', [ProductsController::class,'deleteProduct'])->name('admin.deleteProduct');
        Route::get('search', [ProductsController::class,'search'])->name('admin.product.search');
    });

    Route::prefix('blog')->group(function() {
        Route::get('list',[BlogController::class,'BlogList'])->name('blog.list');
        Route::get('create',[BlogController::class,'createBlog'])->name('blog.create');
        Route::post('create',[BlogController::class,'storeBlog']);
        Route::get('update/{id}',[BlogController::class,'getUpdateBlog'])->name('blog.getUpdate');
        Route::post('update/{id}',[BlogController::class,'updateBlog'])->name('blog.update');
        Route::get('deleteblog/{id}', [BlogController::class, 'deleteBlog'])->name('blog.delete');
    });



});



//frontend
Route::get('/', function () {
    return view('frontend.home.index');
});

Route::get('/sanpham',[HomeInterfaceController::class, 'showAllProduct'])->name('ProductList'); 


Route::get('/sanpham/{id}-{slug}',[HomeInterfaceController::class, 'showDetailsProduct'])->name('showDetailsProduct'); 


Route::get('/them-{id}', [AddProductCartController::class, 'addCartajax'])->name('addProduct');

Route::get('/gio-hang',[AddProductCartController::class , 'showCartList'])->name('showCartList');
Route::get('/xoa-gio-hang-{rowId}',[AddProductCartController::class , 'deleteCart'])->name('deleteCart');



Route::get('/tin-tuc',[HomeInterfaceController::class, 'blog'])->name('blog');
Route::get('/tin-tuc/{id}-{slug}',[HomeInterfaceController::class, 'blog_details'])->name('blog_details');

