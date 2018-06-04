<!DOCTYPE html>
<html lang="en">
    <?php include 'head_article.php'; ?>
    <body>
        <div class="wrapper">
            <?php include 'preloader.php'; ?>
            <?php include 'menu.php'; ?>

            <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo base_url(); ?>images/bg/02.jpg);">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <div class="page-title-name">
                                <h1>Article Details</h1>
                                <!--<p>We know the secret of your success</p>-->
                            </div>
                            <ul class="page-breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span>Article Details</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
          
            <!--================================= Blog Post =========================== -->
            <section class="blog white-bg page-section-ptb">
                <div class="container"> 
                    <div class="row">
                        <!-- left  -->
                        <div class="col-lg-9 col-md-12 order-lg-12 order-1">
                                <div class="blog-entry mb-50 content">
                                    <div class="entry-image clearfix">
                                        <?php
                                        if (file_exists("_images/article/" . $result->article_img)) {
                                            ?>
                                        <a href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $result->article_id; ?>"> <img class="img-fluid"  src="<?php echo base_url(); ?>_images/article/<?php echo $result->article_img; ?>" alt=""> </a>
                                            <?php
                                        } else {
                                            ?>
                                        <a href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $result->article_id; ?>">  <img class="img-fluid" style="height:158px; width:346px" src="<?php echo base_url(); ?>_images/article/no-image.png" alt=""> </a>
                                        <?php } ?>

                                    </div>

                                    <?php $text = $result->article_details;?>
                                    <div class="blog-detail" style="background:#FDFDF0">
                                        <div class="entry-title mb-10">
                                            <a href="<?php echo base_url(); ?>index.php/Article/ArticleDetails/<?php echo $result->article_id; ?>"><?php echo $result->article_name; ?></a>
                                        </div>
                                        <div class="entry-meta mb-10">
                                            <div id="share"></div>
                                           
                                        </div>
                                        

                                        <div id="changesize">
                                            <a style="color:white;" class="btn btn-info btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-envelope"></i></a>
                                            <a href="#" class="increase btn btn-success btn-sm"><i class="fa fa-plus-square"></i> </a>
                                            <a href="#" class="reset btn btn-info btn-sm"><i class="fa fa-search"></i></a>
                                            <a href="#" class="decrease btn btn-danger btn-sm"><i class="fa fa-minus-square"></i></a>
                                        </div>

                                        <div class="zoomcontent" id="zoomcontent" style="line-height: 30px;"> 
                                            <?php echo $result->article_details;?> 
                                        </div>

<!--                                        <div class="entry-content">
                                  
                                        </div>-->
                                        
                                        <div class="entry-share clearfix">
<!--                                            <div class="social list-style-none float-right">-->
                                               <div id="share"></div> 
                                               
                                            <!--</div>-->
                                        </div>
                                    </div>                                   
                                </div>
                            
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
                                                <i class="fa fa-align-left"></i> &nbsp;<?php echo $row1->bangla_name; ?> 
                                                <span class="float-right">[<?php echo $totalArt[0]->art_total ?>]</span>
                                            </a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>                          
                        </div>
                    </div>
                </div>
            </section>
            
            
                          <!-- Modal -->
                          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <div class="modal-title" id="exampleModalLongTitle"><div class="section-title mb-10">
                                                  <h4>Article পাঠান ইমেইলে</h4>       
                                              </div>
                                          </div>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                            <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                    <form action="<?php echo base_url();?>index.php/Article/SendMail" method="POST">
                                                    <table class="table table-bordered">
                                                      <tbody>
                                                        <tr>
                                                          <td style="background-color:#F6F7F8">Email:</td>                                                         
                                                          <td colspan="3"> 
                                                              <input type="text" class="form-control" name="receiver_email" autocomplete="off" required=""> 
                                                              <input type="hidden"  name="id" value="<?php echo $result->article_id; ?>"> 
                                                          </td>
                                                          
                                                        </tr>
                                                        
                                                        <tr>
                                                          <td style="background-color:#F6F7F8">Subject:</td>                                                         
                                                          <td colspan="3"> <input type="text" name="subject" class="form-control" readonly="" value="<?php echo $result->article_name;?>">  </td>
                                                        </tr>
                                                        
                                                       <tr>
                                                          <td style="background-color:#F6F7F8">Body:</td>                                                         
                                                          <td colspan="3"> 
                                                              <p style="text-align:justify;">
                                                              <?php
                                                              $string = strip_tags($result->article_details);
                                                              $stringCut = substr($string, 0, 2500);
                                                              $endPoint = strrpos($stringCut, ' ');
                                                              echo substr($stringCut, 0, $endPoint);
                                                              ?>  ...............
                                                              </p>
                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-info"><i class="fa fa-check"></i> Submit</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                                        </div>
                                                    </form>
                                                   </div>
                                                </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </div>    
        <?php include 'footer.php'; ?>
        </div>
        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>


    </body>
</html>