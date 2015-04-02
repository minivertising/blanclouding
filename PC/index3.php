<?
	include_once "./header2.php";
?>
<!--contents_wrap-->
<div class="contents_wrap">
<!--contents_wrap-->
<!--area1-->
  <div class="area1">
    <div class="icon_area">
      <a href="http://www.thefaceshopclouding.co.kr/PC/index.php" target="_blank"><img src="images/logo_blan.png" alt=""/></a>
    </div>
  <!--icon_area-->
  <!--icon_area-->
    <div class="icon_area2">
      <a href="http://www.thefaceshop.com/index.jsp" target="_blank"><img src="images/logo_tfs.png" alt=""/></a>
    </div>
  <!--icon_area-->
    <div >
      <a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim" style="background:none;outline: none;" onclick="start_api();">영상시청하기</a>
    </div>
  </div>

<!--area2-->
  <div class="area2_bg bg2" style="display:none">
    <div class="area4">
      <div class="product_group">
        <div class="product_area" id="pa_product">
          <ul class="thumb_list clearfix">
            <li>
              <a href="#" data-mfp-src="#movie_div1" class="popup-with-zoom-anim2" style="outline: none;" id="movie_link1"><img src="./images/thumb_1_open.png"></a>
            </li>
            <li>
              <!-- <a href="#" data-mfp-src="#movie_div2" class="popup-with-zoom-anim2" style="outline: none;" id="movie_link2"><img src="./images/thumb_2_close.png"></a> -->
              <a href="#" onclick="alert('곧 공개 됩니다.');return false;"><img src="./images/thumb_2_close.png" style="cursor:pointer"></a>
            </li>
            <li>
              <a href="#" data-mfp-src="#movie_div3" class="popup-with-zoom-anim2" style="outline: none;" id="movie_link3"><img src="./images/thumb_3_close.png"></a>
              <!-- <a href="#" onclick="alert('곧 공개 됩니다.');return false;"><img src="./images/thumb_3_close.png" style="cursor:pointer"></a> -->
            </li>
            <li>
              <!-- <a href="#" data-mfp-src="#movie_div4" class="popup-with-zoom-anim2" style="outline: none;" id="movie_link4"><img src="./images/thumb_4_close.png"></a> -->
              <a href="#" onclick="alert('곧 공개 됩니다.');return false;"><img src="./images/thumb_4_close.png" style="cursor:pointer"></a>
            </li>          
          </ul>
        </div>
      </div>
    </div>
  </div>
<!--area2-->


<!--area3-->
  <div class="area3_bg" style="display:none">
    <div class="area3">
      <div class="product_group">
        <div class="product_area">
          <!-- <a href="http://www.thefaceshop.com/product/tfs_prod_detail.jsp?pid=34100216&sid=01" target="_blank"><img src="images/btn_buy.png" width="333" height="80" alt=""/></a> -->
          <a href="http://www.thefaceshop.com/product/tfs_prod_detail.jsp?pid=34100216&sid=01" target="_blank" onclick="buy_cnt();"><img src="images/btn_buy.png" width="333" height="80" alt=""/></a>
        </div>
      </div>
    </div>
  </div>  
<!--area3-->

<!--footer-->
  <div class="footer" style="display:none">
    <img src="images/footer.png" alt=""/>
  </div>
<!--footer-->



<!--quickmenu-->
  <div class="quickmenu">
    <a href="#"><img src="images/btn_top.png" width="45" height="45" alt=""/></a>
  </div>
<!--quickmenu-->

</div>
<!--contents_wrap-->

