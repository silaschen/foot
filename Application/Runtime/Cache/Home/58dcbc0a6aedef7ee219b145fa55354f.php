<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ckplayer简单调用演示</title>

</head>

<body style="background: black;">
<div id="a1" class="container" style="width: 100%;height: 500px;"></div>

<script type="text/javascript" src="/fuckabc/Public/ckplayer/ckplayer.js" charset="utf-8"></script>
<script type="text/javascript">
	var flashvars={
		f:'http://oacx58cq2.bkt.clouddn.com/tp2.mp4',
		c:0,
  s:'0',
    p:0
		
		};
var params={bgcolor:'#000000',allowFullScreen:true,allowScriptAccess:'always'};
var video=['http://oacx58cq2.bkt.clouddn.com/tp2.mp4->video/mp4'];
CKobject.embed('/fuckabc/Public/ckplayer/ckplayer.swf','a1','ckplayer_a1','100%','100%',true,flashvars,video);
function ckmarqueeadv(){
  return '<a style="color:yellow;">成功在于坚持自己一直在做的事的事情，如果你觉得fuckphp对你有帮助请打赏。</a>';
  }

  </script>
</body>
</html>