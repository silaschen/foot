<ul class="breadcrumb"><li><a href="__APP__">Home</a></li>
<li class="active"><a href="#">视频</a></li>
<li class="active">{$video.title}</li>
</ul>
  <div class="col-md-9">

  		<div id="video_c" style="width:100%;height:500px;"></div><hr>
      <form>
          <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="畅所欲言，用口才撩妹" name="content"></textarea>

          </div>
          <div class="form-group">
            <a class="submit-videocomment btn btn-info" action="__APP__/home/video/comment" videoid="{$video.id}" pid="0">发言</a>
          </div>




      </form>

          <!-- 11111level -->

                    <ul class="media-list lev1">
                          <?php foreach ($datacomment as $level1) {
                            # code...
                          ?>
                             <li class="media" comment_id="{$level3['id']}">
                  <div class="media-left">
                      <a href="#" rel="author"><img width="48" height="48" class="media-object" src="__ROOT__/{$level1.head_pic}" alt=""></a></div>
                  <div class="media-body">
                      <div class="media-heading">
                          <a href="/user/35157" rel="author">{$level1.editor}</a> 评论于 {$level1.time}  
                      </div>
                      <div class="media-content">
                          <p>{$level1.content}</p>
                      
                            



                      </div>
                  </div>
                  <div class="media-action">
                      <a  href="javascript:void(0);"  rid="{$level3.id}" ><i class="icon-reply"></i> 回复</a>
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
<img src="__PUBLIC__/img/pay.jpg" class="img-responsive">	
 	
  
</div>
       
  </div>



	

<script type="text/javascript" src="__PUBLIC__/ckplayer/ckplayer.js"></script>

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
CKobject.embed('__PUBLIC__/ckplayer/ckplayer.swf','video_c','ckplayer_a1','100%','100%',false,flashvars,video);
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
        '<a href="#" rel="author"><img width="48" height="48" class="media-object" src="__ROOT__/'+data.head_pic+'" alt=""></a></div>'+'<div class="media-body"><div class="media-heading"><a href="/user/35157" rel="author">'+data.editor+'</a> 评论于'+data.time+'</div><div class="media-content"><p>'+data.content+'</p></div></div><div class="media-action">'+
      '<a><i class="icon-reply"></i> 回复</a></div></li><hr>';
      
      $(".lev1").prepend(newli);



          });


    });

</script>