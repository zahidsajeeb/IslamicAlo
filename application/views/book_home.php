<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <!--Custom-menu-->
    <body>
        <div class="wrapper">
            <?php include 'preloader.php'; ?>
            <?php include 'book_menu.php'; ?>
            
            <?php
                function watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile) { 
                list($width, $height) = getimagesize($SourceFile);
                $image_p = imagecreatetruecolor($width, $height);
                $image = imagecreatefromjpeg($SourceFile);
                imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height); 
                $black = imagecolorallocate($image_p, 0, 0, 139);
                $font = $_SERVER['DOCUMENT_ROOT'].'/islamic/asset/fonts/arial.ttf';
                $font_size = 16; 
                imagettftext($image_p, $font_size, 0, 150, 300, $black, $font, $WaterMarkText);
                    if ($DestinationFile<>'') {
                        imagejpeg($image_p, $DestinationFile, 100); 
                    } 
                    else{
                        header('Content-Type: image/jpeg');
                        magejpeg($image_p, null, 100);
                    };
                imagedestroy($image); 
                imagedestroy($image_p); 
                };
            ?>

            <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo base_url(); ?>images/bg/02.jpg);">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <div class="page-title-name">
                                <h1>Book List</h1>
                                <!--<p>We know the secret of your success</p>-->
                            </div>
                            <ul class="page-breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span> Book List</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <div class="menu black-bg">  
                <!--menu start--> 
                <nav class="mega-menu menu">
                    <!--menu list items container--> 
                    <section class="menu-list-items">
                        <div class="container"> 
                            <div class="row"> 
                                <div class="col-lg-12 col-md-12"> 
                                    <ul class="menu-logo">
                                        <li class="text-right"><h3 style="color:white;">Click Here For More Category  <i class="fa fa-arrow-right"></i></h3>
                                    </ul>
                                    <!--menu links--> 
                                    <div class="menu-bar">
                                        <ul class="menu-links">    
                                            <li><a href="javascript:void(0)">Browse Categories <i class="fa fa-angle-down fa-indicator"></i></a>
                                                <!--drop down full width--> 
                                                <div class="drop-down grid-col-12">
                                                    <!--grid row-->
                                                    <div class="grid-row">
                                                        <?php foreach ($ebooks as $row):
                                                            $this->db->select("count('`category_id`') as 'cat_total'");
                                                            $this->db->from("ebooks");
                                                            $this->db->where("ebooks.category_id", $row['category_id']);
                                                            $this->db->where("status",1);
                                                            $this->db->limit(1);
                                                            $query = $this->db->get();
                                                            $totalCat = $query->result();
                                                        ?>
                                                            <div class="grid-col-6" style="padding:0px;">    
                                                                <ul>
                                                                    <li>
                                                                        <a href="<?php echo base_url(); ?>index.php/Book/BookList/<?php echo $row['category_id']; ?>"><i class="fa fa-align-left"></i><?php echo $row['category']; ?> [<?php echo $totalCat[0]->cat_total ?>]
                                                                        <!--<span class="float-right">[<?php echo $totalCat[0]->cat_total ?>]</span>-->
                                                                        </a>
                                                                    </li> 
                                                                </ul>                     
                                                            </div>
                                                        <?php endforeach; ?>         
                                                    </div>
                                                </div>
                                            </li>          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </nav>
                <!--menu end--> 
            </div>



            <section class="shop-tab1 page-section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab nav">
                                <ul class="nav nav-tabs" id="myTab" role="tablist" style="width:100%; table-layout: fixed;">
                                    <li class="nav-item">
                                        <a style="padding:12px 38.9px;" class="nav-link active show" id="man-women-tab" data-toggle="tab" href="#man-women" role="tab" aria-controls="home-07" aria-selected="true"> <i class="fa fa-list-ul"></i> New Book</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="padding:12px 38.9px;" class="nav-link" id="pants-trousers-tab" data-toggle="tab" href="#pants-trousers" role="tab" aria-controls="profile-07" aria-selected="false"><i class="fa fa-list-ul"></i> Best Seller Books </a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="padding:12px 38.9px;" class="nav-link" id="clothing-tab" data-toggle="tab" href="#clothing" role="tab" aria-controls="portfolio-07" aria-selected="false"><i class="fa fa-list-ul"></i> Most Important Books </a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="padding:12px 38.9px;" class="nav-link" id="quran-tab" data-toggle="tab" href="#quran" role="tab" aria-controls="portfolio-07" aria-selected="false"><i class="fa fa-list-ul"></i> Quran Related Books </a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="padding:12px 38.9px;" class="nav-link" id="hadis-tab" data-toggle="tab" href="#hadis" role="tab" aria-controls="portfolio-07" aria-selected="false"><i class="fa fa-list-ul"></i> Hadith Related Books</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="man-women" role="tabpanel" aria-labelledby="man-women-tab">
                                        <div class="row">
                                            <?php foreach ($result1 as $row1): ?>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="product mt-30">
                                                        <div class="product-image">
                                                            <?php
                                                            if ($row1->ebook_image != '') {
                                                                $SourceFile      = $_SERVER['DOCUMENT_ROOT'].'/islamic/_images/books/'.$row1->ebook_image;
                                                                $DestinationFile = $_SERVER['DOCUMENT_ROOT'].'/islamic/_images/books/watermark_img/w_'.$row1->ebook_image; 
                                                                $WaterMarkText   = 'Islamic-Alo.com';
                                                                watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile);
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row1->ebooks_id; ?>">
                                                                    <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url().'_images/books/watermark_img/w_'.$row1->ebook_image?>" alt=""> 
                                                                </a>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row1->ebooks_id; ?>">
                                                                    <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url(); ?>_images/books/no-book.png" alt=""> 
                                                                </a>
                                                                <?php
                                                            }
                                                            ?>
                                                            <!--                                                                    <div class="product-overlay">
                                                                                                                                    <div class="add-to-cart">
                                                                                                                                        <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row1->ebooks_id; ?>" class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Add to cart</a>
                                                                                                                                    </div>
                                                                                                                                </div>-->
                                                        </div>
                                                        <div class="product-des">
                                                            <div class="product-title" style="height:50px;">
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row1->ebooks_id; ?>"><?php echo $row1->ebook_title; ?></a>
                                                            </div>
                                                            <div class="product-rating" style="height:50px;">
                                                                <b> লেখক / অনুবাদক:</b>
                                                                <p> <?php echo $row1->author_name; ?></p>
    <!--                                                                        <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>-->
                                                            </div>
                                                            <div class="product-price">
                                                                <!--<del>$24.99</del>--> 
                                                                <ins> TK:<?php echo $row1->ebook_price; ?></ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pants-trousers" role="tabpanel" aria-labelledby="pants-trousers-tab">
                                        <div class="row">
                                            <?php foreach ($result2 as $row2): ?>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="product mt-30">
                                                        <div class="product-image">
                                                            <?php
                                                            if ($row2->ebook_image != '') {
                                                            ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row2->ebooks_id; ?>" >
                                                                    <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url();?>_images/books/<?php echo $row2->ebook_image;?>" alt="">
                                                                </a>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row2->ebooks_id; ?>"> 
                                                                    <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url(); ?>_images/books/no-book.png" alt=""> 
                                                                </a>
                                                                <?php
                                                            }
                                                            ?>
                                                            <div class="product-overlay">
                                                                <div class="add-to-cart">
                                                                    <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row2->ebooks_id; ?>" class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-des">
                                                            <div class="product-title" style="height:50px;">
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row2->ebooks_id; ?>"><?php echo $row2->ebook_title; ?></a>
                                                            </div>
                                                            <div class="product-rating" style="height:50px;">
                                                                <b> লেখক / অনুবাদক:</b>
                                                                <p> <?php echo $row2->author_name; ?></p>
    <!--                                                                        <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>-->
                                                            </div>
                                                            <div class="product-price">
                                                                <!--<del>$24.99</del>--> 
                                                                <ins> TK:<?php echo $row2->ebook_price; ?></ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="clothing" role="tabpanel" aria-labelledby="clothing-tab">
                                        <div class="row">
                                            <?php foreach ($result3 as $row3): ?>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="product mt-30">
                                                        <div class="product-image">
                                                            <?php
                                                            if ($row3->ebook_image != '') {
                                                            ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row3->ebooks_id; ?>">
                                                                    <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url();?>_images/books/<?php echo $row3->ebook_image;?>" alt="">
                                                                </a>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row3->ebooks_id; ?>">
                                                                    <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url(); ?>_images/books/no-book.png" alt="">
                                                                </a>
                                                                <?php
                                                            }
                                                            ?>
                                                            <div class="product-overlay">
                                                                <!--                                                                        <div class="add-to-cart">
                                                                                                                                            <a href="<?php echo base_url(); ?>book/book_view/<?php echo $row3->ebooks_id; ?>" class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Add to cart</a>
                                                                                                                                        </div>-->
                                                            </div>
                                                        </div>
                                                        <div class="product-des">
                                                            <div class="product-title" style="height:50px;">
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row3->ebooks_id; ?>"><?php echo $row3->ebook_title; ?></a>
                                                            </div>
                                                            <div class="product-rating" style="height:50px;">
                                                                <b> লেখক / অনুবাদক:</b>
                                                                <p> <?php echo $row3->author_name; ?></p>
    <!--                                                                        <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>-->
                                                            </div>
                                                            <div class="product-price">
                                                                <!--<del>$24.99</del>--> 
                                                                <ins> TK:<?php echo $row3->ebook_price; ?></ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="quran" role="tabpanel" aria-labelledby="quran-tab">
                                        <div class="row">
                                            <?php foreach ($result4 as $row4): ?>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="product mt-30">
                                                        <div class="product-image">
                                                            <?php
                                                            if ($row4->ebook_image != '') {
                                                            ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row4->ebooks_id; ?>">
                                                                    <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url();?>_images/books/<?php echo $row4->ebook_image;?>" alt="">
                                                                </a>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row4->ebooks_id; ?>">
                                                                    <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url(); ?>_images/books/no-book.png" alt="">
                                                                </a>
                                                                <?php
                                                            }
                                                            ?>
                                                            <div class="product-overlay">
                                                                <!--                                                                        <div class="add-to-cart">
                                                                                                                                            <a href="<?php echo base_url(); ?>book/book_view/<?php echo $row4->ebooks_id; ?>" class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Add to cart</a>
                                                                                                                                        </div>-->
                                                            </div>
                                                        </div>
                                                        <div class="product-des">
                                                            <div class="product-title" style="height:50px;">
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row4->ebooks_id; ?>"><?php echo $row4->ebook_title; ?></a>
                                                            </div>
                                                            <div class="product-rating" style="height:50px;">
                                                                <b> লেখক / অনুবাদক:</b>
                                                                <p> <?php echo $row4->author_name; ?></p>
    <!--                                                                        <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>-->
                                                            </div>
                                                            <div class="product-price">
                                                                <!--<del>$24.99</del>--> 
                                                                <ins> TK:<?php echo $row4->ebook_price; ?></ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="hadis" role="tabpanel" aria-labelledby="hadis-tab">
                                        <div class="row">
                                            <?php foreach ($result5 as $row5): ?>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="product mt-30">
                                                        <div class="product-image">
                                                            <?php
                                                            if ($row5->ebook_image != '') {
                                                            ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row5->ebooks_id; ?>">
                                                                    <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url();?>_images/books/<?php echo $row5->ebook_image;?>" alt="">
                                                                </a>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row5->ebooks_id; ?>">
                                                                    <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url(); ?>_images/books/no-book.png" alt="">
                                                                </a>
                                                                <?php
                                                            }
                                                            ?>
                                                            <div class="product-overlay">
                                                                <!--                                                                        <div class="add-to-cart">
                                                                                                                                            <a href="<?php echo base_url(); ?>book/book_view/<?php echo $row3->ebooks_id; ?>" class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Add to cart</a>
                                                                                                                                        </div>-->
                                                            </div>
                                                        </div>
                                                        <div class="product-des">
                                                            <div class="product-title" style="height:50px;">
                                                                <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row5->ebooks_id; ?>"><?php echo $row5->ebook_title; ?></a>
                                                            </div>
                                                            <div class="product-rating" style="height:50px;">
                                                                <b> লেখক / অনুবাদক:</b>
                                                                <p> <?php echo $row5->author_name; ?></p>
    <!--                                                                        <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>-->
                                                            </div>
                                                            <div class="product-price">
                                                                <!--<del>$24.99</del>--> 
                                                                <ins> TK:<?php echo $row5->ebook_price; ?></ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <?php foreach ($ebooks as $row): ?>
                <section class="page-section-ptb" style="padding:40px 0;">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="action-box gray-bg">
                                    <h3 class="theme-color"><strong> <?php echo $row['category']; ?>  </strong> </h3>
                                    <!--<p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>-->
                                    <a class="button button-border success-stories" href="#">
                                        <span>See All Books</span>
                                        <i class="fa fa-check"></i>
                                    </a> 
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">               
                            <!--                            <div class="title mt-15 mb-15">
                                                            <h4 class="theme-color" style="font-weight:bold;"> <?php echo $row['category']; ?> </h4>
                                                        </div>-->
                            <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="true" data-items="3" data-sm-items="2" data-lg-items="3" data-md-items="3" data-xs-items="2" data-autoplay="false"> 
                                <?php foreach ($row['books'] as $book): ?>
                                    <div class="item">
                                        <div class="product">
                                            <div class="product-image">
                                                <?php
                                                if ($book->ebook_image != '') {
                                                    ?>
                                                    <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $book->ebooks_id; ?>">
                                                        <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url(); ?>_images/books/<?php echo $book->ebook_image; ?>" alt="">
                                                    </a>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $book->ebooks_id; ?>">
                                                        <img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url(); ?>_images/books/no-book.png" alt="">
                                                    </a>
                                                    <?php
                                                }
                                                ?>
                                    <!--<img class="img-fluid mx-auto" style="height:453px;" src="<?php echo base_url(); ?>_images/books/<?php echo $book->ebook_image; ?>" alt="">-->
                                                <div class="product-overlay">
                                                    <div class="add-to-cart">
                                                        <a href="javascript:void(0)"><i class="fa fa-cart-plus"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-des">
                                                <div class="product-title">
                                                    <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $book->ebooks_id; ?>"> <?php echo $book->ebook_title; ?> </a>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <del>$24.99</del> 
                                                    <ins>TK: <?php echo $book->ebook_price; ?></ins>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
<!--                        <div class="text-center mt-15">
                            <a class="btn btn-info x-small" href="#"> <i class="fa fa-check"></i> See All Books </a>
                        </div>-->
                    </div>
                </section>            
            <?php endforeach; ?>

            <?php include 'footer.php'; ?>
        </div>
        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
    </body>
</html>