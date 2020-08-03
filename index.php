<?php
require  'vendor/autoload.php';  
require  'libs/Config.php';
spl_autoload_register(function ($class) {require LIBS . $class .".php";});
$app = new Bootstrap();
?>
