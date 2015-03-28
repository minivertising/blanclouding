
function m_chk_input()
{
	var mb_name	= $('#mb_name').val();
	var mb_phone1	= $('#mb_phone1').val();
	var mb_phone2	= $('#mb_phone2').val();
	var mb_phone3	= $('#mb_phone3').val();
	var mb_addr		= $('#mb_addr').val();

	if (mb_name == "")
	{

		alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);

		$("#mb_name").focus();
		//$("#input_alert").show();
		return false;
	}

	if (mb_phone2 == "" || mb_phone2.length <3)
	{
		alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);
		$("#mb_phone2").focus();
		return false;
	}
	

	if (mb_phone3 == "" || mb_phone3.length<4)
	{
		alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);
		$("#mb_phone3").focus();
		return false;
	}

	if (mb_addr == "")
	{
		alert('주소를 잘못 입력 하셨습니다.');
		setTimeout("ins_data();",500);
		$("#mb_addr").focus();
		return false;
	}

	if ($('#privacy_agree').is(":checked") == false)
	{
		alert("개인정보 활용 동의를 안 하셨습니다");
		setTimeout("agree_data();",500);
		return false;
	}

	if ($('#clause_agree').is(":checked") == false)
	{
		alert("개인정보 활용 동의를 안 하셨습니다");
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
				//$.magnificPopup.close();

				setTimeout("ok_data();",1000);

			}
			else if (response == "D")
			{
				alert("이미 이벤트에 응모하셨습니다.\n다음에 다시 참여해 주세요.");
				if (iPhoneYN == "Y")
				{
					location.href="index.php";
				}else{
					window.close();
				}
			}
			else
			{
				alert("이벤트 참여자 수가 많아 참여가 지연되고 있습니다.\n다시 응모해 주시기 바랍니다.");
				if (iPhoneYN == "Y")
				{
					location.href="index.php";
				}else{
					window.close();
				}
			}
		}
	});
}

function chk_input()
{
	var mb_name	= $('#mb_name').val();
	var mb_phone1	= $('#mb_phone1').val();
	var mb_phone2	= $('#mb_phone2').val();
	var mb_phone3	= $('#mb_phone3').val();
	var mb_addr		= $('#mb_addr').val();
	var sel_gift			= $('#chk_gift').val();

	if (mb_name == "")
	{

		alert('개인정보 입력을 안 하셨습니다');
		//setTimeout("ins_data();",500);

		$("#mb_name").focus();
		//$("#input_alert").show();
		return false;
	}

	if (mb_phone2 == "" || mb_phone2.length <3)
	{
		alert('개인정보 입력을 안 하셨습니다');
		//setTimeout("ins_data();",500);
		$("#mb_phone2").focus();
		return false;
	}
	

	if (mb_phone3 == "" || mb_phone3.length<4)
	{
		alert('개인정보 입력을 안 하셨습니다');
		//setTimeout("ins_data();",500);
		$("#mb_phone3").focus();
		return false;
	}

	if (mb_addr == "")
	{
		alert('주소 입력을 안하셨습니다.');
		//setTimeout("ins_data();",500);
		$("#mb_addr").focus();
		return false;
	}

	if ($('#use_agree').is(":checked") == false)
	{
		alert("개인정보 활용 동의를 안 하셨습니다");
		//setTimeout("agree_data();",500);
		return false;
	}

	if ($('#privacy_agree').is(":checked") == false)
	{
		alert("개인정보 활용 동의를 안 하셨습니다");
		//setTimeout("agree_data();",500);
		return false;
	}

	if ($('#adver_agree').is(":checked") == false)
	{
		alert("개인정보 활용 동의를 안 하셨습니다");
		//setTimeout("agree_data();",500);
		return false;
	}

	$.ajax({
		type:"POST",
		data:{
			"exec"				: "insert_event2",
			"mb_name"			: mb_name,
			"mb_phone1"		    : mb_phone1,
			"mb_phone2"		    : mb_phone2,
			"mb_phone3"		    : mb_phone3,
			"mb_addr"				: mb_addr,
			"sel_gift"				: sel_gift
		},
		url: "../main_exec.php",
		success: function(response){
			if (response == "Y")
			{
				setTimeout("ok_data();",500);
				$.ajax({
					type:"POST",
					data:{
						"sel_gift"				: sel_gift
					},
					url: "./ajax_gift.php",
					success: function(response){
						$(".ok_txt_area").html(response);
					}
				});

			}
			else if (response == "D")
			{
				alert("이미 이벤트에 응모하셨습니다.\n다음에 다시 참여해 주세요.");
				$.magnificPopup.close();
			}
			else
			{
				alert("이벤트 참여자 수가 많아 참여가 지연되고 있습니다.\n다시 응모해 주시기 바랍니다.");
				$.magnificPopup.close();
			}
		}
	});
}

function chk_radio(){
	var frm = document.all;
	var radio_temp = frm.sel_present.length;
	var chk_i=0
	for(var i=0; i<radio_temp; i++)
	{
		if(frm.sel_present[i].checked == true)
		{
			chk_i++;
			setTimeout("inputinfo_data();",500);
		} 
	} 
		if(chk_i<=0)
		{ 
			alert("하나를 선택하세요"); 
			
			return;
		} 
} 

function inputinfo_data()
{
	$.magnificPopup.open({
		items: {
			src: '#input_info'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);

}

function ok_data()
{
	$.magnificPopup.open({
		items: {
			src: '#input_end'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);

}

function ins_selval(val)
{
	$("#chk_gift").val(val);
}
