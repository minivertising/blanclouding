<?
	include_once "./header.php";
?>
<!--contents_wrap-->
<div class="contents_wrap">
<!--area1-->
  <div class="area1">
<!--video_area-->
    <div class="video_area">
<!--youtube_div-->
      <div class="youtube_div">
        <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
      </div>
<!--youtube_div-->
<!--cover_area-->
      <div class="cover_area">
      </div>
<!--cover_area-->
  <!--icon_area-->
    <div class="icon_area">
      <a href="http://www.thefaceshopclouding.com/?media=self"><img src="images/logo_blan.png" alt=""/></a>
    </div>
  <!--icon_area-->
  <!--icon_area-->
    <div class="icon_area2">
      <a href="http://www.thefaceshop.com/index.jsp"><img src="images/logo_tfs.png" alt=""/></a>
    </div>
  <!--icon_area-->
	<div class="block_logo">  
    </div>
<!--center_menu_area-->
      <div class="center_menu_area">
        <div class="title">
   	    	<img src="images/title_main.png" alt=""/>
        </div>
        <div class="btn_group">
          <!-- <a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim" onclick="open_event()"><img src="images/btn_gift.png" alt=""/></a> -->
          <!-- <a href="#" data-mfp-src="#gift_div" class="popup-with-zoom-anim" onclick="open_gift()"><img src="images/btn_gift.png" alt="" onmouseover="change_image('over','gift')" onmouseout="change_image('out','gift')" id="btn_gift"/></a> -->
		  <a href="#" class="view_event"><img src="images/btn_gift.png" alt="" onmouseover="change_image('over','gift')" onmouseout="change_image('out','gift')" id="btn_gift"/></a>
          <a href="#" class="view_product"><img src="images/btn_blan.png" alt="" onmouseover="change_image('over','blan')" onmouseout="change_image('out','blan')" id="btn_blan"/></a>
        </div>
      </div>
<!--center_menu_area-->
<!--sns_area-->
      <div class="sns_area">
        <a href="#"><img src="images/btn_pause.png" alt="" id="video_control" /></a>
        <a href="#" onclick="sns_share('facebook');return false;"><img src="images/btn_fb.png" alt=""/></a>
        <a href="#" onclick="sns_share('twitter');return false;"><img src="images/btn_tw.png" alt=""/></a>
      </div>
<!--sns_area-->
<!--scroll_navi_area-->
      <div class="scroll_navi_area">
	    <a href="#"><img src="images/arrow.png" alt=""/></a>
      </div>
      <div class="bg_cloud">
   	  	<img src="images/movie_bg.png" alt=""/>
      </div>
<!--scroll_navi_area-->
    </div>
<!--video_area-->
  </div>
<!--area1-->




<!--area2-->
<div class="area2_bg">
  <div class="area2">
    <div class="product_group">
      <div class="product_area">
      	<a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim" onclick="open_event()" style="background:none">신청하기</a>
      </div>
    </div>
  </div>
 </div>
<!--area2-->

<!--area3-->
<div class="area3_bg">
  <div class="area3">
    <div class="product_group">
      <div class="product_area">
        <img src="images/img_area_3.png" alt=""/>
      </div>
    </div>
  </div>
 </div>  
<!--area3-->

<!--footer-->
  <div class="footer">
    <img src="images/footer.png" width="979" height="140" alt=""/>
  </div>
<!--footer-->



<!--quickmenu-->
<div class="quickmenu">
  <a href="#"><img src="images/btn_top.png" width="45" height="45" alt=""/></a>
</div>
<!--quickmenu-->