<!----------------------------------------영상시청하기 DIV------------------------------------------>
  <div id="input_div" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:760px">
    <div class="p_big">
      <div class="block_close clearfix">
        <a href="#event_confirm1" class="btn_close popup-with-zoom-anim"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
      <div class="block_content product">
        <div class="inner step_1">
          <div class="title"><img src="images/popup/title_event_01.png" alt=""/></div>
          <div class="movie">
            <div class="tag"><img src="images/popup/step_01.png" width="177" height="24" alt=""/></div>
            <div class="player" style="height:347px"><iframe allowfullscreen="1" src="<?=$_gl['youtube_second']?>" frameborder="0" width="617" height="347" id="ytplayer" class="ytplayer" ></iframe></div>
          </div>
          <div class="btn_block" id="fake_btn">
            <a href="#"><img src="images/popup/btn_select_cloud.png" alt=""/></a>
          </div>
          <div class="btn_block" id="real_btn" style="display:none">
            <a href="#" data-mfp-src="#share_present" class="popup-with-zoom-anim"><img src="images/popup/btn_select_cloud.png" alt=""/></a>
          </div>
          <div class="txt_block">
            <img src="images/popup/txt_cloud_01.png" width="370" height="12" alt=""/>
          </div>
        </div><!--inner-->
      </div>
    </div><!--p_big-->
  </div>

  <!----------------------------------------영상시청하기 DIV------------------------------------------>


<!----------------------------------------쉐어 후 사은품 선택하기 DIV ---------------------------------->
  <!-- <div id="share_present" class="popup_wrap zoom-anim-dialog mfp-hide" style="background:white; width:400px">
    <div style="width:100%;height:20px">
      <a href="#" onclick="chk_share()" style="float:right">닫기</a>
    </div>
    <div>
      <label for="sel1">스위스</label><input type="radio" name="sel_present" id="sel1"  value="swiss" onclick="ins_selval(this.value)">
      <label for="sel2">크림</label><input type="radio" name="sel_present" id="sel2" value="cream" onclick="ins_selval(this.value)">
      <label for="sel3">제주도</label><input type="radio" name="sel_present" id="sel3" value="jeju" onclick="ins_selval(this.value)">
    </div>
    <div>
      <a href="#" onclick="sns_share('twitter');">트윗</a>
      <a href="#" onclick="sns_share('facebook');return false;">페북</a>
      <a href="#" onclick="sns_share('story');return false;">카스</a>
    </div>
    <div>
      <a href="#" onclick="chk_radio()">선택완료</a>
    </div>
  </div> -->

  <div id="share_present" class="popup_wrap zoom-anim-dialog mfp-hide">
  <input type="hidden" name="sel_present" id="sel_present">
    <div class="p_big">
      <div class="block_close clearfix">
        <a href="#event_confirm2" class="btn_close popup-with-zoom-anim"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
      <div class="block_content product">
        <div class="inner step_2">
          <div class="title"><img src="images/popup/title_event_02.png" alt=""/></div>
          <div class="ss2 clearfix">
            <div class="selec_01">
              <a href="#" onclick="sel_present('swiss')"><img src="images/popup/sel_c_01.png" alt="" id="p1"/></a>
            </div>
            <div class="selec_02">
              <a href="#" onclick="sel_present('cream')"><img src="images/popup/sel_c_02.png" alt="" id="p2"/></a>
            </div>
            <div class="selec_03">
              <a href="#" onclick="sel_present('namsan')"><img src="images/popup/sel_c_03.png" alt="" id="p3"/></a>
            </div>
          </div>
          <div class="ss3 clearfix">
            <div class="shr_01">
              <a href="#" onclick="sns_share('facebook');return false;"><img src="images/popup/ev_shr_fb.png" alt=""/></a>
            </div>
            <div class="shr_02">
              <a href="#" onclick="sns_share('story');return false;"><img src="images/popup/ev_shr_kt.png" alt=""/></a>
            </div>
            <div class="shr_03">
              <a href="#" onclick="sns_share('twitter');"><img src="images/popup/ev_shr_tw.png" alt=""/></a>
            </div>
          </div>                    
          <div class="btn_block">
            <a href="#" onclick="chk_radio()"><img src="images/popup/btn_cloud_comp.png" alt=""/></a>
          </div>
        </div><!--inner-->
      </div>
    </div><!--p_big-->
  </div>   

<!----------------------------------------쉐어 후 사은품 선택하기 DIV ---------------------------------->

