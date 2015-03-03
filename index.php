<?php

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>fullPage.js One Page Scroll Site Plugin</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage plugin by Alvaro Trigo. Create fullscreen pages fast and simple. One page scroll jquery plugin like iPhone 5 website." />
	<meta name="keywords"  content="fullpage,jquery,alvaro,trigo,plugin,fullscren,screen,full,iphone5,apple" />
	<meta name="Resource-type" content="Document" />
	<link rel="stylesheet" type="text/css" href="./css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="example3.css" />


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="vendors/jquery.easings.min.js"></script>
	<script type="text/javascript" src="./js/jquery.fullPage.min.js"></script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', '#ccddff'],
				anchors: ['firstPage', 'secondPage', '3rdPage', 'lastPage'],
				menu: '#menu',
				css3: true,
				scrollingSpeed: 1000
			});

			$('#showExamples').click(function(e){
				e.stopPropagation();
				e.preventDefault();
				$('#examplesList').toggle();
			});

			$('html').click(function(){
				$('#examplesList').hide();
			});
		});
	</script>
</head>
<body>
<div id="fullpage">

	<div class="section active" id="section0">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/tnbG4iB_Rc4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	<div class="section" id="section1">
	    
	</div>
</div>
<div id="infoMenu">
	<ul>
		<li><a href="https://github.com/alvarotrigo/fullPage.js/archive/master.zip">Download</a></li>
		<li>
			<a href="#" id="showExamples">Examples</a>
			<div id="examplesList">
				<div class="column">
					<h3>Navigation</h3>
					<ul>
					<li><a href="examples/scrollBar.html">Scroll Bar Enabled</a></li>
					<li><a href="examples/normalScroll.html">Normal scrolling</a></li>
					<li><a href="examples/continuous.html">Continuous vertical</a></li>
					<li><a href="examples/noAnchor.html">Without anchor links (same URL)</a></li>
					<li><a href="examples/navigationV.html">Vertical navigation dots</a></li>
					<li><a href="examples/navigationH.html">Horizontal navigation dots</a></li>
					</ul>
				</div>
				<div class="column">
					<h3>Design</h3>
					<ul>
						<li><a href="examples/backgrounds.html">Full backgrounds</a></li>
						<li><a href="examples/videoBackground.html">Full background videos</a></li>
						<li><a href="examples/gradientBackgrounds.html">Gradient backgrounds</a></li>
						<li><a href="examples/scrolling.html">Scrolling inside sections and slides</a></li>
						<li><a href="examples/fixedHeaders.html">Adding fixed header and footer</a></li>
						<li><a href="examples/oneSection.html">One single section</a></li>
					</ul>
				</div>
				<div class="column">
					<h3>Other</h3>
					<ul>
						<li><a href="examples/apple.html">Animations on scrolling</a></li>
						<li><a href="examples/methods.html">Functions and methods</a></li>
					</ul>
				</div>
			</div>

		</li>
		<li><a href="https://github.com/alvarotrigo/fullPage.js#fullpagejs">Documentation</a></li>
		<li><a href="http://alvarotrigo.com/#contact-page">Contact</a></li>
	</ul>
</div>
</body>
</html>