</div>
<!--contents_wrap-->
<!-------------------------- 이벤트 응모 DIV -------------------------->
  <div id="input_div" class="popup_wrap zoom-anim-dialog mfp-hide" style="z-index:50000">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#" class="btn_close" onclick="javascript:close_input()"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
      <div class="block_content" style="background:white;">
        <div class="inner">
          <div class="title">
            <img src="images/popup/pop_input_title.png" />
          </div>
          <div class="input_block">
            <ul class="clearfix">
              <li class="t_name"><img src="images/popup/txt_name.png" alt=""/></li>
              <li class="input_txt"><input type="text" name="mb_name" id="mb_name" onblur="only_kor(this)"></li>
            </ul>
            <ul class="clearfix">
              <li class="t_name"><img src="images/popup/txt_phone.png" alt=""/></li>
              <li class="input_txt phone clearfix">
                <div style="width:79px;magin-left:2px">
                  <select id="mb_phone1" name="mb_phone1">
                    <option>010</option>
                    <option>011</option>
                    <option>016</option>
                    <option>017</option>
                    <option>018</option>
                    <option>019</option>
                  </select>
                </div>
                <div style="margin-left:4px;"><input type="tel" name="mb_phone2" id="mb_phone2" maxlength="4" onblur="only_num(this)"></div>
                <div><input type="tel" name="mb_phone3" id="mb_phone3" maxlength="4" onblur="only_num(this)"></div>
              </li>
            </ul>
          </div>
          <div class="input_block">
            <ul class="clearfix">
              <li class="t_name"><img src="images/popup/txt_store.png" alt=""/></li>
              <li class="input_txt store">
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

              <li class="input_txt store" id="sel_addr2">
                <select name="addr2" id="addr2" onchange="shop_change(this.value)">
                  <option value="">선택하세요</option>
                </select>
              </li>
            </ul>
            <ul class="clearfix">
              <li class="t_name"></li>
              <li class="input_txt store" id="sel_shop">
                <select name="shop" id="shop">
                  <option value="">선택하세요</option>
                </select>
              </li>
              <li>
                <a href="#map_div" id="search_shop" class="popup-with-zoom-anim" onclick="javascript:show_map();return false;"><img src="images/popup/btn_store.png" alt=""/></a>
              </li>
            </ul>
          </div>
          <div class="input_block input_check">
            <ul class="clearfix">
              <li class="in_check"><input type="checkbox" name="uses_agree" id="uses_agree"></li>
              <li class="in_check_label"><a href="#use_div" class="btn_detail popup-with-zoom-anim" onclick="open_use()"><img src="images/popup/btn_detail_01.png" alt=""/></a></li>
            </ul>
            <ul class="clearfix">
              <li class="in_check"><input type="checkbox" name="privacy_agree" id="privacy_agree"></li>
              <li class="in_check_label"><a href="#privacy_div" class="btn_detail popup-with-zoom-anim" onclick="open_privacy()"><img src="images/popup/btn_detail_02.png" alt=""/></a></li>
            </ul>
            <ul class="clearfix">
              <li class="in_check"><input type="checkbox" name="send_agree" id="send_agree"></li>
              <li class="in_check_label"><a href="#adver_div" class="btn_detail popup-with-zoom-anim" onclick="open_adver()"><img src="images/popup/btn_detail_03.png" alt=""/></a></li>
            </ul>
          </div>
          <div class="btn_block">
            <a href="#" onclick="javascript:chk_input('<?=$gubun?>');return false;"><img src="images/popup/btn_input_ok.png" alt=""/></a>
          </div>
        </div><!--inner-->
      </div>
    </div>
  </div>
<!-------------------------- 이벤트 응모 DIV -------------------------->
<!-------------------------- 선물 확인 DIV -------------------------->
  <div id="gift_div" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#" onclick="close_gift()" class="btn_close"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
      <div class="block_content product">
        <div class="inner">
          <img src="images/popup/img_product.png" alt=""/>
        </div><!--inner-->
      </div>
    </div>
  </div>
<!-------------------------- 선물 확인 DIV -------------------------->
<!-------------------------- 지도 DIV -------------------------->
  <div id="map_div" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#input_div" class="btn_close first-popup-link" onclick="javascript:close_look()"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
      <div id="map_area" class="map_area" style="height:440px;border:1px solid skyblue"></div>
    </div>
  </div>
<!-------------------------- 지도 DIV -------------------------->
<!--------------------------  개인정보 활용 약관 DIV ----------------------->
  <div id="use_div" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#input_div" class="btn_close first-popup-link" onclick="javascript:close_look()"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
<?
	include_once "./use_agree.php";
?>
    </div>
  </div>
<!--------------------------  개인정보 활용 약관 DIV ----------------------->
<!--------------------------  개인정보 취급위탁동의 약관 DIV ----------------------->
  <div id="privacy_div" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#input_div" class="btn_close first-popup-link" onclick="javascript:close_look()"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
<?
	include_once "./privacy_agree.php";
?>
    </div>
  </div>
<!--------------------------  개인정보 취급위탁동의 약관 DIV ----------------------->
<!--------------------------  광고성 정보 전송 동의 약관 DIV ----------------------->
  <div id="adver_div" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#input_div" class="btn_close first-popup-link" onclick="javascript:close_look()"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
<?
	include_once "./adver_agree.php";
?>
    </div>
  </div>
<!--------------------------  광고성 정보 전송 동의 약관 DIV ----------------------->

<!--------------------------  개인정보 입력을 해주세요 ALERT DIV ----------------------->
  <div id="input_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_alert">
      <div class="inner">
        <div class="block_close clearfix">
          <a href="#" data-mfp-src="#input_div" class="btn_close popup-with-zoom-anim"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content">
          <div class="title">
            <img src="images/popup/alert_txt_info.png" alt=""/>
          </div>
          <div class="btn_block">
            <a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim"><img src="images/popup/pop_btn_ok.png" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--------------------------  개인정보 입력을 해주세요 ALERT DIV ----------------------->

<!--------------------------  매장을 선택해주세요 ALERT DIV ----------------------->
  <div id="shop_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_alert">
      <div class="inner">
        <div class="block_close clearfix">
          <a href="#" data-mfp-src="#input_div" class="btn_close popup-with-zoom-anim"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content">
          <div class="title">
            <img src="images/popup/alert_txt_select_store.png" alt=""/>
          </div>
          <div class="btn_block">
            <a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim"><img src="images/popup/pop_btn_ok.png" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--------------------------  매장을 선택해주세요 ALERT DIV ----------------------->

