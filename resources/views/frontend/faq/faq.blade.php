@extends('frontend.layout.app')
@section('content')


  <!-- Content Wrapper Start -->
  <div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-5">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Frequently Asked Questions</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>FAQ</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- FAQ Section start -->
    <section class="faq-wrap ptb-100">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-10 offset-xl-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <span>
                                        <i class="flaticon-plus plus"></i>
                                        <i class="flaticon-minus-sign"></i>
                                    </span>
                                  How to Book an Appointment & Payment?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="single-product-text">
                                         <p>Click on the Book an Appointment option in menu or directly click on the home page button, after click please fill the form with your valid data & submit the form. After submitting the form we will call you or whatsapp you as your given mobile number, there have your details and a UPI Id, please pay the requested ammout to confirm your booking. After payment please share the payment screenshot or the transection id to the Maha Ayurvedas whatsapp.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <span>
                                        <i class="flaticon-plus plus"></i>
                                        <i class="flaticon-minus-sign"></i>
                                    </span>
                                    How to get door step medicine?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse "
                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Every product has a reach us button which land you directly to our whatsapp number. Order there any product with your name, mobile number and your full address at one click . The product has send to you through our courier partner or by the Indian Post</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    <span>
                                        <i class="flaticon-plus plus"></i>
                                        <i class="flaticon-minus-sign"></i>
                                    </span>
                                    Our Partners
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We have a highly qualified doctors.</p>
                                    <ul><b><u>Our Doctors</u></b>
                                        <li>
                                            Dr. Niladri Bose
                                        </li>
                                        <li>
                                            Dr. Abhishek Chakraborty
                                        </li>
                                        <li>
                                            Dr. SANGEETA MAITY
                                        </li>
                                    </ul>
                                    <ul><b><u>Pharmacist</u></b>
                                        <li>
                                            Mr. Rahul Sardar (D.Pharm)
                                        </li>
                                        
                                    </ul>
                                    <ul><b><u>Adviser</u></b>
                                        <li>
                                            Mr. Joydeb Adhikary
                                        </li>
                                        
                                    </ul>
                                    <ul><b><u>Partners</u></b>
                                        <li>
                                           <b> Dhanalaxmi Ayurved: </b> Mr. Sambhu Sarkar
                                        </li>
                                        <li>
                                           <b> Maha Debarghya Ayurved: </b> Mr. Ashis Das
                                        </li>                                        
                                    </ul>
                                    <ul><b><u>Technical Support</u></b>
                                        <li>
                                           <b> Graphic Designer: </b> Mr. Shubham Paul
                                        </li>
                                        <li>
                                           <b> Website Developmet: </b> Mr. Monindra Paul
                                        </li>                                        
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section end -->

   

</div>
<!-- Content Wrapper End -->


@endsection