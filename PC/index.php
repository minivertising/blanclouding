<?
	include_once "./header.php";
?>
<ul id="myMenu" style="position:absolute;z-index:100000">
    <li data-menuanchor="firstPage" class="active"><a href="#firstPage" data-mfp-src="#input_div" class="popup-with-zoom-anim" onclick="open_event()">이벤트 참여</a></li>
    <li data-menuanchor="secondPage"><a href="#firstPage" onclick="open_gift()">선물 안내</a></li>
    <li data-menuanchor="thirdPage"><a href="#secondPage">BlanClouding이란?</a></li>
    <li data-menuanchor="fourthPage"><a href="#firstPage" id="video_control">영상보기</a></li>
</ul>
<!-------------------------- 네비게이션 -------------------------->
<div id="fullpage">
<!-------------------------- 메인 1st DIV -------------------------->
  <div class="section active" id="section0">
    <iframe width="1280" height="720" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
    <div class="cover_image" id="cover_image"><img src="./images/Desert_test.jpg"></div>
    <a href="#" onclick="sns_share('facebook')">페이스북 공유</a>
    <a href="#" onclick="sns_share('twitter')">트위터 공유</a>
  </div>
<!-------------------------- 메인 1st DIV -------------------------->
<!-------------------------- 메인 2nd DIV -------------------------->
  <div class="section" id="section1">
  </div>
<!-------------------------- 메인 2nd DIV -------------------------->

<!-------------------------- 이벤트 응모 DIV -------------------------->
  <div id="input_div" class="pop_input zoom-anim-dialog mfp-hide">
    <div class="header">
      <div class="btn_close"><a href="#" onclick="javascript:close_input()" style="cursor:pointer">닫기</a></div>
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
              <a href="#" onclick="show_map()">가까운 매장 찾기</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="check_block">
        <ul>
          <li class="clearfix">
            <div class="input"><input type="checkbox" name="privacy_agree" id="privacy_agree"><label for="privacy_agree">개인정보활용, 개인정보취급위탁동의, 광고성 정보 전송 동의</label></div>
            <div class="label"><a href="#" onclick="open_look()">자세히보기</a></div>
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
  <div id="gift_div" class="pop_gift">
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
  <div id="map_div" class="pop_main_map">
    <div class="header">
      <div class="btn_close"><a href="#" onclick="close_map()">닫기</a></div>
    </div>
    <div class="contents">
      <div id="map_area" class="map_area"></div>
    </div>

  </div>
<!-------------------------- 지도 DIV -------------------------->
<!-------------------------- 약관 DIV ----------------------->
  <div id="look_div" class="pop_agree">
    <div class="header">
      <div class="btn_close"><a href="#" onclick="close_look()">닫기</a></div>
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
    // 유튜브 반복 재생
    var controllable_player,start, 
    statechange = function(e){
    	controllable_player.playVideo(); 
    };
    function onYouTubeIframeAPIReady() {
		controllable_player = new YT.Player('ytplayer', {}); 
    }

    if(window.opera){
		addEventListener('load', onYouTubeIframeAPIReady, false);
    }
	setTimeout(function(){
    	if (typeof(controllable_player) == 'undefined'){
    		onYouTubeIframeAPIReady();
    	}
    }, 1000)

	$(document).ready(function() {
		$('#fullpage').fullpage({
			sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
			anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
			navigation: {
				'position': 'right',
				'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Pgae 4']
			},
			menu: '#myMenu',
			loopBottom: true,
			verticalCentered: true,
			css3: true,
			scrollingSpeed: 1000
		});


		$("#video_control").click(function(){
			controllable_player.seekTo(0);
			controllable_player.playVideo(); 
		});

		setTimeout("auto_play();",2000);

		// 체크박스 스타일 설정
		$('.pop_input input').on('ifChecked ifUnchecked', function(event){
			//alert(this.id);
		}).iCheck({
			checkboxClass: 'icheckbox_flat-red',
			increaseArea: '0%'
		});


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
