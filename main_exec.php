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

		$query 		= "INSERT INTO ".$_gl['member_info_table']."(mb_ipaddr, mb_phone, shop_idx, mb_regdate) values('".$_SERVER['REMOTE_ADDR']."','".$mb_phone."','".$shop."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;
	break;
}

?>