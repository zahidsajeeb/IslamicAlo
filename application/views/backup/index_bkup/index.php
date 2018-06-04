<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <body>

        <div class="wrapper"><!-- wrapper start -->
            <?php include 'preloader.php'; ?>
            <?php include 'menu.php'; ?>
            <?php include 'slider.php'; ?>


            <!--=================================== Latest Video Lectures ============================= --> 
            <section class="service page-section-ptb position-relative">
                <!--<section class="our-services page-section-ptb position-relative white-bg">-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="section-title text-center">
                                <h2 class="title-effect">Latest Video Lectures </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($result as $row): ?>
                            <div class="col-lg-4 col-md-4">
                                <div class="feature-text box-shadow text-center mb-30 white-bg">
                                    <div class="feature-icon" style="margin-bottom:5px;">
                                        <!--<span aria-hidden="true" class="ti-layers-alt"></span>-->
                                        <img class="img-fluid mx-auto" style="height:200px; width:100%;" src="_images/lectur/lecturer/<?php echo $row->lecturer_img ?>" alt=""> 
                                    </div>
                                    <div class="fature-info" style="height:80px;"> 
                                        <a href="<?php echo base_url(); ?>index.php/AudioVideo/VideoLive/<?php echo $row->file_id; ?>" class="text-back pt-20 pb-10"><?php echo $row->file_name ?></a>
                                        <p> <?php echo $row->lecturer_name; ?></p>                     
                                    </div>
                                    <a href="<?php echo base_url();?>index.php/AudioVideo/VideoLive/<?php echo $row->file_id; ?>" class="btn btn-info x-small" style="color:white;"> <i class="fa fa-check"> </i> See Video </a> <br> <br>
                                    <div class='oss-widget-interface'></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="text-center mt-50">
                        <a class="button x-small" href="<?php echo base_url(); ?>index.php/AudioVideo/AllVideos"> <i class="fa fa-video-camera"></i> See All Video Lecture</a>
                    </div>
                </div>
            </section>
            
            

            <section id="blog" class="our-blog page-section-ptb gray-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-8">
                            <div class="section-title text-center text-left">
                                <h2 class="title-effect">Our Services</h2>
                                <p>We are dedicated to providing you with the best experience possible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 xs-mb-30">
                            <div class="card border-0 black-bg o-hidden h-100">
                                <img class="img-fluid" src="images/about/02.jpg" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white"> Audio </a></h4>
                                    <p class="mb-0 pb-0 text-white">I truly believe Augustine’s words are true.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 xs-mb-30">
                            <div class="card border-0 black-bg o-hidden h-100">
                                <img class="img-fluid" src="images/about/03.jpg" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white">Video</a></h4>          
                                    <p class="mb-0 pb-0 text-white">We also know those epic stories, those modern-day.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 xs-mb-30">
                            <div class="card border-0 black-bg o-hidden h-100">
                                <img class="img-fluid" src="images/about/01.jpg" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white">  Article </a></h4>         
                                    <p class="mb-0 pb-0 text-white">Let's make something great together</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 xs-mb-30">
                            <div class="card border-0 black-bg o-hidden h-100">
                                <img class="img-fluid" src="images/blog/big/03.jpg" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white"> Event </a></h4>         
                                    <p class="mb-0 pb-0 text-white">Save Yourself Time By Using Webster</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  
            
            
            
            
            
            
            
            
            
            
            
            
            

            <!--===================================== Latest Audio Lectures ============================================= --> 
            <section class="awesome-features white-bg page-section-ptb pos-r">
                <!--<section class="our-services page-section-ptb white-bg">-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="section-title text-center">

                                <h2 class="title-effect">Latest Audio Lectures </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($result1 as $row): ?>
                            <div class="col-lg-4 col-md-4">
                                <div class="feature-text box-shadow text-center mb-30 white-bg">
                                    <div class="feature-icon">
                                        <!--<span aria-hidden="true" class="ti-layers-alt"></span>-->
                                        <img class="img-fluid mx-auto" style="height:200px; width:100%;" src="_images/lectur/lecturer/<?php echo $row->lecturer_img ?>" alt=""> 
                                    </div>
                                    <div class="fature-info" style="height:180px;"> 
                                        <h5  class="text-back pt-20 pb-10"><?php echo $row->file_name ?></h5>
                                        <p> <?php echo $row->lecturer_name; ?></p>
                                        <a href="<?php echo base_url(); ?>index.php/AudioVideo/AudioLive/<?php echo $row->file_id; ?>" class="btn btn-info x-small" style="color:white;"> <i class="fa fa-check"> </i> See Audio </a>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="text-center mt-50">
                        <a class="button x-small"  href="<?php echo base_url(); ?>index.php/AudioVideo/AllAudios"> <i class="fa fa-headphones"></i> See All Audio Lecture</a>
                        <div class="text-center mt-50">
                        </div>
                    </div>
                </div>
            </section>
            
            
            
            <section id="blog" class="our-blog page-section-ptb gray-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-8">
                            <div class="section-title text-center text-left">
                                <h2 class="title-effect">Our Other Services</h2>
                                <p>We are dedicated to providing you with the best experience possible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 xs-mb-30">
                            <div class="card border-0 black-bg o-hidden h-100">
                                <img class="img-fluid" src="images/about/02.jpg" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white"> Books </a></h4>
                                    <p class="mb-0 pb-0 text-white">I truly believe Augustine’s words are true.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 xs-mb-30">
                            <div class="card border-0 black-bg o-hidden h-100">
                                <img class="img-fluid" src="images/about/03.jpg" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white">Islamic Product</a></h4>          
                                    <p class="mb-0 pb-0 text-white">We also know those epic stories, those modern-day.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 xs-mb-30">
                            <div class="card border-0 black-bg o-hidden h-100">
                                <img class="img-fluid" src="images/about/01.jpg" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white">  QA Section </a></h4>         
                                    <p class="mb-0 pb-0 text-white">Let's make something great together</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 xs-mb-30">
                            <div class="card border-0 black-bg o-hidden h-100">
                                <img class="img-fluid" src="images/blog/big/03.jpg" alt="">
                                <div class="p-4">
                                    <h4> <a href="#" class="text-white"> Event </a></h4>         
                                    <p class="mb-0 pb-0 text-white">Save Yourself Time By Using Webster</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

            <section class="contact-box contact-box-top theme-bg">
                <div class="container">
                    <div class="row pt-20 pb-40">
                        <div class="col-md-4 sm-mb-30">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="ti-map text-white"></i>
                                </div>
                                <div class="contact-info">
                                    <h5 class="text-white"> 17504 Carlton Cuevas Rd</h5>
                                    <span class="text-white">Gulfport, MS, 39503</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 sm-mb-30">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="ti-headphone text-white"></i>
                                </div>
                                <div class="contact-info">
                                    <h5 class="text-white">+(704) 279-1249</h5>
                                    <span class="text-white">Mon-Fri 8:30am-6:30pm</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="ti-email text-white"></i>
                                </div>
                                <div class="contact-info">
                                    <h5 class="text-white">letstalk@webster.com</h5>
                                    <span class="text-white">24 X 7 online support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--================================= Latest Aticles ============================--> 

            <section class="page-section-ptb">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center">
                                <!--<h6>Meet our Superheros </h6>-->
                                <h2 class="title-effect">Latest Articles</h2>
                                <!--<p>Take your project to a new level with the Webster.</p>-->
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <?php foreach ($result2 as $row2): ?>
                                <div class="col-lg-4 col-md-4">
                                    <div class="blog-entry mb-50">
                                        <div class="entry-image clearfix">
                                            <?php
                                            if (file_exists("_images/article/" . $row2->article_img)) {
                                                ?>
                                                <img class="img-fluid" style="height:200px;" src="<?php echo base_url(); ?>_images/article/<?php echo $row2->article_img; ?>" alt="">
                                                <?php
                                            } else {
                                                ?>
                                                <img class="img-fluid" style="height:200px;" src="<?php echo base_url(); ?>_images/article/no-image.png" alt=""> 
                                            <?php } ?>
                                <!--<img class="img-fluid" src="images/blog/01.jpg" alt="">-->
                                        </div>
                                        <div class="blog-detail" style="height:380px;">
                                            <div class="entry-title mb-10">
                                                <a href="#"> <?php echo $row2->article_name; ?> </a>
                                            </div>
                                            <div class="entry-meta mb-10">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content">
                                                <p class="text-justify">
                                                    <?php $text = $row2->article_details; ?>
                                                    <?php echo $this->wordsnippet->get_snippet(strip_tags($text), 50) . " ........."; ?> 
                                                </p>
                                            </div>
                                            <div class="entry-share clearfix">
                                                <div class="entry-button">
                                                    <a class="button arrow" href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $row2->article_id; ?>">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="social list-style-none float-right">
                                                    <strong>Share : </strong>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="text-center mt-50">
                            <a class="button x-small" href="<?php echo base_url(); ?>index.php/Article"> <i class="fa fa-edit"></i> All Articles </a>
                        </div>
                        </section>

                        <!-----------------------------------  Total Visitor Audio Video Section ------------------------------> 


                        <section class="our-service-home page-section-ptb bg-overlay-black-80 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/06.jpg);">
                            <div class="container">
                                <div class="row mb-60">
                                    <div class="col-md-8">
                                        <div class="section-title">
                                            <h6 class="text-white">Many reasons to</h6>
                                            <h2 class="text-white title-effect">Why choose webster</h2>
                                            <p class="text-white">The lightweight template, which enables engineering the customer-oriented websites that perform to the notch.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 sm-mb-30">       
                                        <div class="counter text-white">
                                            <span class="icon ti-user theme-color"></span>
                                            <span class="timer" data-to="4905" data-speed="10000">4905</span>
                                            <label>ORDERED COFFEE'S</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 sm-mb-30">
                                        <div class="counter text-white">
                                            <span class="icon ti-help-alt theme-color"></span>
                                            <span class="timer" data-to="3750" data-speed="10000">3750</span>
                                            <label>QUESTIONS ANSWERED</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                                        <div class="counter text-white">
                                            <span class="icon ti-check-box theme-color"></span>
                                            <span class="timer" data-to="4782" data-speed="10000">4782</span>
                                            <label>COMPLETED PROJECTS</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="counter text-white">
                                            <span class="icon ti-face-smile theme-color"></span>
                                            <span class="timer" data-to="3237" data-speed="10000">3237</span>
                                            <label>HAPPY CLIENTS</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> 

                        <!--=================================
