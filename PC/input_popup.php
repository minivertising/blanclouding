<?
	include_once "./header.php";
?>
	<script>
	function show_map(){
		var si	= $("#addr1 option:selected").text();
		var gun	= $("#addr2 option:selected").text();

		$.ajax({
			type:"POST",
			data:{
				"si"     : si,
				"gun"    : gun
			},
			url: "./map_ajax.php",
			success: function(response){
				$("#map_area").html(response);
			}
		});
	}
	  </script>
    이름 : <input type="text" name="mb_name" id="mb_name" onkeyup="Check_Hangul(this)"><br />
    전화번호 :
	<select name="mb_phone1" id="mb_phone1">
		<option value="">전화번호</option>
	    <option value="010">010</option>
	    <option value="011">011</option>
	    <option value="016">016</option>
	    <option value="017">017</option>
	    <option value="018">018</option>
	    <option value="019">019</option>
	</select>
	-<input type="text" name="mb_phone2" id="mb_phone2" onkeyup="Check_Numer(this)" maxlength="4">-<input type="text" name="mb_phone3" id="mb_phone3" onkeyup="only_num(this)" maxlength="4"><br />
    <a href="#">자세히보기</a><br />
    받으실매장
    <select name="addr1" id="addr1" onchange="addr_change(this.value)">
      <option value="">선택하세요</option>
<?
	// 주소 쿼리
	$query 		= "SELECT * FROM ".$_gl['addr_info_table']." WHERE addr_level='1'";
	$result 	= mysqli_query($my_db, $query);

	while($addr1_data = @mysqli_fetch_array($result))
	{
?>
      <option value="<?=$addr1_data['addr_sido']?>"><?=$addr1_data['addr_sido']?></option>
<?
	}
?>
    </select>
    <select name="addr2" id="addr2" onchange="shop_change(this.value)">
      <option value="">선택하세요</option>
    </select>
    <select name="shop" id="shop">
      <option value="">선택하세요</option>
    </select>
	<input type="button" value="찾기" onclick="show_map()">
	<br />
	<input type="checkbox" name="privacy_agree" id="privacy_agree"><label for="privacy_agree">개인정보활용, 개인정보취급위탁동의, 광고성 정보 전송 동의</label><br />
	<a href="#" onclick="chk_input()">신청완료</a>
	<div id="map_area" style="width:100%;height:30%">
	</div>
  </body>
  <script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=4079f466534bbd570c0fd254a4c2954e&libraries=services"></script>

</html>
  