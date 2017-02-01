<?php include 'header.php'; ?>

<!--++++++++++++++ 
Section: Banner 2: Page titles
++++++++++++++ -->
<section class="banner-3">
		<div class="table-cell">
			<div class="container">
				<div class="author">
					<div class="author-image">
						<img src="compressed/images/expert-1.png" alt="">
					</div>
					<ul class="author-info">
						<li>Sarah Smith</li>
						<li>Tech Expert</li>
					</ul>
					<ul class="social-5">
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>	
		</div>
</section>

<section class="page-content">
	<div class="container">
		<div class="page-content-wrapper">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit labore nostrum dignissimos laudantium, beatae fuga animi quisquam dolorum? Reprehenderit temporibus consequuntur amet possimus eius, quos tenetur nesciunt perferendis eum quo.</p>
		</div>
	</div>
</section>

<!--++++++++++++++ 
Section: News
++++++++++++++ -->
<section>
	<div class="container">
		<div class="row center">
			<h2 class="blue margin-none">Stories by Sarah</h2>
		</div>
		<div class="full-width news">
			<div class="col-2">
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
			<div class="col-2">
				<div class="col-2">
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
				<div class="col-2">
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
		<!-- News another row -->
			<div class="col-2">
				<div class="col-2">
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
				<div class="col-2">
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
			<div class="col-2">
				<div class="col-2">
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
				<div class="col-2">
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