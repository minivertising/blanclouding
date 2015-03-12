<?
	include_once "../include/global.php"; 			//변수정보
	include_once "../include/function.php"; 		//함수정보
	include_once "../include/dbi.php"; 			//DB 연결정보
	mysqli_query ($my_db,"set names utf8");

	$addr1 = $_REQUEST['addr1'];
?>
                <div id="sel_addr2">
                  <select name="addr2" id="addr2" onchange="shop_change(this.value)" style=" border: 0 !important; -webkit-appearance: none; -moz-appearance: none;
					  background: url('http://www.thefaceshopclouding.co.kr/MOBILE/img/popup/arrow.png') no-repeat;  text-indent: 0.01px; 
					  text-overflow: ''; background-color:#d4e5ee; color:#000000; -webkit-border-radius: 0;background-position: 85px 15px;background-size:10px; background-margin:left 20px;" >
                    <option value="">선택하세요</option>
<?
	// 주소 쿼리
	$query 		= "SELECT * FROM ".$_gl['addr_info_table']." WHERE addr_sido='".$addr1."' AND addr_level='2'";
	$result 	= mysqli_query($my_db, $query);

	while($addr2_data = @mysqli_fetch_array($result))
	{
?>
      <option value="<?=$addr2_data['idx']?>"><?=$addr2_data['addr_sigungu']?></option>
<?
	}
?>
                  </select>
                </div>

<script type="text/javascript">
/*
		$( "#addr2" ).dropkick({
			mobile: true
		});

		$("#dk4-combobox").css("width","120px");
		$("ul[id*=dk4-]").css("width","120px");
		$("li[id*=dk4-]").css("width","100px");
*/
</script>