<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Illuminate\Mail\Mailables\hasTo;

class Category extends Model
{
    use HasFactory;
    public static $category, $image, $imageUrl,$imageName, $directory;

    public static function getImageUrl($request){
        self::$image        =$request->file('image');
        self::$imageName    =self::$image->getClientOriginalName();
        self::$directory    ='admin-assets/category-images/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }


    public static function newCategory ($request){
        $request->validate([
            'name'            => 'required',
            'description'     => 'required',
        ],
            [
                'name.required'         =>'please input category name!',
                'description.required'  =>'description field is required!',

            ]

        );
            self::$category             =new Category();
            self::$category->name       =$request->name;
            self::$category->description=$request->description;
            self::$category->status     =$request->status;
            if ($request->image){
                self::$category->image      =self::getImageUrl($request);
            }
            self::$category->save();
    }
    public static function updateCategory($request, $id ){
            self::$category             =Category::find($id);
            if ($request->file('image')){
                if(file_exists(self::$category->image)){
                   unlink(self::$category->image);
                }
                self::$category->image      =self::getImageUrl($request);
            }
            self::$category->name       =$request->name;
            self::$category->description=$request->description;
            self::$category->status     =$request->status;
            self::$category->save();
    }
    public static function deleteCategory($id)
    {
     self::$category=Category::find($id);
    if (file_exists(self::$category->image))
    {
        unlink(self::$category->image);
    }
    self::$category->delete();
    }
    public function subCategory(){
        return $this->hasMany(SubCategory::class);
    }

}
