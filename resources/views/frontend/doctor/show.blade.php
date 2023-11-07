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
                   
                     @if(!empty($doctors->image))
                    <div class="team-details-image">
                        <img src="{{asset('uploads/doctor/'.$doctors->image)}}" alt="image">
                    </div>
                    @endif

                </div>
                @if(!empty($doctors))
                <div class="col-lg-6 col-md-12">
                    <div class="team-desc">
                       <div class="team-name">
                        <h2>{{$doctors->name}}</h2>
                        <span>{{$doctors->designation}}</span>
                       </div>
                        <p>{!! $doctors->about !!}</p>
                        
                        <h4>
                            <span>₹ {{$doctors->price}}</span> 
                            @if($doctors->compare_price > 0)
                            <s><span class="discount">₹ {{$doctors->compare_price}}</span></s>
                            @endif
                        </h4>
                        <ul class="social-profile style3 list-style">
                            <a href="{{route('index.appoinment')}}" class="btn style2 add-cart">Book Appointment</a>
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