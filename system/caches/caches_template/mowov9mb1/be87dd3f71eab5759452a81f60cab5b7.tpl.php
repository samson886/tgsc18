<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
  <head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="renderer" content="webkit">
    <title><?php echo $webname; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile1/comm.css" rel="stylesheet" type="text/css" />
<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile1/goods.css" rel="stylesheet" type="text/css" />
<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile1/index.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile1/reset.css">
<link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile1/animate.css">
<link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile1/style.css">
<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile1/main.css" rel="stylesheet" type="text/css">
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile1/jweixin.js" language="javascript" type="text/javascript"></script>
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile1/jquery.js"></script>
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile1/js.cookie.js"></script>
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile1/lodash.js"></script>
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile1/response.js"></script>
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile1/swiper.min.js"></script>
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile1/countdown.js"></script>
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile1/simpop.min.js"></script>
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile1/jquery.lazyload.min.js"></script>
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile1/BottomFun.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery.cookie.js"></script>

<script>

var DuoBao = {};
var __data__ = (function(){
  return JSON.parse('{}');
})();
var __user__ = (function(){
  return JSON.parse('{}');

})();
var __touchorclick__ = (function(){
  if ('ontouchend' in document)
    return 'touchend';
  else
    return 'click';
})();
</script>
</head>
  
  <body >

    <div class="container">
<main class="db-main db-main-index">
<style>
    .img-topright {
      padding-right: 0.8rem;
      padding-top: 1rem;
      height: 3.5rem;
      width: auto;
      float: right;
    }
  </style>

<style type="text/css">
.zxjx>a:link, .zxjx>a:visited, .zxjx>a:hover, .zxjx>a:active,
.tabs>a:link, .tabs>a:visited, .tabs>a:hover, .tabs>a:active {
    color: #323232;
}
.tab_selected {
    color: #D80000;
    border-bottom: 3px solid #D80000;
}
.color_blue {
    color: #2a99e0;
}
.btn_buy {
    font-size: 1rem;
    border-radius: 50rem;
    border: 1px solid #D80000;
    color: #D80000;
    text-align: center;
    padding: 0.3rem 0.2rem;
}
.item_bottom_container {
   overflow: hidden;
   padding: 0 5%;
   margin-top: 0.8rem;
   font-size: 1rem;
}
.jdt_container {
    float: left;
    width: 60%;
}
.jdt_container div {
    color: #646464;
}
.buy_container {
    float: left;
    width: 40%;
    text-align: center;
}
.tab_load_more {
    text-align: center;
    color: #868686;
    font-size: 1.2rem;
    padding: 0.8rem 0rem 0rem;
}
 

.m-tt1 {
    margin: 0;
    background: #FFF;
    overflow: hidden;
    border-bottom: 1px solid rgba(246, 246, 246, 0.8);
}

.m-tt1 a {
    width: 100%;
    display: block;
    color: #999;
    padding-left: 5px;
}

.m-tt1 h2 {
    width: 100%;
    margin: 0;
    line-height: 32px;
    font-size: 14px;
    font-weight: normal;
}

.m-tt1 .z-arrow {
    width: 8px;
    height: 8px;
    border-width: 1px 1px 0 0;
    float: right;
    margin-top: 10px;
    margin-right: 5px;
}

.m-lott-list {
    overflow: hidden;
}

.m-lott-list li {
    width: 50%;
    float: left;
    border-bottom: 1px solid #f5f5f5;
    border-right: 1px solid #f5f5f5;
    padding: 0 5px 5px;
    box-sizing: border-box;
}

.m-lott-list li:nth-child(n+3) {
    border-bottom: none;
}

.m-lott-list li .m-lott-text {
    float: left;
    width: 53%;
    margin: 1% 2%;
}

.m-lott-list li .m-lott-text p {
    color: #F60;
}

.m-lott-list li .m-lott-text a {
    color: #666;
    font-size: 12px;
    display: block;
    height: 32px;
    width: 100%;
    overflow: hidden;
}

.m-lott-list li .m-lott-pic {
    float: right;
    width: 42%;
    display: block;
}

.m-lott-list li .m-lott-pic a {
    width: 100%;
    height: 100%;
    display: block;
}

.m-lott-list li .m-lott-pic img {
    width: 200px;
    max-width: 100%;
    height: auto;
    float: right;
}

.m-lott-list .m-lott-state {
    clear: left;
    padding: 2px 0 0 1px;
}

.m-lott-list .m-lott-state .u-time {
    color: #F60;
    padding: 3px;
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    height: 30px;
    line-height: 30px;
}

.m-lott-list .m-lott-state .u-time em {
    padding-right: 3px;
}

.m-lott-list .m-lott-state .u-user {
    display: block;
    margin-top: 18px;
    width: 53%;
    white-space: nowrap;
    overflow: hidden;
    line-height: 12px;
}

.m-lott-list .m-lott-item:nth-child(even) {
    border-left: none;
}

.m-lott-list .m-lott-item:nth-child(n+3) {
    border-top: none;
}

