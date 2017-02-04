<?php include 'header.php'; ?>
<!--++++++++++++++ 
Section: Banner
++++++++++++++ -->
<section class="banner">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide table" style="background-image: url('compressed/images/banner-1.png');">
				<div class="table-cell">
					<div class="container">
						<div class="banner-content-wrapper">
							<div class="swiper-pagination swiper-pagination-white"></div>
							<div class="banner-content-title">
								Subject
							</div>
							<div class="banner-content">
								Introducing new sports, and making us better.
							</div>
							<div class="banner-content-desc">
								11.12.16 | Read Time 1Min
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide table" style="background-image: url('compressed/images/banner-1.png');">
				<div class="table-cell">
					<div class="container">
						<div class="banner-content-wrapper">
							<div class="swiper-pagination swiper-pagination-white"></div>
							<div class="banner-content-title">
								2 Subject
							</div>
							<div class="banner-content">
								2 Introducing new sports, and making us better.
							</div>
							<div class="banner-content-desc">
								21.12.16 | Read Time 1Min
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>
<!--++++++++++++++ 
Section: News with Video
++++++++++++++ -->
<section>
	<div class="container">
		<div class="full-width news">
			<div class="col-two">
				<div class="news-video news-1 news-style-4">
					<a href="#" class="news-content-front" style="background-image:url('compressed/images/video-image.png');">
						<button type="button" class="button-3">Subject</button>
						<div class="video-content table">
							<div class="table-cell">
								<div class="full-width">
									<div type="button" class="video-play"><i class="fa fa-play-circle-o"></i></div>
								</div>
								<div class="full-width">
									<p>New app uncovers rips on beaches</p>
								</div>
							</div>
						</div>
					</a>
					<div class="news-content-hover">
						<div class="news-content-hover-wrapper">
							<?php 
								$textToTrim = 'Did your parents ever tell you to stop playing with your food. Vent experferi quaesec tatur? Dunt ab ipsa volorep edisim faces nat.Tat ipsam a prat. Ra volo inctius autent vello tet aut ut od et aut quaspic abore... tem et invel ent acessitatus rescia iscidunt faccuptas doleseq uidit, alibusam nosaper aeperfera dis ut eum accumet, comnis non nobis eos voluptur? Is volumendae dolum coreratem';
								
							 ?>
							<div class="video-content table">
								<div class="table-cell">
									<div class="full-width">
										<div type="button" class="video-play"><i class="fa fa-play-circle-o"></i></div>
									</div>
									<div class="full-width">
										<p><?php echo trimText($textToTrim, "...", 100); ?></p>
									</div>
								</div>
							</div>
							<div class="button-area-3">
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
					<div class="video-to-play">
						<div class='embed-container hide'><iframe id="video-to-play" src='https://www.youtube.com/embed/jihB2qPq7O0?wmode=transparent&amp;autoplay=0&amp;autohide=1' frameborder='0' allowfullscreen></iframe></div>
					</div>
				</div>
			</div>
				<div class="col-four">
					<div class="news-1 news-style-2">
						<a href="#" class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
				<div class="col-four">
					<div class="news-1 news-style-3">
						<a href="#"  class="news-content-front">
							<img src="compressed/images/asian-man.png" alt="">
							<p>Interview with Reynold Poernomo</p>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
	</div>
</section>

<!--++++++++++++++ 
Section: The Experts
++++++++++++++ -->
<section class="experts">
	<div class="container has-swiper-slider">
		<div class="col-2">
			<div class="row">
				<button type="button" class="button-4">The Experts</button>
			</div>
			<div class="experts-content row">
				<p>Helping you to connect the you of today to the you of tomorrow.</p>
			</div>
		</div>
		<div class="col-2">
			<div class="swiper-container-expert">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="expert">
							<a href="http://www.google.com">
								<div class="expert-image">
									<img src="compressed/images/expert-1.png" alt="">
								</div>
								<ul class="expert-info">
									<li>Sarah Smith</li>
									<li>Tech Expert</li>
								</ul>
							</a>
							<ul class="social-5">
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>	
					<div class="swiper-slide">
						<div class="expert">
							<a href="#">
								<div class="expert-image">
									<img src="compressed/images/expert-2.png" alt="">
								</div>
								<ul class="expert-info">
									<li>Max Power</li>
									<li>VR Expert</li>
								</ul>
							</a>
							<ul class="social-5">
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="expert">
							<a href="#">
								<div class="expert-image">
									<img src="compressed/images/expert-3.png" alt="">
								</div>
								<ul class="expert-info">
									<li>Sarah Smith</li>
									<li>Sport Expert</li>
								</ul>
							</a>
							<ul class="social-5">
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="expert">
							<a href="#">
								<div class="expert-image">
									<img src="compressed/images/expert-1.png" alt="">
								</div>
								<ul class="expert-info">
									<li>Sarah Smith</li>
									<li>Tech Expert</li>
								</ul>
							</a>
							<ul class="social-5">
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="swiper-scrollbar"></div>
			</div>
		</div>
	</div>
