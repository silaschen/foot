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

	<ul class="breadcrumb"><li><a href="/foot/index.php">Home</a></li>
<li class="active"><a href="#">媒体新闻</a></li>
<li class="active"><?php echo ($picnews["title"]); ?></li>
</ul>
<div class="row">
<div class="col-lg-8">
	<h2><?php echo $picnews['title']?></h2>
      <p><span class="glyphicon glyphicon-user"></span><?php echo $picnews['editor']?> &nbsp <span class="glyphicon glyphicon-time"></span><?php echo $picnews['addtime']?> &nbsp  <span class="glyphicon glyphicon-eye-open"></span><?php echo $picnews['view']?>&nbsp &nbsp<span class="glyphicon glyphicon-comment"></span><?php echo ($count); ?></p>	  
      <hr>
      <p class="text-info"><?php echo $picnews['content']?></p>
      <hr>
     <?php if(session("?name")){ ?>
     <form>
    <div class="form-group">
        <textarea name="comment" type="text" class="form-control" id="comm" rows="3" placeholder="pls login here to write ur comment"></textarea>
    </div>
    <div class="form-group">
    	  <a class="comment-submit btn btn-info">评论</a>
    </div>
    </form>
    <?php }else{?>
    <p>请登录后评论<a class="btn" href="/foot/index.php/home/user/login">登录</a></p>
    <?php }?>

          <!-- 11111level -->

                    <ul class="media-list lev1">
                          <?php foreach ($clist as $vo) { ?>

                <li class="media" comment_id="<?php echo ($level3['id']); ?>">
                  <div class="media-left">
                      <a href="#" rel="author"><img width="48" height="48" class="media-object" src="/foot/<?php echo ($level1["head_pic"]); ?>" alt=""></a></div>
                  <div class="media-body">
                      <div class="media-heading">
                          <a href="<?php echo U('user/usercenter',array('name'=>$vo['nickname']));?>" rel="author"><?php echo ($vo["nickname"]); ?></a> 评论于 <?php echo (date("Y-m-d H:i",$vo["create_time"])); ?>  
                      </div>
                      <div class="media-content">
                          <p><?php echo ($vo["content"]); ?></p>
                      </div>
                  </div>
          
        </li><hr>

        <?php }?>

        </ul>
        <ul><?php echo ($page); ?></ul>

          <!-- 111111level -->




    </div>
      
    </div>
  <script type="text/javascript">
      $(function(){

          $("body").on("click",".comment-submit",function(){
            //disable this button-submit
            $(".comment-submit").addClass("disabled");
              var cont = $("textarea[name='comment']").val();
              var newsid = "<?php echo ($picnews["id"]); ?>";

              $.post(location.href,{"newsid":newsid,"comm":cont},function(data){
                

                    var main = "<li class='media'><div class='media-left'>"+"<a href='#' rel='author'><img width='48' height='48' class='media-object' src=''></a></div><div class='media-body'><div class='media-heading'>"+"<a href='' rel='author'>"+data.nickname+"</a> 评论于 "+data.create_time+"</div><div class='media-content'><p>"+data.content+"</p></div></div></li>";
                    //prepend thhis coment at the container
                      $(".lev1").prepend(main);
                      //after comment ssuccessfully,enable the button-submit
                      $("textarea[name='comment']").val("");//clear the texttarea
                      $(".comment-submit").removeClass("disabled");
              });
          });
      });



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