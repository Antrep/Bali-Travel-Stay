<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>


	<meta charset="utf-8">
	<title>BTS - Bali Travel & Stay</title>

	


  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>

    
</head>
<body>
<div class="wrap-body">



<?php include('header.php'); 
?>

	<div class="zerogrid">
		<div class="wrap-header">
			<div class="row">
				<div class="col-1-3">
					<div class="wrap-col">
							
					</div>
				</div>
				
		
		<div class="slider">
			<!-- Slideshow -->
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<img src="images/1.jpg" alt="">
						<p class="caption">Welkom op Bali Travel & Stay!</p>
					</li>
					<li>
						<img src="images/2.jpg" alt="">
						<p class="caption">Boek spoedig een afspraak!</p>
					</li>
					<li>
						<img src="images/3.jpg" alt="">
						<p class="caption">Elke afspraak is een garantie voor succes!</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
<section id="container">
	<div class="wrap-container">
		<div class="zerogrid">
			<section class="content-box box-1">
				<div class="row"><!--Start Box-->
					<div class="col-1-4">
						<div class="wrap-col item">
							<h3 class="item-header"><a href="#">Reizen</a></h3>
							<div class="zoom-container">
								<img src="images/banner-img1.jpg" />
							</div>
							<div class="item-content">
								<span>LOREM IPSUM DOLOR SIT AMET,CONSEC TEETUER ADIPECPP IT.</span>
								<p>His primis omittam intellegat cu, voluptua appetere mea ad, eu harum oporteat vix. 
								Et vel quod legimus, graeci electram ocurreret at his. Vix at tation facete impetus omnesque ius harum antiopam.</p>
								<a class="button" href="single.html">More</a>
							</div>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col item">
							<h3 class="item-header"><a href="#">Informatie</a></h3>
							<div class="zoom-container">
								<img src="images/banner-img2.jpg" />
							</div>
							<div class="item-content">
								<span>LOREM IPSUM DOLOR SIT AMET,CONSEC TEETUER ADIPECPP IT.</span>
								<p>His primis omittam intellegat cu, voluptua appetere mea ad, eu harum oporteat vix. 
								Et vel quod legimus, graeci electram ocurreret at his. Vix at tation facete impetus omnesque ius harum antiopam.</p>
								<a class="button" href="single.html">More</a>
							</div>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col item">
							<h3 class="item-header"><a href="#">Vakanties</a></h3>
							<div class="zoom-container">
								<img src="images/banner-img3.jpg" />
							</div>
							<div class="item-content">
								<span>LOREM IPSUM DOLOR SIT AMET,CONSEC TEETUER ADIPECPP IT.</span>
								<p>His primis omittam intellegat cu, voluptua appetere mea ad, eu harum oporteat vix. 
								Et vel quod legimus, graeci electram ocurreret at his. Vix at tation facete impetus omnesque ius harum antiopam.</p>
								<a class="button" href="single.html">More</a>
							</div>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col item">
							<h3 class="item-header"><a href="#">INSIDE JOB</a></h3>
							<div class="zoom-container">
								<img src="images/banner-img4.jpg" />
							</div>
							<div class="item-content">
								<span>LOREM IPSUM DOLOR SIT AMET,CONSEC TEETUER ADIPECPP IT.</span>
								<p>His primis omittam intellegat cu, voluptua appetere mea ad, eu harum oporteat vix. 
								Et vel quod legimus, graeci electram ocurreret at his. Vix at tation facete impetus omnesque ius harum antiopam.</p>
								<a class="button" href="single.html">More</a>
							</div>
						</div>
					</div>
				</div>
			</section>

<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>

</div>
</body></html>
