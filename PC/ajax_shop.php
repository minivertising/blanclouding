<?
	include_once "../include/global.php"; 			//변수정보
	include_once "../include/function.php"; 		//함수정보
	include_once "../include/dbi.php"; 			//DB 연결정보
	mysqli_query ($my_db,"set names utf8");

	$addr2_idx = $_REQUEST['addr2_idx'];
?>
              <li class="input_txt store" id="sel_shop" onchange="shop_change(this.value)">
                <select name="shop" id="shop"style="width:120px;height:30px; float:left;">
                  <option value="">선택하세요</option>
<?
	// 주소 쿼리
	$query 		= "SELECT * FROM ".$_gl['shop_info_table']." WHERE addr_idx='".$addr2_idx."'";
	$result 	= mysqli_query($my_db, $query);

	while($shop_data = @mysqli_fetch_array($result))
	{
?>
                  <option value="<?=$shop_data['idx']?>"><?=$shop_data['shop_name']?></option>
<?
	}
?>
                </select>
              </li>
<script type="text/javascript">
/*
		$( "#shop" ).dropkick({
			mobile: true
		});
		$("#dk5-shop").css("width","120px");
		$("#dk5-shop").css("font-size","14px");
		$("#dk5-combobox").css("height","34px");
		$(".dk-option").css("float","none");
		$(".dk-option").css("width","120px");
		$(".dk-option").css("height","34px");
		$(".dk-select").css("width","120px");
		$(".dk-select").css("height","34px");
*/
</script>