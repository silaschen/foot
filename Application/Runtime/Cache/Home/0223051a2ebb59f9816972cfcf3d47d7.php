<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zu球网</title>
	<link rel="stylesheet" type="text/css" href="/foot/Public/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/foot/Public/fontsome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="/foot/Public/css/pinglun.css">
  <script type="text/javascript" src="/foot/Public/js/jquery.js"></script>
<script type="text/javascript" src="/foot/Public/js/bootstrap.min.js"></script>

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
        <li class="active"><a href="/foot/index.php">Home</a></li>
        <li><a href="/foot/index.php/home/index/rankcsl">中超积分榜</a></li>
        <li><a href="#">恒大</a></li>
        <li><a href="javascript:void(0)">关于B站</a></li>
      
      </ul>
      <form class="navbar-form navbar-left hidden-xs " role="search">
       <div class="form-group">
    <div class="input-group">
     
      <input class="form-control" type="text" name="key" placeholder="search">
       <div class="submit-search input-group-addon btn" action="/foot/index.php/home/index/search"><span class="glyphicon glyphicon-search"></span></div>
    </div>
  </div>
        
      </form>
<?php if(session("?name")){ ?>
  <ul class="nav navbar-nav navbar-right">
      
      
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i><?php echo (session('name')); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/foot/index.php/home/user/center"><i class="icon-home"></i>个人中心</a></li>
            <li><a href="/foot/index.php/home/picnews/write"><i class="icon-pencil"></i> 写文章</a></li>
            <li><a href="/foot/index.php/home/user/logout"><i class=" icon-signout"></i>logout</a></li>
        
          </ul>
        </li>
      </ul>

     
      <?php } else{?>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="/foot/index.php/home/user/login">login</a></li>
        <li><a href="/foot/index.php/home/user/sign">signUp</a></li>
      
      
      </ul>


      <?php  }?>

     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container" id="bd">

	<ul class="breadcrumb"><li><a href="/foot/index.php">首页</a></li>
<li class="active">个人主页</li>
</ul>
<div class="row">
    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-body" style="background:url(/foot/Public/img/bg-main.jpg); background-size:100% 120px; background-repeat:no-repeat;">
                <div class="user">
                    <a href="/foot/index.php/home/index/img"><img class="avatar center-block" src="/foot/<?php echo ($u["head_pic"]); ?>" alt="<?php echo ($u["name"]); ?>" title="点击更换头像"></a>
                    <h1 style="font-size: 18px;">
                        <?php echo ($u["name"]); ?>                                          </h1>
                    <p><?php echo ($u["sign"]); ?></p>
                                        <div class="button"><a class="follow btn btn-xs btn-success" href="javascript:follow(<?php echo ($u["id"]); ?>);" ><i class="icon icon-plus"></i> 关注Ta</a><a class="btn btn-xs btn-primary" href=""><i class="icon icon-envelope"></i> 发私信</a></div>
                                    
                  
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">个人信息</h2>
                <span class="pull-right"><a href="/foot/index.php/home/user/update" class="btn btn-xs"><i class="icon-cog icon-large"></i></a></span>
            </div>
            <div class="panel-body">
                <ul class="user-info">
                    <li><i class="icon icon-calendar icon-fw"></i> 注册日期：<?php echo ($u["create_time"]); ?></li>
                    <li><i class="icon icon-map-marker icon-fw"></i> <?php echo ($u["address"]); ?></li>
                                        
                    <li><i class=" icon-flag"></i> <?php echo ($u["campus"]); ?></li>
                    <li><i class="icon-envelope-alt"></i> <?php echo ($u["email"]); ?></li>
					            
                     <li><i class="icon icon-link icon-fw"></i> http://weibo.com/yiichina</li>
                                                        <ul>
            </ul></ul></div>
        </div>
    </div>


 <div class="col-lg-6">
        
			<ul id="myTab" class="nav nav-tabs nav-user">
			<li class="active"><a href="#home"  role="tab" data-toggle="tab">全部动态</a></li>
			<li><a href="#lesson"  role="tab" data-toggle="tab">我的文章</a></li>
			
			
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
			  <div role="tabpanel" class="tab-pane active" id="home" >
			  				 <div class="list-group">
						  <?php foreach ($lesson as $value): ?>
							  <a class="list-group-item" href="/foot/index.php/home/lesson/view/id/<?php echo ($value["id"]); ?>">
							    <span class="badge"><?php echo ($value["view"]); ?></span>
							    <?php echo ($value["title"]); ?>
							  </a>
							  <?php endforeach ?>
							</div>



			  </div>
			  <div role="tabpanel" class="tab-pane" id="lesson">
						  <div class="list-group">
						  <?php foreach ($lesson as $value): ?>
							  <a class="list-group-item" href="/foot/index.php/home/lesson/view/id/<?php echo ($value["id"]); ?>">
							    <span class="badge"><?php echo ($value["view"]); ?></span>
							    <?php echo ($value["title"]); ?>
							  </a>
							  <?php endforeach ?>
							</div>
			  
			
			     </div>
			
			</div>
</div>


</div>
<script type="text/javascript">
		function follow(fid)
		{
			$.post(location.href,{"fid":fid},function(data){

				alert(data.msg);
				if (data.ret == 1) {
					$(".follow").html("followed");

				}

			});	
		}



</script>
    

</div>

<div class="container">
<hr>
  <p>Zu球网@<?php echo date("Y"); ?></p>

</div>


<script type="text/javascript" src="/foot/Public/js/user.js"></script>
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
        '<div class="col-md-12"><h3><a href="/foot/index.php/home/lesson/view/id/'+obj.id+'">'+obj.title+'</a></h3>'+
          '<p><a href="/foot/index.php/home/user/usercenter/name/'+obj.editor+'"><span class="glyphicon glyphicon-user"></span>'+obj.editor+'</a> &nbsp <span class="glyphicon glyphicon-time"></span>'+obj.addtime+' &nbsp  <span class="glyphicon glyphicon-eye-open"></span>'+obj.view+'</p>'+
          '<p class="text-success">'+obj.description+'</p>'+
        '</div><input type="hidden" value="" name="id" id="id">'+
'<a href="javascript:void(0)" zid="'+obj.id+'" class="zan" action="/foot/index.php/home/lesson/zan"><span id="z'+obj.id+'" class="glyphicon glyphicon-thumbs-up pull-right">'+obj.zan+'</span></a></div></div></div></div>';

$("#bd").html(con);
            });

              }
          },1000);

          


  });

});



</script>

</body>
</html>