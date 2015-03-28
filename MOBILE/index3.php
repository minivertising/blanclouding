<?
	include_once "./header2.php";
?>
<!--contents_wrap-->
<input type="hidden" name="chk_gift" id="chk_gift">
<div>
<!--area1-->
  <div>
    <div>
      <a href="#">로고 부분</a>
      <a href="#">우측상단로고</a>
    </div>
    <div>
      <a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim" style="background:none;outline: none;" onclick="start_api();">영상시청하기</a>
    </div>
  </div>
</div>

<!----------------------------------------영상시청하기 DIV------------------------------------------>
  <div id="input_div" class="popup_wrap zoom-anim-dialog mfp-hide" style="background:white; width:400px">
    <div style="width:100%;height:20px">
      <a href="#" onclick="$.magnificPopup.close();" style="float:right">닫기</a>
    </div>
    <div>
      <iframe allowfullscreen="1" src="<?=$_gl['youtube_second']?>" frameborder="0" id="ytplayer" class="ytplayer">
       </iframe>
    </div>
    <div id="btn_event" style="display:none;">
      <a href="#" data-mfp-src="#share_present" class="popup-with-zoom-anim" style="outline: none;">영상공유하고 구름선택하기</a>
    </div>
    <div id="btn_event_wait">
      <a href="#" style="outline: none;">영상을 다 보시면 이벤트에 참여하실 수 있습니다.</a>
    </div>
  </div>
  <!----------------------------------------영상시청하기 DIV------------------------------------------>


<!----------------------------------------쉐어 후 사은품 선택하기 DIV ---------------------------------->
  <div id="share_present" class="popup_wrap zoom-anim-dialog mfp-hide" style="background:white; width:400px">
    <div style="width:100%;height:20px">
      <a href="#" onclick="chk_share()" style="float:right">닫기</a>
    </div>
    <div>
      <label for="sel1">스위스</label><input type="radio" name="sel_present" id="sel1"  value="swiss" onclick="ins_selval(this.value)">
      <label for="sel2">크림</label><input type="radio" name="sel_present" id="sel2" value="cream" onclick="ins_selval(this.value)">
      <label for="sel3">제주도</label><input type="radio" name="sel_present" id="sel3" value="jeju" onclick="ins_selval(this.value)">
    </div>
    <div>
       <a href="#" onclick="sns_share('twitter');">트윗</a>
       <a href="#" onclick="sns_share('facebook');return false;">페북</a>
       <a href="#" onclick="sns_share('story');return false;">카스</a>
    </div>
    <div>
     <a href="#" onclick="chk_radio()">선택완료</a>
    <div>
  </div>
<!----------------------------------------쉐어 후 사은품 선택하기 DIV ---------------------------------->


<!---------------------------------------개인정보 입력 DIV ---------------------------------->
    <div id="input_info" class="popup_wrap zoom-anim-dialog mfp-hide" style="background:white; width:400px">
    <div style="width:100%;height:20px">
      <a href="#" onclick="$.magnificPopup.close();" style="float:right">닫기</a>
    </div>
      <ul>
        <li>이름 : 
          <input type="text" name="mb_name" id="mb_name">
        </li>
      </ul>
      <ul>
        <li>전화번호 : 
          <select id="mb_phone1" name="mb_phone1" style="width:50px;height:20px;">
            <option>010</option>
            <option>011</option>
            <option>016</option>
            <option>017</option>
            <option>018</option>
            <option>019</option>
          </select> -
          <input type="text" size="6"name="mb_phone2" id="mb_phone2" maxlength="4" > -
          <input type="text" size="6"name="mb_phone3" id="mb_phone3" maxlength="4" >
        </li>
      </ul>
      <ul>
        <li>주소 : 
          <input type="text" name="mb_addr" id="mb_addr">
        </li>
      </ul>
          <div>
            <ul>
              <li><input type="checkbox" name="use_agree" id="use_agree"></li>
              <li><a href="#use_div" class="popup-with-zoom-anim" onclick="open_use()">개인정보 수집 · 이용에 대한 동의</a></li>
            </ul>
            <ul>
              <li><input type="checkbox" name="privacy_agree" id="privacy_agree"></li>
              <li><a href="#privacy_div" class="popup-with-zoom-anim" onclick="open_privacy()">개인정보의 취급 위탁 동의</a></li>
            </ul>
            <ul>
              <li><input type="checkbox" name="adver_agree" id="adver_agree"></li>
              <li><a href="#adver_div" class="popup-with-zoom-anim" onclick="open_adver()">광고성 정보 전송 동의</a></li>
            </ul>
          </div>
          <div>
            <a href="#" style="background:none;outline: none;" onclick="chk_input()">입력완료</a>
          </div>
        </div><!--inner-->
    </div>
	</div>

<!--------------------------  개인정보 활용 약관 DIV ----------------------->
  <div id="use_div" class="popup_wrap zoom-anim-dialog mfp-hide">
        <a href="#input_info" class="btn_close first-popup-link" onclick="javascript:close_look()">닫기</a>
<?
	include_once "./use_agree.php";
?>
  </div>
<!--------------------------  개인정보 활용 약관 DIV ----------------------->
<!--------------------------  개인정보 취급위탁동의 약관 DIV ----------------------->
  <div id="privacy_div" class="popup_wrap zoom-anim-dialog mfp-hide">
        <a href="#input_info" class="btn_close first-popup-link" onclick="javascript:close_look()">닫기</a>
<?
	include_once "./privacy_agree.php";
?>
  </div>