product -->

                        <section class="shop-tab page-section-ptb">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab tab-border nav-center">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" id="man-women-tab" data-toggle="tab" href="#man-women" role="tab" aria-controls="man-women" aria-selected="true">  New Book</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pants-trousers-tab" data-toggle="tab" href="#pants-trousers" role="tab" aria-controls="pants-trousers" aria-selected="false"> Best Seller Books </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="clothing-tab" data-toggle="tab" href="#clothing" role="tab" aria-controls="clothing" aria-selected="false"> Most Important Books </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="clothing-tab" data-toggle="tab" href="#clothing" role="tab" aria-controls="clothing" aria-selected="false"> Quran Related Books </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="clothing-tab" data-toggle="tab" href="#clothing" role="tab" aria-controls="clothing" aria-selected="false"> hadith Related Books </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade active show" id="man-women" role="tabpanel" aria-labelledby="man-women-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/01.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/02.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/03.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/04.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pants-trousers" role="tabpanel" aria-labelledby="pants-trousers-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/05.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/06.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/07.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/08.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="clothing" role="tabpanel" aria-labelledby="clothing-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/09.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/10.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/11.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6">
                                                            <div class="product mt-30">
                                                                <div class="product-image">
                                                                    <img class="img-fluid mx-auto" src="images/shop/12.jpg" alt="">
                                                                    <div class="product-overlay">
                                                                        <div class="add-to-cart">
                                                                            <a href="shop-single.html">add to cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-des">
                                                                    <div class="product-title">
                                                                        <a href="shop-single.html">Product name</a>
                                                                    </div>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <del>$24.99</del> <ins>$12.49</ins>
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
                        </section>

                        <!--=================================
                        product -->






                        <?php include 'footer.php'; ?>

                        <!--=================================
                         footer -->

                    </div><!-- wrapper End -->



                    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>




                    </body>
                    </html> 