<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request, $categorySlug = null){

        $categories = Category::orderBy('name','ASC')->where('status',1)->get();
 
        $brands = Brand::orderBy('name','ASC')->where('status',1)->get();
 
        $products = Product::where('status',1);
        //filters
 
        if(!empty($categorySlug)){
         $category = Category::where('slug',$categorySlug)->first();
         $products = $products->where('category_id',$category->id);
        }
 
 
 
 
     //    $products = Product::orderBy('id','DESC')->where('status',1)->get();
 
 
 
         $products = $products->orderBy('id','DESC');
         $products = $products->get();
 
 
        $data['categories'] = $categories;
        $data['brands'] = $brands;
        $data['products'] = $products;
         return view('frontend.category.category',$data);
    }
}
