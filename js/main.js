function addr_change(addr1)
{
	$.ajax({
		type:"POST",
		data:{
			"addr1"    : addr1
		},
		url: "./ajax_addr.php",
		success: function(response){
			$("#sel_addr2").html(response);
		}
	});
}

function shop_change(idx)
{
	$.ajax({
		type:"POST",
		data:{
			"addr2_idx"    : idx
		},
		url: "./ajax_shop.php",
		success: function(response){
			$("#sel_shop").html(response);
			//$("#shop").html(response);
		}
	});
}

function ins_data()
{
	$.magnificPopup.open({
		items: {
			src: '#input_alert'
		},
		type: 'inline'
	}, 0);
}

function shop_data()
{
	$.magnificPopup.open({
		items: {
			src: '#shop_alert'
		},
		type: 'inline'
	}, 0);
}

function agree_data()
{
	$.magnificPopup.open({
		items: {
			src: '#agree_alert'
		},
		type: 'inline'
	}, 0);
}

function ok_data()
{
	$.magnificPopup.open({
		items: {
			src: '#ok_alert'
		},
		type: 'inline'
	}, 0);
}

function map_data()
{
	$.magnificPopup.open({
		items: {
			src: '#map_div'
		},
		type: 'inline'
	}, 0);
}

function inputfrm_data()
{
	$.magnificPopup.open({
		items: {
			src: '#input_div'
		},
		type: 'inline'
	}, 0);
}

function chk_input()
{
	var mb_name		= $('#mb_name').val();
	var mb_phone1	= $('#mb_phone1').val();
	var mb_phone2	= $('#mb_phone2').val();
	var mb_phone3	= $('#mb_phone3').val();
	var addr1		= $('#addr1').val();
	var addr2		= $('#addr2').val();
	var shop		= $('#shop').val();

	if (mb_name == "")
	{

		//alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);

		//$("#mb_name").focus();
		//$("#input_alert").show();
		return false;
	}

	if (mb_phone1 == "")
	{
		//alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);

		$("#mb_phone1").focus();
		return false;
	}

	if (mb_phone2 == "")
	{
		//alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);
		$("#mb_phone2").focus();
		return false;
	}

	if (mb_phone3 == "")
	{
		//alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);
		$("#mb_phone3").focus();
		return false;
	}

	if (addr1 == "")
	{
		//alert('매장 선택을 안 하셨습니다');
		setTimeout("shop_data();",500);
		return false;
	}

	if (addr2 == "")
	{
		//alert('매장 선택을 안 하셨습니다');
		setTimeout("shop_data();",500);
		return false;
	}

	if (shop == "")
	{
		//alert('매장 선택을 안 하셨습니다');
		setTimeout("shop_data();",500);
		return false;
	}

	if ($('#uses_agree').is(":checked") == false)
	{
		//alert("개인정보 활용 동의를 안 하셨습니다");
		setTimeout("agree_data();",500);
		return false;
	}

	if ($('#privacy_agree').is(":checked") == false)
	{
		//alert("개인정보 활용 동의를 안 하셨습니다");
		setTimeout("agree_data();",500);
		return false;
	}

	if ($('#send_agree').is(":checked") == false)
	{
		//alert("개인정보 활용 동의를 안 하셨습니다");
		setTimeout("agree_data();",500);
		return false;
	}

	$.ajax({
		type:"POST",
		data:{
			"exec"				: "insert_event",
			"mb_name"			: mb_name,
			"mb_phone1"		    : mb_phone1,
			"mb_phone2"		    : mb_phone2,
			"mb_phone3"		    : mb_phone3,
			"shop"				: shop
		},
		url: "../main_exec.php",
		success: function(response){
			if (response == "Y")
			{
				//alert("참여해주셔서 감사합니다.\n당첨시 3월 19일에 모바일쿠폰을 보내드립니다.\n미당첨시 따로 메시지를 보내드리지 않습니다.");
				setTimeout("ok_data();",1000);

			}
			else if (response == "D")
			{
				alert("이미 이벤트에 응모하셨습니다.\n다음에 다시 참여해 주세요.");
				$("#mb_name").val("");
				$("#mb_phone1").val("010");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$("#addr1").val("");
				$("#addr2").val("");
				$("#shop").val("");
				$('input').iCheck('uncheck');
				$.magnificPopup.close();
			}
			else
			{
				alert("이벤트 참여자 수가 많아 참여가 지연되고 있습니다.\n다시 응모해 주시기 바랍니다.");
				$("#mb_name").val("");
				$("#mb_phone1").val("010");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$("#addr1").val("");
				$("#addr2").val("");
				$("#shop").val("");
				$('input').iCheck('uncheck');
				$.magnificPopup.close();
			}
		}
	});

}

