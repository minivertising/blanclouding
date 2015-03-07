<?php
include_once "config.php";

switch ($_REQUEST['exec'])
{
	case "insert_event" :
		$mb_name		= $_REQUEST['mb_name'];
		$mb_phone1	= $_REQUEST['mb_phone1'];
		$mb_phone2	= $_REQUEST['mb_phone2'];
		$mb_phone3	= $_REQUEST['mb_phone3'];
		$shop			= $_REQUEST['shop'];
		$mb_phone = $mb_phone1."-".$mb_phone2."-".$mb_phone3;
		$serialNumber	= BC_SerialNumber();

		$query 		= "INSERT INTO ".$_gl['member_info_table']."(mb_ipaddr, mb_phone, shop_idx, mb_regdate, mb_gubun, mb_serialnumber) values('".$_SERVER['REMOTE_ADDR']."','".$mb_phone."','".$shop."','".date("Y-m-d H:i:s")."','".$gubun."','".$serialNumber."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;
	break;

	case "select_address" :
		$shop_idx	= $_REQUEST['shop_idx'];

		$query 		= "SELECT * FROM ".$_gl['shop_info_table']." WHERE idx='".$shop_idx."'";
		$result 	= mysqli_query($my_db, $query);
		$info		= mysqli_fetch_array($result);

		echo $info['shop_addr'];
	break;

	case "insert_share_info" :
		$media	= $_REQUEST['media'];

		$query 		= "INSERT INTO ".$_gl['share_info_table']."(sns_media, sns_ipaddr, sns_gubun, sns_regdate) values('".$media."','".$_SERVER['REMOTE_ADDR']."','".$gubun."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;

	break;

	case "create_surl" :
		print_r($_REQUEST);
	break;
}

?>