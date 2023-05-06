<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function productIndex(){
        return view('admin.product.index',[
            'products'=>Product::latest()->get(),
            'productPublishCount'=>Product::where('status',1)->get(),
            'productUnPublishCount'=>Product::where('status',0)->get(),
            'productDiscount'=>Product::where('discount','<>', '')->get(),
        ]);
    }
    public function productAdd(){
        return view('admin.product.add',[
            'categories'       =>Category::where('status',1)->get(),
            'sub_categories'   =>SubCategory::where('status',1)->get(),
            'brands'           =>Brand::where('status',1)->get(),
            'units'            =>Unit::where('status',1)->get(),
        ]);
    }
    public function getAllSubCategory(){
//        $id=$_GET['id'];
//        $subCategories=SubCategory::where('category_id',$id)->get();
        return response()->json(SubCategory::where('category_id',$_GET['id'])->get());
    }
    public function productStore(Request $request){
//        dd($request->all());
        $this->Product=Product::productStore($request);
        OtherImage::otherImageStore($request,$this->Product->id);
        Session::flash('success','Product Info Add Successfull! ');
        return redirect()->route('admin-product.index');
    }
    public function productDetails($id){
        return view('admin.product.details',[
            'product'=>Product::find($id),
        ]);
    }
    public function productEdit($id){
        return view('admin.product.edit',[
            'product'          =>Product::find($id),
            'categories'       =>Category::where('status',1)->get(),
            'sub_categories'   =>SubCategory::where('status',1)->get(),
            'brands'           =>Brand::where('status',1)->get(),
            'units'            =>Unit::where('status',1)->get(),
        ]);
    }
    public function productUpdate(Request $request,$id){
//        return $request->all();
        Product::productUpdate($request,$id);
        if ($request->file('other_image')){
           OtherImage::otherImageUpdate($request,$id);
        }else{

        }
        Session::flash('success',' Product Info Updated Successfull! ');
        return redirect()->route('admin-product.index');
    }
    public function productDelete($id){
        Product::productDelete($id);
        Session::flash('warning','Product Info Deleted successfull!');
        return redirect()->route('admin-product.index');
    }
}
