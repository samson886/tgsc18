<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>购物车 - <?php echo $webname; ?>触屏版</title>
    <meta content="app-id=518966501" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
  
   <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css" rel="stylesheet" type="text/css" /> 
	<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/cartList.css" rel="stylesheet" type="text/css" /> 
	<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
	<script id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/mobile/Cartindex.js" language="javascript" type="text/javascript"></script>
	
</head>
<body>
<div class="h5-1yyg-v1" id="loadingPicBlock">
  <style type="text/css">
  	.zhuijia span{
  		float: left;
    font-size: 14px;
    width: 40px;
    height: 30px;
    line-height: 30px;
    vertical-align: middle;
    text-align: center;
    border: 1px solid #CACACA;
    border-radius: 5px;
    margin-right: 5px;
    background-color: #EEEEEE;
    margin-bottom: 10px;

  	}
  	body{
		background: #f4f4f4;
	}
	.recharge-tip
	{
		margin: 0;
		width: 100%;
		height: auto;
		color:#fff;
		background: #F60;
		padding: 20px 0;
		position: relative;
		overflow: hidden;
	}
	.recharge-tip > p {
		width: 80%;
		margin: 0 auto;
		font-size: 16px;
		text-align: left;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		cursor: default;
	}

	/*购物车一键更改数量/清空购物车按钮*/
	#all {
		max-width: 640px;
		bottom: 108px;
		padding: 6px 6px 6px 10px;
		box-sizing: border-box;
		border-top: 1px solid #dedede;
		border-bottom: 1px solid #dedede;
		background: #FFF;
	}

	#all input {
		float: left;
		display: block;
		height: 35px;
		box-sizing: border-box;
		padding: 5px;
		border-radius: 5px;
	}
	#all dd:first-child {
		width: 52%;
		float: left;
	}
	#all dd:first-child p {
		float: left;
		display: block;
		width: 35%;
		height: 35px;
		line-height: 35px;
		text-align: center;
		font-size: 15px;
		letter-spacing: 5px;
	}
	#all dd:last-child {
		width: 46.5%;
		float: right;
	}
	#allNum + label {
		float: left;
		display: block;
		height: 35px;
		line-height: 25px;
		box-sizing: border-box;
		padding: 5px;
		border-radius: 5px;
		width: 60%;
		color: #F60;
		border: 1px solid #F60;
		margin-right: 3px;
		font-size: 16px;
		font-weight: 400;
		cursor: pointer;
	}
	#allNum + label:after {
		content: '\039E\039E\039E';
		display: block;
		position: absolute;
		width: 25px;
		height: 15px;
		top: 15px;
		left: 23%;
		color: #CCC;
		border: 1px solid #CCC;
		line-height: 15px;
		font-size: 12px;
        text-align: center;
	}
	#addMore, #clearAll {
		background: #FFF;
		font-size: 16px;
		letter-spacing: 2px;
	}
	#clearAll {
		width: 30%;
		color: #F60;
		border: 1px solid #F60;
	}
	#addMore {
		width: 66%;
		margin-right: 4%;
		color: #ffb320;
		border: 1px solid #FDA700;
	}
	div#divBtmMoney {
		max-width: 640px;
	}
	/*自定义键盘*/
	#keyboard {
		display: none;
		position: absolute;
		width: 80%;
		left: 10px;
		bottom: 55px;
		background: #FFF;
		opacity: .85;
	}
	#keyboard, #keyboard * {
		margin: 0;
		padding: 0;
	}
	#keyboard:after {
		position: absolute;
		content: ' ';
		display: block;
		width: 1rem;
		height: 1rem;
		background: #000;
		transform: rotate(-45deg);
		left: calc((100% / 3) / 2 - 0.5rem);
		bottom: -.5rem;
		z-index: -1;
	}
	#keyboard ul {
		width: 100%;
		text-align: center;
		border-radius: 5px;
		background: #000;
		overflow: hidden
	}
	#keyboard li {
		display: block;
		float: left;
		width: calc(100% / 3);
		height: 3rem;
		border-bottom: 1px solid #F2F2F2;
		color: #F2F2F2;
		font-weight: 400;
		font-size: 1.3rem;
		line-height: 3rem;
		background: transparent;
		list-style: none;
		box-sizing: border-box;
		cursor: pointer;
		-moz-user-select: none; /*不允许数字被选中*/
		-webkit-user-select: none;
	}
	#keyboard li:nth-child(12) {
		background: #F60;
	}
	#keyboard li:active { /*点击时的背景反馈*/
		background: #F60;
		-webkit-tap-highlight-color: rgba(0,0,0,0);
	}
	#keyboard ul li:not(:nth-child(3n)) {
		border-right: 1px solid #F2F2F2;
	}
	.clear {
		width: 100%;
		height: 0;
		overflow: hidden;
		clear: both;
	}
	/*end*/

	.haveNot{
		padding-top: 40px;
		background: #fff;
	}
	.g-Total-bt {
    clear: both;
    width: 100%;
    max-width: 640px;
    font-size: 14px;
    position: fixed;
    display: inline-block;
    z-index: 12;
}
.g-Total-bt.g-car-new dl {
    border-top: 1px solid #dedede;
    background: #fff;
}
.g-Total-bt.g-car-new dt {
    padding: 7px 10px;
    box-sizing: border-box;
    width: 50%;
    float: left;
    border: none;
    background: #fff;
}
.g-Total-bt.g-car-new dt .money-total {
    font-size: 15px;
}
.g-Total-bt.g-car-new dt .money-total em {
    font-weight: bold;
    font-size: 16px;
}
.g-Total-bt em span {
    margin: 0;
    font-family: "微软雅黑";
}
.g-Total-bt.g-car-new dt .pro-total {
    font-size: 15px;
    color: #999;
}
.g-Total-bt.g-car-new dd {
    float: right;
    width: 45%;
    height: 44px;
    padding: 6px 6px 6px 0;
    border: none;
    background: #fff;
}
.g-Total-bt.g-car-new dd a.w_account {
    height: 44px;
    line-height: 44px;
    background-color: #f60;
    color: #FFF;
    display: block;
    text-align: center;
    border-radius: 5px;
    font-size: 16px;
    letter-spacing:10px;
}
.g-Pay-new dd {
    border-top: 1px solid #dedede;
    background: #fff;
    padding: 7px 10px;
    height: 45px;
}

