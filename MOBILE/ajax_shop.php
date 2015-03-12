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
              <select name="shop" id="shop" style=" border: 0 !important; -webkit-appearance: none; -moz-appearance: none;
					 background: url('http://www.thefaceshopclouding.co.kr/MOBILE/img/popup/arrow.png') no-repeat;  text-indent: 0.01px; 
				     text-overflow: ''; background-color:#d4e5ee; color:#000000; -webkit-border-radius: 0;background-position: 85px 15px; background-size:10px;"">
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
<?
	}else{
		echo "N";
	}
?>