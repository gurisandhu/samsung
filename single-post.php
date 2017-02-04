<?php include 'header.php'; ?>
<!--++++++++++++++ 
Section: Banner 2: Page titles
++++++++++++++ -->
<section class="banner-2">
		<div class="table-cell">
			<div class="container">
				<div class="row">
					<ul class="breadcrumb">
						<li><a href="#">Breadcrumb</a></li>
						<li><a href="#">Breadcrumb</a></li>
						<li>Current page</li>
					</ul>
				</div>
				<div class="row">
					<h2 class="blue margin-none">Introducing new sports, and making us better.</h2>
				</div>
				<div class="row">
					<div class="blog-by">By Sarah Smith</div>
				</div>
				<div class="row">
					<div class="blog-date">
						Sunday, December 11, 2016
					</div>
				</div>
				<div class="row">
					<div class="button-area-5">
						<span>100 Shares:</span>
						<ul class="social-3 black">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-snapchat-ghost"></i></a></li>
						</ul>
					</div>
				</div>
		</div>
</section>
<section class="page-content">
	<div class="container">
		<div class="page-content-wrapper">
				<div class="row">
					<figure>
						<img src="compressed/images/banner-1.png" alt="">
						<figcaption><strong>Caption:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</figcaption>
					</figure>
				</div>
				<div class="row">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet esse fugiat blanditiis quisquam, et delectus excepturi a necessitatibus, quae repellendus eos dolores, quam quas molestias tenetur quidem mollitia voluptate totam!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nobis nulla id vero, unde veniam at mollitia fugiat alias, molestias amet maiores distinctio repudiandae debitis voluptatibus excepturi. Consequuntur reiciendis, assumenda.</p>
				</div>
				<div class="row">
					<div class="post-video">
						<figure><img src="compressed/images/post-video.png" alt=""></figure>
						<div type="button" class="video-play"><i class="fa fa-play-circle-o"></i></div>
						<div class="video-to-play">
							<div class='embed-container hide'><iframe id="video-to-play" src='https://www.youtube.com/embed/jihB2qPq7O0?wmode=transparent&amp;autoplay=0&amp;autohide=1' frameborder='0' allowfullscreen></iframe></div>
						</div>
					</div>
					<figcaption><strong>Caption:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</figcaption>
				</div>
				<div class="row">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere alias at quo nesciunt, sit, et vitae dolorem atque numquam modi sapiente facilis, architecto culpa saepe nostrum fuga amet harum veritatis!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum obcaecati ad voluptatem explicabo est facere nulla nisi, sequi. Animi voluptatem nihil dolore rerum at, minima aperiam culpa, dolorum cumque.</p>
				</div>
				<blockquote>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nihil, voluptate!
				</blockquote>
				<div class="row">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere alias at quo nesciunt, sit, et vitae dolorem atque numquam modi sapiente facilis, architecto culpa saepe nostrum fuga amet harum veritatis!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum obcaecati ad voluptatem explicabo est facere nulla nisi, sequi. Animi voluptatem nihil dolore rerum at, minima aperiam culpa, dolorum cumque.</p>
				</div>
				<div class="row">
					<div class="col-2">
						<div class="was">Was this article helpful?</div>	
					</div>
					<div class="col-2">
						<button type="button" class="button-2">Yes</button>
						<button type="button" class="button-2">No</button>
					</div>
				</div>
				<div class="row">
					<div class="categories">
						<h2 class="blue">Categories</h2>
						<a href="#" class="button-1">Tag</a>
						<a href="#" class="button-1">Tag</a>
						<a href="#" class="button-1">Tag</a>
					</div>
				</div>
			</div>	
			</div>
		</div>
</section>

<!--++++++++++++++ 
Section: News
++++++++++++++ -->
<section>
	<div class="container">
		<div class="row center">
			<h2 class="blue margin-none">We Recommend</h2>
		</div>
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
	</div>
</section>


<?php include 'footer.php'; ?>