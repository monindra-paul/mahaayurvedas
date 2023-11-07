@extends('frontend.layout.app')
@section('content')


 <!-- Hero Section Start -->
{{-- <section class="hero-wrap style2">
    <img src="assets/img/hero/hero-shape-5.png" alt="Image" class="hero-shape-one bounce">
    <img src="assets/img/hero/hero-shape-6.png" alt="Image" class="hero-shape-two moveVertical">
    <img src="assets/img/hero/hero-shape-7.png" alt="Image" class="hero-shape-three animationFramesTwo">
    <img src="assets/img/hero/hero-shape-8.png" alt="Image" class="hero-shape-four">
    <img src="assets/img/hero/wave-5.png" alt="Image" class="hero-shape-five">
    <div class="hero-slider-one owl-carousel" data-slider-id="1">
        <div class="hero-slide-item" data-dot="<button>01</button>">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-md-6">
                        <div class="hero-img-wrap">
                            <img src="assets/img/hero/hero-slide-1.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hero-content">
                            <h1>Medical Cannabies As Pain Reliever</h1>
                            <p>Ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old richer.</p>
                            <a href="shop-right-sidebar.html" class="btn style2">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide-item" data-dot="<button>02</button>">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="hero-img-wrap">
                            <img src="assets/img/hero/hero-slide-2.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1>High Quality CBD Oil For Heart</h1>
                            <p>Ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old richer.</p>
                            <a href="shop-right-sidebar.html" class="btn style2">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide-item" data-dot="<button>03</button>">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="hero-img-wrap">
                            <img src="assets/img/hero/hero-slide-3.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1>CBD Facial Serum For Anti-Aging</h1>
                            <p>Ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old richer.</p>
                            <a href="shop-right-sidebar.html" class="btn style2">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End --> --}}  





  <!-- Hero Section Start -->
  <section class="hero-wrap style3">
    <img src="{{asset('assets/img/hero/hero-shape-9.png')}}" alt="Image" class="hero-shape-one moveHorizontal">
    <img src="{{asset('assets/img/hero/hero-shape-10.png')}}" alt="Image" class="hero-shape-two moveVertical">
    <img src="{{asset('assets/img/hero/hero-shape-11.png')}}" alt="Image" class="hero-shape-three">
    <div class="container">
       <div class="row">
           <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
            <div class="hero-content">
                <h1 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">Welcome to Maha Ayurvedas</h1>
                <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">Ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard</p>
                <a href="{{url('/shop')}}" class="btn style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">Shop Now</a>
            </div>
           </div>
       </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Slider Start -->
