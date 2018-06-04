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
            <h2 style="text-align:left;"> Articles Details </h2>
            <hr>
            <br>

            <div class="row">

                <!-- Post Content Column -->
                <div class="col-lg-8">

                    <!-- Preview Image -->
                    <img class="img-fluid rounded"  src="<?php echo base_url(); ?>_images/article/<?php echo $result->article_img; ?>" alt="">

                    <hr>

                    <!-- Date/Time -->
                    <p>Posted on <?php echo $result->add_date;?> </p>

                    <hr>

                    <!-- Post Content -->
                    <p class="lead" style="text-align:justify;">
                        <?php echo $result->article_details;?>
                    </p>

                    
                    <hr>
                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Search Widget -->
                    <div class="card mb-4" style="border:0px;">
                        <h5 class="card-header" style="text-align:center;">Menu</h5>
                        <div class="list-group">
                            <?php foreach ($result1 as $row1):
                                ?>
                                <a href="#" class="list-group-item"><?php echo $row1->bangla_name; ?></a>
                            <?php endforeach; ?>
                        </div>
                        <!--            <div class="card-body">
                                      <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                          <button class="btn btn-secondary" type="button">Go!</button>
                                        </span>
                                      </div>
                                    </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>

</html>




