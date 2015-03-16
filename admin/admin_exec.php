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

		case "send_sms" :
			$phone			= $_REQUEST['phone'];
			$phone_arr		= explode("-",$phone);
			$cel				= $phone_arr[0].$phone_arr[1].$phone_arr[2];

			/*
			$httpmethod = "POST";
			$url = "http://api.openapi.io/ppurio_test/1/message_test/lms/minivertising";
			$clientKey = "MS0xMzY1NjY2MTAyNDk0LTA2MWE4ZDgyLTZhZmMtNGU5OS05YThkLTgyNmFmYzVlOTkzZQ==";
			$contentType = "Content-Type: application/x-www-form-urlencoded";
			*/
			$httpmethod = "POST";
			$url = "http://api.openapi.io/ppurio/1/message/lms/minivertising";
			$clientKey = "MTAyMC0xMzg3MzUwNzE3NTQ3LWNlMTU4OTRiLTc4MGItNDQ4MS05NTg5LTRiNzgwYjM0ODEyYw==";
			$contentType = "Content-Type: application/x-www-form-urlencoded";

			$response = sendRequest($httpmethod, $url, $parameters, $clientKey, $contentType, $phone);

			//echo("<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />");
			$json_data = json_decode($response, true);

			//print_r($json_data);
			/*
			받아온 결과값을 DB에 저장 및 Variation
			*/
			$query = "INSERT INTO ".$_gl['sms_info_table']."(send_phone, send_status, cmid, send_regdate) values('".$phone."','".$json_data['result_code']."','".$json_data['cmid']."','".date("Y-m-d H:i:s")."')";
			$result 		= mysqli_query($my_db, $query);

			$query2 = "UPDATE ".$_gl['member_info_table']." SET mb_lms='Y' WHERE mb_phone='".$phone."'";
			$result2 		= mysqli_query($my_db, $query2);


			$flag = "N";
			if ($result)
				echo $flag = "Y";
			else
				echo $flag = "N";
		break;
	}

			function sendRequest($httpMethod, $url, $parameters, $clientKey, $contentType, $phone) {

					//create basic authentication header
					$headerValue = $clientKey;
					$headers = array("x-waple-authorization:" . $headerValue);

					$params = array(
						'send_time' => '', 
						'send_phone' => '0316897530', 
						'dest_phone' => $phone, 
						//'dest_phone' => '01099111804', 
						'send_name' => '', 
						'dest_name' => '', 
						'subject' => '더페이스샵 - 하얀 수분 크림 쿠폰',
						'msg_body' => "
[하얀 수분 크림 당첨!!]
블란클라우딩 KIT
당첨을 축하드립니다.

하얀 수분 크림을
가장 먼저 만나볼 수 있는 기회!

쿠폰은 94시간 후 사라집니다!
선물이 사라지기 전 더페이스샵 매장으로 방문해주세요!

블란 클라우딩 10ML KIT쿠폰!
쿠폰받기▼
http://goo.gl/WGOUQN

* 응모시 지정하신 더페이스샵 매장에서만 사용 가능합니다.
* 매장 영업 시간에만 교환이 가능합니다.
* '쿠폰 사용 버튼'은 직원 확인용으로 개인이 누를시 경품 교환이 불가합니다.
* 불법적인 방법으로 이벤트에 참여하신 고객님은 이벤트 당첨 대상에서 제외되며, 당첨 이후에도 당첨이 취소될 수 있습니다.
"
					);

					//curl initialization
					$curl = curl_init();

					//create request url
					//$url = $url."?".$parameters;

					curl_setopt ($curl, CURLOPT_URL , $url);
					curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt ($curl, CURLOPT_HTTPHEADER, $headers);
					curl_setopt ($curl, CURLINFO_HEADER_OUT, true);
					curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, false);
					
					curl_setopt($curl, CURLOPT_POST, 1);
					curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
					curl_setopt($curl, CURLOPT_TIMEOUT, 30);

					$response = curl_exec($curl);

					$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
					$responseHeaders = curl_getinfo($curl, CURLINFO_HEADER_OUT);


					curl_close($curl);

					return $response;
			}

?>