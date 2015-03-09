<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>jQuery Tip</title>
    <style>
      div.a {
        margin: auto;
        width: 500px;
        height: 2000px;
        border: 1px solid #bcbcbc;
      }
      a.top {
        position: fixed;
        left: 50%;
        bottom: 50px;
        display: none;
      }
    </style>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
      $( document ).ready( function() {
        $( window ).scroll( function() {
          if ( $( this ).scrollTop() > 200 ) {
            $( '.top' ).fadeIn();
          } else {
            $( '.top' ).fadeOut();
          }
        } );
        $( '.top' ).click( function() {
          $( 'html, body' ).animate( { scrollTop : 0 }, 800 );
          return false;
        } );
      } );
    </script>
  </head>
  <body>
    <div class="a">
      <a href="#" class="top">Top</a>
    </div>
  </body>
</html>