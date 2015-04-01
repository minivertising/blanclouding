<?
	include_once "./header.php";
?>
<div class="wrap_page popup select_cloud_2">
  <div class="block_close clearfix">
<?
	if ($iPhoneYN == "Y")
	{
?>
    <a href="index3.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
<?
	}else{
?>
    <a href="#" class="btn_close" onclick="javascript:window.close()"><img src="img/popup/btn_close.png" /></a>
<?
	}
?>
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
</body>
</html>
<script type="text/javascript">
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