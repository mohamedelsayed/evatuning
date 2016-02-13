<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2015 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php drupal_set_title('');
$GLOBALS['base_url'] = elsayed_get_site_base_url();
$actual_link = elsayed_get_actual_link();?>
<?php include_once 'header.php';?>
<?php include_once 'home/slider.php';?>
<?php include_once 'home/products.php';?>
<?php include_once 'home/news.php';?>   
<?php include_once 'footer.php';?>