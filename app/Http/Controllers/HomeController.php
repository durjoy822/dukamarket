<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
      return view('home.index',[
          'products'=>Product::where('status',1)->latest()->take(6)->get(),

      ]);
    }
    public function categoryProduct($id){
        return view('home.category-product',[
            'products'=>Product::where('category_id',$id)->orderBy('id','desc')->get(),

        ]);
    }
    public function subCategoryProduct($id){
        return view('home.category-product',[
            'products'=>Product::where('sub_category_id',$id)->orderBy('id','desc')->get(),

        ]);
    }
    public function ProductDetails($id){
        return view('home.product-details',[
            'product'=>Product::find($id),
        ]);
    }
}