.haveNot .btn-jumpBuy, .haveNot .btn-jumpBuy * {
    box-sizing: border-box;
}

.haveNot .btn-jumpBuy {
    padding: 10px 0;
    margin: 0 auto;
    display: flex;
    background: #fff;
}

.haveNot .btn-jumpBuy a {
    display: block;
    float: left;
    height: 35px;
    margin: 0 auto;
    line-height: 35px;
    border-radius: 3px;
    font-size: 4.3vw;
    color: #FFF;
}

.haveNot .btn-jumpBuy a:first-child {
    background: #F60;
}

.haveNot .btn-jumpBuy a {
    width: calc(23% - 5px);
}

.haveNot .btn-jumpBuy a:nth-child(2) {
    background: #F80000;
}

.haveNot .btn-jumpBuy a:nth-child(3) {
    background: #22AAFF;
}

.haveNot .btn-jumpBuy a:last-child {
    background: blue;
}
.g-Cart {
    padding: 10px;
    margin-bottom: 100px;
}
.g-car-new,.g-Pay-new {
    bottom: 52px;
    line-height: 20px;
    background: #fff;
}
  </style>
<!-- 栏目页面顶部 -->


<!-- 内页顶部

    <header class="g-header">
        <div class="head-l">
	        <a href="javascript:;" onclick="history.go(-1)" class="z-HReturn"><s></s><b>返回</b></a>
        </div>
        <h2>购物车</h2>
        <div class="head-r">
	        
        </div>
    </header> -->

    <input name="hidLogined" type="hidden" id="hidLogined" value="1" />
    <section class="clearfix g-Cart">
	    <?php if($shop!=0): ?>
	        <article class="clearfix m-round g-Cart-list">
	            <ul id="cartBody">
				<?php 
				$buyshopmoney=0;
				 ?>
	            <?php $ln=1; if(is_array($shoplist)) foreach($shoplist AS $key => $val): ?>
				<?php 
            	   $num = count($shoplist);
				   $buyshopmoney+=$Mcartlist[$val['id']]['money']*$Mcartlist [$val ['id']] ['num'];
                 ?>    
					<li>		            
						<a class="fl u-Cart-img" href="<?php echo WEB_PATH; ?>/mobile/mobile/item/<?php echo $val['id']; ?>">
							<img src="<?php echo G_TEMPLATES_IMAGE; ?>/loading.gif" src2="<?php echo G_UPLOAD_PATH; ?>/<?php echo $val['thumb']; ?>" border="0" alt=""/>
						</a>
						<div class="u-Cart-r">
							<p class="z-Cart-tt"><a href="<?php echo WEB_PATH; ?>/mobile/mobile/item/<?php echo $val['id']; ?>" class="gray6">(第<?php echo $val['qishu']; ?>期)<?php echo $val['title']; ?></a></p>
							<ins class="z-promo gray9">剩余<em class="arial"><?php echo $val['zongrenshu']-$val['canyurenshu']; ?></em>人次  </ins>
							<p class="gray9">总共<?php echo _cfg('web_name_two'); ?>：<em class="arial"><?php echo $Mcartlist[$val['id']]['num']; ?></em>人次/<em class="orange arial">￥<?php echo $Mcartlist[$val['id']]['sun']; ?></em></p>
							<p class="f-Cart-Other">
								<input type="hidden" value="<?php echo $val['yunjiage']; ?>" class="yunjiage">
								<a href="javascript:;" class="fr z-del" name="delLink" cid="<?php echo $val['id']; ?>"></a>
								<a href="javascript:;" class="fl z-jian <?php if($Mcartlist[$val['id']]['num']==1): ?>z-jiandis<?php endif; ?>">-</a>
								
								<input id="txtNum<?php echo $val['id']; ?>" name="num" type="text" maxlength="7" yunjiage = "<?php echo $val['yunjiage']; ?>" value="<?php echo $Mcartlist[$val['id']]['num']; ?>" class="fl z-amount" />
								<a href="javascript:;" class="fl z-jia <?php if($Mcartlist[$val['id']]['num']==$val['zongrenshu']): ?>z-jiadis<?php endif; ?>">+</a>
								<input type="hidden" value="<?php echo $Mcartlist[$val['id']]['num']; ?>" />
								<input type="hidden" value="<?php echo $val['zongrenshu']-$val['canyurenshu']; ?>" />
							</p>
							<p class="zhuijia"> 
								<span data-value="20" onclick="onlyone('<?php echo $val['id']; ?>','20')">20</span>
								<span data-value="50" onclick="onlyone('<?php echo $val['id']; ?>','50')">50</span>
								<span data-value="100" onclick="onlyone('<?php echo $val['id']; ?>','100')">100</span>
								<span data-value="999999" onclick="onlyone('<?php echo $val['id']; ?>','999999')">梭哈</span>
							 </p> 
						</div>
					</li>
				<?php  endforeach; $ln++; unset($ln); ?>
				
	            </ul>
	        </article>
	       

	   <!--  <div id="divBtmMoney" class="g-Total-bt"><p>总共<?php echo _cfg('web_name_two'); ?>
			<span class="orange arial z-user"><?php echo $num; ?></span>个商品  合计金额：
			<span class="orange arial"><?php echo $buyshopmoney; ?>.00</span> 元</p>
			<a href="javascript:;" class="orgBtn">结 算</a>
		</div> -->
   </section>
