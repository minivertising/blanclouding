<?
	include_once "config.php";

	//unset($media);
	$media		= $_REQUEST['media'];
	$goods_idx	= $_REQUEST['goods_idx'];

	$_SESSION['ss_media'] = $media;

	BC_InsertTrackingInfo($media, $gubun);

	if($gubun == "MOBILE")
	{
		Header("Location:http://www.thefaceshopclouding.co.kr/MOBILE/index.php");
		exit;
	}else{
		Header("Location:http://www.thefaceshopclouding.co.kr/PC/index.php");
		exit;
	}

?>
