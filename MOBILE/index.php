<?
	include_once "./header.php";
?>
<!--contents_wrap-->
<div class="contents_wrap">

<!--icon_area-->
    <div class="icon_area clearfix">
      <a href="#" class="cl_logo">
   	  	<img src="img/logo_blan.png" alt=""/>
      </a>
      <a href="#" class="fb_logo">
   	  	<img src="img/logo_fs.png" alt=""/>
      </a>
    </div>
<!--icon_area-->

    <div class="main_title">
      <img src="img/main_title.png" alt=""/>
    </div>
    
    <!-- <div class="navi_btn_block clearfix">
          <a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim" onclick="open_event()">이벤트 참여</a>
          <a href="#" data-mfp-src="#gift_div" class="popup-with-zoom-anim" onclick="open_gift()">선물안내</a>
    </div> -->


    <!--area1-->
      <div class="area1">
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


    <div class="bg_cloud">
        <!--sns_area-->
          <div class="sns_area clearfix">
            <a href="#" onclick="sns_share('facebook');return false;">
           		<img src="img/btn_fb.png" alt=""/>
            </a>
            <a  id="kakao-link-btn" href="#" onclick="sns_share('kakao');return false;">
           		<img src="img/btn_kt.png" alt=""/>
            </a>
            <a href="#" onclick="sns_share('twitter');return false;">
            	<img src="img/btn_tw.png" alt=""/>
            </a>
          </div>
        <!--sns_area-->
    
        <!--event-->
          <div class="event">
          	<div class="title_event">
	            <img src="img/title_event.png" alt=""/>
            </div>
            <div class="btn_gift">
              <a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim" onclick="open_event()"><img src="img/btn_gift.png" alt=""/></a>
            </div>
            <div class="txt_date">
       	    	<img src="img/txt_date.png" alt=""/> </div>
            </div>
        <!--event-->
    </div>
    
    <div class="bottom">
    	<img src="img/bg_bottom.png" />
    </div>




</div>
<!--contents_wrap-->
<!-------------------------- 이벤트 응모 DIV -------------------------->
  <div id="input_div" class="wrap_page popup zoom-anim-dialog mfp-hide" style="z-index:50000">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="javascript:close_input()"><img src="img/popup/btn_close.png" width="29"/></a>
    </div>
    <div class="content" style="background:white;">
      <div class="inner">
        <div class="title">
          <img src="img/popup/title_input.png" width="192" alt=""/>
        </div>
        <div class="input_block">
          <ul class="clearfix">
            <li class="t_name"><img src="img/popup/txt_label_name.png" width="32" alt=""/></li>
            <li class="input_txt"><input type="text" name="mb_name" id="mb_name" onkeydown="Check_Hangul(this)"></li>
          </ul>
          <ul class="clearfix">
            <li class="t_name"><img src="img/popup/txt_label_phone.png" width="48" alt=""/></li>
            <li class="input_txt phone">
              <div class="inner clearfix">
                <div>
                  <select id="mb_phone1" name="mb_phone1">
                    <option>010</option>
                    <option>011</option>
                    <option>016</option>
                    <option>017</option>
                    <option>018</option>
                    <option>019</option>
                  </select>
                </div>
                <div><input type="tel" id="mb_phone2" name="mb_phone2"></div>
                <div><input type="tel" id="mb_phone3" name="mb_phone3"></div>
              </div>
            </li>
          </ul>
        </div>
        <div class="input_block">
          <ul class="clearfix">
            <li class="t_name"><img src="img/popup/txt_label_store.png" width="63" alt=""/></li>
            <li class="input_txt address">
              <div class="inner clearfix">
                <div>
                  <select name="addr1" id="addr1" onchange="addr_change(this.value)">
                    <option value="">선택하세요</option>
<?
	// 주소 쿼리
	$query 		= "SELECT * FROM ".$_gl['addr_info_table']." WHERE addr_level='1'";
	$result 	= mysqli_query($my_db, $query);

	while($addr1_data = @mysqli_fetch_array($result))
	{
?>
                    <option value="<?=$addr1_data['addr_sido']?>"><?=$addr1_data['addr_sido']?></option>
<?
	}
