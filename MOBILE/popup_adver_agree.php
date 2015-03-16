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
<div class="font" style="font-weight: bold; ">광고성 정보 전송 동의</div><br><br>

(주)더페이스샵은 수집된 개인정보를 이용하여 각종 서비스·상품 및 타사 서비스와 결합된 상품에 대하여 홍보, 가입권유, 프로모션, 이벤트 목적으로 본인에게 정보 &#47; 광고를 전화, DM, SMS, MMS, 이메일, 우편 등을 통해 전달합니다.<br>
(주)더페이스샵은 마케팅 &#47; 홍보를 위하여 고객의 개인정보를 이용에 동의를 구하며, 동의 거부 시에도 이벤트 참여는 가능하나 할인 및 이벤트 정보 안내 등 서비스는 제한될 수 있습니다.
    </div><!--inner-->
  </div>
</div><!--wrap_page popup-->

</body>
</html>