<!---------------------------------------개인정보 입력 DIV ---------------------------------->
  <div id="input_info" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-top:-225px;margin-left:-275px;">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#event_confirm3" class="btn_close popup-with-zoom-anim"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
      <div class="block_content" style="background:white;">
        <div class="inner">
          <div class="title">
            <img src="images/popup/pop_input_title.png" />
          </div>
          <div class="input_block">
            <ul class="clearfix">
              <li class="t_name"><img src="images/popup/txt_name.png" alt=""/></li>
              <li class="input_txt"><input type="text" name="mb_name" id="mb_name"></li>
            </ul>
            <ul class="clearfix">
              <li class="t_name"><img src="images/popup/txt_phone.png" alt=""/></li>
              <li class="input_txt phone clearfix">
                <div style="width:79px;magin-left:2px">
                  <select id="mb_phone1" name="mb_phone1" style="width:78px;height:35px;">
                    <option>010</option>
                    <option>011</option>
                    <option>016</option>
                    <option>017</option>
                    <option>018</option>
                    <option>019</option>
                  </select>
                </div>
                <div style="margin-left:4px;"><input type="tel" name="mb_phone2" id="mb_phone2" maxlength="4" onblur="only_num(this)" onkeyup="chk_len(this.value)"></div>
                <div><input type="tel" name="mb_phone3" id="mb_phone3" maxlength="4" onblur="only_num(this)"></div>
              </li>
            </ul>
            <ul class="clearfix">
              <li class="t_name"><img src="images/popup/txt_store.png" alt=""/></li>
              <li class="input_txt phone">
                <input type="text" name="mb_zipcode1" id="mb_zipcode1" style="width:60px"> - 
                <input type="text" name="mb_zipcode2" id="mb_zipcode2" style="width:60px">
                <a href="#" onclick="search_zip();"><img src="./images/popup/btn_zipcode.png" style="width:94px;vertical-align:middle"></a>
              </li>
            </ul>
            <ul class="clearfix">
              <li class="t_name"></li>
              <li class="input_txt">
                <input type="text" name="mb_addr1" id="mb_addr1">
              </li>
            </ul>
            <ul class="clearfix">
              <li class="t_name"></li>
              <li class="input_txt">
                <input type="text" name="mb_addr2" id="mb_addr2">
              </li>
            </ul>
          </div>
          <div class="input_block input_check">
            <ul class="clearfix">
              <li class="in_check"><input type="checkbox" name="use_agree" id="use_agree"></li>
              <li class="in_check_label"><a href="#use_div" class="btn_detail popup-with-zoom-anim" onclick="open_use()"><img src="images/popup/btn_detail_01.png" alt=""/></a></li>
            </ul>
            <ul class="clearfix">
              <li class="in_check"><input type="checkbox" name="privacy_agree" id="privacy_agree"></li>
              <li class="in_check_label"><a href="#privacy_div" class="btn_detail popup-with-zoom-anim" onclick="open_privacy()"><img src="images/popup/btn_detail_02.png" alt=""/></a></li>
            </ul>
            <ul class="clearfix">
              <li class="in_check"><input type="checkbox" name="adver_agree" id="adver_agree"></li>
              <li class="in_check_label"><a href="#adver_div" class="btn_detail popup-with-zoom-anim" onclick="open_adver()"><img src="images/popup/btn_detail_03.png" alt=""/></a></li>
            </ul>
          </div>
          <div class="btn_block">
            <a href="#" onclick="javascript:chk_input();return false;"><img src="images/popup/btn_input_ok.png" alt=""/></a>
          </div>
        </div><!--inner-->
      </div>
    </div>
  </div>

<!--------------------------  개인정보 활용 약관 DIV ----------------------->
  <div id="use_div" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-top:-225px;margin-left:-275px;">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#input_info" class="btn_close first-popup-link"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
<?
	include_once "./use_agree.php";
?>
    </div>
  </div>
