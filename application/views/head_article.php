<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Islamic Page" />
<meta name="description" content="Islamic Alo" />
<meta name="author" content="islamicalo.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


<!--    <meta property="og:url"                content="<?php echo base_url(uri_string());?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Islamic Alo | <?php echo $result->article_name;?>" />
    <meta property="og:description"        content="Some description about Islamic Alo here" />
    <meta property="og:image"              content="<?php echo base_url(); ?>_images/article/<?php echo $result->article_img; ?>" />-->
   
    
    <meta property="og:image"              content="<?php echo base_url(); ?>_images/article/<?php echo $result->article_img; ?>"/>
    <meta property="og:title"              content="<?php echo $result->article_name;?>"/>
    <meta property="og:url"                content="<?php echo base_url(uri_string());?>"/>
    <meta property="og:site_name"          content="David Walsh Blog"/>
    <meta property="og:description"        content="<?php echo $this->wordsnippet->get_snippet(strip_tags($result->article_details),20)?>" />
    <meta property="og:type"               content="blog"/>
   
        
         
<title>Islamic Alo</title> 

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<!--<link href="<?php echo base_url();?>asset/css/bangla_css.css" rel="stylesheet">-->
 
<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/plugins-css.css" />

<!-- revoluation -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/revolution/css/settings.css" media="screen" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/typography.css" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/shortcodes/shortcodes.css" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/style.css" />

<!-- consulting -->
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/demo-categories/consulting/css/consulting.css" /> -->

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/responsive.css" /> 

<!--Social-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/social/jssocials.css" data-style="styles"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/social/jssocials-theme-flat.css" data-style="styles"/>

<!-- Style customizer -->
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/skins/skin-steelblue.css" data-style="styles"/>-->
<script src="//raw.github.com/botmonster/jquery-bootpag/master/lib/jquery.bootpag.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery-1.8.0.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                // Reset font-size
                var defaultsize = $('#zoomcontent span').css('font-size');
                $(".reset").click(function () {
                    $('#zoomcontent span').css('font-size', defaultsize);
                    return false;
                });
                // Increase font-size
                $(".increase").click(function () {
                    var currentfontsize = $('#zoomcontent span').css('font-size');
                    var incfontsize = parseFloat(currentfontsize, 10);
                    var newsize = incfontsize + 1;
                    $('#zoomcontent span').css('font-size', newsize);
                    return false;
                });
                // Decrease font-size
                $(".decrease").click(function () {
                    var currentfontsize = $('#zoomcontent span').css('font-size');
                    var decfontsize = parseFloat(currentfontsize, 10);
                    var newsize = decfontsize * 0.8;
                    $('#zoomcontent span').css('font-size', newsize);
                    return false;
                });
            });
        </script>


</head>