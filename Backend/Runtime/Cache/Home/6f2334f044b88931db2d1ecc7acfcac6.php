<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zu球网后台管理</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="/foot/Public/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="/foot/Public/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="/foot/Public/assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/foot/Public/Fontsome/css/font-awesome.css">
     <!-- GOOGLE FONTS-->
 <!--   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->
     <script src="/foot/Public/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="/foot/Public/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="/foot/Public/assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="/foot/Public/assets/js/custom.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="/foot/admin.php/home/user/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
     <ul class="nav" id="main-menu">

				    <li class="text-center">
                    <img src="/foot/Public/assets/img/find_user.png" class="user-image img-responsive"/>
					 </li>
				
					
                    <li>
                        <a  href="/foot/admin.php/home/user/index"><i class="fa fa-dashboard fa-3x"></i>会员管理</a>
                    </li>

                     <li>

                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>文章管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/foot/admin.php/home/lesson/index">非图片文章管理</a>
                            </li>
                            <li>
                                <a href="/foot/admin.php/home/picnews/index">图片文章管理</a>
                            </li>
                        
                        </ul>
                      </li>  
                  
                      <li>
                        <a  href="/foot/admin.php/home/rank/index"><i class="fa fa-dashboard fa-3x"></i>球队管理</a>
                    </li>


                    <li>
                        <a  href="/foot/admin.php/home/video/index"><i class="fa fa-dashboard fa-3x"></i>视频管理</a>
                    </li>
                    

                      <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>access管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/foot/admin.php/home/Access/nodelist">accesslist</a>
                            </li>
                            <li>
                                <a href="/foot/admin.php/home/Access/rolelist">Role</a>
                            </li>

                              <li>
                                <a href="/foot/admin.php/home/Access/userlist">user</a>
                            </li>

                            

                        
                        </ul>
                      </li>  
                	
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li>
                        <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <!--    <div class="row">
                    <div class="col-md-12">
                     <h2>欢迎来到Zu球网管理后台</h2>   
                        <h5>Welcome <?php echo (session('adminname')); ?> , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 
                   <div class="row">
                  <link rel="stylesheet" href="/foot/Public/jQuery-File-Upload-9.9.3/css/jquery.fileupload.css">
		<div class="col-md-10" id="addpic">
					<form >
							<div class="form-group">
									<input type="text" name="title" class="form-control" placeholder="文章标题">


							</div>
							<div class="form-group">
									<input type="text" name="ms" class="form-control" placeholder="文章描述">


							</div>

							   <div class='form-group'>
              <label>封面图片：</label>
                <a href="javascript:$('#bdpic').val('');$('.showcover').html('');" onclick="return confirm('确定清除封面？');" class='pull-right'>清除封面</a> <br>
                  <button type='button' class='btn btn-success btn-sm fileinput-button'><i class="glyphicon glyphicon-picture"></i> <small>推荐尺寸 400*300 点击上传</small><input  id="uploadcover" type="file" name="files" accept="image/*" multiple=""></button>
                    <div id="progress" class="progress">
                        <div class="progress-bar progress-bar-success"></div>
                    </div>
                    <div id="files" class="files">
                    </div>
                    <div class='showcover'>
                          
                    </div>
                <input class='hide' name='bdpic' id='bdpic'>
            </div>

								<div class="form-group">
						<textarea name="content"  class="form-control" rows="4" placeholder="文章内容"></textarea>


							</div>
							<div class="form-group">
									<input type="text" name="type" class="form-control" placeholder="which team">


							</div>
							
								<div class="form-group">
									<a class="btn btn-info news-add">发表</a>

										




					</form>



		</div>


