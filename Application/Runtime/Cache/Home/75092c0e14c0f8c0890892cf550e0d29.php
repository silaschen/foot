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

	<ul class="breadcrumb"><li><a href="/index.php">Home</a></li>
<li class="active"><a href="#">实战教程</a></li>
<li class="active"><?php echo ($model["title"]); ?></li>
</ul>
<div class="row">
<div class="col-lg-8">
	<h2><?php echo $model['title']?></h2>
      <p><span class="glyphicon glyphicon-user"></span><?php echo $model['editor']?> &nbsp <span class="glyphicon glyphicon-time"></span><?php echo $model['addtime']?> &nbsp  <span class="glyphicon glyphicon-eye-open"></span><?php echo $model['view']?>&nbsp &nbsp<span class="glyphicon glyphicon-comment"></span><?php $where['lesson_id']=$model['id']; $count=M("comment")->where($where)->count(); echo $count?></p>	  
      <hr>
      <p class="text-info"><?php echo $model['content']?></p>
      <hr>
     <p>标签：<?php echo $model['tag']?></p><hr>
     <?php if(session("?name")){ ?>
     <form>
    <div class="form-group">
        <textarea name="comment" type="text" class="form-control" id="comm" rows="3" placeholder="pls login here to write ur comment"></textarea>
        <a class="comment-submit btn btn-info"  leid="<?php echo ($model['id']); ?>" pid="0" action="/index.php/home/lesson/addcomment">评论</a><!-- 一级评论pid为0 -->
    </div>
</form>
<?php }else{?>
  <p>u can't comment and please <a href="/index.php/home/user/login">login</a> to comment.</p>


<?php } ?>
<hr>

       <ul  class="media-list dad">
       <!-- 一级评论区 -->
      <?php foreach ($comm as $value) { ?>
      <?php $u['name']=$value['editor']; $user=M("user")->where($u)->find(); ?>
        <li class="media" comment_id="<?php echo ($value['id']); ?>">
                  <div class="media-left">
                      <a href="#" rel="author"><img width="48" height="48" class="media-object" src="/<?php echo ($user["head_pic"]); ?>" alt="xiaoshenzhen"></a></div>
                  <div class="media-body">
                      <div class="media-heading">
                          <a href="/user/35157" rel="author"><?php echo ($value["editor"]); ?></a> 评论于 <?php echo ($value["time"]); ?>  
                      </div>
                      <div class="media-content" comm_id="<?php echo ($value['id']); ?>">
                          <p><?php echo ($value["content"]); ?></p>
                          <div class="hint" countid="<?php echo ($value['id']); ?>">共 <em><?php $where['lesson_id']=$value['lesson_id']; $where['pid']=$value['id']; $countcomment=M("comment")->where($where)->count(); echo $countcomment; ?></em> 条回复</div>
                      <!-- 二级评论区 -->
                          

              <ul class="children media-list">
                              <?php foreach ($value['children'] as $data) { ?>
                              <?php $u['name']=$data['editor']; $user2=M("user")->where($u)->find(); ?>
                 <li class="media" comment_id="<?php echo ($data["id"]); ?>">
                    <div class="media-left">
                           <a href="" rel="author"><img  width="48" height="48" class="media-object" src="<?php echo ($user2["head_pic"]); ?>"></a>
                     </div>
                   <div class="media-body">
                       <div class="media-heading">
                    <a href="/user/33873" rel="author"><?php echo ($data["editor"]); ?></a> 评论于<?php echo ($data["time"]); ?><span class="pull-right">
                        <a class="" rid="<?php echo ($data['id']); ?>" lessonid="<?php echo ($data['lesson_id']); ?>" href="javascript:void(0);"><i class="fa fa-reply"></i> 回复</a>
                                                                    </span>
                </div>
                <div class="media-content" comm_id="<?php echo ($data["id"]); ?>"><p> <?php echo ($data["content"]); ?></p>
                  











                







                </div>
                   </div>
             </li>



                              <?php } ?>

            </ul>
                         <!--  二级评论区 -->














                      </div>
                  </div>
                  <div class="media-action">
                      <a class="comment-reply"  href="javascript:void(0);" lessonid="<?php echo ($value['lesson_id']); ?>" rid="<?php echo ($value["id"]); ?>"><i class="icon-reply"></i> 回复</a>
                  </div>
        </li><hr>
       <?php } ?>
       <!-- 一级评论区 -->
        </ul>



</div>

</div>
<script type="text/javascript" src="/Public/js/comm.js"></script>

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