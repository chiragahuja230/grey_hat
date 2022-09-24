<?php 
require('header.php');
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
  <h1 class="h1-center">Type Your Url to find bugs.</h1>
      <br/>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="card-body row no-gutters align-items-center">
          <div class="col-auto">
            <i class="fas fa-search h4 text-body"></i>
          </div>
        <div class="col">
          <input class="form-control form-control-lg form-control-borderless" type="text" name="url" id="url" placeholder="Enter Your URL">
        </div>
        <div class="col-auto">
          <button class="btn btn-lg btn-success" onclick="check()">Search</button>
        </div>
      </div>
      <p id="result"></p>
    </div>
  </div>
</div>
<div>
<a href="resource.php"><h1 class="h1-center">Know how to secure.</h1></a>
</div>
<ul>
  <li><a href="resource.php?type="></a></li>
</ul>
<script>
    function check(){
      var url=$('#url').val();
      console.log(url);
      $('#result').text("");
      $.ajax({
        url: 'ssl_certificate.php',
        type: 'post',
        data: { "url": url},
        success: function(response) {
          if(response==true){
            $('#result').text("Great your website has an ssl certificate");
            $('#result').css('color','green');
            $.ajax({
              url:'insert_result.php',
              type:'post',
              data:{"result":response,"url":url},
              success: function(res){
                console.log(res);
              }
            });
          }else{
            $('#result').text(  "Sorry your website does not have an ssl certificate");
            $('#result').css('color','red');
            $.ajax({
              url:'insert_result.php',
              type:'post',
              data:{"result":0,"url":url},
              success: function(res){
                console.log(res);
              }
            });
          }

        }
      });
    }
</script>
<?php 
require('footer.php');
?>