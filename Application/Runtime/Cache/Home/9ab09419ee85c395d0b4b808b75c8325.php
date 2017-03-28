<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
  
    <link rel="icon" href="../../favicon.ico">

    <title>signUp</title>

    <!-- Bootstrap core CSS -->
    <link href="/foot/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/foot/Public/css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign up</h2>
        <input type="text" class="form-control" placeholder="User name" id="name" required autofocus>
        <input type="password" class="form-control" id="code" placeholder="Password" required>
        <p class="text-muted" id="warn"></p>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <a id="sign" class="btn btn-lg btn-primary btn-block" type="submit">Sign</a>
      </form>

    </div> <!-- /container -->
    <script type="text/javascript" src="/foot/Public/js/jquery.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
      $("#sign").on('click',function(){
          $.post("/foot/index.php/home/user/signup",{name:$("#name").val(),code:$("#code").val()},function(data){
            if (data.state) {
              $("#warn").html(data.info);
              setTimeout(function(){
                $("#warn").html('登陆中...');
              },2000);
              setTimeout(function(){
                var name=data.name;
                $.post('/foot/index.php/home/user/gosession',{name:name});

                  location.href="/foot/index.php/home/index/index";

              },3000)
}else{
  $("#warn").html(data.info);


}

          });
      });

  });


</script>
  </body>
</html>