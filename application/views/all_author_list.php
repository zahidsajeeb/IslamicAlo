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
                                <h1>All Author Lists</h1>
                                <!--<p>We know the secret of your success</p>-->
                            </div>
                            <ul class="page-breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span>All Auther Lists</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


 <div class="container-fluid">
 <div class="row page-section-ptb">
     <div class="col-lg-12 col-md-12">
      <div class="tab nav-bt nav-center">
          <div class="tab-content px-5" id="myTabContent">
            <div class="tab-pane fade active show" id="home-02" role="tabpanel" aria-labelledby="home-02-tab">
                <div class="content-wrapper">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container-fluid">
                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <section>
                                                <h4 class="theme-color my-4 text-center"><b>All Author Lists </b></h4>
                                                <div class="divider dashed mb-3"></div>
                                                <div class="icon-list-demo row">
                                                    <?php foreach ($all_author_lists as $list):?>
                                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                                        <a href="<?php echo base_url(); ?>index.php/Book/AuthorBookLists/<?php echo $list->ebook_author_id; ?>"><i class="fa fa-list-ul"></i><?php echo $list->author_name;?></a>
                                                    </div>  
                                                    <?php endforeach;?>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 text-center">

                                                        <nav aria-label="...">
                                                            <?php echo $this->pagination->create_links(); ?>  
                                                        </nav>
                                                    </div>
                                                </div>
                                            </section>
      
                                        </div>
                                    </div>
                                    <!-- end panel -->
                                </div>
                            </div>
                            <!-- End Row -->
                        </div>
                        <!-- container -->
                    </div>
                    <!-- content -->
                </div>
            </div>

           
          </div> 
      </div>
    </div>
  </div>
</div>    
 
 
<!--=================================
 Form -->

<!--==============================
       fontawesome 
 ================================-->
<style type="text/css">
  .icon-list-demo div {
    line-height: 45px;
    white-space: nowrap;
    text-overflow: ellipsis;
    display: block;
    overflow: hidden;
}
.icon-list-demo .col-lg-3 {
  margin-bottom: 0.5rem;
  color: #323232;
}
.icon-list-demo .col-lg-3:hover {
  background: #f7f7f7;
}
.icon-list-demo i {
    text-align: center;
    vertical-align: middle;
    font-size: 24px;
    width: 50px;
    height: 50px;
    line-height: 50px;
    margin-right: 12px;
    color: rgba(49, 58, 70, 0.7);
    border-radius: 3px;
    display: inline-block;
    transition: all 0.2s;
}
</style>

<!--==============================
       fontawesome 
 ================================-->


<!--==============================
       THEMIFY ICONS
 ================================-->
<!-- <style type="text/css">
.icons-list h3 {
  text-transform: uppercase;
  font-weight: 700;
  margin: 1em 0;
}
.icon-section {
  clear: both;
  overflow: hidden;
}

.icon-section div { 
    line-height: 50px;
    white-space: nowrap;
    text-overflow: ellipsis;
    display: block;
    overflow: hidden;
 }

.icon-container {
  float: left;
  position: relative;
  text-align: left;
}
.icon-container [class^="ti-"],
.icon-container [class*=" ti-"] {
  font-size: 17px;
  color: #323232;
  position: absolute;
  transition: .3s;
  border: none;
  padding: 0;
  line-height: 50px;
}

.icon-name {
  color: #323232;
  margin-left: 35px;
  transition: .3s;
}

</style>-->

<!--==============================
       THEMIFY ICONS
 ================================-->

 
 </div>


<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
 

<?php include 'footer.php';?>
 
 
</body>

</html>