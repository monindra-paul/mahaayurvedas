@extends('frontend.layout.app')
@section('content')


 <!-- Content Wrapper Start -->
 <div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>About</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/about-us')}}">Home </a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Start -->
    <section class="about-wrap style3 ptb-100">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-wrap">
                        <div class="about-shape-one">
                            <img src="assets/img/about/about-shape-6.png" alt="Iamge" class="bounce">
                        </div>
                        <img src="assets/img/ayurved/about-new.png" alt="Image">
                        <div class="discunt-price">25% <br>off</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="content-title style1 mb-0">
                            <span><img src="assets/img/section-img.png" alt="Image">About Our Dispensary</span>
                            <h2>We assure Safe Diagnosis And Effective Product.</h2>
                            {{-- <h6>All the Lorem Ipsum generators on the Internet tend to repeat defined chunks making this the first true generator on Internet.</h6> --}}
                            <p>Our doctors only prescribe reputed and branded  ayurvedic medicine to the patients.we believe  in quality  products so only branded products are avaliable  in our website .we do not encourage  local products to the patients.The efficacy of the product may vary patient to patient according to their body constitution.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Sectin End -->

    {{-- <!-- Product Category Section Start -->
    <section class="product-cat-wrap pb-75">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <span><img src="assets/img/section-img.png" alt="Image">We're Top Sellers</span>
                <h2>Medical Marijuana Products</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <div class="product-cat-card style1">
                        <span class="count-num">01</span>
                        <div class="product-cat-icon">
                        <i class="flaticon-cbd-oil"></i>
                        </div>
                        <div class="product-cat-info">
                            <h3><a href="shop-details.html">Fresh Cannabies</a></h3>
                            <p>There are many variaties of rem amet consec but the major have suffered alteration in some case amet. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <div class="product-cat-card style1">
                        <span class="count-num">02</span>
                        <div class="product-cat-icon">
                            <i class="flaticon-capsule"></i>
                        </div>
                        <div class="product-cat-info">
                            <h3><a href="shop-details.html">Medical Pills</a></h3>
                            <p>There are many variaties of rem amet consec but the major have suffered alteration in some case amet. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <div class="product-cat-card style1">
                        <span class="count-num">03</span>
                        <div class="product-cat-icon">
                            <i class="flaticon-handbook"></i>
                        </div>
                        <div class="product-cat-info">
                            <h3><a href="shop-details.html">Educational Materials</a></h3>
                            <p>There are many variaties of rem amet consec but the major have suffered alteration in some case amet. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <div class="product-cat-card style1">
                        <span class="count-num">04</span>
                        <div class="product-cat-icon">
                        <i class="flaticon-herbal-1"></i>
                        </div>
                        <div class="product-cat-info">
                            <h3><a href="shop-details.html">Cannabies Infused</a></h3>
                            <p>There are many variaties of rem amet consec but the major have suffered alteration in some case amet. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End --> --}}



    <!-- Team Section Start -->
    <section class="team-wrap  pb-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 mt-5">
                    <div class="section-title style1 text-center mb-40">
                        <span><img src="assets/img/section-img.png" alt="Image">Meet Our Doctors</span>
                        <h2>Led By Experienced Doctors</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                @if(!empty($doctors))
                @foreach($doctors as $doctor)

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="team-card style1">
                        @if($doctor->image !="")
                        <div class="team-img">
                            <img src="{{asset('uploads/doctor/'. $doctor->image)}}" alt="Image">
                            <ul class="social-profile list-style style1">
                                <a href="{{route('front.doctor.show',$doctor->slug)}}" class="btn m-0 p-0">View Details</a>  
                            </ul>
                        </div>
                        @endif
                        <div class="team-info">
                            <h3>{{$doctor->name}}</h3>
                            <span>{{$doctor->designation}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- Team Section End -->




    <!-- Simple Section Start -->
    <section class="simple-wrap pb-100">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 order-lg-1 order-md-2 order-2">
                    <div class="simple-content">
                        <div class="content-title">
                            <span><img src="assets/img/section-img.png" alt="Image">Performance</span>
                            <h2>We Assured Safe Diagnosis And Effective Product</h2>
                            <p>Ayurveda treatment may vary man to man. Thats why Maha Ayurveda can not give you 100% garantee on treatment and suitability of treatments.</p>
                        </div>
                        <div class="progressbar-wrap style2">
                            <div class="progress-bar" data-percentage="100%">
                                <h4 class="progress-title-holder">
                                    <span class="progress-title">Registerd & Certified Doctors</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                        </span>
                                    </span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content">
                                        <div class="amet"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-bar" data-percentage="95%">
                                <h4 class="progress-title-holder clearfix">
                                    <span class="progress-title">Branded & Quality Medicine</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                        </span>
                                    </span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                            <div class="progress-bar" data-percentage="80%">
                                <h4 class="progress-title-holder clearfix">
                                    <span class="progress-title">Follow Up & Doorstep Delivery</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                        </span>
                                    </span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-md-1 order-1">
                    <div class="simple-img-wrap">
                        <img src="assets/img/about/about-img-4.png" alt="Image" class="simple-img-one">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Simple Section End -->

     <!-- CTA  Section Start -->
    <div class="cta-wrap pt-100 pb-100">
        <div class="cta-shape">
            <img src="assets/img/counter-shape-1.png" alt="Image">
        </div>
        <div class="container">
            <div class="counter-card-wrap  pb-75">
                <div class="counter-card">
                    <div class="counter-text">
                        <div class="counter-num">
                            <span class="odometer" data-count="5"></span>
                        </div>
                        <p>Number of Doctors </p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="counter-text">
                        <div class="counter-num">
                            <span class="odometer" data-count="50"></span>
                        </div>
                        <p>Number of Consultation</p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="counter-text">
                        <div class="counter-num">
                            <span class="odometer" data-count="50"></span>
                        </div>
                        <p>Number of Products</p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="counter-text">
                        <div class="counter-num">
                            <span class="odometer" data-count="5000"></span>
                        </div>
                        <p>Visitors in Website</p>
                    </div>
                </div>
            </div>
            <div class="video-wrap bg-f video-bg-3">
                <a class="play-now" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                    <i class="ri-play-fill"></i>
                    <span class="ripple"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->
    
    

 <!-- Testimonial Section Start -->
 <section class="testimonial-wrap ptb-100 bg-albastor">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <span><img src="assets/img/section-img.png" alt="Image">Testimonials</span>
            <h2>What Our Patient Say About Us</h2>
        </div>
        <div class="testimonial-slider-one owl-carousel">
            <div class="testimonial-card style3">
                <p class="client-quote">I was suffering from pain incdf muscle just below the knee joint due to popletcal cyst. But after getting ayurveda treatment from Dr. Niladri Bose I am now 100% recovered from that situation. Thanks to Dr. Niladri Bose & Maha Ayurveda. .</p>
                <div class="client-info-area">
                    <div class="client-info-wrap">
                        <div class="client-img">
                            <img src="{{asset('assets/img/ayurved/rama-saha.jpeg')}}" alt="Image">
                        </div>
                        <div class="client-info">
                            <h3>Rama Saha</h3>
                            <span>Patipukur</span>
                        </div>
                    </div>
                    <div class="quote-icon">
                        <i class="flaticon-right-quote-sign"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-card style3">
                <p class="client-quote">I have been suffering from recurrent tonsillitis since last few years. But with help of Ayurveda treatment under guidance of Dr. Niladri Bose now I am very much fine, & my pain is totally recovered. Thanks to Maha Ayurveda.</p>
                <div class="client-info-area">
                    <div class="client-info-wrap">
                        <div class="client-img">
                            <img src="{{asset('assets/img/ayurved/re-pic.webp')}}" alt="Image">
                        </div>
                        <div class="client-info">
                            <h3>Moumita Saha</h3>
                            <span>Kolkata</span>
                        </div>
                    </div>
                    <div class="quote-icon">
                        <i class="flaticon-right-quote-sign"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-card style3">
                <p class="client-quote">আমি বহুদিন ধরে অণ্ডকোষ জনিত সমস্যায় ভুগছিলাম, হাঁটা চলা করতে সমস্যা হত  এবং ব্যাথা অনুভব করতাম। আয়ুর্বেদ চিকিৎসার পর থেকে আমি এখন হাঁটা চলা করতে পারি ও ব্যাথা পাওয়া থেকে মুক্তি পেয়েছি ।</p>
                <div class="client-info-area">
                    <div class="client-info-wrap">
                        <div class="client-img">
                            <img src="{{asset('assets/img/ayurved/re-pic.webp')}}" alt="Image">
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
            
        </div>
    </div>
</section>  
<!-- Testimonial Section End -->

  

</div>
<!-- Content Wrapper End -->

@endsection