<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $page_title ?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/home/css/style.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/home/css/frontend_styles.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/owl.theme.default.min.css">

	<script src="<?= BASE_URL ?>assets/js/jquery-2.2.3.min.js"></script>
	<script src="<?= BASE_URL ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?= BASE_URL ?>assets/js/bootstrap.min.js"></script>

	<link rel="icon" href="<?= BASE_URL ?>assets/images/logo.jpg">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>    
				<a class="navbar-brand branded" href="<?= BASE_URL ?>"><img height = "100%" src="<?= BASE_URL ?>assets/images/unicab_logo.jpg"></a>
			</div>
			<div class = "navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="<?= BASE_URL ?>">Homepage</a></li>
					<li><a href="#">Product</a></li>
					<li><a href="#">Brand</a></li>
					<li><a href="<?php BASE_URL ?>contacts">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>