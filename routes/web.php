<?php

use App\Http\Controllers\Admin\AppoinmentController as AdminAppoinmentController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\TempImageController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\DoctorImageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AppoinmentController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\SpecialityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });





// Frontend Route

Route::get('/',[HomeController::class,'index'])->name('front.home');
Route::post('/',[AppoinmentController::class,'postAppoinment'])->name('home.appoinment');

Route::get('/book-appointment',[AppoinmentController::class,'index'])->name('index.appoinment');
Route::post('/book-appointment',[AppoinmentController::class,'postAppoinment'])->name('post.appoinment');


Route::get('/about-us',[AboutController::class,'about'])->name('front.about');

Route::get('/speciality',[SpecialityController::class,'speciality'])->name('front.speciality');

Route::get('/shop/{categorySlug?}',[ShopController::class,'index'])->name('front.shop');
Route::get('/product/{slug}',[ShopController::class,'product'])->name('front.product');







//admin routes
Route::group(['prefix'=>'admin'],function(){

    Route::group(['middleware' => 'admin.guest'],function(){

        Route::get('/login',[LoginController::class,'index'])->name('admin.login.login');
        Route::post('/authenticate',[LoginController::class,'authenticate'])->name('admin.authenticate');

    });

    Route::group(['middleware' => 'admin.auth'],function(){

        Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
        Route::get('/logout',[DashboardController::class,'logout'])->name('admin.logout');

        
        // Category routes 
        Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
        Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
        Route::post('/categories',[CategoryController::class, 'store'])->name('categories.store');
        Route::get('/categories/{category}/edit',[CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/{category}',[CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{category}',[CategoryController::class, 'destroy'])->name('categories.delete');


        // Doctor routes 
        Route::get('/doctors',[DoctorController::class,'index'])->name('doctors.index');
        Route::get('/doctors/create',[DoctorController::class,'create'])->name('doctors.create');
        Route::post('/doctors',[DoctorController::class, 'store'])->name('doctors.store');
        Route::get('/doctors/{doctor}/edit',[DoctorController::class, 'edit'])->name('doctors.edit');
        Route::put('/doctors/{doctor}',[DoctorController::class, 'update'])->name('doctors.update');
        Route::delete('/doctors/{doctor}',[DoctorController::class, 'destroy'])->name('doctors.delete');


        // // sub categories route
        // Route::get('/sub-categories',[SubCategoryController::class,'index'])->name('sub-categories.index');
        // Route::get('/sub-categories/create',[SubCategoryController::class,'create'])->name('sub-categories.create');
        // Route::post('/sub-categories',[SubCategoryController::class, 'store'])->name('sub-categories.store');
        // Route::get('/sub-categories/{subCategory}/edit',[SubCategoryController::class, 'edit'])->name('sub-categories.edit');
        // Route::put('/sub-categories/{subCategory}',[SubCategoryController::class, 'update'])->name('sub-categories.update');
        // Route::delete('/sub-categories/{subCategory}',[SubCategoryController::class, 'destroy'])->name('sub-categories.delete');


        //brands routes
        Route::get('/brands',[BrandController::class,'index'])->name('brands.index');
        Route::get('/brands/create',[BrandController::class,'create'])->name('brands.create');
        Route::post('/brands',[BrandController::class, 'store'])->name('brands.store');
        Route::get('/brands/{brand}/edit',[BrandController::class, 'edit'])->name('brands.edit');
        Route::put('/brands/{brand}',[BrandController::class, 'update'])->name('brands.update');
        Route::delete('/brands/{brand}',[BrandController::class, 'destroy'])->name('brands.delete');



        //product routes       
         Route::get('/products',[ProductController::class,'index'])->name('products.index');
        Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
        Route::post('/products',[ProductController::class, 'store'])->name('products.store');
        Route::get('/products/{product}/edit',[ProductController::class, 'edit'])->name('products.edit');
        Route::put('/products/{product}',[ProductController::class, 'update'])->name('products.update');
        Route::delete('/products/{product}',[ProductController::class, 'destroy'])->name('products.delete');
        Route::get('/get-product',[ProductController::class, 'getProducts'])->name('products.getProducts');
        

        Route::get('/product-subcategories',[ProductSubCategoryController::class,'index'])->name('product-subcategories.index');


        Route::post('/product-images/update',[ProductImageController::class, 'update'])->name('product-images.update');
        Route::delete('/product-images',[ProductImageController::class, 'destroy'])->name('product-images.destroy');

        // Image Upload routes 
        Route::post('/upload-temp-image',[TempImageController::class, 'create'])->name('temp-images.create');


        // Doctor Image Upload routes 
        Route::post('/doc-upload-temp-image',[DoctorImageController::class, 'create'])->name('doc-temp-images.create');



        Route::get('/contact',[AdminContactController::class,'index'])->name('contactapplication');
        Route::put('/contact/{id}',[AdminContactController::class,'update'])->name('contactapplication.update');
        Route::get('/contact/{id}',[AdminContactController::class,'show'])->name('contactapplication.id');


        // appoinments
        Route::get('/appoinments',[AdminAppoinmentController::class,'index'])->name('appoinments');
        Route::put('/appoinment/{id}',[AdminAppoinmentController::class,'update'])->name('appoinments.update');
        Route::get('/appoinment/{id}',[AdminAppoinmentController::class,'show'])->name('appoinments.id');





        Route::get('/getSlug',function(Request $request){
            $slug = '';
            if(!empty($request->title)){
                $slug = Str::slug($request->title);
            }
            return response()->json([
                'status'=>true,
                'slug'=> $slug
            ]);
        })->name('getSlug');

    });


});

