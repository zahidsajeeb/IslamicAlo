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
            <h2 style="text-align:center;"> All Audio Lectures</h2>
            <br>
            <div class="row">
                <table class="table table-bordered">
                    <tbody>
                        <?php
                        foreach ($result as $row):
                            ?>
                            <tr>
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

                                <td style="text-align: center; vertical-align:middle;"> <b style="margin-top:350px;"> <?php echo $row->lecturer_name; ?> </b> </td>
                                <td style="text-align: center; vertical-align:middle;"> 
                                    <a href="<?php echo base_url(); ?>index.php/AudioVideo/lecturer_video_list/<?php echo $row->lecturer_id; ?>" class="btn btn-md btn-info"> <i class="fa fa-video-camera"></i> Video Lectures</a>
                                    <a href="<?php echo base_url(); ?>index.php/AudioVideo/lecturer_audio_list/<?php echo $row->lecturer_id; ?>"href="" class="btn btn-md btn-danger"> <i class="fa fa-headphones"></i> Audio Lectures</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            <br>
            <!-- /.row -->

            <hr>

        </div>
        <!-- /.container -->

        <!--footer-->

        <?php include 'includes/footer.php'; ?>

    </body>

</html>

