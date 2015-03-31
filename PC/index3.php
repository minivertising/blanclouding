<?
	include_once "./header2.php";
?>
<!--contents_wrap-->
<div class="contents_wrap">
<!--contents_wrap-->
<input type="hidden" name="chk_gift" id="chk_gift">
<!--area1-->
  <div class="area1">
    <div class="icon_area">
      <a href="http://www.thefaceshopclouding.co.kr/PC/index.php" target="_blank"><img src="images/logo_blan.png" alt=""/></a>
    </div>
  <!--icon_area-->
  <!--icon_area-->
    <div class="icon_area2">
      <a href="http://www.thefaceshop.com/index.jsp" target="_blank"><img src="images/logo_tfs.png" alt=""/></a>
    </div>
  <!--icon_area-->
    <div >
      <a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim" style="background:none;outline: none;" onclick="start_api();">영상시청하기</a>
    </div>
  </div>

<!--area2-->
<div class="area2_bg bg2" style="display:none">
  <div class="area4">
    <div class="product_group">
      <div class="product_area">
        <ul class="thumb_list clearfix">
          <li>
            <a href="#" data-mfp-src="#movie_div1" class="popup-with-zoom-anim" style="outline: none;" id="movie_link1"><img src="./images/thumb_1_open.png"></a>
          </li>
          <li>
            <!-- <a href="#" data-mfp-src="#movie_div2" class="popup-with-zoom-anim" style="outline: none;" id="movie_link2"><img src="./images/thumb_2_close.png"></a> -->
            <a href="#" onclick="alert('곧 공개 됩니다.');return false;"><img src="./images/thumb_2_close.png" style="cursor:pointer"></a>
          </li>
          <li>
            <!-- <a href="#" data-mfp-src="#movie_div3" class="popup-with-zoom-anim" style="outline: none;" id="movie_link3"><img src="./images/thumb_3_close.png"></a> -->
            <a href="#" onclick="alert('곧 공개 됩니다.');return false;"><img src="./images/thumb_3_close.png" style="cursor:pointer"></a>
          </li>
          <li>
            <!-- <a href="#" data-mfp-src="#movie_div4" class="popup-with-zoom-anim" style="outline: none;" id="movie_link4"><img src="./images/thumb_4_close.png"></a> -->
            <a href="#" onclick="alert('곧 공개 됩니다.');return false;"><img src="./images/thumb_4_close.png" style="cursor:pointer"></a>
          </li>          
        </ul>
      </div>
    </div>
  </div>
 </div>
<!--area2-->


<!--area3-->
<div class="area3_bg" style="display:none">
  <div class="area3">
    <div class="product_group">
      <div class="product_area">
        <!-- <a href="http://www.thefaceshop.com/product/tfs_prod_detail.jsp?pid=34100216&sid=01" target="_blank"><img src="images/btn_buy.png" width="333" height="80" alt=""/></a> -->
        <a href="http://www.thefaceshop.com/product/tfs_prod_detail.jsp?pid=34100216&sid=01" target="_blank" onclick="buy_cnt();"><img src="images/btn_buy.png" width="333" height="80" alt=""/></a>
      </div>
    </div>
  </div>
 </div>  
<!--area3-->

<!--footer-->
  <div class="footer" style="display:none">
    <img src="images/footer.png" alt=""/>
  </div>
<!--footer-->



<!--quickmenu-->
<div class="quickmenu">
  <a href="#"><img src="images/btn_top.png" width="45" height="45" alt=""/></a>
</div>
<!--quickmenu-->

</div>
<!--contents_wrap-->

<!----------------------------------------영상시청하기 DIV------------------------------------------>
  <div id="input_div" class="popup_wrap zoom-anim-dialog mfp-hide" style="background:white; width:400px">
    <div style="width:100%;height:20px">
      <a href="#" onclick="chk_share()" style="float:right">닫기</a>
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
    </div>
  </div>
