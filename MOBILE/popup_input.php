<?
	include_once "./header.php";
?>
  <div id="input_div" class="wrap_page popup">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="javascript:window.close();"><img src="img/popup/btn_close.png" width="29"/></a>
    </div>
    <div class="content">
      <div class="inner">
        <div class="title">
          <img src="img/popup/title_input.png" width="192" alt=""/>
        </div>
        <div class="input_block">
          <ul class="clearfix">
            <li class="t_name"><img src="img/popup/txt_label_name.png" width="32" alt=""/></li>
            <li class="input_txt"><input type="text" name="mb_name" id="mb_name" onkeydown="Check_Hangul(this)"></li>
          </ul>
          <ul class="clearfix">
            <li class="t_name"><img src="img/popup/txt_label_phone.png" width="48" alt=""/></li>
            <li class="input_txt phone">
              <div class="inner clearfix">
                <div><input type="tel" id="mb_phone1" name="mb_phone1"></div>
                <div><input type="tel" id="mb_phone2" name="mb_phone2"></div>
                <div><input type="tel" id="mb_phone3" name="mb_phone3"></div>
              </div>
            </li>
          </ul>
        </div>
        <div class="input_block">
          <ul class="clearfix">
            <li class="t_name"><img src="img/popup/txt_label_store.png" width="63" alt=""/></li>
            <li class="input_txt address">
              <div class="inner clearfix">
                <div><input type="text"></div>
                <div><input type="text"></div>
              </div>
            </li>
          </ul>
          <ul class="clearfix">
            <li class="t_name"></li>
            <li class="input_txt store"><input type="text"></li>
            <li class="btn">
              <a href="#"><img src="img/popup/btn_store.png" width="98" alt=""/></a>
            </li>
          </ul>
        </div>
        <div class="input_block input_check">
          <ul class="clearfix">
            <li class="in_check"><input type="checkbox"></li>
            <li class="in_check_label"><a href="#" class="btn_detail"><img src="img/popup/btn_detail_01.png" width="164" alt=""/></a></li>
          </ul>
          <ul class="clearfix">
            <li class="in_check"><input type="checkbox"></li>
            <li class="in_check_label"><a href="#" class="btn_detail"><img src="img/popup/btn_detail_02.png" width="164" alt=""/></a></li>
          </ul>
          <ul class="clearfix">
            <li class="in_check"><input type="checkbox"></li>
            <li class="in_check_label"><a href="#" class="btn_detail"><img src="img/popup/btn_detail_03.png" width="164" alt=""/></a>
            </li>
          </ul>
        </div>
        <div class="btn_block">
          <a href="#"><img src="img/popup/btn_ok.png" width="178" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		//처음 화면 크기에 따라 영상및 커버 크기 변경
		var width = $(window).width();
		var youtube_width = width;
		$("#ytplayer").width(width);
		$(".cover_area").width($("#ytplayer").width());
		var youtube_height = (width / 16) * 9;
		$("#ytplayer").height(youtube_height);
		$(".cover_area").height($("#ytplayer").height());
		
		var wHeight =$(window).height();

		if ('v'=='\v'){ // 8이하
			wHeight = 773;
		}else if (wHeight <= 780){
			wHeight = 780;
		}else if(wHeight > 1000){
			wHeight = 1000;
		}
		$('.area2').height(wHeight); // 제품
		//$('.product_group').width(width); // 제품
		//$('.product_area').width(width); // 제품

		$("#video_control").click(function(){
			var control_txt	= $("#video_control").text();
			if (control_txt == "일시정지"){
				controllable_player.pauseVideo();
				return false;
			}else{
				controllable_player.playVideo(); 
				return false;
			}
		});
		$( '.quickmenu' ).click( function() {
	    $( 'html, body' ).animate( { scrollTop : 0 }, 800 );
		  return false;
		} );

		$( '.scroll_navi_area' ).click( function() {
	    $( 'html, body' ).animate({ scrollTop: $("#ytplayer").height()},1500);
		  return false;
		} );
		

		// 퀵메뉴 기본 위치
		var quick_height	= $(window).height()/2;
		$('.quickmenu').css("top",quick_height);
/*
		setTimeout("auto_play();",2000);
*/
		// 체크박스 스타일 설정
		$('.popup_wrap input').on('ifChecked ifUnchecked', function(event){
			//alert(this.id);
		}).iCheck({
			checkboxClass: 'icheckbox_flat-blue',
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
			callbacks: {
				close: function() {
					/*$("#mb_name").val("");
					$("#mb_phone").val("");
					$('input').iCheck('uncheck');
					$("#postcode1").val("");
					$("#postcode2").val("");
					$("#addr1").val("");
					$("#addr2").val("");
					$("#post_div").hide();*/
				}
			}
		});

		$('.first-popup-link').magnificPopup({
			closeBtnInside:true
		});

		var magnificPopup = $.magnificPopup.instance;

		// 셀렉트박스 스타일
		$( "#mb_phone1" ).dropkick({
			mobile: true
		});

		$( "#addr1" ).dropkick({
			mobile: true
		});
		
		$( "#addr2" ).dropkick({
			mobile: true
		});


		$( "#shop" ).dropkick({
			mobile: true
		});
		
		$("#dk0-combobox").css("width","79px");
		$("#dk1-addr1").css("width","120px");
		$("#dk1-addr1").css("font-size","12px");
		$(".dk-option").css("float","none");
		$(".dk-option").css("width","120px");
		$(".dk-option").css("height","34px");
		$(".dk-select").css("width","120px");
		$(".dk-select").css("height","34px");
		$("#dk1-combobox").css("height","34px");
		$("#dk2-addr2").css("width","120px");
		$("#dk2-addr2").css("font-size","14px");
		$("#dk2-combobox").css("height","34px");
		$("#dk3-shop").css("width","120px");
		$("#dk3-shop").css("font-size","14px");
		$("#dk3-combobox").css("height","34px");
	});

</script>