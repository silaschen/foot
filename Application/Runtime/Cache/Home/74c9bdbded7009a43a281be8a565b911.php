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

	<div class="row">
<div class="col-lg-8">

	


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
      <a href="/foot/index.php/home/video/play"><img  src="/foot/Public/img/zu3.jpg" alt="..."></a>
      <div class="carousel-caption">
        <h3 class="hidden-xs">西安沦陷，伤的是球迷</h3>	
        <p></p>
      </div>
    </div>
    <div class="item">
      <a href="/foot/index.php/home/video/play"><img src="/foot/Public/img/zu3.jpg" alt="..."></a>
      <div class="carousel-caption">
        <h3 class="hidden-xs">西安沦陷，伤的是球迷</h3>	
         
      </div>
    </div>
    <div class="item">
      <a href="/foot/index.php/home/video/play"><img src="/foot/Public/img/zu3.jpg" alt="..."></a>
      <div class="carousel-caption">
        <h3 class="hidden-xs">西安沦陷，伤的是球迷</h3>	
          
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control hidden-xs" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control hidden-xs" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" style="margin-top: 15px;">
  <li role="presentation" class="active"><a href="#latestnews" role="tab" data-toggle="tab">最新消息</a></li>
  <li role="presentation"><a href="#picnews" role="tab" data-toggle="tab">图片</a></li>
  <li role="presentation"><a href="#videonews" role="tab" data-toggle="tab">视频</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="latestnews" style="padding:10px 0px;">
    

      <ul class="media-list">
      <?php foreach ($list2 as $v) { ?>
  <li class="media">
    <a class="media-left" href="/foot/index.php/v/picnews/view/id/<?php echo ($v["id"]); ?>">
      <img width="54" height="54" src="/foot/<?php echo ($v["cover"]); ?>" alt="...">
    </a>
    <div class="media-body">
       <a class="media-left" href="/foot/index.php/home/picnews/view/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?>
      </a>
      <p class="text-muted"><?php echo ($v["ms"]); ?></p>
    </div>
  </li><hr>
   <?php }?>
</ul>



  </div>
  <div role="tabpanel" class="tab-pane" id="picnews" style="padding:10px 0px;">
    
         <ul class="media-list">
      <?php foreach ($list3 as $v) { ?>
  <li class="media">
    <a class="media-left" href="/foot/index.php/v/picnews/view/id/<?php echo ($v["id"]); ?>">
      <img width="54" height="54" src="/foot/<?php echo ($v["cover"]); ?>" alt="...">
    </a>
    <div class="media-body">
       <a class="media-left" href="/foot/index.php/home/picnews/view/id/<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?>
      </a>
      <p class="text-muted"><?php echo ($v["ms"]); ?></p>
    </div>
  </li><hr>
   <?php }?>
</ul>



  </div>
  <div role="tabpanel" class="tab-pane" id="videonews" style="padding:10px 0px;">
             <ul class="media-list">
      <?php foreach ($video as $v) { ?>
  <li class="media">
    <a class="media-left" href="/foot/index.php/home/video/play/id/<?php echo ($v["id"]); ?>">
      <img width="54" height="54" src="/foot/<?php echo ($v["cover"]); ?>" alt="...">
    </a>
    <div class="media-body">
      <p><?php echo ($v["title"]); ?>
      </p>
      <p class="text-muted"><?php echo ($v["addtime"]); ?></p>
    </div>
  </li><hr>
   <?php }?>
</ul>


  </div>
</div>



      <div class="row">
      <?php foreach ($list4 as $value) { ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height: 320px;">
      <a href="/foot/index.php/home/picnews/view/id/<?php echo ($value["id"]); ?>"><img style="width: 100%; height: 140px;" src="/foot/<?php echo ($value["cover"]); ?>" alt="..."></a>
      <div class="caption"  padding="10px;">
        <a href="/foot/index.php/home/picnews/view/id/<?php echo ($value["id"]); ?>"><h4><?php echo ($value["title"]); ?></h4></a>

        <p><?php  $ms=mb_substr($value['ms'], 0,60); echo $ms."<p>....</p>";?></p>
      </div>
    </div>
  </div>
  <?php }?>

</div>
  <ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#fastnew"  data-toggle="tab">快报</a></li>
  <li><a href="#gzhd"  data-toggle="tab">恒大</a></li>
  <li><a href="#sdln"  data-toggle="tab">鲁能</a></li>
 
</ul>
 
<div class="tab-content">
  <div class="tab-pane active" id="fastnew" style="padding:10px 2px;">
    <ul class="media-list">
      <?php foreach ($video as $v) { ?>
  <li class="media">
    <a class="media-left" href="/foot/index.php/index.php/video/id/<?php echo ($v["id"]); ?>">
      <img width="54" height="54" src="/foot/<?php echo ($v["cover"]); ?>" alt="...">
    </a>
    <div class="media-body">
      <p><?php echo ($v["title"]); ?>
      </p>
      <p class="text-muted"><?php echo ($v["addtime"]); ?></p>
    </div>
  </li><hr>
   <?php }?>
</ul>





  </div>
  <div class="tab-pane" id="gzhd" style="padding:10px 2px;">
                     <ul class="media-list">
      <?php foreach ($gzhdl as $home) { ?>
  <li class="media">
    <a class="media-left" href="#">
      <img width="54" height="54" src="/foot/<?php echo ($home["cover"]); ?>" alt="...">
    </a>
    <div class="media-body">
      <h4 class="media-heading"><?php echo ($home["title"]); ?></h4>
      <p><?php echo ($home["ms"]); ?>
      </p>
    </div>
  </li>
   <?php }?>
