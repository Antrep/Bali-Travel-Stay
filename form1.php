
<?php
	session_start();
?>

<!DOCTYPE html>

<head>


  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>

		$(function () {
		  // Slideshow
		  console.log("hi")
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


<?php include('header.php'); ?>

	<section id="container">
		<div class="zerogrid">
			<div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content">
						<article>
							<div class="art-header">
								<img src="images/1.jpg"/>
							</div>
							<div class="art-content">
								<h1 class="entry-title">Inloggen</h1> 
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
								<form action="login/login.php" method="POST">
    							<input type="text" name="uid" placeholder="Gebruikersnaam"><br>
   								<input type="password" name="pwd" placeholder="Wachtwoord"><br>
    							<button type ="submit">Inloggen</button>
								</form>

								<?php
								if(isset($_SESSION['id'])) {
									echo "Ingelogd!";
								} else {
									echo "Niet Ingelogd!";
								}
								?>
								


							</div>
						</article>
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

