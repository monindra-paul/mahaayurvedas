@extends('frontend.layout.app')
@section('content')

 <!-- Content Wrapper Start -->
 <div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-5">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Our Team</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="index.html">Home </a></li>
                    <li>Team</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Speaker Details Start -->
    <section class="team-details-area ptb-100">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 col-md-12">
                    {{-- @php
                    $doctorImage = $doctors->doctor_images->first();
                    @endphp
                     @if(!empty($doctorImage->image))
                    <div class="team-details-image">
                        <img src="{{asset('uploads/doctor/'.$doctorImage->image)}}" alt="image">
                    </div>
                    @endif --}}

                </div>
                @if(!empty($doctors))
                <div class="col-lg-6 col-md-12">
                    <div class="team-desc">
                       <div class="team-name">
                        <h2>{{$doctors->name}}</h2>
                        <span>{{$doctors->designation}}</span>
                       </div>
                        <p>{!! $doctors->about !!}</p>
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
                @endif
               
            </div>
        </div>
    </section>
    <!-- Speaker Details End -->

  

</div>
<!-- Content Wrapper End -->


@endsection