<!--------------------------  개인정보 활용 약관 DIV ----------------------->
<!--------------------------  개인정보 취급위탁동의 약관 DIV ----------------------->
  <div id="privacy_div" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-top:-225px;margin-left:-275px;">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#input_info" class="btn_close first-popup-link"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
<?
	include_once "./privacy_agree.php";
?>
    </div>
  </div>
<!--------------------------  개인정보 취급위탁동의 약관 DIV ----------------------->
<!--------------------------  광고성 정보 전송 동의 약관 DIV ----------------------->
  <div id="adver_div" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-top:-225px;margin-left:-275px;">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#input_info" class="btn_close first-popup-link"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
<?
	include_once "./adver_agree.php";
?>
    </div>
  </div>
<!--------------------------  광고성 정보 전송 동의 약관 DIV ----------------------->




<!-------------------------------------참여완료 DIV ------------------------------------------->
  <!-- <div id="input_end" class="popup_wrap zoom-anim-dialog mfp-hide" style="background:white; width:400px">
    <div style="width:100%;height:20px">
      <a href="#" onclick="$.magnificPopup.close();" style="float:right">닫기</a>
    </div>
    <div class="ok_txt_area">
      참여해주셔서 감사합니다.<br />
      스위스구름을 선택한 사람들 0000명
    </div>
    <div>
      <a href="#" onclick="sns_share('twitter');">트윗</a>
      <a href="#" onclick="sns_share('facebook');return false;">페북</a>
      <a href="#" onclick="sns_share('ks_share');return false;">카스</a>
    </div>
    <a href="#" onclick="$.magnificPopup.close();">확인</a>
  </div> -->

  <div id="input_end" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-top:-225px;margin-left:-275px;">
    <div class="p_mid thnx">
      <div class="block_close clearfix">
        <a href="#" class="btn_close" onclick="close_layer();"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
      <div class="block_content">
        <div class="inner" id="change_result">
          <div class="title"><img src="images/popup/title_thks.png" width="310" height="80" alt=""/></div>
          <div class="gift"><img src="images/popup/gift_01.png" width="114" height="114" alt=""/></div>
          <div class="m_cound">스위스 구름을 선택한 사람 <span>12345명</span></div>
          <div class="btn_block">
            <a href="#" onclick="close_layer();"><img src="images/popup/btn_ok.png" alt=""/></a>
          </div>
        </div><!--inner-->
      </div>
    </div>
  </div>

<!-------------------------------------참여완료 DIV ------------------------------------------->
<!--  주소검색 DIV 시작  -->
  <div id="post_div" style="display:none;border:5px solid;position:fixed;width:650px;height:600px;margin-left:30%;top:50%;margin-top:-300px;overflow:hidden;-webkit-overflow-scrolling:touch;z-index:999999">
    <img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:9999999" onclick="closeDaumPostcode()" alt="닫기 버튼">
  </div>
<!--  주소검색 DIV 끝  -->
<!-------------------------- 영상1 DIV -------------------------->
  <div id="movie_div1" class="popup_wrap zoom-anim-dialog mfp-hide" style="margin-left:-450px">
    <div class="p_movie">
      <div class="block_close clearfix">
        <a href="#" class="btn_close first-popup-link" onclick="javascript:close_movie()"><img src="images/btn_close_movie.png" /></a>
      </div>
      <div id="movie_area" class="movie_area" style="">
        <iframe allowfullscreen="1" src="<?=$_gl['youtube_url1']?>" frameborder="0" width="860px" height="485px" name="ytplayer1" id="ytplayer1" ></iframe>
      </div>
      <div class="block_share_btn">
        <a href="#" onclick="movie_share('fb','1');"><img src="images/btn_share_movie_fb.png" /></a>
        <a href="#" onclick="movie_share('tw','1');"><img src="images/btn_share_movie_tw.png" /></a>
      </div>
    </div>
  </div>
