<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head >
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title><?php echo $string; ?></title>
    <meta content="app-id=518966501" name="apple-itunes-app" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/cartList.css" rel="stylesheet" type="text/css" />
</head>
<script>

function locahost(){
    <?php if($defurl == ':js:'): ?>window.history.back();<?php  else: ?>location.href="<?php echo $defurl; ?>";<?php endif; ?>
}

    function closeWindow(){window.open('', '_self', '');window.close();}

var i = <?php echo $time; ?>; if(i!=0){window.close_id = setInterval(function() {if (i > 0) {document.getElementById('time').innerHTML = i;i = i - 1;} else {
        locahost();clearInterval(window.close_id);}}, 1000);}</script>

</script>
<body>
    <div class="h5-1yyg-v1">
    <header class="g-header">
        <div class="head-l">        
			<a href="javascript:;" onclick="history.go(-1)" class="z-HReturn"><s></s><b>返回</b></a>
        </div>
        <h2></h2>
		<div class="head-r">
			<a href="<?php echo WEB_PATH; ?>/mobile/mobile" class="z-Home"></a>
		</div>
    </header>

	<div class="g-pay-auto">
    		<div class="z-pay-tips">
                    <b><em class="gray6"><?php echo $string; ?></em></b>
                    <font id="time" style="color:red;"><?php echo $time; ?></font>秒后返回上一页面
        </div>
	</div>
        
<?php include templates("mobile/index","footer");?>
</div>
</body>
</html>
