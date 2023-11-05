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
                <span><img src="assets/img/section-img.png" alt="Image">Local Store</span>
                <h2>Looking For Our Local Store</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <img src="{{asset('assets/img/shape-6.png')}}" alt="Image" class="contact-shape">
                        <h3>Address 1</h3>
                        <ul class="contact-info list-style">
                            <li><i class="flaticon-pin"></i><p>1576 Gordon Street, Etihad, Georgia</p></li>
                            <li><i class="flaticon-call-1"></i><a href="tel:9094630378">909-463-0378</a></li>
                            <li><i class="flaticon-email-2"></i><a href="mailto:info@muva.com">info@muva.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <img src="assets/img/shape-6.png" alt="Image" class="contact-shape">
                        <h3>Address 2</h3>
                        <ul class="contact-info list-style">
                            <li><i class="flaticon-pin"></i><p>945 Ocala Street, Orlando , Florida</p></li>
                            <li><i class="flaticon-call-1"></i><a href="tel:4074386389">407-438-6389</a></li>
                            <li><i class="flaticon-email-2"></i><a href="mailto:hello@muva.com">hello@muva.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <img src="assets/img/shape-6.png" alt="Image" class="contact-shape">
                        <h3>Address 3</h3>
                        <ul class="contact-info list-style">
                            <li><i class="flaticon-pin"></i><p>4674 Jarvis Street, Buffalo , New York</p></li>
                            <li><i class="flaticon-call-1"></i><a href="tel:7164357147">716-435-7147</a></li>
                            <li><i class="flaticon-email-2"></i><a href="mailto:info@muva.com">info@muva.com</a></li>
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
                                <div class="col-md-6 col-sm-6">
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
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd">
        </iframe>
    </div>
    <!-- Map End -->

</div>
<!-- Content Wrapper End -->

@endsection