<!-------------------------- 영상1 DIV -------------------------->
<!-------------------------- 영상2 DIV -------------------------->
  <div id="movie_div2" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#" class="btn_close first-popup-link" onclick="javascript:close_movie()"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
      <div id="movie_area" class="movie_area" style="height:400px;border:1px solid skyblue">
        <iframe allowfullscreen="1" src="<?=$_gl['youtube_url2']?>" frameborder="0" width="450px" name="ytplayer2" id="ytplayer2" ></iframe>
      </div>
      <div>
        <a href="#" onclick="movie_share('fb','2');">페이스북2</a>
        <a href="#" onclick="movie_share('tw','2');">트위터2</a>
      </div>
    </div>
  </div>
<!-------------------------- 영상2 DIV -------------------------->
<!-------------------------- 영상3 DIV -------------------------->
  <div id="movie_div3" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#" class="btn_close first-popup-link" onclick="javascript:close_movie()"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
      <div id="movie_area" class="movie_area" style="height:400px;border:1px solid skyblue">
        <iframe allowfullscreen="1" src="<?=$_gl['youtube_url3']?>" frameborder="0" width="450px" name="ytplayer3" id="ytplayer3" ></iframe>
      </div>
      <div>
        <a href="#" onclick="movie_share('fb','3');">페이스북3</a>
        <a href="#" onclick="movie_share('tw','3');">트위터3</a>
      </div>
    </div>
  </div>
<!-------------------------- 영상3 DIV -------------------------->
<!-------------------------- 영상4 DIV -------------------------->
  <div id="movie_div4" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#" class="btn_close first-popup-link" onclick="javascript:close_movie()"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
      <div id="movie_area" class="movie_area" style="height:400px;border:1px solid skyblue">
        <iframe allowfullscreen="1" src="<?=$_gl['youtube_url4']?>" frameborder="0" width="450px" name="ytplayer4" id="ytplayer4" ></iframe>
      </div>
      <div>
        <a href="#" onclick="movie_share('fb','4');">페이스북4</a>
        <a href="#" onclick="movie_share('tw','4');">트위터4</a>
      </div>
    </div>
  </div>
<!-------------------------- 영상4 DIV -------------------------->
  <div id="event_confirm1" class="popup_confirm_wrap zoom-anim-dialog mfp-hide">
    <div class="p_alert">
      <div class="inner">
        <div class="block_close clearfix">
          <a href="#input_div" class="btn_close first-popup-link"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content">
          <div class="title">
            <img src="images/popup/title_close.png" alt=""/>
          </div>
          <div class="btn_block eventing clearfix">
            <a href="#" class="first" onclick="close_layer()"><img src="images/popup/btn_out.png" alt=""/></a>
            <a href="#input_div" class="btn_close first-popup-link" onclick="start_api();"><img src="images/popup/btn_return.png" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <div id="event_confirm2" class="popup_confirm_wrap zoom-anim-dialog mfp-hide">
    <div class="p_alert">
      <div class="inner">
        <div class="block_close clearfix">
          <a href="#share_present" class="btn_close first-popup-link"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content">
          <div class="title">
            <img src="images/popup/title_close.png" alt=""/>
          </div>
          <div class="btn_block eventing clearfix">
            <a href="#" class="first" onclick="close_layer()"><img src="images/popup/btn_out.png" alt=""/></a>
            <a href="#share_present" class="btn_close first-popup-link" onclick="start_api();"><img src="images/popup/btn_return.png" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <div id="event_confirm3" class="popup_confirm_wrap zoom-anim-dialog mfp-hide">
    <div class="p_alert">
      <div class="inner">
        <div class="block_close clearfix">
          <a href="#input_info" class="btn_close first-popup-link"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content">
          <div class="title">
            <img src="images/popup/title_close.png" alt=""/>
          </div>
          <div class="btn_block eventing clearfix">
            <a href="#" class="first" onclick="close_layer()"><img src="images/popup/btn_out.png" alt=""/></a>
            <a href="#input_info" class="btn_close first-popup-link" onclick="start_api();"><img src="images/popup/btn_return.png" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
  </div> 

  </body>
