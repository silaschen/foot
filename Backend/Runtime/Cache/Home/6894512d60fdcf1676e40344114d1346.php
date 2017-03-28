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
    <link href="/foot/Public/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="/foot/Public/css/signin.css" rel="stylesheet">
    <style type="text/css">
/*loading*/
#mask{position: fixed;z-index: 999999;top: 0;bottom: 0;left: 0;right: 0;display: none;}
#mask .loading{padding: 10px 15px;background: #333;opacity: 0.75;text-align: center;color: #FFF;line-height: 23px;position: fixed;left:0;right: 0;bottom: 0;top: 0;width: 120px;height: 65px;z-index: 999999;margin: auto;border-radius: 4px;}
</style>
  </head>

  <body>

    <div class="container">

      <form id="form" class="form-signin" role="form" >
        <h2 class="form-signin-heading">后台登录</h2>
        <input type="text" class="form-control" placeholder="User" id="name" name="name" required autofocus>
        <input type="password" name="password" class="form-control" id="code" placeholder="Password" required>
        <div class="text-danger text-center" id="warn"></div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <a id="sign" class="btn btn-lg btn-primary btn-block" href="javascript:login()" type="submit">登录</a>
      </form>
    </div> <!-- /container -->
    <script type="text/javascript" src="/foot/Public/js/jquery.js"></script>

  <script type="text/javascript">
  function loading2(text,s){
    $("#mask > .loading").html("<img src='/foot/Public/img/loading_icon.gif'><br>"+text);
    if(s == undefined){
        $("#mask").show();
    }else{
        if(s > 0){
            setTimeout(function(){$("#mask").hide();},s);
        }else{
            $("#mask").hide();
        }
    }
}
      function login(){
        //禁止按钮
        loading2("logining...");
        $(".btn-login").attr("disabled",true);
        var name = $("input[name='name']").val();
        var pwd = $("input[name='password']").val();
        $.post(location.href,{"name":name,"pwd":pwd},function(data){
              alert(data.msg);
              if (data.ret == 1) {
                location.href = "<?php echo U('Index/index');?>";
              }else{
                loading2("",0);
              }

        },'JSON');
      }
  </script>

<div id="mask"><div class='loading'></div></div>
  </body>
</html>