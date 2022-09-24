<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php
// require "function.php";
// $ssl_result=Ssl_check('https://www.google.com/');
?>
<<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Basic Header</title>

  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="assets/header-fixed.css"> -->
  <link href='https://fonts.googleapis.com/css?family=' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/seach.css">

</head>

<body>

<header class="header-fixed">

  <div class="header-limiter">

    <h1><a href="#">TheGrey<span>Hat</span></a></h1>

    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </nav>

  </div>

</header>
<div id="search-div">
    <h1 id="serach_h1">Enter your url to analyse</h1>
    <div class="sub">
        <i class="fa-brands fa-searching"></i>
        <input type="text" name="url" id="url">
        <input type="submit" name="submit" onclick="check();" value="Analyse">
        <p id="result"></p>
    </div>
</div>
    
<footer>
  <div class="container">
    <div class="content">
      ⁡⁢⁣⁣ ⁡
      <div class="col">
        <p>contact us</p>
        <p>
          hi, we are always open for cooperation and suggestions, <br />
          contact us in one of the ways below:
        </p>
        <div class="flex">
          <div class="col-info">
            <p>
              PHONE NUMBER <br />
              <span>+91 8866310671</span>
            </p>
          </div>
          <div class="col-info">
            <p>
              EMAIL ADDRESS <br />
              <span>mihirchaudhary2507@gmail.com</span>
            </p>
          </div>
        </div>
      </div>
      ⁡⁢⁣⁡⁢⁣⁣ ⁡
      <div class="col">
        <div class="column">
          <p>information</p>
          <p>About Us</p>
          <p>contact us</p>
        </div>
      </div>
      ⁡⁢⁣⁣ ⁡
      <div class="col">
        
        <p>follow us on social networks:</p>
        <div class="social">
          <img src="https://i.postimg.cc/44pPB9wk/facebook.png" alt="" />
          <img src="https://i.postimg.cc/L8Q3nB4f/twitter.png" alt="" />
          <img src="https://i.postimg.cc/TYG9S3Hy/instagram.png" alt="" />
          <img src="https://i.postimg.cc/kGCxkTwr/youtube.png" alt="" />
          <img src="https://i.postimg.cc/CKZHDBd2/telegram.png" alt="" />
        </div>
      </div>
      ⁡⁢⁡⁢⁣⁣
    </div>
  </div>
  <div class="content-foot">
    <!--<div class="container">
      <div class="foot-text">
        <p>powered by <span>tech</span> - designed by <span>hema</span></p>
        <div class="pay">
          <img src="https://i.postimg.cc/PrtWyFPY/visa-logo-png-2013.png" alt="" />
          <img src="https://i.postimg.cc/R0j1TSHZ/mastercard-PNG23.png" alt="" />
          <img src="https://i.postimg.cc/sggJj0zs/paypal-logo-png-2119.png" alt="" />
          <img src="https://i.postimg.cc/hjdsFzBm/American-Express-logo-PNG14.png" alt="" />
        </div>
      </div>-->
    </div>
  </div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

  $(document).ready(function(){

    var showHeaderAt = 150;

    var win = $(window),
        body = $('body');

    // Show the fixed header only on larger screen devices

    if(win.width() > 400){

      // When we scroll more than 150px down, we set the
      // "fixed" class on the body element.

      win.on('scroll', function(e){

        if(win.scrollTop() > showHeaderAt) {
          body.addClass('fixed');
        }
        else {
          body.removeClass('fixed');
        }
      });

    }

  });

</script>



</body>

</html>

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