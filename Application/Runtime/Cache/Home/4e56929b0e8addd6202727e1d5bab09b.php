<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
  
    <link rel="icon" href="../../favicon.ico">

    <title>login</title>

    <!-- Bootstrap core CSS -->
    <link href="/foot/Public/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="/foot/Public/fontsome/css/font-awesome.css">

    <!-- Custom styles for this template -->
    <link href="/foot/Public/css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please login</h2>
    <div class="form-group">
    <div class="input-group">
      <div class="submit-search input-group-addon btn" action="/foot/index.php/home/index/search"><span class=" icon-user"></span></div>
      <input type="text" class="form-control" placeholder="User name" id="name" required autofocus>
      
    </div>
  </div>

      <div class="form-group">
    <div class="input-group">
      <div class="submit-search input-group-addon btn" action="/foot/index.php/home/index/search"><span class="icon-lock"></span></div>
       <input type="Password" class="form-control" id="code" placeholder="Password" style="margin-bottom: 0;" required>
      
    </div>
  </div>
       
       
        <div id="warn" class="text-center"></div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <a id="sign" class="btn btn-lg btn-primary btn-block" type="submit">Loign</a>
        <p>还没账号？免费注册<a href="/foot/index.php/home/user/sign" class="btn ">注册</a></p>
      </form>
    </div> <!-- /container -->
    <script type="text/javascript" src="/foot/Public/js/jquery.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
      $("#sign").on('click',function(){
          $.post("/foot/index.php/home/user/chklogin",{name:$("#name").val(),code:$("#code").val()},function(data){
               var warn='<i class="icon-spinner icon-spin icon-2x"></i>';
              $("#warn").html(warn);
            if (data.find>0) {
              setTimeout(function(){
                  location.href="/foot/index.php/home/index/index";

              },3000)
}else{
  setTimeout(function(){
 $("#warn").html('<p class="text-warning">密码与用户名不匹配</p>');

  },3000);



}

          });
      });

  });


</script>
  </body>
</html>