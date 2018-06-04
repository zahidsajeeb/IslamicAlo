<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>

    <body>

        <div class="wrapper">

            <!--=================================
             preloader -->

            <?php include 'preloader.php'; ?>

            <!--=================================
             preloader -->

            <!--=================================
             header -->
            <?php include 'menu.php'; ?>

            <!--=================================
             header -->

            <!--=================================
             rev-slider -->

            <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo base_url(); ?>images/bg/02.jpg);">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <div class="page-title-name">
                                <h1>All Audios</h1>
                                <!--<p>We know the secret of your success</p>-->
                            </div>
                            <ul class="page-breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span>all audios</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!--=================================
             rev-slider -->

            <!--=================================
            See our awesome -->

            <section class="conference-schedule white-bg page-section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title line text-center center">
                                <!--<h6 class="subtitle">SCHEDULE </h6>-->
                                <h2 class="title">Latest Audio Lecture </h2>
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
                                            <th>Lecturer</th>
                                            <th>Lecturer Name</th>
                                            <th>Video</th>
                                            <th>Audio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($result as $row):
                                            ?>
                                            <tr>
                                                <td> <?php echo $i++; ?> </td>
                                                <?php
                                                if ($row->lecturer_img == "") {
                                                    ?>
                                                    <td style="text-align: center;"> <img style="height:150px;width:150px;" src="<?php echo base_url(); ?>_images/lectur/lecturer/no-image.png"> </td>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <td style="text-align: center;"> <img style="height:150px;width:150px;" src="<?php echo base_url(); ?>_images/lectur/lecturer/<?php echo $row->lecturer_img; ?>"> </td>
                                                    <?php
                                                }
                                                ?>
                                                <td> <?php echo $row->lecturer_name; ?> </td>
                                                <td>   <a href="<?php echo base_url(); ?>index.php/AudioVideo/LecturerVideoLists/<?php echo $row->lecturer_id; ?>" class="btn btn-md btn-info"> <i class="fa fa-video-camera"></i> Video Lectures</a> </td>
                                                <td>   <a href="<?php echo base_url(); ?>index.php/AudioVideo/LecturerAaudioLists/<?php echo $row->lecturer_id; ?>" class="btn btn-md btn-danger"> <i class="fa fa-headphones"></i> Audio Lectures</a></td>
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