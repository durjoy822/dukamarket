<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $product, $image, $imageUrl,$imageName, $directory;

    public static function getImageUrl($request){
        self::$image=$request->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory='admin-assets/product-image/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function productStore($request){
        $request->validate([
            'name'            => 'required',
            'code'     => 'required',
            'short_description'     => 'required',
            'long_description'     => 'required',
            'regular_price'     => 'required',
            'selling_price'     => 'required',
            'stock_amount'     => 'required',
        ]);
        self::$product                      =new Product();
        self::$product->category_id         =$request->category_id;
        self::$product->sub_category_id     =$request->sub_category_id;
        self::$product->brand_id            =$request->brand_id;
        self::$product->unit_id             =$request->unit_id;
        self::$product->name                =$request->name;
        self::$product->code                =$request->code;
        self::$product->short_description   =$request->short_description;
        self::$product->long_description    =$request->long_description;
        self::$product->regular_price       =$request->regular_price;
        self::$product->selling_price       =$request->selling_price;
        self::$product->discount            =$request->discount;
        self::$product->stock_amount        =$request->stock_amount;
        self::$product->status              =$request->status;
        if ($request->image){
            self::$product->image               =self::getImageUrl($request);
        }
        self::$product->save();
        return self::$product;
    }

    public static function productUpdate($request, $id){
        self::$product=Product::find($id);
        if ($request->file('image')){
            if(file_exists(self::$product->image)){
                unlink(self::$product->image);
            }
            self::$product->image      =self::getImageUrl($request);
        }
        self::$product->category_id         =$request->category_id;
        self::$product->sub_category_id     =$request->sub_category_id;
        self::$product->brand_id            =$request->brand_id;
        self::$product->unit_id             =$request->unit_id;
        self::$product->name                =$request->name;
        self::$product->code                =$request->code;
        self::$product->short_description   =$request->short_description;
        self::$product->long_description    =$request->long_description;
        self::$product->regular_price       =$request->regular_price;
        self::$product->selling_price       =$request->selling_price;
        self::$product->discount            =$request->discount;
        self::$product->stock_amount        =$request->stock_amount;
        self::$product->status              =$request->status;
        self::$product->save();

    }
    public static function productDelete($id){
        self::$product=Product::find($id);
        if (file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }

//    Relation between Category,subCategory,Brand,Unit table for showing there name
    public function category(){
        return  $this->belongsTo(Category::class);
    }
    public function subCategory(){
        return  $this->belongsTo(SubCategory::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function otherImages(){
        return $this->hasMany(OtherImage::class);
    }

}
