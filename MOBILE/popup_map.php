<?
	include_once "./header.php";
	$exec			= $_REQUEST['exec'];
	$si				= $_REQUEST['si'];
	$gun			= $_REQUEST['gun'];
	$shop_idx	= $_REQUEST['shop_idx'];
?>
<input type="hidden" name="exec" id="exec" value="<?=$exec;?>">
<input type="hidden" name="si" id="si" value="<?=$si;?>">
<input type="hidden" name="gun" id="gun" value="<?=$gun;?>">
<input type="hidden" name="shop_idx" id="shop_idx" value="<?=$shop_idx;?>">
  <div id="map_div"  class="wrap_page popup">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="javascript:window.close()"><img src="img/popup/btn_close.png" width="29"/></a>
    </div>
    <div class="content" style="z-index:800000">
      <div id="map_area" class="map_area" style="height:440px;border:1px solid skyblue"></div>
    </div>
  </div><!--wrap_page popup-->
</body>
</html>
<script>
$(document).ready(function() {
	var si				= $("#si").val();
	var gun			= $("#gun").val();
	var exec			= $("#exec").val();
	var shop_idx		= $("#shop_idx").val();
	if (exec == "select_address")
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
						"flag"    : exec,
						"addr"     : response
					},
					url: "../map_ajax.php",
					success: function(response){
						$("#map_area").html(response);
					}
				});
			}
		});
	}else{
		$.ajax({
			type:"POST",
			data:{
				"flag"    : exec,
				"si"       : si,
				"gun"    : gun
			},
			url: "../map_ajax.php",
			success: function(response){
				$("#map_area").html(response);
			}
		});
	}
});
</script>