<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zu球网</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/Public/fontsome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="/Public/css/pinglun.css">
  <script type="text/javascript" src="/Public/js/jquery.js"></script>
<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>

<style type="text/css">
  .row{margin:0 -10px;}
  .row > [class*="col-"] {
    padding: 0 10px;
  }
</style>
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Zu球网</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/index.php">Home</a></li>
        <li><a href="/index.php/home/index/rankcsl">中超积分榜</a></li>
        <li><a href="#">恒大</a></li>
        <li><a href="#">国安</a></li>
        <li><a href="#">世预赛</a></li>
         <li><a href="#">赛程</a></li>
        <li><a href="/index.php/home/index/donate">捐献</a></li>
        <li><a href="javascript:void(0)">关于B站</a></li>
      
      </ul>
      <form class="navbar-form navbar-left hidden-xs " role="search">
       <div class="form-group">
    <div class="input-group">
     
      <input class="form-control" type="text" name="key" placeholder="search">
       <div class="submit-search input-group-addon btn" action="/index.php/home/index/search"><span class="glyphicon glyphicon-search"></span></div>
    </div>
  </div>
        
      </form>
<?php if(session("?name")){ ?>
  <ul class="nav navbar-nav navbar-right">
      
      
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i><?php echo (session('name')); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/index.php/home/user/center"><i class="icon-home"></i>个人中心</a></li>
            <li><a href="/index.php/home/lesson/add"><i class="icon-pencil"></i> 写文章</a></li>
            <li><a href="/index.php/home/user/logout"><i class=" icon-signout"></i>logout</a></li>
        
          </ul>
        </li>
      </ul>

     
      <?php } else{?>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="/index.php/home/user/login">login</a></li>
        <li><a href="/index.php/home/user/sign">signUp</a></li>
      
      
      </ul>


      <?php  }?>

     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container" id="bd">

	<ul class="breadcrumb"><li><a href="">Home</a></li>
<li class="active">捐献</li>
</ul>
  <div class="col-md-8">
      <h2>捐赠</h2><hr>
      <p class="text-info">我就是站长，喜欢吃牛舌饼。写这个网站纯属自己的一时冲动，因为我知道自学php所遇到的问题，和困难。为了帮助大家，我独资创建了本网站。本站旨在帮助每一位热爱php开发的同学。
      本站主要以thinphp,yii框架为核心进行知识讲解。所有内容免费开源。但是大家都知道，服务器和七牛云需要支付一定费用。恳请各位同学捐赠自己的一份心意。你的支持将是我们更大的动力！无论捐多捐少，你的心意将是陈某某巨大的动力。当然，我也希望志同道合的朋友加入我，一同开创天地。</p>	
    <div class="col-md-4">
    <h3>支付宝扫一扫</h3>
    <img src="img/pay.jpg" class="img-responsive"></div>
    
</div>

</div>

<div class="container">
<hr>
  <p>Zu球网@<?php echo date("Y"); ?></p>

</div>


<script type="text/javascript" src="/Public/js/user.js"></script>
<script type="text/javascript">
    $('body').on('click','.submit-search',function(){
  var url=$(this).attr("action");
  var key=$("input[name='key']").val();
  $.get(url,{key:key},function(data){
    var newb='<div class="text-center" style="padding:200px 20px;"><i class="icon-spinner icon-spin icon-3x"></i></div>';
          $("#bd").html(newb);
          setTimeout(function(){

            $("#bd").empty();
            var con="";
             if(data.back=="0"){
                  con='<div class="text-center" style="padding:150px 20px"><p>没有搜寻到与['+key+']相关的内容</p></div>';
                    $("#bd").html(con);
              }
              else{
                           $.each(data.needdata,function(index,obj){
          


              con+='<div class="row"><div class="col-md-9"><div class="panel panel-success" ><div class="panel-body">'+ 
        '<div class="col-md-12"><h3><a href="/index.php/home/lesson/view/id/'+obj.id+'">'+obj.title+'</a></h3>'+
          '<p><a href="/index.php/home/user/usercenter/name/'+obj.editor+'"><span class="glyphicon glyphicon-user"></span>'+obj.editor+'</a> &nbsp <span class="glyphicon glyphicon-time"></span>'+obj.addtime+' &nbsp  <span class="glyphicon glyphicon-eye-open"></span>'+obj.view+'</p>'+
          '<p class="text-success">'+obj.description+'</p>'+
        '</div><input type="hidden" value="" name="id" id="id">'+
'<a href="javascript:void(0)" zid="'+obj.id+'" class="zan" action="/index.php/home/lesson/zan"><span id="z'+obj.id+'" class="glyphicon glyphicon-thumbs-up pull-right">'+obj.zan+'</span></a></div></div></div></div>';

$("#bd").html(con);
            });

              }
     
        


          },2000);

          


  });

});



</script>

</body>
</html>