<script type="text/javascript" src="/foot/Public/ckeditor/ckeditor.js"></script>
<script type="text/javascript">


		 var ed=CKEDITOR.replace("content");
		 $('body').on('click','.news-add',function(){

		 var title=$("input[name='title']").val();
		 var ms=$("input[name='ms']").val();
		 var content=ed.getData();
		 var type=$("input[name='type']").val();

	

		 });
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/foot/Public/jQuery-File-Upload-9.9.3/js/vendor/jquery.ui.widget.js"></script>
<script src="/foot/Public/jQuery-File-Upload-9.9.3/js/load-image.all.min.js"></script>
<script src="/foot/Public/jQuery-File-Upload-9.9.3/js/canvas-to-blob.min.js"></script>
<script src="/foot/Public/jQuery-File-Upload-9.9.3/js/jquery.iframe-transport.js"></script>
<script src="/foot/Public/jQuery-File-Upload-9.9.3/js/jquery.fileupload.js"></script>
<script src="/foot/Public/jQuery-File-Upload-9.9.3/js/jquery.fileupload-process.js"></script>
<script src="/foot/Public/jQuery-File-Upload-9.9.3/js/jquery.fileupload-image.js"></script>
<script type="text/javascript">
$(function(){
    $('#uploadcover').fileupload({
        url: "<?php echo U('Common/loadimg');?>",
        dataType: 'JSON',
        acceptFileTypes: 'jpg,png,gif,jpeg,bmp',
        maxFileSize: 8000000, // 800kb
         disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator && navigator.userAgent),
        imageMaxWidth: 400, //自动裁剪保持该宽度
        // imageMaxHeight: 300,
        // imageCrop: true,
        done: function (e, data) {
          if(data.result.ret == 1){
              $("input[name='bdpic']").val(data.result.file);
                alert(data.result.file);
              $(".showcover").html("<img src='/foot/"+data.result.file+"'>");
            }else{
              alert(data.result.msg);
            }
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');

});
</script>

                 </div>

               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
  
    <script type="text/javascript" src="/foot/Public/js/rank.js"></script>
    

  <script type="text/javascript">
  $(".top").on('click',function(){
    var zid=$(this).attr('zid');
    // alert(zid);
    $.post('/foot/admin.php/home/zan/top',{id:zid,},function(data){
       
        $("#"+zid).html(data.xjj);


    });
  });



</script>
<script type="text/javascript">
function addu(){
   $.post('/foot/admin.php/home/user/add',{name:$("#name").val(),password:$("#password").val()},function(data){
      $("#help").html("注册中...");
      setTimeout(function(){

        $("#help").html(data.info);
      },3000)


  }); 
 }
 function showadd(obj){
    $("#index_user").empty();
    var form="";
  form='<div class="col-md-9"><form ><div class="form-group"><label>username</label><input class="form-control" name="name" id="name" type="text"/></div>'+
  '<div class="form-group"><label>password</label><input class="form-control" name="password" type="password" id="password"/></div><div class="form-group"><p id="help" class="text-warning"></p><a class="btn btn-info" id="uadd" onclick="addu()">确认</a></div>'+'</div></form>';
                                     
         $("#index_user").html(form);
  
}

 function update(btn)
{

  var upid=$(btn).attr("uid");
  // alert(upid);

  var form="";

           $.post('/foot/admin.php/home/user/update',{id:upid},function(data){

              // $("#name").val(data.name);
              // $("#password").val(data.password);
                form='<div class="col-md-9"><form ><div class="form-group"><label>username</label><input class="form-control" name="name" id="name" type="text" value="'+data.name+'"/></div>'+
  '<div class="form-group"><label>password</label><input class="form-control" name="password" type="password" id="password" value="'+data.password+'"/></div><div class="form-group"><p id="help" class="text-warning"></p><a class="btn btn-info" id="uadd" updateid="'+data.id+'" onclick="updateu(this)">确认</a></div>'+'</div></form>';
    $("#index_user").empty();
   $("#index_user").html(form);

  });


}
function updateu(obj){
  var id=$(obj).attr('updateid');
   $.post('/foot/admin.php/home/user/doup',{id:id,name:$("#name").val(),password:$("#password").val()},function(data){
      $("#help").html("修改中...");
      setTimeout(function(){

        $("#help").html(data.info);
      },2000)


  }); 
 }


 






</script>
<script type="text/javascript">
    $("#main-menu > li").eq('<?php echo ($nav); ?>').children("a").addClass("active-menu");


</script>
    
</body>
</html>