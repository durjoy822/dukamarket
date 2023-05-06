<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    use HasFactory;

    public static $otherImage, $otherImages,$image,$images, $imageUrl,$imageName, $directory;

    public static function getImageUrl($image){
        self::$imageName    =$image->getClientOriginalName();
        self::$directory    ='admin-assets/other-images/';
        $image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }


    public static function otherImageStore ($request , $id){
        self::$images=$request->file('other_image');
        foreach(self::$images as $image){
            self::$otherImage                   =new OtherImage();
            self::$otherImage->product_id       =$id;
            if ($request->other_image){
                self::$otherImage->image  =self::getImageUrl($image);
            }
            self::$otherImage->save();
        }
    }


    public static function otherImageUpdate($request, $productId ){
        self::$otherImages             =OtherImage::where('product_id',$productId)->get();
        foreach(self::$otherImages as $otherImage)
        {
            if (file_exists($otherImage->image))
            {
                unlink($otherImage->image);
            }
            $otherImage->delete();
        }
        self::otherImageStore($request,$productId);

    }
    public static function deleteCategory($id)
    {
        self::$otherImage=Category::find($id);
        if (file_exists(self::$otherImage->image))
        {
            unlink(self::$otherImage->image);
        }
        self::$otherImage->delete();
    }
}
