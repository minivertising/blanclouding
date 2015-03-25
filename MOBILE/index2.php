<?
	include_once "./header.php";
?>
<!--contents_wrap-->
<div class="contents_wrap">

<div class="block_top">
    <!--icon_area-->
        <div class="icon_area clearfix">
          <a href="http://www.thefaceshopclouding.co.kr/MOBILE/index.php" class="cl_logo" target="_blank">
            <img src="img/logo_blan.png" alt=""/>
          </a>
          <a href="http://www.thefaceshop.com/m/" class="fb_logo" target="_blank">
            <img src="img/logo_fs.png" alt=""/>
          </a>
        </div>
    <!--icon_area-->
    
        <div class="main_title">
          <img src="img/main_title.png" alt=""/>
        </div>
</div>    



    <!--area1-->
      <div class="area1" style="margin-bottom:-1%;">
    <!--video_area-->
        <div class="video_area">
    <!--youtube_div-->
          <div class="youtube_div">
            <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
          </div>
    <!--youtube_div-->
        </div>
    <!--video_area-->
      </div>
    <!--area1-->
  <div class="navi_btn_block clearfix">
        <a href="#" class="view_event"><img src="img/btn_movie.png" alt=""/></a>
        <a href="#" class="view_product"><img src="img/btn_product.png" alt=""/></a>
  </div>

    <!--sns_area-->
      <div class="sns_area clearfix">
        <a href="#" onclick="fb_share('facebook');return false;">
            <img src="img/btn_fb.png" alt=""/>
        </a>
        <span>
            <img src="img/bar.png" alt=""/>
        </span>
        <a  id="kakao-link-btn" href="#" onclick="sns_share('kakao');">
            <img src="img/btn_kt.png" alt=""/>
        </a>
        <span>
            <img src="img/bar.png" alt=""/>
        </span>
        <a href="#" onclick="sns_share('twitter');return false;">
            <img src="img/btn_tw.png" alt=""/>
        </a>
      </div>
    <!--sns_area-->

	<div class="bg_thumbs">
    	<div class="title">
   	      <img src="img/bg_movie_title.png" alt=""/>
        </div>
        <div class="first one_thumbs clearfix">
        	<div><a href="#" data-mfp-src="#movie_div1" class="left popup-with-zoom-anim" style="outline: none;"><img src="img/thumb_1_open.png" alt=""/></a></div>
            <div><a href="#" onclick="alert('곧 공개됩니다.');return false;"><img src="img/thumb_2_close.png" alt=""/></a></div>
        </div>
        <div class="one_thumbs clearfix">
        	<div><a href="#" onclick="alert('곧 공개됩니다.');return false;" class="left"><img src="img/thumb_3_close.png" alt=""/></a></div>
            <div><a href="#" onclick="alert('곧 공개됩니다.');return false;"><img src="img/thumb_4_close.png" alt=""/></a></div>
        </div>
    </div>
    <div class="bottom">
    <img src="img/bg_bottom.png" />
    </div>
    <div class="bottom" style="margin-top:-1%;">
	    <a href="#"><img src="img/btn_buy.png" /></a>
    </div>      
    <div class="bottom" style="margin-top:-1%;">
    <img src="img/bottom.png" />
    </div>    

    <div class="bg_movie popup_wrap zoom-anim-dialog mfp-hide" id="movie_div1">
      <div class="block_close clearfix" style="width:100%">
        <a href="#" class="btn_close" onclick="javascript:$.magnificPopup.close();"><img src="img/popup/btn_close.png" width="29"/></a>
      </div>
      <!--event-->
      <div class="movie_area" style="width:98%">
        <div class="movie_area1">
          <div>
            <iframe allowfullscreen="1" src="<?=$_gl['youtube_url1']?>" frameborder="0" id="ytplayer1" class="ytplayer"></iframe>
          </div>
          <div class="block_more_movie clearfix">
            <span class="txt">
              <img src="img/txt_movie_01.png" alt=""/>
            </span>
            <a href="#" onclick="movie_share('fb','1');return false;"><img src="img/btn_fb.png" alt=""/></a>
            <span>
              <img src="img/bar.png" alt=""/>
            </span>
            <a href="#" onclick="movie_share('tw','1');return false;"><img src="img/btn_tw.png" alt=""/></a>
            <span>
              <img src="img/bar.png" alt=""/>
            </span>
            <a href="javascript:movie_share('kt','1')" class="kt_movie_share"><img src="img/btn_kt.png" alt=""/></a>
          </div><!--block_more_movie-->
        </div>
      </div>
      <!--event-->
    </div>


