<footer class="footer page-section-pt black-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Link</h6>
                    <ul>
                        <li><a href="#">Create Account</a></li>
                        <li><a href="#">Company Philosophy</a></li>
                        <li><a href="#">Corporate Culture</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Client Management</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 xs-mb-30">
                <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
                <ul class="addresss-info"> 
                    <li><i class="fa fa-map-marker"></i> <p>Address: 17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p> </li>
                    <li><i class="fa fa-phone"></i> <a href="tel:7042791249"> <span>+(704) 279-1249 </span> </a> </li>
                    <li><i class="fa fa-envelope-o"></i>Email: letstalk@webster.com</li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h6 class="text-white mb-30 mt-10 text-uppercase">Subscribe to Our Newsletter</h6>
                <p class="mb-30">Sign Up to our Newsletter to get the latest news and offers.</p>
                <div class="footer-Newsletter">
                    <div id="mc_embed_signup_scroll">
                        <!--<form name="mc-embedded-subscribe-form">-->
<!--                            <div id="email_result1"> </div>                 
                            <div id="mc_embed_signup_scroll_21">
                                <input name="email" id="email" class="form-control" type="text" placeholder="Email address" value="">
                                <span id="email_result"></span>
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>     real people should not fill this in and expect good things - do not remove this or risk form bot signups
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input name="email" id="email" type="text"  tabindex="-1" value="">
                            </div>-->
                            <div class="clear">
                                <button type="submit" name="Submit"  class="button button-border mt-20 form-button" data-toggle="modal" data-target=".bd-example-modal-lg">  Subscribe Now </button>
                            </div>
                        <!--</form>-->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title" id="exampleModalLongTitle"><div class="section-title mb-10">
                                <h4>Subscription</h4>       
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <form action="<?php echo base_url(); ?>index.php/Home/subscription" method="POST">
                                    <input type="email" name="email" id="username" class="form-control" placeholder="Enter E-mail Address" autocomplete="off" required="">
                                    <span id="username_result"></span>
                                    <div class="modal-footer">
                                        <button type="submit" id="submit" class="btn btn-info"><i class="fa fa-check"></i> Submit</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 


        <div class="footer-widget mt-20">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Webster </a> All Rights Reserved </p>
                </div>
                <div class="col-lg-6 col-md-6 text-left text-md-right">
                    <div class="social-icons color-hover mt-10">
                        <ul> 
                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</footer>

<script src="<?php echo base_url(); ?>asset/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
  $('#username').on("keyup",function(){
   var email = $('#username').val();
   if(email != ''){
    $.ajax({
     url: "<?php echo base_url(); ?>index.php/Home/checkUsername",
     method: "POST",
     data: {email:email},
//     success: function(data){
//      $('#username_result').html(data);
//      document.getElementById("submit").disabled=true;
//     }
        success: function(html) {
            document.getElementById("username_result").innerHTML= html ;
            if(document.getElementById("username_result").innerHTML == "Please proceed..."){
                document.getElementById("submit").disabled=false;
                console.log('enable');
            }
            else {
                document.getElementById("submit").disabled=true;
                console.log('disable');
            }
        }
    });
   }
  }); 
 });
</script>


<!-- All plugins -->
<script src="<?php echo base_url(); ?>asset/js/plugins-jquery.js"></script>

<!-- Plugins path -->
<script>var plugin_path = '<?php echo base_url(); ?>asset/js/';</script>

<!-- REVOLUTION JS FILES -->
<script src="<?php echo base_url(); ?>asset/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>asset/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="<?php echo base_url(); ?>asset/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url(); ?>asset/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>asset/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url(); ?>asset/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url(); ?>asset/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url(); ?>asset/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url(); ?>asset/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url(); ?>asset/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url(); ?>asset/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- revolution custom --> 
<script src="<?php echo base_url(); ?>asset/revolution/js/revolution-custom.js"></script> 

<!-- custom -->
<script src="<?php echo base_url(); ?>asset/js/custom.js"></script>

<!--<script type="text/javascript" src="//sharecdn.social9.com/v2/js/opensocialshare.js"></script><script type="text/javascript" src="//sharecdn.social9.com/v2/js/opensocialsharedefaulttheme.js"></script><link rel="stylesheet" type="text/css" href="//sharecdn.social9.com/v2/css/os-share-widget-style.css"/><script type="text/javascript">var shareWidget = new OpenSocialShare();shareWidget.init({isHorizontalLayout: 1,widgetIconSize: "32",widgetStyle: "responsive",theme: 'OpenSocialShareDefaultTheme',providers: { top: ["Facebook","GooglePlus","LinkedIn","Twitter"]}});shareWidget.injectInterface(".oss-widget-interface");shareWidget.setWidgetTheme(".oss-widget-interface");</script>-->
<script type="text/javascript" src="//sharecdn.social9.com/v2/js/opensocialshare.js"></script>
<script type="text/javascript" src="//sharecdn.social9.com/v2/js/opensocialsharedefaulttheme.js"></script>
<link rel="stylesheet" type="text/css" href="//sharecdn.social9.com/v2/css/os-share-widget-style.css" />


<!--js-social-->
<script type="text/javascript" src="<?php echo base_url(); ?>asset/social/jssocials.min.js"></script>
<script>
                        $("#share").jsSocials({
                            shareIn: "popup",
                            showLabel: false,
                            shares: ["facebook", "twitter", "googleplus", "linkedin", "whatsapp", "viber"]
                        });
</script>







