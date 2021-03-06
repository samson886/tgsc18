<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
    <title>邀请管理 - <?php echo $webname; ?>触屏版</title>
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/member.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/invite.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/ShareListFun.js" language="javascript" type="text/javascript"></script>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/BottomFun.js" language="javascript" type="text/javascript"></script>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jweixin.js" language="javascript" type="text/javascript"></script>
      <link href="<?php echo G_TEMPLATES_CSS; ?>/news/invite_friendshome.css" rel="stylesheet" type="text/css" /> 
       <link href="<?php echo G_TEMPLATES_CSS; ?>/news/jquery.fancybox.css" rel="stylesheet" type="text/css" /> 
      <script src="<?php echo G_TEMPLATES_JS; ?>/news/layer/layer.js" language="javascript" type="text/javascript"></script>
</head>
<body>
<div class="h5-1yyg-v11" style="position: relative;" onclick="sdyr()">
    
<!-- 栏目页面顶部 -->


<!-- 内页顶部 -->
 <section class="account clear"> 
   <dt> 
    <p class="title">余额</p> 
    <p class="secret content" data-secret="<?php echo $member['money']; ?>元"><?php echo $member['money']; ?>元</p> 
   </dt> 
   <dd> 
    <p>收入</p> 
    <p class="secret" data-secret="0.00元">0.00元</p> 
   </dd> 
   <dd> 
    <p>提现审核</p> 
    <p class="secret" data-secret="0元">0元</p> 
   </dd> 
   <div id="toggle_secret" class="toggle_secret"></div> 
  </section> 
  <section class="gift" onclick="setfyd()"> 
   <a id="btnQRCode" class="fancybox.image" href="javascript:void(0)"  title="只需好友扫描注册即成你好友哦^_^"> <p>点这里分享朋友圈可获得 6% 佣金</p> </a> 

   
  </section> 

  <div id="sdyr" style="display: none;width: 346px; height: 437px;z-index: 11;position:absolute;top: 20px;left: 20px; background: url('<?php echo G_TEMPLATES_CSS; ?>/news/friends_qcode.png') no-repeat center top;background-size: 100% 100%;">
    <img id="ttey" src="/statics/uploads/tuijian/<?php echo $member['tuijianimg']; ?>" style="margin-top: 190px;margin-left: 73px;border-radius: 30px;">
  </div>
  <section class="invite-list"> 
   <ul> 
    <li> 
     <dl class="clear"> 
      <dd class="left"> 
       <a href="<?php echo WEB_PATH; ?>/mobile/home/userrecharge">佣金充值</a> 
      </dd> 
      <dd> 
       <a href="<?php echo WEB_PATH; ?>/mobile/invite/friends">好友列表<em style="top: 6px;">0</em></a> 
      </dd> 
     </dl> </li> 
    <li> 
     <dl class="clear"> 
      <dd class="left"> 
       <a href="<?php echo WEB_PATH; ?>/mobile/invite/cashout">余额提现</a> 
      </dd> 
    
     </dl> </li> 
   </ul> 
  </section> 

 

  <script type="text/javascript">
    /*function sdyr(){
      $("#sdyr").hide();
    }*/
    function setfyd(){
     $("#tugsad").show();
     
    }
  </script>
  <!--   <header class="g-header">
        <div class="head-l">
	        
        </div>
        <h2>邀请管理</h2>
        <div class="head-r">
	        
        </div>
    </header>
    <section class="clearfix g-member">
        <div class="clearfix m-round m-name">
            <div class="fl f-Himg">
                <a href="<?php echo WEB_PATH; ?>/mobile/mobile/userindex/<?php echo $member['uid']; ?>" class="z-Himg">
                    <img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_key($member['uid'],'img'); ?>" border=0/></a>
                <span class="z-class-icon01 gray02"><s></s><?php echo $member['yungoudj']; ?></span>
            </div>
            <div class="m-name-info"><p class="u-name">
                <b class="z-name gray01"><?php echo get_user_name($member['uid']); ?></b><em>(<?php echo $member['mobile']; ?>)</em></p>
                <ul class="clearfix u-mbr-info"><li>可用福分 <span class="orange"><?php echo $member['score']; ?></span></li>
                    <li>经验值 <span class="orange"><?php echo $member['jingyan']; ?></span></li>
                    <li>余额 <span class="orange">￥<?php echo $member['money']; ?></span>
                        <a href="<?php echo WEB_PATH; ?>/mobile/home/userrecharge" class="fr z-Recharge-btn">去充值</a></li>
                </ul>
            </div>
        </div>
        <div class="shareCon m-round">
               <div class="m_banner"></div>
               <dl>
                     <dt>邀请好友成功参与夺宝后，即可获得高额佣金！</dt>
                       <dd><a id="btnShare" href="javascript:;" class="orangeBtn">立即赚钱</a></dd>  
               </dl>
           </div>
	<div class="m-round m-member-nav">
		    <ul id="ulFun">
			    <li><a href="<?php echo WEB_PATH; ?>/mobile/invite/friends"><b class="z-arrow"></b>邀请好友</a></li>
			    <li><a href="<?php echo WEB_PATH; ?>/mobile/invite/commissions"><b class="z-arrow"></b>佣金明细</a></li>
					<li><a href="<?php echo WEB_PATH; ?>/mobile/invite/friends?y=1"><b class="z-arrow"></b>一级会员</a></li>
				<li><a href="<?php echo WEB_PATH; ?>/mobile/invite/friends?y=2"><b class="z-arrow"></b>二级会员</a></li>
				<li><a href="<?php echo WEB_PATH; ?>/mobile/invite/friends?y=3"><b class="z-arrow"></b>三级会员</a></li>
			    <li><a href="<?php echo WEB_PATH; ?>/mobile/invite/cashout"><b class="z-arrow"></b>申请提现</a></li>
			    <li><a href="<?php echo WEB_PATH; ?>/mobile/invite/record"><b class="z-arrow"></b>提现记录</a></li>
                                            <li><a href="<?php echo WEB_PATH; ?>/mobile/invite/mycode"><b class="z-arrow"></b>我的专属二维码</a></li>
		    </ul>
	    </div>
    </section> -->
    <!-- 弹出窗口 S-->
    <div class="m_popUp" id="m_popUp" style="display: none;">
                <div class="m_guide">
                    <span></span>
                    <div class="m_how">
                        <h4>怎么赚钱？</h4>
                        <p>1: 点击本页面右上角的三个点的图标</p>
                        <p>2: 选择[发送给朋友]或[分享到朋友圈]</p>
                        <p>3: 经您邀请的好友，成功参与夺宝后，您可获得好友消费额5%的佣金奖励</p>
                    </div>
                </div>
 </div>
