<?php include 'header.php'; ?>

<!--++++++++++++++ 
Section: 
++++++++++++++ -->

<div class="container">
	<h1>H1 Heading</h1>
	<h2>H2 Heading</h2>
	<h3>H3 Headeing</h3>
	<h4>H4 Headeing</h4>
	<h5>H5 Headeing</h5>
	<h6>H6 Headeing</h6>
	<i>Italic</i>
	<strong>Bold strong</strong>
	<b>Bold b</b>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim culpa temporibus ab expedita repellat magnam ut maxime, laboriosam porro obcaecati harum quibusdam, cumque fugit sit quaerat placeat, distinctio consequuntur.</p>
	<p><a href="/">Link Style</a></p>

	<ul>
		<li>Unordered List</li>
		<li>Unordered List</li>
	</ul>

	<ol>
		<li>Ordered List</li>
		<li>Ordered List</li>
	</ol>

	<p class="small-fonts">Terms Styles/Breadcrumb Trail</p>


	<table class="row" cellspacing="0" cellpadding="0">
		<tr>
			<th>Subject Heading</th>
		</tr>
		<tr>
			<td>Copy Line</td>
		</tr>
		<tr>
			<td>Copy Line</td>
		</tr>
	</table>

	<div class="row">
		<a href="/" class="button-1">Tag</a>
		<button class="button-1">Button</button>
	</div>
	<div class="row">
		<a href="/" class="button-2">Tag</a>
		<button class="button-2">Button</button>
	</div>
	<div class="row">
		<ul class="social-1">
			<li><a href="/"><i class="fa fa-search"></i></a></li>
			<li><a href="/"><i class="fa fa-facebook"></i></a></li>
			<li><a href="/"><i class="fa fa-twitter"></i></a></li>
			<li><a href="/"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="/"><i class="fa fa-instagram"></i></a></li>
			<li><a href="/"><i class="fa fa-snapchat-ghost"></i></a></li>
			<li><a href="/"><i class="fa fa-envelope-o"></i></a></li>
		</ul>
		<div class="row">
			<ul class="social-2">
				<li><a href="/"><i class="fa fa-search"></i></a></li>
				<li><a href="/"><i class="fa fa-facebook"></i></a></li>
				<li><a href="/"><i class="fa fa-twitter"></i></a></li>
				<li><a href="/"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="/"><i class="fa fa-instagram"></i></a></li>
				<li><a href="/"><i class="fa fa-snapchat-ghost"></i></a></li>
				<li><a href="/"><i class="fa fa-envelope-o"></i></a></li>
			</ul>
		</div>
	</div>

	<form action="#">
		<h2 class="blue">Form</h2>
		<div class="row">
			<label for="name">Name</label>
			<input type="text" name="fname">
		</div>
		<div class="row">
			<label for="surname">Surname</label>
			<input type="text" name="surname">
		</div>
		<div class="row">
			<label for="name">Date</label>
			<div class="form-row">
				<div class="col-3">
					<select name="" id="">
						<option value="0">1</option>
						<option value="1">2</option>
						<option value="2">3</option>
					</select>
					<span>Day</span>
				</div>
				<div class="col-3">
					<select name="" id="">
						<option value="Month">Month</option>
						<option value="february">February</option>
						<option value="March">March</option>
					</select>
					<span>Month</span>
				</div>
				<div class="col-3">
					<select name="" id="">
						<option value=""></option>
						<option value="1">2016</option>
						<option value="2">2017</option>
					</select>
					<span>Year</span>
				</div>
			</div>
		</div>
		<div class="row">
			<label for="work">Work</label>
			<input type="text" name="work" placeholder="Fairfax...">
		</div>
		<div class="row">
			<label for="gender">Gender</label>
			<div class="form-row">
				<div class="radio-button">
					Male 
					<input type="radio" name="gender" checked value="female"><i class="new-radio"></i></div>
				<div class="radio-button">
					Female 
					<input type="radio" name="gender" value="female"><i class="new-radio"></i></div>
			</div>	
		</div>
	</form>
</div>



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
					<div class="news-content-front" style="background-image:url('compressed/images/video-image.png">
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
					</div>
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
				<div class="col-four">
					<div class="news-1 news-style-3">
						<div class="news-content-front">
							<img src="compressed/images/asian-man.png" alt="">
							<p>Interview with Reynold Poernomo</p>
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
	</div>
</section>


