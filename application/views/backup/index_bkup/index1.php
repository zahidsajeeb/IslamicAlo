<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <body>

        <div class="wrapper"><!-- wrapper start -->
            <?php include 'preloader.php'; ?>
            <?php include 'menu.php'; ?>
            <?php include 'slider.php'; ?>

            <!--================================= Latest Video Lectures --> 

            <section class="page-section-ptb">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center">
                                <!--<h6>Meet our Superheros </h6>-->
                                <h2 class="title-effect">Latest Video Lectures</h2>
                                <!--<p>Take your project to a new level with the Webster.</p>-->
                            </div>
                        </div>
                    </div>

                    <div class="team-3">
                        <div class="row">
                            <?php foreach ($result as $row): ?>
                                <div class="col-lg-3 col-sm-6 sm-mb-30" style="margin-bottom:15px;">
                                    <div class="team team-round full-border">
                                        <div class="team-photo">
                                            <img class="img-fluid mx-auto" src="_images/lectur/lecturer/<?php echo $row->lecturer_img ?>" alt=""> 
                                        </div>    
                                        <div class="team-description"> 
                                            <div class="team-info"> 
                                                <h5><a href="team-single.html"><?php echo $row->file_name ?></a></h5>
                                                <span>By- <?php echo $row->lecturer_name; ?> </span>
                                            </div>
                                            <!--                                        <div class="team-contact">
                                                                                        <span class="call"> +(704) 279-1249</span>
                                                                                        <span class="email"> <i class="fa fa-envelope-o"></i></span>
                                                                                    </div>-->

                                        </div>
                                    </div>
                                </div> 
                            <?php endforeach; ?>
                        </div>
                        <div class="text-center mt-50">
                            <a class="button medium" href="<?php echo base_url(); ?>index.php/AudioVideo/AllVideos"> <i class="fa fa-video-camera"></i> See All Video Lecture</a>
                            <div class="text-center mt-50">
                            </div>
                        </div>
                        </section>

                        <!--================================= Latest Audio Lectures --> 

                        <section class="page-section-ptb">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="section-title text-center">
                                            <!--<h6>Meet our Superheros </h6>-->
                                            <h2 class="title-effect">Latest Audio Lectures</h2>
                                            <!--<p>Take your project to a new level with the Webster.</p>-->
                                        </div>
                                    </div>
                                </div>

                                <div class="team-3">
                                    <div class="row">
                                        <?php foreach ($result1 as $row): ?>
                                            <div class="col-lg-3 col-sm-6 sm-mb-30" style="margin-bottom:15px;">
                                                <div class="team team-round full-border">
                                                    <div class="team-photo">
                                                        <img class="img-fluid mx-auto" style="height:200px; width:100%;" src="_images/lectur/lecturer/<?php echo $row->lecturer_img ?>" alt=""> 
                                                    </div>    
                                                    <div class="team-description"> 
                                                        <div class="team-info"> 
                                                            <h5><a href="team-single.html"><?php echo $row->file_name ?></a></h5>
                                                            <span>By- <?php echo $row->lecturer_name; ?> </span>
                                                        </div>
                                                        <!--                                        <div class="team-contact">
                                                                                                    <span class="call"> +(704) 279-1249</span>
                                                                                                    <span class="email"> <i class="fa fa-envelope-o"></i></span>
                                                                                                </div>-->

                                                    </div>
                                                </div>
                                            </div> 
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="text-center mt-50">
                                        <a class="button medium"  href="<?php echo base_url(); ?>index.php/AudioVideo/AllAudios"> <i class="fa fa-headphones"></i> See All Audio Lecture</a>
                                    </div>
                                </div>
                            </div>
                        </section>



                        <!--================================= Latest Aticles --> 

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
                                                    <div class="blog-detail">
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
                                        <a class="button medium" href="<?php echo base_url(); ?>index.php/Article"> <i class="fa fa-edit"></i> All Articles </a>
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


                                    <!---------------------------------------------------Latest Video Lectures----------------------------> 

                                    <section class="our-services page-section-ptb gray-bg">
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
                                                            <div class="feature-icon">
                                                                <!--<span aria-hidden="true" class="ti-layers-alt"></span>-->
                                                                <img class="img-fluid mx-auto" style="height:200px; width:100%;" src="_images/lectur/lecturer/<?php echo $row->lecturer_img ?>" alt=""> 
                                                            </div>
                                                            <div class="fature-info"> 
                                                                <h5 class="text-back pt-20 pb-10"><?php echo $row->file_name ?></h5>
                                                                <p> <?php echo $row->lecturer_name; ?></p>
                                                                <a class="btn btn-info" style="color:white;"> <i class="fa fa-check"> </i> See Profile </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="text-center mt-50">
                                                <a class="button medium" href="<?php echo base_url(); ?>index.php/AudioVideo/AllVideos"> <i class="fa fa-video-camera"></i> See All Video Lecture</a>
                                                <div class="text-center mt-50">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <br>

                                    <!---------------------------------------------------Latest Audio Lectures----------------------------> 
                                    <section class="our-services page-section-ptb gray-bg">
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
                                                            <div class="fature-info"> 
                                                                <h5 class="text-back pt-20 pb-10"><?php echo $row->file_name ?></h5>
                                                                <p> <?php echo $row->lecturer_name; ?></p>
                                                                <a class="btn btn-info" style="color:white;"> <i class="fa fa-check"> </i> See Profile </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="text-center mt-50">
                                                <a class="button medium"  href="<?php echo base_url(); ?>index.php/AudioVideo/AllAudios"> <i class="fa fa-headphones"></i> See All Audio Lecture</a>
                                                <div class="text-center mt-50">
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <?php include 'footer.php'; ?>

                                    <!--=================================
                                     footer -->

                                </div><!-- wrapper End -->



                                <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>




                                </body>
                                </html> 