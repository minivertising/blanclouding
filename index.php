<?
	include_once "config.php";

	//unset($media);
	$media	= $_REQUEST['media'];
	$pg		= $_REQUEST['pg'];

	$_SESSION['ss_media'] = $media;
$pg
exit;
	BC_InsertTrackingInfo($media, $gubun);
	if($gubun == "MOBILE")
	{
		if ($pg == "movie1")
			Header("Location:http://www.thefaceshopclouding.co.kr/MOBILE/movie1.php");
		else if ($pg == "movie2")
			Header("Location:http://www.thefaceshopclouding.co.kr/MOBILE/movie2.php");
		else
			Header("Location:http://www.thefaceshopclouding.co.kr/MOBILE/index.php");
		exit;
	}else{
		if ($pg == "movie1")
			Header("Location:http://www.thefaceshopclouding.co.kr/PC/movie1.php");
		else if ($pg == "movie2")
			Header("Location:http://www.thefaceshopclouding.co.kr/PC/movie2.php");
		else
			Header("Location:http://www.thefaceshopclouding.co.kr/PC/index.php");
		exit;
	}

?>