<!--------------------------  정보 활용 동의를 해주세요 ALERT DIV ----------------------->
  <div id="agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_alert">
      <div class="inner">
        <div class="block_close clearfix">
          <a href="#" data-mfp-src="#input_div" class="btn_close popup-with-zoom-anim"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content">
          <div class="title">
            <img src="images/popup/alert_txt_agree.png" alt=""/>
          </div>
          <div class="btn_block">
            <a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim"><img src="images/popup/pop_btn_ok.png" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--------------------------  정보 활용 동의를 해주세요 ALERT DIV ----------------------->

<!--------------------------  참여완료 ALERT DIV ----------------------->
  <div id="ok_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_alert">
      <div class="inner">
        <div class="block_close clearfix">
          <a href="#" onclick="javascript:close_input()" class="btn_close popup-with-zoom-anim"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content thanks">
          <div class="title">
            <img src="images/popup/alert_txt_thanks.png" alt=""/>
          </div>
          <div class="btn_block">
            <a href="#" onclick="javascript:close_input()" class="popup-with-zoom-anim"><img src="images/popup/pop_btn_ok.png" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--------------------------  참여완료 ALERT DIV ----------------------->

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
			//$("#video_control").text('일시정지');images/btn_pause.png
			$("#video_control").attr('src','images/btn_pause.png');
			controllable_player.seekTo(0); controllable_player.playVideo();
		}
		else if (e.data === 1)
		{
			//controllable_player.pauseVideo();
			$(".cover_area").css("background","url('./images/movCover.png') repeat");
			//$("#video_control").text('일시정지');
			$("#video_control").attr('src','images/btn_pause.png');
		}
		else if (e.data === 2)
		{
			//controllable_player.playVideo();
			$("#video_control").attr('src','images/btn_play.png');
			//$("#video_control").text('재생');
		}
		else if (e.data === 5)
		{
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
		$(".cover_area").css("background","url('./images/movCover.png') repeat");

    }, 1000)


	$(window).resize(function(){
		var width = $(window).width();
		//var height = $(window).height();

		var youtube_height = (width / 16) * 9;
		$("#ytplayer").width(width);
		$("#ytplayer").height(youtube_height);
		$(".cover_area").width($("#ytplayer").width());
		$(".cover_area").height($("#ytplayer").height());

		var wHeight =$(window).height();

		if ('v'=='\v'){ // 8이하
			wHeight = 773;
		}else if (wHeight <= 780){
			wHeight = 780;
		}else if(wHeight > 1000){
			wHeight = 1000;
		}
		$('.area2').height(wHeight); // 제품
		$('.area3').height(wHeight); // 제품
		//$('.product_group').width(width); // 제품
		//$('.product_area').width(width); // 제품

	});

	$(document).ready(function() {
		//처음 화면 크기에 따라 영상및 커버 크기 변경
		var width = $(window).width();
		var youtube_width = width;
		$("#ytplayer").width(width);
		$(".cover_area").width($("#ytplayer").width());
		var youtube_height = (width / 16) * 9;
		$("#ytplayer").height(youtube_height);
		$(".cover_area").height($("#ytplayer").height());
		
		var wHeight =$(window).height();

		if ('v'=='\v'){ // 8이하
			wHeight = 773;
		}else if (wHeight <= 780){
			wHeight = 780;
		}else if(wHeight > 1000){
			wHeight = 1000;
		}
		$('.area2').height(wHeight); // 제품
		$('.area3').height(wHeight); // 제품
		//$('.product_group').width(width); // 제품
		//$('.product_area').width(width); // 제품

		$("#video_control").click(function(){
			var control_txt	= $("#video_control").attr('src');
			if (control_txt == "images/btn_pause.png"){
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
	    $( 'html, body' ).animate({ scrollTop: $("#ytplayer").height()},1500);
		  return false;
		} );

		$( '.view_event' ).click( function() {
	    $( 'html, body' ).animate({ scrollTop: $("#ytplayer").height()},1500);
		  return false;
		} );

		$( '.view_product' ).click( function() {
	    $( 'html, body' ).animate({ scrollTop: $("#ytplayer").height() + $(".area2_bg").height()},1500);
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
		$("#dk1-addr1").css("width","120px");
		$("#dk1-addr1").css("font-size","12px");
		$(".dk-option").css("float","none");
		$(".dk-option").css("width","120px");
		$(".dk-option").css("height","34px");
		$(".dk-select").css("width","120px");
		$(".dk-select").css("height","34px");
		$("#dk1-combobox").css("height","34px");
		$("#dk2-addr2").css("width","120px");
		$("#dk2-addr2").css("font-size","14px");
		$("#dk2-combobox").css("height","34px");
		$("#dk3-shop").css("width","120px");
		$("#dk3-shop").css("font-size","14px");
		$("#dk3-combobox").css("height","34px");

		setInterval(function(){
			$('.scroll_navi_area').animate({bottom:100},500).animate({bottom:110},500);
		},1000);

	});
	</script>
