<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public static $brand, $image, $imageUrl,$imageName, $directory;

    public static function getImageUrl($request){
        self::$image=$request->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory='admin-assets/brand-images/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function brandStore($request){
        $request->validate([
            'name'          =>'required',
            'description'   =>'required'
        ],
        [
            'name.required'         =>'Name field is required',
            'description.required'  =>'description is  required',
        ]);
        self::$brand                =new Brand();
        self::$brand->name          =$request->name;
        self::$brand->description   =$request->description;
        self::$brand->status        =$request->status;
        if ($request->image){
            self::$brand->image=self::getImageUrl($request);
        }
        self::$brand->save();
    }
    public static function brandUpdate($request, $id){
        self::$brand=Brand::find($id);
        if ($request->file('image')){
            if (file_exists(self::$brand->image)){
                unlink(self::$brand->image);
            }
            self::$brand->image=self::getImageUrl($request);
        }
        self::$brand->name          =$request->name;
        self::$brand->description   =$request->description;
        self::$brand->status        =$request->status;
        self::$brand->save();
    }
    public static function brandDelete($id){
        self::$brand=Brand::find($id);
        if (file_exists(self::$brand->image)){
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }
}
