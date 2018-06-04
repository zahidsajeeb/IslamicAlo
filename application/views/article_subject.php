<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <body>
        <div class="wrapper">
            <?php include 'preloader.php'; ?>
            <?php include 'menu.php'; ?>

            <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo base_url(); ?>images/bg/02.jpg);">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <div class="page-title-name">
                                <h1> <?php echo $result2->bangla_name; ?>  </h1>
                                <!--<p>We know the secret of your success</p>-->
                            </div>
                            <ul class="page-breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span> <?php echo $result2->bangla_name; ?> </span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!--================================= rev-slider -->
<!--            <section class="blog white-bg page-section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 service">
                            <div class="our-service mb-40 pb-0">
                                <div class="section-title mb-20">
                                    <h6>বিষয়ের তালিকা</h6>
                                </div>
                                <ul>
            <?php
            foreach ($result1 as $row1):
                $this->db->select("count('`subject_id`') as 'art_total'");
                $this->db->from("article");
                $this->db->where("subject_id", $row1->subject_id);
                $this->db->limit(1);
                $query = $this->db->get();
                $totalArt = $query->result();
                ?>
                                        <li>
                                            <a class="gray-bg" href="<?php echo base_url(); ?>index.php/Article/ArticleSubject/<?php echo $row1->subject_id; ?>"><?php echo $row1->bangla_name; ?>( <?php echo $totalArt[0]->art_total ?> )</a></li>
<?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                         ========================== 

                        <div class="col-lg-9">
<?php foreach ($result as $row): ?>
                                    <div class="blog-entry mb-50">
                                        <div class="entry-image clearfix">
                <?php
                if (file_exists("_images/article/" . $row->article_img)) {
                    ?>
                                                    <img class="img-fluid" style="height:400px;" src="<?php echo base_url(); ?>_images/article/<?php echo $row->article_img; ?>" alt="">
                    <?php
                } else {
                    ?>
                                                    <img class="img-fluid" style="height:400px;" src="<?php echo base_url(); ?>_images/article/no-image.png" alt=""> 
    <?php } ?>

                                        </div>

                <?php
                $text = $row->article_details;
                ?>
                                        <div class="blog-detail">
                                            <div class="entry-title mb-10">
                                                <a href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $row->article_id; ?>"><?php echo $row->article_name; ?></a>
                                            </div>
                                            <div class="entry-meta mb-10">
                                                <div class='oss-widget-interface'></div>
                                            </div>
                                            <div class="entry-content">
                <?php
                echo $this->wordsnippet->get_snippet(strip_tags($text), 50) . ".......";
                ?>   
                                            </div>
                                            <div class="entry-share clearfix">
                                                <div class="entry-button">
                                                    <a class="button arrow" href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $row->article_id; ?>">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="social list-style-none float-right">
                                                   <ul>
                                                        <li> <i class="fa fa-folder-open-o"></i> <strong> Article Read :</strong><a>500 Times</a> </li>
                                                        <li> <a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            <?php endforeach; ?>
                        </div>
                    </div> 
                </div>
            </section>-->


            <!--================================= Blog Post =========================== -->

            <section class="blog white-bg page-section-ptb">
                <div class="container"> 
                    <div class="row">
                        <!-- left  -->
                        <div class="col-lg-9 col-md-12 order-lg-12 order-1">
                            <?php
                            foreach ($result as $row):
                                ?>

                                <div class="blog-entry mb-50 content">
                                    <div class="entry-image clearfix">
                                        <?php
                                        if (file_exists("_images/article/" . $row->article_img)) {
                                            ?>
                                            <a href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $row->article_id; ?>"> <img class="img-fluid"  src="<?php echo base_url(); ?>_images/article/<?php echo $row->article_img; ?>" alt=""> </a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $row->article_id; ?>">  <img class="img-fluid" style="height:158px; width:346px" src="<?php echo base_url(); ?>_images/article/no-image.png" alt=""> </a>
                                        <?php } ?>

                                    </div>

                                    <?php
                                    $text = $row->article_details;
                                    ?>
                                    <div class="blog-detail">
                                        <div class="entry-title mb-10">
                                            <a href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $row->article_id; ?>"><?php echo $row->article_name; ?></a>
                                        </div>
                                        <div class="entry-meta mb-10">
                                            <div class='oss-widget-interface'></div>
                                        </div>
                                        <div class="entry-content">
                                            <?php
                                            echo $this->wordsnippet->get_snippet(strip_tags($text), 50) . ".......";
                                            ?>   
                                        </div>
                                        <div class="entry-share clearfix">
                                            <div class="entry-button">
                                                <a class="button arrow" href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $row->article_id; ?>">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="social list-style-none float-right">
                                                <ul>
                                                    <li> <i class="fa fa-folder-open-o"></i> <strong> Article Read :</strong><a>500 Times</a> </li>
                                                    <li> <a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="row">
                                <div class="col-md-12 text-center">

                                    <nav aria-label="...">
                                        <?php echo $this->pagination->create_links(); ?>  
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-12 order-lg-1 order-12 service">
                            <div class="our-service mb-40 pb-0">
                                <div class="section-title mb-20">
                                    <h6>বিষয়ের তালিকা</h6>
                                </div>
                                <ul>
                                    <?php
                                    foreach ($result1 as $row1):
                                        $this->db->select("count('`subject_id`') as 'art_total'");
                                        $this->db->from("article");
                                        $this->db->where("subject_id", $row1->subject_id);
                                        $this->db->limit(1);
                                        $query = $this->db->get();
                                        $totalArt = $query->result();
                                        ?>
                                        <li><a class="gray-bg" href="<?php echo base_url(); ?>index.php/Article/ArticleSubject/<?php echo $row1->subject_id; ?>">
                                                <i class="fa fa-hand-o-up"></i> &nbsp;<?php echo $row1->bangla_name; ?> 
                                                <span class="float-right">[<?php echo $totalArt[0]->art_total ?>]</span>
                                            </a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>                          
                        </div>

                        <!-- right  -->

                    </div>
                </div>
            </section>

            <?php include 'footer.php'; ?>
        </div>

        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    </body>
</html>
