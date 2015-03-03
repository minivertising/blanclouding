function addr_change(addr1)
{
	$.ajax({
		type:"POST",
		data:{
			"addr1"    : addr1
		},
		url: "./ajax_addr.php",
		success: function(response){
			$("#addr2").html(response);
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
			$("#shop").html(response);
		}
	});
}

function chk_input()
{
	var mb_name		= $('#mb_name').val();
	var mb_phone1	= $('#mb_phone1').val();
	var mb_phone2	= $('#mb_phone2').val();
	var mb_phone3	= $('#mb_phone3').val();
	var addr1			= $('#addr1').val();
	var addr2			= $('#addr2').val();
	var shop				= $('#shop').val();

	if (mb_name == "")
	{
		alert('이름을 입력해 주세요.');
		$("#mb_name").focus();
		return false;
	}

	if (mb_phone1 == "")
	{
		alert('전화번호를 입력해 주세요.');
		$("#mb_phone1").focus();
		return false;
	}

	if (mb_phone2 == "")
	{
		alert('전화번호를 입력해 주세요.');
		$("#mb_phone2").focus();
		return false;
	}

	if (mb_phone3 == "")
	{
		alert('전화번호를 입력해 주세요.');
		$("#mb_phone3").focus();
		return false;
	}

	if (addr1 == "")
	{
		alert('지역을 선택해 주세요.');
		return false;
	}

	if (addr2 == "")
	{
		alert('지역을 선택해 주세요.');
		return false;
	}

	if (shop == "")
	{
		alert('매장을 선택해 주세요.');
		return false;
	}

	if ($('#privacy_agree').is(":checked") == false)
	{
		alert("개인정보활용 동의에 체크해 주세요.");
		return false;
	}


	$.ajax({
		type:"POST",
		data:{
			"exec"				: "insert_event",
			"mb_name"			: mb_name,
			"mb_phone1"		: mb_phone1,
			"mb_phone2"		: mb_phone2,
			"mb_phone3"		: mb_phone3,
			"shop"				: shop
		},
		url: "../main_exec.php",
		success: function(response){
			if (response == "Y")
				alert("참여해주셔서 감사합니다./r/n당첨시 3월 19일에 모바일쿠폰을 보내드립니다./r/n미당첨시 따로 메시지를 보내드리지 않습니다.");
			else
				alert("이벤트 참여자 수가 많아 참여가 지연되고 있습니다./r/n다시 응모해 주시기 바랍니다.");
		}
	});

}

function open_event()
{
	alert('11');
}

function sns_share(media)
{
	if (media == "facebook")
	{
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.thefaceshopclouding.co.kr/PC/index.php'),'sharer','toolbar=0,status=0,width=600,height=325');
	}else{
		alert("22");
	}
}