#published .lott-list {
    overflow: hidden;
}

#divLottery {
    background: #fff;
}

#divLottery::after {
    content: "";
    width: 100%;
    height: 0px;
    clear: both;
    display: block;
}

#divLottery li {
    float: left;
    height: 124px;
    box-sizing: border-box;
    border-right: 1px solid rgba(246, 246, 246, .7);
    overflow: hidden;
}

#divLottery li a {
    position: relative;
    display: block;
}

#divLottery li a.limit::before {
    content: '';
    display: block;
    position: absolute;
    width: 35px;
    height: 35px;
    bottom: 0;
    right: 0;
    background: transparent url("/images/cat_mark.png?180929") no-repeat;
    background-size: 35px;
    background-position: 0 -35px;
}

#divLottery li a.double::before {
    content: '';
    display: block;
    position: absolute;
    width: 35px;
    height: 35px;
    bottom: 0;
    right: 0;
    background: transparent url("/images/cat_mark.png?180929") no-repeat;
    background-size: 35px;
    background-position: 0 0;
}

#divLottery li a.three::before {
    content: '';
    display: block;
    position: absolute;
    width: 35px;
    height: 34px;
    bottom: 0;
    right: 0;
    background: transparent url("/images/cat_mark.png?180929") no-repeat;
    background-size: 35px;
    background-position: 0 -71px;
}

#divLottery li a.lottery::before {
    content: '';
    display: block;
    position: absolute;
    width: 35px;
    height: 35px;
    bottom: 0;
    right: 0;
    background: transparent url("/images/cat_mark.png?180929") no-repeat;
    background-size: 35px;
    background-position: 0 -141px;
}

#divLottery li a.lottery_b::before {
    content: '';
    display: block;
    position: absolute;
    width: 35px;
    height: 35px;
    bottom: 0;
    right: 0;
    background: transparent url("/images/cat_mark.png?180929") no-repeat;
    background-size: 35px;
    background-position: 0 -106px;
}

#divLottery li img {
    width: 70px;
    height: 70px;
    display: block;
    margin: 0 auto;
    box-sizing: border-box;
    padding: 4px;
}

#divLottery li p {
    color: #c9c0c0;
    text-align: center;
    margin: 0 auto;
}

#divLottery .u-user a {
    overflow: hidden;
    display: block;
    width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

#divLottery .m-lott-state {
    margin: 4px 0 10px;
}

#divLottery .m-lott-state .u-time {
    padding: 4px;
    border: 1px solid #eee;
    border-radius: 10px;
}

#divLottery .m-lott-state {
    text-align: center;
}

#divLottery .m-lott-pic {
    margin: 4px auto;
    width: 70px;
}

ul {
    list-style-type: none;
}	
#partner { /*战略合作伙伴*/
    border: none;
    border-radius: 0;
    background: #fff;
    box-shadow: none;
}

li.ptn {
    width: 20%;
    display: inline-block;
    box-sizing: border-box;
    border: none;
}

li.ptn > a {
    display: block;
    padding: .2rem 0;
    color: #999;
    text-align: center;
    text-decoration: none;
    outline: 0;
}

li.ptn a img {
    display: block;
    margin: auto;
    width: 60%;
    height: 60%;
    margin-bottom: 2px;
}

li.ptn a span {
    text-align: center;
    font-size: .72rem
}

#notice { /*首页公告*/
    position: relative;
    margin-bottom: 5px;
    background: #FFF;
    border-top: 1px solid rgba(246, 246, 246, 0.8)
}

#notice_log {
    position: absolute;
    top: 12px;
    right: 15px;
    width: 4.2rem;
    height: 16px;
    line-height: 17px;
    color: #F60;
    font-size: .8rem;
    text-align: right;
    background: #FFF;
    border-left: 1px solid #F60;
}

.anouncement {
    height: 40px;
    width: calc(100% - 6.2rem);
    overflow: hidden;
    margin-left: 15px;
 font-size: 12px;
}

.anouncement::before {
    content: ' ';
    display: block;
    position: absolute;
    width: 23px;
    height: 18px;
    margin: 11px 0 0;
    border-right: .5rem solid #FFF;
    background: #FFF url("<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/nt.png") center center / contain;
}

#anMarquee {
    color: #F60;
    line-height: 41px;
    font-size: 15px;
}

.nav-wrapper {
    background-color: #fff;
    border-bottom: 1px solid #eee;
    height: 44px;
    position: relative;
    width: 100%;
}

.nav-wrapper .nav-wrapper {
    position: fixed;
    max-width: 640px;
    top: 0;
    border-bottom: 1px solid #eee;
    z-index: 1;
}

.nav-wrapper .nav-inner {
    box-sizing: border-box;
    float: left;
    height: 44px;
    padding-left: 6px;
    width: 60%;
}

.nav-wrapper .nav-inner li {
    float: left;
    height: 44px;
    text-align: center;
    width: 22%;
}

.nav-wrapper .nav-list {
    width: 100%;
}

.nav-wrapper .nav-inner li:last-child {
    width: 31%;
}

