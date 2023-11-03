<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $products =  Product::where('is_featured','Yes')
        ->orderBy('id','DESC')
        ->take(8)
        ->where('status',1)
        ->get();

        $data['products'] = $products;


        $allProducts =  Product::orderBy('id','DESC')
        ->where('status',1)
        ->take(6)
        ->get();

        $lim_cats = Category::orderBy('id','DESC')->where('status',1)->take(6)->get();


        $doctors = Doctor::orderBy('name','DESC')->where('status',1)->get();


        $data['allProducts'] = $allProducts;
        $data['lim_cats'] = $lim_cats;
        $data['doctors'] = $doctors;



        return view('frontend.home.home',$data);
    }
}
