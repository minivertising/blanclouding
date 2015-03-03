<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <script type="text/javasxript">
jQuery(document).ready(function($){
 
    $(window).load(function(){
        youtube_play_api(); //window가 로드되면 함수 실행
    }
 
    function youtube_play_api(){
         
        var tag = document.createElement('script');
 
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        
        var player;
        setTimeout(function(){
            player = new YT.Player('youtube_video', {});
        }, 1000);
       
    }
         $("#play").click(function(){
			alert('111');
            if(player){
                var fn = function(){player.playVideo();}
                setTimeout(fn, 1000);
            }
        });
        
        $("#pause").click(function(){
             player.pauseVideo();
        }); 

});
  </script>
 </head>
 <body>
<iframe id="youtube_video" src="https://www.youtube.com/embed/tnbG4iB_Rc4?&enablejsapi=1"></iframe>
<!-- ABCDEFGHIJK = 영상코드 -->
 
<!-- button -->
<a href="#" id="play">재생</a>
<a href="#" id="pause">일시정지</a>
</body>
</html>
