<?php 
include 'include/header.php'; 
?>
  
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">We are Producing Natural Products</p>
                                        <h2 class="main-slider__title">Agriculture.</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="discover_more_ag.php" class="thm-btn main-slider__btn">Discover More <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-4.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">We are Provide Education for Student</p>
                                        <h2 class="main-slider__title">Education.</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="discover_more_education.php" class="thm-btn main-slider__btn">Discover More <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-2-5.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">We are Provide Small Scale Industries Services</p>
                                        <h2 class="main-slider__title">Small Scale Industries.</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="discover_more_ss.php" class="thm-btn main-slider__btn">Discover More <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-farm"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">the Best Quality <br> Standards</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-agriculture"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">a Smart organic <br> services</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-harvest"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">Natural Healthy <br> prodducts</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one-shape-1 float-bob-x">
                <img src="assets/images/shapes/about-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row mb-3">
<?php
$url = $URL."notification/read_notification.php";
$data = array();
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
?>
                     <div class="col-xl-4">
                          <img src="assets/images/resources/bell.png" style="width:350px; height:332px;" alt="">
                         </div>
                    <div class="col-xl-8">
 <span class="section-title__tagline">
    <image src="assets/images/resources/new.gif" style="width:50px; height:50px;" alt="">
    Notifications
 </span>
      <div class="overflow-auto p-3 mb-3 mb-md-0 mr-md-3 bg-light" style="max-height:300px;">

        <ul class="list-group">
             <?php 
                       
                 $counter=0;  
                 foreach($result as $key => $value){
                 foreach($value as $key1 => $value1)
                {
              $pdf_path = "../admin/image/".$value1->id."/pdf/".$value1->id.".pdf";
            ?>
 <li class="list-group-item d-flex"><p class="p-0 m-0 flex-grow-1 text-danger"><u><?php echo $value1->n_title; ?></u></p> 
 <a href="<?php echo $pdf_path; ?>" target="_blank"><button class="btn btn-danger btn-sm rounded-0">View PDF</button></a>
 </li>
<?php } } ?>

</ul>
      </div>
 </div>
</div>
<div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Get to know about us</span>
                                <h2 class="section-title__title">About S.S.E.G.R</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                            <p class="about-three__text-1">
                            <i class="fa fa-hand-point-right" style="margin-right:5px; color:grey;"></i>
                            THE MOTIVE OF SHAILJA SAMEER EDUCATION AND GREEN REVOLUTION (OPC) PVT. LTD. ARE REFORMS THE EDUCATION, AGRICULTURE AND UNEMPLOYMENT FACTOR IN UTTAR PRADESH...</p>
                         
                            <div class="about-one__btn-and-ceo mt-5">
                                <div class="about-one__btn-box">
                                    <a href="about.php" class="thm-btn about-one__btn">About More <i
                                            class="icon-right-arrow"></i> </a>
                                </div>
                                <div class="about-one__ceo">
                                   <!--  <div class="about-one__ceo-img">
                                         <img src="assets/images/resources/about-one-ceo-mg.jpg" alt="Ceo img"> 
                                    </div> -->
                                    <div class="about-one__ceo-content">
                                        <!-- <h4 class="about-one__ceo-name">Mike Hardson</h4> -->
                                        <img src="assets/images/resources/sign.png" width="250px" height="80px" alt="">
                                        <p class="about-one__ceo-title">CEO of Agrion</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img-one">
                                    <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="assets/images/resources/about-4.jpg" style="width:350px; height:332px;" alt="">
                                </div>
                                <div class="about-one__video-link">
                                    <a href="#" class="video-popup">
                                        <div class="about-one__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__bg" style="background-image: url(assets/images/shapes/services-one-shape-1.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">What We’re Doing</span>
                    <h2 class="section-title__title">Services We’re offering</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services-one-1.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-organic-food"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="service_agriculture.php"> Organic Forming</a></h3>
                                <p class="services-one__text" style="text-align:justify;">Organic forming by the company which is a method of agriculture. which is based on the use of synthetic fertilizers and pesticides and which uses Crop rotation Green manure compost etc to mantian the fertility of land.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/service-2.jpg" height="196px" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-vegetables"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="service_education.php"> Education level Improvement</a></h3>
                                <p class="services-one__text" style="text-align:justify;">In our country, however civic duties have been included in the education theory. However not all students have their complete knowledge If today's students want to improve the level of education by keeping the spirit of...</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services.jpg" height="196px" alt="">
                                </div>
                                <div class="services-one__icon">
                                     <span class="icon-tractor"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="service_small_scale.php">Small Scale Industries</a></h3>
                                <p class="services-one__text" style="text-align:justify;">Small Scale Industry is also called cottage industry this is a field that gives maximum Jobs to the people. Small Scale industry has a very important contribution in strengthening the economy of our India Country. At present...</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                   
                </div>
            </div>
        </section>
        <!--Services One End-->


        <!--Unbeatable One Start-->
        <section class="unbeatable-one">
            <div class="unbeatable-one__bg  jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/unbeatable-one-bg.jpg);"></div>
            <div class="container">
                <div class="unbeatable-one__inner text-center">
                    <div class="unbeatable-one__content">
                        <div class="unbeatable-one__shape-one wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <img src="assets/images/shapes/unbeatable-shape-1.png" alt="" class="float-bob-y">
                        </div>
                        <div class="unbeatable-one__shape-two wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <img src="assets/images/shapes/unbeatable-shape-2.png" alt="" class="float-bob-y">
                        </div>
                        <p class="unbeatable-one__tagline">We are Providing good services</p>
                        <h3 class="unbeatable-one__title">Agriculture Services</h3>
                        <div class="unbeatable-one__btn-box">
                            <a href="service_agriculture.php" class="thm-btn unbeatable-one__btn">Discover More <i
                                    class="icon-right-arrow"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!--Unbeatable One End-->

     
        <?php 
include 'include/footer.php'; 
?>