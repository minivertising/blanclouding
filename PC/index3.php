<?
	include_once "./header2.php";
?>
<!--contents_wrap-->
<div>
<!--area1-->
  <div>
<!--cover_area-->
    <div>
    </div>
<!--cover_area-->
<!--icon_area-->
    <div>
      <a href="#">로고 부분</a>
      <a href="#">우측상단로고</a>
    </div>
	<div>
		<a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim" style="background:none;outline: none;">영상시청하기</a>
	</div>
  </div>
</div>

<!----------------------------------------영상시청하기 DIV------------------------------------------>
  <div id="input_div" class="popup_wrap zoom-anim-dialog mfp-hide" style="background:white; width:400px">
    <div>
      <iframe allowfullscreen="1" src="<?=$_gl['youtube_second']?>" frameborder="0" id="ytplayer" class="ytplayer">
       </iframe>
    </div>
    <div>
      <a href="#" data-mfp-src="#share_present" class="popup-with-zoom-anim" style="background:none;outline: none;">영상공유하고 구름선택하기</a>
    </div>
  </div>
  <!----------------------------------------영상시청하기 DIV------------------------------------------>


<!----------------------------------------쉐어 후 사은품 선택하기 DIV ---------------------------------->
  <div id="share_present" class="popup_wrap zoom-anim-dialog mfp-hide" style="background:white; width:400px">
    <div>
      스위스<input type="radio" name="chk_present" value="swiss">
      크림<input type="radio" name="chk_present" value="cream">
      제주도<input type="radio" name="chk_present" value="jeju">
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
              <li><a href="#use_div" class="btn_detail popup-with-zoom-anim" onclick="open_use()">개인정보 수집 · 이용에 대한 동의</a></li>
            </ul>
            <ul>
              <li><input type="checkbox" name="privacy_agree" id="privacy_agree"></li>
              <li><a href="#privacy_div" class="btn_detail popup-with-zoom-anim" onclick="open_privacy()">개인정보의 취급 위탁 동의</a></li>
            </ul>
            <ul>
              <li><input type="checkbox" name="adver_agree" id="adver_agree"></li>
              <li><a href="#adver_div" class="btn_detail popup-with-zoom-anim" onclick="open_adver()">광고성 정보 전송 동의</a></li>
            </ul>
          </div>
          <div>
            <a href="#" onclick="m_chk_input()"class="popup-with-zoom-anim" style="background:none;outline: none;">입력완료</a>
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
      참여해주셔서 ㄳ
      <div>
       <a href="#" onclick="sns_share('twitter');">트윗</a>
       <a href="#" onclick="sns_share('facebook');return false;">페북</a>
       <a href="#" onclick="sns_share('ks_share');return false;">카스</a>
    </div>
       <a href="./index3.php">확인</a>
  </div>
<!-------------------------------------참여완료 DIV ------------------------------------------->
</html>
<script type="text/javascript">
    var controllable_player,start, 
    statechange = function(e){
		if (e.data === 0)
		{
			alert("엥");
		}
		else if (e.data === 1)
		{
			alert("엥");		
		}
		else if (e.data === 2)
		{
			alert("엥");		
		}
		else if (e.data === 5)
		{
		}
	};
    function onYouTubeIframeAPIReady() {
		controllable_player = new YT.Player('ytplayer', {events: {'onStateChange': statechange}}); 
    }
	if(window.opera){
		addEventListener('load', onYouTubeIframeAPIReady, false);
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
 
 
 </script>
