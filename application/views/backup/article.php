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
            <h2 style="text-align:left;"> Islamic Articles </h2>
            <hr>
            <br>
            <div class="row">
                <!-- Sidebar Column -->
                <div class="col-lg-3 mb-4">
                    <div class="list-group">
                        <?php foreach ($result1 as $row1):
                            ?>
                            <a href="#" class="list-group-item"><?php echo $row1->bangla_name; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="col-lg-9 mb-4">
                                        <h2>Section Heading</h2>
                    <?php foreach ($result as $row): ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-lg-6">
                                        <a href="#"> 
                                            <?php
                                            if($row->article_img!=' '){
                                            ?>
                                            <img style="height:250px; width:300px;" class="img-fluid rounded" src="<?php echo base_url(); ?>_images/article/<?php echo $row->article_img; ?>" alt="">
                                            <?php 
                                            }
                                            else{
                                            ?>
                                            <img style="height:250px; width:300px;" class="img-fluid rounded" src="<?php echo base_url(); ?>_images/article/no-image.png" alt="">
                                            <?php
                                            }
                                            ?>
                                        </a>

                                    </div>                                 

                                    <div class="col-lg-6">
                                        <h5 class="card-title"> <?php echo $row->article_name; ?> </h5>
                                        <p class="card-text">   <?php echo substr($row->article_details, 0, 500); ?> ......... </p>
                                        <a href="<?php echo base_url();?>index.php/Article/ArticleDetails/<?php echo $row->article_id;?>" class="btn btn-primary">Read More &rarr;</a>
                                    </div>
                                </div>
                            </div>
                            <!--                            <div class="card-footer text-muted">
                                                            Posted on January 1, 2017 by
                                                            <a href="#">Start Bootstrap</a>
                                                        </div>-->
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
            <?php include 'includes/footer.php'; ?>

    </body>

</html>




