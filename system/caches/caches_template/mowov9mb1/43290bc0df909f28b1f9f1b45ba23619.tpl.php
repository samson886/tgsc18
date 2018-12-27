<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>登录 - <?php echo $webname; ?>触屏版</title>
    <meta content="app-id=518966501" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css" rel="stylesheet" type="text/css" />
	<!-- <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/login.css" rel="stylesheet" type="text/css" /> -->
	<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
	<script id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/mobile/Login.js" language="javascript" type="text/javascript"></script>
</head>
 <style>
        .registerCon li {
            margin: 15px 10%;
        }

        .title {
            text-align: center;
            padding: 15px;
            font-size: 20px;
            font-family: "微软雅黑";
            color: #000;
        }

        .registerCon li label{
            color: #000;
            font-size: 16px;
        }

        .registerCon li label {
            letter-spacing: 6px;
            padding-right: 6px;
        }

        .registerCon li input {
            display: inline-block;
            height: 40px;
            width: 70%;
            font-size: 14px;
        }

        li.acc, li.pwd {
            position: relative;
            border-bottom: 1px solid #ccc;
        }

        li.acc, li.code {
            position: relative;
            border-bottom: 1px solid #ccc;
        }
        .btnArea{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btnArea .btn-forget,.btnArea .btn-register{
            color: #f60;
            font-size: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btnArea .btn-forget span,.btnArea .btn-register span{
            font-size: 12px;
            margin-left: 2px;
        }
        .btnArea .btn-forget i{
            width: 18px;
            height: 18px;
            background-size:100% 100%;
            background-position: center;
            background-image: url("/images/forget.png");
            background-repeat: no-repeat;
            display: inline-block;
        }
        .btnArea .btn-register i{
            width: 22px;
            height: 22px;
            background-size:60% 80%;
            background-position: center;
            background-image: url("/images/reg.png");
            background-repeat: no-repeat;
            display: inline-block;
        }
                .btnArea .btn-forget{
            opacity: 0;
        }
                /*添加阅读协议的要求*/
        #notice {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background: rgba(0, 0, 0, .9);
        }

        #notice dt, #notice dd {
            text-align: center;
            font-size: 1rem;
            letter-spacing: .025rem
        }

        #notice dt, #notice dd:first-of-type {
            margin-left: 10%;
        }

        #notice dt {
            width: 80%;
            height: 60px;
            line-height: 60px;
            margin-top: 50%;
            background: #FFF;
            border-radius: 3px 3px 0 0;
        }

        #notice dt a {
            display: block;
            color: #00A8E8;
        }

        #notice dd {
            float: left;
            width: 40%;
            height: 43px;
            line-height: 43px;
            color: #FFF;
            cursor: pointer;
            -webkit-user-select: none
        }

        #notice dd a {
            display: block;
            color: #FFF;
        }

        #notice dd:first-of-type {
            background: #CCC;
            border-radius: 0 0 0 3px
        }

        #notice dd:last-of-type {
            background: #00BC0C;
            border-radius: 0 0 3px 0;
        }

        /*end*/

        /*密码提示*/
        em.psw_type {
            position: absolute;
            width: 40px;
            height: 40px;
            right: 0;
            background: transparent url("/images/eye-off.png") no-repeat center / 60% auto;
        }

        em.psw_type.show_psw {
            background-image: url("/images/eye-open.png")
        }

        /*end*/

        .agreement-tips {
            width: 100%;
            height: 2rem;
            font-size: .9rem;
            text-align: center;
            line-height: 2rem;
        }

        .agreement-tips a {
            width: auto;
            margin: 0;
            color: #333;
            text-decoration: underline;
        }
        .getCode{
            width: 90px;
            height: 30px;
            background: #f60;
            border: none;
            color: #fff;
            right: 0;
            cursor: pointer;
            border-radius: 5px;
            top: 4%;
        }
        .loginType{
            display: flex;
            margin:0 10%;
            box-sizing: border-box;
            height: 50px;
            justify-content: space-between;
            border-bottom: 1px solid #c9c9c9;
        }
        .loginType .mobileCodeLogin,.loginType .accountLogin{
            text-align: center;
            height: 100%;
            line-height: 50px;
            color: #c9c9c9;
            cursor: pointer;
            font-size: 14px;
        }
        .loginType .active{
            border-bottom:2px solid #f60;
            color: #f60;
        }

                .registerCon .pwd{
            display: none;
        }
        
        .loginTip{
            margin:10px 10%;
            border:1px solid #f60;
            box-sizing: border-box;
            padding: 10px;
            color: #f60;
            border-radius: 4px;
        }
        .loginTip h
        .loginTip p{
            font-weight: bold;
            font-size: 14px;
        }
        #btnLogin{
            height: 40px;
            line-height: 40px;
            font-size: 16px;
        }
        .registerCon  .lcode{
            width: calc(100% - 94px);
        }
    </style> 
