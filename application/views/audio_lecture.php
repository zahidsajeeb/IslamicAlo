<!DOCTYPE html>
<html lang="en">
    <?php include 'head_audio.php'; ?>
    <body>
        <div class="wrapper">
            <?php include 'preloader.php'; ?>
            <?php include 'menu.php'; ?>

            <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo base_url(); ?>images/bg/02.jpg);">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <div class="page-title-name">
                                <h1>Audio Lecturer</h1>
                                <!--<p>We know the secret of your success</p>-->
                            </div>
                            <ul class="page-breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span>audio lecturer</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item">
                              <!--<iframe src="https://www.youtube.com/embed/nrJtHemSPW4?rel=0" allowfullscreen></iframe>-->
                                <img style="width:100%; height:350px;" src="<?php echo base_url(); ?>_images/lectur/lecturer/<?php echo $result1->lecturer_img; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 sm-mt-30">
                            <div class="section-title mb-20">
                                <!--<h6>Who we are and what we do </h6>-->
                                <h2><?php echo $result1->lecturer_name; ?> </h2>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 mt-50">
                                        <div class="counter text-blue">
                                            <span class="ti-video-camera icon" aria-hidden="true"></span>
                                            <span class="timer" data-to="2352" data-speed="10000">2352</span>
                                            <label>Video Lecture</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 mt-50">
                                        <div class="counter text-blue">
                                            <span class="ti-headphone icon" aria-hidden="true"></span>
                                            <span class="timer" data-to="125" data-speed="10000">125</span>
                                            <label>Audio Lecture</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 mt-50">
                                        <div class="counter text-blue">
                                            <span class="ti-bar-chart icon" aria-hidden="true"></span>
                                            <span class="timer" data-to="125" data-speed="10000">125</span>
                                            <label>Visitor</label>
                                        </div>
                                    </div>
                                </div>
                                <br>

<!--            <p>We truly care about our users and our product. We are dedicated to providing you with the best experience possible.</p>
          </div>
           <p>Webster is an exclusive multi-purpose 100% responsive template with powerful features. Simple and well-structured coding, high quality and flexible layout, scalable features along with color schemes to create tailor-cut websites. </p>-->

                                <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/AudioVideo/LecturerVideoLists/<?php echo $result1->lecturer_id; ?>">   
                                    <i class="fa fa-video-camera"></i> Video Lecture 
                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/AudioVideo/LecturerAaudioLists/<?php echo $result1->lecturer_id; ?>">
                                    <i class="fa fa-headphones"></i> Audio Lecture 
                                </a>
                            </div>  
                        </div>
                    </div>
            </section>






            <section class="conference-schedule white-bg page-section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title line text-center center">
                                <!--<h6 class="subtitle">SCHEDULE </h6>-->
                                <h2 class="title">Audio Lectures (<?php echo count($result) ?>)</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text-center mb-30"> Saturday, 10 january 2018</h5>
                            <div class="table-responsive ">
                                <table class="table table-bordered table-3 text-left table-striped">
                                    <thead style="background:#1d2152; color:white;">
                                        <tr class="text-left">
                                            <th># </th>
                                            <th>Lecturer Title</th>
                                            <th>Live</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($result as $row):
                                            ?>
                                            <tr>
                                                <td style="text-align: center; vertical-align:middle;"> <?php echo $i++; ?> </td>
                                                <td style="vertical-align:middle;"> <?php echo $row->file_name; ?></td>
                                                <td style="text-align: center; vertical-align:middle;"> 
                                                    <a href="<?php echo base_url(); ?>index.php/AudioVideo/AudioLive/<?php echo $row->file_id; ?>" class="btn btn-danger"><i class="fa fa-play"></i> Watch </a>                                    
                                                </td>
                                                <td style="text-align: center; vertical-align:middle;">
                                                    <a href="<?php echo $row->download_link; ?>" target="_blank" class="btn btn-info"><i class="fa fa-download"></i> Download </a> 
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>




            <?php include 'footer.php'; ?>

        </div>

        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

        <!--=================================
         jquery -->




    </body>
</html>