</section>
<!--++++++++++++++ 
Section: News
++++++++++++++ -->
<section>
	<div class="container">
		<div class="full-width news">
			<div class="col-two">
				<div class="news-1 news-style-1">
					<a href="#" class="news-content-front" style="background-image:url('compressed/images/in-360.png');">
						<button type="button" class="button-3">Subject</button>
						<p>360-degree in interactive Netball Australia campaign</p>
					</a>
					<div class="news-content-hover">
						<div class="news-content-hover-wrapper">
							<?php 
								$textToTrim = 'Did your parents ever tell you to stop playing with your food. Vent experferi quaesec tatur? Dunt ab ipsa volorep edisim faces nat.Tat ipsam a prat. Ra volo inctius autent vello tet aut ut od et aut quaspic abore... tem et invel ent acessitatus rescia iscidunt faccuptas doleseq uidit, alibusam nosaper aeperfera dis ut eum accumet, comnis non nobis eos voluptur? Is volumendae dolum coreratem';
								
							 ?>
							<p><?php echo trimText($textToTrim, "...", 300); ?></p>
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
				<div class="col-four">
					<div class="news-1 news-style-2">
						<a href="#"  class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
				<div class="col-four">
					<div class="news-1 news-style-3">
						<a href="#"  class="news-content-front">
							<img src="compressed/images/asian-man.png" alt="">
							<p>Interview with Reynold Poernomo</p>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
				<div class="col-four">
					<div class="news-1 news-style-2">
						<a href="#" class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
				<div class="col-four">
					<div class="news-1 news-style-3">
						<a href="#" class="news-content-front">
							<img src="compressed/images/asian-man.png" alt="">
							<p>Interview with Reynold Poernomo</p>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
				<div class="col-four">
					<div class="news-1 news-style-2">
						<a href="#" class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
				<div class="col-four">
					<div class="news-1 news-style-3">
						<a href="#" class="news-content-front">
							<img src="compressed/images/asian-man.png" alt="">
							<p>Interview with Reynold Poernomo</p>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
	</div>
</section>

<!-- ++++++++++++++ -->
 <!-- Blue Swiper Slider -->
<!-- ++++++++++++++ -->
<section class="blue-slider full-width">
		<div class="container one-twoThird has-swiper-slider">
			<div class="one-third">
				<div class="row">
					<button type="button" class="button-4">Latest</button>
				</div>
				<div class="row">
					<h2>VR anywhere, anythime. Be transported right into the moment with mobile virtual reality.</h2>
				</div>
			</div>
			<div class="two-third">
				<div class="swiper-container-tile">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="news-1 news-style-3">
						<a href="#" class="news-content-front">
							<img src="compressed/images/asian-man.png" alt="">
							<p>Interview with Reynold Poernomo</p>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
						<a href="#" class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
						<a href="#" class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
						<a href="#" class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
	</section>

<!--++++++++++++++ 
Section: News
++++++++++++++ -->
<section>
	<div class="container">
		<div class="full-width news">
			<div class="col-two">
				<div class="news-1 news-style-1">
					<a href="#" class="news-content-front" style="background-image:url('compressed/images/in-360.png');">
						<button type="button" class="button-3">Subject</button>
						<p>360-degree in interactive Netball Australia campaign</p>
					</a>
					<div class="news-content-hover">
						<div class="news-content-hover-wrapper">
							<?php 
								$textToTrim = 'Did your parents ever tell you to stop playing with your food. Vent experferi quaesec tatur? Dunt ab ipsa volorep edisim faces nat.Tat ipsam a prat. Ra volo inctius autent vello tet aut ut od et aut quaspic abore... tem et invel ent acessitatus rescia iscidunt faccuptas doleseq uidit, alibusam nosaper aeperfera dis ut eum accumet, comnis non nobis eos voluptur? Is volumendae dolum coreratem';
								
							 ?>
							<p><?php echo trimText($textToTrim, "...", 300); ?></p>
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
			<!--  -->
				<div class="col-four">
					<div class="news-1 news-style-2">
						<a href="#" class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
				<div class="col-four last">
					<div class="news-1 news-style-3">
						<a href="#" class="news-content-front">
							<img src="compressed/images/asian-man.png" alt="">
							<p>Interview with Reynold Poernomo</p>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
		<!-- News another row -->
				<div class="col-four">
					<div class="news-1 news-style-2">
						<a href="#" class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
				<div class="col-four">
					<div class="news-1 news-style-3">
						<a href="#" class="news-content-front">
							<img src="compressed/images/asian-man.png" alt="">
							<p>Interview with Reynold Poernomo</p>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
			
				<div class="col-four">
					<div class="news-1 news-style-2">
						<a href="#" class="news-content-front" style="background-image:url('compressed/images/foot.png');">
							<div class="table">
								<div class="table-cell">
									<p>Going out later, but don't have the right shoes?</p>
								</div>
							</div>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
				<div class="col-four last">
					<div class="news-1 news-style-3">
						<a href="#" class="news-content-front">
							<img src="compressed/images/asian-man.png" alt="">
							<p>Interview with Reynold Poernomo</p>
							<div class="button-area-2 row">
								<div class="col-2" class="news-desc">Read Time 1Min</div>
								<div class="col-2"><button type="button" class="button-3">Subject</button></div>
							</div>
						</a>
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
		</div>
		<div class="row">
			<div class="load-more">
				<span></span>
				Loading More
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php'; ?>