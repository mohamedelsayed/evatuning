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
                    <img src="https://www.paypalobjects.com/webstatic/en_US/btn/btn_pponly_142x27.png" align="Paypal" title="Paypal" />
                    <h2><?php echo t('Checkout with Paypal');?></h2>
                    <img src="<?php echo $GLOBALS['base_url'].'/'.path_to_theme();?>/images/under-heading.png" alt="" >
                </div>
            </div>
        </div>
        <div>
            <?php $paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
            //$paypal_url = 'https://www.paypal.com/cgi-bin/webscr';
            $paypal_id='paypal-facilitator@mohamedelsayed.net'; // Business email ID
            $default_currency = elsayed_get_default_currency();  
            $symbol = '';
            if(isset($default_currency->field_symbol[LANGUAGE_NONE][0]['value'])){
                $symbol = $default_currency->field_symbol[LANGUAGE_NONE][0]['value'];
            }
            global $user;
            $email = $user->mail;
            $field_first_name = '';
            if(isset($user->field_first_name[LANGUAGE_NONE][0]['value'])){
                $field_first_name = $user->field_first_name[LANGUAGE_NONE][0]['value'];
            }
            $field_last_name = '';
            if(isset($user->field_last_name[LANGUAGE_NONE][0]['value'])){
                $field_last_name = $user->field_last_name[LANGUAGE_NONE][0]['value'];
            }
            require_once DRUPAL_ROOT . '/includes/locale.inc';
            $options = country_get_list();
            $country_code = elsayed_ip_info("Visitor");?>
            <form onsubmit="return validate_custom_checkout_form()" id="paypal_form" action="<?php echo $paypal_url;?>" method="post">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="<?php echo $paypal_id;?>">
                <input type="hidden" name="item_name" value="<?php echo variable_get('site_name').' Products';?>">
                <?php /*<input type="hidden" name="no_shipping" value="1">
                <input type="hidden" name="item_number" value="1">*/?>
                <input type="hidden" name="amount" value="15.00">
                <input type="hidden" name="first_name" value="<?php echo $field_first_name;?>">
                <input type="hidden" name="last_name" value="<?php echo $field_last_name;?>">
                <input type="text" placeholder="Phone" name="phone" value="" class="required_input"> 
                <input type="text" placeholder="Address" name="address1" value="" class="required_input">
                <input type="text" placeholder="Address 2" name="address2" value="">
                <div class="select_country">
                    <select name="country">
                        <?php foreach ($options as $key => $option) {
                            $checked = '';
                            if($key == $country_code){
                                $checked = ' selected="selected" ';                            
                            }?>
                            <option <?php echo $checked;?> value="<?php echo $key;?>"><?php echo $option;?></option>                        
                        <?php }?>                    
                    </seleZct>
                </div>
                <input type="text" placeholder="Zip Code" name="zip" value="" class="required_input">
                <input type="text" placeholder="City" name="city" value="" class="required_input">
                <input type="hidden" name="email" value="<?php echo $email;?>">
                <input type="hidden" name="cpp_header_image" value="<?php echo $GLOBALS['base_url'].'/'.path_to_theme().'/images/logo.jpg';?>">                
                <input type="hidden" name="currency_code" value="<?php echo $symbol;?>">
                <input type="hidden" name="handling" value="0">
                <input type="hidden" name="cancel_return" value="<?php echo $GLOBALS['base_url'].'/cancel_payment';?>">
                <input type="hidden" name="return" value="<?php echo $GLOBALS['base_url'].'/success_payment';?>">
                <div class="submit_paypal">
                    <img onclick="jQuery('#paypal_form').submit();" src="https://www.paypalobjects.com/en_US/i/btn/x-click-but6.gif" align="Paypal" title="Paypal" />
                </div>
            </form>
        </div>                
    </div>
</div>
<?php include_once 'footer.php';?>