.nav-wrapper .nav-inner a {
    display: block;
    font-size: 14px;
}

.nav-wrapper .nav-inner li.current span {
    border-color: #f60;
    color: #f60;
}

.nav-wrapper .nav-inner span {
    border-bottom: 2px solid transparent;
    color: #999;
    display: inline-block;
    height: 30px;
    line-height: 30px;
    margin-top: 6px;
}

.nav-wrapper .select-btn::before {
    border-bottom-color: #dedede;
    border-style: solid;
    top: 30px;
    z-index: 3;
}

.nav-wrapper .select-btn::before, .nav-wrapper .select-btn::after {
    border-color: transparent;
    border-width: 7px 6px;
    content: "";
    display: none;
    height: 0;
    left: 50%;
    margin-left: -6px;
    position: absolute;
    width: 0;
}

.nav-wrapper .select-btn::after {
    border-bottom-color: #fff;
    border-style: solid;
    top: 31px;
    z-index: 4;
}

.nav-wrapper .select-btn::before, .nav-wrapper .select-btn::after {
    border-color: transparent;
    border-width: 7px 6px;
    content: "";
    display: none;
    height: 0;
    left: 50%;
    margin-left: -6px;
    position: absolute;
    width: 0;
}

.nav-wrapper .select-btn {
    border-left: 1px solid #eee;
    box-sizing: border-box;
    color: #999;
    float: left;
    font-size: 14px;
    height: 44px;
    line-height: 42px;
    position: relative;
    text-align: center;
    width: 20%;
}

.nav-wrapper .select-icon {
    background-color: #fff;
    display: inline-block;
    height: 12px;
    overflow: hidden;
    position: relative;
    top: -1px;
    vertical-align: middle;
    width: 13px;
}

.nav-wrapper .select-icon i:first-child {
    margin-top: 0;
}

.nav-wrapper .select-icon i {
    background-color: #bbb;
    display: block;
    height: 2px;
    margin-top: 3px;
    width: 13px;
}

.nav-wrapper .select-total {
    background-color: #fff;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.19);
    position: absolute;
    right: 0;
    top: 45px;
    width: 100%;
    z-index: 4;
}	
/*
*透明购导航图片
 */
.navigation {
    width: calc(100% - 8px);
    border: 4px solid rgba(246, 246, 246, 0.8);
    display: block;
    border-bottom: 0;
}

.navigation a, .navigation img {
    width: 100%;
    display: block;
    cursor: pointer;
}	 
.btn-wrap {
    position: relative;
    margin: 10px 0 0;
    width: 100%;
}

.btn-wrap .buy-btn {
    display: block;
    width: 50%;
    height: 28px;
    line-height: 28px;
    text-align: center;
    border: 1px solid #f60;
    color: #f60;
    border-radius: 16px;
    margin: 0 20%;
}

.btn-wrap .gRate {
    display: block;
    width: 30px;
    height: 30px;
    position: absolute;
    top: 0;
    background-color: #f60;
    border-radius: 15px;
    right: 5%;
}

.btn-wrap .gRate s {
    display: inline-block;
    width: 22px;
    height: 22px;
    margin: 4px 0 0 1px!important;
    background: url("<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/setIcon.png")!important;
    background-size: 80px auto!important;
    background-position: -58px -29px!important;
}
.star {
    position: absolute;
    width: 20px;
    height: 20px;
    left: 8px;
    background-image: url("<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/star.png");
    background-size: 100% 100%;
    top: 5px;
    cursor: pointer;
}	

.nav-wrapper .select-total {
    background-color: #fff;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.19);
    position: absolute;
    right: 0;
    top: 45px;
    width: 100%;
    z-index: 4;
}

.sort_list::after {
    clear: both;
    content: "";
    display: table;
}

.sort_list {
    width: 100%;
}

.sort_list li {
    border-bottom: 1px solid #eee;
    border-right: 1px solid #eee;
    box-sizing: border-box;
    float: left;
    height: 44px;
    line-height: 42px;
    width: 33.3%;
}

.sort_list a {
    color: #666;
    display: block;
    font-size: 14px;
    padding: 0 20px;
    text-align: left;
}
.cateChk + label {
    position: absolute;
    height: 44px;
    width: 44px;
    top: 0;
    right: -6px;
    box-sizing: border-box;
    cursor: pointer;
    z-index: 1;
    background: transparent url("/statics/templates/mowov9mb1/images/check_.png") center 51px / 130% 390%;
    text-align: center;
    line-height: 44px;
    color: #CCC;
}

.cateChk:checked + label, .cateChk.red:checked + label {
    background-position-y: -7px;
    color: #F60;
}
.sort_list li {
    position: relative;
    overflow: hidden;
}

.sort_list li > input {
    display: none;
}

