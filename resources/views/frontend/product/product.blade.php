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
                                <div class="swiper-slide single-product-item">
                                    <img src="assets/img/product/single-product-1.jpg" />
                                </div>
                                <div class="swiper-slide single-product-item">
                                    <img src="assets/img/product/single-product-2.jpg" />
                                </div>
                                <div class="swiper-slide single-product-item">
                                    <img src="assets/img/product/single-product-3.jpg" />
                                </div>
                                <div class="swiper-slide single-product-item">
                                    <img src="assets/img/product/single-product-4.jpg" />
                                </div>
                            </div>
                            <div class="swiper-button-next"><i class="ri-arrow-right-s-line"></i></div>
                            <div class="swiper-button-prev"><i class="ri-arrow-left-s-line"></i></div>
                        </div>
                        <div thumbsSlider="" class="swiper-container single-product-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-product-thumb bg-albastor">
                                    <img src="assets/img/product/single-product-1.jpg" />
                                </div>
                                <div class="swiper-slide single-product-thumb bg-albastor">
                                    <img src="assets/img/product/single-product-2.jpg" />
                                </div>
                                <div class="swiper-slide single-product-thumb bg-albastor">
                                    <img src="assets/img/product/single-product-3.jpg" />
                                </div>
                                <div class="swiper-slide single-product-thumb bg-albastor">
                                    <img src="assets/img/product/single-product-4.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-product-details">
                        <div class="single-product-title">
                            <h2>Malfor CBD Essential</h2>
                            <h3><span>$350</span> <span class="discount">$450</span></h3>
                            <div class="ratings">
                                <ul class="list-style">
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                </ul>
                                <span>(12 customer review)</span>
                            </div>
                        </div>
                        <p class="single-product-desc">
                            On the other hand, we denounce with righteous indignation and dislike men 
                            so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble. 
                        </p>
                        <div class="product-more-option">
                            <div class="product-more-option-item">
                                <h5>Category :</h5>
                                <a href="shop-left-sidebar.html">Cannabies</a>
                            </div>
                            <div class="product-more-option-item">
                                <h5>Product Capacity :</h5>
                                <span>50 ml</span>
                            </div>
                            <div class="product-more-option-item">
                                <h5>Product Code :</h5>
                                <span>AE-009</span>
                            </div>
                            <div class="product-more-option-item">
                                <h5>Availability :</h5>
                                <span>In Stock</span>
                            </div>
                            <div class="product-more-option-item">
                                <h5>Tag :</h5>
                                <a href="shop-left-sidebar.html">Medicine</a>,<a href="shop-left-sidebar.html">Health</a>
                            </div>
                        </div>
                        <div class="product-more-option-item">
                            <div class="product-quantity">
                                <div class="qtySelector">
                                    <span class="decreaseQty">
                                        <i class="ri-subtract-line"></i>
                                    </span>
                                    <input type="text" class="qtyValue" value="1" />
                                    <span class="increaseQty">
                                        <i class="ri-add-line"></i>
                                    </span>
                                </div>
                            </div>
                            <a href="cart.html" class="btn style1 add-to-cart">Add To Cart</a>
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
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_2"
                                type="button" role="tab">Additional Information</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_3" type="button"
                                role="tab">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content product-tab-content">
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                            <div class="product_desc">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occacupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum. </p>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis d repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized bcharms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that.</p>
                                <ul class="content-feature-list style1 list-style mt-15 mb-0">
                                    <li><i class="ri-record-circle-fill"></i>
                                        Lorem ipsum dolor, sit amet.
                                    </li>
                                    <li><i class="ri-record-circle-fill"></i>
                                        Amet consectetur adipisicing elit Officia.
                                    </li>
                                    <li><i class="ri-record-circle-fill"></i>
                                        Aquaerat ipsa quis possimus.
                                    </li>
                                    <li><i class="ri-record-circle-fill"></i>
                                        Lorem aquaerat ipsa quis possimus.
                                    </li>
                                    <li><i class="ri-record-circle-fill"></i>
                                         Consectetur Amet adipisicing elit Officia.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_2" role="tabpanel">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <!-- Product Details section end -->

     <!-- Product Section Start -->
    <section class="product-wrap pb-50">
        <div class="container ">
            <div class="row mb-40 align-items-center">
                <div class="col-md-8">
                    <div class="section-title style1">
                        <span><img src="assets/img/section-img.png" alt="Image">Our Shop</span>
                        <h2>Related Products</h2>
                    </div>
                </div>
                <div class="col-md-4 text-md-end sm-none">
                    <a href="shop-right-sidebar.html" class="btn style2">View All Products</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="product-card style2">
                            <div class="product-img">
                                <img src="assets/img/product/product-1.jpg" alt="Image">
                                <button type="button" class="btn style2 add-cart">Add To Cart</button>
                            </div>
                            <div class="product-info">
                                <h3><a href="shop-details.html">Cannabis Oil</a></h3>
                                <p class="price">$89.00 <span class="discount">$120.00</span></p>
                            </div>
                        </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="product-card style2">
                            <div class="product-img">
                                <img src="assets/img/product/product-2.jpg" alt="Image">
                                <button type="button" class="btn style2 add-cart">Add To Cart</button>
                            </div>
                            <div class="product-info">
                                <h3><a href="shop-details.html">Critical Kush</a></h3>
                                <p class="price">$89.00</p>
                            </div>
                        </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="product-card style2">
                        <div class="product-img">
                            <img src="assets/img/product/product-3.jpg" alt="Image">
                            <button type="button" class="btn style2 add-cart">Add To Cart</button>
                        </div>
                        <div class="product-info">
                            <h3><a href="shop-details.html">Elphabes Bliss</a></h3>
                            <p class="price">$79.00 <span class="discount">$80.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

</div>
<!-- Content Wrapper End -->

@endsection