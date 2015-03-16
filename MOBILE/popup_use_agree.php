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
    <div class="inner agree">
<div class="font" style="font-weight: bold; ">개인정보 수집 · 이용에 대한 동의</div><br><br>

(주)더페이스샵(이하 "더페이스샵")은 이벤트 진행을 위한 개인정보 수집 이용을 위하여 다음과 같이 귀하의 동의를 받고자 합니다.<br>
더페이스샵은 보다 원활한 서비스 제공을 위하여 고객의 정보를 수집하고 있습니다. 고객의 정보는 이벤트 서비스에 참여하기 위한 필수정보로써 
제공을 원하지 않을 경우 수집하지 않으며, 동의 거부 시 이벤트 참여에 제한을 받을 수 있습니다.<br><br><br>


<div class="font" style="font-weight: bold; ">(주)더페이스샵은 본 이벤트를 위하여 다음과 같이 고객님의 개인정보를 수집 및 이용합니다.</div><br><br>
&#62;수집 · 이용 목적<br>&#58; 이벤트 혜택을 제공하기 위한 정보 전달<br>&#58; 이벤트 혜택 이용에 따른 본인확인, 고지사항 전달<br>&#58; 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계<br>&#62; 수집 필수 항목 : 이름, 연락처<br>&#62; 보유&#47;이용기간 &#58; 이벤트 종료 후 1년까지 (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
</div><!--inner-->
  </div>
</div><!--wrap_page popup-->

</body>
</html>
