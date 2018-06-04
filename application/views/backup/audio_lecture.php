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
            <h2 style="text-align:left;"> <?php echo $result1->lecturer_name; ?> </h2><hr><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-12">
                        <img class="card-img-top" style="height:250px;width:300px;margin: 0px auto; margin-top:15px;" src="<?php echo base_url(); ?>_images/lectur/lecturer/<?php echo $result1->lecturer_img; ?>" alt="Card image cap">

                        <div class="card-body" style="margin: 0px auto;">                          
                            <a href="<?php echo base_url(); ?>index.php/AudioVideo/lecturer_video_list/<?php echo $result1->lecturer_id; ?>" class="btn btn-md btn-info">   <i class="fa fa-video-camera"></i> Video Lectures</a>
                            <a href="<?php echo base_url(); ?>index.php/AudioVideo/lecturer_audio_list/<?php echo $result1->lecturer_id; ?>" class="btn btn-md btn-danger"> <i class="fa fa-headphones"></i>   Audio Lectures</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <h3 style="text-align:center;"> Audio Lectures ( <?php echo count($result) ?> ) </h3> <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align:center;"> <b> SL No</b></th>
                                <th style="text-align:center;"> <b> Lecture Title</b></th>
                                <th style="text-align:center;"> <b> Live </b></th>
                                <th style="text-align:center;"> <b> Download<b></th>
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
                                            <a href="<?php echo base_url();?>index.php/AudioVideo/AudioLive/<?php echo $row->file_id;?>" class="btn btn-danger"><i class="fa fa-play"></i> Watch </a>                                    
                                        </td>
                                        <td style="text-align: center; vertical-align:middle;">
                                            <a href="<?php echo $row->download_link; ?>" target="_blank" class="btn btn-info"><i class="fa fa-download"></i> Download </a> 
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                </div>
            </div>
            <hr>
        </div>                                    
        <?php include 'includes/footer.php'; ?>

    </body>
</html>


