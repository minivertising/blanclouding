<?
	include_once "./header.php";
?>
<div class="wrap_page popup">
  <div class="block_close clearfix">
<?
	if ($iPhoneYN == "Y")
	{
?>
    <a href="#" class="btn_close" onclick="javascript:history.go(-1); return false;"><img src="img/popup/btn_close.png" width="29"/></a>
<?
	}else{
?>
    <a href="#" class="btn_close" onclick="javascript:window.close()"><img src="img/popup/btn_close.png" width="29"/></a>
<?
	}
?>
  </div>
  <div class="content">
    <div class="inner agree" align="left">
<div class="font" style="font-weight: bold; ">개인정보의 취급 위탁 동의</div><br><br>
(주)더페이스샵은 서비스 향상과 원활한 진행을 위하여 개인정보 처리 업무를 외부 전문 업체에 위탁하여 처리하고 있습니다.<br>
고객은 아래와 같은 개인정보 취급 위탁에 동의하지 않을 권리가 있으며 동의 거부시 이벤트 참여에 제한을 받을 수 있습니다.<br>
&#62;취급위탁업체 &#47; 위탁업무 및 이용목적 &#58; 미니버타이징(주) &#47; 이벤트 대행 및 운영<br>
&#62;보유 및 이용기간 &#58; 이벤트 종료 후 1년까지 (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)

    </div><!--inner-->
  </div>
</div><!--wrap_page popup-->

</body>
</html>
