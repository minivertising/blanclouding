<?
    include_once "./header.php";
?>
<ul id="myMenu" style="position:absolute;z-index:100000">
    <li data-menuanchor="firstPage" class="active"><a href="#firstPage" data-mfp-src="#input_div" class="popup-with-zoom-anim" onclick="open_event()">이벤트 참여</a></li>
    <li data-menuanchor="secondPage"><a href="#firstPage" data-mfp-src="#gift_div" class="popup-with-zoom-anim" onclick="open_gift()">선물 안내</a></li>
    <li data-menuanchor="thirdPage"><a href="#secondPage">BlanClouding이란?</a></li>
    <li data-menuanchor="fourthPage"><a href="#firstPage" id="video_control">영상보기</a></li>
</ul>
<div class="section active" id="section0">
    <iframe width="1280" height="720" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
    <div class="cover_image" id="cover_image"><img src="./images/Desert_test.jpg"></div>
    <a href="#" onclick="sns_share('facebook')">페이스북 공유</a>
    <a href="#" onclick="sns_share('twitter')">트위터 공유</a>
  </div>
    <div class="section" id="section1">
      <div id="footer">
        <a href="#">선물 안내</a>
        <a href="#firstPage">이벤트보기</a>
        <a href="#">영상보기</a>
      </div>
    </div>

      <!-------------------------- 이벤트 응모 DIV -------------------------->
      <div id="input_div" style="position:absolute;background:white;border: 1px solid black;height:200px;top:20%;left:30%;display:none">
        이름 : <input type="text" name="mb_name" id="mb_name"><br />
        전화번호 : <input type="text" name="mb_phone1" id="mb_phone1">-<input type="text" name="mb_phone2" id="mb_phone2">-<input type="text" name="mb_phone3" id="mb_phone3"><br />
        <a href="#">자세히보기</a><br />
        <a href="#" onclick="open_look()">자세히보기</a><br />
        받으실매장
        <select name="addr1" id="addr1" onchange="addr_change(this.value)">
          <option value="">선택하세요</option>
<?
    // 주소 쿼리
    $query         = "SELECT * FROM ".$_gl['addr_info_table']." WHERE addr_level='1'";
    $result     = mysqli_query($my_db, $query);

    while($addr1_data = @mysqli_fetch_array($result))
    {
?>
          <option value="<?=$addr1_data['addr_sido']?>"><?=$addr1_data['addr_sido']?></option>
<?
    }
?>
        </select>
        <select name="addr2" id="addr2" onchange="shop_change(this.value)">
          <option value="">선택하세요</option>
        </select>
        <select name="shop" id="shop">
          <option value="">선택하세요</option>
        </select>
        <a href="#" onclick="show_map()">가까운 매장 찾기</a>
        <br />
        <input type="checkbox" name="privacy_agree" id="privacy_agree"><label for="privacy_agree">개인정보활용, 개인정보취급위탁동의, 광고성 정보 전송 동의</label><br />
        <a href="#" onclick="chk_input()">신청완료</a>
        <a href="#" onclick="close_input()">닫기</a>
      </div>
      <!-------------------------- 이벤트 응모 DIV -------------------------->
      <!-------------------------- 선물 확인 DIV -------------------------->
      <div id="gift_div" style="position:absolute;background:green;height:200px;top:20%;left:30%;display:none">
        추첨을 통해 1만분께 BLANCLOUDING선물 (10ml)과<br />
        클라우딩 제품 구매시 5,000원 할인 쿠폰 증정<br />
        <a href="#" onclick="close_gift()">확인</a>
      </div>
      <!-------------------------- 선물 확인 DIV -------------------------->
      <!-------------------------- 지도 DIV -------------------------->
      <div id="map_div" style="position:absolute;background:black;width:1000px;height:500px;top:20%;left:30%;display:none">
        <a href="#" onclick="close_map()">닫기</a>
        <div id="map_area" style="width:100%;height:90%;margin-top:5%"></div>
      </div>
      <!-------------------------- 지도 DIV -------------------------->
      <!-------------------------- 자세히보기 DIV ----------------------->
      <div id="look_div"
      style="position:absolute;background:green;width:700px;height:500px;top:20%;left:30%;display:none">
      개인정보 수집 · 이용에 대한 동의

