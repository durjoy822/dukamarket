<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminForgotPassController;
use App\Http\Controllers\BuyerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('admin.index');
// });
Route::get('/',[HomeController::class,'Home'])->name('home');
Route::get('/category/product/{id}',[HomeController::class,'categoryProduct'])->name('buyer-product.category');
Route::get('/sub-category-product/product/{id}',[HomeController::class,'subCategoryProduct'])->name('buyer-sub-category.product');
Route::get('/product/details/{id}',[HomeController::class,'ProductDetails'])->name('buyer-product.details');


Route::get('/buyer/login',[BuyerController::class,'buyerLogin'])->name('buyer.login');
Route::post('/buyer/store',[BuyerController::class,'buyerStore'])->name('buyer.store');
Route::post('/buyer/auth/check',[BuyerController::class,'buyerLoginAuth'])->name('buyer.login.auth');
Route::get('/buyer/logout',[BuyerController::class,'buyerLogout'])->name('buyer.logout');
Route::get('/buyer/profile',[BuyerController::class,'buyerProfile'])->name('buyer.profile');

Route::middleware(['auth'])->group(function () {

});





Route::group(['prefix'=>'admin'],function(){
    Route::get('/profile',[AdminController::class,'adminProfile'])->name('admin.profile');
    Route::middleware(admin::class)->group(function () {
        Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/forgot',[AdminForgotPassController::class,'forgotPass'])->name('admin.forgot');
        Route::get('/reset/password/form',[AdminForgotPassController::class,'resetForm'])->name('reset.form');
    });

    Route::get('/login',[AdminController::class,'adminLogin'])->name('admin.login');
    Route::get('/register',[AdminController::class,'adminRegister'])->name('admin.register');
    Route::post('/new/admin',[AdminController::class,'newAdmin'])->name('admin.new');
    Route::post('/admin/auth',[AdminController::class,'adminAuthCheck'])->name('admin.auth');
    Route::get('/admin/logout',[AdminController::class,'adminLogOut'])->name('admin.logout');

    Route::get('/category/index',[CategoryController::class,'categoryIndex'])->name('admin-category.index');
    Route::get('/category/add',[CategoryController::class,'categoryAdd'])->name('admin-category.add');
    Route::post('/category/store',[CategoryController::class,'categoryStore'])->name('admin-category.store');
    Route::get('/category/edit/{id}',[CategoryController::class,'categoryEdit'])->name('admin-category.edit');
    Route::post('/category/update/{id}',[CategoryController::class,'categoryUpdate'])->name('admin-category.update');
    Route::get('/category/delete/{id}',[CategoryController::class,'categoryDelete'])->name('admin-category.delete');

    Route::get('/sub-category/index',[SubCategoryController::class,'SubCategoryIndex'])->name('admin-subcategory.index');
    Route::get('/sub-category/add',[SubCategoryController::class,'SubCategoryAdd'])->name('admin-subcategory.add');
    Route::post('/sub-category/store',[SubCategoryController::class,'subCategoryStore'])->name('admin-subcategory.store');
    Route::get('/sub-category/edit/{id}',[SubCategoryController::class,'subCategoryEdit'])->name('admin-subcategory.edit');
    Route::post('/sub-category/update/{id}',[SubCategoryController::class,'subCategoryUpdate'])->name('admin-subcategory.update');
    Route::get('/sub-category/delete/{id}',[SubCategoryController::class,'subCategoryDelete'])->name('admin-subcategory.delete');

    Route::get('/brand/index',[BrandController::class,'brandIndex'])->name('admin-brand.index');
    Route::get('/brand/add',[BrandController::class,'brandAdd'])->name('admin-brand.add');
    Route::post('/brand/store',[BrandController::class,'brandStore'])->name('admin-brand.store');
    Route::get('/brand/edit/{id}',[BrandController::class,'brandEdit'])->name('admin-brand.edit');
    Route::post('/brand/update/{id}',[BrandController::class,'brandUpdate'])->name('admin-brand.update');
    Route::get('/brand/delete/{id}',[BrandController::class,'brandDelete'])->name('admin-brand.delete');

    Route::get('/unit/index',[UnitController::class,'unitIndex'])->name('admin-unit.index');
    Route::get('/unit/add',[UnitController::class,'unitAdd'])->name('admin-unit.add');
    Route::post('/unit/store',[UnitController::class,'unitStore'])->name('admin-unit.store');
    Route::get('/unit/edit/{id}',[UnitController::class,'unitEdit'])->name('admin-unit.edit');
    Route::post('/unit/update/{id}',[UnitController::class,'unitUpdate'])->name('admin-unit.update');
    Route::get('/unit/delete/{id}',[UnitController::class,'unitDelete'])->name('admin-unit.delete');

    Route::get('/product/index',[ProductController::class,'productIndex'])->name('admin-product.index');
    Route::get('/product/get-all-sub-category',[ProductController::class,'getAllSubCategory'])->name('get-all-sub-category');
    Route::get('/product/add',[ProductController::class,'productAdd'])->name('admin-product.add');
    Route::post('/product/store',[ProductController::class,'productStore'])->name('admin-product.store');
    Route::get('/product/details/{id}',[ProductController::class,'productDetails'])->name('admin-product.details');
    Route::get('/product/edit/{id}',[ProductController::class,'productEdit'])->name('admin-product.edit');
    Route::post('/product/update/{id}',[ProductController::class,'productUpdate'])->name('admin-product.update');
    Route::get('/product/delete/{id}',[ProductController::class,'productDelete'])->name('admin-product.delete');
});
