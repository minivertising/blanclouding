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

		case "all_send_sms" :
			$query = "SELECT mb_phone, mb_s_url, mb_nansu FROM ".$_gl['member_info_table']." WHERE mb_winner='Y' AND mb_use='N' AND mb_s_url<>'' AND mb_phone='010-3051-2171'";
			//$query = "SELECT mb_phone, mb_s_url, mb_nansu FROM ".$_gl['member_info_table']." WHERE mb_winner='Y' AND mb_use='N' AND mb_s_url<>''";
			$result 		= mysqli_query($my_db, $query);

			$httpmethod = "POST";
			$url = "http://api.openapi.io/ppurio/1/message/lms/minivertising";
			$clientKey = "MTAyMC0xMzg3MzUwNzE3NTQ3LWNlMTU4OTRiLTc4MGItNDQ4MS05NTg5LTRiNzgwYjM0ODEyYw==";
			$contentType = "Content-Type: application/x-www-form-urlencoded";

			while ($data = @mysqli_fetch_array($result))
			{
				$phone			= $data['mb_phone'];
				$s_url				= $data['mb_s_url'];
				$nansu			= $data['mb_nansu'];

				$response = sendRequest($httpmethod, $url, $parameters, $clientKey, $contentType, $phone, $s_url, $nansu);

				echo("<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />");
				$json_data = json_decode($response, true);

				//print_r($json_data);
				/*
				받아온 결과값을 DB에 저장 및 Variation
				*/
				$query3 = "INSERT INTO ".$_gl['sms_info_table']."(send_phone, send_status, cmid, send_regdate) values('".$phone."','".$json_data['result_code']."','".$json_data['cmid']."','".date("Y-m-d H:i:s")."')";
				$result3 		= mysqli_query($my_db, $query3);

				$query2 = "UPDATE ".$_gl['member_info_table']." SET mb_lms='Y' WHERE mb_phone='".$phone."'";
				$result2 		= mysqli_query($my_db, $query2);
			}

			$flag = "N";
			if ($result)
				echo $flag = "Y";
			else
				echo $flag = "N";
		break;

		case "insert_surl" :
			$flag = "N";
			//$query = "SELECT mb_serialnumber FROM ".$_gl['member_info_table']." WHERE mb_winner='Y' AND mb_use='N' AND mb_s_url=''";
			$query = "SELECT mb_serialnumber FROM ".$_gl['member_info_table']." WHERE mb_winner='Y' AND mb_use='N' AND mb_s_url=''";
			$result 		= mysqli_query($my_db, $query);
			while ($data = mysqli_fetch_array($result))
			{
				$longurl	= "http://www.thefaceshopclouding.co.kr/MOBILE/winner_coupon.php?serialnumber=".$data['mb_serialnumber'];
				//$short_url = get_bitly_short_url($longurl,'kyhfan','R_11ea80ffc2bf4bbe8c848b761e71df8a');
				//$short_url = get_bitly_short_url($longurl,'kty0427','R_08ecf5e89640457ea47d238eeab549b2');
				//$short_url = get_bitly_short_url($longurl,'kyhfan2','R_f7547b30052049679ee65de54c782e20');
				//$short_url = get_bitly_short_url($longurl,'kyhfan3','R_426adbe491a44aee82bd938e9c7f032e');
				//$short_url = get_bitly_short_url($longurl,'kimty87','R_9f0f2cd364744ed09914e370c4c069a0');
				//$short_url = get_bitly_short_url($longurl,'kty04272','R_3cf206392a9d4846ba1701c2570167df');
				//$short_url = get_bitly_short_url($longurl,'kty04271','R_62e59c001f4f4e24bac474da50cc3c54');
				//$short_url = get_bitly_short_url($longurl,'kty04273','R_08d232ecc56543be9918b3894f6f4188');
				//$short_url = get_bitly_short_url($longurl,'kty04274','R_c482cbbb34d647519278706200260098');
				//$short_url = get_bitly_short_url($longurl,'kyhfan4','R_6e2b8aac3f514271a5901cf546f9540a');
				//$short_url = get_bitly_short_url($longurl,'kyhfan5','R_089bb97a7ff8481da0e7b1600c6b6c0f');
				//$short_url = get_bitly_short_url($longurl,'kty04275','R_8fa80ea354b74ce681f028394d803875');
				//$short_url = get_bitly_short_url($longurl,'kty04276','R_e73daafc213d4d44b711ddfc45bde450');



				if ($short_url == "RATE_LIMIT_EXCEEDED"){
					$flag	= "F";
					echo $flag;
					exit;
				}
				$query2 = "UPDATE ".$_gl['member_info_table']." SET mb_s_url='".$short_url."' WHERE mb_serialnumber='".$data['mb_serialnumber']."'";
				$result2 		= mysqli_query($my_db, $query2);
			}

			if ($result)
				echo $flag = "Y";
			else
				echo $flag = "N";
		break;

		case "sel_winner" :
			$query = "SELECT * FROM ".$_gl['shop_info_table']."";
			$result 		= mysqli_query($my_db, $query);
			while ($data = mysqli_fetch_array($result))
			{
				unset($winner_data);
				$query2 = "SELECT * FROM ".$_gl['member_info_table']." WHERE shop_idx='".$data['idx']."'";
				$result2 		= mysqli_query($my_db, $query2);
				while ($data2 = mysqli_fetch_array($result2))
				{
					$winner_data[]	= $data2['idx'];
				}
				shuffle($winner_data);
				for ( $i = 0; $i < $data['req_cnt'];$i++)
				{
					$query3 = "UPDATE ".$_gl['member_info_table']." SET mb_winner='Y' WHERE idx='".$winner_data[$i]."'";
					$result3 		= mysqli_query($my_db, $query3);
					//print_r($query3);
				}

				if ($result3)
					echo "Y";
				else
					echo "N";
			}
		break;

		case "insert_nansu" :
			$query = "SELECT * FROM nansu_info";
			$result 		= mysqli_query($my_db, $query);

			while ($data = mysqli_fetch_array($result))
			{
				$nansu_data[]	= $data['nansu_num'];
			}

			$query2 = "SELECT * FROM ".$_gl['member_info_table']." WHERE mb_winner='Y'";
			$result2 		= mysqli_query($my_db, $query2);

			$i = 0;
			while ($data2 = mysqli_fetch_array($result2))
			{
				$query3 = "UPDATE ".$_gl['member_info_table']." SET mb_nansu='".$nansu_data[$i]."' WHERE idx='".$data2['idx']."'";
				$result3 		= mysqli_query($my_db, $query3);
				$i++;
			}

			if ($result3)
				echo "Y";
			else
				echo "N";

		break;
	}

	function sendRequest($httpMethod, $url, $parameters, $clientKey, $contentType, $phone, $s_url, $nansu) {

		//create basic authentication header
		$headerValue = $clientKey;
		$headers = array("x-waple-authorization:" . $headerValue);

		$params = array(
			'send_time' => '', 
			'send_phone' => '0316897530', 
			//'dest_phone' => $phone, 
			'dest_phone' => '01030512171', 
			//'dest_phone' => '01099111804', 
			//'dest_phone' => '01030885731', 
			//'dest_phone' => '01030033965', 
			'send_name' => '', 
			'dest_name' => '', 
			'subject' => '더페이스샵 - 하얀 수분 크림 쿠폰',
			'msg_body' => "
[더페이스샵_하얀수분크림]
♥ 1만명 체험Kit 축! 당첨 ♥
아래 URL을 클릭하시면 모바일 쿠폰 페이지 확인이 가능합니다.
선택하신 매장에서 쿠폰을 제시하고 하얗고 촉촉한 블란클라우딩 하얀수분크림 10ml로 교환하세요!

▶ 하얀 수분 크림 10ml Kit 받기:
".$s_url."
▶ 교환기간 : 3/19 ~ 3/22

* 직원확인용 버튼 클릭시 제품교환이 불가합니다.
* 매장은 신청 시 선택한 매장만 가능하며, 변경이 불가능합니다.
* 불법적인 방법으로 이벤트에 참여하신 고객님은 이벤트 당첨 대상에서 제외되며, 당첨 이후에도 당첨이 취소될 수 있습니다.

★★ 추가 혜택
체험Kit에 당첨된 1만분께만 드리는 혜택! 하얀 수분 크림 구매 시 5,000원을 할인해드립니다.
▶ 쿠폰번호
".$nansu."
▶ 쿠폰 사용기간 : 3/19 ~ 3/31

* 할인쿠폰은 면세점을 제외한 전국매장에서 사용가능(단, 이마트 매장은 5,000원 적립)
* 다른 행사와 중복 적용불가능(단, 구름쿠션 증정행사와 중복 가능)
* 오프라인 매장에서만 사용가능.
* 쿠폰 사용문의 
031-689-7506
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

	function sendRequest2($httpMethod, $url, $parameters, $clientKey, $contentType, $phone, $s_url, $nansu) {

		
		return $nansu;
	}


	/* returns the shortened url */
	function get_bitly_short_url($url,$login,$appkey,$format='txt') {
		$connectURL = 'http://api.bit.ly/v3/shorten?login='.$login.'&apiKey='.$appkey.'&uri='.urlencode($url).'&format='.$format;
		return curl_get_result($connectURL);
	}

	/* returns expanded url */
	function get_bitly_long_url($url,$login,$appkey,$format='txt') {
		$connectURL = 'http://api.bit.ly/v3/expand?login='.$login.'&apiKey='.$appkey.'&shortUrl='.urlencode($url).'&format='.$format;
		return curl_get_result($connectURL);
	}

	/* returns a result form url */
	function curl_get_result($url) {
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}


?>