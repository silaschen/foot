<div class="row">
<div class="col-lg-8">

	


       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="__APP__/home/video/play"><img  src="__PUBLIC__/img/zu3.jpg" alt="..."></a>
      <div class="carousel-caption">
        <h3 class="hidden-xs">西安沦陷，伤的是球迷</h3>	
        <p></p>
      </div>
    </div>
    <div class="item">
      <a href="__APP__/home/video/play"><img src="__PUBLIC__/img/zu3.jpg" alt="..."></a>
      <div class="carousel-caption">
        <h3 class="hidden-xs">西安沦陷，伤的是球迷</h3>	
         
      </div>
    </div>
    <div class="item">
      <a href="__APP__/home/video/play"><img src="__PUBLIC__/img/zu3.jpg" alt="..."></a>
      <div class="carousel-caption">
        <h3 class="hidden-xs">西安沦陷，伤的是球迷</h3>	
          
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control hidden-xs" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control hidden-xs" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" style="margin-top: 15px;">
  <li role="presentation" class="active"><a href="#latestnews" role="tab" data-toggle="tab">最新消息</a></li>
  <li role="presentation"><a href="#picnews" role="tab" data-toggle="tab">图片</a></li>
  <li role="presentation"><a href="#videonews" role="tab" data-toggle="tab">视频</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="latestnews" style="padding:10px 0px;">
    

      <ul class="media-list">
      <?php foreach ($list2 as $v) { ?>
  <li class="media">
    <a class="media-left" href="__APP__/v/picnews/view/id/{$v.id}">
      <img width="54" height="54" src="__ROOT__/{$v.cover}" alt="...">
    </a>
    <div class="media-body">
       <a class="media-left" href="__APP__/home/picnews/view/id/{$v.id}">{$v.title}
      </a>
      <p class="text-muted">{$v.ms}</p>
    </div>
  </li><hr>
   <?php }?>
</ul>



  </div>
  <div role="tabpanel" class="tab-pane" id="picnews" style="padding:10px 0px;">
    
         <ul class="media-list">
      <?php foreach ($list3 as $v) { ?>
  <li class="media">
    <a class="media-left" href="__APP__/v/picnews/view/id/{$v.id}">
      <img width="54" height="54" src="__ROOT__/{$v.cover}" alt="...">
    </a>
    <div class="media-body">
       <a class="media-left" href="__APP__/home/picnews/view/id/{$v.id}">{$v.title}
      </a>
      <p class="text-muted">{$v.ms}</p>
    </div>
  </li><hr>
   <?php }?>
</ul>



  </div>
  <div role="tabpanel" class="tab-pane" id="videonews" style="padding:10px 0px;">
             <ul class="media-list">
      <?php foreach ($video as $v) { ?>
  <li class="media">
    <a class="media-left" href="__APP__/home/video/play/id/{$v.id}">
      <img width="54" height="54" src="__ROOT__/{$v.cover}" alt="...">
    </a>
    <div class="media-body">
      <p>{$v.title}
      </p>
      <p class="text-muted">{$v.addtime}</p>
    </div>
  </li><hr>
   <?php }?>
</ul>


  </div>
</div>



      <div class="row">
      <?php foreach ($list4 as  $value) {
  ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height: 320px;">
      <a href="__APP__/home/picnews/view/id/{$value.id}"><img style="width: 100%; height: 140px;" src="__ROOT__/{$value.cover}" alt="..."></a>
      <div class="caption"  padding="10px;">
        <a href="__APP__/home/picnews/view/id/{$value.id}"><h4>{$value.title}</h4></a>

        <p><?php  $ms=mb_substr($value['ms'], 0,60); echo $ms."<p>....</p>";?></p>
      </div>
    </div>
  </div>
  <?php }?>

</div>
  <ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#fastnew"  data-toggle="tab">快报</a></li>
  <li><a href="#gzhd"  data-toggle="tab">恒大</a></li>
  <li><a href="#sdln"  data-toggle="tab">鲁能</a></li>
 
</ul>
 
<div class="tab-content">
  <div class="tab-pane active" id="fastnew" style="padding:10px 2px;">
    <ul class="media-list">
      <?php foreach ($video as $v) { ?>
  <li class="media">
    <a class="media-left" href="__APP__/index.php/video/id/{$v.id}">
      <img width="54" height="54" src="__ROOT__/{$v.cover}" alt="...">
    </a>
    <div class="media-body">
      <p>{$v.title}
      </p>
      <p class="text-muted">{$v.addtime}</p>
    </div>
  </li><hr>
   <?php }?>
</ul>





  </div>
  <div class="tab-pane" id="gzhd" style="padding:10px 2px;">
                     <ul class="media-list">
      <?php foreach ($gzhdl as $home) { ?>
  <li class="media">
    <a class="media-left" href="#">
      <img width="54" height="54" src="__ROOT__/{$home.cover}" alt="...">
    </a>
    <div class="media-body">
      <h4 class="media-heading">{$home.title}</h4>
      <p>{$home.ms}
      </p>
    </div>
  </li>
   <?php }?>
