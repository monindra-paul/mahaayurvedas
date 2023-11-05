@extends('frontend.layout.app')
@section('content')

 <!-- Content Wrapper Start -->
 <div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-3">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Category</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Category</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

     <!-- Shop Start -->
     <div class="shop-wrap ptb-100">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-4 col-lg-12 order-xl-1 order-lg-2 order-md-2 order-2">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            {{-- <div class="search-box">
                                <div class="form-group">
                                    <input type="search" placeholder="Search">
                                    <button type="submit"> 
                                        <i class="flaticon-search"></i>
                                    </button>
                                </div>
                            </div> --}}
                        </div>
                        {{-- <div class="sidebar-widget range-slider">
                            <h4>Price Filter</h4>
                            <div class="form-group">
                                <div id="slider-range" class="price-range mar-bot-20"></div>
                                <label for="price-range">Price:</label>
                                <input type="text" id="amount">
                            </div>
                        </div> --}}

                        
                        {{-- <div class="sidebar-widget tags">
                            <h4>Popular Tags </h4>
                            <div class="tag-list">
                                <ul class="list-style">
                                    <li><a href="posts-by-tag.html">Health</a></li>
                                    <li><a href="posts-by-tag.html">Medicine</a></li>
                                    <li><a href="posts-by-tag.html">Cannbis</a></li>
                                    <li><a href="posts-by-tag.html">Marijuanna</a></li>
                                    <li><a href="posts-by-tag.html">Doctor</a></li>
                                    <li><a href="posts-by-tag.html">Herbal</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 order-xl-2 order-lg-1 order-md-1 order-1">
                    
                    <div class="row justify-content-center">

                        @if($categories->isNotEmpty())
                        @foreach($categories as $category)
                            {{-- @php
                              $productImage = $product->product_images->first();
                            @endphp --}}
                        <div class="col-xxl-4 col-xl-3 col-lg-3 col-md-6">
                            <div class="product-card style6">
                                @if(!empty($category->image))
                                <div class="product-img" style="border-radius:25px; border: 1px solid orange;">
                                    <a href="{{route('front.shop',$category->slug)}}">
                                        <img src="{{asset('uploads/category/thumb/'. $category->image)}}" alt="Image">
                                    </a>
                                    
                                </div>
                                @endif
                                <div class="product-info">
                                    {{-- <p class="price">₹ {{$product->price}}
                                        @if($product->compare_price > 0)
                                        <span class="discount">₹ {{$product->compare_price}}</span>
                                        @endif
                                    </p> --}}
                                    <h3><a href="{{route('front.shop',$category->slug)}}">{{$category->name}}</a></h3>
                                    {{-- <ul class="ratings list-style">
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                        <li><i class="ri-star-fill"></i></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop End -->
   
</div>
<!-- Content Wrapper End -->


@endsection