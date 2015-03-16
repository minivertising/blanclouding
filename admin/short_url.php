<!-- 주소짧게만들기 --> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Set Style</title>
        	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script type="text/javascript">
			
			
						
			$(document).ready(function(){
				$('div#myContainer').click(function(){
					temp = prompt("Ctrl+C를 눌러 클립보드로 복사하세요", $('span#myContainer').html());
//					window.clipboardData.setData('Text', $('div#myContainer').html());	// 익스플로러만 가능
//					alert("복사완료"+$('div#myContainer').html())									// 익스플로러에서 복사했을때 세트로 사용
				});
			});

			
            function getShortURL(){
//            	longURL = "http://" + $("input#longURL").val();
				var longURL = "http://" + document.getElementById("longURL").value;
				
                var defaults = {
                    version: '2.0.1',
                    login: 'kyhfan', // 아이디
                    apiKey: '2b19a46fe91ec689eac5abf76352584176df2650', //apikey
                    history: '0',
                    longUrl: encodeURI(longURL)
                };
                var ret = '';
                
                var daurl = "http://api.bit.ly/shorten?" +
                "version=" +
                defaults.version +
                "&longUrl=" +
                defaults.longUrl +
                "&login=" +
                defaults.login +
                "&apiKey=" +
                defaults.apiKey +
                "&history=" +
                defaults.history +
                "&format=json&callback=?";
                
                jQuery.getJSON(daurl, function(data){
                	var shortURL = data.results[defaults.longUrl].shortUrl;
					$('#subject01').html("짧은주소 : ");
					$('#myContainer').html(shortURL);
					
//                    jQuery('#aaa').html(data.results[defaults.longUrl].shortUrl);
//                    jQuery('#textareaMsg').val(jQuery('#textareaMsg').val().replace(longURL, data.results[defaults.longUrl].shortUrl));
//                     alert('aa');
//                    jQuery('#shortURLValue').val(data.results[defaults.longUrl].shortUrl);
                });
                return ret;
            }
			
			
        </script>
    </head>
	<body>
	http://<input type="text" name="longURL" id="longURL" placeholder="URL를 적어주세요.">
    <input type="button" name="bitly_shorten" id="bitly_shorten" onClick="getShortURL()" value="클릭!!">
	<br/>
	<span id="subject01"></span><span id="myContainer"></span>
    </body>
</html>