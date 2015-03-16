<?
	include_once "./header.php";
?>
  <style>
  </style>
  <div id="input_div" class="wrap_page popup">
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
          <ul class="clearfix" style="padding-top:7px;">
            <li class="t_name"></li>
			<div>
            <li class="input_txt store" id="sel_shop" >
              <select name="shop" id="shop">
                <option value="">선택하세요</option>
              </select>
            </li>
			</div>
            <li class="btn">
              <a href="#" onclick="m_show_map('<?=$iPhoneYN?>');"><img src="img/popup/btn_store.png" width="98" alt=""/></a>
            </li>
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
          <a href="javascript:m_chk_input('<?=$iPhoneYN?>');" class="popup-with-zoom-anim" onclick="javascript:m_chk_input('<?=$iPhoneYN?>');"><img src="img/popup/btn_ok.png" width="178" alt=""/></a>
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

<!--------------------------  매장을 선택해 해주세요 ALERT DIV ----------------------->
  <div id="shop_alert" class="wrap_page popup zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="	$.magnificPopup.close();"><img src="img/popup/btn_close.png" width="29"/></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title" style="text-align:center">
          <img src="img/popup/title_select_store.png" width="140" alt=""/>
        </div>
        <div class="btn_block" style="background:white;">
          <a href="#" onclick="	$.magnificPopup.close();"><img src="img/popup/btn_confirm.png" width="100" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
<!--------------------------  매장을 선택해 해주세요 ALERT DIV ----------------------->

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
	</script>