</body>
</html>
	<script type="text/javascript">

	// quick menu
	var quickTop;
	$(window).scroll(function() {
		quickTop = ($(window).height()-$('.quickmenu').height()) /2;
		$('.quickmenu').stop().animate({top:$(window).scrollTop()+quickTop},400,'easeOutExpo');
		
	});

    // 유튜브 반복 재생
    var controllable_player,start, 
    statechange = function(e){
		if (e.data === 0)
		{
			$("#video_control").text('일시정지');
			controllable_player.seekTo(0); controllable_player.playVideo();
		}
		else if (e.data === 1)
		{
			//controllable_player.pauseVideo();
			$("#video_control").text('일시정지');
		}
		else if (e.data === 2)
		{
			//controllable_player.playVideo();
			$("#video_control").text('재생');
		}
		else if (e.data === 3)
		{
			//alert('4444');
		}
    	//controllable_player.playVideo(); 
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


	$(window).resize(function(){
		var width = $(window).width();
		//var height = $(window).height();

		var youtube_height = (width / 16) * 9;
		$("#ytplayer").width(width);
		$("#ytplayer").height(youtube_height);
		$("#ytplayer1").width(width);
		$("#ytplayer1").height(youtube_height);
		$("#ytplayer2").width(width);
		$("#ytplayer2").height(youtube_height);
		$("#ytplayer3").width(width);
		$("#ytplayer3").height(youtube_height);
		$("#ytplayer4").width(width);
		$("#ytplayer4").height(youtube_height);
	});

	$(document).ready(function() {
		//처음 화면 크기에 따라 영상및 커버 크기 변경
		var width = $(window).width();
		var height = $(window).height();
		var youtube_width = width;
		$("#ytplayer").width(width);
		$("#ytplayer1").width(width);
		$("#ytplayer2").width(width);
		$("#ytplayer3").width(width);
		$("#ytplayer4").width(width);
		$(".cover_area").width($("#ytplayer").width());
		var youtube_height = (width / 16) * 9;
		$("#ytplayer").height(youtube_height);
		$("#ytplayer1").height(youtube_height);
		$("#ytplayer2").height(youtube_height);
		$("#ytplayer3").height(youtube_height);
		$("#ytplayer4").height(youtube_height);
		$(".cover_area").height($("#ytplayer").height());

		$("#video_control").click(function(){
			var control_txt	= $("#video_control").text();
			if (control_txt == "일시정지"){
				controllable_player.pauseVideo();
				return false;
			}else{
				controllable_player.playVideo(); 
				return false;
			}
		});

		var move_gift = ($(".block_top").height() +$(".navi_btn_block").height() +$("#ytplayer").height() + $(".sns_area").height()) * 1.1;
		var move_product = move_gift + $(".bg_cloud").height() * 1.1;
		$( '.view_event' ).click( function() {
			$( 'html, body' ).animate({ scrollTop: move_gift},500);
			return false;
		} );

		$( '.view_product' ).click( function() {
			$( 'html, body' ).animate({ scrollTop: move_product},500);
			return false;
		} );


		// 퀵메뉴 기본 위치
		var quick_height	= $(window).height()/2;
		$('.quickmenu').css("top",quick_height);
/*
		setTimeout("auto_play();",2000);
*/
		// 체크박스 스타일 설정
		$('.popup_wrap input').on('ifChecked ifUnchecked', function(event){
			//alert(this.id);
		}).iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			increaseArea: '0%'
		});

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

		// 셀렉트박스 스타일
		/*
		$( "#mb_phone1" ).dropkick({
			mobile: true
		});

		$( "#addr1" ).dropkick({
			mobile: true
		});
		
		$( "#addr2" ).dropkick({
			mobile: true
		});


		$( "#shop" ).dropkick({
			mobile: true
		});
		
		$("#dk0-combobox").css("width","79px");
		$("ul[id*=dk0-]").css("width","79px");
		$("li[id*=dk0-]").css("width","60px");
		$("#dk1-combobox").css("width","120px");
		$("ul[id*=dk1-]").css("width","120px");
		$("li[id*=dk1-]").css("width","100px");
		$("#dk2-combobox").css("width","120px");
		$("ul[id*=dk2-]").css("width","120px");
		$("li[id*=dk2-]").css("width","100px");
		$("#dk3-combobox").css("width","120px");
		$("ul[id*=dk3-]").css("width","120px");
		$("li[id*=dk3-]").css("width","100px");
		*/
/*
		$("#dk1-addr1").css("width","120px");
		$("#dk1-addr1").css("font-size","14px");
		$("#dk1-combobox").css("height","34px");
		$("#dk2-addr2").css("width","120px");
		$("#dk2-addr2").css("font-size","14px");
		$("#dk2-combobox").css("height","34px");
		$("#dk3-shop").css("width","120px");
		$("#dk3-shop").css("font-size","14px");
		$("#dk3-combobox").css("height","34px");
*/
	});
	</script>
