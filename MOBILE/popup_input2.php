<?
	include_once "./header2.php";
?>
  <style>
  </style>
  <div id="input_div" class="wrap_page popup">
  <input type="hidden" name="sel_present" id="sel_present" value="<?=$_REQUEST['sel_present']?>">
    <div class="block_close clearfix">
<?
	if ($iPhoneYN == "Y")
	{
?>
      <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" width="29"/></a>
<?
	}else{
?>
      <a href="#" class="btn_close" onclick="javascript:window.close()"><img src="img/popup/btn_close.png" width="29"/></a>
<?
	}
?>
    </div>
    <div class="content" style="background:white;">
      <div class="inner">
        <div class="title">
          <img src="img/popup/title_input.png" width="192" alt=""/>
        </div>
<?
	if ($iPhoneYN == "Y")
	{
?>
        <div class="input_block ip">
<?
	}else{
?>
        <div class="input_block">
<?
	}
?>

          <ul class="clearfix">
            <li class="t_name"><img src="img/popup/txt_label_name.png" width="32" alt=""/></li>
            <li class="input_txt"><input type="text" name="mb_name" id="mb_name"></li>
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
                <div><input type="tel" id="mb_phone2" name="mb_phone2" onkeyup="chk_len(this.value)"></div>
                <div><input type="tel" id="mb_phone3" name="mb_phone3" onkeyup="chk_len2(this.value)"></div>
              </div>
            </li>
          </ul>
        </div>
<?
	if ($iPhoneYN == "Y")
	{
?>
        <div class="input_block ip">
<?
	}else{
?>
        <div class="input_block">
<?
	}
?>
          <ul class="clearfix">
            <li class="t_name"><img src="img/popup/txt_label_store.png" width="63" alt=""/></li>
            <li class="input_txt address">
              <div class="inner clearfix">

                <div style="width:37%">
                  <input type="text" id="mb_zipcode1" name="mb_zipcode1" style="width:60%" readonly>&nbsp;-&nbsp;
                </div>
                <div style="width:37%">
                  <input type="text" id="mb_zipcode2" name="mb_zipcode2" style="width:60%" readonly>
                </div>
                <div style="width:26%">
                  <a href="#" onclick="search_zip();return false;">우편번호 검색</a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="clearfix">
            <li class="t_name"></li>
			<div>
            <li class="input_txt store" style="width:60%">
              <input type="text" id="mb_addr1" name="mb_addr1">
            </li>
			</div>
          </ul>
          <ul class="clearfix">
            <li class="t_name"></li>
			<div>
            <li class="input_txt store" style="width:60%">
              <input type="text" id="mb_addr2" name="mb_addr2">
            </li>
			</div>
          </ul>
        </div>
        <div class="input_block input_check">
          <ul class="clearfix">
            <li  class="in_check"><input type="checkbox" id="use_agree"></li>
            <li class="in_check_label">
				<label for="use_agree"><img src="img/popup/btn_detail_01.png" alt=""/></label>
            </li>
            <li class="in_check_btn">
<?
	if ($iPhoneYN == "Y")
	{
?>
                <a href="popup_use_agree.php" >
<?
	}else{
?>
                <a href="popup_use_agree.php" target="_blank" >
<?
	}
?>
                	<img src="img/popup/btn_detail.png" alt=""/>
                </a>
            </li>
          </ul>
          <ul class="clearfix">
            <li  class="in_check"><input type="checkbox" id="privacy_agree"></li>
            <li class="in_check_label">
				<label for="privacy_agree"><img src="img/popup/btn_detail_02.png" alt=""/></label>
            </li>
<?
	if ($iPhoneYN == "Y")
	{
?>
            <li class="in_check_btn"><a href="popup_privacy_agree.php" ><img src="img/popup/btn_detail.png" alt=""/></a></li>
<?
	}else{
?>
            <li class="in_check_btn"><a href="popup_privacy_agree.php" target="_blank" ><img src="img/popup/btn_detail.png" alt=""/></a></li>
<?
	}
?>
          </ul>
          <ul class="clearfix">
            <li class="in_check"><input type="checkbox" id="adver_agree"></li>
            <li class="in_check_label">
				<label for="adver_agree"><img src="img/popup/btn_detail_03.png" alt=""/></label>
            </li>
