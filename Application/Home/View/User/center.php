<ul class="breadcrumb"><li><a href="__APP__">首页</a></li>
<li class="active">个人主页</li>
</ul>
<div class="row">
    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-body" style="background:url(__PUBLIC__/img/bg-main.jpg); background-size:100% 120px; background-repeat:no-repeat;">
                <div class="user">
                    <a href="__APP__/home/index/img"><img class="avatar center-block" src="__ROOT__/{$u.head_pic}" alt="{$u.name}" title="点击更换头像"></a>
                    <h1 style="font-size: 18px;">
                        {$u.name}                                          </h1>
                    <p>{$u.sign}</p>
                                        <div class="button"><a class="follow btn btn-xs btn-success" href="javascript:follow({$u.id});" ><i class="icon icon-plus"></i> 关注Ta</a><a class="btn btn-xs btn-primary" href=""><i class="icon icon-envelope"></i> 发私信</a></div>
                                    
                  
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">个人信息</h2>
                <span class="pull-right"><a href="__APP__/home/user/update" class="btn btn-xs"><i class="icon-cog icon-large"></i></a></span>
            </div>
            <div class="panel-body">
                <ul class="user-info">
                    <li><i class="icon icon-calendar icon-fw"></i> 注册日期：{$u.create_time}</li>
                    <li><i class="icon icon-map-marker icon-fw"></i> {$u.address}</li>
                                        
                    <li><i class=" icon-flag"></i> {$u.campus}</li>
                    <li><i class="icon-envelope-alt"></i> {$u.email}</li>
					            
                     <li><i class="icon icon-link icon-fw"></i> http://weibo.com/yiichina</li>
                                                        <ul>
            </ul></ul></div>
        </div>
    </div>


 <div class="col-lg-6">
        
			<ul id="myTab" class="nav nav-tabs nav-user">
			<li class="active"><a href="#home"  role="tab" data-toggle="tab">全部动态</a></li>
			<li><a href="#lesson"  role="tab" data-toggle="tab">我的文章</a></li>
			
			
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
			  <div role="tabpanel" class="tab-pane active" id="home" >
			  				 <div class="list-group">
						  <?php foreach ($lesson as  $value): ?>
							  <a class="list-group-item" href="__APP__/home/lesson/view/id/{$value.id}">
							    <span class="badge">{$value.view}</span>
							    {$value.title}
							  </a>
							  <?php endforeach ?>
							</div>



			  </div>
			  <div role="tabpanel" class="tab-pane" id="lesson">
						  <div class="list-group">
						  <?php foreach ($lesson as  $value): ?>
							  <a class="list-group-item" href="__APP__/home/lesson/view/id/{$value.id}">
							    <span class="badge">{$value.view}</span>
							    {$value.title}
							  </a>
							  <?php endforeach ?>
							</div>
			  
			
			     </div>
			
			</div>
</div>


</div>
<script type="text/javascript">
		function follow(fid)
		{
			$.post(location.href,{"fid":fid},function(data){

				alert(data.msg);
				if (data.ret == 1) {
					$(".follow").html("followed");

				}

			});	
		}



</script>
    