<body>
    <div class="h5-1yyg-v1" id="content">
        
<!-- 栏目页面顶部 -->

 <section> 
    <div class="registerCon"> 
     <ul> 
      <div class="loginType"> 
       <!--<div class="mobileCodeLogin">-->
         <!--手机验证码登录 -->
       <!--</div> -->
       <div class="accountLogin active">
         账户密码登录 
       </div> 
      </div> 
      <!--<li class="title">登录</li>--> 
      <li class="acc"> 
        <label for="txtAccount">账号</label> <input id="txtAccount" type="tel" placeholder="手机/邮箱" class="lEmail" />
      </li> 
      <li class="pwd" style="display: block;">
       <label for="txtPassword">密码</label> <input type="password" id="txtPassword" class="lPwd" placeholder="请输入密码" />
        <em id="toggle_psw" class="psw_type"></em>
       </li> 
      <li class="hid"> <input type="text" id="loginType" value="1" style="display: none;" /> </li> 
      <!--<li class="code" style="display: none;"> <input type="tel" id="txtVerify" class="lcode" placeholder="请输入验证码" value="123456" /> <button class="getCode" type="button">获取验证码</button> </li>-->
         <li class="code" style="display: block;">
             <input type="tel" id="txtVerify" class="lcode" placeholder="请输入手机验证码" value="" />
             <button class="getCode" type="button" id="getMobileCode">获取验证码</button>
             <input type="hidden" name="sendCode" id="sendCode" value="">
         </li>
      <li class="code" style="">
          <input type="input" name="verifyCode" id="verifyCode" class="lcode" style="width: 180px;" placeholder="请输入验证码" value="" />
          <!--<button class="getCode" type="button">获取验证码</button>-->
          <canvas id="canvas" width="100" height="30" style=""></canvas>
      </li>
      <li class="btn-login"><a href="javascript:;" id="btnLogin" class="nextBtn orgBtn">登 录</a> </li>
     <!--  <li id="appWeixin" class="btn-weixin" style="display: none"> 
       <a style="border-radius: 5px;background-color: #00bc0c;display: block;width: 100%;height: 43px;text-align: center;-webkit-filter: grayscale(100%)" href="javascript:;"><img style="padding-top: 5px;" alt="微信登录" src="./登录_files/wxlogin.png" /></a> </li>  -->
     
      <input name="hidLoginForward" type="hidden" id="hidLoginForward" value="" /> 
      <li class="btnArea"> <a class="btn-forget hide" href="" style="opacity: 1;"><i></i><span><!-- 忘记密码 --></span></a> <a class="btn-register" href="<?php echo WEB_PATH; ?>/mobile/user/register"><i></i><span>快速注册</span></a> </li> 
     </ul> 
    </div> 
    <!--<div class="loginTip"> -->
     <!--<p style="color: red">用户首次登录需使用手机验证码进行登录</p> -->
     <!--<p style="height: 3px"></p> -->
     <!--<p style="color: red">验证码可保存8小时</p> -->
     <!--<p style="height: 3px"></p> -->
     <!--<p style="color: red">首次登录成功后可到个人中心切换登录方式!</p> -->
    <!--</div> -->
    <div class="agreement-tips"> 
     <p>登录代表同意<a href="<?php echo G_TEMPLATES_CSS; ?>/news/服务协议.html">《泰广商城用户服务条款》</a></p>
    </div> 
   </section> 
