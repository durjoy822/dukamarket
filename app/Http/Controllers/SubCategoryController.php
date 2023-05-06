<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    public function SubCategoryIndex(){
        return view('admin.sub-category.index',[
            'subCategories'=>SubCategory::latest()->get(),
        ]);
    }
    public function SubCategoryAdd(){
        return view('admin.sub-category.add',[
            'categories'=>Category::all(),
        ]);
    }
    public function subCategoryStore(Request $request){
//        dd($request->all());
        SubCategory::SubCategorystore($request);
        Session::flash('success','Sub-category info add successfully!');
        return redirect()->route('admin-subcategory.index');
    }
    public function SubCategoryEdit($id){
        return view('admin.sub-category.edit',[
            'categories'=>Category::all(),
            'subCategory'=>SubCategory::find($id),
        ]);
    }
    public function subCategoryUpdate( Request $request, $id){
        SubCategory::SubCategoryUpdate($request, $id);
        Session::flash('success','Sub-category info updated successfully!');
        return redirect()->route('admin-subcategory.index');
    }
    public function subCategoryDelete($id){
        SubCategory::SubCategoryDelete($id);
        Session::flash('warning','Sub-category info Deleted successfully!');
        return redirect()->route('admin-subcategory.index');
    }
}
