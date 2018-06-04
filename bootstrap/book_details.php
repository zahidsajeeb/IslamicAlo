<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <body>
        <div class="wrapper">
            <?php include 'preloader.php'; ?>
            <?php include 'book_menu.php'; ?>

            <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo base_url(); ?>images/bg/02.jpg);">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <div class="page-title-name">
                                <h1>Book Details</h1>
                                <!--<p>We know the secret of your success</p>-->
                            </div>
                            <ul class="page-breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span>Book Details</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <section class="shop-single page-section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="slider-slick">
                                        <div class="slider slider-for detail-big-car-gallery"> 
                                            <?php

                                            function watermarkImage($SourceFile, $WaterMarkText, $DestinationFile) {
                                                list($width, $height) = getimagesize($SourceFile);
                                                $image_p = imagecreatetruecolor($width, $height);
                                                $image = imagecreatefromjpeg($SourceFile);
                                                imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height);
                                                $black = imagecolorallocate($image_p, 0, 0, 139);
                                                $font = $_SERVER['DOCUMENT_ROOT'] . '/islamic/asset/fonts/arial.ttf';
                                                $font_size = 16;
                                                imagettftext($image_p, $font_size, 0, 150, 300, $black, $font, $WaterMarkText);
                                                if ($DestinationFile <> '') {
                                                    imagejpeg($image_p, $DestinationFile, 100);
                                                } else {
                                                    header('Content-Type: image/jpeg');
                                                    imagejpeg($image_p, null, 100);
                                                };
                                                imagedestroy($image);
                                                imagedestroy($image_p);
                                            }

                                            ;
                                            ?>
                                            <?php
                                            ?>

                                            <?php
                                            if ($result->ebook_image != '') {
                                                $SourceFile = $_SERVER['DOCUMENT_ROOT'] . '/islamic/_images/books/' . $result->ebook_image;
                                                $DestinationFile = $_SERVER['DOCUMENT_ROOT'] . '/islamic/_images/books/watermark_img/w_' . $result->ebook_image;
                                                $WaterMarkText = 'Islamic-Alo.com';
                                                watermarkImage($SourceFile, $WaterMarkText, $DestinationFile);
                                                ?>
                                                <img  class="img-fluid" src='<?php echo base_url() . '_images/books/watermark_img/w_' . $result->ebook_image ?>'>
                                                <?php
                                            } else {
                                                ?>
                                                <img class="img-fluid" src="<?php echo base_url(); ?>_images/books/no-book.png" alt="">
                                                <?php
                                            }
                                            ?>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-detail clearfix">
                                        <div class="product-detail-title mb-20 sm-mt-40">
                                            <h4 class="mb-10"> <?php echo $result->ebook_title; ?> </h4>           
                                            <span style="font-weight:bold;">লেখক / অনুবাদক: </span> <a> <?php echo $result->author_name; ?></a><br>
                                            <span style="font-weight:bold;"> Publication: </span> <a>   <?php echo $result->publisher_name; ?></a> <br>
                                            <span style="font-weight:bold;"> Book ID: </span> <a> <?php echo $result->ebooks_id; ?> </a>
                                            <p>
                                                Only 30 taka delivery on any amount of purchase Get it in 1-5 working days
                                            </p>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="clearfix mb-30">
                                            <div class="product-detail-price"><del>$39.99</del> <ins>$24.99</ins></div>
                                            <div class="product-detail-rating float-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="product-detail-quantity clearfix mb-40">
                                            <div class="input-group">
                                                <input type="number" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                            </div>
                                            <div class="product-detail add-to-cart">
                                                <a class="button small" href="#"><i class="fa fa-cart-plus"></i> Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product-detail-social">
                                            <span>Share:</span>
                                            <ul class="list-style-none">
                                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-rss"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-envelope-o"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-lg-12 col-md-12">
                                    <div class="title mt-30 mb-30">
                                        <h6>Related Products</h6>
                                    </div>
                                    <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="true" data-items="3" data-sm-items="2" data-lg-items="3" data-md-items="3" data-xs-items="2" data-autoplay="false">

                                        <?php
                                        foreach ($related_products as $product):
                                            ?>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <?php if ($product->ebook_image != '') { ?>
                                                            <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $product->ebooks_id; ?>">
                                                                <img style="height:450px;" class="img-fluid mx-auto" src="<?php echo base_url(); ?>_images/books/<?php echo $product->ebook_image; ?>" alt="">
                                                            </a>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $product->ebooks_id; ?>">
                                                                <img style="height:450px;" class="img-fluid mx-auto" src="<?php echo base_url(); ?>_images/books/no-book.png" alt="">
                                                            </a>
                                                            <?php
                                                        }
                                                        ?>
                                                        <div class="product-overlay">
                                                            <div class="add-to-cart">
                                                                <a href="javascript:void(0)"><i class="fa fa-cart-plus"></i> Add To Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-des">
                                                        <div class="product-title">
                                                            <a  href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $product->ebooks_id; ?>"> <?php echo $product->ebook_title; ?></a>
                                                        </div>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <del>$24.99</del> <ins> <?php echo $product->ebook_price; ?> </ins>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        <?php endforeach; ?> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 order-lg-1 order-12 service">
                            <!-- ======================= Author Lists =======================-->
                            <div class="our-service mb-40 pb-0">
                                <div class="section-title mb-20">
                                    <h6>Author List</h6>
                                </div>
                                <ul>
                                    <?php
                                    foreach ($authors as $author):
                                        $this->db->select("count('`publisher_id`') as 'auth_total'");
                                        $this->db->from("ebooks");
                                        $this->db->where("ebooks.author_id", $author->ebook_author_id);
                                        $this->db->where("status", 1);
                                        $this->db->limit(1);
                                        $query = $this->db->get();
                                        $totalAuth = $query->result();
                                        ?>
                                        <li>
                                            <a class="gray-bg" href="<?php echo base_url(); ?>index.php/Book/AuthorBookLists/<?php echo $author->ebook_author_id; ?>" style="font-size:13px;"><i class="fa fa-align-left"></i> &nbsp; <?php echo $author->author_name; ?> <span class="float-right">[<?php echo $totalAuth[0]->auth_total ?>]</span> </a>
                                        </li>
                                    <?php endforeach; ?>
                                    <li><a class="gray-bg" href="<?php echo base_url(); ?>index.php/Book/AllAuthorLists"><i class="fa fa-align-left"></i> &nbsp; See All Author</a></li>
                                </ul>
                            </div>

                            <!-- ======================= Publisher Lists =======================-->
                            <div class="our-service mb-40 pb-0">
                                <div class="section-title mb-20">
                                    <h6>Publisher List</h6>
                                </div>
                                <ul>
                                    <?php
                                    foreach ($publishers as $publisher):
                                        $this->db->select("count('`publisher_id`') as 'pub_total'");
                                        $this->db->from("ebooks");
                                        $this->db->where("ebooks.publisher_id", $publisher->publisher_id);
                                        $this->db->where("status", 1);
                                        $this->db->limit(1);
                                        $query = $this->db->get();
                                        $totalPub = $query->result();
                                        ?>
                                        <li>
                                            <a class="gray-bg" style="font-size:13px;" href="<?php echo base_url(); ?>index.php/Book/PublisherBookLists/<?php echo $publisher->publisher_id; ?>"><i class="fa fa-list-ul"></i> &nbsp; <?php echo $publisher->publisher_name; ?> <span class="float-right">[<?php echo $totalPub[0]->pub_total ?>]</span> </a>
                                        </li>
                                    <?php endforeach; ?>
                                    <li><a class="gray-bg" href="<?php echo base_url(); ?>index.php/Book/AllPublisherLists"><i class="fa fa-list-ul"></i> &nbsp; See All Publisher</a></li>

                                </ul>
                            </div> 

                            <!-- ======================= Topics Lists =======================-->
                            <div class="our-service mb-40 pb-0">
                                <div class="section-title mb-20">
                                    <h6> Topics </h6>
                                </div>
                                <ul>
                                    <?php
                                    foreach ($topics as $topic):
                                        $this->db->select("count('`category_id`') as 'cat_total'");
                                        $this->db->from("ebooks");
                                        $this->db->where("ebooks.category_id", $topic->category_id);
                                        $this->db->where("status", 1);
                                        $this->db->limit(1);
                                        $query = $this->db->get();
                                        $totalCat = $query->result();
                                        ?>

                                        <li>
                                            <a class="gray-bg" href="<?php echo base_url(); ?>index.php/Book/TopicsDetails"><i class="fa fa-tasks"></i> &nbsp;<?php echo $topic->category_name; ?><span class="float-right">[<?php echo $totalCat[0]->cat_total ?>] </span> </a>
                                        </li>
                                    <?php endforeach; ?>
                                    <li><a class="gray-bg" href="javascript:void(0)"><i class="fa fa-tasks"></i> See All Topics</a></li>

                                </ul>
                            </div> 
                        </div>             
                    </div>
                </div>
            </section>







            <?php include 'footer.php'; ?>
        </div>
        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
    </body>
</html>