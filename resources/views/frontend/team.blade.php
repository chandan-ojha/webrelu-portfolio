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
                         <h2>team</h2>
                         <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                               <li class="breadcrumb-item active" aria-current="page">team</li>
                            </ol>
                         </nav>
                   </div>
                </div>
             </div>
       </div>
    </section>
<!-- page title area end -->


<!-- team  -->
<div class="team-area pt-120 pb-90">
    <div class="container">
        <div class="row mb-60">
            <div class="col-12">
                <div class="sec-wrapper text-center">
                    <h5>Our Team</h5>
                    <h2 class="section-title">Expert Members.</h2>
                </div>
            </div>
        </div>
        <div class="rows">
            <div class="team-active swiper-container pb-30">
                <div class="swiper-wrapper">
                    <!-- Start enter team member-->
                      @foreach($members as $member)
                            <div class="team-item swiper-slide">
                                <div class="tpteam text-center mb-30">
                                    <div class="tpteam__img">
                                        <img src="{{ asset($member->image) }}" alt="">
                                        <div class="tpteam__social">
                                            <a href="{{ $member->facebook }}" target="_blank" ><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{ $member->twitter }}" target="_blank" ><i class="fab fa-twitter"></i></a>
                                            <a href="{{ $member->linkedin }}" target="_blank" ><i class="fab fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="tpteam__text">
                                        <h3 class="tpteam-title"><a href="#">{{ $member->name }}</a></h3>
                                        <h5>{{ $member->designation }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    <!-- Team member end then new other-->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination team-pagination"></div>
            </div>
        </div>
    </div>
</div>
<!-- team  -->
    
<!-- counter -->
<section class="cta-area cta-overlay pos-rel black-bg pt-120 pb-120" data-overlay="dark" data-opacity="7">
    <div class="fact-bg slider-bg" data-background="frontend/img/slider/slider2.jpg"></div>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-xl-8 col-lg-10">
                <div class="single-couter counter-box mb-30 z-index d-none">
                    <div class="fact-icon">
                        <i class="flaticon-airplane"></i>
                    </div>
                </div>
                <div class="sec-wrapper z-index">
                    <h5>Get to Know WebRelu</h5>
                    <h2 class="section-title text-white">Do you have any question? Feel free to contact us.</h2>
                    <div class="ab-btn mt-30">
                        <a href="/contact" class="tp-btn">
                      Contact Us
                      <div class="tp-bg">
                         <div></div>
                         <div></div>
                         <div></div>
                       </div>
                   </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- counter -->
 </main>
@endsection