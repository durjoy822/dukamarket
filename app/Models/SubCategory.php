<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    public static $subCategory, $image, $imageUrl, $imageName, $directory;

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'admin-assets/sub-category-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function subCategoryStore($request){
        $request->validate([
            'name'                   => 'required',
            'description'            => 'required',
        ],
            [
                'name.required'         =>'please input category name!',
                'description.required'  =>'description field is required!',
            ]
        );
        self::$subCategory              =new SubCategory();
        self::$subCategory->category_id =$request->category_id;
        self::$subCategory->name        =$request->name;
        self::$subCategory->description =$request->description;
        self::$subCategory->status =$request->status;
        if ($request->image){
            self::$subCategory->image       =self::getImageUrl($request);
        }
        self::$subCategory->save();
    }

    public static function SubCategoryUpdate($request,$id){
        self::$subCategory=SubCategory::find($id);
        if ($request->file('image')){
            if (file_exists(self::$subCategory->image)){
                unlink(self::$subCategory->image);
            }
            self::$subCategory->image=self::getImageUrl($request);
        }
        self::$subCategory->category_id    =$request->category_id;
        self::$subCategory->name           =$request->name;
        self::$subCategory->description    = $request->description;
        self::$subCategory->status         = $request->status;
        self::$subCategory->save();
    }

    public static function SubCategoryDelete($id)
    {
        self::$subCategory=SubCategory::find($id);
        if (file_exists(self::$subCategory->image))
        {
            unlink(self::$subCategory->image);
        }
        self::$subCategory->delete();
    }

}
