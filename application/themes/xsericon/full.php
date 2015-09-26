<!doctype html>

<html lang="en">
<head>
	<?=Loader::element('header_required');?>
 	<meta name="description" content="xSeriCon">
  	<meta name="author" content="Ryan Stroud">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?=$view->getThemePath()?>/lib/bootstrap-3.3.5-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=$view->getThemePath()?>/lib/slick-1.5.7/slick/slick.css">
  	<link rel="stylesheet" href="<?=$view->getThemePath()?>/lib/slick-1.5.7/slick/slick-theme.css">
  	<link rel="stylesheet" href="<?=$view->getThemePath()?>/css/styles.css">
  	<link rel="stylesheet" href="<?=$view->getThemePath()?>/css/footer.css">
</head>
<body>
	<div class="<?=$c->getPageWrapperClass()?>">
		<?php $this->inc('elements/header.php');?>
		<?php
		$a = new Area('Slider');
		$a->enableGridContainer();
		$a->display($c);
		?>
		<?php
		$a = new Area('Consulting');
		$a->enableGridContainer();
		$a->display($c);
		?>
		<?php
		$a = new Area('Training');
		$a->enableGridContainer();
		$a->display($c);
		?>
		<?php
		$a = new Area('Resources');
		$a->enableGridContainer();
		$a->display($c);
		?>
		<?php
		$a = new Area('Contact');
		$a->enableGridContainer();
		$a->display($c);
		?>
		<?php $this->inc('elements/footer.php');?>
		<script src="<?=$view->getThemePath()?>/lib/jquery-2.1.4.min.js"></script>
		<script src="<?=$view->getThemePath()?>/lib/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
  		<script src="<?=$view->getThemePath()?>/lib/slick-1.5.7/slick/slick.min.js"></script>
  		<script src="<?=$view->getThemePath()?>/js/index.js"></script>
  	</div>
  	<? Loader::element('footer_required');?>
</body>
</html>