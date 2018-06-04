<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php'; ?>

    <body>
        <!-- Menu -->
        <?php include 'includes/menu.php'; ?>

        <!-- Menu -->
        <?php include 'includes/slider.php'; ?>
        <br>
        <!-- Page Content -->
        <div class="container">
            <h2 style="text-align:left;"> <?php echo $result->lecturer_name; ?> </h2>
            <hr>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-12">
                        <img class="card-img-top" style="height:250px;width:300px;margin: 0px auto; margin-top:15px;" src="<?php echo base_url(); ?>_images/lectur/lecturer/<?php echo $result->lecturer_img; ?>" alt="Card image cap">

                        <div class="card-body" style="margin: 0px auto;">                          
                            <a href="<?php echo base_url(); ?>index.php/AudioVideo/lecturer_video_list/<?php echo $result->lecturer_id; ?>" class="btn btn-md btn-info">   <i class="fa fa-video-camera"></i> Video Lectures</a>
                            <a href="<?php echo base_url(); ?>index.php/AudioVideo/lecturer_audio_list/<?php echo $result->lecturer_id; ?>" class="btn btn-md btn-danger"> <i class="fa fa-headphones"></i>   Audio Lectures</a>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-12">
                    <h3 style="text-align:center;"> Video Lectures </h3> <br>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="text-align:center; vertical-align:middle;"> <?php echo $result->file_name; ?></td>
                                <td style="text-align: center; vertical-align:middle;">
                                    <a class="btn btn-info"><i class="fa fa-download"></i> Download Now </a> 
                                </td>
                            </tr>
                            <tr>
                        <div class="embed-responsive embed-responsive-16by9">
                            <?php
                              $arr = explode('&quot;', htmlspecialchars($result->embed_code));
//                            $arr = explode('"', htmlspecialchars($result->embed_code));
//                            $arr = explode(' ', $arr[1]);
//                            $link= substr($arr[0], 0, -6);
//                            print_r($arr);
                            ?>
                            <iframe class="embed-responsive-item" src="<?php echo $arr[5];?>" allowfullscreen></iframe>
                        </div>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>
        </div>
        <?php include 'includes/footer.php'; ?>

    </body>

</html>


