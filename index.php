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
		<button class="button-1 active">Button</button>
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
	<div class="container">
		<div class="col-3">
			<ul>
				<li><a href="/">Technology</a></li>
				<li><a href="/">Innovation</a></li>
				<li><a href="/">Lifestyle</a></li>
				<li><a href="/">Community</a></li>
			</ul>
		</div>
		<div class="col-3">
			<img src="compressed/images/re_logo.png" alt="Reimagine">
		</div>
		<div class="col-3">
			<ul>
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
</header>


<!--++++++++++++++ 
Section: 
++++++++++++++ -->	

<?php include 'footer.php'; ?>