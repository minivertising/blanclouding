<?
	include_once "config.php";

	//unset($media);
	$media	= $_REQUEST['media'];
	$pg		= $_REQUEST['pg'];
	$kt_link	= $_REQUEST['kt_link'];

	$_SESSION['ss_media'] = $media;

	BC_InsertTrackingInfo($media, $gubun);

	if ($kt_link == "kt_link1")
	{
		Header("Location:http://youtu.be/XDpe5Trw-zs");
		exit;
	}else if ($kt_link == "kt_link2"){
		Header("Location:http://youtu.be/XDpe5Trw-zs");
		exit;
	}else if ($kt_link == "kt_link3"){
		Header("Location:http://youtu.be/XDpe5Trw-zs");
		exit;
	}else if ($kt_link == "kt_link4"){
		Header("Location:http://youtu.be/XDpe5Trw-zs");
		exit;
	}
	if($gubun == "MOBILE")
	{
		if ($pg == "movie1")
			Header("Location:http://www.thefaceshopclouding.co.kr/MOBILE/movie1.php");
		else if ($pg == "movie2")
			Header("Location:http://www.thefaceshopclouding.co.kr/MOBILE/movie2.php");
		else if ($pg == "movie3")
			Header("Location:http://www.thefaceshopclouding.co.kr/MOBILE/movie3.php");
		else if ($pg == "movie4")
			Header("Location:http://www.thefaceshopclouding.co.kr/MOBILE/movie4.php");
		else
			Header("Location:http://www.thefaceshopclouding.co.kr/MOBILE/index.php");
		exit;
	}else{
		if ($pg == "movie1")
			Header("Location:http://www.thefaceshopclouding.co.kr/PC/movie1.php");
		else if ($pg == "movie2")
			Header("Location:http://www.thefaceshopclouding.co.kr/PC/movie2.php");
		else if ($pg == "movie3")
			Header("Location:http://www.thefaceshopclouding.co.kr/PC/movie3.php");
		else if ($pg == "movie4")
			Header("Location:http://www.thefaceshopclouding.co.kr/PC/movie4.php");
		else
			Header("Location:http://www.thefaceshopclouding.co.kr/PC/index.php");
		exit;
	}

?>
