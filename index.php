<!doctype html>
<html lang="en">
<head>
	<?php require_once('inc/head.php'); ?>
</head>
<body>
<div id="nav">
		<div class="wrapper">
			<ul class="mainNav">
				<li>
					<a href="#/home">
						<div id="animated_logo">
							<div class="an_one"></div>
							<div class="an_two"></div>
							<div class="an_three"></div>
							<div class="an_four"></div>
							<div class="an_five"></div>
						</div>
					</a>
				</li>
				<li><a href="#/call-for-papers">Call for Papers</a></li>
				<li><a href="#/register">Register</a></li>
				<li><a href="#/sponsorship">Sponsorship</a></li>
				<li><a href="#/organizer">Organizer</a></li>
				<div class="clear"></div>
			</ul>
			<div class="clear"></div>
		</div>
</div>

<div class="ajax-loader"></div>
<div id="cWrap">
	<?php include("page/home.php"); ?>
</div>
<div class="footer">
	<div class="wrapper">
		<h5 class="left">&copy; 2013 India HCI</h5>
		<div class="social right white">
			<h5 class="left" style="margin-right: 20px; color: rgba(255,255,255, .5); ">Site by <a href="http://ptamzz.com" target="_blank">Pritam Pebam</a></h5>
			<a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		<div class="clear"></div>
	</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41539916-1', 'indiahci2013.in');
  ga('send', 'pageview');

</script>

</body>
</html>
