<?
	include_once "../include/global.php"; 			//변수정보
	include_once "../include/function.php"; 		//함수정보
	include_once "../include/dbi.php"; 			//DB 연결정보
	mysqli_query ($my_db,"set names utf8");

	$addr2_idx = $_REQUEST['addr2_idx'];
?>
    <select name="shop" id="shop" onchange="shop_change(this.value)">
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
