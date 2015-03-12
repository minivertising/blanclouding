<?
	$flag	= $_REQUEST['flag'];
	if ($flag == "sigungu")
		$map_addr	= $_REQUEST["si"]." ".$_REQUEST["gun"];
	else
		$map_addr	= $_REQUEST["addr"];
?>


<div id="map" style="width:100%;height:100%;"></div>
<?
	if ($flag == "sigungu")
	{
?>
<script type="text/javascript">
// 마커를 클릭하면 장소명을 표출할 인포윈도우 입니다
var infowindow = new daum.maps.InfoWindow({zIndex:1});

var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = {
        center: new daum.maps.LatLng(37.53539, 126.99366), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };  

// 지도를 생성합니다    
var map = new daum.maps.Map(mapContainer, mapOption); 


// 장소 검색 객체를 생성합니다
var ps = new daum.maps.services.Places(); 

// 키워드로 장소를 검색합니다
ps.keywordSearch('<?= $map_addr ?> 더페이스샵', placesSearchCB); 

// 키워드 검색 완료 시 호출되는 콜백함수 입니다
function placesSearchCB (status, data, pagination) {
    if (status === daum.maps.services.Status.OK) {

        // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해
        // LatLngBounds 객체에 좌표를 추가합니다
        var bounds = new daum.maps.LatLngBounds();

        for (var i=0; i<data.places.length; i++) {
            displayMarker(data.places[i]);    
            bounds.extend(new daum.maps.LatLng(data.places[i].latitude, data.places[i].longitude));
        }       

        // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
        map.setBounds(bounds);
    } 
}

// 지도에 마커를 표시하는 함수입니다
function displayMarker(place) {
    var imageSrc = 'http://www.thefaceshopclouding.co.kr/PC/images/map_chk.png', // 마커이미지의 주소입니다    
    imageSize = new daum.maps.Size(100, 41), // 마커이미지의 크기입니다
    imageOption = {offset: new daum.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.
      
// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
	var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOption),
    markerPosition = new daum.maps.LatLng(37.54699, 127.09598); // 마커가 표시될 위치입니다
    // 마커를 생성하고 지도에 표시합니다
    var marker = new daum.maps.Marker({
        map: map,
        position: new daum.maps.LatLng(place.latitude, place.longitude),
		image: markerImage
    });

}
</script>
<?
	}else{
?>
<script type="text/javascript">
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = {
        center: new daum.maps.LatLng(37.537187, 127.005476), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };  

// 지도를 생성합니다    
var map = new daum.maps.Map(mapContainer, mapOption); 

// 주소-좌표 변환 객체를 생성합니다
var geocoder = new daum.maps.services.Geocoder();

// 주소로 좌표를 검색합니다
geocoder.addr2coord('<?=$map_addr?>', function(status, result) {

    // 정상적으로 검색이 완료됐으면 
     if (status === daum.maps.services.Status.OK) {

        var coords = new daum.maps.LatLng(result.addr[0].lat, result.addr[0].lng);

		displayMarker(result.addr[0].lat, result.addr[0].lng);
		map.setCenter(coords);
    } 
});   

// 지도에 마커를 표시하는 함수입니다
function displayMarker(lat, lng) {
    var imageSrc = 'http://www.thefaceshopclouding.co.kr/PC/images/map_chk.png', // 마커이미지의 주소입니다    
    imageSize = new daum.maps.Size(100, 41), // 마커이미지의 크기입니다
    imageOption = {offset: new daum.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.
      
// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
	var markerImage = new daum.maps.MarkerImage(imageSrc, imageSize, imageOption),
    markerPosition = new daum.maps.LatLng(lat, lng); // 마커가 표시될 위치입니다
    // 마커를 생성하고 지도에 표시합니다
    var marker = new daum.maps.Marker({
        map: map,
        position: new daum.maps.LatLng(lat, lng),
		image: markerImage
    });

}

</script>
<?
	}
?>

