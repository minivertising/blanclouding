<?
	include_once "./header.php";
?>
<div class="wrap_page popup select_cloud_2">
  <div class="block_close clearfix">
    <a href="#event_confirm" class="btn_close popup-with-zoom-anim"><img src="img/popup/btn_close.png" /></a>
  </div>
  <div class="content">
  <form name="frm" method="post" action="popup_input2.php">
    <input type="hidden" name="sel_present" id="sel_present">
  </form>
    <div class="inner">
      <div class="title">
        <img src="img/popup/title_select_cloud2.png" alt=""/>
      </div>
      <div class="select_01">
        <div class="tag"><img src="img/popup/select_01_tag.png" alt=""/></div>
        <div class="s_inner clearfix">
          <div>
            <a href="#" onclick="sel_present('swiss')"><img src="img/popup/img_cloud_1.png" alt="" id="p1"/></a><br>
            <img src="img/popup/txt_cloud_1.png" alt="" class="txt"/>
          </div>
          <div>
            <a href="#" onclick="sel_present('cream')"><img src="img/popup/img_cloud_2.png" alt="" id="p2"/></a><br>
            <img src="img/popup/txt_cloud_2.png" alt="" class="txt"/>
          </div>
          <div>
            <a href="#" onclick="sel_present('namsan')"><img src="img/popup/img_cloud_3.png" alt="" id="p3"/></a><br>
            <img src="img/popup/txt_cloud_3.png" alt="" class="txt"/>
          </div>
        </div>
      </div>
      <div class="select_02">
        <div class="tag"><img src="img/popup/select_02_tag.png" alt=""/></div>
        <div class="sl_bg">
          <div class="s_inner clearfix">
            <div>
              <a href="#" onclick="sns_share('facebook');return false;"><img src="img/popup/btn_share_fb.png" alt=""/></a>
            </div>
            <div>
              <a href="#" onclick="sns_share('story');return false;"><img src="img/popup/btn_share_kt.png" alt=""/></a>
            </div>
            <div>
              <a href="#" onclick="sns_share('twitter');"><img src="img/popup/btn_share_tw.png" alt=""/></a>
            </div>
          </div>
          <div class="tag2"><img src="img/popup/txt_share_detail.png" alt=""/></div>
        </div>
      </div>
      <div class="btn_block">
        <a href="#" onclick="submit_frm();return false;"><img src="img/popup/btn_select_cloud.png" alt=""/></a>
      </div>
    </div><!--inner-->
  </div>
</div>

<!--종료시 팝업-->
<div id="event_confirm" class="wrap_page popup popup_out zoom-anim-dialog mfp-hide">
  <div class="block_close clearfix">
    <a href="#" class="btn_close" onclick="close_layer()"><img src="img/popup/btn_close.png"/></a>
  </div>
  <div class="content">
    <div class="inner alert">
      <div class="title">
        <img src="img/popup/title_out.png" alt=""/>
      </div>
      <div class="btn_block clearfix">
<?
	if ($iPhoneYN == "Y")
	{
?>
        <a href="index3.php" class="first"><img src="img/popup/btn_out.png" alt=""/></a>
<?
	}else{
?>
        <a href="index3.php" class="first" target="_blank"><img src="img/popup/btn_out.png" alt=""/></a>
<?
	}
?>
        <a href="#" onclick="close_layer()"><img src="img/popup/btn_return.png" alt=""/></a>
      </div>
    </div><!--inner-->
  </div>
</div><!--wrap_page popup-->
<!--종료시 팝업-->

</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
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

	function close_layer()
	{
		$.magnificPopup.close();
	}

	function sel_present(param)
	{
		if (param == "swiss")
		{
			$("#p1").attr("src","img/popup/img_cloud_1_on.png");
			$("#p2").attr("src","img/popup/img_cloud_2.png");
			$("#p3").attr("src","img/popup/img_cloud_3.png");
		}else if (param == "cream") {
			$("#p1").attr("src","img/popup/img_cloud_1.png");
			$("#p2").attr("src","img/popup/img_cloud_2_on.png");
			$("#p3").attr("src","img/popup/img_cloud_3.png");
		}else {
			$("#p1").attr("src","img/popup/img_cloud_1.png");
			$("#p2").attr("src","img/popup/img_cloud_2.png");
			$("#p3").attr("src","img/popup/img_cloud_3_on.png");
		}
		$("#sel_present").val(param);

	}

	function submit_frm()
	{
		document.frm.submit();
	}
</script>