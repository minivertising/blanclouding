<?php
	include_once "../config.php";
	$userid = $_REQUEST['userid'];
?>

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<script>
	function show_map(){
		var jido = $("#user_info1").text();

		$.ajax({
			type:"POST",
			data:{
				"jido"   : 
			},
			url: "./map_ajax.php",
			success: function(response){
				$("#map_area").html(response);
			}
		});
	}
	  </script>
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
	$query = "SELECT s.shop_name FROM member_info m, shop_info s where m.shop_idx = s.idx and m.idx = '".$userid."'";
	$result = mysqli_query($my_db, $query);
	$user_info	= @mysqli_fetch_array($result);

print_r($user_info);

	//지도확인
	$query1 = "SELECT s.shop_addr FROM member_info m, shop_info s where m.shop_idx = s.idx and m.idx = '".$userid."'";
	$result1 = mysqli_query($my_db, $query1);
	$user_info1 = @mysqli_fetch_array($result1);
?>
	<input type="button" value="<?=$user_info1?>" onclick="show_map()">
	<div id="map_area" style="width:50%; heigh:50%">
	</div>
</body>
<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=4079f466534bbd570c0fd254a4c2954e&libraries=services"></script>
</html>

