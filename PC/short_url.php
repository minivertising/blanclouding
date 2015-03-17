<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
    
        <input type="text" id="longURL"><button id="makeShortURL">단축URL생성</button><br>
        <input type="text" id="shortURL">
    
</body>
<script>
        /**
         * 단축url 키등록 
         */
        function load() {
            gapi.client.setApiKey('등록된 키를 여기에 입력');      
            gapi.client.load('urlshortener', 'v1',function(){});
        }
        /**
         * 단축 URL생성
         */
        $('#makeShortURL').click(function(){
            var longURL = $('#longURL').val();    
            var request = gapi.client.urlshortener.url.insert({
                'resource' : {
                    'longUrl' : longURL
                }
            });
            request.execute(function(response) {
                if (response.id != null) {        
                    console.log(response.id);
                    $('#shortURL').val(response.id);
                } else {
                    alert("error: creating short url");
                }
            });
        });    
    </script>
    <script src="https://apis.google.com/js/client.js?onload=load"></script>
</html>