<?
	include_once "../include/global.php"; 			//변수정보
	include_once "../include/function.php"; 		//함수정보
	include_once "../include/dbi.php"; 			//DB 연결정보
	mysqli_query ($my_db,"set names utf8");

	$addr2_idx = $_REQUEST['addr2_idx'];
?>
              <select name="shop" id="shop" style="width:100px; height:31px;">
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
<script type="text/javascript">
/*
		$( "#shop" ).dropkick({
			mobile: true
		});

		$("#dk5-combobox").css("width","120px");
		$("#dk5-listbox").css("width","120px");
		$("li[id*=dk5-]").css("width","100px");
		$("#dk6-combobox").css("width","120px");
		$("#dk6-listbox").css("width","120px");
		$("li[id*=dk6-]").css("width","100px");
*/
</script>