?>
                  </select>
                </div>
                <div id="sel_addr2">
                  <select name="addr2" id="addr2" onchange="shop_change(this.value)">
                    <option value="">선택하세요</option>
                  </select>
                </div>
              </div>
            </li>
          </ul>
          <ul class="clearfix">
            <li class="t_name"></li>
            <li class="input_txt store" id="sel_shop">
              <select name="shop" id="shop">
                <option value="">선택하세요</option>
              </select>
            </li>
            <li class="btn">
              <a href="#map_div" id="search_shop" class="popup-with-zoom-anim" onclick="javascript:show_map();return false;"><img src="img/popup/btn_store.png" width="98" alt=""/></a>
            </li>
          </ul>
        </div>
        <div class="input_block input_check">
          <ul class="clearfix">
            <li class="in_check"><input type="checkbox"></li>
            <li class="in_check_label"><a href="#use_div" class="btn_detail popup-with-zoom-anim" onclick="open_use()"><img src="img/popup/btn_detail_01.png" width="164" alt=""/></a></li>
          </ul>
          <ul class="clearfix">
            <li class="in_check"><input type="checkbox"></li>
            <li class="in_check_label"><a href="#privacy_div" class="btn_detail popup-with-zoom-anim" onclick="open_privacy()"><img src="img/popup/btn_detail_02.png" width="164" alt=""/></a></li>
          </ul>
          <ul class="clearfix">
            <li class="in_check"><input type="checkbox"></li>
            <li class="in_check_label"><a href="#adver_div" class="btn_detail popup-with-zoom-anim" onclick="open_adver()"><img src="img/popup/btn_detail_03.png" width="164" alt=""/></a>
            </li>
          </ul>
        </div>
        <div class="btn_block">
          <a href="#" onclick="javascript:chk_input();return false;"><img src="img/popup/btn_ok.png" width="178" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
<!-------------------------- 이벤트 응모 DIV -------------------------->
<!-------------------------- 지도 DIV -------------------------->
  <div id="map_div"  class="wrap_page popup zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#input_div" class="btn_close first-popup-link" onclick="javascript:close_map()"><img src="img/popup/btn_close.png" width="29"/></a>
    </div>
    <div class="content" style="z-index:800000">
      <div id="map_area" class="map_area" style="height:440px;border:1px solid skyblue"></div>
    </div>
  </div><!--wrap_page popup-->
<!-------------------------- 지도 DIV -------------------------->
<!--------------------------  개인정보 활용 약관 DIV ----------------------->
  <div id="use_div"  class="wrap_page popup zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#input_div" class="btn_close first-popup-link" onclick="javascript:close_look()"><img src="img/popup/btn_close.png" width="29"/></a>
    </div>
    <div class="content">
      <div class="inner agree">
      texttexttexttexttext
      texttexttexttext
      texttexttext
      texttexttexttext
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
<!--------------------------  개인정보 활용 약관 DIV ----------------------->
<!--------------------------  개인정보 취급위탁동의 약관 DIV ----------------------->
  <div id="privacy_div" class="wrap_page popup zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#input_div" class="btn_close first-popup-link" onclick="javascript:close_look()"><img src="img/popup/btn_close.png" width="29"/></a>
    </div>
    <div class="content">
      <div class="inner agree">
      texttexttexttexttext
      texttexttexttext
      texttexttext
      texttexttexttext
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
<!--------------------------  개인정보 취급위탁동의 약관 DIV ----------------------->
<!--------------------------  광고성 정보 전송 동의 약관 DIV ----------------------->
  <div id="adver_div" class="wrap_page popup zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#input_div" class="btn_close first-popup-link" onclick="javascript:close_look()"><img src="img/popup/btn_close.png" width="29"/></a>
    </div>
    <div class="content">
      <div class="inner agree">
      texttexttexttexttext
      texttexttexttext
      texttexttext
      texttexttexttext
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
<!--------------------------  광고성 정보 전송 동의 약관 DIV ----------------------->

<!--------------------------  개인정보 입력을 해주세요 ALERT DIV ----------------------->
    <div id="input_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
    	<div class="p_alert">
        	<div class="inner">
                <div class="block_close clearfix">
                    <a href="#" class="btn_close"><img src="images/popup/pop_btn_close.png" /></a>
                </div>
                <div class="block_content">
                    <div class="title">
                        <img src="images/popup/alert_txt_info.png" alt=""/>
                    </div>
                    <div class="btn_block">
                        <a href="#"><img src="images/popup/pop_btn_ok.png" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
	</div>
<!--------------------------  개인정보 입력을 해주세요 ALERT DIV ----------------------->


</body>
</html>
  <script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=4079f466534bbd570c0fd254a4c2954e&libraries=services"></script>
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
	});

	$(document).ready(function() {
		//처음 화면 크기에 따라 영상및 커버 크기 변경
		var width = $(window).width();
		var height = $(window).height();
		var youtube_width = width;
		$("#ytplayer").width(width);
		$(".cover_area").width($("#ytplayer").width());
		var youtube_height = (width / 16) * 9;
		$("#ytplayer").height(youtube_height);
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
		$( '.quickmenu' ).click( function() {
	    $( 'html, body' ).animate( { scrollTop : 0 }, 800 );
		  return false;
		} );

		$( '.scroll_navi_area' ).click( function() {
	    $( 'html, body' ).animate({ scrollTop: $(document).height()},1500);
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
