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
	
<div class="comment-filed">
  <!--发表评论区begin-->
  <div>
    <div class="comment-num">
        <span><?php echo ($num); ?>条评论</span>
    </div>
    <div>
        <div>
        <textarea class="txt-commit" replyid="0"></textarea>
        </div>
        <div class="div-txt-submit">
            <a class="comment-submit" parent_id="0" style="" href="javascript:void(0);"><span style=''>发表评论</span></a>
        </div>      
    </div>
  </div>
  <!--发表评论区end-->

  <!--评论列表显示区begin-->
    <!-- <?php echo ($commentlist); ?> -->
    <div class="comment-filed-list" >
        <div><span>全部评论</span></div>
        <div class="comment-list" >
            <!--一级评论列表begin-->
            <ul class="comment-ul">     
                <?php if(is_array($commlist)): $i = 0; $__LIST__ = $commlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li comment_id="<?php echo ($data["id"]); ?>">                   
                    <div >
                        <div>
                            <img class="head-pic"  src="/fuckabc/Public/img/1.jpg" alt="">  
                        </div>
                        <div class="cm">
                            <div class="cm-header">
                            <span><?php echo ($data["editor"]); ?></span>
                            <span><?php echo ($data["time"]); ?></span>
                            </div>
                            <div class="cm-content">
                                <p>
                                    <?php echo ($data["content"]); ?>
                                </p>
                            </div>
                            <div class="cm-footer">
                                <a class="comment-reply" comment_id="<?php echo ($data["id"]); ?>" href="javascript:void(0);">回复</a>                     
                            </div>  
                        </div>                                                              
                    </div>

                    <!--二级评论begin-->
                    <ul class="children">
                       <?php if(is_array($data["children"])): $i = 0; $__LIST__ = $data["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><li comment_id="<?php echo ($child["id"]); ?>">                  
                            <div >
                                <div>
                                    <img class="head-pic"  src="/fuckabc/Public/img/1.jpg" alt=""> 
                                </div>
                                <div class="children-cm">
                                    <div  class="cm-header">
                                    <span><?php echo ($child["editor"]); ?></span>
                                    <span><?php echo ($child["time"]); ?></span>
                                    </div>
                                    <div class="cm-content">
                                        <p>
                                            <?php echo ($child["content"]); ?>
                                        </p>
                                    </div>
                                    <div class="cm-footer">                             
                                        <a class="comment-reply" replyswitch="off" comment_id="<?php echo ($child["id"]); ?>"  href="javascript:void(0);">回复</a>
                                    </div>  
                                </div>                                                              
                            </div>

                            <!--三级评论begin-->
                            <ul class="children">
                                <?php if(is_array($child["children"])): $i = 0; $__LIST__ = $child["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$grandson): $mod = ($i % 2 );++$i;?><li comment_id="<?php echo ($grandson["id"]); ?>">                   
                                    <div >
                                        <div>
                                            <img class="head-pic"  src="/fuckabc/Public/img/1.jpg" alt="">  
                                        </div>
                                        <div class="children-cm">
                                            <div  class="cm-header">
                                            <span><?php echo ($grandson["editor"]); ?></span>
                                            <span><?php echo ($grandson["time"]); ?></span>
                                            </div>
                                            <div class="cm-content">
                                                <p>
                                                    <?php echo ($grandson["content"]); ?>
                                                </p>
                                            </div>
                                            <div class="cm-footer">                             
                                                <!-- <a class="comment-reply" comment_id="1"  href="javascript:void(0);">回复</a> -->
                                            </div>  
                                        </div>                                                              
                                    </div>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>   
                            <!--三级评论end-->

                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>   
                    <!--二级评论end-->

                </li><?php endforeach; endif; else: echo "" ;endif; ?>                                                                     
            </ul>
            <!--一级评论列表end-->
        </div>      
    </div>
  <!--评论列表显示区end-->
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
    $("#ping").on('click',function(){
      var id=$(this).attr("leid");
          $.post('/fuckabc/index.php/home/lesson/comment',{lid:id,content:$("#comm").val()},function(data){
                var con="";
                $.each(data,function(index,obj){
//                     con+='<div class="panel panel-default offset-'+obj.lev+'"><div class="panel-heading">'+obj.editor+'wrote the comment at'+obj.time+'</div><p>'+obj.content+'<a class="pull-right btn" rid="'+obj.id+'" onclick="re(this)">reply</a></p><form style="display:none;" id="r'+obj.id+'" class="replyform">'+'<div class="form-group">'
// +'<textarea name="comment" type="text" class="form-control" id="recontent'+obj.id+'" rows="2" placeholder="pls login here to write ur comment"></textarea>'
// +'<a class="btn btn-info" onclick="huifu(this)" leid="'+obj.lesson_id+'" pid="'+obj.id+'">go</a></div></form></div>';
con+='<li class="media offset-'+obj.lev+'">'+
'<div class="media-left">'+'<a href="#" rel="author"><img width="48" height="48" class="media-object" src="/fuckabc/Public/img/1.jpg" alt="xiaoshenzhen"></a></div>'+'<div class="media-body">'+'<div class="media-heading"><a href="/user/35157" rel="author">'+obj.editor+'</a> 评论于'+obj.time+'</div>'+
    '<div class="media-content"><p>'+obj.content+'</p></div><div class="media-action">'+
        '<a  href="javascript:void(0);" onclick="re(this)" rid="'+obj.id+'"><i class="icon-reply"></i> 回复</a>'+
         '<form style="display:none;" id="r'+obj.id+'" class="replyform">'+'<div class="form-group">'
 +'<textarea name="comment" type="text" class="form-control" id="recontent'+obj.id+'" rows="2" placeholder="pls login here to write ur comment"></textarea>'
+'<a class="btn btn-info" onclick="huifu(this)" leid="'+obj.lesson_id+'" pid="'+obj.id+'">go</a></div></form>'+
        '<a class="pull-right" href="javascript:void(0);"><i class="icon-thumbs-up"></i>111</a></div>'+'</div>'+'</li><hr>';

                });
                $("#plun").empty();
                $("#plun").html(con);


          });


    });
    //pinglun huifu
    $(".replyform").hide();
  
      



   
    //hufu form
   
  })