function Check_Hangul(name) {
    strarr = new Array(name.value.length);
    schar = new Array('/','.','>','<',',','?','}','{',' ','\\','|','(',')','+','!','@','#','$','%','^','&','*','~','-');
    for (i=0; i<name.value.length; i++)    {
        for (j=0; j<schar.length; j++)        {
            if (schar[j] ==name.value.charAt(i))
            {
                alert("이름은 한글입력만 가능합니다.");
                document.registform.mem_name.focus();
                return false;
            }
            else
                continue;
        }
        strarr[i] = name.value.charAt(i)
        if ((strarr[i] >=0) && (strarr[i] <=9))
        {
            alert("이름에 숫자가 있습니다. 이름은 한글입력만 가능합니다.");
            document.registform.mem_name.focus();
            return false;
        }
        else if ((strarr[i] >='a') && (strarr[i] <='z'))
        {
            alert("이름에 알파벳이 있습니다. 이름은 한글입력만 가능합니다.");
            document.registform.mem_name.focus();           
            return false;
        }
        else if ((strarr[i] >='A') && (strarr[i] <='Z'))
        {
            alert("이름에 알파벳이 있습니다. 이름은 한글입력만 가능합니다.");
            document.registform.mem_name.focus();    
            return false;
        }
        else if ((escape(strarr[i]) > '%60') && (escape(strarr[i]) <'%80') )
        {
            alert("이름에 특수문자가 있습니다. 이름은 한글입력만 가능합니다.");
            document.registform.mem_name.focus();
            return false;
        }
        else
        {
            continue;
        }
    }
    return true;
}

function only_num(obj)
{
	var inText = obj.value;
	var outText = "";
	var flag = true;
	var ret;
	for(var i = 0; i < inText.length; i++)
	{
		ret = inText.charCodeAt(i);
		if((ret < 48) || (ret > 57))
		{
			flag = false;
		}
		else
		{
			outText += inText.charAt(i);
		}
	}
 
	if(flag == false)
	{
		alert("전화번호란에 숫자입력만 가능합니다.");
		obj.value = outText;
		obj.focus();
		return false;
	} 
	return true;
}

function open_event()
{
	$("#input_div").show();
	$("#gift_div").hide();
}

function open_use()
{
	$("#use_div").show();
}

function open_privacy()
{
	$("#privacy_div").show();
}

function open_adver()
{
	$("#adver_div").show();
}

function open_gift()
{
	$("#gift_div").show();
	$("#input_div").hide();
}

function close_input()
{
	//$("#input_div").hide();
	$("#mb_name").val("");
	$("#mb_phone1").val("010");
	$("#mb_phone2").val("");
	$("#mb_phone3").val("");
	$("#addr1").val("");
	$("#addr2").val("");
	$("#shop").val("");
	$('input').iCheck('uncheck');
	$.magnificPopup.close();
}

function close_gift()
{
	//$("#gift_div").hide();
	$.magnificPopup.close();
}

function close_map()
{
	$("#map_div").hide();
}

function close_look()
{
	$("#look_div").hide();
}

