<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>fullPage.js One Page Scroll Site Plugin</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage plugin by Alvaro Trigo. Create fullscreen pages fast and simple. One page scroll jquery plugin like iPhone 5 website." />
	<meta name="keywords"  content="fullpage,jquery,alvaro,trigo,plugin,fullscren,screen,full,iphone5,apple" />
	<meta name="Resource-type" content="Document" />
	<link rel="stylesheet" type="text/css" href="../lib/fullpage/jquery.fullPage.css" />
	<!-- <link rel="stylesheet" type="text/css" href="../lib/fullpage/examples.css" /> -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="vendors/jquery.easings.min.js"></script>
	<script type="text/javascript" src="../lib/fullpage/jquery.fullPage.min.js"></script>
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
	<style>
	html,body { height: 100%; margin: 0; padding: 0; }
 
	  #container {
		min-height: 100%; 
		position: relative;
		background: #0202F7 url('images/gr.jpg') 0 70px repeat-x;
		}
	  #footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        float: right;
        height: 50px;
        background-color: silver;
        }
	</style>
	</head>
<body>
  <div id="fullpage">
    <div class="section active" id="section0">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/tnbG4iB_Rc4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen>
	</iframe>
	  <div id="footer">
        <ul>
          <li data-menuanchor="firstPage" class="active"><a href="#firstPage">First section</a></li>
          <li data-menuanchor="secondPage"><a href="#secondPage">Second section</a></li>
          <li data-menuanchor="3rdPage"><a href="#3rdPage">Third section</a></li>
        </ul>
      </div>
    </div>
    <div class="section" id="section1" id="footer">
      <div id="footer"align="right">
        <ul>
          <li data-menuanchor="firstPage" class="active"><a href="#firstPage">First section</a></li>
          <li data-menuanchor="secondPage"><a href="#secondPage">Second section</a></li>
          <li data-menuanchor="3rdPage"><a href="#3rdPage">Third section</a></li>
       </ul>
      </div>
    </div>
</body>
</html>