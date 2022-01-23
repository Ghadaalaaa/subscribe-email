<?php 
/* 
 * Basic Site Settings and Database Configuration 
 */ 
 
// Site Settings 
$siteName = 'Syntrum Solutions'; 
$siteEmail = 'ghadaalaa798@gmail.com'; 
 
$siteURL = ($_SERVER["HTTPS"] == "on")?'https://':'http://'; 
$siteURL = $siteURL.$_SERVER["SERVER_NAME"].dirname($_SERVER['REQUEST_URI']).'/'; 
 
// Database configuration 
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'syntrum'); 