<!--------------------------  개인정보 취급위탁동의 약관 DIV ----------------------->
<!--------------------------  광고성 정보 전송 동의 약관 DIV ----------------------->
  <div id="adver_div" class="popup_wrap zoom-anim-dialog mfp-hide">
        <a href="#input_info" class="btn_close first-popup-link" onclick="javascript:close_look()">닫기</a>
<?
	include_once "./adver_agree.php";
?>
  </div>
<!--------------------------  광고성 정보 전송 동의 약관 DIV ----------------------->
<!----------------------------------------개인정보입력  DIV ---------------------------------->




<!-------------------------------------참여완료 DIV ------------------------------------------->
  <div id="input_end" class="popup_wrap zoom-anim-dialog mfp-hide" style="background:white; width:400px">
    <div style="width:100%;height:20px">
      <a href="#" onclick="$.magnificPopup.close();" style="float:right">닫기</a>
    </div>
    <div class="ok_txt_area">
      참여해주셔서 감사합니다.<br />
      스위스구름을 선택한 사람들 0000명
    </div>
    <div>
      <a href="#" onclick="sns_share('twitter');">트윗</a>
      <a href="#" onclick="sns_share('facebook');return false;">페북</a>
      <a href="#" onclick="sns_share('ks_share');return false;">카스</a>
    </div>
    <a href="#" onclick="$.magnificPopup.close();">확인</a>
  </div>
<!-------------------------------------참여완료 DIV ------------------------------------------->
</html>
<script type="text/javascript">
	var shareYN		= "N";
	function start_api()
	{
		// 유튜브 반복 재생
		var controllable_player,start, 
		statechange = function(e){
			if (e.data === 0) // 종료됨
			{
				//$("#video_control").attr('src','images/btn_pause.png');
				//controllable_player.seekTo(0); controllable_player.playVideo();
				$("#btn_event_wait").hide();
				$("#btn_event").show();
				//alert('11');
			}
		};
		function onYouTubeIframeAPIReady() {
			controllable_player = new YT.Player('ytplayer', {events: {'onStateChange': statechange}}); 
		}

		if(window.opera){
			addEventListener('load', onYouTubeIframeAPIReady, false);
		}

		if (typeof(controllable_player) == 'undefined'){
			onYouTubeIframeAPIReady();
		}
	}

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
		closeOnBgClick: false,
		callbacks: {
			close: function() {
				$("#btn_event").hide();
				$("#btn_event_wait").show();
			}
		}
	});
	$('.first-popup-link').magnificPopup({
		closeBtnInside:true
	});
	var magnificPopup = $.magnificPopup.instance;

	function sns_share(media)
	{
		Kakao.init('0955d4d6b239e2a0f6159bc955bddd9b');

		if (media == "facebook")
		{
			var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.thefaceshopclouding.co.kr/?media=fb'),'sharer','toolbar=0,status=0,width=600,height=325');
			$.ajax({
				type   : "POST",
				async  : false,
				url    : "../main_exec.php",
				data:{
					"exec" : "insert_share_info",
					"media" : media
				}
			});
		}else if (media == "twitter")
		{
			var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("1. 서장훈, 촉촉하게 수지랑! 서장훈 구름탄 기분이랄까~촉촉한 선물 2. 서장훈 더페이스샵 CF모델? '아니아니 그게 아니고' 공개! 구름선물") + '&url='+ encodeURIComponent('http://goo.gl/lO3xlN'),'sharer','toolbar=0,status=0,width=600,height=325');
			$.ajax({
				type   : "POST",
				async  : false,
				url    : "../main_exec.php",
				data:{
					"exec" : "insert_share_info",
					"media" : media
				}
			});
		}else if(media == "kakao") {

			// 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
			Kakao.Link.createTalkLinkButton({
			  label: "서장훈이 화장품 CF를?! \n<아니 아니, 그게 아니고~> 전격 공개!\n 건조한 피부에 봄비같은 하얀 수분 크림 출시!\n 지금 10ml Kit도 신청하세요!",
			  image: {
				src: 'http://www.thefaceshopclouding.co.kr/PC/images/sns_kt.jpg',
				width: '1200',
				height: '630'
			  },
			  webButton: {
				text: '더페이스샵',
				url: 'http://www.thefaceshopclouding.co.kr/?media=K01' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
			  }
			});
			$.ajax({
				type   : "POST",
				async  : false,
				url    : "../main_exec.php",
				data:{
					"exec" : "insert_share_info",
					"media" : media
				}
			});

		}else if(media == "story"){
			// 로그인 창을 띄웁니다.
			Kakao.Auth.login({
			  success: function() {

				// 로그인 성공시, API를 호출합니다.
				Kakao.API.request( {
				  url : '/v1/api/story/linkinfo',
				  data : {
					url : 'https://youtu.be/1kRP0yqnA9o'
				  }
				}).then(function(res) {
				  // 이전 API 호출이 성공한 경우 다음 API를 호출합니다.
				  return Kakao.API.request( {
					url : '/v1/api/story/post/link',
					data : {
					  link_info : res,
						  content:"여기에 작성하심됩니다."
					}
				  });
				}).then(function(res) {
				  return Kakao.API.request( {
					url : '/v1/api/story/mystory',
					data : { id : res.id }
				  });
				}).then(function(res) {
					confirm('공유됐어요');
				}, function (err) {
				  alert(JSON.stringify(err));
				});

			  },
			  fail: function(err) {
				alert(JSON.stringify(err))
		 
				},
			});
		 
		}
		shareYN == "Y";
	}

	function chk_share()
	{
		if ( shareYN == "Y")
		{
			$.magnificPopup.close();
		}else{
			if (confirm('해당 창을 닫으면, 이벤트 응모가 중단됩니다.'))
			{
				$.magnificPopup.close();
			}
		}
	}
 </script>
