<ul class="breadcrumb"><li><a href="__APP__">Home</a></li>
<li class="active"><a href="#">媒体新闻</a></li>
<li class="active">{$picnews.title}</li>
</ul>
<div class="row">
<div class="col-lg-8">
	<h2><?php echo $picnews['title']?></h2>
      <p><span class="glyphicon glyphicon-user"></span><?php echo $picnews['editor']?> &nbsp <span class="glyphicon glyphicon-time"></span><?php echo $picnews['addtime']?> &nbsp  <span class="glyphicon glyphicon-eye-open"></span><?php echo $picnews['view']?>&nbsp &nbsp<span class="glyphicon glyphicon-comment"></span>{$count}</p>	  
      <hr>
      <p class="text-info"><?php echo $picnews['content']?></p>
      <hr>
     <?php if(session("?name")){
      ?>
     <form>
    <div class="form-group">
        <textarea name="comment" type="text" class="form-control" id="comm" rows="3" placeholder="pls login here to write ur comment"></textarea>
    </div>
    <div class="form-group">
    	  <a class="comment-submit btn btn-info">评论</a>
    </div>
    </form>
    <?php }else{?>
    <p>请登录后评论<a class="btn" href="__APP__/home/user/login">登录</a></p>
    <?php }?>

          <!-- 11111level -->

                    <ul class="media-list lev1">
                          <?php foreach ($clist as $vo) { ?>

                <li class="media" comment_id="{$level3['id']}">
                  <div class="media-left">
                      <a href="#" rel="author"><img width="48" height="48" class="media-object" src="__ROOT__/{$level1.head_pic}" alt=""></a></div>
                  <div class="media-body">
                      <div class="media-heading">
                          <a href="{:U('user/usercenter',array('name'=>$vo['nickname']))}" rel="author">{$vo.nickname}</a> 评论于 {$vo.create_time|date="Y-m-d H:i",###}  
                      </div>
                      <div class="media-content">
                          <p>{$vo.content}</p>
                      </div>
                  </div>
          
        </li><hr>

        <?php }?>

        </ul>
        <ul>{$page}</ul>

          <!-- 111111level -->




    </div>
      
    </div>
  <script type="text/javascript">
      $(function(){

          $("body").on("click",".comment-submit",function(){
            //disable this button-submit
            $(".comment-submit").addClass("disabled");
              var cont = $("textarea[name='comment']").val();
              var newsid = "{$picnews.id}";

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