</script>
<script type="text/javascript">
    function night()
    {
      $(".bd").empty();
      var ht="";
      ht='<div class="jumbotron"><h1>Good night,World.</h1><p>各位大哥大姐，晚安了。</p></div>';
      $(".bd").html(ht);


    }
     function huifu(obj){
        var user=$(obj).attr("user");
        var leid=$(obj).attr('leid');
        var pid=$(obj).attr('pid');
       var hf="";
       if (user=="") {

        alert("你还没有登录，不能回复");
        window.location.href="/fuckabc/index.php/home/user/login";
       }
        $.post("/fuckabc/index.php/home/lesson/reply",{lid:leid,content:$("#recontent"+pid).val(),pid:pid},function(data){
          $.each(data,function(index,obj){
            hf+='<li class="media offset-'+obj.lev+'">'+
'<div class="media-left">'+'<a href="#" rel="author"><img width="48" height="48" class="media-object" src="/fuckabc/Public/img/1.jpg" alt="xiaoshenzhen"></a></div>'+'<div class="media-body">'+'<div class="media-heading"><a href="/user/35157" rel="author">'+obj.editor+'</a> 评论于'+obj.time+'</div>'+
    '<div class="media-content"><p>'+obj.content+'</p></div><div class="media-action">'+
        '<a  href="javascript:void(0);" onclick="re(this)" rid="'+obj.id+'"><i class="icon-reply"></i> 回复</a>'+
         '<form style="display:none;" id="r'+obj.id+'" class="replyform">'+'<div class="form-group">'
 +'<textarea name="comment" type="text" class="form-control" id="recontent'+obj.id+'" rows="2" placeholder="pls login here to write ur comment"></textarea>'
+'<a class="btn btn-info" onclick="huifu(this)" leid="'+obj.lesson_id+'" pid="'+obj.id+'">go</a></div></form>'+
        '<a class="pull-right" href="javascript:void(0);"><i class="icon-thumbs-up"></i>111</a></div>'+'</div>'+'</li><hr>';



          });
             $("#plun").empty();
                $("#plun").html(hf);




        });
  }
function re(obj)
{

    var lid=$(obj).attr('rid');
           $(".replyform").hide();
        $("#r"+lid).css("display","block");
        $("#r"+lid).show();

}


</script>
<!-- <script type="text/javascript">
$(document).ready(function () {
        $('ul.nav > li').click(function(e){
            e.preventDefault();
            $('ul.nav > li').removeClass('active');
            $(this).addClass('active');
            $(this).               
        });            
    });
</script> -->

</body>
</html>