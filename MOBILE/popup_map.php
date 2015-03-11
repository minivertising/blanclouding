<?
	include_once "./header.php";
	$flag	= $_REQUEST['flag'];
	if ($flag == "sigungu")
		$map_addr	= $_REQUEST["si"]." ".$_REQUEST["gun"];
	else if  ($flag == "win_coupon")
		$map_addr	= $_REQUEST['jido'];
	else
		$map_addr	= $_REQUEST["addr"];
?>
<div class="wrap_page popup">
  <div class="block_close clearfix">
    <a href="#" class="btn_close" onclick="javascript:window.close()"><img src="img/popup/btn_close.png" width="29"/></a>
  </div>
  <div class="content">
    <div class="inner agree">
	      <div id="#map_area" class="map_area" style="height:440px;border:1px solid skyblue"></div>

    </div><!--inner-->
  </div>
</div><!--wrap_page popup-->

</body>
</html>
<script>
$(document).ready(function() {
	var si				= $("#addr1 option:selected").text();
	var si_val			= $("#addr1").val();
	var gun			= $("#addr2 option:selected").text();
	var gun_val		= $("#addr2").val();
	var shop_idx		= $("#shop").val();
	if (shop_idx)
	{
		$.ajax({
			type:"POST",
			data:{
				"exec"           : "select_address",
				"shop_idx"     : shop_idx
			},
			url: "../main_exec.php",
			success: function(response){
				$.ajax({
					type:"POST",
					data:{
						"flag"    : "addr",
						"addr"     : response
					},
					url: "../map_ajax.php",
					success: function(response){
						$("#map_div").show();
						$("#map_area").html(response);
					}
				});
			}
		});
	}else{
		if (gun_val)
		{
			$.ajax({
				type:"POST",
				data:{
					"flag"    : "sigungu",
					"si"       : si,
					"gun"    : gun
				},
				url: "../map_ajax.php",
				success: function(response){
					$("#map_div").show();
					$("#map_area").html(response);
				}
			});
		}else{
			alert("지역이나 매장을 선택하셔야만 지도를 보실 수 있습니다.");
			setTimeout("inputfrm_data();",0);
		});
</script>