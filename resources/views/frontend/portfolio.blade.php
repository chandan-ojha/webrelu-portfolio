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
                         <h2>Our Portfolio</h2>
                         <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                               <li class="breadcrumb-item active" aria-current="page">portfolio</li>
                            </ol>
                         </nav>
                   </div>
                </div>
             </div>
       </div>
    </section>
    <!-- page title area end -->

            <!-- START PORTFOLIO DESIGN AREA -->
   <section class="portfolio-area pt-120">
    <div class="container">
       <div class="row align-items-center mb-50">
          <!-- START PORTFOLIO FILTER AREA -->
          <div class="col-xl-12">
              <div class="text-center">
                  <div class="portfolio-filter">
                      <button class="active" data-filter="*">Show all</button>
                      <button data-filter=".cat1">WordPress</button>
                      <button data-filter=".cat2">Woocommerce</button>
                      <button data-filter=".cat3">Shopify</button>
                      <button data-filter=".cat4">Php Laravel</button>
                  </div>
              </div>
          </div>
          <!-- END PORTFOLIO FILTER AREA -->
      </div>
      <div id="portfolio-grid" class="row row-portfolio">
         <!-- For first catagory -->
       <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat1">
          <div class="tportfolio mb-30">
             <div class="tportfolio__img">
                <a class="popup-image" href="frontend/img/portfolio/p1.jpg" data-fancybox="gallery">
                   <img src="frontend/img/portfolio/p1.jpg" alt="" />
                </a>
                <div class="tportfolio__text tportfolio__text-2">
                   <h3 class="tportfolio-title"><a href="portfolio-details.html">Binifox Busines</a></h3>
                   <h4>Busines, Agency</h4>

                   <div class="portfolio-plus">
                      <a href="frontend/img/portfolio/p1.jpg" data-fancybox="gallery">
                         <i class="fal fa-plus"></i>
                     </a>
                   </div>
                </div>
             </div>
          </div>
      </div>
      <!-- End of first catagory -->
      <!-- Second Catagory -->
      <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2">
          <div class="tportfolio mb-30">
             <div class="tportfolio__img">
                <a class="popup-image" href="frontend/img/portfolio/p2.jpg" data-fancybox="gallery">
                   <img src="frontend/img/portfolio/p2.jpg" alt="" />
                </a>
                <div class="tportfolio__text tportfolio__text-2">
                   <h3 class="tportfolio-title"><a href="portfolio-details.html">Marketing Analysis</a></h3>
                   <h4>Consultation, Idea</h4>
                   <div class="portfolio-plus">
                      <a href="frontend/img/portfolio/p2.jpg" data-fancybox="gallery">
                         <i class="fal fa-plus"></i>
                     </a>
                   </div>
                </div>
             </div>
          </div>
      </div>
      <!-- End of second catagory-->

      <!-- Third catagory-->
      <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3">
          <div class="tportfolio mb-30">
             <div class="tportfolio__img">
                <a class="popup-image" href="frontend/img/portfolio/p3.jpg" data-fancybox="gallery">
                   <img src="frontend/img/portfolio/p3.jpg" alt="" />
                </a>
                <div class="tportfolio__text tportfolio__text-2">
                   <h3 class="tportfolio-title"><a href="portfolio-details.html">Busines Idea</a></h3>
                   <h4>Deaign, Brand</h4>
                   <div class="portfolio-plus">
                      <a href="frontend/img/portfolio/p3.jpg" data-fancybox="gallery">
                         <i class="fal fa-plus"></i>
                     </a>
                   </div>
                </div>
             </div>
          </div>
      </div>
      <!-- 3rd end -->

      <!-- 4th Start-->
      <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat4">
          <div class="tportfolio mb-30">
             <div class="tportfolio__img">
                <a class="popup-image" href="frontend/img/portfolio/p4.jpg" data-fancybox="gallery">
                   <img src="frontend/img/portfolio/p4.jpg" alt="" />
                </a>
                <div class="tportfolio__text tportfolio__text-2">
                   <h3 class="tportfolio-title"><a href="portfolio-details.html">Logo Design</a></h3>
                   <h4>Print, Market</h4>
                   <div class="portfolio-plus">
                      <a href="frontend/img/portfolio/p4.jpg" data-fancybox="gallery">
                         <i class="fal fa-plus"></i>
                     </a>
                   </div>
                </div>     
             </div>
          </div>
      </div>
      <!-- 4th end-->
      </div>
    </div>
    </section>
    <!-- / END PORTFOLIO DESIGN AREA -->

   

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