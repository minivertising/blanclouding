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
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
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
		</div>
	<div class="section" id="section1">
	    
	</div>
	<div class="section" id="section2">
	
	</div>
	<div class="section" id="section3">
	
	</div>
</div>

</body>
</html>