function sns_share(media)
{
	if (media == "facebook")
	{
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.thefaceshopclouding.co.kr/PC/index.php'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});

	  /*
	  var media = "fb";
	  FB.ui(
	  {
		method: 'feed',
		name: "더페이스샵 - 블랑클라우닝'",
		link: 'http://www.thefaceshopclouding.co.kr/?media=fb',
		//picture: imgurl,
		//picture: "http://www.tomorrowkids.or.kr/images/fb/jobimg_1.jpg",
		caption: 'www.thefaceshopclouding.co.kr',
		//description: job + " - " + job_explain
		description: "1. 서장훈, 촉촉하게 수지랑!<br />서장훈 구름탄 기분이랄까~<br />촉촉한 선물 <br />2. 서장훈 더페이스샵 CF모델? <br />'아니아니 그게 아니고' 공개! <br />구름선물"
	  },
		function(response) {
		  if (response && response.post_id) {
			alert('111');
			$.ajax({
			  type   : "POST",
			  async  : false,
			  url    : "../main_exec.php",
			  data:{
				"exec" : "insert_share_info",
				"media" : media,
				"gubun" : gubun
			  }
			});
		  }
		}
	  );
	*/
	
	}else{
		var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("1. 서장훈, 촉촉하게 수지랑! 서장훈 구름탄 기분이랄까~촉촉한 선물 2. 서장훈 더페이스샵 CF모델? '아니아니 그게 아니고' 공개! 구름선물") + '&url='+ encodeURIComponent('http://goo.gl/jTps76'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}
}

function show_map()
{
	var si				= $("#addr1 option:selected").text();
	var si_val			= $("#addr1").val();
	var gun			= $("#addr2 option:selected").text();
	var gun_val		= $("#addr2").val();
	var shop_idx		= $("#shop").val();
	if (shop_idx)
	{
		$.ajax({
			type:"POST",
			data:{
				"exec"           : "select_address",
				"shop_idx"     : shop_idx
			},
			url: "../main_exec.php",
			success: function(response){
				$.ajax({
					type:"POST",
					data:{
						"flag"    : "addr",
						"addr"     : response
					},
					url: "../map_ajax.php",
					success: function(response){
						$("#map_div").show();
						$("#map_area").html(response);
					}
				});
			}
		});
	}else{
		if (gun_val)
		{
			$.ajax({
				type:"POST",
				data:{
					"flag"    : "sigungu",
					"si"       : si,
					"gun"    : gun
				},
				url: "../map_ajax.php",
				success: function(response){
					$("#map_div").show();
					$("#map_area").html(response);
				}
			});
		}else{
			alert("지역이나 매장을 선택하셔야만 지도를 보실 수 있습니다.");
			setTimeout("inputfrm_data();",0);

			//return false;
			//$.magnificPopup.close();
		}
	}
}

function only_kor(obj)
{
	var inText = obj.value;
	if (inText != ""){
		var pattern = /^[가-힣]+$/; 
		if (pattern.test(inText)){
			return true;
		}else{
			alert("한글만 입력하세요");
			obj.value="";
			obj.focus();
			return false;
		}	
	}
}

function auto_play()
{
	$("#cover_image").hide();
	controllable_player.seekTo(0);
	controllable_player.playVideo(); 
}

// 메뉴 이동
function goPosition(to){
	scrollReady = false;
	$("html, body").stop().animate(
		{scrollTop: to},
		500,
		'easeOutExpo',
		function(){scrollReady = true;}
	);
}

function goevent(flag){
	if (flag == 1){
		goPosition($('.area1').height());
	}else if(flag == 2){
		goPosition($('.area1').height()+$('.area2').height());
	}else if(flag == 3){
		goPosition($('.area1').height()+$('.area2').height()+$('.area3').height());
	}
}

function button_event(serial){
	if (confirm("정말 사용하시겠습니까?") == true){    //확인
		$.ajax({
			type:"POST",
			data:{
				"exec"				: "update_winner",
				"serial"		    : serial
			},
			url: "../main_exec.php",
			success: function(response){
				if (response == "Y")
					alert("참여해주셔서 감사합니다. 블랑클라우딩 많이 사랑해주세요~");
				else
					alert("이벤트 참여자 수가 많아 참여가 지연되고 있습니다.\n다시 응모해 주시기 바랍니다.");
			}
		});
	}
}