<!----------------------------------------쉐어 후 사은품 선택하기 DIV ---------------------------------->


<!---------------------------------------개인정보 입력 DIV ---------------------------------->
  <div id="input_info" class="popup_wrap zoom-anim-dialog mfp-hide" style="background:white; width:400px">
    <div style="width:100%;height:20px">
      <a href="#" onclick="$.magnificPopup.close();" style="float:right">닫기</a>
    </div>
    <div>
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
          <input type="text" name="mb_zipcode1" id="mb_zipcode1"> - <input type="text" name="mb_zipcode2" id="mb_zipcode2"><input type="button" value="우편번호 찾기" onclick="search_zip();return false;">
          <input type="text" name="mb_addr1" id="mb_addr1"><br />
          <input type="text" name="mb_addr2" id="mb_addr2">
        </li>
      </ul>
    </div>
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
<!--  주소검색 DIV 시작  -->
  <div id="post_div" style="display:none;border:5px solid;position:fixed;width:60%;height:600px;margin-left:20%;top:50%;margin-top:-300px;overflow:hidden;-webkit-overflow-scrolling:touch;z-index:999999">
    <img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:9999999" onclick="closeDaumPostcode()" alt="닫기 버튼">
  </div>
<!--  주소검색 DIV 끝  -->
  </body>
</html>
<script src="http://dmaps.daum.net/map_js_init/postcode.js"></script>
<script type="text/javascript">
	var shareYN		= "N";
	function start_api()
	{
		// 유튜브 반복 재생
		var controllable_player,start, 
		statechange = function(e){
			if (e.data === 0) // 종료됨
			{
				$("#btn_event_wait").hide();
				$("#btn_event").show();
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

	$(window).resize(function(){
		var width = $(window).width();

		var wHeight =$(window).height();

		if (wHeight <= 780){
			wHeight = 780;
		}else if(wHeight > 1000){
			wHeight = 1000;
		}
		$('.area2').height(995); // 제품
		$('.area4').height(995); // 제품
		$('.area3').height(wHeight); // 제품
		//$('.product_group').width(width); // 제품
		//$('.product_area').width(width); // 제품

	});

	$(document).ready(function() {
		// 체크박스 스타일 설정
		$('.popup_wrap input').on('ifChecked ifUnchecked', function(event){
			//alert(this.id);
		}).iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass: 'iradio_square-blue',
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

		$('.area1').height(995); // 제품

		$(".area2_bg").show();
		$(".area3_bg").show();
		$(".area4_bg").show();
		$(".footer").show();

		//처음 화면 크기에 따라 영상및 커버 크기 변경
		
		var wHeight =$(window).height();

		if (wHeight <= 780){
			wHeight = 780;
		}else if(wHeight > 1000){
			wHeight = 1000;
		}
		$('.area2').height(995); // 제품
		$('.area4').height(995); // 제품
		$('.area3').height(wHeight); // 제품

	});


		function closeDaumPostcode() {
			// iframe을 넣은 element를 안보이게 한다.
			element.style.display = 'none';
		}

			// 우편번호 찾기 iframe을 넣을 element
			var element = document.getElementById('post_div');

			function showDaumPostcode() {
				new daum.Postcode({
					oncomplete: function(data) {
						// 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
						// 우편번호와 주소 및 영문주소 정보를 해당 필드에 넣는다.
						document.getElementById('mb_zipcode1').value = data.postcode1;
						document.getElementById('mb_zipcode2').value = data.postcode2;
						document.getElementById('mb_addr1').value = data.address;
						document.getElementById('mb_addr2').focus();
						// iframe을 넣은 element를 안보이게 한다.
						element.style.display = 'none';
					},
					width : '100%',
					height : '100%'
				}).embed(element);

				// iframe을 넣은 element를 보이게 한다.
				//element.style.display = 'block';
			}


	function search_zip()
	{
		$("#post_div").show();
		showDaumPostcode();
	}
 </script>
