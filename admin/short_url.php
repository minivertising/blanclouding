<?
	$bitly_login = "kyhfan@gmail.com";
	$bitly_api_key = "80bff86686590fa91452af2f36c1cdfa923463a1";
	$long_url = "www.naver.com";
	$bitly_url = "http://api.bit.ly/v3/shorten";
	$request_url = $bitly_url . "?login=" . $bitly_login . "&apiKey=" . $bitly_api_key . "&longUrl=" . urlencode($long_url);
	$url = "https://api-ssl.bitly.com/v3/shorten?access_token=2b19a46fe91ec689eac5abf76352584176df2650&longUrl=http://www.naver.com&format=json";
	$response = file_get_contents_curl($request_url);
	$response = json_decode($response);
	$short_url = $response->data->url;

print_r($short_url);
	function file_get_contents_curl($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url); 
		$data = curl_exec($ch);
		curl_close($ch); 
		return $data;
	}
?>