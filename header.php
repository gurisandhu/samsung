<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title>Samsung</title>
	<link rel="shortcut icon" href="compressed/images/fevicon.ico" type="image/x-icon">
	<link rel="icon" href="compressed/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="library/swiper.min.css" type="text/css" charset="utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
</head>
<body>
<?php include 'functions.php'; ?>
<div class="top-header">
	<div class="container">
		<div class="col-2">
			<a href="/samsung/"><img src="compressed/images/sam_logo.png" alt="Samsung Logo"></a>
		</div>
		<div class="col-2">
			<a href="#" target="_blank" class="sam-link">samsung australia ></a>
		</div>
	</div>
</div>
<header>

	<?php 
			include 'header-white.php';
			include 'sub-menu.php';
		// $currentPage = $_SERVER['REQUEST_URI'];
		// $singlePost = '/samsung/single-post.php';
		// $authorPost = '/samsung/author-post.php';
		// if(($currentPage==$singlePost)||($currentPage==$authorPost)) {
		// 	include 'header-white.php';
		// 	include 'sub-menu.php';
		// 	include 'header-blue.php';
		// } else {
		// 	include 'header-white.php';
		// 	include 'sub-menu.php';
		// }
		

	 ?>

	<div class="responsive responsive-menu">
		<div class="container">
			<nav>
				<ul class="navigation">
					<li class="current-menu-item"><a href="/samsung/technology.php">Technology</a></li>
					<li><a href="/samsung/search.php">Search</a></li>
					<li><a href="/samsung/author-post.php">Author Post</a></li>
					<li><a href="/samsung/single-post.php">Blog</a></li>
				</ul>
				<div class="row">
					<form action="">
						<label for="" class="search-input">
							<i class="fa fa-search"></i>
							<input type="text">
						</label>
					</form>
				</div>
				<ul class='social-2'>
					<li><a href="/samsung/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="/samsung/"><i class="fa fa-twitter"></i></a></li>
					<li><a href="/samsung/"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="/samsung/"><i class="fa fa-instagram"></i></a></li>
					<li><a href="/samsung/"><i class="fa fa-snapchat-ghost"></i></a></li>
				</ul>
			</nav>
			<div class="logo">
				<a href="/samsung/"><img src="compressed/images/re_logo.png" alt="Reimagine"></a>
			</div>
			<div class="menu-button-wrapper">
				<div class="menu-button"></div>
			</div>
		</div>	
	</div> 
</header>

