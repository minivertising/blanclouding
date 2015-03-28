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
		$sel_cloud = "스위스";
	else if ($sel_gift == "cream")
		$sel_cloud = "크림";
	else
		$sel_cloud = "제주도";
?>
      참여해주셔서 감사합니다.<br />
      <?=$sel_cloud?>구름을 선택한 사람들 <?=number_format($sel_cnt)?>명