<!-- 弹出窗口E -->
<input name="hidLineLink" type="hidden" id="hidLineLink" value="<?php echo WEB_PATH; ?>/mobile/user/register/<?php echo $uid; ?>" />
<?php include templates("mobile/index","footer");?>
<script language="javascript" type="text/javascript">
  var Path = new Object();
  Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";  
  Path.Webpath = "<?php echo WEB_PATH; ?>";
  
var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}
function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}
Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js');
</script>

 <script>
  wx.config({
    debug: false,
    appId: "<?php  echo $wechat['appid']; ?>",
    timestamp: <?php  echo $signPackage["timestamp"]; ?>,
    nonceStr: '<?php  echo $signPackage["nonceStr"]; ?>',
    signature: '<?php  echo $signPackage["signature"]; ?>',
  jsApiList: ["checkJsApi", "onMenuShareAppMessage", "onMenuShareTimeline", "onMenuShareWeibo", "onMenuShareQQ"]
  });
wx.ready(function () {
var n = $("#hidLineLink").val();

    wx.onMenuShareTimeline({
        title: "kingpay购,1元梦!", // 分享标题
        link: n, // 分享链接
        imgUrl: "<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/iphone6.jpg", // 分享图标
        success: function () { 
           alert('已分享');
        },
        cancel: function () { 
            alert('已取消');
        }
    });
    wx.onMenuShareAppMessage({
        title: "kingpay购,1元梦!", // 分享标题
        desc: "kingpay购,1元梦!", // 分享描述
        link: n, // 分享链接
        imgUrl: "http://m.kingpay.info/statics/uploads/banner/20160420/16363091133273.jpg", // 分享图标
        type: '', // 分享类型,music、video或link，不填默认为link
        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
         success: function () { 
           alert('已分享');
        },
        cancel: function () { 
            alert('已取消');
        }
    });
    wx.onMenuShareQQ({
        title: "kingpay购,1元梦!", // 分享标题
        desc: "kingpay购,1元梦!", // 分享描述
        link: n, // 分享链接
        imgUrl: "<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/iphone6.jpg", // 分享图标
        success: function () { 
           // 用户确认分享后执行的回调函数
        },
        cancel: function () { 
           // 用户取消分享后执行的回调函数
        }
    });
    wx.onMenuShareWeibo({
        title: "kingpay购,1元梦!", // 分享标题
        desc: "kingpay购,1元梦!", // 分享描述
        link: n, // 分享链接
        imgUrl: "<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/iphone6.jpg", // 分享图标
        success: function () { 
           alert('已分享');
        },
        cancel: function () { 
            alert('已取消');
        }
    });
});
</script>
</div>



 <div id="tugsad" class="fancybox-wrap fancybox-mobile fancybox-type-image fancybox-opened"
        tabindex="-1" style="width: 325px;display: none; height: auto; position: absolute; top: 70px; left: 22px; opacity: 1; overflow: visible;">
            <div class="fancybox-skin" style="padding: 15px; width: auto; height: auto;">

                <div class="fancybox-outer">
                    <div class="fancybox-inner" style="overflow: visible; width: 295px; height:480px; cursor: pointer;background:url(<?php echo G_TEMPLATES_CSS; ?>/news/forever_url.jpg) no-repeat;background-size: 100% 100%;">
                        <img style="width: 100px;height: 100px;position: absolute;top:290px;left: 98px;" src="http://qr.topscan.com/api.php?bg=ffffff&fg=000000&el=l&w=200&m=10&text=<?php echo WEB_PATH; ?>/mobile/user/register/<?php echo $uid; ?>/" width="160px" height="160px" alt="">
                    </div>
                </div>
                <div class="fancybox-title fancybox-title-float-wrap">
                    <span class="child">
                        只需好友扫描注册即成你好友哦^_^
                    </span>
                </div>
                <a title="Close" class="fancybox-item fancybox-close" href="javascript:;" onclick="closene()">
                </a>
            </div>
        </div>
        

<script type="text/javascript">
  function closene(){
    $("#tugsad").hide();
  }
</script>
</body>
</html>