<div class="product-slider-wrap">
    <div class="container">
        <div class="product-slider-one owl-carousel">
            <div class="product-card style4">
                <div class="product-img">
                    <img src="{{asset('assets/img/product/product-13.jpg')}}" alt="Image">
                    {{-- <button type="button" class="btn style2 add-cart">Add To Cart</button> --}}
                </div>
                
            </div>
            <div class="product-card style4">
                <div class="product-img">
                    <img src="{{asset('assets/img/product/product-14.jpg')}}" alt="Image">
                    {{-- <button type="button" class="btn style2 add-cart">Add To Cart</button> --}}
                </div>
                {{-- <div class="product-info-wrap">
                   <div class="product-info">
                        <h3><a href="shop-details.html">CBD Seeds</a></h3>
                        <p class="price">$89.00 <span class="discount">$189.00</span></p>
                   </div>
                   <a href="shop-right-sidebar.html" class="btn style1">Shop Now</a>
                </div> --}}
            </div>
            <div class="product-card style4">
                <div class="product-img">
                    <img src="{{asset('assets/img/product/product-15.jpg')}}" alt="Image">
                    {{-- <button type="button" class="btn style2 add-cart">Add To Cart</button> --}}
                </div>
                {{-- <div class="product-info-wrap">
                   <div class="product-info">
                        <h3><a href="shop-details.html">Cannabis Oil</a></h3>
                        <p class="price">$89.00 <span class="discount">$120.00</span></p>
                   </div>
                   <a href="shop-right-sidebar.html" class="btn style1">Shop Now</a>
                </div> --}}
            </div>
            <div class="product-card style4">
                <div class="product-img">
                    <img src="{{asset('assets/img/product/product-16.jpg')}}" alt="Image">
                    {{-- <button type="button" class="btn style2 add-cart">Add To Cart</button> --}}
                </div>
                {{-- <div class="product-info-wrap">
                   <div class="product-info">
                        <h3><a href="shop-details.html">Cannabis Gummy</a></h3>
                        <p class="price">$89.00 </p>
                   </div>
                   <a href="shop-right-sidebar.html" class="btn style1">Shop Now</a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Product Slider End -->





<!-- Product Category Section Start -->
<section class="product-cat-wrap ptb-100">
    <img src="{{asset('assets/img/category/cat-shape-1.png')}}" alt="Image" class="cat-shape-one animationFramesTwo">
    <img src="{{asset('assets/img/category/cat-shape-2.png')}}" alt="Image" class="cat-shape-two bounce sm-none">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="section-title style1 text-center  mb-40">
                    <span><img src="{{asset('assets/img/section-img.png')}}" alt="Image">Categories</span>
                    <h2>Popular Categories</h2>
                </div>
            </div>
        </div>
        <div class="cat-slider-one owl-carousel">

            @if(!empty($lim_cats))
            @foreach ($lim_cats as $lim_cat)
            <div class="cat-card">
                @if(!empty($lim_cat->image !=""))               
                <div class="cat-img">
                    <img src="{{asset('uploads/category/thumb/'. $lim_cat->image)}}" alt="Image">
                </div>
               
                @endif
                <a class="cat-info" href="{{route('front.shop',$lim_cat->slug)}}">{{$lim_cat->name}}</a>
            </div>
            @endforeach
            @endif
            

            {{-- <div class="cat-card">
                <div class="cat-img">
                    <img src="assets/img/category/cat-2.jpg" alt="Image">
                </div>
                <a class="cat-info" href="shop-right-sidebar.html">CBD</a>
            </div>
            <div class="cat-card">
                <div class="cat-img">
                    <img src="assets/img/category/cat-3.jpg" alt="Image">
                </div>
                <a class="cat-info" href="shop-right-sidebar.html">Edibles</a>
            </div>
            <div class="cat-card">
                <div class="cat-img">
                    <img src="assets/img/category/cat-4.jpg" alt="Image">
                </div>
                <a class="cat-info" href="shop-right-sidebar.html">Concentrats</a>
            </div>
            <div class="cat-card">
                <div class="cat-img">
                    <img src="assets/img/category/cat-5.jpg" alt="Image">
                </div>
                   <a class="cat-info" href="shop-right-sidebar.html">CBD Capsule</a>
            </div> --}}
        </div>
    </div>
</section>
<!-- Product Section End -->











<section class="benefit-wrap style2 ptb-100">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <span><img src="assets/img/section-img.png" alt="Image">Benefits of Ayurveda</span>
            <h2>Why Ayurveda?</h2>
        </div>
        <div class="row gx-5">
            <div class="col-lg-3">
                <div class="benefit-card style1">
                    <h3>Natural Treatment</h3>
                     <p>Provide all natural treatment based on home science</p>
                </div>
                <div class="benefit-card style1">
                    <h3>Minimum Side Effects</h3>
                     <p>Minimum side effects of any cure from natural ayurveda.</p>
                </div>
                <div class="benefit-card style1">
                    <h3>Rejuvinate</h3>
                    <p>Rejuvinate your body and your mind.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefit-img-wrap">
                    <img class="bn-img" src="{{asset('assets/img/ayurved/maha-512.png')}}" alt="Image">
                    <ul class="benefit-list-icon list-style">
                        <li>
                            <img src="assets/img/about/arrow-1.png" alt="Image" class="bn-shape-arrow">
                            <img src=" assets/img/about/shape-1.png" alt="Image" class="bn-shape">
                            <i class="ri-empathize-fill"></i>
                        </li>
                        <li>
                            <img src="assets/img/about/arrow-2.png" alt="Image" class="bn-shape-arrow">
                            <img src=" assets/img/about/shape-2.png" alt="Image" class="bn-shape">
                            <i class="ri-virus-line"></i>
                        </li>
                        <li>
                            <img src="assets/img/about/arrow-3.png" alt="Image" class="bn-shape-arrow">
                            <img src=" assets/img/about/shape-3.png" alt="Image" class="bn-shape">
                            <i class="flaticon-heartbeat"></i>
                        </li>
                        <li>
                            <img src="assets/img/about/arrow-4.png" alt="Image" class="bn-shape-arrow">
                            <img src=" assets/img/about/shape-4.png" alt="Image" class="bn-shape">
                            <i class="flaticon-lungs"></i>
                        </li>
                        <li>
                            <img src="assets/img/about/arrow-5.png" alt="Image" class="bn-shape-arrow">
                            <img src=" assets/img/about/shape-5.png" alt="Image" class="bn-shape">
                            <i class="ri-recycle-line"></i>
                        </li>
                        <li>
                            <img src="assets/img/about/arrow-6.png" alt="Image" class="bn-shape-arrow">
                            <img src=" assets/img/about/shape-6.png" alt="Image" class="bn-shape">
                            <i class="ri-psychotherapy-line"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="benefit-card">
                    <h3>Indian System of Medicine</h3>
                     <p>Steroid free indian system of medicine.</p>
                </div>
                <div class="benefit-card">
                    <h3>Tridosha</h3>
                    <p>Balance your tridosha according to your need.</p>
                </div>
                <div class="benefit-card">
                    <h3>Build your health</h3>
                     <p>Medicine works systematically and build your health.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- About Section Start -->
<section class="about-wrap style2 ptb-100">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-7 order-lg-1 order-md-2 order-2" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
                <div class="about-content">
                    <div class="content-title style1">
                        <span><img src="{{asset('assets/img/section-img.png')}}" alt="Image">About Maha Ayurveda</span>
                        <h2>Our Speciality in Various Filed</h2>
                        <p>Ayurveda treatment may vary man to man. Thats  why Maha Ayurveda can not give you 100% garantee on treatment and suitability of treatments.</p>
                    </div>
                    <ul class="content-feature-list style1 list-style">
                        <li><i class="ri-logout-circle-r-line"></i>Online Video Consulting</li>
                        <li><i class="ri-logout-circle-r-line"></i>Qualified & BAMS Certified Doctors</li>
                        <li><i class="ri-logout-circle-r-line"></i>Door Step Medicine</li>
                        <li><i class="ri-logout-circle-r-line"></i>Steriod Free Treatment</li>
                        <li><i class="ri-logout-circle-r-line"></i>Only Branded & Trusted Medicine Recomended</li>
                        {{-- <li><i class="ri-logout-circle-r-line"></i>Fith Testing</li> --}}
                    </ul>
                    <a href="{{url('/about-us')}}" class="btn style2">Know More</a>
                </div>
            </div>
            <div class="col-lg-5 order-lg-2 order-md-1 order-1" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                <div class="about-img-wrap">
                    <img src="assets/img/about/about-shape-3.png" alt="Image" class="about-shape-one">
                    <img src="assets/img/about/about-shape-4.png" alt="Image" class="about-shape-two">
                    <div class="about-shape-three">
                        <img src="assets/img/about/about-shape-5.png" alt="Image" class="rotate">
                    </div>
                    <img src="assets/img/about/about-img-2.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->


<!-- Benefit Section Start -->
<section class="benefit-wrap pt-100 pb-75 bg-albastor">
    <img src="assets/img/benefit-shape.png" alt="Image" class="benefit-shape-one sm-none">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-xl-6">
                <div class="benefit-img-wrap">
                    <img src="assets/img/about/benefit-1.png" alt="Image">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="benefit-content">
                    <div class="content-title style1">
                        <span><img src="assets/img/section-img.png" alt="Image">Benefit You'll Get</span>
                        <h2>There Are Many Benefits Of Using Medical Cannabies</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="product-cat-card style2">
                                <img class="cat-card-shape" src="assets/img/shape-1.png" alt="Image">
                                <div class="product-cat-icon">
                                    <i class="flaticon-meditation"></i>
                                </div>
                                <div class="product-cat-info">
                                    <h3><a href="shop-right-sidebar.html">Promote Relaxation</a></h3>
                                    <p>There are many variaties of amesum available, but the majority have suffered alteration in some.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="product-cat-card style2">
                                <img class="cat-card-shape" src="assets/img/shape-1.png" alt="Image">
                                <div class="product-cat-icon">
                                    <i class="flaticon-back-1"></i>
                                </div>
                                <div class="product-cat-info">
                                    <h3><a href="shop-right-sidebar.html">Relieves pain</a></h3>
                                    <p>There are many variaties of amesum available, but the majority have suffered alteration in some.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="product-cat-card style2">
                                <img class="cat-card-shape" src="assets/img/shape-1.png" alt="Image">
                                <div class="product-cat-icon">
                                    <i class="flaticon-herbal"></i>
                                </div>
                                <div class="product-cat-info">
                                    <h3><a href="shop-right-sidebar.html">Increase Apetite</a></h3>
                                    <p>There are many variaties of amesum available, but the majority have suffered alteration in some.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="product-cat-card style2">
                                <img class="cat-card-shape" src="assets/img/shape-1.png" alt="Image">
                                <div class="product-cat-icon">
                                <i class="flaticon-massage"></i>
                                </div>
                                <div class="product-cat-info">
                                    <h3><a href="shop-right-sidebar.html">Remove Headache</a></h3>
                                    <p>There are many variaties of amesum available, but the majority have suffered alteration in some.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Benefit Section End -->




<!-- Product Section Start -->
<section class="product-wrap style2 pt-100 bg-albastor">
    <img src="assets/img/wave-2.png" alt="Image" class="wave-one">
    <div class="container pb-75  ">
       <div class="row mb-40 align-items-center">
           <div class="col-md-8">
               <div class="section-title style1">
                    <span><img src="{{asset('assets/img/section-img.png')}}" alt="Image">Our Shop</span>
                    <h2>Our Products</h2>
               </div>
           </div>
           <div class="col-md-4 text-md-end sm-none">
               <a href="{{url('/shop')}}" class="btn style2">View All Products</a>
           </div>
       </div>
       <div class="row justify-content-center">

           @if($products->isNotEmpty())
           @foreach($products as $product)
                    <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                              @php
                              $productImage = $product->product_images->first();
                              @endphp
                            <div class="product-card style2">
                                @if(!empty($productImage->image))
                                <div class="product-img">
                                    <img src="{{asset('uploads/product/small/'.$productImage->image)}}" alt="Image">
                                    <a href="{{route('front.product',$product->slug)}}" class="btn style2 add-cart">View Details</a>
                                </div>
                                @endif
                                <div class="product-info">
                                    <h3><a href="{{route('front.product',$product->slug)}}">{{$product->title}}</a></h3>
                                    <p class="price"> ₹ {{$product->price}} 
                                        @if($product->compare_price > 0)
                                        <span class="discount">₹ {{$product->compare_price}}</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
           
       </div>
       <div class="text-center d-md-none">
           <a href="shop-right-sidebar.html" class="btn style2">View All Products</a>
       </div>
    </div>
</section>
<!-- Product Section End -->


<!-- CTA  Section Start -->
<div class="cta-wrap pt-100 pb-75">
    <div class="cta-shape">
        <img src="assets/img/counter-shape-1.png" alt="Image">
    </div>
    <div class="container">
        <div class="counter-card-wrap  pb-75">
            <div class="counter-card">
                <div class="counter-text">
                    <div class="counter-num">
                        <span class="odometer" data-count="37"></span>
                    </div>
                    <p>Awarded Licenses In Fourteen Atates </p>
                </div>
            </div>
            <div class="counter-card">
                <div class="counter-text">
                    <div class="counter-num">
                        <span class="odometer" data-count="768"></span>
                    </div>
                    <p>Cultivation Space Have been Built</p>
                </div>
            </div>
            <div class="counter-card">
                <div class="counter-text">
                    <div class="counter-num">
                        <span class="odometer" data-count="68"></span>
                    </div>
                    <p>Tons On Sale Product Available</p>
                </div>
            </div>
            <div class="counter-card">
                <div class="counter-text">
                    <div class="counter-num">
                        <span class="odometer" data-count="2389"></span>
                    </div>
                    <p>Percent Growth In The Last Tow Years</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="video-wrap bg-f style2 video-bg-2">
                    <a class="play-now" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                        <i class="ri-play-fill"></i>
                        <span class="ripple"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                <div class="apply-form">
                    <div class="content-title style1">
                        <h2>Apply For Treatment</h2>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
                    </div>
                    <form action="{{url('/')}}" method="post">
                        @csrf

                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Name">
                        </div>

                        @if ($errors->has('mobile'))
                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                        @endif
                        <div class="form-group">
                            <input type="number"  name="mobile" id="mobile" placeholder="Phone">
                        </div>

                       
                        @if ($errors->has('doctor'))
                        <span class="text-danger">{{ $errors->first('doctor') }}</span>
                        @endif                            
                        <div class="form-group">
                            <select class="form-select form-select-md" name="doctor" id="doctor" aria-label=".form-select-sm example">
                                    <option selected>Select Doctor</option>
                                    @if(!empty($doctors))
                                    @foreach($doctors as $doctor)
                                        <option value="{{$doctor->name}}">{{$doctor->name}}</option>                             
                                    @endforeach
                                    @endif
                            </select>                            
                        </div>

                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email">
                        </div>

                        @if ($errors->has('age'))
                        <span class="text-danger">{{ $errors->first('age') }}</span>
                        @endif
                        <div class="form-group">
                            <input type="text" name="age" id="age" placeholder="Age">
                        </div>

                        @if ($errors->has('date'))
                        <span class="text-danger">{{ $errors->first('date') }}</span>
                        @endif
                        <div class="form-group">
                            <input type="datetime-local" name="date" id="date" placeholder="Date & Time">
                        </div>

                        @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                        <div class="form-group">
                            <input type="text" name="address" id="address" placeholder="Address">
                        </div>

                        <div class="form-group">
                            <input type="text" name="message" id="message" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            @if(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                            @endif
                            <button type="submit" class="btn style1 w-100 d-block">Book Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- CTA Section End -->


 <!-- Team Section Start -->
 <section class="team-wrap ptb-100 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="section-title style1 text-center mb-40">
                    <span><img src="assets/img/section-img.png" alt="Image">Meet Our Doctors</span>
                    <h2>Led By Experienced Doctors</h2>
                </div>
            </div>
        </div>
        <div class="team-slider-one owl-carousel">
            @if(!empty($doctors))
            @foreach($doctors as $doctor)
            <div class="team-card style1">
                @if($doctor->image !="")
                <div class="team-img">
                    <img src="{{asset('uploads/doctor/'. $doctor->image)}}" alt="Image">
                    <ul class="social-profile list-style style1">
                        <a href="{{ route('index.appoinment', ['doctor' => $doctor->name]) }}" class="btn m-0 p-0">Book Now</a>
                    </ul>                   
                </div>
                @endif
                <div class="team-info">
                    <h3><a href="author-details.html">{{$doctor->name}}</a></h3>
                    <span>{{$doctor->designation}}</span>
                </div>
            </div>
            @endforeach
            @endif
            
            
        </div>
    </div>
</section>
<!-- Team Section End -->


<!-- Blog Section Start -->
<section class="blog-wrap ptb-100 ">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="section-title style1 text-center mb-40">
                    <span><img src="assets/img/section-img.png" alt="Image">Our blog</span>
                    <h2>Latest News &ap; Articles</h2>
                </div>
            </div>
        </div>
        <div class="blog-slider-one owl-carousel">
            <div class="blog-card style2">
                <div class="blog-img">
                    <img src="assets/img/blog/blog-1.jpg" alt="Image">
                </div>
                <div class="blog-info">
                    <ul class="blog-metainfo  list-style">
                        <li><i class="ri-calendar-2-line"></i><a href="posts-by-date.html">22 Jun, 2022</a></li>
                        <li><i class="ri-chat-3-line"></i>No Comment</li>
                    </ul>
                    <h3><a href="blog-details-right-sidebar.html">How Do I Access A Medical  Cannabis Prescription</a></h3>
                </div>
            </div>
            <div class="blog-card style2">
                <div class="blog-img">
                    <img src="assets/img/blog/blog-2.jpg" alt="Image">
                </div>
                <div class="blog-info">
                    <ul class="blog-metainfo  list-style">
                        <li><i class="ri-calendar-2-line"></i><a href="posts-by-date.html">15 Jun, 2022</a></li>
                        <li><i class="ri-chat-3-line"></i>No Comment</li>
                    </ul>
                    <h3><a href="blog-details-right-sidebar.html">The Use Of Medical Cannabis In  Improving Symptoms</a></h3>
                </div>
            </div>
            <div class="blog-card style2">
                <div class="blog-img">
                    <img src="assets/img/blog/blog-3.jpg" alt="Image">
                </div>
                <div class="blog-info">
                    <ul class="blog-metainfo  list-style">
                        <li><i class="ri-calendar-2-line"></i><a href="posts-by-date.html">16 May, 2022</a></li>
                        <li><i class="ri-chat-3-line"></i>No Comment</li>
                    </ul>
                    <h3><a href="blog-details-right-sidebar.html">A Guide For A More Natural And  Sustainable Beauty Routine</a></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->


 <!-- Testimonial Section Start -->
 <section class="testimonial-wrap ptb-100 bg-albastor">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <span><img src="assets/img/section-img.png" alt="Image">Testimonials</span>
            <h2>What Our Patient Say About Us</h2>
        </div>
        <div class="testimonial-slider-one owl-carousel">
            <div class="testimonial-card style3">
                <p class="client-quote">Occaecati cupiditate non provident simi que sunt in culpa  officia deunt mollitia anim id est laborum et dolorum fuga. Et harum quidem rerum facilis est etour expedita distinctio libero tempore dolor.</p>
                <div class="client-info-area">
                    <div class="client-info-wrap">
                        <div class="client-img">
                            <img src="assets/img/testimonials/client-1.jpg" alt="Image">
                        </div>
                        <div class="client-info">
                            <h3>Jim Morison</h3>
                            <span>Director, BAT</span>
                        </div>
                    </div>
                    <div class="quote-icon">
                        <i class="flaticon-right-quote-sign"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-card style3">
                <p class="client-quote">Occaecati cupiditate non provident simi que sunt in culpa  officia deunt mollitia anim id est laborum et dolorum fuga. Et harum quidem rerum facilis est etour expedita distinctio libero tempore dolor.</p>
                <div class="client-info-area">
                    <div class="client-info-wrap">
                        <div class="client-img">
                            <img src="assets/img/testimonials/client-2.jpg" alt="Image">
                        </div>
                        <div class="client-info">
                            <h3>Alex Cruis</h3>
                            <span>CEO, IBAC</span>
                        </div>
                    </div>
                    <div class="quote-icon">
                        <i class="flaticon-right-quote-sign"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-card style3">
                <p class="client-quote">Occaecati cupiditate non provident simi que sunt in culpa  officia deunt mollitia anim id est laborum et dolorum fuga. Et harum quidem rerum facilis est etour expedita distinctio libero tempore dolor.</p>
                <div class="client-info-area">
                    <div class="client-info-wrap">
                        <div class="client-img">
                            <img src="assets/img/testimonials/client-3.jpg" alt="Image">
                        </div>
                        <div class="client-info">
                            <h3>Tom Haris</h3>
                            <span>Engineer, Olleo</span>
                        </div>
                    </div>
                    <div class="quote-icon">
                        <i class="flaticon-right-quote-sign"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-card style3">
                <p class="client-quote">Occaecati cupiditate non provident simi que sunt in culpa  officia deunt mollitia anim id est laborum et dolorum fuga. Et harum quidem rerum facilis est etour expedita distinctio libero tempore dolor.</p>
                <div class="client-info-area">
                    <div class="client-info-wrap">
                        <div class="client-img">
                            <img src="assets/img/testimonials/client-4.jpg" alt="Image">
                        </div>
                        <div class="client-info">
                            <h3>Harry Jackson</h3>
                            <span>Enterpreneur</span>
                        </div>
                    </div>
                    <div class="quote-icon">
                        <i class="flaticon-right-quote-sign"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-card style3">
                <p class="client-quote">Occaecati cupiditate non provident simi que sunt in culpa  officia deunt mollitia anim id est laborum et dolorum fuga. Et harum quidem rerum facilis est etour expedita distinctio libero tempore dolor.</p>
                <div class="client-info-area">
                    <div class="client-info-wrap">
                        <div class="client-img">
                            <img src="assets/img/testimonials/client-5.jpg" alt="Image">
                        </div>
                        <div class="client-info">
                            <h3>Chris Haris</h3>
                            <span>MD, ITec</span>
                        </div>
                    </div>
                    <div class="quote-icon">
                        <i class="flaticon-right-quote-sign"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
<!-- Testimonial Section End -->

@endsection