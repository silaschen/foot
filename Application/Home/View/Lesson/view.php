<ul class="breadcrumb"><li><a href="__APP__">Home</a></li>
<li class="active"><a href="#">实战教程</a></li>
<li class="active">{$model.title}</li>
</ul>
<div class="row">
<div class="col-lg-8">
	<h2><?php echo $model['title']?></h2>
      <p><span class="glyphicon glyphicon-user"></span><?php echo $model['editor']?> &nbsp <span class="glyphicon glyphicon-time"></span><?php echo $model['addtime']?> &nbsp  <span class="glyphicon glyphicon-eye-open"></span><?php echo $model['view']?>&nbsp &nbsp<span class="glyphicon glyphicon-comment"></span><?php $where['lesson_id']=$model['id']; $count=M("comment")->where($where)->count(); echo $count?></p>	  
      <hr>
      <p class="text-info"><?php echo $model['content']?></p>
      <hr>
     <p>标签：<?php echo $model['tag']?></p><hr>
     <?php if(session("?name")){



      ?>
     <form>
    <div class="form-group">
        <textarea name="comment" type="text" class="form-control" id="comm" rows="3" placeholder="pls login here to write ur comment"></textarea>
        <a class="comment-submit btn btn-info"  leid="{$model['id']}" pid="0" action="__APP__/home/lesson/addcomment">评论</a><!-- 一级评论pid为0 -->
    </div>
</form>
<?php }else{?>
  <p>u can't comment and please <a href="__APP__/home/user/login">login</a> to comment.</p>


<?php }  ?>
<hr>

       <ul  class="media-list dad">
       <!-- 一级评论区 -->
      <?php foreach ($comm as $value) { ?>
      <?php $u['name']=$value['editor']; $user=M("user")->where($u)->find(); ?>
        <li class="media" comment_id="{$value['id']}">
                  <div class="media-left">
                      <a href="#" rel="author"><img width="48" height="48" class="media-object" src="__ROOT__/{$user.head_pic}" alt="xiaoshenzhen"></a></div>
                  <div class="media-body">
                      <div class="media-heading">
                          <a href="/user/35157" rel="author">{$value.editor}</a> 评论于 {$value.time}  
                      </div>
                      <div class="media-content" comm_id="{$value['id']}">
                          <p>{$value.content}</p>
                          <div class="hint" countid="{$value['id']}">共 <em><?php $where['lesson_id']=$value['lesson_id']; $where['pid']=$value['id']; $countcomment=M("comment")->where($where)->count(); echo $countcomment; ?></em> 条回复</div>
                      <!-- 二级评论区 -->
                          

              <ul class="children media-list">
                              <?php foreach ($value['children'] as $data) {
                              ?>
                              <?php $u['name']=$data['editor']; $user2=M("user")->where($u)->find(); ?>
                 <li class="media" comment_id="{$data.id}">
                    <div class="media-left">
                           <a href="" rel="author"><img  width="48" height="48" class="media-object" src="__ROOT__{$user2.head_pic}"></a>
                     </div>
                   <div class="media-body">
                       <div class="media-heading">
                    <a href="/user/33873" rel="author">{$data.editor}</a> 评论于{$data.time}<span class="pull-right">
                        <a class="" rid="{$data['id']}" lessonid="{$data['lesson_id']}" href="javascript:void(0);"><i class="fa fa-reply"></i> 回复</a>
                                                                    </span>
                </div>
                <div class="media-content" comm_id="{$data.id}"><p> {$data.content}</p>
                  











                







                </div>
                   </div>
             </li>



                              <?php } ?>

            </ul>
                         <!--  二级评论区 -->














                      </div>
                  </div>
                  <div class="media-action">
                      <a class="comment-reply"  href="javascript:void(0);" lessonid="{$value['lesson_id']}" rid="{$value.id}"><i class="icon-reply"></i> 回复</a>
                  </div>
        </li><hr>
       <?php } ?>
       <!-- 一级评论区 -->
        </ul>



</div>

</div>
<script type="text/javascript" src="__PUBLIC__/js/comm.js"></script>