</ul>







  </div>
  <div class="tab-pane" id="sdln" style="padding:10px 2px;">
           <ul class="media-list">
      <?php foreach ($sdlnl as $home) { ?>
  <li class="media">
    <a class="media-left" href="#">
      <img width="54" height="54" src="__ROOT__/{$home.cover}" alt="...">
    </a>
    <div class="media-body">
      <h4 class="media-heading">{$home.title}</h4>
      <p>{$home.ms}
      </p>
    </div>
  </li>
   <?php }?>
</ul>

  </div>
  
</div>

 
<script>
  $(function () {
    $('#myTab a:last').tab('show');
  })
</script>


</div>
<div class="col-lg-4">
	
                 
                    



               

	<div class="panel panel-success">
  <div class="panel-heading">2016中超联赛排名</div>
  <div class="panel-body">
      <table class="table table-hover">
        
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>TeamClub</th>
                    <th>场次</th>
                    <th>净胜球</th>
                    <th>积分</th>


                </tr>
              
            </thead>
            <tbody>
            <foreach name="rank" item="ranksoccer">

               <tr>
                    <td>{$ranksoccer.rank}</td>
                    <td>{$ranksoccer.clubname}</td>
                    <td>{$ranksoccer.matchtime}</td>
                    <td>{$ranksoccer.directshot}</td>
                    <td>{$ranksoccer.score}</td>


                </tr>
                </foreach>

            </tbody>


      </table>
      <a href="__APP__/home/index/rankcsl" class="text-info">查看完整积分榜</a>
  </div>
</div>


<div class="panel panel-success">
  <div class="panel-body">
      <ul class="media-list">
      <?php foreach ($video as $v) { ?>
  <li class="media">
    <a class="media-left" href="__APP__/v/picnews/view/id/{$v.id}">
      <img width="54" height="54" src="__ROOT__/{$v.cover}" alt="...">
    </a>
    <div class="media-body">
      <p>{$v.title}
      </p>
      <p class="text-muted">{$v.addtime}</p>
    </div>
  </li><hr>
   <?php }?>
</ul>
  </div>
</div>

   <div class="panel panel-success">
      <div class="panel-heading">
      十万火急
      </div>
  <div class="panel-body" style="padding:0px;">
    
      <div class="list-group" style="margin-bottom: 0px;">
              <?php foreach ($left1 as  $value): ?>
                <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">{$value.title}</h4>

    <p class="list-group-item-text"><?php $con=mb_substr($value['description'], 0,50);echo $con; ?></p><br>
    <p class="text-muted" style="font-size: 12px;">{$value.addtime}</p>
    </a>
                <?php endforeach ?>
              </div>


  </div>   


   </div>

      <div class="panel panel-success">
      <div class="panel-heading">
       鲁能泰山
      </div>
  <div class="panel-body" style="padding:0px;">
    
      <div class="list-group" style="margin-bottom: 0px;">
              <?php foreach ($sdln as  $value): ?>
                <a class="list-group-item" href="__APP__/home/lesson/view/id/{$value.id}">
                  <span class="badge">{$value.view}</span>
                  {$value.title}
                </a>
                <?php endforeach ?>
              </div>


  </div>   


  </div>
<!--   hah -->
          <div class="panel panel-success">
   
  <div class="panel-body" style="padding:0px;">
    
      <div class="list-group" style="margin-bottom: 0px;">
              <?php foreach ($gzhdvideo as  $value): ?>
                <a class="list-group-item" href="__APP__/home/video/play/id/{$value.id}">
                <span class="glyphicon glyphicon-facetime-video"></span>
                  <span class="badge">{$value.view}</span>
                  {$value.title}
                </a>
                <?php endforeach ?>
              </div>


  </div>   


   </div>














<!--   ha -->



           <div class="panel panel-success">
      <div class="panel-heading">
      北京国安
      </div>
  <div class="panel-body" style="padding:0px;">
    
      <div class="list-group" style="margin-bottom: 0px;">
              <?php foreach ($bjga as  $value): ?>
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
      $("body").on('click',".zan",function(){
        var zid=$(this).attr('zid');
        var hid="z"+zid;
        var url=$(this).attr("action");
        $.post(url,{zid:zid},function(data){
            $("#"+hid).empty();
             $("#"+hid).html(data.zan);


        });


    });
  
</script>
  
<script type="text/javascript" src="__PUBLIC__/js/hammer.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.hammer.js"></script>
<script type="text/javascript">
$("#carousel-example-generic").hammer().bind("swipeleft", function(){


 $(this).carousel("next");
});
$("#carousel-example-generic").hammer().bind("swiperight", function(){


 $(this).carousel("prev");
});

</script>