.sort_list li em {
    color: #F60;
}
#lottery a{
     height: 26px;
    padding: 0;
    margin: 8px 12px 0;
    color: #F60;
    border: 1px solid #F60;
    line-height: 26px;
    text-indent: 5px;
    border-radius: 5px;
}
.ico1sa{
    content: "\279C";
    font-size: 1.1rem;
    display: block;
    position: absolute;
    width: 44px;
    height: 30px;
    right: 2px;
    top: 0;
    line-height: 44px;
    text-align: center;
    text-indent: 0;
}
.select-icon {
    background-color: #fff;
    display: inline-block;
    height: 12px;
    overflow: hidden;
    position: relative;
    top: -1px;
    vertical-align: middle;
    width: 13px;
}

.select-icon i:first-child {
    margin-top: 0;
}

.select-icon i {
    background-color: #bbb;
    display: block;
    height: 2px;
    margin-top: 3px;
    width: 13px;
}
</style>
    <!-- 焦点图 -->
    <div class="swiper-container">
      <div class="swiper-wrapper">
       <?php $ln=1;if(is_array($shop_ad)) foreach($shop_ad AS $ad): ?>
        <div class="swiper-slide swiper-slide-active">
          <a href="<?php echo $ad['link']; ?>">
            <img alt="<?php echo $ad['title']; ?>" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $ad['img']; ?>">
          </a>
        </div>
        <?php  endforeach; $ln++; unset($ln); ?>  
      </div>
      <div class="swiper-pagination swiper-pagination-clickable"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
    </div>

<!--
	<div class="accumulative-number">——————<span style="height:40px;color:#666666;line-height:40px;text-align: center;margin:0 10px;">累计消费人次</span>——————</div>
        s 注册人数动画 
        <div class="number">
			<a href="" target="_blank" class="allNums">
			<span class="yNumList">
			<ul id="ulHTotalBuy" style="margin: -30px 0px 10px 25%;">
                <li class="num" style="display: none;"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
				<li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
			</ul></span></a>
		</div>
-->
        <!--e 注册人数动画 -->
<section class="nva-list" style="padding-top:10px;">
            <article id="partner" class="m-round m-lott-list">
                <ul>
                    <li class="ptn">
                        <a href="/guide.html">
                            <img src="<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/guide_new.png">
                            <span>新手指南</span>
                        </a>
                    </li>
                    <li class="ptn">
                        <a href="/mobile/home/singlelist">
                            <img src="<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/Exhibition_new.png">
                            <span>晒单</span>
                        </a>
                    </li>
                    <li class="ptn">
                        <a href="javascript:;" onclick="showCnt()">
                            <img src="<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/follow_new.png">
                            <span>关注我们</span>
                        </a>
                    </li>
                    <li class="ptn">
                        <a href="/mobile/home/userrecharge">
                            <img src="<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/helper.png">
                            <span>在线充值</span>
                        </a>
                    </li>
                    <li class="ptn">
                        <a href="#">
                            <img src="<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/logo_new.png">
                            <span>APP下载</span>
                        </a>
                    </li>
                </ul>
            </article>
            <article id="notice" class="m-lott-list">
                <a href="javascript:;">
                    <div class="anouncement">
                  <marquee  id="anMarquee" style="width:90%;margin-left:20px;">公告：获得商品后超过30天未填写收货地址，视为放弃该商品，请获得商品的用户尽快填写收货地址！咨询热线：13288068368</marquee>
                    </div>
                </a>
                <a href="/">
                    <div id="notice_log">历史公告</div>
                </a>
            </article>
            <!--免费抢购-->
                        <!-- 滑动最新揭晓 -->
            <section id="published">
                <div class="m-tt1">
                    <h2><a href="<?php echo WEB_PATH; ?>/mobile/mobile/lottery">最新揭晓<b class="z-arrow"></b></a></h2>
                </div>
                <article class="lott-list" style="height: 124px;">
                    <ul id="divLottery" style="height: 124px; width: 376px; margin-left: 0px;">
                     <script>
        (function(){
          DuoBao.refresh_prize = function refresh_prize(){
            var $el = $($(this).data('dom_id'));
            $.get($el.attr('url'), {raw_only: 'true'}, function(data){

			   $el.html(data);
            });
          };

        })();
      </script>
     <?php $ln=1; if(is_array($shopqishu)) foreach($shopqishu AS $k => $qishu): ?>
      <?php 
                  $qishu['q_user'] = unserialize($qishu['q_user']);
       ?> 
                                                                          
<li class="m-lott-item" id="r<?php echo $qishu['id']; ?>" url="<?php echo WEB_PATH; ?>/mobile/mobile/itemajax/<?php echo $qishu['id']; ?>"  style="width: 94px;"><div class="m-lott-pic">   <a href="<?php echo WEB_PATH; ?>/mobile/mobile/item/<?php echo $qishu['id']; ?>" title="<?php echo WEB_PATH; ?>/mobile/mobile/itemajax/<?php echo $qishu['id']; ?>"> <img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $qishu['thumb']; ?>" border="0" alt="<?php echo _strcut($qishu['title'],20); ?>"></a></div>
 <?php if($qishu['q_showtime']=='N'): ?>
 <p>获奖者</p><div class="m-lott-state"><span style="color: #f60;"><?php echo get_user_name($qishu['q_uid'],'username'); ?></span></div>
            <?php  else: ?>
	<p>倒计时</p><div class="m-lott-state">
	<div style="text-align:center; padding: 0.2rem;white-space: nowrap;text-overflow: ellipsis; overflow: hidden; background-color:#f60; color:#fff;border-radius:1rem;">
              <time class="countdown" style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;"
                data-dom_id="#r<?php echo $qishu['id']; ?>"
                data-sec="<?php echo ceil($qishu['q_end_time']-time()); ?>"
                data-text="正在揭晓..."
                data-delay="1000"
                data-callback="DuoBao.refresh_prize">开始倒计时</time>
            </div>
	</div>
	<?php endif; ?>
	</li>
