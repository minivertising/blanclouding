<?
	include_once "./header2.php";

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

<div class="wrap_page popup thx">
  <div class="block_close clearfix">
    <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
  </div>
  <div class="content">
    <div class="inner">
      <div class="title">
        <img src="img/popup/title_thx.png" alt=""/>
      </div>
      <div class="block_gift">
        <img src="img/popup/gift_<?=$img_num?>.png" alt=""/>
      </div>
      <div class="m_count">
      <?=$sel_cloud?> 구름을 선택한 사람들 <?=number_format($sel_cnt)?>명
      </div>
      <div class="btn_block">
        <a href="index.php"><img src="img/popup/btn_confirm.png" alt=""/></a>
      </div>
    </div><!--inner-->
  </div>
</div>
</body>
</html>
