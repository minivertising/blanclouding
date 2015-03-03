<?
	include_once "./header.php";
?>
    이름 : <input type="text" name="mb_name" id="mb_name"><br />
    전화번호 : <input type="text" name="mb_phone1" id="mb_phone1">-<input type="text" name="mb_phone2" id="mb_phone2">-<input type="text" name="mb_phone3" id="mb_phone3"><br />
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
    </select><br />
	<input type="checkbox" name="privacy_agree" id="privacy_agree"><label for="privacy_agree">개인정보활용, 개인정보취급위탁동의, 광고성 정보 전송 동의</label><br />
	<a href="#" onclick="chk_input()">신청완료</a>
  </body>
</html>
