<?php 
$pageTitle = "MN Menswear";
include_once('inc/header.php');
include_once('inc/nav.php'); ?>

	<div class="menswear content-wrapper">
<?php include_once('inc/logo-bar.php'); ?>
	<div class="header__wrapper">
		<section id="header__box" class="portfolio__item__wrapper"> 
				<article class="head__inner">
					<img src="img/menswear_logo.png" alt="">
				</article>
			</section>
	</div>
		<section id="top" class="portfolio__item">
			<div class="portfolio__item__wrapper">
				<article class="portfolio__item__text">
					<h3>A responsive website with an eye for men's fashion.</h3>
					<p>MN Menswear is an informational site taking an independent look at shopping for men's clothing in Minnesota. The site lists out local stores organized into categories based on how you'd wear the clothes.</p>  
				</article>
			</div>
			
		</section>
		<section class="portfolio__item">
			<div class="portfolio__item__wrapper">
				<article class="portfolio__item__content">
					<img src="img/menswear_animation.gif" alt="MN Menswear hover | Jeffrey Smith" class="show-for-medium-up white-on-white"><img src="img/menswear_hover.jpg" alt="pastel | Jeffrey Smith" class="show-for-small-only white-on-white">
					<p class="hover-text">The home page is organized into three different categories. I used jQuery to dynamically resize the category images to match the height of the thumbnail store grid.</p> 
					<p>CSS3 animations and jQuery were used to create the effect on hover. Mobile versions do not show feature the hover effect. Instead, the call to action button is shown when the page loads.</p>
				</article>
				<article class="portfolio__item__content">
					<img src="img/menswear_mobile.jpg" alt="MN Menswear mobile | Jeffrey Smith" class="white-on-white">
				</article>

			</div>
			
						
		</section>


		<section class="portfolio__item switch">
			<div class="portfolio__item__wrapper">

				<img src="img/menswear_nav.jpg" alt="MN Menswear | navigation">
				<article class="portfolio__item__text">
				<p class="hover-text">The website blends Libre Baskerville, a beautiful serif, and Varela Round, a san-serif font from Google Fonts. MN Menswear use of custom icons embedded as SVGs.</p></article>
			</div>				
		</section>


		<section class="portfolio__item">
			
			
			<div class="color_wrapper">
			<h3>The Result</h3>	
			
			</div>
			<div class="portfolio__item__wrapper">
				<blockquote>
					<p>For the final version of the website, I  customized the Twitter Bootstrap Framework.</p><p>I used PHP to reuse common page elements and to organize the pages into a flat folder structure.</p>
						
				</blockquote>
			</div>	
				<img src="img/menswear_responsive.jpg" alt="eclipse | Jeffrey Smith" class="full-width">
			
			<div class="portfolio__item__wrapper">
				<p class="portfolio__item__button"><a href="http://jeffreysmithdesigner.com/menswear/" target="_blank">visit the site</a></p>
			</div>
						
		</section>
		<!-- <section class="next">
			<a href="menswear.php">
				<div class="portfolio__item__wrapper">
					<p>up next:</p>
					<h2>MN Menswear</h2>
					
				</div>
			</a>
		</section>
 -->
<?php include_once('inc/footer.php'); ?>