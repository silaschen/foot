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
                 	<div class="col-md-12">
					<form id="csw" >
             
					<div class="form-group kk" qid="1">
             						 <label>who is sb?</label>
									<input type="radio" name="1" class="form-control" value="1">yaoming
									<input type="radio" name="1" class="form-control" value="2">james
									<input type="radio" name="1" class="form-control" value="3">kobe


							</div>
			


					<div class="form-group kk" qid="2">
             						 <label>who is singer?</label>
									<input type="radio" name="2" class="form-control" value="1">yaoming
									<input type="radio" name="2" class="form-control" value="2">james
									<input type="radio" name="2" class="form-control" value="3">kobe


							</div>

								<div class="form-group kk" qid="3">
             						 <label>wt to eat?</label>
									<input type="radio" name="3" class="form-control" value="1">apple
									<input type="radio" name="3" class="form-control" value="3">peer
									<input type="radio" name="3" class="form-control" value="3">watermelon


							</div>
			

								<div class="form-group">
									<a class="btn btn-info fb">发表</a>

					</form>



		</div>

		<script type="text/javascript">
			
				$(".fb").click(function(){
					$(".kk").each(function(key,obj){
						var qid = $(obj).attr("qid");

						var r =$(obj).children("input[name='"+qid+"']").attr("checked");
						if (r == false) {
							alert("pls do all the problem");
						}

					});
					var a=$("#csw").serializeArray();
					$.post(location.href,{"data":a},function(data){
						alert("ur score is"+data.score+"error number is");


					});


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
      
function ha(btn){
     
            var uid=$(btn).attr('uid');
            
            $.post('/foot/admin.php/home/user/delete',{id:uid},function(data){

                    var ht="";
                    $.each(data.u,function(index,obj){
                        var uuid=obj.id;
                            ht+='<tr><td>'+obj.id+'</td><td>'+obj.name+'</td><td>'+obj.password+'</td><td><a class="bb btn btn-info" uid="'+uuid+'" onclick="ha(this)"><i class=" icon-trash"></i></a>&nbsp<a class="up btn btn-info"  uid="<?php echo ($item["id"]); ?>" onclick="update(this)"><i class="icon-edit"></i></a></td>'+'</tr>';


                    });
                    $("#tbody").empty();
                    $("#tbody").html(ht);

            });
      
    }
    
  </script>
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