<?php 
require '../../libs/Config.php';
require '../../libs/Ajax.php';  
$obj1 = new Ajax();
$obj1->Ajaxws($_POST['id']);
?>