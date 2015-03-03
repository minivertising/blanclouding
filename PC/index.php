<?
	include_once "./header.php";
?>
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

  <div id="fullpage">
    <div class="section active" id="section0">
	<iframe width="1280" height="720" src="<?=$_gl['youtube_url']?>" frameborder="0" allowfullscreen>
	</iframe>
	  <div id="footer">
        <a href="#" onclick="sns_share('facebook')">페이스북 공유</a>
        <a href="#" onclick="sns_share('twitter')">트위터 공유</a>
        <a href="#" onclick="open_event()">이벤트 참여</a>
        <a href="#firstPage">First section</a>
        <a href="#secondPage">Second section</a>
        <a href="#3rdPage">Third section</a>
      </div>
    </div>
    <div class="section" id="section1" id="footer">
	  <div id="footer">
        <a href="#firstPage">First section</a>
        <a href="#secondPage">Second section</a>
        <a href="#3rdPage">Third section</a>
      </div>
    </div>
</body>
</html>