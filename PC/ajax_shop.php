<?
	include_once "../include/global.php"; 			//변수정보
	include_once "../include/function.php"; 		//함수정보
	include_once "../include/dbi.php"; 			//DB 연결정보
	mysqli_query ($my_db,"set names utf8");

	$addr2_idx = $_REQUEST['addr2_idx'];

	// 주소 쿼리
	$query 		= "SELECT * FROM ".$_gl['shop_info_table']." WHERE addr_idx='".$addr2_idx."'";
	$result 	= mysqli_query($my_db, $query);
	$shop_cnt	= @mysqli_num_rows($result);
	if ($shop_cnt	> 0)
	{

?>
              <li class="input_txt store" id="sel_shop">
                <select name="shop" id="shop"style="width:120px;height:30px; float:left;">
                  <option value="">선택하세요</option>
<?
		while($shop_data = @mysqli_fetch_array($result))
		{
?>
                  <option value="<?=$shop_data['idx']?>"><?=$shop_data['shop_name']?></option>
<?
		}
?>
                </select>
              </li>
<?
	}else{
		echo "N";
	}
?>