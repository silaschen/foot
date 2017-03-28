<ul class="breadcrumb"><li><a href="__APP__">Home</a></li>
<li class="active">发表文章</li>
</ul>
<div class="row predict">
		<div class="col-md-10">
					<form id="form">
							<div class="form-group">
									<input type="text" name="title" class="form-control" placeholder="文章标题" value="{$info.title}">


							</div>
					
					
					<div class="form-group">
						<textarea name="content"  class="form-control" rows="4" placeholder="文章内容">{$info.content}</textarea>


					</div>
							<div class="form-group">
									<select name="cid" class="form-control" value="{$info.cid}">
										<?php foreach ($team as $key => $vo): ?>
											
											<option value="{$vo.id}">{$vo.clubname}</option>
										<?php endforeach ?>
									</select>


							</div>
							<!-- 	<div class="form-group">
									<input type="text" name="tag" class="form-control" placeholder="tags">


							</div> -->
								<div class="form-group">
									<a class="btn btn-info sub">发表</a>

					</form>



		</div>

</div>
<script type="text/javascript" src="__PUBLIC__/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
       var ed=CKEDITOR.replace("content");
      $('body').on("click",".sub",function(){
      	//disable the submit button
      	$(".sub").addClass("disabled");
          var title=$("input[name='title']").val();
       
          var cid=$("select[name='cid']").val();
       
          var content=ed.getData();
        

          $.post("{:U('picnews/write')}",{"title":title,"cid":cid,"content":content},function(data){
                    alert(data.msg); //下一步跳转到个人文章页面
                    if (data.ret == 1) {

                   	location.href="__APP__/home/picnews/view/"+"id/"+data.id;


                    }
                   

          });

      });
  });

</script>
