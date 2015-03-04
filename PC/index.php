<?
	include_once "./header.php";
?>

  <div id="fullpage">
    <div class="section active" id="section0">
	<iframe width="1280" height="720" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer">
	</iframe>
	  <div id="footer">
        <a href="#" onclick="sns_share('facebook')">페이스북 공유</a>
        <a href="#" onclick="sns_share('twitter')">트위터 공유</a>
        <a href="#" onclick="open_event()">이벤트 참여</a>
        <a href="#" onclick="open_gift()">선물 안내</a>
        <a href="#secondPage">BlanClouding이란?</a>
        <a href="#3" id="video_control">영상보기</a>
      </div>
      <div id="input_div" style="position:absolute;background:red;height:200px;top:20%;left:30%;display:none">
        이름 : <input type="text" name="mb_name" id="mb_name"><br />
        전화번호 : <input type="text" name="mb_phone1" id="mb_phone1">-<input type="text" name="mb_phone2" id="mb_phone2">-<input type="text" name="mb_phone3" id="mb_phone3"><br />
        <a href="#">자세히보기</a><br />
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
        <a href="#" onclick="close_input()">닫기</a>
      </div>
      <div id="gift_div" style="position:absolute;background:green;height:200px;top:20%;left:30%;display:none">
        추첨을 통해 1만분께 BLANCLOUDING선물 (10ml)과<br />
        클라우딩 제품 구매시 5,000원 할인 쿠폰 증정<br />
        <a href="#" onclick="close_gift()">확인</a>
      </div>
      <div id="map_div" style="position:absolute;background:black;width:600px;height:500px;top:20%;left:30%;display:none">
        <a href="#" onclick="close_map()">닫기</a>
        <div id="map_area" style="width:100%;height:90%;margin-top:5%"></div>
      </div>
    </div>
    <div class="section" id="section1" id="footer">
      <div id="footer">
        <a href="#">선물 안내</a>
        <a href="#firstPage">이벤트보기</a>
        <a href="#">영상보기</a>
      </div>
    </div>
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


			$("#video_control").click(function(){
				controllable_player.seekTo(0);
				controllable_player.playVideo(); 
			});

			/*
			player = new YT.Player('ytplayer', {});

			$("#video_control").click(function(){
				if(player){
					player.playVideo();
				}
			});
			$("#pause").click(function(){
				 player.pauseVideo();
			}); 
			*/
		});
	</script>
