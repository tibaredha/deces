<!DOCTYPE html>
<html>
<head>
<title><?php if (isset ($this->title)){echo $this->title; }else {echo title ;}?></title>
<link rel="icon" type="image/png" href="<?PHP echo URL; ?>public/images/<?php echo LOGO ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/style.min.css?t=<?php echo time();?>">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/content.min.css?t=<?php echo time();?>">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/tabbed_area.min.css?t=<?php echo time();?>">

<script src="<?php echo URL;?>public/js/jqueryx.min.js?t=<?php echo time();?>"></script>
<script src="<?php echo URL;?>public/js/maskedinput.min.js?t=<?php echo time();?>"></script>
<script src="<?php echo URL;?>public/js/style.min.js?t=<?php echo time();?>"></script>
<meta charset="utf-8">
<?php 
if (isset($this->js)){foreach ($this->js as $js){echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';}}
if (isset($this->css)){foreach ($this->css as $css){echo '<link rel="stylesheet" type="text/css" href="'.URL.'views/'.$css.'"></script>';}}
?>
</head>
<?php $time = microtime(true);?>
<body> 
<?php 
Session::init();
Lang::init(Session::get('loggedIn'));
?>
<div class="page-in">
	<div class="page">
		<div class="main">
			<div class="header">
			<!--header-top-->
			<div class="header-top">
				<h1>MSP-RH <span>DSP-Djelfa</span></h1>
			</div>
			<!--header-bottom-->
			<div class="header-bottom">
				<h2>Système Électronique D'enregistrement<br>Décès et Naissances.</h2>
			</div>
			<!--menu-->
				<?php if (Session::get('loggedIn') == true){require 'Menu/Menuc.php';}else {require 'Menu/Menuhc.php';}?>
			</div>
			<div class="content">