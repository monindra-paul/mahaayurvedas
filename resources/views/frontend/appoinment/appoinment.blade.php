@extends('frontend.layout.app')
@section('content')


<!-- Breadcrumb Start -->
      <div class="breadcrumb-wrap bg-f br-1 mt-5 pt-5">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Book Appointment</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="index.html">Home </a></li>
                    <li>Book Appointment</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<div class="cta-wrap pt-100 pb-75">
    
    <div class="cta-shape">
        <img src="assets/img/counter-shape-1.png" alt="Image">
    </div>
    <div class="container">
       
        <div class="row">
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                <div class="apply-form">
                    <div class="content-title style1">
                        <h2>Book Appointment</h2>
                        <p>Ayurveda treatment may vary man to man. Thats why Maha Ayurveda can not give you 100% garantee on treatment and suitability of treatments.</p>
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

                       
                        <div class="form-group">
                            @if ($errors->has('doctor'))
                            <span class="text-danger">{{ $errors->first('doctor') }}</span>
                            @endif                            
                            <select class="form-select form-select-md" name="doctor" id="doctor" aria-label=".form-select-md example">
                                <option selected >Select Doctor</option>
                                 @if(!empty($doctors))
                                     @foreach($doctors as $doctor)
                                        <option value="{{$doctor->name}}">{{$doctor->name}}</option>                             
                                    @endforeach
                                 @endif
                            </select>                            
                        </div>
                        <div class="form-group">
                            @if ($errors->has('language'))
                            <span class="text-danger">{{ $errors->first('language') }}</span>
                            @endif                            
                            <select class="form-select form-select-md" name="language" id="language" aria-label=".form-select-md example">
                                <option selected >Select Your Prefarable Language</option>
                                
                                        <option value="Bengali">Bengali</option>                             
                                        <option value="Hindi">Hindi</option>                             
                                        <option value="English">English</option>                             
                                   
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

                       
                        <div class="form-group">
                            <input type="datetime-local" name="date" id="date" placeholder="Age">
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" id="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="text" name="message" id="message" placeholder="Your Problem">
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
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="video-wrap bg-f style2 video-bg-2">
                    <a class="play-now" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                        <i class="ri-play-fill"></i>
                        <span class="ripple"></span>
                    </a>
                </div>
            </div>
           
        </div>

        {{-- <div class="counter-card-wrap  pb-75">
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
        </div> --}}
        
    </div>
</div>
<!-- CTA Section End -->

@endsection