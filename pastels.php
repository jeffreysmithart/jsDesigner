<?php 
$pageTitle = "Pastels";
include_once('inc/header.php');
include_once('inc/nav.php'); ?>

	<div class="pastels content-wrapper">
<?php include_once('inc/logo-bar.php'); ?>

	<div class="header__wrapper">
		<section id="header__box" class="portfolio__item__wrapper"> 
			<article class="head__inner">
				<img src="img/pastel_logo.png" alt="">
			</article>
		</section>
	</div>
		<section id="top" class="portfolio__item">
			<div class="portfolio__item__wrapper">
				<article class="portfolio__item__text">
					<h3>A bold take on a<br /> colorful medium</h3>
					<p>For this project, I focused on creating a site that centered around a single painting medium, pastel.</p>
				</article>
			</div>
			
		</section>
		<section class="portfolio__item">
			<div class="portfolio__item__wrapper">
				<article class="portfolio__item__content">
					<img src="img/pastel_box.jpg" alt="pastel | Jeffrey Smith">
					
				</article>
				<article class="portfolio__item__content">
					<p>Pastel is a painting medium that is all about color and visual texture. To highlight that, I used full-width background images to show-off the surface quality of the paintings.</p> 
					
					
				</article>

			</div>
			<img src="img/pastel_background.jpg" alt="pastel | jeffrey Smit" class="right-break">
						
		</section>
	<div class="clearfix"></div>

		<section class="portfolio__item switch">
			<div class="portfolio__item__wrapper">
				<article class="portfolio__item__content">
					<div class="image__wrapper">
						<img src="img/pastel_cat_phone.jpg" alt="aura logo | Jeffrey Smith" class="white-on-white">
					</div>
					
				</article>
				<article class="portfolio__item__content text">
					<p>The painting category pages feature a grid of thumbnails. Information about each painting is revealed on hover. The mobile version of the category page stacks the painting information on top of the thumbnail image.</p> 
					<img src="img/pastel_hover.jpg" alt="aura iPhone | Jeffrey Smith" class="show-for-small-only">
					<img src="img/animation.gif" alt="aura iPhone | Jeffrey Smith" class="show-for-medium-up" >
					<p>When laying out the page, I decided that I wanted to keep the aspect ratio of each painting as opposed to cropping square thumbnails.To keep the grid nice and orderly, I used jQuery to vertically and horizontally center the irregularity sized images. </p>

				</article>
			</div>				
		</section>


		<section class="portfolio__item">
			
			
			<div class="color_wrapper">
			<h3>The Result</h3>	
			
			</div>
			<div class="portfolio__item__wrapper">
				<blockquote>
					<p>For the final version of the website, I  customized the Twitter Bootstrap Framework.</p>
					<p>Jeffrey Smith Pastel makes use of a simple, custom CMS. The website is built dynamically  using PHP and a MySQL database to organize the original art work.</p> 	
				</blockquote>
			</div>	
				<img src="img/pastels_responsive.jpg" alt="eclipse | Jeffrey Smith" class="full-width">
			
			<div class="portfolio__item__wrapper">
				<p class="portfolio__item__button"><a href="http://jeffreysmithdesigner.com/pastels/" target="_blank">visit the site</a></p>
			</div>
						
		</section>
		<section class="next">
			<a href="menswear.php">
				<div class="portfolio__item__wrapper">
					<p>up next:</p>
					<h2>MN Menswear</h2>
					
				</div>
			</a>
		</section>







<?php include_once('inc/footer.php'); ?>