</ul>







  </div>
  <div class="tab-pane" id="sdln" style="padding:10px 2px;">
           <ul class="media-list">
      <?php foreach ($sdlnl as $home) { ?>
  <li class="media">
    <a class="media-left" href="#">
      <img width="54" height="54" src="/foot/<?php echo ($home["cover"]); ?>" alt="...">
    </a>
    <div class="media-body">
      <h4 class="media-heading"><?php echo ($home["title"]); ?></h4>
      <p><?php echo ($home["ms"]); ?>
      </p>
    </div>
  </li>
   <?php }?>
</ul>

  </div>
  
</div>

 
<script>
  $(function () {
    $('#myTab a:last').tab('show');
  })
</script>


</div>
<div class="col-lg-4">
	
                 
                    



               

	<div class="panel panel-success">
  <div class="panel-heading">2016中超联赛排名</div>
  <div class="panel-body">
      <table class="table table-hover">
        
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>TeamClub</th>
                    <th>场次</th>
                    <th>净胜球</th>
                    <th>积分</th>


                </tr>
              
            </thead>
            <tbody>
            <?php if(is_array($rank)): foreach($rank as $key=>$ranksoccer): ?><tr>
                    <td><?php echo ($ranksoccer["rank"]); ?></td>
                    <td><?php echo ($ranksoccer["clubname"]); ?></td>
                    <td><?php echo ($ranksoccer["matchtime"]); ?></td>
                    <td><?php echo ($ranksoccer["directshot"]); ?></td>
                    <td><?php echo ($ranksoccer["score"]); ?></td>


                </tr><?php endforeach; endif; ?>

            </tbody>


      </table>
      <a href="/foot/index.php/home/index/rankcsl" class="text-info">查看完整积分榜</a>
  </div>
</div>


<div class="panel panel-success">
  <div class="panel-body">
      <ul class="media-list">
      <?php foreach ($video as $v) { ?>
  <li class="media">
    <a class="media-left" href="/foot/index.php/v/picnews/view/id/<?php echo ($v["id"]); ?>">
      <img width="54" height="54" src="/foot/<?php echo ($v["cover"]); ?>" alt="...">
    </a>
    <div class="media-body">
      <p><?php echo ($v["title"]); ?>
      </p>
      <p class="text-muted"><?php echo ($v["addtime"]); ?></p>
    </div>
  </li><hr>
   <?php }?>
</ul>
  </div>
</div>

   <div class="panel panel-success">
      <div class="panel-heading">
      十万火急
      </div>
  <div class="panel-body" style="padding:0px;">
    
      <div class="list-group" style="margin-bottom: 0px;">
              <?php foreach ($left1 as $value): ?>
                <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading"><?php echo ($value["title"]); ?></h4>

    <p class="list-group-item-text"><?php $con=mb_substr($value['description'], 0,50);echo $con; ?></p><br>
    <p class="text-muted" style="font-size: 12px;"><?php echo ($value["addtime"]); ?></p>
    </a>
                <?php endforeach ?>
              </div>


  </div>   


   </div>

      <div class="panel panel-success">
      <div class="panel-heading">
       鲁能泰山
      </div>
  <div class="panel-body" style="padding:0px;">
    
      <div class="list-group" style="margin-bottom: 0px;">
              <?php foreach ($sdln as $value): ?>
                <a class="list-group-item" href="/foot/index.php/home/lesson/view/id/<?php echo ($value["id"]); ?>">
                  <span class="badge"><?php echo ($value["view"]); ?></span>
                  <?php echo ($value["title"]); ?>
                </a>
                <?php endforeach ?>
              </div>


  </div>   


  </div>
<!--   hah -->
          <div class="panel panel-success">
   
  <div class="panel-body" style="padding:0px;">
    
      <div class="list-group" style="margin-bottom: 0px;">
              <?php foreach ($gzhdvideo as $value): ?>
                <a class="list-group-item" href="/foot/index.php/home/video/play/id/<?php echo ($value["id"]); ?>">
                <span class="glyphicon glyphicon-facetime-video"></span>
                  <span class="badge"><?php echo ($value["view"]); ?></span>
                  <?php echo ($value["title"]); ?>
                </a>
                <?php endforeach ?>
              </div>


  </div>   


   </div>














<!--   ha -->



           <div class="panel panel-success">
      <div class="panel-heading">
      北京国安
      </div>
  <div class="panel-body" style="padding:0px;">
    
      <div class="list-group" style="margin-bottom: 0px;">
              <?php foreach ($bjga as $value): ?>
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
      $("body").on('click',".zan",function(){
        var zid=$(this).attr('zid');
        var hid="z"+zid;
        var url=$(this).attr("action");
        $.post(url,{zid:zid},function(data){
            $("#"+hid).empty();
             $("#"+hid).html(data.zan);


        });


    });
  
</script>
  
<script type="text/javascript" src="/foot/Public/js/hammer.min.js"></script>
<script type="text/javascript" src="/foot/Public/js/jquery.hammer.js"></script>
<script type="text/javascript">
$("#carousel-example-generic").hammer().bind("swipeleft", function(){


 $(this).carousel("next");
});
$("#carousel-example-generic").hammer().bind("swiperight", function(){


 $(this).carousel("prev");
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