<!-- 内页顶部 -->

 <!--    <header class="g-header">
        <div class="head-l">
	        <a href="javascript:;" onclick="history.go(-1)" class="z-HReturn"><s></s><b>返回</b></a>
        </div>
        <h2>登录</h2>
        <div class="head-r">
	        <a href="<?php echo WEB_PATH; ?>/mobile/mobile" class="z-Home"></a>
        </div>
    </header>

        <section>
	        <div class="registerCon">
    	        <ul>
        	        <li class="accAndPwd">
            	        <dl><input id="txtAccount" type="text" placeholder="请输入您的手机号码/邮箱" class="lEmail"><s class="rs4"></s></dl>
                        <dl>
                            <input type="password" id="txtPassword" class="lPwd" placeholder="密码">
                            <s class="rs3"></s>
                        </dl>
                        <dl style="display:none">
                            <input type="hidden" id="txtVerify" class="lVerify" placeholder="验证码" value="123456"><span class="fog"></span>
                            <s class="rs3"></s>
                        </dl>
                    </li>
                    <li>
                      <a href="javascript:;" id="btnLogin" class="nextBtn orgBtn" style="width:40%; float:left;">登 录</a>
                      <a href="<?php echo WEB_PATH; ?>/?/register" class="nextBtn orgBtn" style="width:40%; float:right;">注册</a>
                      <input name="hidLoginForward" type="hidden" id="hidLoginForward" value="<?php echo WEB_PATH; ?>/mobile/home" /></li>
			</li>
                    <li class="rSelect"></li>
                </ul>
                <div class="fastLogin">
                <?php 
                        $conn_cfg = System::load_app_config("connect",'','api');
                 ?>
                                  <h2>
                                      <span class="line_l"></span> 一键登录<span class="line_r"></span>
                                    </h2>
                                    <div class="fastInfo">
                                          <a  href="<?php echo WEB_PATH; ?>/api/qqlogin">
                                    <?php if($conn_cfg['qq']['off']): ?>
                                              <img src="<?php echo G_TEMPLATES_IMAGE; ?>/mobile/qq.png" alt="" class="user_login_q">
                                    <?php endif; ?>
                                              </a>

                                     </div>
                  </div>
	        </div>
        </section> -->
        
<?php include templates("mobile/index","footer");?>
<script language="javascript" type="text/javascript">

  var Path = new Object();

  Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";  

  Path.Webpath = "<?php echo WEB_PATH; ?>";

  

var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}

function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}

Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js?v='+GetVerNum());

  var checkcode=document.getElementById('checkcode');

  checkcode.src = checkcode.src + new Date().getTime();


  var src=checkcode.src;

  checkcode.onclick=function(){

      this.src=src+'/'+new Date().getTime();

  }

</script>

    </div>

    <script>
        $('#getMobileCode').click(function(){
            var phone = $('#txtAccount').val();
            if(!(/^1[34578]\d{9}$/.test(phone))){
                $.PageDialog.fail("手机号码有误，请重填");
                return false;
            }
            $.ajax({
                url: "/mobile/user/sendLoginMobileCode/"+phone,
                type: "get",
                // data:{'phone':phone},
                dataType: "json",
                success:function(data){
                    // var result = data.parseJSON();
                    if(data.status == '0'){
                        $.PageDialog.fail(data.message);
                        return false;
                    }else{
                        $.PageDialog.fail(data.message);
                        $('#sendCode').val(data.code);
                        return false;
                    }
                }
            });
            var step = 59;
            // $('#btn').val('重新发送60');
            var _res = setInterval(function(){
                $("#getMobileCode").attr("disabled", true);//设置disabled属性
                $('#getMobileCode').val('重新发送'+step);
                $('#getMobileCode').html('重新发送'+step);
                step-=1;
                if(step <= 0){
                    $("#getMobileCode").removeAttr("disabled"); //移除disabled属性
                    $('#getMobileCode').val('获取验证码');
                    $('#getMobileCode').html('获取验证码');
                    clearInterval(_res);//清除setInterval
                    $('#getMobileCode').val('重新发送');
                    $('#getMobileCode').html('重新发送');
                }
            },1000);
            return false;
        });
    </script>
</body>
</html>