<!--++++++++++++++ 
Section: Pop | Subscription form
++++++++++++++ -->
<section class="sub-form-wrapper">
	<div class="table">
		<div class="table-cell">
			<div class="container">
				<!-- <div class="sub-form clear-after">
					<div class="close-sub-form">&times;</div>
					<form action="" class="row">
						<div class="row">
							<p>Want to keep up to date with the world?</p>
						</div>
						<input type="text" placeholder="Enter your email address">
						<input type="submit" class="button-1" value="Subscribe">
					</form>
				</div> -->
				<div class="sub-form clear-after">
					<div class="close-sub-form">&times;</div>
					<div class="row success">
						<div class="row">
						<p>Thank you for <br> subscribing</p>
						</div>
						<div class="button-area-4">
							<div class="button-area-4-wrapper">
								<span>Share:</span>
								<ul class="social-4">
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
	<div class="container">
		<div class="col-2">
			<div class="row">
				<button type="button" class="button-4">The Experts</button>
			</div>
			<div class="experts-content row">
				<p>Helping you to connect the you of today to the you of tomorrow.</p>
			</div>
		</div>
		<div class="col-2">
			<div class="swiper-container-tile">
				<div class="swiper-wrapper">
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
Blockquotes
++++++++++++++ -->
<section>
	<div class="container">
		<div class="row">
			<ul class="breadcrumb">
				<li><a href="#">Breadcrumbs</a></li>
				<li><a href="#">Breadcrumbs</a></li>
				<li>Here</li>
			</ul>
		</div>
		<div class="row">
			<h2 class="blue">Introducing new sports, and making us better</h2>
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
		<div class="row">
			<figure>
				<img src="compressed/images/banner-1.png" alt="">
				<figcaption><strong>Caption:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</figcaption>
			</figure>
		</div>
		<blockquote>
			Technology is a time saver. Using machine learning, you can teach computers to process data and learn faster.
		</blockquote>
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nulla assumenda distinctio quia obcaecati, dolorem, natus esse aut iusto voluptate, commodi! Facere minus molestias natus unde. Porro nam saepe, fuga! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus incidunt blanditiis, totam hic voluptates error ratione fuga ut, aut, at laudantium esse amet repellat necessitatibus reiciendis veritatis dolores voluptate cumque?</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis autem vel in, nemo iure saepe mollitia corrupti, odit quos consectetur optio aliquid voluptates ipsa omnis, fuga. Consequatur tempora, ex nisi!</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, tempore asperiores voluptas eligendi necessitatibus quisquam ab dolorem iure tempora ipsam ratione eaque, enim harum quae quidem. Nostrum repudiandae ad rem.</p>
		</div>
<!--++++++++++++++ 
Comments 
++++++++++++++ -->
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
			<ul class="great-share">
				<li>Great! Share</li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-snapchat-ghost"></i></a></li>
			</ul>
		</div>
		<div class="row">
			<div class="feedback">
				<form action="">
					<h4 class="blue">Give us your feed back</h4>
					<textarea name="feedback" id="" cols="30" rows="6"></textarea>
					<button type="submit" class="button-2">Send</button>
				</form>
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
		<div class="row">
			<p class="total-comments"><strong>200</strong> comments</p>
			<div class="feedback">
				<form action="">
					<textarea name="feedback" id="" cols="30" rows="6" placeholder="Write your comment here..."></textarea>
					<button type="submit" class="button-2">Post Comment</button>
				</form>
			</div>
		</div>
		<div class="row">			
			<div class="list-filter row">
				<span>Sort Comments by </span>
				<div class="list-filter-options">
					<select name="" id="">
						<option value="oldest">Oldest</option>
						<option value="newest">Newest</option>
					</select>
				</div>
			</div>
			<div class="list-of-comments row">	
				<div class="list-info row">
					<strong>Name</strong> January 19 2017 at 12:48
				</div>
				<div class="comments-text row">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur officia similique, fugit, officiis ullam ut dolores delectus quibusdam ipsam quasi ea, sunt error! Ex ab minima, eaque, sapiente vero minus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut reprehenderit consequatur similique alias tempora autem aut mollitia assumenda. A animi perferendis corporis facere voluptatibus, natus quam, suscipit alias similique illo!</p>
				</div>
				<div class="row">
					<button type="button" class="button-6">Reply</button>
				</div>
			</div>
			<div class="replied full-width">	
				<div class="list-info row">
					<strong>Name</strong> January 19 2017 at 12:48
				</div>
				<div class="comments-text row">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur officia similique, fugit, officiis ullam ut dolores delectus quibusdam ipsam quasi ea, sunt error! Ex ab minima, eaque, sapiente vero minus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut reprehenderit consequatur similique alias tempora autem aut mollitia assumenda. A animi perferendis corporis facere voluptatibus, natus quam, suscipit alias similique illo!</p>
				</div>
				<div class="row">
					<button type="button" class="button-7">More</button>
				</div>
			</div>
			<div class="replied full-width">	
				<div class="list-info row">
					<strong>Name</strong> January 19 2017 at 12:48
				</div>
				<div class="comments-text row">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur officia similique, fugit, officiis ullam ut dolores delectus quibusdam ipsam quasi ea, sunt error! Ex ab minima, eaque, sapiente vero minus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut reprehenderit consequatur similique alias tempora autem aut mollitia assumenda. A animi perferendis corporis facere voluptatibus, natus quam, suscipit alias similique illo!</p>
				</div>
				<div class="row">
					<button type="button" class="button-7">More</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="show-loader"></div>
		</div>
	</div>
</section>

<?php include 'footer.php'; ?>