@extends('frontend.layout.app')
@section('content')

 <!-- Content Wrapper Start -->
 <div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-5">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Our Doctors</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Doctors</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    {{-- <!-- Speaker Details Start -->
    <section class="team-details-area ptb-100">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="team-details-image">
                        <img src="assets/img/team/single-team.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="team-desc">
                       <div class="team-name">
                        <h2>Donatella Novatti</h2>
                        <span>Founder &amp; Neuro Sergon</span>
                       </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        <p>Officials lpsum dolor sit amet consectetur adipisicing elit. Velit optio iure consequuntur numquam rem et ipsam officiis slias.</p>
                        <img src="assets/img/team/sign.png" alt="Image">
                        <ul class="social-profile style3 list-style">
                            <li>
                                <a target="_blank" href="https://facebook.com">
                                    <i class="ri-facebook-line"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com">
                                    <i class="ri-twitter-line"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://instagram.com">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://linkedin.com">
                                    <i class="ri-linkedin-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Speaker Details End --> --}}

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
                        <h5 class="text-center">
                            <span>Doctor Fee:</span>
                            <span style="color:#ff7b00;">₹ {{$doctor->price}}</span> 
                            @if($doctor->compare_price > 0)
                            <s><span class="discount">₹ {{$doctor->compare_price}}</span></s>
                            @endif
                        </h5>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- Team Section End -->

</div>
<!-- Content Wrapper End -->


@endsection