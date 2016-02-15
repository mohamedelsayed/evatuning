<?php
/**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2016 Programming by "http://www.mohamedelsayed.net"
 */
$http_host = $_SERVER['HTTP_HOST'];
$database = 'evatuning';
$db_host = 'localhost';
$username = 'root';
$password = 'root';
$conf['error_level'] = 0;
if (strpos($http_host, 'mohamedelsayed.net') !== FALSE) {
    $database = 'elsayed_evatuning';   
    $username = 'elsayed_evatunin';
    $password = '8TSb0q9Db8og';   
}elseif (strpos($http_host, 'localhost') !== FALSE) {
    if(PHP_OS == 'Linux'){
        $conf['error_level'] = 2;
    }else{
        $password = '';    
    }
}
$databases = array (
  'default' => 
  array (
    'default' => 
    array ( 
      'database' => $database,
      'username' => $username,
      'password' => $password,
      'host' => $db_host,
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);