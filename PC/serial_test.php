<?
	include_once "../config.php";
	$sn = BC_SerialNumber();
	//print_r($sn);

	$query = "SELECT serial FROM varidation";
	$result 		= mysqli_query($my_db, $query);
	$j = 0;
	while ($data = mysqli_fetch_array($result))
	{
		$query2		= "SELECT * FROM member_info WHERE mb_serialnumber='".$data['serial']."'";
		$result2 		= mysqli_query($my_db, $query2);
		$i = 0;
		while ($data2 = mysqli_fetch_array($result2))
		{
			$new_serial	= $data2['mb_serialnumber'].$i;
			$query3		= "UPDATE member_info SET mb_serialnumber='".$new_serial."' WHERE idx='".$data2['idx']."'";
			//$result3 		= mysqli_query($my_db, $query);
		print_r($query3.";");
		print_r("<br />");

			$i++;
		}
		$j++;
	}

	print_r("완료!!");

?>