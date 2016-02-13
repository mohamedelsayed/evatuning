<?php
/**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2015 Programming by "http://www.mohamedelsayed.net"
 */
$social_image = '';
$GLOBALS['meta_description'] = '';
$GLOBALS['meta_keywords'] = '';
$sitelang = elsayed_get_language_from_url();
$base_url_with_lang = elsayed_get_base_url_with_lang();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- 
Grill Template 
http://www.templatemo.com/free-website-templates/417-grill
-->
    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8">
        <title><?php echo $head_title;?></title>
        <meta property="og:image" content="<?php echo $social_image; ?>">
        <meta name="twitter:image" content="<?php echo $social_image; ?>">
        <meta name="description" content="<?php echo $GLOBALS['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $GLOBALS['meta_keywords']; ?>">
        <meta name="author" content="">
        <script type="text/javascript">
            var base_url_with_lang = '<?php echo $base_url_with_lang;?>';
            var base_url = '<?php echo $GLOBALS['base_url'];?>';
        </script>
        <meta name="viewport" content="width=device-width">        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <?php print $styles;?>
        <script src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>        
    </head>    
    <body class="<?php print $classes;?>" <?php print $attributes; ?>>    
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->    
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom;?>  
        <?php print $scripts;?>
        <?php /*<script src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/js/vendor/jquery-1.11.0.min.js"></script>
        <script src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/js/vendor/jquery.gmap3.min.js"></script>
        <script src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/js/plugins.js"></script>
        <script src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/js/main.js"></script>   
        <script src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/js/dev.js"></script>*/?>     
        <?php /*$google_analytics_propertyid = get_domain_google_analytics_fields(); ?>
        <?php if ($google_analytics_propertyid != '') { ?>		
            <script type = "text/javascript">
                (function(i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function() {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                ga('create', '<?php echo $google_analytics_propertyid; ?>', 'auto');
                ga('send', 'pageview');
            </script>	
        <?php }*/?>        
    </body>
</html>