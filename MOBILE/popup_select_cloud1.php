<?
	include_once "./header.php";

	if ($_REQUEST['reload'] != "Y")
	{
?>
<script type="text/javascript">
location.href="popup_select_cloud1.php?reload=Y";
</script>
<?
	}
?>
<div class="wrap_page popup select_cloud_1">
  <div class="block_close clearfix">
    <a href="#event_confirm" class="btn_close popup-with-zoom-anim"><img src="img/popup/btn_close.png" /></a>
  </div>
  <div class="content">
    <div class="inner">
      <div class="title">
        <img src="img/popup/title_select_cloud.png" alt=""/>
      </div>
      <div class="block_movie">
        <iframe allowfullscreen="1" src="<?=$_gl['youtube_second']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
      </div>
      <div class="btn_block" id="fake_btn">
        <a href="#"><img src="img/popup/btn_select_cloud.png" alt=""/></a>
      </div>
      <div class="btn_block" id="real_btn" style="display:none">
        <a href="popup_select_cloud2.php"><img src="img/popup/btn_select_cloud.png" alt=""/></a>
      </div>
      <div class="txt_detail">
        <img src="img/popup/txt_select_cloud.png" alt=""/>
      </div>
    </div><!--inner-->
  </div>
</div>

<!--종료시 팝업-->
<div id="event_confirm" class="wrap_page popup popup_out zoom-anim-dialog mfp-hide">
  <div class="block_close clearfix">
    <a href="#" class="btn_close" onclick="close_layer()"><img src="img/popup/btn_close.png"/></a>
  </div>
  <div class="content">
    <div class="inner alert">
      <div class="title">
        <img src="img/popup/title_out.png" alt=""/>
      </div>
      <div class="btn_block clearfix">
<?
	if ($iPhoneYN == "Y")
	{
?>
        <a href="index3.php" class="first"><img src="img/popup/btn_out.png" alt=""/></a>
<?
	}else{
?>
        <a href="index3.php" class="first" target="_blank"><img src="img/popup/btn_out.png" alt=""/></a>
<?
	}
?>
        <a href="#" onclick="close_layer()"><img src="img/popup/btn_return.png" alt=""/></a>
      </div>
    </div><!--inner-->
  </div>
</div><!--wrap_page popup-->
<!--종료시 팝업-->

</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		//처음 화면 크기에 따라 영상및 커버 크기 변경
		var width = $(window).width();
		var youtube_width = width;
		var youtube_height = (width / 16) * 9;
		$("#ytplayer").width(width);
		$("#ytplayer").height(youtube_height);

		// 유튜브 반복 재생
		var controllable_player,start, 
		statechange = function(e){
			if (e.data === 0) // 종료됨
			{
				$("#fake_btn").hide();
				$("#real_btn").show();
				//$("#btn_sel_cloud").attr("data-mfp-src","#share_present");
				//$("#btn_sel_cloud").attr("class","popup-with-zoom-anim");
				//$("#btn_event_wait").hide();
				//$("#btn_event").show();
			}
		};
		function onYouTubeIframeAPIReady() {
			controllable_player = new YT.Player('ytplayer', {events: {'onStateChange': statechange}}); 
		}

		if(window.opera){
			addEventListener('load', onYouTubeIframeAPIReady, false);
		}

		setTimeout(function(){
			if (typeof(controllable_player) == 'undefined'){
				onYouTubeIframeAPIReady();
			}
		}, 1000)

		// 팝업 jQuery 스타일
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: true,
			fixedBgPos: true,
			overflowY: 'hidden',
			closeBtnInside: true,
			//preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in',
			showCloseBtn : false,
			callbacks: {
				close: function() {
					/*$("#mb_name").val("");
					$("#mb_phone").val("");
					$('input').iCheck('uncheck');
					$("#postcode1").val("");
					$("#postcode2").val("");
					$("#addr1").val("");
					$("#addr2").val("");
					$("#post_div").hide();*/
				}
			}
		});

		$('.first-popup-link').magnificPopup({
			closeBtnInside:true
		});

		var magnificPopup = $.magnificPopup.instance;

	});

	function close_layer()
	{
		$.magnificPopup.close();
	}

</script>