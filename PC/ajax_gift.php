<?
	include_once "../include/global.php"; 			//변수정보
	include_once "../include/function.php"; 		//함수정보
	include_once "../include/dbi.php"; 			//DB 연결정보
	mysqli_query ($my_db,"set names utf8");

	$sel_gift		= $_REQUEST['sel_gift'];
	$query		= "SELECT * FROM ".$_gl['member_info2_table']." WHERE mb_gift='".$sel_gift."'";
	$result		= mysqli_query($my_db, $query);
	$sel_cnt		= mysqli_num_rows($result);

	if ($sel_gift == "swiss")
	{
		$sel_cloud = "스위스";
		$img_num = "01";
	}else if ($sel_gift == "cream"){
		$sel_cloud = "하얗고 촉촉한";
		$img_num = "02";
	}else{
		$sel_cloud = "서울 남산";
		$img_num = "03";
	}
?>
          <div class="title"><img src="images/popup/title_thks.png" width="310" height="80" alt=""/></div>
          <div class="gift"><img src="images/popup/gift_<?=$img_num?>.png" width="114" height="114" alt=""/></div>
          <div class="m_cound"><?=$sel_cloud?> 구름을 선택한 사람 <span><?=$sel_cnt?>명</span></div>
          <div class="btn_block">
            <a href="#" onclick="$.magnificPopup.close();"><img src="images/popup/btn_ok.png" alt=""/></a>
          </div>
