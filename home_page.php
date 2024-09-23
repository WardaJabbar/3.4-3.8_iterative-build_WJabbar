<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Link to external CSS stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<!-- Link to AOS library for animations -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		
		<!-- Meta tags for charset and responsiveness -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Page title -->
		<title>Graeme Page</title>

		<!-- jQuery library -->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
		
		<!-- Slick carousel library for slider functionality -->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js'></script>
		
		<!-- Reset CSS to ensure consistency across browsers -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
		
		<!-- Slick carousel CSS for the main slider -->
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'>
		
		<!-- Link to google fonts to style my texts -->
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Magra:wght@400;700&family=Michroma&family=Monda:wght@400..700&display=swap');
			@import url('https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap');
			@import url('https://fonts.googleapis.com/css2?family=Poetsen+One&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap');
		</style>

	</head>


	<body>	
	<div class = "main_container">
		<!-- Slideshow container (main content) -->
		<div class="slideshow-container">

			<!-- Navbar and Header with the title "Graeme's Music" -->
			<header class="header">
					<!-- Page title -->
						<?php
						// Include the navigation bar for Graeme's specific user experience
						// Top navigation for Graeme
						require "nav-graeme.php" //'require' is 100% needed for the site to run 
						?>
						<?php
						// Include the admin navigation options if the user has admin privileges
						// Admin-specific navigation
						require "nav_admin.php" //'require' is 100% needed for the site to run 
						?>
			</header>
			
			<!-- Section 1: Background image display -->
			<div class="section1">
				<img src="Images/concert_image.jpg">
			</div>

			<!-- Section 2: View Songs Section with a Slick Slider -->
			<div class = "section2">
				<h1>View the songs</h1>
				<h2>Feel The Rhythm</h2>

				<!-- Song slider container -->
				<div class = "fit_slider">
					<div class="slider_main">
						
						<!-- Slider for main song images/content -->
						<div class="slider slider-for">
						</div>
						
						<!-- Slider navigation thumbnails -->
						<div class="slider slider-nav">
							<div>
								<h3><img src = "Images/neon-street-light.jpg"></h3>
							</div>
							<div>
								<h3><img src = "Images/singer_image.jpg"></h3>
							</div>
							<div>
								<h3><img src = "Images/disk_record.jpg"></h3>
							</div>
							<div>
								<h3><img src = "Images/headphones.jpg"></h3>
							</div>
							<div>
								<h3><img src = "Images/guy_view.jpg"></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Genre slider section -->
			<div class="slider-container-genre">
				
				<h1>Genres</h1>
				
				<div class="slider11">
					<!-- Individual genre slides -->
					<div class="slide12 activeclass">
						<div class="div11"><img src = "Images/Folk.jpg"></div>
					</div>
					<div class="slide12">
						<div class="div22"><img src = "Images/jazz.jpg"></div>
					</div>
					<div class="slide12">
						<div class="div33"><img src = "Images/pop_music.jpg"></div>
					</div>
				</div>
				
				<!-- Slider indicators (dots to navigate between genre slides) -->
				<div class="indicators">
					<span class="dot11 activeclass" data-slide="0"></span>
					<span class="dot11" data-slide="1"></span>
					<span class="dot11" data-slide="2"></span>
				</div>
			</div>

			<!-- Slick slider script code for the song section -->
			<script>
				// Initialize slick slider for main song display and navigation
				$('.slider-for').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: true,
					fade: true,
					asNavFor: '.slider-nav' });
				$('.slider-nav').slick({
					slidesToShow: 4,
					slidesToScroll: 1,
					asNavFor: '.slider-for',
					dots: true,
					focusOnSelect: true });
			</script>

			<!-- This is the javascript for the genre section slider element-->
			<script>
				document.addEventListener('DOMContentLoaded', () => {
					let currentIndex = 0; // We track the current active slide
					const slides = document.querySelectorAll('.slide12'); // All genre slides
					const dots = document.querySelectorAll('.dot11'); // These are the navigation dots

					// Function to display the correct slide and highlight the correct dot
					const showSlide = (index) => {
						slides.forEach((slide, i) => {
							// Remove active class from all slides and dots
							slide.classList.remove('activeclass');
							dots[i].classList.remove('activeclass');
							
							// Add active class to the current slide and dot
							if (i === index) {
								slide.classList.add('activeclass');
								dots[i].classList.add('activeclass');
							}
						});
					};
					
					// Event listeners to update slide when a dot is clicked
					dots.forEach((dot, index) => {
						dot.addEventListener('click', () => {
							currentIndex = index;
							showSlide(currentIndex);
						});
					});
					
					// Show the first slide on page load
					showSlide(currentIndex);
				});

			</script>
<script>
function burgermenu() {
  var x = document.getElementById("navbar11");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>
<div class="footer"><!-- Holds the foot notes -->
	<p>&copy; Copyright Warda Jabbar 2024</p></div>
		</div>
		</div>
	</body>
</html>


