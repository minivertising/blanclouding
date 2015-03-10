<?php
    include_once "../config.php";
    $serialnumber = $_REQUEST['serialnumber'];

	$query = "SELECT s.shop_name, s.shop_addr, m.mb_use FROM member_info m, shop_info s where m.shop_idx = s.idx and m.mb_serialnumber = '".$serialnumber."' and m.mb_winner = 'Y'";
    $result = mysqli_query($my_db, $query);
    $user_info    = @mysqli_fetch_array($result);

	if (!$user_info)
	{
		echo "<script>alert('당첨된 고객이 아닙니다.');</script>";
		exit;
	}
print_r($user_info['shop_addr']);

?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
    <script src="../js/jquery-1.11.2.min.js"></script>
    <script src="../js/main.js"></script>
    <script type="text/javascript">
    function show_map(){
        $.ajax({
            type:"POST",
            data:{
				"flag"   : "win_coupon",
                "jido"   : "<?=$user_info['shop_addr']?>"
            },
            url: "./map_ajax.php",
            success: function(response){
                $("#map_div").show();
                $("#map_area").html(response);
            }
        });
    }
    
    function close_map()
    {
        $("#map_div").hide();
    }
	
	var millenium = new Date("March 12, 2015 22:00:00") //이곳을 수정하면 됩니다

	function CalcRemaining(theForm)
	{
	var now = new Date();

	var difference = parseInt(((millenium.getTime() - now.getTime()) / 1000) + 0.999)
	var secs = difference % 60

	var secslen = String(secs).length;
	if (secslen < 2)
		secs = "0" + secs;

	difference = parseInt(difference / 60)
	var minutes  = difference % 60

	var minuteslen = String(minutes).length;
	if (minuteslen < 2)
		minute = "0" + minute;

	difference = parseInt(difference / 60)
	var hours  = difference % 1000000

	var hourslen = String(hours).length;
	if (hourslen < 2)
		hours = "0" + hours;

	var hours1     = String(hours).substr(0,1)
	var hours2     = String(hours).substr(1,2)
	var minutes1   = String(minutes).substr(0,1)
	var minutes2   = String(minutes).substr(1,2)
	var secs1      = String(secs).substr(0,1)
	var secs2      = String(secs).substr(1,2)
	

	$("#realtime_h1").attr("src","./images/time_" + hours1 + ".png");
	$("#realtime_h2").attr("src","./images/time_" + hours2 + ".png");
	$("#realtime_m1").attr("src","./images/time_" + minutes1 + ".png");
	$("#realtime_m2").attr("src","./images/time_" + minutes2 + ".png");
	$("#realtime_s1").attr("src","./images/time_" + secs1 + ".png");
	$("#realtime_s2").attr("src","./images/time_" + secs2 + ".png");


	setTimeout("CalcRemaining(document.clock)", 250);
	}
	</script>
	
  <body onLoad="CalcRemaining(document.clock)">
    <TABLE WIDTH="250" >
	  <FORM NAME=clock>
	    <img src="./images/time_0.png" id="realtime_h1">
	    <img src="./images/time_0.png" id="realtime_h2">:
	    <img src="./images/time_0.png" id="realtime_m1">
	    <img src="./images/time_0.png" id="realtime_m2">:
	    <img src="./images/time_0.png" id="realtime_s1">
	    <img src="./images/time_0.png" id="realtime_s2">
	</FORM>
	</TABLE>
    <input type="button" value="지도" onclick="show_map()">
    <div id="map_div" style="position:absolute;background:black;width:1000px;height:500px;top:20%;left:30%;display:none">
        <a href="#" onclick="close_map()">닫기</a>
        <div id="map_area" style="width:100%;height:90%;margin-top:5%"></div>
      </div>
<?
	if ($user_info['mb_use'] == "Y")
	{
?>
	  <input type = "button" value="사용 완료" onclick="alert('이미 사용하셨습니다.')">
<?
	}else{
?>
	  <input type = "button" value="사용 확인" onclick="button_event('<?=$serialnumber?>')">
<?
	}
?>
</body>
<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=4079f466534bbd570c0fd254a4c2954e&libraries=services"></script>
</html>