<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function categoryIndex(){
        return view('admin.category.index',[
            'categories'=>Category::latest()->get(),
        ]);
    }
    public function categoryAdd(){
        return view('admin.category.add');
    }
    public function categoryStore(Request $request){
//        dd($request->all());
        Category::newCategory($request);
        Session::flash('success','Category info add successfull!');
        return redirect()->route('admin-category.index');
    }
    public function categoryEdit($id){
        return view('admin.category.edit',[
            'categories'=>Category::findOrFail($id),
        ]);

    }
    public function categoryUpdate(Request $request,$id){
//        dd()
        Category::updateCategory( $request, $id);
        Session::flash('success','Category info updated successfully!');
        return redirect(route('admin-category.index'));
    }
    public function categoryDelete(Request $request,$id){
        Category::deleteCategory($id);
        Session::flash('warning','Category info deleted successfully!');
        return redirect()->route('admin-category.index');
    }

}
