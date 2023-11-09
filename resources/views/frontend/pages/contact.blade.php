@extends('frontend.layout.app')
@section('content')

 <!-- Content Wrapper Start -->
 <div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-4">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Contact</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Us section Start -->
    <section class="contact-us-wrap pt-100 pb-75">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <span><img src="assets/img/section-img.png" alt="Image">Local Partners</span>
                <h2>Looking For Our Offline Partners</h2>
            </div>
            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <img src="assets/img/shape-6.png" alt="Image" class="contact-shape">
                        <h3>Mahadebarghya Ayurvedic Medicine
                        </h3>
                        <ul class="contact-info list-style">
                            <li><i class="flaticon-pin"></i><p><a target="_blank" href="https://maps.app.goo.gl/pnzuUUF95NNXHus28">Post Office, 110, Sovabazar St, Sovabazar, Hatkhola, Kolkata, West Bengal 700005</a></p></li>
                            <li><i class="flaticon-call-1"></i><a href="tel:+919836432543">+91 98364 32543</a></li>
                            <li><i class="flaticon-email-2"></i><a href="mailto:support@mahaayurvedas.com">support@mahaayurvedas.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <img src="{{asset('assets/img/shape-6.png')}}" alt="Image" class="contact-shape">
                        <h3>Dhana Lakshmi Ayurved Aushadhalay & Ayurvedic Clinic</h3>
                        <ul class="contact-info list-style">
                            <li><i class="flaticon-pin"></i><p><a target="_blank" href="https://maps.app.goo.gl/oGqAAxG2MtnkaLQi7">32, Maslandapur - Tentulia Road, Maslandapur, Kolkata, West Bengal 743289</a></p></li>
                            <li><i class="flaticon-call-1"></i><a href="tel:+919002510058">+91 90025 10058</a></li>
                            <li><i class="flaticon-email-2"></i><a href="mailto:support@mahaayurvedas.com">support@mahaayurvedas.com</a></li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    <!-- Contact Us section End -->

    <!-- Contact Form Start -->
    <section class="contact-form-wrap bg-albastor ptb-100">
        <div class="container">
            <div class="section-title text-center mb-40">
                <span><img src="assets/img/section-img.png" alt="Image">Contact Us</span>
                <h2>Contact Us For Any Query</h2>
            </div>
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="contact-form">
                        <form class="form-wrap" id="contactForm" action="{{url('/contact')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name*" id="name"
                                            required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required
                                            placeholder="Email*" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" required
                                            placeholder="Phone*" data-error="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                    <div class="form-group v1">
                                        <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    @if(session('success'))
                                    <div class="alert alert-success">{{session('success')}}</div>
                                    @endif
                                    <button type="submit" class="btn style1 w-100 d-block" style="color: white">Send Us</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->

    <!-- Map Start -->
    <div class="comp-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117872.90127418302!2d88.27869558175487!3d22.59674397984862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277d9f94b5aa5%3A0x9666bd9569033420!2sMahadebarghya%20Ayurvedic%20Medicine!5e0!3m2!1sen!2sin!4v1699475234024!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Map End -->

</div>
<!-- Content Wrapper End -->

@endsection