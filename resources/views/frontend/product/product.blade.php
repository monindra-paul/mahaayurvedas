@extends('frontend.layout.app')
@section('content')


 <!-- Content Wrapper Start -->
 <div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-3">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>{{$product->title}}</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="index.html">Home </a></li>
                    <li><a href="shop-left-sidebar.html">Product</a></li>
                    <li>{{$product->title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details section start -->
    <section class="product-details-wrap pt-100">
        <div class="container">
            <div class="row gx-5 ">
                <div class="col-lg-6">
                    <div class="single-product-gallery">
                        <div class="swiper-container single-product-slider">
                            <div class="swiper-wrapper">
                                @if($product->product_images)
                                @foreach($product->product_images as $key => $productImage)
                                <div class="swiper-slide single-product-item {{($key == 0) ? 'active' : ''}}">
                                    <img src="{{asset('uploads/product/large/'.$productImage->image)}}" />
                                </div>
                                @endforeach
                                @endif
                                
                            </div>
                            <div class="swiper-button-next"><i class="ri-arrow-right-s-line"></i></div>
                            <div class="swiper-button-prev"><i class="ri-arrow-left-s-line"></i></div>
                        </div>
                        <div thumbsSlider="" class="swiper-container single-product-thumbs">
                            <div class="swiper-wrapper">
                                @if($product->product_images)
                                @foreach($product->product_images as $key => $productImage)
                                <div class="swiper-slide single-product-thumb bg-albastor">
                                    <img src="{{asset('uploads/product/large/'.$productImage->image)}}" />
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-product-details">
                        <div class="single-product-title">
                            <h2>{{$product->title}}</h2>
                            <h3><span>₹ {{$product->price}}</span> 
                                @if($product->compare_price > 0)<span class="discount">₹ {{$product->compare_price}}</span>@endif</h3>
                            <div class="ratings">
                                <ul class="list-style">
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                </ul>
                                {{-- <span>(12 customer review)</span> --}}
                            </div>
                        </div>
                        <p class="single-product-desc">
                            {!!$product->short_description!!}
                        </p>
                        <div class="product-more-option">
                            <div class="product-more-option-item">
                                <h5>Category :</h5>
                               {{$product->product_category->name}}
                            </div>
                            <div class="product-more-option-item">
                                <h5>Product Capacity :</h5>
                                <span>{{$product->sizes}}</span>
                            </div>                           
                            
                            {{-- <div class="product-more-option-item">
                                <h5>Brand :</h5>
                               {{$product->$product_brand->name}}
                            </div> --}}
                        </div>
                        <div class="product-more-option-item">
                            {{-- <div class="product-quantity">
                                <div class="qtySelector">
                                    <span class="decreaseQty">
                                        <i class="ri-subtract-line"></i>
                                    </span>
                                    <input type="text" class="qtyValue" value="1" />
                                    <span class="increaseQty">
                                        <i class="ri-add-line"></i>
                                    </span>
                                </div>
                            </div> --}}
                            <a href="https://api.whatsapp.com/send?phone=917001639863" target="_blank" class="btn style1 add-to-cart">Reach Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ptb-100">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs product-tablist" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1"
                                type="button" role="tab">Description</button>
                        </li>
                        {{-- <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_2"
                                type="button" role="tab">Additional Information</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_3" type="button"
                                role="tab">Reviews</button>
                        </li> --}}
                    </ul>
                    <div class="tab-content product-tab-content">
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                            <div class="container">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="product_desc">
                                            {!! $product->description !!}
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        @php
                                                            $productImage = $product->product_images->first();
                                                            @endphp
                                                            <div class="tp-product-details-desc-thumb">
                                                                <img src="{{asset('uploads/product/small/'.$productImage->image)}}"
                                                                    alt="">
                                                            </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        {{-- <div class="tab-pane fade" id="tab_2" role="tabpanel">
                            <ul class="product_features list-style">
                                <li><b>Brand:</b> Maford</li>
                               <li><b>Quantity:</b> 50ml</li>
                               <li><b>Validity :</b> 24 Months</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="tab_3" role="tabpanel">
                            <div class="row gx-5">
                                <div class="col-lg-6">
                                    <div class="client-review comment-item-wrap">
                                        <div class="comment-form-title">
                                            <h4>Product Review</h4>
                                        </div>
                                        <div class="comment-item">
                                            <div class="comment-author-img">
                                                <img src="assets/img/testimonials/client-3.jpg" alt="Image">
                                            </div>
                                            <div class="comment-author-wrap">
                                                <div class="comment-author-info">
                                                    <div class="row align-items-start">
                                                        <div class="comment-author-name">
                                                            <h5>Eliie Andrews</h5>
                                                            <ul class="list-style rating">
                                                                <li><i class="ri-star-fill"></i></li>
                                                                <li><i class="ri-star-fill"></i></li>
                                                                <li><i class="ri-star-fill"></i></li>
                                                                <li><i class="ri-star-fill"></i></li>
                                                                <li><i class="ri-star-fill"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,sed diam nonumy eirmod  tempor invidunt.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-item">
                                            <div class="comment-author-img">
                                                <img src="assets/img/testimonials/client-2.jpg" alt="mage">
                                            </div>
                                            <div class="comment-author-wrap">
                                                <div class="comment-author-info">
                                                    <div class="row align-items-start">
                                                        <div class="comment-author-name">
                                                            <h5>Anne Frank</h5>
                                                            <ul class="list-style rating">
                                                                <li><i class="ri-star-fill"></i></li>
                                                                <li><i class="ri-star-fill"></i></li>
                                                                <li><i class="ri-star-fill"></i></li>
                                                                <li><i class="ri-star-fill"></i></li>
                                                                <li><i class="ri-star-fill"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,sed diam nonumy eirmod  tempor invidunt.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="client-review-form">
                                        <div class="comment-form-title">
                                            <h4>Write Your Comment</h4>
                                        </div>
                                        <form action="#" class="comment-form">
                                            <div class="row gx-3">
                                                <div class="col-lg-6">
                                                    <div class="form-group s1">
                                                        <input type="text" placeholder="Your  Full Name*">
                                                    </div>
                                                    <div class="form-group s2">
                                                        <input type="email" placeholder="Email Address*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <textarea name="review-msg" id="review-msg" cols="30" rows="10" placeholder="Your comments..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="test_1">
                                                        <label for="test_1">
                                                            I Agree with the <a class="link style1" href="terms-of-service.html">Terms &amp; conditions</a>
                                                        </label>
                                                    </div>
                                                    <button class="btn style1 mt-25">SUBMIT REVIEW</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <!-- Product Details section end -->



    @if (!empty($relatedProducts))
     <!-- Product Section Start -->
    <section class="product-wrap pb-50">
        <div class="container ">
            <div class="row mb-40 align-items-center">
                <div class="col-md-8">
                    <div class="section-title style1">
                        <span><img src="{{asset('assets/img/section-img.png')}}" alt="Image">Our Product</span>
                        <h2>Related Products</h2>
                    </div>
                </div>
                <div class="col-md-4 text-md-end sm-none">
                    <a href="{{url('/shop')}}" class="btn style2">View All Products</a>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($relatedProducts as $relProduct)
                @php
                $productImage = $relProduct->product_images->first();
                @endphp
                <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="product-card style2">
                            @if(!empty($productImage->image))
                            <div class="product-img">
                                <img src="{{asset('uploads/product/small/'.$productImage->image)}}" alt="Image">
                                <a href="{{route('front.product',$product->slug)}}" class="btn style2 add-cart">View Details</a>
                            </div>
                            @endif
                            <div class="product-info">
                                <h3><a href="{{route('front.product',$relProduct->slug)}}">{{$relProduct->title}}</a></h3>
                                <p class="price"> ₹
                                    {{$relProduct->price}}
                                    @if ($relProduct->compare_price > 0)
                                    <span class="discount"> {{$relProduct->compare_price}}</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    @endif

</div>
<!-- Content Wrapper End -->

@endsection