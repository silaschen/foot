<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Swread</title>
	<link rel="stylesheet" type="text/css" href="/fuckabc/Public/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/fuckabc/Public/fontsome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="/fuckabc/Public/css/pinglun.css">
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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/fuckabc/index.php">Home</a></li>
        <li><a href="#">实战教程</a></li>
        <li><a href="#">视频教程</a></li>
        <li><a href="/fuckabc/index.php/home/index/donate">捐献</a></li>
        <li><a href="javascript:void(0)" onclick="night()">关于B站</a></li>
      
      </ul>
      <form class="navbar-form navbar-left hidden-xs " role="search">
       <div class="form-group">
    <div class="input-group">
     
      <input class="form-control" type="text" placeholder="search">
       <div class="input-group-addon btn"><span class="glyphicon glyphicon-search"></span></div>
    </div>
  </div>
        
      </form>
<?php if(session("?name")){ ?>
  <ul class="nav navbar-nav navbar-right">
      
      
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i><?php echo (session('name')); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">个人中心</a></li>
            <li><a href="#">我的文章</a></li>
            <li><a href="/fuckabc/index.php/home/user/logout">logout</a></li>
        
          </ul>
        </li>
      </ul>

     
      <?php } else{?>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="/fuckabc/index.php/home/user/login">login</a></li>
        <li><a href="/fuckabc/index.php/home/user/sign">signUp</a></li>
      
      
      </ul>


      <?php  }?>

     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container bd">

	<div class="row">
    <div class="col-md-8">
          <div class="list-group list">
  <a href="#" class="list-group-item">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item xs">xia 消失</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>



    </div>


</div>

</div>
<script type="text/javascript" src="/fuckabc/Public/js/jquery.js"></script>
<script type="text/javascript" src="/fuckabc/Public/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $(".zan").on('click',function(){
        var zid=$(this).attr('zid');
        var hid="z"+zid;
        $.post("/fuckabc/index.php/home/lesson/zan",{zid:zid},function(data){
            $("#"+hid).empty();
             $("#"+hid).html(data.zan);


        });


    });

   
  })


</script>
<script type="text/javascript" src="/fuckabc/Public/js/comm.js"></script>
<script type="text/javascript">
$(document).ready(function(){

var anew="";
anew='<a href="#" class="list-group-item active">第一</a>';
var la='<a href="#" class="list-group-item last">last</a>';
    $(".list").prepend(anew); 
    $(".list").append(la);
    $('body').on('click',".last",function(){
        var laa='<a href="#" class="list-group-item last">我在你身后</a>';
        $(this).after(laa);


    });
     $('body').on('click',".active",function(){
        var aa='<a href="#" class="list-group-item forst">我在你深浅</a>';
        $(this).before(aa);


    });
        $('body').on('click',".xs",function(){
       
        $(this).prev().remove();


    });


});




</script>
</body>
</html>