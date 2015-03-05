<?
	include_once "../config.php";

	$query		= "SELECT * FROM ".$_gl['member_info_table']."";
	$result		= mysqli_query($my_db, $query);

	while ($data = @mysqli_fetch_array($result))
	{
		echo "<script>location.href='https://api-ssl.bitly.com/v3/shorten?access_token=80bff86686590fa91452af2f36c1cdfa923463a1&longUrl=' + encodeURIComponent('http://www.thefaceshopclouding.co.kr/MOBILE/winner_coupon.php?user_id=".$data['idx']."')</script>";
	}
	//https://api-ssl.bitly.com/v3/shorten?access_token=2b19a46fe91ec689eac5abf76352584176df2650&longUrl=http%3A%2F%2Fexample.com%2Fpage%3Fparameter%3Dvalue%23anchor&format=json

?>