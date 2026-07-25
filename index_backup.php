<?php include 'header.php'; ?>
<style>
.gradient-title {
    background: linear-gradient(90deg, #e65c00 0%, #f47c20 40%, #ff9800 70%, #ffc107 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    color: transparent;
    display: inline-block;
}
    .tp-slider-bg{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    overflow:hidden;
    z-index:-1;
}

.slider-video{
    width:100%;
    height:100%;
    object-fit:cover;
}

.tp-slider-overly{
    position:relative;
    overflow:hidden;
}

.tp-slider-overly::before{
    content:"";
    position:absolute;
    inset:0;
    background:rgba(0,0,0,.35);
    z-index:1;
}

.container.z-index-5{
    position:relative;
    z-index:2;
}
.tp-slider-overly::after {
    position: absolute;
    content: "";
    inset: 0;
    background: transparent;
}
/*.tp-slider-overly::after {*/
/*    background-image: none;*/
/*}*/
/*.tp-brand-6-slide-active .swiper-wrapper{*/
/*    transition-timing-function: linear !important;*/
/*}*/

/*.tp-brand-6-slide-active .swiper-slide{*/
/*    width:auto !important;*/
/*}*/

/*.tp-brand-6-item{*/
/*    display:flex;*/
/*    align-items:center;*/
/*    justify-content:center;*/
/*}*/

/*.tp-brand-6-item img{*/
/*    max-height:70px;*/
/*    width:auto;*/
/*    object-fit:contain;*/
/*}*/
</style>

   <main>
   <!-- tp-hero-area-start -->
      <div class="tp-hero-area tp-project-6-lr p-relative body-bg-6">
         <div class="tp-hero-6-slider-wrap tp-rounded-20 fix">      
            <div class="swiper-container tp-hero-6-slider-active h-100">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="tp-hero-6-bg">
                        <div class="tp-hero-6-thumb" data-background="assets/images/banner-image-1-slider.jpg"></div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tp-hero-6-bg">
                        <div class="tp-hero-6-thumb" data-background="assets/images/banner-image-2-slider.jpeg"></div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tp-hero-6-bg">
                        <div class="tp-hero-6-thumb" data-background="assets/images/banner-image-3-slider.jpeg"></div>
                     </div>
                  </div>
                    <div class="swiper-slide">
                     <div class="tp-hero-6-bg">
                        <div class="tp-hero-6-thumb" data-background="assets/images/banner-image-4-slider.jpeg"></div>
                     </div>
                  </div>
                    <div class="swiper-slide">
                     <div class="tp-hero-6-bg">
                        <div class="tp-hero-6-thumb" data-background="assets/images/banner-image-5-slider.jpeg"></div>
                     </div>
                  </div>
                    <div class="swiper-slide">
                     <div class="tp-hero-6-bg">
                        <div class="tp-hero-6-thumb" data-background="assets/images/banner-image-6-slider.jpg"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tp-hero-6-content-wrap">
            <div class="container-fluid container-1580">
               <div class="row">
                  <div class="col-xxl-8 col-xl-8 col-lg-10">
                     <div class="tp-hero-6-content">
<h2 class="tp-hero-6-title gradient-title mb-20 wow tpfadeUp"
    data-wow-duration=".9s"
    data-wow-delay=".3s">
    Reliable Wire Harness Manufacturing &amp; Component Supply Solutions
</h2>

<p class="mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
    CKT delivers high-quality wire harness assemblies, electrical connectors, terminals,
    wires, cables, clips, clamps, tapes, and allied components for automotive, industrial,
    EV, home appliance, medical, and defense applications with a commitment to quality,
    precision, and on-time delivery.
</p>
                       <a class="tp-btn" href="assets/pdf/Chaitra-Konnex-Technology-Company-Brochure.pdf" download>
    <span><i class="fa-solid fa-download me-2"></i>Download Company Profile</span>
</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="tp-hero-6-bottom tp-project-6-lr pt-20 body-bg-6 pb-30">
         <div class="container-fluid p-0">
            <div class="row align-items-center">
               <div class="col-xxl-5 col-xl-3 col-lg-2">
                  <div class="tp-hero-6-pagenation ml-150 mb-30 d-flex wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <button class="tp-hero-6-prev">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M13 7H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </button>
                     <button class="tp-hero-6-next">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 7H13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </button>
                  </div>
               </div>
           
            </div>
         </div>
      </div>
      <!-- tp-hero-area-end -->
      <!-- hero area start -->
      <div class="tp-slider-area z-index p-relative d-none">
         <div class="tp-slider-arrow-box">
            <button class="slider-prev">
               <i class="fa-regular fa-arrow-left-long"></i>
            </button>
            <button class="slider-next active">
               <i class="fa-regular fa-arrow-right-long"></i>
            </button>
         </div>
         <div class="tp-slider-wrapper">
            <div class="swiper-container tp-slider-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="tp-slider-height tp-slider-overly">
                        <div class="tp-slider-shape-2 d-none d-xl-block">
                           <img src="assets/img/hero/bg-1-2.png" alt="" loading="lazy">
                        </div>
                        <div class="tp-slider-shape-3 d-none d-md-block">
                           <img src="assets/img/hero/bg-1-3.png" alt="" loading="lazy">
                        </div>
                        <div class="tp-slider-bg" data-background="assets/images/banner-image-1-slider.jpg"></div>
                        <div class="container z-index-5 ">
                           <div class="row">
                              <div class="col-xl-8 col-lg-8">
                                 <div class="tp-slider-content">
                                    <div class="tp-slider-title-box">
    <h1 class="tp-slider-title">
        Precision <br>
        Wire Harness & <br>
        Interconnect <span>Solutions</span>
    </h1>
</div>

<div class="tp-slider-text">
    <p>
        Chaitra Konnex Technology (CKT) delivers high-quality wire harness assemblies and
        custom interconnect solutions for automotive, industrial, electrical, and electronic
        applications with precision, reliability, and innovation.
    </p>
    <a class="tp-btn" href="assets/pdf/Chaitra-Konnex-Technology-Company-Brochure.pdf" download>
    <span><i class="fa-solid fa-download me-2"></i>Download Company Brochure</span>
</a>
    <!--<a class="tp-btn" href="about-us.php">-->
    <!--    <span>Discover More</span>-->
    <!--</a>-->
</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                        <div class="swiper-slide">
                     <div class="tp-slider-height tp-slider-overly">
                        <div class="tp-slider-shape-2 d-none d-xl-block">
                           <img src="assets/img/hero/bg-1-2.png" alt="" loading="lazy">
                        </div>
                        <div class="tp-slider-shape-3 d-none d-md-block">
                           <img src="assets/img/hero/bg-1-3.png" alt="" loading="lazy">
                        </div>
                        <div class="tp-slider-bg" data-background="assets/images/banner-image-1-slider.jpg"></div>
                        <div class="container z-index-5 ">
                           <div class="row">
                              <div class="col-xl-8 col-lg-8">
                                 <div class="tp-slider-content">
                                    <div class="tp-slider-title-box">
    <h1 class="tp-slider-title">
        Precision <br>
        Wire Harness & <br>
        Interconnect <span>Solutions</span>
    </h1>
</div>

<div class="tp-slider-text">
    <p>
        Chaitra Konnex Technology (CKT) delivers high-quality wire harness assemblies and
        custom interconnect solutions for automotive, industrial, electrical, and electronic
        applications with precision, reliability, and innovation.
    </p>
    <a class="tp-btn" href="assets/pdf/Chaitra-Konnex-Technology-Company-Brochure.pdf" download>
    <span><i class="fa-solid fa-download me-2"></i>Download Company Brochure</span>
</a>
    <!--<a class="tp-btn" href="about-us.php">-->
    <!--    <span>Discover More</span>-->
    <!--</a>-->
</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide d-none">
                     <div class="tp-slider-height tp-slider-overly">
                        <div class="tp-slider-shape-2 d-none d-xl-block">
                           <img src="assets/img/hero/bg-1-2.png" alt="" loading="lazy">
                        </div>
                        <div class="tp-slider-shape-3 d-none d-md-block">
                           <img src="assets/img/hero/bg-1-3.png" alt="" loading="lazy">
                        </div>
                          <div class="tp-slider-bg">
    <video class="slider-video" autoplay muted loop playsinline>
        <source src="assets/videos/ckt-banner-gif.mov" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
                          <!--<div class="tp-slider-bg" data-background="assets/images/slider-1-1.webp"></div>-->
                        <div class="container z-index-5">
                           <div class="row">
                              <div class="col-xl-8 col-lg-8">
                                 <div class="tp-slider-content z-index-5">
                                    <div class="tp-slider-title-box">
    <h1 class="tp-slider-title">
        Engineering <br>
        Excellence <br>
        <span>Everyday</span>
    </h1>
</div>

<div class="tp-slider-text">
    <p>
        We transform ideas into high-quality products with expertise in wire harnesses,
        industrial manufacturing, painting, and customized engineering solutions.
    </p>
   <a class="tp-btn" href="assets/pdf/Chaitra-Konnex-Technology-Company-Brochure.pdf" download>
    <span><i class="fa-solid fa-download me-2"></i>Download Company Brochure</span>
</a>
</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide d-none">
                     <div class="tp-slider-height tp-slider-overly">
                        <div class="tp-slider-shape-2 d-none d-xl-block">
                           <img src="assets/img/hero/bg-1-2.png" alt="" loading="lazy">
                        </div>
                        <div class="tp-slider-shape-3 d-none d-md-block">
                           <img src="assets/img/hero/bg-1-3.png" alt="" loading="lazy">
                        </div>
<!--                                       <div class="tp-slider-bg">-->
<!--    <video class="slider-video" autoplay muted loop playsinline>-->
<!--        <source src="assets/videos/banner-slider.mp4" type="video/mp4">-->
<!--        Your browser does not support the video tag.-->
<!--    </video>-->
<!--</div>-->
                       <!--<div class="tp-slider-bg" data-background="assets/images/ckt-2.jpg"></div>-->
                                          <div class="tp-slider-bg">
    <video class="slider-video" autoplay muted loop playsinline>
        <source src="assets/videos/ckt-banner-gif.mov" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
                        <div class="container z-index-5">
                           <div class="row">
                              <div class="col-xl-8 col-lg-8">
                                 <div class="tp-slider-content">
          <div class="tp-slider-title-box">
    <h1 class="tp-slider-title">
        Your <br>
        First Choice for <br>
        <span>Interconnect Solutions</span>
    </h1>
</div>

<div class="tp-slider-text">
    <p>
        Delivering advanced automotive electrical, electronic, and interconnect solutions
        engineered for demanding applications with exceptional quality, reliability, and innovation.
    </p>
   <a class="tp-btn" href="assets/pdf/Chaitra-Konnex-Technology-Company-Brochure.pdf" download>
    <span><i class="fa-solid fa-download me-2"></i>Download Company Brochure</span>
</a>
</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- hero area end -->
      <div class="tp-feature-2-area p-relative d-none">
    <div class="tp-feature-2-bg pt-60 pb-30" data-background="assets/img/feature/bg-1.png">
        <div class="container">
            <div class="row">

                <!-- Experience -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                    <div class="tp-feature-2-item">
                       <div class="tp-feature-2-icon">
    <span><i class="fa-solid fa-award"></i></span>
</div>

                        <div class="tp-feature-2-text">
                            <h5 class="tp-feature-2-title">5+ Years of Industry Experience</h5>
                        </div>
                    </div>
                </div>

                <!-- Facility -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                    <div class="tp-feature-2-item">
                        <div class="tp-feature-2-icon">
    <span><i class="fa-solid fa-industry"></i></span>
</div>
                        <div class="tp-feature-2-text">
                            <h5 class="tp-feature-2-title">2000 Sq.ft Manufacturing Facility</h5>
                        </div>
                    </div>
                </div>

                <!-- ISO -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30 wow tpfadeUp active" data-wow-duration=".9s" data-wow-delay=".7s">
                    <div class="tp-feature-2-item active">
                        <div class="tp-feature-2-icon">
    <span><i class="fa-solid fa-certificate"></i></span>
</div>
                        <div class="tp-feature-2-text">
                            <h5 class="tp-feature-2-title">ISO 9001:2015 Quality System</h5>
                        </div>
                    </div>
                </div>

                <!-- Prototype -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                    <div class="tp-feature-2-item">
                       <div class="tp-feature-2-icon">
    <span><i class="fa-solid fa-gears"></i></span>
</div>
                        <div class="tp-feature-2-text">
                            <h5 class="tp-feature-2-title">Prototype to Production Capability</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
        <!-- about area start -->
      <div class="tp-about-4-area pt-60 pb-70 d-none">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 mb-50 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-about-4-left-box">
                     <div class="tp-about-4-section-box mb-30">
                        <span class="tp-section-subtitle">ABOUT CKT</span>
                        <h4 class="tp-section-title">Your Trusted Partner for Wire Harness & Electrical Connectivity Solutions</h4>
                     </div>
                     <div class="tp-about-4-text pb-15">
                        <p>  CKT is committed to delivering innovative automotive electrical,
        electronic, and interconnect solutions that meet the highest standards
        of quality, performance, and reliability for demanding applications.</p>
                     </div>
           <div class="tp-about-4__progress pb-55">

    <div class="tp-about-4__progress-item mb-25 fix">
        <h4>Wiring Accuracy</h4>
        <span class="progress-count">99%</span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" data-width="99%"
                aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"
                style="width:99%;">
            </div>
        </div>
    </div>

    <div class="tp-about-4__progress-item mb-25 fix">
        <h4>Quality Assurance</h4>
        <span class="progress-count">100%</span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" data-width="100%"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                style="width:100%;">
            </div>
        </div>
    </div>

    <div class="tp-about-4__progress-item fix">
        <h4>On-Time Delivery</h4>
        <span class="progress-count">98%</span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" data-width="98%"
                aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"
                style="width:98%;">
            </div>
        </div>
    </div>

</div>
                     <a class="tp-btn-black" href="about-us.php"><span>KNOW MORE</span></a>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 mb-50 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-about-4-right-box">
                     <div class="tp-about-4-thumb mb-30">
                        <img src="assets/images/ckt-1.jpg" alt="" loading="lazy">
                     </div>
                     <div class="tp-about-4-content d-flex align-items-center justify-content-between mr-0">
                        <div class="tp-about-4-mission-box">
                           <h4><i class="flaticon-mission"></i>Our Mission</h4>
                           <p>  Deliver innovative, reliable, and high-quality
                wire harness and interconnect solutions that
                exceed customer expectations.</p>
                        </div>
                        <div class="tp-about-4-mission-box">
                           <h4><i class="flaticon-lamp"></i>Our Vission</h4>
                           <p>To be the first choice in automotive electrical,
                electronics, and interconnect solutions for
                demanding and advanced applications. </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about area end -->

      <!-- about area start -->
      <div class="tp-about-area p-relative pt-60 pb-60  d-none">
         <div class="tp-about-shape-3">
            <img src="assets/img/about/shape-1-4.png" alt="" loading="lazy">
         </div>
         <div class="tp-about-shape-4 d-none d-xl-block">
            <img src="assets/img/about/shape-1-5.png" alt="" loading="lazy">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-8 col-lg-8 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-about-left-box">
                     <div class="tp-about-section-box mb-15">
                           <span class="tp-section-subtitle">
        <i class="flaticon-flash"></i> ABOUT CKT
    </span>

 <h4 class="tp-section-title">
    Engineering Reliable Connections for a Smarter Tomorrow
</h4>
</div>

<div class="tp-about-text">
     <p>
        Established in <strong>2021</strong>, <strong>Chaitra Konnex Technology (CKT)</strong> is a leading manufacturer and supplier of high-quality wiring harnesses, cable assemblies, and electrical interconnect solutions. Since our inception, we have earned the trust of customers by delivering reliable, precision-engineered products that meet the evolving needs of industries such as <strong>Automotive, Electric Vehicles (EV), Military &amp; Defense, Industrial Automation, Home Appliances, Renewable Energy, and Electronics.</strong>
    </p>

    <p>
        At Chaitra Konnex Technology, quality, innovation, and customer satisfaction are at the heart of everything we do. Our products are manufactured using advanced production technologies, premium-grade materials, and stringent quality control processes to ensure exceptional performance, durability, and long-term reliability. From customized wiring harnesses and complex cable assemblies to high-volume production requirements, we work closely with our customers to develop solutions tailored to their exact specifications.
    </p>


    <div class="tp-about-icon-wrap p-relative d-flex justify-content-between mb-45">
        <div class="tp-about-icon-shape d-none d-xl-block">
            
        </div>

    <div class="tp-about-4-content d-flex align-items-center justify-content-between d-none">

        <div class="tp-about-4-mission-box" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;padding: 1em;
    margin: 0.5em;">
            <h4><i class="flaticon-mission"></i>Our Mission</h4>
            <p>
                Deliver innovative, reliable, and high-quality
                wire harness and interconnect solutions that
                exceed customer expectations.
            </p>
        </div>

        <div class="tp-about-4-mission-box" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;padding: 1em;
    margin: 0.5em;">
            <h4><i class="flaticon-lamp"></i>Our Vision</h4>
            <p>
                To be the first choice in automotive electrical,
                electronics, and interconnect solutions for
                demanding and advanced applications.
            </p>
        </div>

    </div>
</div>
                        <div class="tp-about-button-box d-flex align-items-center">
                           <a class="tp-btn-black" href="about-us.php"><span>KNOW MORE</span></a>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                  <div class="tp-about-right-box p-relative text-end">
                     <div class="tp-about-main-thumb">
                        <img src="assets/images/about-wire-harness.jpg" alt="" loading="lazy">
                     </div>
                     <!--<div class="tp-about-thumb-sm">-->
                     
                     <!--</div>-->
                     <!--<div class="tp-about-shape-1 d-none d-lg-block">-->
                     
                     <!--</div>-->
                     <div class="tp-about-shape-2  d-none d-lg-block">
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about area end -->
       <!-- about area start -->
      <div class="tp-about-area p-relative pt-60 pb-60">
         <div class="tp-about-shape-5 d-none d-xl-block">
            <img src="assets/img/about/shape-3-1.png" alt="" loading="lazy">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-about-right-box text-end tp-about-right-wrap p-relative">
                     <!--<div class="tp-about-2-thumb-text text-start d-none d-lg-block" data-background="assets/img/about/bg-1.jpg">-->
                     <!--   <h6><i class="purecounter" data-purecounter-duration="1" data-purecounter-end="5">0</i>+</h6>-->
                     <!--   <span>Years of experience</span>-->
                     <!--</div>-->
                     <div class="tp-about-main-thumb">
                        <img src="assets/images/about-image1.png" alt="" loading="lazy">
                     </div>
                   
                     <div class="tp-about-shape-2  d-none d-lg-block">
                        <img src="assets/img/about/shape-1-3.png" alt="" loading="lazy">
                     </div>
                     <div class="tp-about-shape-6 d-none d-xl-block">
                        <img src="assets/img/about/shape-3-2.png" alt="" loading="lazy">
                     </div>
                  </div>
               </div>
               <div class="col-xl-8 col-lg-8 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                  <div class="tp-about-left-box tp-about-ml">
                     <div class="tp-about-section-box mb-15">
                                       <span class="tp-section-subtitle">
        <i class="flaticon-flash"></i> ABOUT CKT
    </span>
                         <h4 class="tp-section-title">
 Your Trusted Partner for Wire Harness & Electrical Connectivity Solutions
</h4>
                     </div>
                     <div class="tp-about-text me-0">
                      <p>
                <strong>Chaitra Konnex Technology (CKT)</strong> is an Indian manufacturer renowned for delivering high-performance
                wire harness solutions and customized electrical interconnect systems. We specialize in designing and manufacturing
                reliable wire harness assemblies for diverse industries, including <strong>Defence, Automotive, Electric Vehicles (EV),
                Industrial Automation, Renewable Energy, Home Appliances, Farm &amp; Agricultural Equipment,</strong> and
                <strong>Industrial Control Panel Solutions.</strong>
            </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-12">
                    <p>
                Established in <strong>2021</strong>, Chaitra Konnex Technology has grown into a trusted manufacturer and supplier of
                premium-quality wiring harnesses, cable assemblies, and electrical connectivity solutions. Our commitment to precision
                engineering, superior quality standards, and customer-centric manufacturing has enabled us to build long-term
                relationships with clients across multiple industries. Every product is manufactured using advanced production
                technologies, high-grade materials, and stringent quality control processes to ensure outstanding performance,
                durability, safety, and reliability in demanding applications.
            </p>

    
                       
                        <div class="tp-about-button-box d-flex align-items-center">
                           <a class="tp-btn-black" href="about-us.php"><span>KNOW MORE</span></a>
                        </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about area end -->

      <!-- service area start -->
      <div class="tp-service-4-area p-relative fix grey-bg pt-70 pb-50 z-index">
         <div class="tp-service-4-shape-1 d-none d-xxl-block"> 
            <img src="assets/img/service/shape-4-1.png" alt="" loading="lazy">
         </div>
         <div class="container">
            <div class="tp-service-4-top-box pb-70">
               <div class="row">
                  <div class="col-xl-6">
                    <div class="tp-service-4-section-box">
    <span class="tp-section-subtitle">Industries We Serve</span>
    <h4 class="tp-section-title">
        Trusted Wiring Solutions for <br>
        Every Industry
    </h4>
</div>
                  </div>
                  <div class="col-xl-6">
                   <div class="tp-service-4-right-box d-flex ">
    <div class="tp-header-right-content ">
        <h5 class="mb-2" style="color:#ff6b00; font-weight:700;">
            Chaitra Konnex Technology (CKT)
        </h5>
        <p class="mb-2" style="font-size:15px; line-height:1.8; color:#555;">
            Chaitra Konnex Technology (CKT) manufactures high-quality wire harnesses and
            electrical interconnect solutions for <strong>Military &amp; Defence</strong>,
            <strong>Automotive</strong>, <strong>Electric Vehicle</strong>,
            <strong>Renewable Energy</strong>, <strong>Home Appliance</strong>,
            <strong>Farm &amp; Agricultural Equipment</strong>, and
            <strong>Industrial Control Panel Solutions</strong>.
        </p>

        <p class="mb-0" style="font-size:15px; line-height:1.8; color:#555;">
            We are proud to support <strong>DRDO</strong> with precision-engineered wiring
            harness solutions built for <strong>Performance</strong>,
            <strong>Reliability</strong>, and <strong>Quality</strong>.
        </p>
          <div class="tp-header-right-btn d-none d-md-block mt-30">
                           <a class="tp-btn" href="industries.php"><span>Know More</span></a>
                        </div>
    </div>
</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom-container-5">
            <div class="row">                        
               <div class="col-xl-12">
                  <div class="tp-service-4-wrapper">
                     <div class="swiper-container tp-service-4-active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="tp-service-4-item p-relative">
                                 <div class="tp-service-4-item-bg">
                                    <img src="assets/images/aerospace.jpg" alt="" loading="lazy">
                                 </div>                  
                                 <div class="tp-service-4-content-wrap d-flex justify-content-between flex-column">
                                    <div class="tp-service-4-text">
    <p>
        High-reliability wire harness solutions for defence systems, military vehicles,
        communication equipment, and mission-critical applications.
    </p>
    <h5 class="tp-service-4-title-1 title-transparent">
        Military &amp; Defence
    </h5>
</div>
                                    <div class="tp-service-4-title-box d-flex justify-content-between align-items-end">
                                       <h5 class="tp-service-4-title-2"><a href="MilitaryDefence.php">Military & Defence</a></h5>
                                       <h5 class="tp-service-4-title-3 title-transparent ">GO</h5>
                                       <div class="tp-service-4-icon">
                                          <a href="MilitaryDefence.php"><i class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-service-4-item p-relative">
                                 <div class="tp-service-4-item-bg">
                                    <img src="assets/images/automotive.jpeg" alt="" loading="lazy">
                                 </div>                  
                                 <div class="tp-service-4-content-wrap d-flex justify-content-between flex-column">
                                    <div class="tp-service-4-text">
                                      <p>
    Reliable wire harness solutions for automotive applications, delivering
    safe electrical connectivity, durability, and superior performance.
</p>
<h5 class="tp-service-4-title-1 title-transparent">Automotive</h5>
                                    </div>
                                    <div class="tp-service-4-title-box d-flex justify-content-between align-items-end">
                                       <h5 class="tp-service-4-title-2"><a href="Automotive.php">Automotive</a></h5>
                                       <h5 class="tp-service-4-title-3 title-transparent ">GO</h5>
                                       <div class="tp-service-4-icon">
                                          <a href="Automotive.php"><i class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-service-4-item p-relative">
                                 <div class="tp-service-4-item-bg">
                                    <img src="assets/images/electrical-vehicle.jpg" alt="" loading="lazy">
                                 </div>                  
                                 <div class="tp-service-4-content-wrap d-flex justify-content-between flex-column">
                                <div class="tp-service-4-text">
    <p>
        Custom EV wire harness solutions for high-voltage and low-voltage
        systems, delivering safety, efficiency, and reliable performance.
    </p>
    <h5 class="tp-service-4-title-1 title-transparent">
        Electric Vehicles
    </h5>
</div>
                                    <div class="tp-service-4-title-box d-flex justify-content-between align-items-end">
                                       <h5 class="tp-service-4-title-2"><a href="ElectricVehicles.php">Electric Vehicles</a></h5>
                                       <h5 class="tp-service-4-title-3 title-transparent ">GO</h5>
                                       <div class="tp-service-4-icon">
                                          <a href="ElectricVehicles.php"><i class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div> 
                               <div class="swiper-slide">
                              <div class="tp-service-4-item p-relative">
                                 <div class="tp-service-4-item-bg">
                                    <img src="assets/images/solar-panel.jpg" alt="" loading="lazy">
                                 </div>                  
                                 <div class="tp-service-4-content-wrap d-flex justify-content-between flex-column">
                                <div class="tp-service-4-text">
  <p>
    High-quality wire harness solutions for renewable energy applications,
    delivering safe connectivity, efficient power distribution, and lasting reliability.
</p>
<h5 class="tp-service-4-title-1 title-transparent">
    Renewable Energy
</h5>
</div>
                                    <div class="tp-service-4-title-box d-flex justify-content-between align-items-end">
                                       <h5 class="tp-service-4-title-2"><a href="RenewableEnergy.php">Renewable Energy</a></h5>
                                       <h5 class="tp-service-4-title-3 title-transparent ">GO</h5>
                                       <div class="tp-service-4-icon">
                                          <a href="RenewableEnergy.php"><i class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>   
                           <div class="swiper-slide">
                              <div class="tp-service-4-item p-relative">
                                 <div class="tp-service-4-item-bg">
                                    <img src="assets/images/home-appliance1.jpg" alt="" loading="lazy">
                                 </div>                  
                                 <div class="tp-service-4-content-wrap d-flex justify-content-between flex-column">
                                <div class="tp-service-4-text">
    <p>
       High-quality wire harness solutions for refrigerators, washing machines,
    air conditioners, and other home appliances with reliable connectivity.
    </p>
    <h5 class="tp-service-4-title-1 title-transparent">
       Home Appliances
    </h5>
</div>
                                    <div class="tp-service-4-title-box d-flex justify-content-between align-items-end">
                                       <h5 class="tp-service-4-title-2"><a href="HomeAppliances.php">Home Appliances</a></h5>
                                       <h5 class="tp-service-4-title-3 title-transparent ">GO</h5>
                                       <div class="tp-service-4-icon">
                                          <a href="HomeAppliances.php"><i class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-service-4-item p-relative">
                                 <div class="tp-service-4-item-bg">
                                    <img src="assets/images/farm-agri.jpg" alt="" loading="lazy">
                                 </div>                  
                                 <div class="tp-service-4-content-wrap d-flex justify-content-between flex-column">
                                <div class="tp-service-4-text">
 <p>
    Robust wire harness solutions for agricultural machinery, delivering
    reliable power distribution, signal transmission, and long-lasting performance.
</p>
<h5 class="tp-service-4-title-1 title-transparent">
    Farm &amp; Agricultural Equipment
</h5>
</div>
                                    <div class="tp-service-4-title-box d-flex justify-content-between align-items-end">
                                       <h5 class="tp-service-4-title-2"><a href="FarmAgriculturalEquipment.php">Farm & Agricultural Equipment</a></h5>
                                       <h5 class="tp-service-4-title-3 title-transparent ">GO</h5>
                                       <div class="tp-service-4-icon">
                                          <a href="FarmAgriculturalEquipment.php"><i class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <div class="swiper-slide">
                              <div class="tp-service-4-item p-relative">
                                 <div class="tp-service-4-item-bg">
                                    <img src="assets/images/farm-agrro.jpg" alt="" loading="lazy">
                                 </div>                  
                                 <div class="tp-service-4-content-wrap d-flex justify-content-between flex-column">
                                <div class="tp-service-4-text">
<p>
    Custom wire harness solutions for industrial control panels, delivering
    reliable electrical connectivity, organized wiring, and dependable
    performance for automation and control systems.
</p>
<h5 class="tp-service-4-title-1 title-transparent">
   Industrial Control Panel Harness Solution
</h5>
</div>
                                    <div class="tp-service-4-title-box d-flex justify-content-between align-items-end">
                                       <h5 class="tp-service-4-title-2"><a href="IndustrialControlPanel.php">Industrial Control Panel Harness Solution</a></h5>
                                       <h5 class="tp-service-4-title-3 title-transparent ">GO</h5>
                                       <div class="tp-service-4-icon">
                                          <a href="IndustrialControlPanel.php"><i class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>                     
                     <div class="tp-scrollbar"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service area end -->
        <!-- tp-feature-area-start -->
      <div class="tp-feature-area body-bg-6 p-relative z-index-1 pt-60 d-none">
         <img class="tp-feature-6-shape" src="assets/img/update/feature/shape.png" alt="" loading="lazy">
         <img class="tp-feature-6-shape-2" src="assets/images/shape-2.webp" alt="" loading="lazy">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="text-center mb-75 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <h3 class="tp-section-title tp-section-6-title">Building Trust Through Our Values</h3>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="tp-feature-6-item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <span class="tp-feature-6-icon mb-25 d-inline-block">
    <i class="fas fa-eye"></i>
</span>
                  <h3 class="tp-feature-6-title">
    <a href="#">Transparency</a>
</h3>

<p>
    We maintain openness and accountability by sharing
    accurate information and building trust with our
    customers, employees, and partners.
</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="tp-feature-6-item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <span class="tp-feature-6-icon mb-25 d-inline-block"><i class="fas fa-shield-alt"></i>
                        <!--<svg width="55" height="52" viewBox="0 0 55 52" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                        <!--   <path d="M54.1796 25.0378L49.5489 18.7533L49.6021 10.9461C49.6073 10.2352 49.148 9.60389 48.47 9.38917L41.0273 7.03221L36.488 0.679553C36.0735 0.0989609 35.3293 -0.140451 34.6546 0.0839511L27.2477 2.55642L19.8409 0.0833124C19.1655 -0.141196 18.4214 0.0982157 18.0074 0.678914L13.4687 7.03093L6.02556 9.38917C5.34756 9.60325 4.88832 10.2352 4.89343 10.9455L4.94666 18.7526L0.315765 25.0372C-0.105255 25.6093 -0.105255 26.3898 0.315765 26.962L4.94655 33.2466L4.89333 41.0537C4.88811 41.7647 5.34745 42.3959 6.02545 42.6106L13.468 44.9676L18.0073 51.3203C18.318 51.7549 18.8137 51.9995 19.3269 51.9995C19.4988 51.9995 19.6714 51.9723 19.8407 51.9159L27.2476 49.4434L34.6545 51.9165C35.3292 52.1417 36.0739 51.901 36.4879 51.3209L41.0266 44.9689L48.47 42.6108C49.148 42.3967 49.6072 41.7648 49.6021 41.0544L49.5489 33.2467L54.1796 26.9621C54.6007 26.3905 54.6007 25.6094 54.1796 25.0378ZM46.6171 31.7564C46.4095 32.0386 46.2985 32.3799 46.3011 32.7296L46.3498 39.8796L39.5313 42.0393C39.1965 42.145 38.9052 42.3565 38.7015 42.6427L34.5456 48.4601L27.7614 46.1953C27.428 46.0838 27.0673 46.0838 26.7339 46.1953L19.9498 48.4601L15.7931 42.6421C15.5894 42.3565 15.2975 42.1445 14.9633 42.038L8.14545 39.879L8.1941 32.729C8.19665 32.3793 8.08573 32.0381 7.87815 31.7558L3.63612 25.9999L7.87772 20.2435C8.08531 19.9613 8.19623 19.62 8.19367 19.2703L8.14503 12.1203L14.9635 9.96061C15.2983 9.8549 15.5896 9.64338 15.7933 9.35724L19.9492 3.53982L26.7333 5.8046C27.0667 5.91616 27.4275 5.91616 27.7609 5.8046L34.545 3.53982L38.7017 9.35788C38.9054 9.64338 39.1973 9.85544 39.5315 9.96189L46.3493 12.121L46.3007 19.2709C46.2981 19.6206 46.409 19.9618 46.6166 20.2441L50.8595 25.9999L46.6171 31.7564Z" fill="#5A00A3" />-->
                        <!--   <path d="M35.2243 18.7709L24.2071 29.7887L19.272 24.8536C18.6381 24.2197 17.6118 24.2197 16.9785 24.8536C16.3454 25.4874 16.3447 26.5137 16.9785 27.147L23.0607 33.2291C23.3773 33.5457 23.7925 33.704 24.2077 33.704C24.623 33.704 25.0375 33.5457 25.3548 33.2291L37.519 21.0649C38.1528 20.4311 38.1528 19.4048 37.519 18.7715C36.8852 18.1382 35.8575 18.1377 35.2243 18.7709Z" fill="#5A00A3" />-->
                        <!--</svg>-->
                     </span>
                     <h3 class="tp-feature-6-title">
    <a href="#">Reliability</a>
</h3>

<p>
    We keep our promises by delivering high-quality,
    dependable solutions that meet customer requirements
    with consistency and excellence.
</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="tp-feature-6-item wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                     <span class="tp-feature-6-icon mb-25 d-inline-block">   <i class="fas fa-balance-scale"></i>
                        <!--<svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                        <!--   <path d="M9.7697 9.7697C14.105 5.43441 19.869 3.04688 26 3.04688C30.6885 3.04688 35.2215 4.47312 39.0336 7.10602L36.0906 7.40787L36.4015 10.4388L44.3234 9.6263L43.5109 1.70442L40.4799 2.0153L40.7433 4.58392C36.4292 1.61048 31.3024 0 26 0C19.0552 0 12.526 2.70451 7.61526 7.61526C2.70451 12.526 0 19.0552 0 26C0 31.1992 1.52994 36.2177 4.42437 40.5128L6.95104 38.8101C6.916 38.758 6.88198 38.7055 6.84734 38.6532C4.36089 34.8978 3.04688 30.5273 3.04688 26C3.04688 19.8691 5.43441 14.105 9.7697 9.7697Z" fill="#5A00A3" />-->
                        <!--   <path d="M47.5756 11.4872L45.0489 13.1899C45.0839 13.2419 45.1179 13.2946 45.1526 13.3468C47.6389 17.1022 48.953 21.4727 48.953 26C48.953 32.131 46.5655 37.895 42.2302 42.2303C37.895 46.5656 32.131 48.9531 25.9999 48.9531C21.3114 48.9531 16.7784 47.5268 12.9663 44.8939L15.9093 44.5921L15.5984 41.5612L7.67651 42.3737L8.48901 50.2955L11.52 49.9847L11.2566 47.416C15.5709 50.3895 20.6976 52 25.9999 52C32.9448 52 39.4739 49.2955 44.3848 44.3847C49.2955 39.4739 51.9999 32.9448 51.9999 26C51.9999 20.8008 50.4701 15.7823 47.5756 11.4872Z" fill="#5A00A3" />-->
                        <!--   <path d="M12.6935 29.1976L14.6659 27.3747C16.1601 26 16.444 25.0736 16.444 24.0575C16.444 22.1151 14.7854 20.8749 12.3798 20.8749C10.3178 20.8749 8.83851 21.7415 8.04663 23.0564L10.2431 24.2817C10.6615 23.6093 11.3488 23.2657 12.1109 23.2657C13.0074 23.2657 13.4556 23.6691 13.4556 24.3415C13.4556 24.7749 13.3361 25.253 12.4993 26.03L8.58451 29.6908V31.5436H16.7279V29.1977L12.6935 29.1976Z" fill="#5A00A3" />-->
                        <!--   <path d="M26.1273 29.5413H27.6812V27.1954H26.1273V25.4174H23.3331V27.1954H21.2113L25.4698 21.0841H22.4066L17.7148 27.6138V29.5413H23.2434V31.5435H26.1273V29.5413Z" fill="#5A00A3" />-->
                        <!--   <path d="M30.371 33.0376L35.3017 18.9623H32.7766L27.8457 33.0376H30.371Z" fill="#5A00A3" />-->
                        <!--   <path d="M37.8121 25.0437V23.43H40.5614L37.0352 31.5435H40.2626L43.9533 22.9369V21.0841H35.2869V25.0437H37.8121Z" fill="#5A00A3" />-->
                        <!--</svg>-->
                     </span>
                     <h3 class="tp-feature-6-title">
    <a href="#">Integrity</a>
</h3>

<p>
    We uphold the highest ethical standards, conduct our
    business with honesty, and build lasting relationships
    based on trust and accountability.
</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-feature-area-end -->
<section class="tp-project-area pt-60 pb-60 roadmap-section d-none">
<div class="section-title text-center  pb-70 ">
            <span>History & Milestones</span>
            <p>Our journey of continuous growth, innovation, and manufacturing excellence.</p>
        </div>
    <!-- Center Road Line -->
    <div class="road-line"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">

                <div class="swiper-container tp-project-active">
                    <div class="swiper-wrapper">

                        <!-- 2022 -->
                        <div class="swiper-slide">
                            <div class="journey-card top">

                                <span class="road-dot"></span>

                                <div class="year">2022</div>

                                <div class="icon">
                                    <i class="fas fa-building"></i>
                                </div>

                                <h4>Company Registration</h4>

                                <p>
                                    Company registered with GST, IEC & FF International account.
                                    Started operations from a shared office of 100 sq.ft.
                                </p>

                                <div class="revenue">
                                    Revenue : ₹14 Lakhs
                                </div>

                            </div>
                        </div>

                        <!-- 2023 -->
                        <div class="swiper-slide">
                            <div class="journey-card bottom">

                                <span class="road-dot"></span>

                                <div class="year">2023</div>

                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>

                                <h4>Business Expansion</h4>

                                <p>
                                    Added two component supply customers and established
                                    a separate office of 100 sq.ft.
                                </p>

                                <div class="revenue">
                                    Revenue : ₹37 Lakhs
                                </div>

                            </div>
                        </div>

                        <!-- 2024 -->
                        <div class="swiper-slide">
                            <div class="journey-card top">

                                <span class="road-dot"></span>

                                <div class="year">2024</div>

                                <div class="icon">
                                    <i class="fas fa-industry"></i>
                                </div>

                                <h4>Wire Harness Manufacturing</h4>

                                <p>
                                    Received the first Wire Harness manufacturing order
                                    from TACO Tier-1 and expanded to a 200 sq.ft.
                                    manufacturing facility.
                                </p>

                                <div class="revenue">
                                    Revenue : ₹93 Lakhs
                                </div>

                            </div>
                        </div>

                        <!-- 2025 -->
                        <div class="swiper-slide">
                            <div class="journey-card bottom">

                                <span class="road-dot"></span>

                                <div class="year">2025</div>

                                <div class="icon">
                                    <i class="fas fa-cogs"></i>
                                </div>

                                <h4>Automotive Growth</h4>

                                <p>
                                    Added two automotive customers and expanded
                                    manufacturing space to 400 sq.ft.
                                </p>

                                <div class="revenue">
                                    Revenue : ₹98 Lakhs
                                </div>

                            </div>
                        </div>

                        <!-- 2026 -->
                        <div class="swiper-slide">
                            <div class="journey-card top">

                                <span class="road-dot"></span>

                                <div class="year">2026</div>

                                <div class="icon">
                                    <i class="fas fa-bolt"></i>
                                </div>

                                <h4>New Manufacturing Facility</h4>

                                <p>
                                    Established a 2,000 sq.ft. manufacturing facility
                                    for EV & Solar Control Panel Wire Harnesses.
                                </p>

                                <div class="revenue">
                                    Target : ₹1.4 Crore
                                </div>

                            </div>
                        </div>

                        <!-- 2027 -->
                        <div class="swiper-slide">
                            <div class="journey-card bottom">

                                <span class="road-dot"></span>

                                <div class="year">2027</div>

                                <div class="icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>

                                <h4>Military & Defence</h4>

                                <p>
                                    Started supplying Military & Defence Wire Harnesses
                                    with a projected revenue target of ₹3 Crore.
                                </p>

                                <div class="revenue">
                                    Target : ₹3 Crore
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Navigation -->
                    <!--<div class="tp-project-prev">-->
                    <!--    <i class="far fa-arrow-left"></i>-->
                    <!--</div>-->

                    <!--<div class="tp-project-next">-->
                    <!--    <i class="far fa-arrow-right"></i>-->
                    <!--</div>-->

                </div>

            </div>
        </div>
    </div>

</section>
<section class="history-section d-none" style="background-image: url(&quot;assets/img/feature/bg-1.png&quot;);">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span>CKT Journey</span>
            <h2>History & Milestones</h2>
            <p>Our journey of continuous growth, innovation, and manufacturing excellence.</p>
        </div>
<div class="timeline mt-70">

    <div class="timeline-item top">
        <div class="timeline-content">
            <div class="icon"><i class="fas fa-building"></i></div>
            <span class="year">2022</span>
            <h5>Company Registration</h5>
            <p>
                Company registered with GST, IEC & FF International account.
                Started operations from a shared office of 100 sq.ft.
            </p>
            <div class="revenue">Revenue : ₹14 Lakhs</div>
        </div>
    </div>

    <div class="timeline-item bottom">
        <div class="timeline-content">
            <div class="icon"><i class="fas fa-users"></i></div>
            <span class="year">2023</span>
            <h5>Business Expansion</h5>
            <p>
                Added two component supply customers and established a
                separate office of 100 sq.ft.
            </p>
            <div class="revenue">Revenue : ₹37 Lakhs</div>
        </div>
    </div>

    <div class="timeline-item top">
        <div class="timeline-content">
            <div class="icon"><i class="fas fa-industry"></i></div>
            <span class="year">2024</span>
            <h5>Wire Harness Manufacturing</h5>
            <p>
                Received the first wire harness manufacturing order from
                TACO Tier-1 and expanded to a 200 sq.ft. manufacturing facility.
            </p>
            <div class="revenue">Revenue : ₹93 Lakhs</div>
        </div>
    </div>

    <div class="timeline-item bottom">
        <div class="timeline-content">
            <div class="icon"><i class="fas fa-cogs"></i></div>
            <span class="year">2025</span>
            <h5>Automotive Growth</h5>
            <p>
                Added two automotive customers and expanded manufacturing
                space to 400 sq.ft.
            </p>
            <div class="revenue">Revenue : ₹98 Lakhs</div>
        </div>
    </div>

    <div class="timeline-item top">
        <div class="timeline-content">
            <div class="icon"><i class="fas fa-bolt"></i></div>
            <span class="year">2026</span>
            <h5>New Manufacturing Facility</h5>
            <p>
                Established a 2,000 sq.ft. manufacturing facility for EV &
                Solar Control Panel Wire Harnesses.
            </p>
            <div class="revenue">Target : ₹1.4 Crore</div>
        </div>
    </div>

    <div class="timeline-item bottom">
        <div class="timeline-content">
            <div class="icon"><i class="fas fa-shield-alt"></i></div>
            <span class="year">2027</span>
            <h5>Military & Defence</h5>
            <p>
                Started supplying Military & Defence Wire Harnesses with a
                projected revenue target of ₹3 Crore.
            </p>
            <div class="revenue">Target : ₹3 Crore</div>
        </div>
    </div>

</div>
    </div>
</section>
   
        <!-- choose area start -->
      <div class="tp-choose-2-area p-relative fix pt-70 pb-70 d-none">
         <div class="tp-choose-2-shape-1 d-none d-lg-block">
            <img src="assets/img/choose/shape-2-1.png" alt="" loading="lazy">
         </div>
         <div class="tp-choose-2-shape-2 d-none d-xxl-block">
            <img src="assets/img/choose/shape-2-2.png" alt="" loading="lazy">
         </div>
         <div class="tp-choose-2-bg" data-background="assets/images/why-choose-1.jpg"></div>
         <div class="container">
            <div class="row">
               <div class="col-xl-8 col-lg-8">
                  <div class="tp-choose-2-item z-index-3">
                     <div class="tp-choose-2-section-box mb-25">
                        <span class="tp-section-subtitle">WHY CHOOSE CKT</span>
                        <h4 class="tp-section-title">Your Trusted Partner for <br> End-to-End Manufacturing Solutions</h4>
                     </div>
                     <div class="tp-choose-2-text mb-45">
                       <p>
        CKT combines engineering expertise, advanced manufacturing capabilities,
        quality assurance, and efficient supply chain management to deliver
        innovative, reliable, and customer-focused solutions for every industry.
    </p>
                     </div>
                    <div class="tp-choose-2-icon-wrap">

    <!-- Stability -->
    <div class="tp-choose-2-icon-box mb-30 d-flex align-items-start">
        <div class="tp-choose-2-icon">
            <span><i class="fas fa-shield-alt"></i></span>

        </div>
        <div class="tp-choose-2-icon-text">
            <h5>Stability</h5>
            <p>Building long-term partnerships through consistent performance, dependable service, and sustainable business practices.</p>
        </div>
    </div>

    <!-- Market Intelligence -->
    <div class="tp-choose-2-icon-box mb-30 d-flex align-items-start">
        <div class="tp-choose-2-icon">
           <span><i class="fas fa-chart-line"></i></span>
        </div>
        <div class="tp-choose-2-icon-text">
            <h5>Market Intelligence</h5>
            <p>Leveraging industry expertise and market insights to deliver innovative, competitive, and customer-focused solutions.</p>
        </div>
    </div>

    <!-- Sourcing & Procurement -->
    <div class="tp-choose-2-icon-box mb-30 d-flex align-items-start">
        <div class="tp-choose-2-icon">
           <span><i class="fas fa-boxes"></i></span>
        </div>
        <div class="tp-choose-2-icon-text">
            <h5>Sourcing &amp; Procurement</h5>
            <p>Ensuring high-quality materials, cost optimization, and reliable supplier partnerships for uninterrupted production.</p>
        </div>
    </div>

    <!-- Quality & Operations -->
    <div class="tp-choose-2-icon-box mb-30 d-flex align-items-start">
        <div class="tp-choose-2-icon">
           <span><i class="fas fa-cogs"></i></span>
        </div>
        <div class="tp-choose-2-icon-text">
            <h5>Quality &amp; Operations</h5>
            <p>Maintaining rigorous quality standards and operational excellence to deliver precision and reliability in every project.</p>
        </div>
    </div>

    <!-- Supply Chain Services -->
    <div class="tp-choose-2-icon-box d-flex align-items-start">
        <div class="tp-choose-2-icon">
        <span><i class="fas fa-truck"></i></span>
        </div>
        <div class="tp-choose-2-icon-text">
            <h5>Supply Chain Services</h5>
            <p>Providing seamless end-to-end supply chain management for efficient logistics, on-time delivery, and customer satisfaction.</p>
        </div>
    </div>

</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- choose area end -->
        <!-- tp-brands-area-start -->
      <div class="tp-brands-area pt-80 pb-80 d-none">
         <div class="container-fluid container-1580">
                  <div class="row">
            <div class="col-12 text-center mb-50">
                <span class="tp-section-subtitle">Trusted By</span>
                <h2 class="tp-section-title">Our Clients</h2>
                <p>Proudly serving leading companies across diverse industries with reliable wire harness and interconnect solutions.</p>
            </div>
        </div>

            <div class="row">
               <div class="col-12">
                  <div class="swiper-container tp-brand-6-slide-active">
                     <div class="swiper-wrapper slide-transtion">
             <!-- Original -->
<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/drdo-logo.png" alt="" loading="lazy"></a>
    </div>
</div>

<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/ecozen-logo-updated.png" alt="" loading="lazy"></a>
    </div>
</div>

<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/SparkMindaGreenMobilitylogo.png" alt="" loading="lazy"></a>
    </div>
</div>

<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/logo-tata-autocomp-blue.svg" alt="" loading="lazy"></a>
    </div>
</div>

<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/logo-DNEmAKYs.webp" alt="" loading="lazy"></a>
    </div>
</div>

<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/vacco-logo.png" alt="" loading="lazy"></a>
    </div>
</div>
<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/client-logo-ckt.jpg" alt="" loading="lazy"></a>
    </div>
</div>

<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/ecozen-logo-updated.png" alt="" loading="lazy"></a>
    </div>
</div>

<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/SparkMindaGreenMobilitylogo.png" alt="" loading="lazy"></a>
    </div>
</div>

<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/logo-tata-autocomp.svg" alt="" loading="lazy"></a>
    </div>
</div>

<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/logo-DNEmAKYs.webp" alt="" loading="lazy"></a>
    </div>
</div>

<div class="swiper-slide">
    <div class="tp-brand-6-item">
        <a href="#"><img src="assets/images/brand/vacco-logo.png" alt="" loading="lazy"></a>
    </div>
</div>


                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-brands-area-end -->
  <!-- step area start -->
   <div class="tp-step-area pt-40 pb-60 ">
    <div class="container">
        <div class="row">

            <div class="col-xl-12">
                <div class="tp-step-section-box text-center mb-50">
                    <span class="tp-section-subtitle"><span>//</span>WHAT WE DO</span>
                    <h4 class="tp-section-title">
                        Complete Wire Harness <br>
                        & Engineering Solutions
                    </h4>
                    <p class="mt-3">
                     Chaitra Konnex Technology (CKT) delivers complete wire harness solutions—from component sourcing and prototype development to precision manufacturing, industrial automation, and electro-mechanical assembly—ensuring quality, reliability, and on-time delivery.
                    </p>
                </div>
            </div>

            <!-- Step 01 -->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-60 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                <div class="tp-step-item-box">
                    <div class="tp-step-item p-relative text-center">
                        <div class="tp-step-icon">
                             <span><i class="flaticon-plug"></i></span>
                        </div>

                        <div class="tp-step-text">
                            <h5 class="tp-step-title">
                                <a href="#">Sourcing & Supply</a>
                            </h5>
                            <p>
                                Procurement and supply of quality electrical,
                                electronic and wire harness components through
                                trusted distribution partners.
                            </p>
                        </div>

                        <div class="tp-step-number">
                            <span>Step 01</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-60 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                <div class="tp-step-item-box ">
                    <div class="tp-step-item p-relative text-center">
                        <div class="tp-step-icon">
                                <span><i class="flaticon-problem-solving"></i></span>
                        </div>

                        <div class="tp-step-text">
                            <h5 class="tp-step-title">
                                <a href="#">Prototype Development</a>
                            </h5>
                            <p>
                                Engineering support, prototype development,
                                product validation and design assistance for
                                faster product realization.
                            </p>
                        </div>

                        <div class="tp-step-number">
                            <span>Step 02</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-60 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                <div class="tp-step-item-box">
                    <div class="tp-step-item p-relative text-center">
                        <div class="tp-step-icon">
                            <span><i class="flaticon-service"></i></span>
                        </div>

                        <div class="tp-step-text">
                            <h5 class="tp-step-title">
                                <a href="#">Wire Harness Manufacturing</a>
                            </h5>
                            <p>
                                Precision manufacturing of automotive,
                                defence, electronic PCB and panel wiring
                                harnesses with stringent quality standards.
                            </p>
                        </div>

                        <div class="tp-step-number">
                            <span>Step 03</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 04 -->
            <!--tp-step-item-box-pl-->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-60 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                <div class="tp-step-item-box ">
                    <div class="tp-step-item p-relative text-center">
                        <div class="tp-step-icon">
                             <span><i class="flaticon-creative"></i></span>
                        </div>

                        <div class="tp-step-text">
                            <h5 class="tp-step-title">
                                <a href="#">Automation & Assembly</a>
                            </h5>
                            <p>
                                Industrial automation, jigs & fixtures,
                                electro-mechanical assembly and complete
                                manufacturing support solutions.
                            </p>
                        </div>

                        <div class="tp-step-number">
                            <span>Step 04</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
      <!-- step area end -->
  

      <!-- service area start -->
      <div class="tp-service-area tp-service-bg p-relative pt-70 pb-70 d-none"
         data-background="assets/img/service/bg-1-1.png">
         <div class="tp-service-shape-2 d-none d-xxl-block">
            <img src="assets/img/service/shape-1-3.png" alt="" loading="lazy">
         </div>
         <div class="container">
            <div class="tp-service-wrap mb-50">
               <div class="row align-items-end">
                  <div class="col-xl-8 col-lg-8 col-md-9">
                     <div class="tp-service-section-box">
                        <span class="tp-section-subtitle"><i class="flaticon-flash"></i>Comprehensive Wire Harness Solutions for Every Industry</span>
                        <h4 class="tp-section-title">High-quality wire harness manufacturing for automotive, industrial, solar, and consumer electronics.</h4>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-3">
                     <div class="tp-service-slider-arrow d-flex justify-content-start  justify-content-md-end">
                        <button class="test-next"><i class="far fa-arrow-left"></i></button>
                        <button class="test-prev active"><i class="far fa-arrow-right"></i></button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-service-wrapper">
                     <div class="swiper-container tp-service-active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="tp-service-item p-relative">
                                 <div class="tp-service-thumb">
                                   <img src="assets/images/ev-charging.jpg" alt="" loading="lazy">
                                 </div>
                                 <div class="tp-service-content-box">
                                    <div class="tp-service-content fix">
                                       <div class="tp-service-icon p-relative">
                                          <span><i class="flaticon-lamp"></i></span>
                                          <div class="tp-service-icon-shape">
                                             <img src="assets/img/service/shape-1-1.png" alt="" loading="lazy">
                                          </div>
                                       </div>
                                       <div class="tp-service-text pb-5">
                                          <h4 class="tp-service-title">
                                             <a href="service-details2.php">EV Charging Solutions</a>
                                          </h4>
                                          <p>Battery cables, charger gun harnesses, inlet socket harnesses, and high-voltage EV wiring.</p>
                                       </div>
                                       <div class="tp-service-arrow">
                                          <a href="service-details2.php">Read More<i
                                                class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tp-service-shape-1">
                                    <img src="assets/img/service/shape-1-2.png" alt="" loading="lazy">
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-service-item p-relative">
                                 <div class="tp-service-thumb">
                                    <img src="assets/images/automatic-wire-harness.jpg" alt="" loading="lazy">
                                 </div>
                                 <div class="tp-service-content-box">
                                    <div class="tp-service-content fix">
                                       <div class="tp-service-icon p-relative">
                                          <span><i class="flaticon-air-conditioner"></i></span>
                                          <div class="tp-service-icon-shape">
                                             <img src="assets/img/service/shape-1-1.png" alt="" loading="lazy">
                                          </div>
                                       </div>
                                       <div class="tp-service-text pb-5">
                                          <h4 class="tp-service-title">
                                             <a href="service-details1.php">Automotive Wire Harness</a>
                                          </h4>
                                          <p>Reliable wiring systems for EVs, IC engine vehicles, and commercial automotive applications.</p>
                                       </div>
                                       <div class="tp-service-arrow">
                                          <a href="service-details1.php">Read More<i
                                                class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tp-service-shape-1">
                                    <img src="assets/img/service/shape-1-2.png" alt="" loading="lazy">
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="tp-service-item p-relative">
                                 <div class="tp-service-thumb">
                                    <img src="assets/images/product/defence-img.jpeg" alt="" loading="lazy">
                                 </div>
                                 <div class="tp-service-content-box">
                                    <div class="tp-service-content fix">
                                       <div class="tp-service-icon p-relative">
                                          <span><i class="flaticon-heater"></i></span>
                                          <div class="tp-service-icon-shape">
                                             <img src="assets/img/service/shape-1-1.png" alt="" loading="lazy">
                                          </div>
                                       </div>
                                       <div class="tp-service-text pb-5">
                                          <h4 class="tp-service-title">
                                             <a href="service-details3.php">Home Appliance Harness</a>
                                          </h4>
                                          <p>Precision wire harnesses for refrigerators, washing machines, air conditioners, and other appliances.</p>
                                       </div>
                                       <div class="tp-service-arrow">
                                          <a href="service-details3.php">Read More<i
                                                class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tp-service-shape-1">
                                    <img src="assets/img/service/shape-1-2.png" alt="" loading="lazy">
                                 </div>
                              </div>
                           </div>
                              <div class="swiper-slide">
                              <div class="tp-service-item p-relative">
                                 <div class="tp-service-thumb">
                                       <img src="assets/images/LightingIndustrialHarness.jpg" alt="" loading="lazy">
                                 </div>
                                 <div class="tp-service-content-box">
                                    <div class="tp-service-content fix">
                                       <div class="tp-service-icon p-relative">
                                          <span><i class="flaticon-heater"></i></span>
                                          <div class="tp-service-icon-shape">
                                             <img src="assets/img/service/shape-1-1.png" alt="" loading="lazy">
                                          </div>
                                       </div>
                                       <div class="tp-service-text pb-5">
                                          <h4 class="tp-service-title">
                                             <a href="service-details5.php">Lighting & Industrial Harness</a>
                                          </h4>
                                          <p>Durable wiring solutions for LED lighting, switches, sensors, HVAC systems, and industrial equipment.</p>
                                       </div>
                                       <div class="tp-service-arrow">
                                          <a href="service-details5.php">Read More<i
                                                class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tp-service-shape-1">
                                    <img src="assets/img/service/shape-1-2.png" alt="" loading="lazy">
                                 </div>
                              </div>
                           </div>
                              <div class="swiper-slide">
                              <div class="tp-service-item p-relative">
                                 <div class="tp-service-thumb">
                                    <img src="assets/images/solare-panel-wire.jpg" alt="" loading="lazy">
                                 </div>
                                 <div class="tp-service-content-box">
                                    <div class="tp-service-content fix">
                                       <div class="tp-service-icon p-relative">
                                          <span><i class="flaticon-heater"></i></span>
                                          <div class="tp-service-icon-shape">
                                             <img src="assets/img/service/shape-1-1.png" alt="" loading="lazy">
                                          </div>
                                       </div>
                                       <div class="tp-service-text pb-5">
                                          <h4 class="tp-service-title">
                                             <a href="service-details4.php">Solar & Control Panel Wiring</a>
                                          </h4>
                                          <p>Customized cable assemblies for solar energy systems, control panels, and industrial automation.</p>
                                       </div>
                                       <div class="tp-service-arrow">
                                          <a href="service-details4.php">Read More<i
                                                class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tp-service-shape-1">
                                    <img src="assets/img/service/shape-1-2.png" alt="" loading="lazy">
                                 </div>
                              </div>
                           </div>
                             <div class="swiper-slide">
                              <div class="tp-service-item p-relative">
                                 <div class="tp-service-thumb">
                                    <img src="assets/images/custom-wire-harnesss.jpg" alt="" loading="lazy">
                                 </div>
                                 <div class="tp-service-content-box">
                                    <div class="tp-service-content fix">
                                       <div class="tp-service-icon p-relative">
                                          <span><i class="flaticon-lighting"></i></span>
                                          <div class="tp-service-icon-shape">
                                             <img src="assets/img/service/shape-1-1.png" alt="" loading="lazy">
                                          </div>
                                       </div>
                                       <div class="tp-service-text pb-5">
                                          <h4 class="tp-service-title">
                                             <a href="service-details6.php">Custom Design & Production</a>
                                          </h4>
                                          <p>End-to-end support from prototype development to mass production with strict quality assurance.</p>
                                       </div>
                                       <div class="tp-service-arrow">
                                          <a href="service-details6.php">Read More<i
                                                class="flaticon-right-arrow"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tp-service-shape-1">
                                    <img src="assets/img/service/shape-1-2.png" alt="" loading="lazy">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service area end -->


      <!-- funfact area  start -->
      <div class="tp-funfact-area fix p-relative grey-bg pt-60 pb-65 d-none">
         <div class="tp-funfact-shape-1">
            <img src="assets/img/funfact/shape-1-1.png" alt="" loading="lazy">
         </div>
         <div class="tp-funfact-shape-2 d-none d-xl-block">
            <img src="assets/img/funfact/shape-1-2.png" alt="" loading="lazy">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                  <div class="tp-funfact-item text-center">
                     <div class="tp-funfact-icon">
                        <span><i class="flaticon-solution"></i></span>
                     </div>
                     <div class="tp-funfact-content">
                        <h5 class="tp-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                              data-purecounter-end="80">0</i>+</h5>
                        <span>Succesfull Projects</span>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                  <div class="tp-funfact-item text-center">
                     <div class="tp-funfact-icon">
                        <span><i class="flaticon-customer-service"></i></span>
                     </div>
                     <div class="tp-funfact-content">
                        <h5 class="tp-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                              data-purecounter-end="9">0</i>+</h5>
                        <span>Satisfied Clients</span>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                  <div class="tp-funfact-item text-center">
                     <div class="tp-funfact-icon">
                        <span><i class="flaticon-customer-service-1"></i></span>
                     </div>
                     <div class="tp-funfact-content">
                        <h5 class="tp-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                              data-purecounter-end="10">0</i>+</h5>
                        <span>Experienced Staff</span>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                  <div class="tp-funfact-item text-center">
                     <div class="tp-funfact-icon">
                        <span><i class="flaticon-trophy"></i></span>
                     </div>
                     <div class="tp-funfact-content">
                        <h5 class="tp-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                              data-purecounter-end="8"></i>+</h5>
                        <span>Awards Winning</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- funfact area end -->


   </main>
<?php include 'footer.php'; ?>
