<?php
	include_once "../config.php";
	$userid = $_REQUEST["userid"];
?>

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

<?
	//남은 시간 구하기
	$startdate = date("Y-m-d h:i:s", time());
	$enddate = "2015-03-06 18:00:00";

	$timediffer=strtotime($enddate)-strtotime($startdate);
	$hour=floor((($timediffer)-($day*60*60*24))/(60*60));
	$minute=floor(($timediffer-($day*60*60*24)-($hour*60*60))/(60));

	echo"startdate:".$startdate;
	echo"<br>";
	echo"enddate:".$enddate;
	echo"<br>";
	echo $hour."시간".$minute."분 남았습니다.";

	//내가 선택한 지점찾기 쿼리
	$query = "SELECT s.shop_name,s.shop_addr FROM member_info m, shop_info s where m.shop_idx = s.idx and m.idx = '".$userid."'";
	$result = mysqli_query($my_db, $query);
	$user_info	= mysqli_fetch_array($result);

print_r($user_info);
?>


</body>

</html>