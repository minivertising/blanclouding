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
        <a href="#">로고 부분</a>
      </div>
<!--icon_area-->
<!--center_menu_area-->
      <div class="center_menu_area">
        <div>
        더 페이스샵 블랑클라우딩
        </div>
        <div class="btn_group">
          <a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim" onclick="open_event()">이벤트 참여</a>
          <a href="#" data-mfp-src="#gift_div" class="popup-with-zoom-anim" onclick="open_gift()">선물안내</a>
        </div>
      </div>
<!--center_menu_area-->
<!--sns_area-->
      <div class="sns_area">
        <a href="#" id="video_control">일시정지</a>
        <a href="#" onclick="sns_share('facebook');return false;">페이스북 공유</a>
        <a href="#" onclick="sns_share('twitter');return false;">트위터 공유</a>
      </div>
<!--sns_area-->
<!--scroll_navi_area-->
      <div class="scroll_navi_area">
	    <a href="#">하단 이동</a>
      </div>
<!--scroll_navi_area-->
    </div>
<!--video_area-->
  </div>
<!--area1-->
<!--area2-->
  <div class="area2">
  블랑클라우드 이벤트 소개 및 제품 소개 내용
  </div>
<!--area2-->
<!--quickmenu-->
<div class="quickmenu">
  <a href="#">TOP</a>
</div>
<!--quickmenu-->

</div>
<!--contents_wrap-->
<!-------------------------- 이벤트 응모 DIV -------------------------->
  <div id="input_div" class="pop_input zoom-anim-dialog mfp-hide">
    <div class="header">
      <div class="btn_close"><a href="#" onclick="javascript:close_input()">닫기</a></div>
    </div>
    <div class="contents">
      <div class="member_info_block">
        <ul>
          <li class="clearfix">
            <div class="label">이름</div>
            <div class="input"><input type="text" name="mb_name" id="mb_name"></div>
          </li>
          <li class="clearfix">
            <div class="label">전화번호</div>
            <div class="input">
              <select name="mb_phone1" id="mb_phone1">
                <option value="010">010</option>
                <option value="011">011</option>
                <option value="016">016</option>
                <option value="017">017</option>
                <option value="018">018</option>
                <option value="019">019</option>
              </select> - 
              <input type="text" name="mb_phone2" id="mb_phone2" onkeyup="only_num(this)" maxlength="4"> - 
              <input type="text" name="mb_phone3" id="mb_phone3" onkeyup="only_num(this)" maxlength="4">
            </div>
          </li>
          <li>
            <div class="label">받으실매장</div>
            <div class="input">
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
              <select name="addr2" id="addr2" onchange="shop_change(this.value)">
                <option value="">선택하세요</option>
              </select>
              <select name="shop" id="shop">
                <option value="">선택하세요</option>
              </select>
              <a href="#map_div" class="popup-with-zoom-anim" onclick="show_map()">가까운 매장 찾기</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="check_block">
        <ul>
          <li class="clearfix">
            <div class="input"><input type="checkbox" name="privacy_agree" id="privacy_agree"><label for="privacy_agree">개인정보활용, 개인정보취급위탁동의, 광고성 정보 전송 동의</label></div>
            <div class="label"><a href="#look_div" class="popup-with-zoom-anim" onclick="open_look()">자세히보기</a></div>
          </li>
        </ul>
      </div>
      <div class="btn_block">
        <a href="#" onclick="chk_input()">신청완료</a>
        <a href="#" onclick="close_input()">닫기</a>
      </div>
    </div>
  </div>
<!-------------------------- 이벤트 응모 DIV -------------------------->
<!-------------------------- 선물 확인 DIV -------------------------->
  <div id="gift_div" class="pop_gift zoom-anim-dialog mfp-hide">
    <div class="header">
      <div class="btn_close"><a href="#" onclick="close_gift()">닫기</a></div>
    </div>
    <div class="contents">
      <div class="content_block">
      추첨을 통해 1만분께 BLANCLOUDING선물 (10ml)과<br />
      클라우딩 제품 구매시 5,000원 할인 쿠폰 증정<br />
      </div>
      <div class="btn_block">
        <a href="#" onclick="close_gift()">확인</a>
      </div>
    </div>
  </div>
<!-------------------------- 선물 확인 DIV -------------------------->
<!-------------------------- 지도 DIV -------------------------->
  <div id="map_div" class="pop_main_map zoom-anim-dialog mfp-hide">
    <div class="header">
      <div class="btn_close"><a href="#input_div" class="first-popup-link" onclick="close_map()">닫기</a></div>
    </div>
    <div class="contents">
      <div id="map_area" class="map_area"></div>
    </div>

  </div>
<!-------------------------- 지도 DIV -------------------------->
<!-------------------------- 약관 DIV ----------------------->
  <div id="look_div" class="pop_agree zoom-anim-dialog mfp-hide">
    <div class="header">
      <div class="btn_close"><a href="#input_div" class="first-popup-link" onclick="javascript:close_look()">닫기</a></div>
    </div>
<?
	include_once "./privacy_agree.php";
?>
  </div>
<!-------------------------- 약관 DIV ----------------------->

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
		$('.pop_input input').on('ifChecked ifUnchecked', function(event){
			//alert(this.id);
		}).iCheck({
			checkboxClass: 'icheckbox_flat-red',
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
		
	});
	</script>
