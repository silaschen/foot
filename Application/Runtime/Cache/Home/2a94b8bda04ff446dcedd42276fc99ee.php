<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Swread</title>
	<link rel="stylesheet" type="text/css" href="/fuckabc/Public/css/bootstrap.css">

</head>
<body>
<nav class="navbar navbar-default" role="navigation">
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">read</a></li>
      
      </ul>
      <form class="navbar-form navbar-left hidden-xs" role="search">
       <div class="form-group">
    <div class="input-group">
     
      <input class="form-control" type="text" placeholder="search">
       <div class="input-group-addon btn"><span class="glyphicon glyphicon-search"></span></div>
    </div>
  </div>
        
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">login</a></li>
        <li><a href="/fuckabc/index.php/home/user/sign">signUp</a></li>
      
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo (session('name')); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">个人中心</a></li>
            <li><a href="/fuckabc/index.php/home/user/logout">logout</a></li>
        
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
<div class="row">
	<div class="col-md-8">

	


       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/fuckabc/Public/img/a.jpg" alt="...">
      <div class="carousel-caption">
        <h3>YII视频教程，每周更新</h3>	
        <p>想说爱你不容易原创</p>
      </div>
    </div>
    <div class="item">
      <img src="/fuckabc/Public/img/2.jpg" alt="...">
      <div class="carousel-caption">
        <h3>YII视频教程，每周更新</h3>	
          <p>想说爱你不容易原创</p>
      </div>
    </div>
    <div class="item">
      <img src="/fuckabc/Public/img/a.jpg" alt="...">
      <div class="carousel-caption">
        <h3>YII视频教程，每周更新</h3>	
          <p>想说爱你不容易原创</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    

</div>
<div class="col-md-4">
	
	<div class="panel panel-success">
  <div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">
    welcome to login here
  </div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="/fuckabc/Public/js/jquery.js"></script>
<script type="text/javascript" src="/fuckabc/Public/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    function djs(){
    $.post('/fuckabc/index.php/home/index/study',function(data){

      $("#d").html(data.d);
        });
  }
  setInterval(djs,1000);


  });

</script>
</body>
</html>