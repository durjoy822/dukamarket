<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UnitController extends Controller
{
    public function unitIndex(){
        return view('admin.unit.index',[
            'units'=>Unit::all(),
        ]);
    }
    public function unitAdd(){
        return view('admin.unit.add');
    }
    public function unitStore(Request $request){
        Unit::unitStore($request);
        Session::flash('success','Unit Info add successfull! ');
        return redirect()->route('admin-unit.index');
    }
    public function unitEdit($id){
        return view('admin.unit.edit',[
            'unit'=>Unit::find($id),
        ]);
    }
    public function unitUpdate(Request $request, $id){
        Unit::unitUpdate($request, $id);
        Session::flash('success','Unit Info updated successfull!');
        return redirect()->route('admin-unit.index');
    }
    public function unitDelete($id){
        Unit::unitDelete($id);
        Session::flash('success','Unit Info deleted successfully!');
        return redirect()->route('amdin-unit.index');
    }
}
