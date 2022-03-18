@extends('layouts.master')
@section('content')
<main>
    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center grey-bg-2" data-overlay="dark" data-opacity="7">
        <div class="page__title-bg" data-background="frontend/img/page-title/page-title-1.jpg"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-content mt-100 text-center">
                        <h2>about</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="/about">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- about start -->
    <div class="about-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="ab-wrapper pos-rel">
                        <div class="ab-since">
                            <h4>Since <br> 2016</h4>
                        </div>
                        <div class="row gx-2 mb-30">
                            <div class="col-6">
                                <div class="ab-img img-filter">
                                    <img src="frontend/img/about/mahfuj1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ab-img img-filter">
                                    <img src="frontend/img/about/joy1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ab-img img-filter">
                                    <img src="frontend/img/about/ashikur1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ab-img img-filter">
                                    <img src="frontend/img/about/chandan1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="ab-box pl-50 mb-30">
                        <div class="sec-wrapper">
                            <h5>About Us</h5>
                            <h2 class="section-title">We offer modern software solutions for growing your business.</h2>
                        </div>
                        <div class="ab-item-box mt-40 mb-30">
                            <div class="ab-items fix mb-20">
                                <div class="ab-icon f-left">
                                    <i class="flaticon-honesty"></i>
                                </div>
                                <div class="ab-item-text fix">
                                    <h3 class="ab-item-title">Pleasant Consulting</h3>
                                    <p>We try our best to meet the needs of the clients.</p>
                                </div>
                            </div>
                            <div class="ab-items fix mb-20">
                                <div class="ab-icon f-left">
                                    <i class="flaticon-trustworthy"></i>
                                </div>
                                <div class="ab-item-text fix">
                                    <h3 class="ab-item-title">Trusted Services</h3>
                                    <p>Our experienced development team works efficiently in the search for the most suitable solutions to guarantee the customer, the latest technology and tool for their needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ab-btn">
                                <a href="#" class="tp-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- team details area start -->
    <section class="team__details pt-0 pb-30">
      <div class="container">
            <div class="row">
               <div class="col-xl-10 offset-xl-1">
                  <div class="team__details-info mt-60">
                        <h4 class="wow fadeInUp" data-wow-delay=".4s">What is Webrelu?</h4>
                        <p class="wow fadeInUp" data-wow-delay=".6s">jolly good codswallop what a plonker he nicked it bog-standard porkies gosh the full monty, wind up at public school hanky panky cheeky bugger Richard do one some dodgy chav bite your arm off. Argy-bargy excuse my French brown bread up the duff bleeder fanny around spend a penny barmy bonnet, bubble and squeak brolly bugger no biggie smashing get stuffed mate old lurgy, cup of tea nice one mufty that I knackered some dodgy chav. Say vagabond morish crikey excuse my French bonnet William blatant spend a penny, knackered bite your arm off what a plonker blimey smashing a blinding shot pardon me grub, wind up cracking goal Jeffrey hanky panky are you taking the piss such a fibber hunky-dory.</p>
                        <p class="wow fadeInUp" data-wow-delay=".8s">So I said on your bike mate easy peasy dropped a clanger blow off porkies is fantastic show off show off pick your nose and blow off, faff about bubble and squeak bugger all mate happy days hotpot don't get shirty with me jolly good gormless barmy.</p>

                        <a href="/contact" class="tp-btn mt-10 wow fadeInUp" data-wow-delay="1s">Contact Us</a>
                  </div>
               </div>
            </div>
      </div>
   </section>
   <!-- team details area end -->

    <!-- counter -->
    <section class="counter-wraper pos-rel black-bg pt-120 pb-90" data-overlay="dark" data-opacity="7">
        <div class="fact-bg slider-bg" data-background="frontend/img/slider/slider3.jpg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-3">
                    <div class="single-couter counter-box text-center mb-30 z-index">
                        <div class="fact-icon">
                            <i class="flaticon-group"></i>
                        </div>
                        <h2><span class="counter">5420</span></h2>
                        <h4>Expert Members</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single-couter counter-box text-center mb-30 z-index">
                        <div class="fact-icon">
                            <i class="flaticon-happiness"></i>
                        </div>
                        <h2><span class="counter">1540</span></h2>
                        <h4>Satisfied Clients</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single-couter counter-box text-center mb-30 z-index">
                        <div class="fact-icon">
                            <i class="flaticon-label"></i>
                        </div>
                        <h2><span class="counter">8994</span></h2>
                        <h4>Problem Solve</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single-couter counter-box text-center mb-30 z-index">
                        <div class="fact-icon">
                            <i class="flaticon-badge"></i>
                        </div>
                        <h2><span class="counter">1523</span></h2>
                        <h4>Award Winner</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter -->

    <!-- testimoinial area start -->
    <section class="review-area review-area-padding grey-bgs pt-150 pb-120 pos-rel pl-50 pr-50">
        <div class="wavify-wrapper">
            <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item"
                data-wavify-height="140" data-wavify-background="rgba(245,245,245,0.5)" data-wavify-amplitude="80"
                data-wavify-bones="4">
                <path
                    d="M 0 141.71042689406383 C 237.875 148.50471572578806 237.875 148.50471572578806 475.75 145.107571309926 C 713.625 141.71042689406383 713.625 141.71042689406383 951.5 165.82491752026056 C 1189.375 189.9394081464571 1189.375 189.9394081464571 1427.25 193.5786122514483 C 1665.125 197.21781635643944 1665.125 197.21781635643944 1903 165.82491752026056 L 1903 7389 L 0 7389 Z"
                    fill="rgba(245,245,245,0.5)"></path>
            </svg>

            <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item"
                data-wavify-height="140" data-wavify-background="#f5f5f5" data-wavify-amplitude="80"
                data-wavify-bones="3">
                <path
                    d="M 0 147.22020568980648 C 317.16666666666663 183.65559797623268 317.16666666666663 183.65559797623268 634.3333333333333 165.43790183301957 C 951.4999999999999 147.22020568980648 951.4999999999999 147.22020568980648 1268.6666666666665 200.09089320557024 C 1585.833333333333 252.96158072133412 1585.833333333333 252.96158072133412 1903 183.26276877337258 L 1903 7389 L 0 7389 Z"
                    fill="#f5f5f5"></path>
            </svg>
        </div>
        <div class="container">
            <div class="row mb-40 pt-150 z-index">
                <div class="col-12">
                    <div class="sec-wrapper text-center">
                        <h5>Testimonials</h5>
                        <h2 class="section-title">Feedback from our clients.</h2>
                    </div>
                </div>
            </div>
            <div class="test-active swiper-container">
                <div class="swiper-wrapper pb-70">
                    <div class="testi-item swiper-slide">
                        <div class="tptestinimail">
                            <div class="tptestinimail__text">
                                <p>Lorem ipsum dolor sit amet, coning
                                    ctetur adipisicing elit, sed do it on
                                    eiusmod tempor incididunt me
                                    ut labore et dolore.</p>
                            </div>
                            <div class="tptestinimail__author d-sm-flex align-items-center">
                                <div class="tptestinimail__author--img tptestinimail__author--img-2">
                                    <img src="frontend/img/testimonial/client-2.png" alt="">
                                </div>
                                <div class="tptestinimail__author--bio">
                                    <h4>Mr. Habib Hemel</h4>
                                    <h6>HR Admin</h6>
                                </div>
                            </div>
                            <div class="testimonial-quote text-end">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item swiper-slide">
                        <div class="tptestinimail">
                            <div class="tptestinimail__text">
                                <p>Lorem ipsum dolor sit amet, coning
                                    ctetur adipisicing elit, sed do it on
                                    eiusmod tempor incididunt me
                                    ut labore et dolore.</p>
                            </div>
                            <div class="tptestinimail__author d-sm-flex align-items-center">
                                <div class="tptestinimail__author--img tptestinimail__author--img-2">
                                    <img src="frontend/img/testimonial/client-3.png" alt="">
                                </div>
                                <div class="tptestinimail__author--bio">
                                    <h4>Mr. Salim Dawn</h4>
                                    <h6>Developer</h6>
                                </div>
                            </div>
                            <div class="testimonial-quote text-end">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item swiper-slide">
                        <div class="tptestinimail">
                            <div class="tptestinimail__text">
                                <p>Lorem ipsum dolor sit amet, coning
                                    ctetur adipisicing elit, sed do it on
                                    eiusmod tempor incididunt me
                                    ut labore et dolore.</p>
                            </div>
                            <div class="tptestinimail__author d-sm-flex align-items-center">
                                <div class="tptestinimail__author--img tptestinimail__author--img-2">
                                    <img src="frontend/img/testimonial/client-4.png" alt="">
                                </div>
                                <div class="tptestinimail__author--bio">
                                    <h4>Mr. Suhan Dol</h4>
                                    <h6>Designer</h6>
                                </div>
                            </div>
                            <div class="testimonial-quote text-end">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item swiper-slide">
                        <div class="tptestinimail">
                            <div class="tptestinimail__text">
                                <p>Lorem ipsum dolor sit amet, coning
                                    ctetur adipisicing elit, sed do it on
                                    eiusmod tempor incididunt me
                                    ut labore et dolore.</p>
                            </div>
                            <div class="tptestinimail__author d-sm-flex align-items-center">
                                <div class="tptestinimail__author--img tptestinimail__author--img-2">
                                    <img src="frontend/img/testimonial/client-5.png" alt="">
                                </div>
                                <div class="tptestinimail__author--bio">
                                    <h4>Mr. Williamson</h4>
                                    <h6>Pure Founder</h6>
                                </div>
                            </div>
                            <div class="testimonial-quote text-end">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item swiper-slide">
                        <div class="tptestinimail">
                            <div class="tptestinimail__text">
                                <p>Lorem ipsum dolor sit amet, coning
                                    ctetur adipisicing elit, sed do it on
                                    eiusmod tempor incididunt me
                                    ut labore et dolore.</p>
                            </div>
                            <div class="tptestinimail__author d-sm-flex align-items-center">
                                <div class="tptestinimail__author--img tptestinimail__author--img-2">
                                    <img src="frontend/img/testimonial/client-1.png" alt="">
                                </div>
                                <div class="tptestinimail__author--bio">
                                    <h4>Mr. Jonota Gilai</h4>
                                    <h6>BDevs Officer</h6>
                                </div>
                            </div>
                            <div class="testimonial-quote text-end">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item swiper-slide">
                        <div class="tptestinimail">
                            <div class="tptestinimail__text">
                                <p>Lorem ipsum dolor sit amet, coning
                                    ctetur adipisicing elit, sed do it on
                                    eiusmod tempor incididunt me
                                    ut labore et dolore.</p>
                            </div>
                            <div class="tptestinimail__author d-sm-flex align-items-center">
                                <div class="tptestinimail__author--img tptestinimail__author--img-2">
                                    <img src="frontend/img/testimonial/client-6.png" alt="">
                                </div>
                                <div class="tptestinimail__author--bio">
                                    <h4>Mr. Shewkh Kamal</h4>
                                    <h6>ThemePure</h6>
                                </div>
                            </div>
                            <div class="testimonial-quote text-end">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- testimoinial area end -->
</main>
@endsection
