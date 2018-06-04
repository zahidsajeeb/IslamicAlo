<header id="header" class="header default">
  <div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 xs-mb-10">
        <div class="topbar-call text-center text-md-left">
          <ul>
            <li><i class="fa fa-envelope-o theme-color"></i> gethelp@webster.com</li>
             <li><i class="fa fa-phone"></i> <a href="tel:+7042791249"> <span>+(704) 279-1249 </span> </a> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="topbar-social text-center text-md-right">
          <ul>
            <li><a href="#"><span class="ti-facebook"></span></a></li>
            <li><a href="#"><span class="ti-instagram"></span></a></li>
            <li><a href="#"><span class="ti-google"></span></a></li>
            <li><a href="#"><span class="ti-twitter"></span></a></li>
            <li><a href="#"><span class="ti-linkedin"></span></a></li>
            <li><a href="#"><span class="ti-dribbble"></span></a></li>
          </ul>
        </div>
      </div>
     </div>
  </div>
</div>

<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav class="mega-menu menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="<?php echo base_url();?>"><img id="logo_img" src="<?php echo base_url();?>images/logo.png" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
         <ul class="menu-links">
             <li class="active"><a href="<?php echo base_url();?>index.php/Book/Home"> Book Home </a></li> 
            <li><a  href="#"> Book List </a></li>      
            <li><a  href="#"> Author </a></li>
            <li><a  href="#"> Publisher </a></li>
            <li><a href="javascript:void(0)"> Topics<i class="fa fa-angle-down fa-indicator"></i></a>
                <div class="drop-down grid-col-12">
                    <div class="grid-row">
                        <?php foreach ($book_menu as $row):
                            $this->db->select("count('`category_id`') as 'cat_total'");
                            $this->db->from("ebooks");
                            $this->db->where("ebooks.category_id", $row->category_id);
                            $this->db->where("status",1);
                            $this->db->limit(1);
                            $query = $this->db->get();
                            $totalCat = $query->result();
                        ?>
                    <div class="grid-col-6" style="padding:0px;">    
                        <ul>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/Book/BookList/<?php echo $row->category_id; ?>"><i class="fa fa-align-left"></i><?php echo $row->category_name; ?> [<?php echo $totalCat[0]->cat_total ?>]
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
        <div class="search-cart">
          <div class="search">
            <a class="search-btn not_click" href="javascript:void(0);"></a>
              <div class="search-box not-click">
                 <input type="text" class="not-click form-control" placeholder="Search" value="" name="s">
                <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
           </div>
          </div>
          <div class="shpping-cart">
           <a class="cart-btn" href="#"> <i class="fa fa-shopping-cart icon"></i> <strong class="item">2</strong></a>
            <div class="cart">
              <div class="cart-title">
                 <h6 class="uppercase mb-0">Shopping cart</h6>
              </div>
              <div class="cart-item">
                <div class="cart-image">
                  <img class="img-fluid" src="images/shop/01.jpg" alt="">
                </div>
                <div class="cart-name clearfix">
                  <a href="#">Product name <strong>x2</strong> </a>
                  <div class="cart-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
                </div>
                <div class="cart-close">
                    <a href="#"> <i class="fa fa-times-circle"></i> </a>
                 </div>
              </div>
              <div class="cart-item">
                <div class="cart-image">
                  <img class="img-fluid" src="images/shop/01.jpg" alt="">
                </div>
                <div class="cart-name clearfix">
                  <a href="#">Product name <strong>x2</strong></a>
                  <div class="cart-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
                </div>
                 <div class="cart-close">
                    <a href="#"> <i class="fa fa-times-circle"></i> </a>
                 </div>
              </div>
              <div class="cart-total">
                <h6 class="mb-15"> Total: $104.00</h6>
                <a class="button" href="shop-shopping-cart.html">View Cart</a>
                <a class="button black" href="shop-checkout.html">Checkout</a>
              </div>
            </div>
          </div>
        </div>
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>