<?php  endforeach; $ln++; unset($ln); ?>
                                                
                                                
                                            </ul>
                </article>
            </section>
            
            <div class="navigation">
                <a class="one" style="border-left: 10px solid #f6f6f6;" href="<?php echo WEB_PATH; ?>/mobile/lottery">
                    <img src="/statics/templates/mowov9mb1/img/jifen.jpg">
                </a>
                <a class="one" style="border-left: 10px solid #f6f6f6;" href="<?php echo WEB_PATH; ?>/mobile/home/invite" >
                    <img src="/statics/templates/mowov9mb1/img/yaoqing.jpg">
                </a>
            </div>
        </section>
        
	
	
 
	
<script> 
	
try{ 
 var isStoped = false; 
 var oScroll = document.getElementById("scrolllayer"); 
 with(oScroll){ 
 noWrap = true; 
 } 
 
 oScroll.onmouseover = new Function('isStoped = true'); 
 oScroll.onmouseout = new Function('isStoped = false'); 
 
 var preTop = 0; 
 var curTop = 0; 
 var stopTime = 0; 
 var oScrollMsg = document.getElementById("scrollmessage");
 
 oScroll.appendChild(oScrollMsg.cloneNode(true)); 
 init_srolltext(); 
}catch(e) {} 
 
function init_srolltext(){ 
 oScroll.scrollTop = 0; 
 setInterval('scrollUp()',20); 
} 
 
function scrollUp(){ 
 if(isStoped) return; 
 curTop += 1; 
 if(curTop == 19) { 
 stopTime += 1; 
 curTop -= 1; 
 if(stopTime == 180) { 
 curTop = 0; 
 stopTime = 0 
 
 } 
 }else{ 
 preTop = oScroll.scrollTop; 
 oScroll.scrollTop += 1; 
 if(preTop == oScroll.scrollTop){ 
 oScroll.scrollTop = 0; 
 oScroll.scrollTop += 1; 
 } 
 } 
} 
    var mySwiper = new Swiper('.swiper-container', {
      autoplay: 5000,//可选选项，自动滑动
      pagination : '.swiper-pagination',
      paginationClickable :true,
    })
	
 
    </script>
  
     </script>
