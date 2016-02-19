<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2016 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php $base_url_with_lang = elsayed_get_base_url_with_lang();
$actual_link = elsayed_get_actual_link();?>
<?php include_once 'header.php';?>
<div id="products-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="product-heading">
                    <h2><?php echo t('Checkout with Paypal');?></h2>
                    <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                </div>
            </div>
        </div>
        <div>
            <?php
            $item_no            = $_REQUEST['item_number'];
            $item_transaction   = $_REQUEST['tx']; // Paypal transaction ID
            $item_price         = $_REQUEST['amt']; // Paypal received amount
            $item_currency      = $_REQUEST['cc']; // Paypal received currency type

            $price = '10.00';
            $currency='USD';

            //Rechecking the product price and currency details
            if($item_price==$price && $item_currency==$currency)
            {
                $content = "<h1>Welcome, Guest</h1>";
                $content .= "<h1>Payment Successful</h1>";
            }
            else
            {
                $content = "<h1>Payment Failed</h1>";
            }

            $title = "PayPal Payment in PHP";
            $heading = "Welcome to PayPal Payment PHP example.";
            ?>
        </div>                
    </div>
</div>
<?php include_once 'footer.php';?>