(주)LG생활건강(이하 "LG생활건강")는 이벤트 진행을 위한 개인정보 수집 이용을 위하여 다음과 같이 귀하의 동의를 받고자 합니다.</br>
LG생활건강은 보다 원활한 서비스 제공을 위하여 고객의 정보를 수집하고 있습니다. 고객의 정보는 이벤트 서비스에 참여하기 위한 필수정보로서 </br>
제공을 원하지 않을 경우 수집하지 않으며, 동의 거부 시 이벤트 참여에 제한을 받을 수 있습니다.</br>


(주)LG생활건강은 본 이벤트를 위하여 다음과 같이 고객님의 개인정보를 수집 및 이용합니다.</br>
>수집 · 이용 목적: 이벤트 혜택을 제공하기 위한 정보 전달: 이벤트 혜택 이용에 따른 본인확인, </br>고지사항 전달: 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계> </br>수집 필수 항목 : 이름, 연락처> </br>보유/이용기간 : 이벤트 종료 후 3개월까지 (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)</br>


개인정보의 취급 위탁 동의</br>

(주)LG생활건강은 서비스 향상과 원활한 진행을 위하여 개인정보 처리 업무를 외부 전문 업체에 위탁하여 처리하고 있습니다.</br>
고객은 아래와 같은 개인정보 취급 위탁에 동의하지 않을 권리가 있으며 동의 거부시 이벤트 참여에 제한을 받을 수 있습니다.</br>
취급위탁업체 / 위탁업무 및 이용목적 : 미니버타이징 (주) / 이벤트 대행 및 운영></br> 보유 및 이용기간 : 이벤트 종료 후 3개월까지 (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)</br>

광고성 정보 전송 동의</br>

(주)LG생활건강은 수집된 개인정보를 이용하여 각종 서비스·상품 및 타사 서비스와 결합된 상품에 대하여 홍보, 가입권유, 프로모션, 이벤트 목적으로 </br>
본인에게 정보/광고를 전화, DM, SMS, MMS, 이메일, 우편 등을 통해 전달합니다.</br>
(주)LG생활건강은 마케팅 / 홍보를 위하여 고객의 개인정보를 이용에 동의를 구하며, 동의 거부 시에도 이벤트 참여는 가능하나 </br>
할인 및 이벤트 정보 안내 등 서비스는 제한될 수 있습니다.</br>

      <a href="#" onclick="close_look()">닫기</a>
      <!-------------------------- 자세히보기 DIV ----------------------->

</body>
</html>
  <script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=4079f466534bbd570c0fd254a4c2954e&libraries=services"></script>
    <script type="text/javascript">
    // 유튜브 반복 재생
    var controllable_player,start, 
    statechange = function(e){
        controllable_player.playVideo(); 
    };
    function onYouTubeIframeAPIReady() {
        controllable_player = new YT.Player('ytplayer', {}); 
    }

    if(window.opera){
        addEventListener('load', onYouTubeIframeAPIReady, false);
    }
    setTimeout(function(){
        if (typeof(controllable_player) == 'undefined'){
            onYouTubeIframeAPIReady();
        }
    }, 3000)

        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                navigation: {
                    'position': 'right',
                       'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Pgae 4']
                   },
                menu: '#myMenu',
                loopBottom: true,
                verticalCentered: true,
                css3: true,
                scrollingSpeed: 1000
            });


            $("#video_control").click(function(){
                controllable_player.seekTo(0);
                controllable_player.playVideo(); 
            });
        });
    </script>
