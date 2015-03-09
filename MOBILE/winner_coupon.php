<?php
    include_once "../config.php";
    $serialnumber = $_REQUEST['serialnumber'];

    //ë‚¨ì€ ì‹œê°„ êµ¬í•˜ê¸°
    $startdate = date("Y-m-d h:i:s", time());
    $enddate = "2015-03-06 18:00:00";

    $timediffer=strtotime($enddate)-strtotime($startdate);
    $hour=floor((($timediffer)-($day*60*60*24))/(60*60));
    $minute=floor(($timediffer-($day*60*60*24)-($hour*60*60))/(60));


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
	
	<!--- hide 
	var millenium = new Date("March 10, 2015 22:00:00") //이곳을 수정하면 됩니다
	function CalcRemaining(theForm)
	{
	var now = new Date();

	var difference = parseInt(((millenium.getTime() - now.getTime()) / 1000) + 0.999)
	var secs = difference % 60

	difference = parseInt(difference / 60)
	var minutes  = difference % 60

	difference = parseInt(difference / 60)
	var hours  = difference % 1000000

	difference = parseInt(difference / 24)
	var days  = difference

	theForm.txtHours.value = hours;
	theForm.txtMins.value = minutes;
	theForm.txtSecs.value = secs;

	setTimeout("CalcRemaining(document.clock)", 250);
	}
    </script>
	
	<?
	/*
		$lg_zip =  "SELECT * FROM ".$_gl['member_info_table']." WHERE";
		$lg_sucess = $lg_zip. "mb_winner ='Y'and mb_use='N'";
		$lg_consume = $lg_zip. "WHERE mb_winner or mb_use = 'Y'";
		$lg_fail = $lg_zip. "WHERE mb_winner ='N'";
		$lg_use = "UPDATE member_info set mb_use='Y' where mb_use='N'";

		$lg_info = "SELECT * FROM ".$_gl['member_info_table']." WHERE idx"
		
		$res = mysqli_query($my_db, $lg_info);

		if($userid==""){

*/
		

	?>
  <body onLoad=CalcRemaining(document.clock) onLoad="timerONE=window.setTimeout('scrollit_r21(50)',100);">
	<h4><B><font color="maroon">이벤트 참여 남은시간</B></h4></font>
	<TABLE WIDTH="250" >
	<FORM NAME=clock>
		<TD COLSPAN=4>
		<INPUT TYPE=TEXT NAME=txtHours SIZE=4 onFocus="blur()"><BR>Hours
		<TD>
		<INPUT TYPE=TEXT NAME=txtMins SIZE=4 onFocus="blur()"><BR>Minutes 
		<TD>
		<INPUT TYPE=TEXT NAME=txtSecs SIZE=4 onFocus="blur()"><BR>Seconds
		<tr align=center>

	</FORM>
	</TABLE>

	</FORM>
    <input type="button" value="지도" onclick="show_map()">
    <div id="map_area" style="width:50%; heigh:50%">
    </div>
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