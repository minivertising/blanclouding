<?php
    include_once "../config.php";
    $serialnumber = $_REQUEST['serialnumber'];

	$query = "SELECT s.idx, s.shop_name, s.shop_addr, m.mb_use FROM member_info m, shop_info s where m.shop_idx = s.idx and m.mb_serialnumber = '".$serialnumber."' and m.mb_winner = 'Y'";
    $result = mysqli_query($my_db, $query);
    $user_info    = @mysqli_fetch_array($result);

	if (!$user_info)
	{
		echo "<script>alert('당첨된 고객이 아닙니다.');</script>";
		exit;
	}
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0,aximum-scale=3.0"/>
    <title>THEFACESHOP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link type="text/javascript" href="js/default.js"/>
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
	

		var millenium = new Date("March 22, 2015 22:00:00") //이곳을 수정하면 됩니다

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
			minutes = "0" + minutes;
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
	

    $("#realtime_h1").attr("src","./img/time_" + hours1 + ".png");
    $("#realtime_h2").attr("src","./img/time_" + hours2 + ".png");
    $("#realtime_m1").attr("src","./img/time_" + minutes1 + ".png");
    $("#realtime_m2").attr("src","./img/time_" + minutes2 + ".png");
    $("#realtime_s1").attr("src","./img/time_" + secs1 + ".png");
    $("#realtime_s2").attr("src","./img/time_" + secs2 + ".png");


	setTimeout("CalcRemaining(document.clock)", 250);
	}
	</script>
  </head>
  <body onLoad="CalcRemaining(document.clock)">
    <div class="wrap_page wrap_coupon">
    
      <div class="header coupon">
        <div class="block_logo clearfix">
          <a href="http://www.thefaceshop.com/m/" class="logo_tfs" target="_blank"><img src="img/logo_tfs.png" width="100" alt=""/></a>
        </div><!--block_logo clearfix-->
      </div><!--header coupon-->

      <div class="content coupon">
        <div class="block_title">
          <img src="img/coupon_title.png" alt=""/>
        </div><!--block_title-->

        <div class="block_cloud_bg">

          <div class="product">
            <img src="img/img_product.png" alt=""/>
          </div><!--product-->

          <div class="inner">
            <div class="block_time">
              <div class="txt">
                <img src="img/txt_time.png" width="140" alt=""/>
              </div><!--txt-->
              
              <div class="time clearfix">
                <div class="num"><!-- 시 -->
                  <img src="./img/time_0.png" id="realtime_h1" alt="" />
                  <img src="./img/time_0.png" id="realtime_h2" alt="" />
                  </div>
                  <div class="dash">
                    <img src="img/time_dash.png" alt=""/>
                  </div>
                  <div class="num"><!-- 분 -->
                    <img src="./img/time_0.png" id="realtime_m1" alt="" />
                    <img src="./img/time_0.png" id="realtime_m2" alt="" />
                  </div>
                  <div class="dash">
                    <img src="img/time_dash.png" alt=""/>
                  </div>
                  <div class="num"><!-- 초 -->
                    <img src="./img/time_0.png" id="realtime_s1" alt="" />
                    <img src="./img/time_0.png" id="realtime_s2" alt="" />
                  </div>
                </div><!--time clearfix-->
                
              </div><!--block_time-->

              <div class="block_info">
                <ul class="clearfix">
                  <li class="txt_label">교환기간 |</li>
                  <li class="txt_detail">2015.03.19 ~ 03.22</li>
                </ul>
                <ul class="clearfix">
                  <li class="txt_label">내가 선택한 매장 |</li>
                  <li class="txt_detail">
<?
	if ($iPhoneYN == "Y")
	{
?>
                    <a href="http://thefaceshopclouding.co.kr/MOBILE/popup_map.php?shop_idx=<?=$user_info['idx']?>&exec=select_address"><?=$user_info['shop_name']?></a>
<?
	}else{
?>
                    <a href="http://thefaceshopclouding.co.kr/MOBILE/popup_map.php?shop_idx=<?=$user_info['idx']?>&exec=select_address" target="_blank"><?=$user_info['shop_name']?></a>
<?
	}
?>
                  </li>
                </ul>
              </div><!--block_info-->
    		  </div><!--inner-->
	        </div><!--block_cloud_bg-->
	      
	
    
              <div class="footer">
                <img src="img/footer_coupon.png" alt=""/>
              </div>

			  <div class="block_check_in"> 
                  <div class="txt" ><img src="img/txt_notice.png" class="txt" alt=""/></div><!--txt-->
                  <div class="btn_block">
<?
	if ($user_info['mb_use'] == "Y")
	{
?>
	<img src="img/btn_use_after.png" alt=""/>
<?
	}else{
?>
	<a href="#" onclick="button_event('<?=$serialnumber?>')"><img src="img/btn_use_before.png" alt=""/></a>
<?
}
?>
				  </div><!--btn_block-->
                  </div><!--block_check_in-->
                

 
        
      </div><!--content coupon-->
    </div><!--wrap_page wrap_coupo-->
  </body>
</html>
