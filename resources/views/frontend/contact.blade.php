@extends('layouts.master')
@section('content')
<main>
    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center grey-bg-2" data-overlay="dark" data-opacity="7">
       <div class="page__title-bg" data-background="assets/img/page-title/page-title-1.jpg"></div>
       <div class="container">
             <div class="row">
                <div class="col-xl-12">
                   <div class="page__title-content mt-100 text-center">
                         <h2>contact</h2>
                         <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                               <li class="breadcrumb-item active" aria-current="page">contact</li>
                            </ol>
                         </nav>
                   </div>
                </div>
             </div>
       </div>
    </section>
    <!-- page title area end -->

    <!-- contact area  -->
    <section class="contact-area pt-120 pb-80 fix">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-6">
                <div class="section-title-wrapper mb-15">
                    <h5 class="section-subtitle mb-20">contact with us</h5>
                    <h2 class="section-title">Speak with our
                        consultant</h2>
                </div>
                <div class="contact-info mr-50 mr-xs-0  mr-md-0">
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-info-icon">
                            <a href="#"><i class="fad fa-comments"></i></a>
                        </div>
                        <div class="contact-info-text mt-10">
                            <span>Call Anytime</span>
                            <h5><a href="tell:926668880000">92 666 888 0000</a></h5>
                        </div>
                    </div>
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-info-icon">
                            <a href="#"><i class="fal fa-envelope"></i></a>
                        </div>
                        <div class="contact-info-text mt-10">
                            <span>send email</span>
                            <h5><a href="https://themepure.net/cdn-cgi/l/email-protection#412f24242529242d3101222e2c31202f386f222e2c"><span class="__cf_email__" data-cfemail="7e101b1b1a161b120e3e1d11130e1f1007501d1113">[email&#160;protected]</span></a> </h5>
                        </div>
                    </div>
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-info-icon">
                            <a href="#"><i class="fal fa-map-marker-alt"></i></a>
                        </div>
                        <div class="contact-info-text mt-10">
                            <span>visit office</span>
                            <h5><a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">86 Road Broklyn Street, New York</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-6">
                <div class="contact-form">
                    <form action="https://themepure.net/template/binifox/mail.php" id="contact-form" method="POST">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                <input name="name" type="text" placeholder="Your Name">
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                <input name="email" type="email" placeholder="Email Adress">
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                <input name="phone" type="text" placeholder="Phone">
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                <input name="subject" type="text" placeholder="Subject">
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 mb-20">
                                <textarea placeholder="Write Massage" name="massage"></textarea>
                            </div>
                            <div class="col-xxl-12 col-xl-12 mb-20">
                                <button type="submit" class="tp-btn">Send a message</button>
                            </div>
                        </div>
                    </form>
                    <p class="ajax-response"></p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- contact area end -->
    
    

      <!-- quality area start here -->
      <section class="quality-area pt-120 pb-90 fix">
        <div class="container">
           <div class="row align-items-center">
              <div class="col-lg-8 col-md-9">
                    <div class="kquality mb-30 aos-init aos-animate" data-aos="zoom-in-right">
                       <div class="kquality-icon">
                          <i class="flaticon-ecommerce"></i>
                       </div>
                       <div class="kquality-text fix">
                          <h3 class="mb-20 kquality-text-title">We Deliver the Best Quality</h3>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some form, by injected humour words.</p>
                       </div>
                    </div>
              </div>
              <div class="col-lg-4 col-md-3">
                    <div class="text-lg-end mb-30 aos-init aos-animate" data-aos="zoom-in-left">
                       <div class="kquality-img">
                          <img src="frontend/img/logo/blacklogo.png" class="img-fluid" alt="cta-img">
                       </div>
                    </div>
              </div>
           </div>
        </div>
     </section>
     <!-- quality area start here -->

 </main>
@endsection