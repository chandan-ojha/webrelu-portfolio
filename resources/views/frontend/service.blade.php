@extends('layouts.master')
@section('content')
<main>
    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center" data-overlay="dark" data-opacity="7">
       <div class="page__title-bg" data-background="frontend/img/page-title/page-title-1.jpg"></div>
       <div class="container">
             <div class="row">
                <div class="col-xl-12">
                   <div class="page__title-content mt-100 text-center">
                         <h2>Services</h2>
                         <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                               <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                         </nav>
                   </div>
                </div>
             </div>
       </div>
    </section>
    <!-- page title area end -->

    <!-- services -->
    <div class="main-services grey-bg pt-120 pb-90" data-background="frontend/img/pattern/pt1.png">
       <div class="container">
          <div class="row mb-60">
             <div class="col-12">
                <div class="sec-wrapper text-center">
                   <h5>Features Services</h5>
                   <h2 class="section-title">Explore Our Services.</h2>
                </div>
             </div>
          </div>
          <div class="row text-center">
             <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="mfbox mfbox-white">
                   <div class="mf-shape"></div>
                   <div class="mfbox__icon mb-15">
                      <i class="flaticon-insight"></i>
                   </div>
                   <div class="mfbox__text">
                      <h3 class="mf-title">Web Development</h3>
                      <p>Lorem Ipsum is simply dummy text of free available in market the printing and typesetting industry.</p>   
                   </div>
                   <div class="mf-btn">
                      <a class="squire-btn" href="services-details.html"><i class="fal fa-angle-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="mfbox mfbox-white">
                   <div class="mf-shape"></div>
                   <div class="mfbox__icon mb-15">
                      <i class="flaticon-remarketing"></i>
                   </div>
                   <div class="mfbox__text">
                      <h3 class="mf-title">Web Design</h3>
                      <p>Lorem Ipsum is simply dummy text of free available in market the printing and typesetting industry.</p>   
                   </div>
                   <div class="mf-btn">
                      <a class="squire-btn" href="services-details.html"><i class="fal fa-angle-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="mfbox mfbox-white">
                   <div class="mf-shape"></div>
                   <div class="mfbox__icon mb-15">
                      <i class="flaticon-technical-support"></i>
                   </div>
                   <div class="mfbox__text">
                      <h3 class="mf-title">UI/UX Design</h3>
                      <p>Lorem Ipsum is simply dummy text of free available in market the printing and typesetting industry.</p>   
                   </div>
                   <div class="mf-btn">
                      <a class="squire-btn" href="services-details.html"><i class="fal fa-angle-right"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- services end -->
 
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