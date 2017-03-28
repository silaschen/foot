<ul class="breadcrumb"><li><a href="__APP__">首页</a></li>
<li ><a href="__APP__/home/user/center">个人主页</a></li>
<li class="active">个人信息修改</li>
</ul>
<div class="row">
    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-body" style="background:url(__PUBLIC__/img/bg-main.jpg); background-size:100% 120px; background-repeat:no-repeat;">
                <div class="user">
                    <img class="avatar center-block" src="__ROOT__/{$u.head_pic}" alt="strive">
                    <h1 style="font-size: 18px;">
                        {$u.name}                                          </h1>
                    <p>{$u.sign}</p>
                                        <div class="button"><a class="follow btn btn-xs btn-success" href="javascript:void(0);" ><i class="icon icon-plus"></i> 关注Ta</a><a class="btn btn-xs btn-primary" href=""><i class="icon icon-envelope"></i> 发私信</a></div>
                                    
                  
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
                    <li><i class="icon-envelope-alt"></i>{$u.email}</li>
					            
                     <li><i class="icon icon-link icon-fw"></i> http://weibo.com/yiichina</li>
                                                        <ul>
            </ul></ul></div>
        </div>
    </div>


	 <div class="col-lg-6">
	 <div class="panel panel-success">
	 		<div class="panel-body">
	 			 <form>
	        	<div class="form-group">
	        		<label>name</label>
	        		<input type="text"  class="form-control" name="name" placeholder="你的昵称" value="{$u.name}">
	        	</div>
	        	<div class="form-group">
	        		<label>password</label>
	        		<input type="text"  class="form-control" name="passowrd" placeholder="登录密码" value="{$u.password}">
	        	</div>
	        	<div class="form-group">
	        		<label>毕业院校</label>
	        		<input type="text"  class="form-control" name="campus" placeholder="毕业院校" value="{$u.campus}">
	        	</div>
	        	<div class="form-group">
	        		<label>address</label>
	        		<input type="text"  class="form-control" name="address" placeholder="住址" value="{$u.address}">
	        	</div>
	        	<div class="form-group">
	        		<label>email</label>
	        		<input type="email"  class="form-control" name="email" placeholder="email" value="{$u.email}">
	        	</div>
	        	<div class="form-group">
	        		<label>个性签名</label>
	        		<input type="text"  class="form-control" name="sign" placeholder="个性的你，需要一个签名" value="{$u.sign}">
	        	</div>
	        <div class="form-group">
	        	<a class="user-update btn btn-info" updateid="{$u.id}" action="__APP__/home/user/doupdate">更新</a>
	        </div>


	        </form> 
				



	 		</div>



	 </div>
	       
				
				
	</div>


</div>

    