</html>
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script type="text/javascript">

	// quick menu
	var quickTop;
	$(window).scroll(function() {
		quickTop = ($(window).height()-$('.quickmenu').height()) /2;
		$('.quickmenu').stop().animate({top:$(window).scrollTop()+quickTop},400,'easeOutExpo');
		
	});

	var shareYN		= "N";
	function start_api()
	{
		$("#fake_btn").show();
		$("#real_btn").hide();

		// 유튜브 반복 재생
		var controllable_player,start, 
		statechange = function(e){
			if (e.data === 0) // 종료됨
			{
				$("#fake_btn").hide();
				$("#real_btn").show();
				//$("#btn_sel_cloud").attr("data-mfp-src","#share_present");
				//$("#btn_sel_cloud").attr("class","popup-with-zoom-anim");
				//$("#btn_event_wait").hide();
				//$("#btn_event").show();
			}
		};
		function onYouTubeIframeAPIReady() {
			controllable_player = new YT.Player('ytplayer', {events: {'onStateChange': statechange}}); 
		}

		if(window.opera){
			addEventListener('load', onYouTubeIframeAPIReady, false);
		}

		//alert(typeof(controllable_player));
		if (typeof(controllable_player) == 'undefined'){
			onYouTubeIframeAPIReady();
		}
	}

	$(window).resize(function(){
		var width = $(window).width();

		var wHeight =$(window).height();

		if (wHeight <= 780){
			wHeight = 780;
		}else if(wHeight > 1000){
			wHeight = 1000;
		}
		$('.area2').height(995); // 제품
		$('.area4').height(995); // 제품
		$('.area3').height(wHeight); // 제품
		//$('.product_group').width(width); // 제품
		//$('.product_area').width(width); // 제품

	});

	$(document).ready(function() {
		// 체크박스 스타일 설정
		$('.popup_wrap input').on('ifChecked ifUnchecked', function(event){
			//alert(this.id);
		}).iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '0%'
		});

		// 팝업 jQuery 스타일
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: true,
			fixedBgPos: true,
			overflowY: 'hidden',
			closeBtnInside: true,
			//preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in',
			showCloseBtn : false,
			closeOnBgClick: false,
			callbacks: {
				close: function() {
					$("#btn_event").hide();
					$("#btn_event_wait").show();
				},
				open: function() {
					$("#sel_present").val("");
					$("#mb_name").val("");
					$("#mb_phone1").val("");
					$("#mb_phone2").val("");
					$("#mb_phone3").val("");
					$("#mb_zipcode1").val("");
					$("#mb_zipcode2").val("");
					$("#mb_addr1").val("");
					$("#mb_addr2").val("");
					$("#use_agree").attr("checked", false);
					$("#privacy_agree").attr("checked", false);
					$("#adver_agree").attr("checked", false);
					$("#p1").attr("src","images/popup/sel_c_01.png");
					$("#p2").attr("src","images/popup/sel_c_02.png");
					$("#p3").attr("src","images/popup/sel_c_03.png");
				}
			}
		});

		// 팝업 jQuery 스타일
		$('.popup-with-zoom-anim2').magnificPopup({
			type: 'inline',
			fixedContentPos: true,
			fixedBgPos: true,
			overflowY: 'hidden',
			closeBtnInside: true,
			//preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in',
			showCloseBtn : false,
			closeOnBgClick: true,
			callbacks: {
				close: function() {
					$("#btn_event").hide();
					$("#btn_event_wait").show();
				},
				open: function() {
					$("#sel_present").val("");
					$("#mb_name").val("");
					$("#mb_phone1").val("");
					$("#mb_phone2").val("");
					$("#mb_phone3").val("");
					$("#mb_zipcode1").val("");
					$("#mb_zipcode2").val("");
					$("#mb_addr1").val("");
					$("#mb_addr2").val("");
					$("#use_agree").attr("checked", false);
					$("#privacy_agree").attr("checked", false);
					$("#adver_agree").attr("checked", false);
					$("#p1").attr("src","images/popup/sel_c_01.png");
					$("#p2").attr("src","images/popup/sel_c_02.png");
					$("#p3").attr("src","images/popup/sel_c_03.png");
				}
			}
		});

		$('.first-popup-link').magnificPopup({
			closeBtnInside:true
		});

		var magnificPopup = $.magnificPopup.instance;

		$('.area1').height(995); // 제품

		$(".area2_bg").show();
		$(".area3_bg").show();
		$(".area4_bg").show();
		$(".footer").show();

		//처음 화면 크기에 따라 영상및 커버 크기 변경
		
		var wHeight =$(window).height();

		if (wHeight <= 780){
			wHeight = 780;
		}else if(wHeight > 1000){
			wHeight = 1000;
		}
		$('.area2').height(995); // 제품
		$('.area4').height(995); // 제품
		$('.area3').height(wHeight); // 제품

		$( '.quickmenu' ).click( function() {
			$( 'html, body' ).animate( { scrollTop : 0 }, 800 );
			  return false;
		} );
		// 퀵메뉴 기본 위치
		var quick_height	= $(window).height()/2;
		$('.quickmenu').css("top",quick_height);

	});


	function closeDaumPostcode() {
		// iframe을 넣은 element를 안보이게 한다.
		element.style.display = 'none';
	}

	// 우편번호 찾기 iframe을 넣을 element
	var element = document.getElementById('post_div');

	function showDaumPostcode() {
		new daum.Postcode({
			oncomplete: function(data) {
			   // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

				// 각 주소의 노출 규칙에 따라 주소를 조합한다.
				// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
				var fullAddr = data.address; // 최종 주소 변수
				var extraAddr = ''; // 조합형 주소 변수

				// 기본 주소가 도로명 타입일때 조합한다.
				if(data.addressType === 'R'){
					//법정동명이 있을 경우 추가한다.
					if(data.bname !== ''){
						extraAddr += data.bname;
					}
					// 건물명이 있을 경우 추가한다.
					if(data.buildingName !== ''){
						extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
					}
					// 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
					fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
				}


				// 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
				// 우편번호와 주소 및 영문주소 정보를 해당 필드에 넣는다.
				document.getElementById('mb_zipcode1').value = data.postcode1;
				document.getElementById('mb_zipcode2').value = data.postcode2;
				document.getElementById('mb_addr1').value = fullAddr;
				//document.getElementById('mb_addr2').focus();
				// iframe을 넣은 element를 안보이게 한다.
				element.style.display = 'none';
			},
			width : '100%',
			height : '100%'
<?
	preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);
	if(count($matches)<2){
		preg_match('/Trident\/\d{1,2}.\d{1,2}; rv:([0-9]*)/', $_SERVER['HTTP_USER_AGENT'], $matches);
	}
	if (count($matches)>1)
	{
		$version = $matches[1];//$matches변수값이 있으면 IE브라우저
		if($version<=8){ 
?>
		}).open();
<?
		}else{
?>
		}).embed(element);
<?
		}
	}else{
?>
		}).embed(element);
<?
	}
?>

		// iframe을 넣은 element를 보이게 한다.
		element.style.display = 'block';
	}


	function search_zip()
	{
		//$("#post_div").show();
		showDaumPostcode();
	}

	function sel_present(param)
	{
		if (param == "swiss")
		{
			$("#p1").attr("src","images/popup/sel_c_01_on.png");
			$("#p2").attr("src","images/popup/sel_c_02.png");
			$("#p3").attr("src","images/popup/sel_c_03.png");
		}else if (param == "cream") {
			$("#p1").attr("src","images/popup/sel_c_01.png");
			$("#p2").attr("src","images/popup/sel_c_02_on.png");
			$("#p3").attr("src","images/popup/sel_c_03.png");
		}else {
			$("#p1").attr("src","images/popup/sel_c_01.png");
			$("#p2").attr("src","images/popup/sel_c_02.png");
			$("#p3").attr("src","images/popup/sel_c_03_on.png");
		}
		$("#sel_present").val(param);

	}

	function close_layer()
	{
		$.magnificPopup.close();
	}
 </script>
