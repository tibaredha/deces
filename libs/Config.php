<?php
define('LIBS', 'libs/');
define('URL', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
define('DO_ROOT',dirname($_SERVER['PHP_SELF']));
define('DB_TYPE',"mysql");
define('LOGO', 'funerail.jpg?t='.time());
date_default_timezone_set('Africa/Algiers');

if($_SERVER['HTTP_HOST'] == 'localhost') 
{
	//echo "We are in localhost";   
	define('DB_HOST',"localhost");
	define('DB_NAME',"framework");
	define('DB_USER',"root");
	define('DB_PASS',""); 
}
else
{
	//ftp-tibaredha.alwaysdata.net/tibaredha/030570170176
	//echo "We are in mysql-tibaredha.alwaysdata.net";
	define('DB_HOST',"mysql-tibaredha.alwaysdata.net");
	define('DB_NAME',"tibaredha_framework");
	define('DB_USER',"tibaredha");
	define('DB_PASS',"030570170176");	
}
?>