<div style="width: 100%;height: 5px;background:#f4f4f4"></div>
   <section class="goodsCon">
	    <!-- 导航 -->
	    <div class="goodsNav">
            <ul id="divGoodsNav">
       	 	   
                <li order="20" class="current"><a href="javascript:;" id="setready" style="font-size: 12px;color: #999;">人气</a></li>
                <li order="40"><a href="javascript:;" style="font-size: 12px;color: #999;">最新</a></li>
                <li order="50" type="price"><a href="javascript:;" style="font-size: 12px;color: #999;">价格</a></li>
                <li order="10"><a href="javascript:;" style="font-size: 12px;color: #999;">即将揭晓<b></b></a></li>
                 <li order="" id="newbottons">
                    <a href="javascript:;" style="font-size: 12px;color: #999;"> 
                        <span class="select-icon">
                            <i></i><i></i><i></i><i></i>
                        </span>
                        分类</a>
                  <!--   <dl style="display:block;">
                        <dd type="0" class="sOrange"><a href="javascript:;">全部</a></dd>
						<?php $data=$this->DB()->GetList("select * from `@#_category` where `model`='1'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
						<?php $ln=1;if(is_array($data)) foreach($data AS $categoryx): ?>
						<dd><a id="<?php echo $categoryx['cateid']; ?>" href="javascript:;"><?php echo $categoryx['name']; ?></a></dd>
						<?php  endforeach; $ln++; unset($ln); ?>
						<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #D80000;text-align:center"><b>This Tag</b></div>';}?>
					</dl>  -->
                     <b></b>
                </li>

                <li order="10" style="margin-left:4px;"><a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist" style="background: url(../statics/templates/mowov9mb1/css/news/search.png) no-repeat 0px 12px;margin-left:8px;padding-left: 12px;font-size: 12px;color: #999; ">搜索</a></li>
           </ul>
        </div>
          <!--分类-->
                <div style="display: none;" class="select-total" id="showidvs">
                    <ul class="sort_list">
                        <a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/10">
                        <li class="special" sortid="0">
                            <a href="javascript:;" style="color: #1A9DEC">全部商品</a>
                            <input id="chk0" class="cateChk" type="checkbox" name="0" value="0">
                            <label for="chk0"></label>
                        </li>
                        </a>
                        <?php $data=$this->DB()->GetList("select * from `@#_category` where `model`='1'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
                        <?php $ln=1;if(is_array($data)) foreach($data AS $categoryx): ?>
                        <a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/<?php echo $categoryx['cateid']; ?>">
                         <li sortid="<?php echo $categoryx['cateid']; ?>">
                            <a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/<?php echo $categoryx['cateid']; ?>"><?php echo $categoryx['name']; ?></a>
                            <input id="chk<?php echo $categoryx['cateid']; ?>" class="cateChk" type="checkbox" name="<?php echo $categoryx['cateid']; ?>" value="<?php echo $categoryx['cateid']; ?>">
                            <label for="chk17"></label>
                        </li>
                        </a>
                        <?php  endforeach; $ln++; unset($ln); ?>
                        <?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #D80000;text-align:center"><b>This Tag</b></div>';}?>
                        

                        <!--<li id="panic"><a href="/index.php/mobile/mobile/panic">抢购专区</a></li>

                        <li id="lucky">
                            <a href="/index.php/mobile/mobile/arrondi">幸运123</a>
                        </li>-->

                       <!--  <li id="lottery"><a href="<?php echo WEB_PATH; ?>/index.php/mobile/mobile/ssc_b">透明购<span class="ico1sa">&#10140</span></a></li> -->
                     <!--    <li id="lottery"><a href="<?php echo WEB_PATH; ?>/index.php/mobile/mobile/ssc">实时购<span class="ico1sa">&#10140</span></a></li> -->

                       <!--  <li id="lottery">
                            <a href="<?php echo WEB_PATH; ?>/index.php/mobile/home/collectlist">我的收藏<span class="ico1sa">&#10140</span></a>
                        </li> -->
                    </ul>
                    <!-- <div id="addAll">
                        <p id="catUp"></p>
                        <p id="addCat">一键添加</p>
                                            </div> -->
                </div>
        <!-- 列表 -->
        <div class="goodsList">
            <div id="divGoodsLoading" class="loading" style="display:none;"><b></b>正在加载...</div>
            <a id="btnLoadMore" class="loading" href="javascript:;" style="display:none;">点击加载更多</a>
            <a id="btnLoadMore2" class="loading"  style="display:none;">没有数据</a>
            <a id="btnLoadMore3" class="loading"  style="display:none;">已经到底了</a>
        </div>
    </section>
	
  <div id="divGoodsLoading"></div>
	  
	  <input type="hidden" id="urladdress" value="list">
<input type="hidden" id="pagenum" value="1">
    <script type="text/javascript">
 $(function (){
 var url=$("#urladdress").val(),
			page=$("#pagenum").val();
   console.log("load")
    //滚动加载
   $(window).scroll(function() { 

      if ($(this).scrollTop() + $(window).height() + 20 >= $(document).height() && $(this).scrollTop() > 20) {
           var url=$("#urladdress").val(),
      page=$("#pagenum").val();
    

       if(url!='' && page!=''){
        console.log(url);
      // glist_json(url+'/dasd/'+20);
      }
      }  
  });  

 })

//打开页面加载数据
//window.onload=function(){
//	glist_json("list/10");
//	//购物车数量
//	$.getJSON('<?php echo WEB_PATH; ?>/mobile/ajax/cartnum',function(data){
//		if(data.num){
//			//$("#btnCart").append('<em>'+data.num+'</em>');
//			//$("#btnCart1").append('<em>'+data.num+'</em>');
//		}
//	});
//	
//}
//获取数据
function glist_json(parm){
	$("#urladdress").val('');
	$("#pagenum").val('');
	$.getJSON('<?php echo WEB_PATH; ?>/mobile/mobile/glistajax/'+parm,function(data){
		$("#divGoodsLoading").css('display','none');		
		if(data[0].sum){
			var fg=parm.split("/");
			$("#urladdress").val(fg[0]+'/'+fg[1]);
			$("#pagenum").val(data[0].page);
			for(var i=0;i<data.length;i++){
			var ul='<ul><li>';
				ul+='<span id="'+data[i].id+'" class="z-Limg"><img src="<?php echo G_UPLOAD_PATH; ?>/'+data[i].thumb+'"></span>';
				ul+='<div class="goodsListR">';
				ul+='<h2 id="'+data[i].id+'">'+data[i].title+'</h2>';
				ul+='<div class="pRate">';
				ul+='<div class="Progress-bar" id="'+data[i].id+'">';				
				ul+='<p class="u-progress"><span class="pgbar" style="width:'+(data[i].canyurenshu / data[i].zongrenshu)*100+'%;"><span class="pging"></span></span></p>';
				ul+='<ul class="Pro-bar-li">';
				ul+='<li class="P-bar01"><em>'+data[i].canyurenshu+'</em></li>';
				ul+='<li class="P-bar02"><em>'+data[i].zongrenshu+'</em></li>';
				ul+='<li class="P-bar03"><em>'+data[i].shenyurenshu+'</em></li>';
				ul+='</ul></div>';
				ul+='<div class="btn-wrap"><div class="add star" codeid="'+data[i].id+'"></div><a href="<?php echo WEB_PATH; ?>/mobile/mobile/item/'+data[i].id+'" class="buy-btn" "="">立即享购</a><a href="javascript:;" class="add gRate" codeid="'+data[i].id+'"><s></s></a></div>';
				//ul+='<a class="add " codeid="'+data[i].id+'" href="javascript:;"><s></s></a>';
				ul+='</div></div></li></ul>';
				$("#divGoodsLoading").before(ul);
			}
			if(data[0].page<=data[0].sum){
				$("#btnLoadMore").css('display','block');
				$("#btnLoadMore2").css('display','none');
				$("#btnLoadMore3").css('display','none');
			}else if(data[0].page>data[0].sum){
				$("#btnLoadMore").css('display','none');
				$("#btnLoadMore2").css('display','none');
				$("#btnLoadMore3").css('display','block');
			}
		}else{
			$("#btnLoadMore").css('display','none');
			$("#btnLoadMore2").css('display','block');	
			$("#btnLoadMore3").css('display','none');			
		}
	});
}
$(document).ready(function(){
	//即将揭晓,人气,最新,价格	
	$("#divGoodsNav li:not(:last)").click(function(){
		var l=$(this).index();
		$("#divGoodsNav li").removeClass().eq(l).addClass('current');
		var parm=$("#divGoodsNav li").eq(l).attr('order');
		$("#divGoodsLoading").css('display','block');
		$(".goodsList ul").remove();
       // console.log(parm);
		var glist=glist_json("0/s"+parm+"/1");
	});
	
	//商品分类
	var dl=$("#divGoodsNav dl"),
		last=$("#divGoodsNav li:last"),
		first=$("#divGoodsNav dd:first");
	$("#newbottons").click(function(){		
		if($("#showidvs").css("display")=='none'){
			$("#showidvs").show();
			//last.addClass("gSort");
			//first.addClass("sOrange");			
		}else{
			$("#showidvs").hide();
			//last.removeClass("gSort");
			//first.removeClass("sOrange");
		}
	});
	$("#divGoodsNav  dd").click(function(){
		var s=$(this).index();
		var t=$("#divGoodsNav .gSort dd a").eq(s).html();
		var id=$("#divGoodsNav .gSort dd a").eq(s).attr('id');
		$("#divGoodsNav .gSort a:first").html(t+'<s class="arrowUp"></s>');
		var l=$("#divGoodsNav .current").index(),
			parm=$("#divGoodsNav li").eq(l).attr('order');
		if(id){			
			$("#divGoodsLoading").css('display','block');
			$(".goodsList ul").remove();
			glist_json(id+'/'+parm);
		}else{
			glist_json("list/"+parm);
			$(".goodsList ul").remove();
		}	
		dl.hide();
		last.removeClass("gSort");
		first.removeClass("sOrange");
	});
	//加载更多
	$("#btnLoadMore").click(function(){		
		var url=$("#urladdress").val(),
			page=$("#pagenum").val();
		glist_json(url+'/'+page);
	});	
	//返回顶部
	$(window).scroll(function(){
		if($(window).scrollTop()>50){
			$("#btnTop").show();
		}else{
			$("#btnTop").hide();
		}
	});
	$("#btnTop").click(function(){
		$("body").animate({scrollTop:0},10);
	});
	//添加到购物车
	$(document).on("click",'.add',function(){
		var codeid=$(this).attr('codeid');
		$.getJSON('<?php echo WEB_PATH; ?>/mobile/ajax/addShopCart/'+codeid+'/1',function(data){
			if(data.code==1){
				addsuccess('添加失败');
			}else if(data.code==0){
				addsuccess('添加成功');				
			}return false;
		});
	});
	function addsuccess(dat){
		$("#pageDialogBG .Prompt").text("");
		var w=($(window).width()-255)/2,
			h=($(window).height()-45)/2;
		$("#pageDialogBG").css({top:h,left:w,opacity:0.8});
		$("#pageDialogBG").stop().fadeIn(1000);
		$("#pageDialogBG .Prompt").append('<s></s>'+dat);
		$("#pageDialogBG").fadeOut(1000);
		//购物车数量
//		$.getJSON('<?php echo WEB_PATH; ?>/mobile/ajax/cartnum',function(data){
//			//$("#btnCart").append('<em>'+data.num+'</em>');
//			//$("#btnCart1").append('<em>'+data.num+'</em>');
//		});
	}
	//跳转页面
	var gt='.goodsList span,.goodsList h2,.goodsList .Progress-bar';
	$(document).on('click',gt,function(){
		var id=$(this).attr('id');
		if(id){
			window.location.href="<?php echo WEB_PATH; ?>/mobile/mobile/item/"+id;
		}			
	});

});

</script>
	  
	<?php include templates("mobile/index","footer");?>
    </div>
  </div>
</main>
 <script src="<?php echo G_TEMPLATES_JS; ?>/mobile1/main.js"></script> 
</div>
   <?php 
    $f_home = '';
    $f_whole = '';
    $f_jiexiao = '';
    $f_car = '';
    $f_personal = '';

    if( ROUTE_C == 'home' || ROUTE_C == 'user' ){
      $f_personal = 'cur';
    }else if( ROUTE_C == 'mobile' && ROUTE_A == 'init'){
      $f_home = 'cur';
    }else if( ROUTE_C == 'mobile' && ROUTE_A == 'glist'){
      $f_whole = 'cur';
    }else if( ROUTE_C == 'mobile' && ROUTE_A == 'lottery'){
      $f_jiexiao = 'cur';
    }else if( ROUTE_C == 'shaidan'){
      $f_car = 'cur';
    }
    ?>
  
  </body>
</html>
<style>
#pageDialogBG{-webkit-border-radius:5px; width:255px;height:45px;color:#fff;font-size:16px;text-align:center;line-height:45px;}
</style>
<div id="pageDialogBG" class="pageDialogBG">
<div class="Prompt"></div>
</div>


	  <style>
#forever_url{display:none;position:fixed;width:100%;height:100%;left:0;top:0;background:rgba(0,0,0,.79);z-index:111}#forever_url .main{width:12rem;height:auto;margin:8rem auto 0;border-radius:10px;box-sizing:border-box;overflow:hidden}#forever_url .main img{vertical-align:middle}#forever_url p.close{position:absolute;width:2rem;height:2rem;top:48rem;left:calc(50% - 1rem);margin:0 auto;color:#333;font-size:1.8rem;line-height:2rem;text-align:center;background:#FFF;border-radius:50%}
 .contact-public{
    position:fixed;
    right:0px;
    width:30px;
    padding:0;
    line-height:15px;
    border-radius:5px;
    background:rgba(255, 222, 173, 1);
    bottom:70px;
    text-align:center;
    color:#fff;
    z-index:2;
 }
.contact-public li{
   display:block;
   border-bottom:1px solid #7D7D7D;
   text-align:center;
               -webkit-box-sizing:border-box;
                  -moz-box-sizing:border-box;
                     -o-box-sizing:border-box;   
                        box-sizing:border-box;
}
.contact-public li:last-child{
   border-bottom:0;
   border-top:1px solid #242424;
}
.contact-public a{
   display:block;
   color:#FD94FC;
   font-size:16px;
   text-align:center;
   padding:6px;
}
.contact-public .icon-tel{
   display:block;
   margin:0px auto 0 auto;
   width:25px;
   height:20px;
   background:url("<?php echo WEB_PATH; ?>/weixin/images/distribution2.png") -200px -820px;
   background-size:300px 1000px;
}
</style>
<input name="hidLineLink" type="hidden" id="hidLineLink" value="<?php echo WEB_PATH; ?>/mobile/mobile" />
<div id="forever_url" style="display: block;"><div class="main" style="width: 22rem;"><img id="i_img" src="/statics/templates/mowov9mb1/img/forever_url.png" alt="永久网址" width="100%" height="auto"></div><p id="for_url_close" class="close">✕</p></div>
 <script>
  /*永久网址弹出层*/
    var for_url_hide = $.cookie("for_url_hide");
    $("#for_url_close").click(function () {
        $("#forever_url").hide();
        $.cookie("for_url_hide", 1, {path: '/', expires: 1}) // cookie有效期1天
    });
    $("#i_img").click(function (e) {
        e.stopPropagation();
    });
    $("#forever_url").click(function () {
        $("#forever_url").hide();
        $.cookie("for_url_hide", 1, {path: '/', expires: 1}) // cookie有效期1天
    });
    if (!for_url_hide) {
        $("#forever_url").show();
    }
    /*end*/
	 
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
         title: "1元就能购买iphone6哦，快去看看吧！", // 分享标题
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
         title: "1元就能购买iphone6哦，快去看看吧！", // 分享标题
         desc: "1元就能购买iphone6哦，快去看看吧！", // 分享描述
         link: n, // 分享链接
         imgUrl: "<?php echo G_TEMPLATES_STYLE; ?>/images/mobile/iphone6.jpg", // 分享图标
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
         title: "1元就能购买iphone6哦，快去看看吧！", // 分享标题
         desc: "1元就能购买iphone6哦，快去看看吧！", // 分享描述
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
         title: "1元就能购买iphone6哦，快去看看吧！", // 分享标题
         desc: "1元就能购买iphone6哦，快去看看吧！", // 分享描述
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
<script src="layer/layer.js"></script>
 <script language="javascript" type="text/javascript">
  var Path = new Object();
  Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";  
  Path.Webpath = "<?php echo WEB_PATH; ?>";
  
var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}
function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}
Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile1/Bottom.js');
//关于我们
function showCnt() {
layer.alert('<p>尊敬的客户，您好！<br>&nbsp;&nbsp;&nbsp;&nbsp;本客服微信仅提供泰广商城入口以及本平台福利活动入口，不受理咨询、反馈、投诉等其他服务，请您知悉。如需其他咨询服务，请进入【会员中心】点击【客服咨询】获取咨询方式，不便之处，敬请谅解！</p>');
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#setready").click();
    });
    
</script>