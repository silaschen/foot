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
<li class="active"><a href="#">视频</a></li>
<li class="active"><?php echo ($video["title"]); ?></li>
</ul>
  <div class="col-md-9">

  		<div id="video_c" style="width:100%;height:500px;"></div><hr>
      <form>
          <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="畅所欲言，用口才撩妹" name="content"></textarea>

          </div>
          <div class="form-group">
            <a class="submit-videocomment btn btn-info" action="/foot/index.php/home/video/comment" videoid="<?php echo ($video["id"]); ?>" pid="0">发言</a>
          </div>




      </form>

          <!-- 11111level -->

                    <ul class="media-list lev1">
                          <?php foreach ($datacomment as $level1) { ?>
                             <li class="media" comment_id="<?php echo ($level3['id']); ?>">
                  <div class="media-left">
                      <a href="#" rel="author"><img width="48" height="48" class="media-object" src="/foot/<?php echo ($level1["head_pic"]); ?>" alt=""></a></div>
                  <div class="media-body">
                      <div class="media-heading">
                          <a href="/user/35157" rel="author"><?php echo ($level1["editor"]); ?></a> 评论于 <?php echo ($level1["time"]); ?>  
                      </div>
                      <div class="media-content">
                          <p><?php echo ($level1["content"]); ?></p>
                      
                            



                      </div>
                  </div>
                  <div class="media-action">
                      <a  href="javascript:void(0);"  rid="<?php echo ($level3["id"]); ?>" ><i class="icon-reply"></i> 回复</a>
                  </div>
        </li><hr>
        <?php }?>
        </ul>








          <!-- 111111level -->



  </div>
  
  
  
  <div class="col-md-3">

 <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">xx</div>
  <div class="panel-body">
    <p>haahha hello u knw footbal即将上次按！！！！！！</p>
  </div>
<img src="/foot/Public/img/pay.jpg" class="img-responsive">	
 	
  
</div>
       
  </div>



	

<script type="text/javascript" src="/foot/Public/ckplayer/ckplayer.js"></script>

<script type="text/javascript">

var flashvars={
//f:'http://img.ksbbs.com/asset/Mon_1605/0ec8cc80112a2d6.mp4',
 //f:'http://movie.ks.js.cn/flv/2011/11/8-1.flv',
	f:'<?php echo $f;?>',
	//f:'<?=$f?>',
	c:0,
    p:0
    };
var params={bgcolor:'#000000',allowFullScreen:true,allowScriptAccess:'always'};
var video=['<?php echo $f;?>->video/mp4'];
CKobject.embed('/foot/Public/ckplayer/ckplayer.swf','video_c','ckplayer_a1','100%','100%',false,flashvars,video);
function ckmarqueeadv(){
	return '<a style="color:blue;">成功在于坚持自己一直在做的事的事情，如果你觉得fuckphp对你有帮助请打赏。</a>';
	};

</script>

<script type="text/javascript">
    $('body').on('click','.submit-videocomment',function(){

          var url=$(this).attr("action");

          var videoid=$(this).attr("videoid"); 

          var content=$(this).parent().prev().children("textarea").val();

          if(content == ""){

            alert("不能为空");

          }

          $.post(url,{content:content,videoid:videoid},function(data){

        var newli='<li class="media" comment_id="'+data.id+'"><div class="media-left">'+
        '<a href="#" rel="author"><img width="48" height="48" class="media-object" src="/foot/'+data.head_pic+'" alt=""></a></div>'+'<div class="media-body"><div class="media-heading"><a href="/user/35157" rel="author">'+data.editor+'</a> 评论于'+data.time+'</div><div class="media-content"><p>'+data.content+'</p></div></div><div class="media-action">'+
      '<a><i class="icon-reply"></i> 回复</a></div></li><hr>';
      
      $(".lev1").prepend(newli);



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