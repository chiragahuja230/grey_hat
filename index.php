<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php
// require "function.php";
// $ssl_result=Ssl_check('https://www.google.com/');
?>
<input type="text" name="url" id="url">
<button onclick="check()">send</button>
<p id="result"></p>
<script>
  // $( document ).ready(function() {
    function check(){
      var url=$('#url').val();
      $.ajax({
        url: 'ssl_certificate.php',
        type: 'post',
        data: { "url": url},
        success: function(response) {
          if(response==true){
            $('#result').text("Great your website has an ssl certificate");
            // alert(response);
          }else{
            $('#result').text(  "Sorry your website does not have an ssl certificate");
            // alert('not');
          }
        }
      });
    }
    
// });
</script>