<?
	if ($iPhoneYN == "Y")
	{
?>
            <li class="in_check_btn"><a href="popup_adver_agree.php" ><img src="img/popup/btn_detail.png" alt=""/></a>
<?
	}else{
?>
            <li class="in_check_btn"><a href="popup_adver_agree.php" target="_blank" ><img src="img/popup/btn_detail.png" alt=""/></a>
<?
	}
?>
            </li>
          </ul>
        </div>
        <div class="btn_block" style="background:white;">
          <a href="#" onclick="javascript:m_chk_input();"><img src="img/popup/btn_ok.png" width="178" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
  <!--------------------------  개인정보 입력을 해주세요 ALERT DIV ----------------------->
  <div id="input_alert" class="wrap_page popup zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="	$.magnificPopup.close();"><img src="img/popup/btn_close.png" width="29"/></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title" style="text-align:center">
          <img src="img/popup/title_info.png" width="160" alt=""/>
        </div>
        <div class="btn_block" style="background:white;">
          <a href="#" onclick="	$.magnificPopup.close();"><img src="img/popup/btn_confirm.png" width="100" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->    
<!--------------------------  개인정보 입력을 해주세요 ALERT DIV ----------------------->

<!--------------------------  정보활용 동의를 해주세요 ALERT DIV ----------------------->
  <div id="agree_alert" class="wrap_page popup zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="img/popup/btn_close.png" width="29"/></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title" style="text-align:center">
          <img src="img/popup/title_agree.png" width="166" alt=""/>
        </div>
        <div class="btn_block" style="background:white;">
          <a href="#" onclick="	$.magnificPopup.close();"><img src="img/popup/btn_confirm.png" width="100" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
<!--------------------------  정보활용 동의를 해주세요 ALERT DIV ----------------------->

<!--------------------------  참여완료 ALERT DIV ----------------------->
  <div id="ok_alert" class="wrap_page popup zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="$.magnificPopup.close();window.close();"><img src="img/popup/btn_close.png" width="29"/></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title" style="text-align:center">
          <img src="img/popup/title_thanks.png" width="220" alt=""/>
        </div>
        <div class="btn_block" style="background:white;">
<?
	if ($iPhoneYN == "Y")
	{
?>
          <a href="#" onclick="$.magnificPopup.close();location.href='index.php';"><img src="img/popup/btn_confirm.png" width="100" alt=""/></a>
<?
	}else{
?>
          <a href="#" onclick="$.magnificPopup.close();window.close();"><img src="img/popup/btn_confirm.png" width="100" alt=""/></a>
<?
	}
?>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->   
<!--------------------------  참여완료 ALERT DIV ----------------------->
<!--  주소검색 DIV 시작  -->
    <div id="post_div" style="display:none;position:fixed;width:100%;height:100%;top:0px;overflow:hidden;;z-index:99998">
      <img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:0px;top:0px;z-index:99999" onclick="closeDaumPostcode()" alt="닫기 버튼">
    </div>
<!--  주소검색 DIV 끝  -->


	<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		//처음 화면 크기에 따라 영상및 커버 크기 변경
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

				// 각 주소의 노출 규칙에 따라 주소를 조합한다.
				// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
				var fullAddr = data.address; // 최종 주소 변수
				var extraAddr = ''; // 조합형 주소 변수

				// 기본 주소가 도로명 타입일때 조합한다.
				if(data.addressType === 'R'){
					//법정동명이 있을 경우 추가한다.
					if(data.bname !== ''){
						extraAddr += data.bname;
					}
					// 건물명이 있을 경우 추가한다.
					if(data.buildingName !== ''){
						extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
					}
					// 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
					fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
				}


				// 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
				// 우편번호와 주소 및 영문주소 정보를 해당 필드에 넣는다.
				document.getElementById('mb_zipcode1').value = data.postcode1;
				document.getElementById('mb_zipcode2').value = data.postcode2;
				document.getElementById('mb_addr1').value = fullAddr;
				//document.getElementById('mb_addr2').focus();
				// iframe을 넣은 element를 안보이게 한다.
				element.style.display = 'none';
			},
			width : '100%',
			height : '100%'
		}).embed(element);

		// iframe을 넣은 element를 보이게 한다.
		element.style.display = 'block';
	}


	function search_zip()
	{
		//$("#post_div").show();
		showDaumPostcode();
	}

	</script>

