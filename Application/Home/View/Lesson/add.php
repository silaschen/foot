<ul class="breadcrumb"><li><a href="__APP__">Home</a></li>
<li class="active">发表文章</li>
</ul>
<div class="row predict">
		<div class="col-md-10">
					<form >
							<div class="form-group">
									<input type="text" name="title" class="form-control" placeholder="文章标题">


							</div>
							<div class="form-group">
									<input type="text" name="ms" class="form-control" placeholder="文章描述">


							</div>

								<div class="form-group">
						<textarea name="content"  class="form-control" rows="4" placeholder="文章内容"></textarea>


							</div>
							<div class="form-group">
									<input type="text" name="forteam" class="form-control" placeholder="which team">


							</div>
								<div class="form-group">
									<input type="text" name="tag" class="form-control" placeholder="tags">


							</div>
								<div class="form-group">
									<a class="btn btn-info fb">发表</a>

					</form>



		</div>

</div>
<script type="text/javascript" src="__PUBLIC__/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
       var ed=CKEDITOR.replace("content");
      $('body').on("click",".fb",function(){
          var title=$("input[name='title']").val();
          var description=$("input[name='ms']").val();
          var forteam=$("input[name='forteam']").val();
       
          var content=ed.getData();
          //alert(content);
       
          var tag=$("input[name='tag']").val();

          $.post("__APP__/home/lesson/addessay",{title:title,forteam:forteam,description:description,content:content,tag:tag},function(data){
                    alert("发表成功"); //下一步跳转到个人文章页面
                    //location.href="__APP__/home/lesson/view/"+"id/"+data.id;


          });

      });


  
  $('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});



  });


</script>
