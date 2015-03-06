<?
	include_once "../config.php";
?>
<html>

  <head>
    <script type="text/javascript">
      function button_event(){
        if (confirm("정말 사용하시겠습니까??") == true){    //확인
          document.form.submit();
        }else{   //취소
             return;
        }
      }
    </script>
   </head>

    <body>
		<input type = "button" value="사용 확인" onclick="button_event()">
    </body>

</html>

<!-- SELECT * FROM  `member_info` WHERE mb_winner OR mb_use =  'Y' --> 사용 완료