<script type="text/javascript">
	function onlyone(id,num){
		var os = $("#txtNum"+id);
		os.val(num);
		os.focus();
		
		os.blur();
		
	}
</script>

		 <div id="all" class="g-Total-bt"> 
	    <dl> 
	     <dd> 
	      <input id="allNum" type="hidden" /> 
	      <label for="allNum"></label> 
	      <div id="keyboard" style="display: none;"> 
	       <ul> 
	        <li>1</li> 
	        <li>2</li> 
	        <li>3</li> 
	        <li>4</li> 
	        <li>5</li> 
	        <li>6</li> 
	        <li>7</li> 
	        <li>8</li> 
	        <li>9</li> 
	        <li>0</li> 
	        <li>退格</li> 
	        <li>确定</li> 
	        <div class="clear"></div> 
	       </ul> 
	      </div> 
	      <p>次/件</p> 
	     </dd> 
	     <dd> 
	      <input id="addMore" value="继续添加" type="button" /> 
	      <input id="clearAll" value="清空" type="button" /> 
	     </dd> 
	    </dl> 
	   </div> 
	   <div id="divBtmMoney" class="g-Total-bt g-car-new"> 
	    <dl> 
	     <dt class="gray6" id="setidnes"> 
	      <p class="money-total">合计：&nbsp;<em class="orange">1&nbsp;元</em></p> 
	      <p class="pro-total">总共&nbsp;<em>1&nbsp;</em>件商品</p> 
	     </dt> 
	     <dd> 
	      <a href="javascript:;" id="divBtmMoney" class="w_account">&nbsp;去结算</a> 
	     </dd> 
	    </dl> 
	   </div> 
	<?php endif; ?>
		<div id="divNone" class="haveNot" style="display: none;">

		<s style="background:none;width: 100px;height: 100px;"><img src="../../../statics/templates/mowov9mb1/images/mobile/cartnull1.png" width="100px" height="100px"></s>
		<p style="padding: 10px 0">购物车为空</p>
		<p class="btn-jumpBuy">
			<a style="background: #F60;width: 90%;margin: 0 auto;color:#fff;font-size: 20px;height: 35px;display: block;line-height: 35px;border-radius: 5px;" href="<?php echo WEB_PATH; ?>/mobile/mobile/glist">赶快逛逛</a>

			
		</p>
				
			</div>
	    <!-- <div id="divNone" class="haveNot z-minheight" style="display:none"><s></s><p>抱歉，您的购物车没有商品记录22！</p>

		</div> -->
		
 
 </section>
    
