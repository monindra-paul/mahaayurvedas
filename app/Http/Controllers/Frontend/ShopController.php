<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request, $categorySlug = null){

        $categorySelected = "";

       $categories = Category::orderBy('name','ASC')->where('status',1)->get();

       $brands = Brand::orderBy('name','ASC')->where('status',1)->get();


       $products = Product::where('status',1);
       //filters


       if(!empty($request->get('search'))){
        $products = $products->where('title', 'like','%'.$request->get('search').'%');
       }

        //category

       if(!empty($categorySlug)){
        $category = Category::where('slug',$categorySlug)->first();
        $products = $products->where('category_id',$category->id);
        $categorySelected = $category->id;
       }


       //sub category

    //    if(!empty($subCategorySlug)){
    //     $subCategory = SubCategory::where('slug',$subCategorySlug)->first();
    //     $products = $products->where('sub_category_id',$subCategory->id);
    //     $categorySelected = $category->id;
    //    }


    //    $products = Product::orderBy('id','DESC')->where('status',1)->get();



        $products = $products->orderBy('id','DESC');
        $products = $products->paginate(10);


       $data['categories'] = $categories;
       $data['brands'] = $brands;
       $data['products'] = $products;
       $data['categorySelected'] = $categorySelected;

        return view('frontend.shop.shop',$data);
    }


    public function product($slug){
        // echo $slug;
        $product = Product::where('slug',$slug)->with('product_images')->first();

        if($product == null){
            abort(404);
        }
        


          //fetch releted products
          $relatedProducts = [];

          if($product->related_products != ""){
              $productArray = explode(',',$product->related_products);
              $relatedProducts = Product::whereIn('id',$productArray)->get();
          }


        $data['product'] = $product;
        $data['relatedProducts'] = $relatedProducts;


        return view('frontend.product.product',$data);
    }
}
