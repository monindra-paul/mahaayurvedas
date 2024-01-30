@extends('frontend.layout.app')
@section('content')

    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f br-3">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Shop</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Shop Start -->

        <div class="container mt-50 ">
            <div class="row ">
                <form action="" method="get" class=" justify-content-end">
                    @csrf
                    <div class="card-header">
                        <div class="card-tools">
                            <div class="input-group input-group" style="">
                                <input type="text" value="{{ Request::get('keyword') }}" name="keyword"
                                    class="form-control float-right" placeholder="Search Your Product...">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-warning">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

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

                            <div class="sidebar-widget categories">
                                <h4>Categories</h4>
                                @if ($categories->isNotEmpty())
                                    <ul class="category-box list-style">
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('front.shop', $category->slug) }}"
                                                    id="{{ $categorySelected == $category->id ? 'catselected' : '' }}">
                                                    <i class="ri-checkbox-line"></i>
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
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






                    <div class="col-xl-8 col-lg-12 order-xl-2 order-lg-1 order-md-1 order-1">


                        <div class="row justify-content-center">


                            @if ($products->isNotEmpty())
                                @foreach ($products as $product)
                                    @php
                                        $productImage = $product->product_images->first();
                                    @endphp
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">






                                        <div class="product-card style6">
                                            @if (!empty($productImage->image))
                                                <div class="product-img">
                                                    <a href="{{ route('front.product', $product->slug) }}">
                                                        <img src="{{ asset('uploads/product/small/' . $productImage->image) }}"
                                                            alt="Image">
                                                    </a>
                                                    <a href="{{ route('front.product', $product->slug) }}"
                                                        class="btn style2 add-cart">View Details</a>
                                                </div>
                                            @endif
                                            <div class="product-info">
                                                <p class="price">₹ {{ $product->price }}
                                                    @if ($product->compare_price > 0)
                                                        <span class="discount">₹ {{ $product->compare_price }}</span>
                                                    @endif
                                                </p>
                                                <h3><a
                                                        href="{{ route('front.product', $product->slug) }}">{{ $product->title }}</a>
                                                </h3>
                                                <ul class="ratings list-style">
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-fill"></i></li>
                                                    <li><i class="ri-star-fill"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop End -->

    </div>
    <!-- Content Wrapper End -->


@endsection