<?php include templates("mobile/index","footer");?>
<script language="javascript" type="text/javascript">
  var Path = new Object();
  Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";  
  Path.Webpath = "<?php echo WEB_PATH; ?>";
  
var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}
function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}
Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js');

  $(function () {
        document.body.addEventListener('touchstart', function () { /*兼容IOS元素:active事件*/});

		//弹出虚拟键盘
        $("#keyboard").prev("label").click(function (e) {
            //阻止冒泡
            if (e && e.stopPropagation) {//非IE浏览器
                e.stopPropagation();
            } else {//IE浏览器
                window.event.cancelBubble = true;
            }

            $('#keyboard').slideToggle(200);
        });
        //自动隐藏键盘
		$(window).scroll(function () {
            $("#keyboard").hide()
		});
        $("html,body").click(function () {
            $("#keyboard").hide();
        });
        $("#keyboard").click(function (e) {
            //阻止冒泡
            if (e && e.stopPropagation) {//非IE浏览器
                e.stopPropagation();
            } else {//IE浏览器
                window.event.cancelBubble = true;
            }
        });

        //键盘点击事件
        $("#keyboard li").click(function () {
            var tip = $("#keyboard");
            var label = tip.prev("label");
            var index = $(this).index(), now = label.text(), newNum;

            if (index == 10) { //退格
                if (now.length > 1) {
                    newNum = parseInt(now.slice(0,-1));
				} else {
                    newNum = "";
				}
			} else if (index == 11) { //一键更改数量
                var val = $("#allNum").val();
                var t = $("#all");
                var A = ($(window).width()) / 2 - t.offset().left - 127;
                if (val == "" || val == 0) {
                    //$.PageDialog.fail("请输入数量", t, -90, A);
					return false;
                } else { //开始向后台传输数据
                    tip.hide();
                    val = parseInt(val);
                    var len = $("input[id*='txtNum']").length, sids = "", sid;
                    for (var i=0; i<len; i++) {
                        sid = parseInt($("input[id*='txtNum']").eq(i).attr("id").replace("txtNum",""));
                        var oss = $("#txtNum"+sid);
						oss.val(val);
						oss.focus();
						
						oss.blur();
                        if (i != (len - 1)) {
                            sids += sid + ",";
                        } else {
                            sids += sid;
                        }
                    }
                    
                    console.log(sids)
                   /* $.getJSON("<?php echo WEB_PATH; ?>/mobile/cart/addAllToCart", {"sids": sids, "num": val}, function (json) {
                        if (json.success == true) {
                            $.PageDialog.fail("更新成功，页面刷新中", t, -100, A);
                            setTimeout(function () {
                                window.location.reload(true);
                            }, 2000);
                        } else {
                            $.PageDialog.fail("更新失败", t, -100, A);
                        }
                    })*/
                }
			} else { //数字按钮
                var keyNum = $(this).text();
                newNum = parseInt(now + keyNum);
                var A = ($(window).width()) / 2 - tip.offset().left - 146;
                var notice;
                if (newNum == 0) {
                    notice = "必须大于0";
                    $.PageDialog.fail(notice, tip, -246, A);
                    return false;
                }
                if (newNum > 1000) {
                    notice = "不能大于1000";
                    $.PageDialog.fail(notice, tip, -246, A);
                    return false;
                }
			}

            label.text(newNum);
            $("#allNum").val(newNum);
		});

		  //继续添加商品
		$("#addMore").click(function () {
		    window.location.href = "<?php echo WEB_PATH; ?>/mobile/mobile/glist/oneKey";
		});

        //清空购物车
        $("#clearAll").click(function () {
        	 var a = $("#cartBody");	
        	   $("a[name=delLink]", a).each(function(q) {
        	   				var r = $(this);
			                var t = r.attr("cid");
			               
			                    var u = function(v) {					 
			                        if (v.code == 0) {
									
			                            r.parent().parent().parent().remove();
			                            m();
			                            f()
			                        } else {
			                            e("删除失败，请重试")
			                        }
			                    };
			                    GetJPData(Gobal.Webpath, "ajax", "delCartItem/" + t, u)
			                
		                
		            
		        })
        	   $("#divNone").show();
        	   $(".clearfix").hide();
        	   $("#all").hide();
        	   $("#divBtmMoney").hide();

        	  // window.location.reload();
        });

        //添加‘人气推荐’商品到购物车
        $(document).on("click", '.gRate[codeid]', function () {
            addCar(1, $(this).attr('codeid'));
        });

        //一键添加‘人气推荐’商品
		$("#addAll p").click(function() {
            $(this).html('正在添加');
            $(this).css('-webkit-animation', 'light 1s infinite linear');
		    var liLen = $('#intro li').length;
            addAll(0, liLen);
		});
    });

	function addCar(r, codeid) {
        var t = $("div[codeid='" + codeid + "']");
        var A = ($(window).width()) / 2 - t.offset().left - 127;
		$.getJSON('<?php echo WEB_PATH; ?>/mobile/cart/addShopCart/' + codeid + '/1', function (data) {
            $("#btnCart > i").append('<em>' + data.num + '</em>'); //更新购物车数量

			if (data.code == 1) {
				if (r == 1 && data.redirect == 'ok') { //不可添加数量但可购买数量大于1
					location.href = "<?php echo WEB_PATH; ?>/mobile/cart/cartlist";
				} else {
                    $.PageDialog.fail('本件商品您已达到限购上限', t, -100, A);
				}
			} else if (data.code == 2) {
                $.PageDialog.fail('添加失败，购物车已满', t, -100, A);
			} else {
                location.href = "<?php echo WEB_PATH; ?>/mobile/cart/cartlist";
			}

			return false;
		});
	}

	function addAll(i, len) {
		var codeid = $(".gRate").eq(i).attr("codeid");
		$.getJSON('<?php echo WEB_PATH; ?>/mobile/cart/addShopCart/' + codeid + '/1', function(data) {
			i++;
			if(i < len) {
				addAll(i, len);
			} else {
				location.href = "<?php echo WEB_PATH; ?>/mobile/cart/cartlist";
			}
		});
	}
</script>

</div>
</body>
</html>