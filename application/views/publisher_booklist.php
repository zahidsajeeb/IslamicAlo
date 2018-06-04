<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <script src="<?php echo base_url(); ?>asset/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/social/jssocials.min.js"></script>  
    <body>     
        <div class="wrapper">
            <?php include 'preloader.php'; ?>
            <?php include 'book_menu.php'; ?>
            <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo base_url(); ?>images/bg/02.jpg);">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <div class="page-title-name">
                                <h1> <?php echo $publisher_name->publisher_name; ?> </h1>
                                <!--<p>We know the secret of your success</p>-->
                            </div>
                            <ul class="page-breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span> <?php echo $publisher_name->publisher_name; ?> </span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========================================== Book List ============================================== --> 

            <section class="white-bg page-section-ptb">
                <div class="container"> 
                    <div class="row mb-40">
                        <div class="col-lg-12"> 
                            <div class="title mb-30">
                                <h5>Publisher Details</h5>
                            </div>
                            <div class="accordion accordion-border no-radius mb-20 theme-color" style="padding:0px;">
                                <div class="acd-group">
                                    <a href="#" class="acd-heading" style="background-color:#00b106; color:white;"> <?php echo $publisher_name->publisher_name; ?> </a>
                                    <div class="team team-list">
                                        <div class="team-photo">
                                            <img style="height:250px; width:100%;" src="<?php echo base_url(); ?>_images/pub_details.jpg">
                                        </div>
                                        <div class="team-description"> 
                                            <p style="text-align:justify;">  
                                                বাংলা একাডেমি(Bangla Academy) প্রতিষ্ঠিত হয় ১৯৫৫ সালের ৩রা ডিসেম্বর। এদিন ‘বর্ধমান হাউস’-এর সম্মুখস্থ বটতলায় উদ্বোধন-অনুষ্ঠানের আয়োজন করা হয়। পূর্ববাংলার তদানীন্তন মুখ্যমন্ত্রী জনাব আবু হোসেন সরকার ‘উদ্বোধনী ভাষণ’ পাঠ করেন। পূর্ববাংলার তদানীন্তন শিক্ষামন্ত্রী জনাব আশরাফ উদ্দীন আহমদ চৌধুরীও অনুষ্ঠানে ভাষণ প্রদান করেন। আমাদের লক্ষ্য দেশজ সংস্কৃতি, কৃষ্টি, ইতিহাস, ঐতিহ্য, মুক্তিযুদ্ধের চেতনা, সমকালীন শিল্প ও সাহিত্য সংরক্ষণ এবং গবেষণা ও উন্নয়নের মাধ্যমে জাতির মানসিক বিকাশ ও উৎকর্ষ সাধন।
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <!-- left  -->
                        <div class="col-lg-9 col-md-12 order-lg-12 order-1">
                            <?php
                            $i__ = 0;
                            foreach ($result as $row):
                            $i__++;
                            ?>                      
                                <!--<div class="col-lg-6 sm-mb-30">-->
                                <div class="team team-list">
                                    <div class="team-photo">       
                                        <?php
                                        if ($row->ebook_image != '') {
                                        ?>
                                            <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row->ebooks_id; ?>">
                                                <img class="img-fluid mx-auto" style="width:430px;height:300px;" src="<?php echo base_url(); ?>_images/books/<?php echo $row->ebook_image; ?>" alt=""> 
                                            </a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row->ebooks_id; ?>">
                                                <img class="img-fluid mx-auto" style="width:430px;height:300px;" src="<?php echo base_url(); ?>_images/books/no-book.png?>" alt="">
                                            </a>
                                            <?php
                                        }
                                        ?>

                                    </div>   
                                    <div class="team-description"> 
                                        <div class="team-info"> 
                                            <h6><a href="<?php echo base_url(); ?>index.php/Book/BookDetails/<?php echo $row->ebooks_id; ?>"> <?php echo $row->ebook_title; ?></a></h6>
                                            <span style="font-weight:bold;">লেখক / অনুবাদক: </span> <a href="<?php echo base_url(); ?>index.php/Book/AuthorBookLists/<?php echo $row->author_id; ?>"> <?php echo $row->author_name; ?></a><br>
                                            <span style="font-weight:bold;"> Publication: </span>   <a href="<?php echo base_url(); ?>index.php/Book/PublisherBookLists/<?php echo $row->publisher_id; ?>">   <?php echo $row->publisher_name; ?></a> <br>
                                            <span style="font-weight:bold;"> Book ID: </span>     <a> <?php echo $row->ebooks_id; ?> </a>
                                            <p>
                                                Only 40 taka delivery on any amount of purchase in Bangladesh. Get it in 1-5 working days
                                            </p>
                                        </div>
                                        <div class="team-contact">
                                            <a class="btn btn-success" style="color:white;"> <i class="fa fa-cart-plus"></i> Add To Cart</a>
    <!--                                        <span class="call"> +(704) 279-1249</span>
                                            <span class="email"> <i class="fa fa-envelope-o"></i> letstalk@webster.com</span>-->
                                        </div>
                                        
                                       <!-- ==========================Social Share Icon ====================================================--> 

                                        <div class="share_<?php echo $i__; ?>"></div>
                                        <script type="text/javascript">
                                            $(".share_<?php echo $i__; ?>").jsSocials({
                                                url: "<?php echo base_url();?>index.php/Book/BookDetails/<?php echo $row->ebooks_id; ?>",
                                                shareIn: "popup",
                                                showLabel: false,
                                                shares: ["facebook", "twitter", "googleplus", "linkedin", "pinterest", "whatsapp", "viber", "email", ]
                                            });
                                        </script>
                                    </div>
                                </div>
                                <br>
                                <!--</div>-->
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
                        </div>
                    </div>
                </div>
            </section>
        <?php include 'footer.php'; ?>
        </div>
        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    </body>
</html>