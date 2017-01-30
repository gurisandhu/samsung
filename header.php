<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
			<img src="compressed/images/sam_logo.png" alt="Samsung Logo">
		</div>
		<div class="col-2">
			<a href="/" target="_blank" class="sam-link">samsung australia ></a>
		</div>
	</div>
</div>
<header>
	<div class="desktop border">
		<div class="container">
			<div class="col-3">
				<nav class="desktop-menu">
					<ul>
						<li><a href="/samsung/styled.php">Technology</a></li>
						<li><a href="/">Innovation</a></li>
						<li class="current-menu-item"><a href="/">Lifestyle</a></li>
						<li><a href="/">Community</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-3">
				<a href="/samsung"><img src="compressed/images/re_logo.png" alt="Reimagine"></a>
			</div>
			<div class="col-3">
				<ul class='social-1'>
					<!-- <li><a href="/"><i class="fa fa-search"></i></a></li> -->
					<li><a href="/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="/"><i class="fa fa-twitter"></i></a></li>
					<li><a href="/"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="/"><i class="fa fa-instagram"></i></a></li>
					<li><a href="/"><i class="fa fa-snapchat-ghost"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="desktop desktop-blue-menu full-width">
		<div class="container">
			<div class="col-2">
				<div class="logo"><img src="compressed/images/re_logo_white_small.png" alt="Reimagine Logo White"></div>
				<div class="tagline">
					Introducing new sports, and making us better.
				</div>
			</div>
			<div class="col-2">
				<div class="button-5">
					<span>Share:</span>
					<ul class="social-2">
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-snapchat-ghost"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="responsive responsive-menu">
		<div class="container">
			<nav>
				<ul class="navigation">
					<li><a href="/">Technology</a></li>
					<li><a href="/">Innovation</a></li>
					<li><a href="/">Lifestyle</a></li>
					<li><a href="/">Community</a></li>
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
					<li><a href="/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="/"><i class="fa fa-twitter"></i></a></li>
					<li><a href="/"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="/"><i class="fa fa-instagram"></i></a></li>
					<li><a href="/"><i class="fa fa-snapchat-ghost"></i></a></li>
				</ul>
			</nav>
			<div class="logo">
				<img src="compressed/images/re_logo.png" alt="Reimagine">
			</div>
			<div class="menu-button-wrapper">
				<div class="menu-button"></div>
			</div>
		</div>	
	</div> 
	<div class="sub-menu full-width desktop">
		<div class="container one-twoThird">
			<div class="one-third">
				<div class="row">
					<button type="button" class="button-3">Latest</button>
				</div>
				<div class="row">
					<h2>View all articles in techonology</h2>
				</div>
				<div class="row">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam optio, vitae reprehenderit laudantium blanditiis recusandae nostrum, ea sit dicta debitis suscipit modi. Obcaecati vero similique vitae cupiditate nostrum explicabo, voluptatibus?</p>
				</div>
			</div>
			<div class="two-third">
				<div class="swiper-container-tile">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="news-1 news-style-2">
						<div class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</div>
						<div class="news-content-hover">
							<div class="news-content-hover-wrapper">
									<?php 
									$textToTrim = 'Did your parents ever tell you to stop playing with your food. Vent experferi quaesec tatur? Dunt ab ipsa volorep edisim faces nat.Tat ipsam a prat. Ra volo inctius autent vello tet aut ut od et aut quaspic abore... tem et invel ent acessitatus rescia iscidunt faccuptas doleseq uidit, alibusam nosaper aeperfera dis ut eum accumet, comnis non nobis eos voluptur? Is volumendae dolum coreratem';
									
								 ?>
								<p><?php echo trimText($textToTrim, "...", 150); ?></p>
								<div class="button-area">
									<div class="full-width">
										<button type="button" class="button-3">Read more</button>
									</div>
									<span>Share:</span>
									<ul class="social-3">
										<li><a href="/"><i class="fa fa-facebook"></i></a></li>
										<li><a href="/"><i class="fa fa-twitter"></i></a></li>
										<li><a href="/"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="/"><i class="fa fa-instagram"></i></a></li>
										<li><a href="/"><i class="fa fa-snapchat-ghost"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
						</div>	
						<div class="swiper-slide">
							<div class="news-1 news-style-2">
						<div class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</div>
						<div class="news-content-hover">
							<div class="news-content-hover-wrapper">
									<?php 
									$textToTrim = 'Did your parents ever tell you to stop playing with your food. Vent experferi quaesec tatur? Dunt ab ipsa volorep edisim faces nat.Tat ipsam a prat. Ra volo inctius autent vello tet aut ut od et aut quaspic abore... tem et invel ent acessitatus rescia iscidunt faccuptas doleseq uidit, alibusam nosaper aeperfera dis ut eum accumet, comnis non nobis eos voluptur? Is volumendae dolum coreratem';
									
								 ?>
								<p><?php echo trimText($textToTrim, "...", 150); ?></p>
								<div class="button-area">
									<div class="full-width">
										<button type="button" class="button-3">Read more</button>
									</div>
									<span>Share:</span>
									<ul class="social-3">
										<li><a href="/"><i class="fa fa-facebook"></i></a></li>
										<li><a href="/"><i class="fa fa-twitter"></i></a></li>
										<li><a href="/"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="/"><i class="fa fa-instagram"></i></a></li>
										<li><a href="/"><i class="fa fa-snapchat-ghost"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
						</div>
						<div class="swiper-slide">
							<div class="news-1 news-style-2">
						<div class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</div>
						<div class="news-content-hover">
							<div class="news-content-hover-wrapper">
									<?php 
									$textToTrim = 'Did your parents ever tell you to stop playing with your food. Vent experferi quaesec tatur? Dunt ab ipsa volorep edisim faces nat.Tat ipsam a prat. Ra volo inctius autent vello tet aut ut od et aut quaspic abore... tem et invel ent acessitatus rescia iscidunt faccuptas doleseq uidit, alibusam nosaper aeperfera dis ut eum accumet, comnis non nobis eos voluptur? Is volumendae dolum coreratem';
									
								 ?>
								<p><?php echo trimText($textToTrim, "...", 150); ?></p>
								<div class="button-area">
									<div class="full-width">
										<button type="button" class="button-3">Read more</button>
									</div>
									<span>Share:</span>
									<ul class="social-3">
										<li><a href="/"><i class="fa fa-facebook"></i></a></li>
										<li><a href="/"><i class="fa fa-twitter"></i></a></li>
										<li><a href="/"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="/"><i class="fa fa-instagram"></i></a></li>
										<li><a href="/"><i class="fa fa-snapchat-ghost"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
						</div>
						<div class="swiper-slide">
							<div class="news-1 news-style-2">
						<div class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</div>
						<div class="news-content-hover">
							<div class="news-content-hover-wrapper">
									<?php 
									$textToTrim = 'Did your parents ever tell you to stop playing with your food. Vent experferi quaesec tatur? Dunt ab ipsa volorep edisim faces nat.Tat ipsam a prat. Ra volo inctius autent vello tet aut ut od et aut quaspic abore... tem et invel ent acessitatus rescia iscidunt faccuptas doleseq uidit, alibusam nosaper aeperfera dis ut eum accumet, comnis non nobis eos voluptur? Is volumendae dolum coreratem';
									
								 ?>
								<p><?php echo trimText($textToTrim, "...", 150); ?></p>
								<div class="button-area">
									<div class="full-width">
										<button type="button" class="button-3">Read more</button>
									</div>
									<span>Share:</span>
									<ul class="social-3">
										<li><a href="/"><i class="fa fa-facebook"></i></a></li>
										<li><a href="/"><i class="fa fa-twitter"></i></a></li>
										<li><a href="/"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="/"><i class="fa fa-instagram"></i></a></li>
										<li><a href="/"><i class="fa fa-snapchat-ghost"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
						</div>
					</div>
					<div class="swiper-scrollbar"></div>
				</div>
			</div>
		</div>
	</div>
</header>

