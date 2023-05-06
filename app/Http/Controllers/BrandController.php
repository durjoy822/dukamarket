<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    public function brandIndex(){
        return view('admin.brand.index',[
            'brands'=>Brand::all(),
        ]);
    }
    public function brandAdd(){
        return view('admin.brand.add');
    }
    public function brandStore(Request $request){
//        dd($request->all());
        Brand::brandStore($request);
        Session::flash('success','Brand add successfull!');
        return redirect()->route('admin-brand.index');
    }
    public function brandEdit($id){
        return view('admin.brand.edit',[
            'brand'=>Brand::find($id),
        ]);
    }
    public function brandUpdate(Request $request,$id){
        Brand::brandUpdate($request, $id);
        Session::flash('success','Brand info updated successfull!');
        return redirect()->route('admin-brand.index');
    }
    public function brandDelete($id){
        Brand::brandDelete($id);
        Session::flash('warning','Brand info deleted successfull!');
        return redirect()->route('admin-brand.index');
    }

}
