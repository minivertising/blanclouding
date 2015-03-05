<?
	include_once "./header.php";
?>
<!-------------------------- 네비게이션 -------------------------->
<ul id="myMenu2" class="navi">
    <li data-menuanchor="firstPage" class="active"><a href="#" onclick="open_event()">이벤트 참여</a></li>
    <li data-menuanchor="secondPage"><a href="#" onclick="open_gift()">선물 안내</a></li>
    <li data-menuanchor="thirdPage"><a href="#secondPage">BlanClouding이란?</a></li>
    <li data-menuanchor="fourthPage"><a href="#" id="video_control">영상보기</a></li>
</ul>
<!-------------------------- 네비게이션 -------------------------->
  <div id="fullpage">
<!-------------------------- 메인 1st DIV -------------------------->
    <div class="section active" id="section0">
      <iframe width="1280" height="720" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer">
      </iframe>
        <a href="#" onclick="sns_share('facebook')">페이스북 공유</a>
        <a href="#" onclick="sns_share('twitter')">트위터 공유</a>

    </div>
<!-------------------------- 메인 1st DIV -------------------------->
<!-------------------------- 메인 2nd DIV -------------------------->
    <div class="section" id="section1">
    </div>
<!-------------------------- 메인 2nd DIV -------------------------->

<!-------------------------- 이벤트 응모 DIV -------------------------->
      <div id="input_div" class="pop_input">
        <div class="header">
          <div class="btn_close"><a href="#" onclick="close_input()" style="cursor:pointer">닫기</a></div>
        </div>
        <div class="inner">
          <div class="content">
            <div class="member_info_block">
              <ul>
                <li class="clearfix">
                  <div class="label">이름</div>
                  <div class="input"><input type="text" name="mb_name" id="mb_name"></div>
                </li>
                <li class="clearfix">
                  <div class="label">전화번호</div>
                  <div class="input"><input type="text" name="mb_phone1" id="mb_phone1"> - <input type="text" name="mb_phone2" id="mb_phone2"> - <input type="text" name="mb_phone3" id="mb_phone3"></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <a href="#" onclick="open_look()">자세히보기</a><br />
        받으실매장
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
        <br />
        <input type="checkbox" name="privacy_agree" id="privacy_agree"><label for="privacy_agree">개인정보활용, 개인정보취급위탁동의, 광고성 정보 전송 동의</label><br />
        <a href="#" onclick="chk_input()">신청완료</a>
      </div>
<!-------------------------- 이벤트 응모 DIV -------------------------->
<!-------------------------- 선물 확인 DIV -------------------------->
      <div id="gift_div" class="pop_gift">
        추첨을 통해 1만분께 BLANCLOUDING선물 (10ml)과<br />
        클라우딩 제품 구매시 5,000원 할인 쿠폰 증정<br />
        <a href="#" onclick="close_gift()">확인</a>
      </div>
<!-------------------------- 선물 확인 DIV -------------------------->
<!-------------------------- 지도 DIV -------------------------->
      <div id="map_div" class="pop_main_map">
        <a href="#" onclick="close_map()">닫기</a>
        <div id="map_area" style="width:100%;height:90%;margin-top:5%"></div>
      </div>
<!-------------------------- 지도 DIV -------------------------->
<!-------------------------- 약관 DIV ----------------------->
      <div id="look_div" class="pop_agree">
<?
	include_once "./privacy_agree.php";
?>
        <a href="#" onclick="close_look()">닫기</a>
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
    }, 3000)

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
		});
	</script>
