<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function product_images(){
        return $this->hasMany(ProductImage::class);
    }


    public function product_category(){
        return $this->hasOne(Category::class, 'id', 'category_id','slug');
    }

    public function product_brand(){
        return $this->hasMany(Brand::class);
    }

}
