<?php
	// 설정파일
	include_once "../config.php";

	switch ($_REQUEST['exec'])
	{
		case "login" :
			$mb_id = $_REQUEST['mb_id'];
			$mb_pw = $_REQUEST['mb_pw'];

			$query = "SELECT * FROM ".$_gl['member_info_table']." WHERE mb_ipaddr='".$mb_id."' AND mb_phone='".$mb_pw."'";
			$result 		= mysqli_query($my_db, $query);
			$member_info	= mysqli_fetch_array($result);
			if ($member_info)
			{
				// 회원아이디 세션 생성
				$_SESSION['ss_mb_name'] = $member_info['mb_ipaddr'];
				echo "<script>location.href='./entry_list.php';</script>";
			}else{
				echo "<script>alert('로그인에 실패하였습니다.');</script>";
				echo "<script>history.back();</script>";
			}
		break;

		case "logout" :
			session_destroy();
			echo "<script>location.href='./index.php';</script>";
		break;
	}
?>