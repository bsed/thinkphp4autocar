<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0064)http://www.pgyer.com/app/finish/ac7282c6c2f4c6cc7c7b7312ef976282 -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>后台管理</title>
        <meta charset="utf-8">
    
    <link rel="shortcut icon" href="__TMPL__Public/img/favicon.ico">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="__TMPL__Public/css/bootstrap.min.20150122.css">
    <link rel="stylesheet" href="__TMPL__Public/css/style.20150122.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="__TMPL__Public/css/font-awesome.min.20150122.css">
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/font-awesome/css/font-awesome.min.20150122.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="__TMPL__Public/css/default.20150122.css">
    <link rel="stylesheet" href="__TMPL__Public/css/custom.20150122.css">

	<link rel="stylesheet" href="__TMPL__Public/css/page_log_reg_v1.css">
	<link rel="stylesheet" href="__TMPL__Public/css/custom-sky-forms.css">
    
    <link rel="stylesheet" href="__TMPL__Public/css/my.20150122.css">
    
    <script src="__TMPL__Public/js/jquery-1.8.2.min.js"></script>
    <script src="__TMPL__Public/js/ajaxfileupload.js"></script>
    <script src="__TMPL__Public/js/jquery.form.js"></script>
    <script src="__TMPL__Public/js/jquery-ui.js"></script>
    
    <script src="__ROOT__/Data/Ueditor/ueditor.config.js"></script>
	<script src="__ROOT__/Data/Ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript">
		window.UEDITOR_CONFIG.initialFrameHeight = 400;
		window.UEDITOR_CONFIG.savePath='upload1';
		window.UEDITOR_CONFIG.imageUrl = '__GROUP__/Wuzhouyuan/upload';
		window.UEDITOR_CONFIG.imagePath = '__ROOT__/Public/Upload/';
	</script>
</head>

<body>

<!--=== Header ===-->    
<div class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <!-- Topbar Navigation -->
            <?php if($_SESSION['realname'] != ''): ?><ul class="loginbar pull-right topmenu-t">
	                <li><i class="fa fa-user"></i>&nbsp<?php echo (session('realname')); ?></li>
					<li class="topbar-devider"></li>
					<li><a href="#">账户设置</a></li>
					<li class="topbar-devider"></li>
					<li><a href="<?php echo U('Admin/User/logout');?>">退出</a></li>
	            </ul>
	        <?php else: ?>
	        	<ul class="loginbar pull-right topmenu-t">
                    <li><a href="__GROUP__/User/login">登录</a></li>
	                <li class="topbar-devider"></li>
	                <li><a href="__GROUP__/User/register">注册</a></li>
	            </ul><?php endif; ?>
            <!-- End Topbar Navigation -->
        </div>
    </div>
    <!-- End Topbar -->

</div>
<!--=== End Header ===-->    

<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-20">
	<div class="container">
        <h1 class="pull-left">新用户加入</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="#">首页</a></li>
            <li>用户注册</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <form class="reg-page sky-form" id="form" method="POST" novalidate="novalidate" action="__GROUP__/User/registerHandle">
                <div class="reg-header">
                    <h2>加入我们</h2>
                    <p>已经注册了吗？ <a href="__URL__/login" class="color-green">请点击这里登录</a></p>
                </div>

                <section>
                    <label class="label">邮箱（E-mail） *</label>
                    <label class="input">
                        <i class="icon-append fa fa-envelope"></i>
                        <input type="text" id="email" name="email" placeholder="请输入您的邮箱地址">
                    </label>
                </section>

                <section>
                    <label class="label">真实姓名 *</label>
                    <label class="input">
                        <i class="icon-append fa fa-user"></i>
                        <input type="text" id="name" name="name" placeholder="请输入您的真实姓名">
                    </label>
                </section>

                <section>
                    <label class="label">密码 *</label>
                    <label class="input">
                        <i class="icon-append fa fa-key"></i>
                        <input type="password" id="password1" name="password1" placeholder="">
                    </label>
                </section>

                <section>
                    <label class="label">确认密码 *</label>
                    <label class="input">
                        <i class="icon-append fa fa-key"></i>
                        <input type="password" id="password2" name="password2" placeholder="">
                    </label>
                </section>

                <section>
                    <label class="label">验证码 *</label>
                    <label class="input">
                        <i class="icon-append fa fa-bell"></i>
                        <input type="text" id="captcha" name="captcha" placeholder="请输入下方的验证码">
                    </label>
                    <img id="code" onclick="change_code()" class="pass-verifyCode" src="<?php echo U('Admin/User/verify','','');?>"/>
                	<a  href="javascript:void(change_code(this));" class="pass-change-verifyCode">
                                        换一张</a>
                </section>

                <hr>
				<!--  
                <section>
                <label class="checkbox"><input type="checkbox" name="termofservice" checked="checked"><i></i>已同意并愿意接受<a href="http://www.pgyer.com/about/termofservice" class="color-green">《蒲公英服务条款》</a></label>
                </section>
				-->
                <div class="row">
					<div class="col-lg-6">                        
					</div>
                    <div class="col-lg-6 text-right">
                        <button class="btn-u" type="submit" id="submitButton" onclick="submitForm()">注册</button>                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!--/container-->		
<!--=== End Content Part ===-->



<script>
$('.navbar-nav').each(function() {
	$('.navbar-nav li').attr("class","");
});
$("#sy").attr("class","active");
function change_code(obj){
	$("#code").attr("src",'<?php echo U("Admin/User/verify",'','');?>'+'/'+Math.random());
	return false;
}

function submitForm(){
	var loading=0;
	if(loading){
		return false;
	}
	$('#form').ajaxForm({
	     beforeSubmit:  checkForm,// pre-submit callback
	     success:       complete,// post-submit callback
	     dataType: 'json'
	});
	loading=1;
    function checkForm(){
    	
    	if(!$.trim ( $('#email').val() )){
    		alert('请填写邮箱地址');
    		return false;
    	}
    	if(!$.trim ( $('#name').val() )){
    		alert('请填写您的姓名');
    		return false;
    	}
    	if(!$.trim ( $('#password1').val() )){
    		alert('请填写密码');
    		return false;
    	}
    	if(!$.trim ( $('#password2').val() )){
    		alert('请填写确认密码');
    		return false;
    	}
    	if(!$.trim ( $('#captcha').val() )){
    		alert('请填写验证码');
    		return false;
    	}
    }
    function complete(d){
        if (d.error == ""){
        	window.location.href="__ROOT__"; 
        }else{
        	alert(d.error);
        	loading=0;
        }
    }
}

/* function saveData() {
    $.ajax({
        type : "POST",
        data : $('#form').serialize(),
        url : "/user/register",
        dataType: 'json',
        cache: false,
        beforeSend: function( xhr ) {
            $('#submitButton').text('请稍后...').addClass('btn-u-default').attr('disabled', 'disabled');
        },
        success : function(result, textStatus, jqXHR) {
            code = result.code;
            if (code == 0) {
                var redirectURL = result.extra.redirectURL;
                window.location.href = redirectURL;
            } else {
                alert(result.message);
                $('#submitButton').text('免费注册').removeClass('btn-u-default').removeAttr('disabled');
            }
        },
        error : function(jqXHR, textStatus, errorThrown) {
            $('#submitButton').text('免费注册').removeClass('btn-u-default').removeAttr('disabled');
        }
    });
}

$(document).ready(function() {
    $(".sky-form").validate({
        rules: {
            email: {
                required: true,
                email: true,
                remote: {
                    url: "/user/checkEmail",
                    type: "post",
                    dataType: "json",
                    data: {
                        email: function() {
                            return $("#email").val();
                        }
                    }
                }
            },
            name: {
                required: true,
                minlength: 1,
                maxlength: 50
            },
            password1: {
                required: true,
                minlength: 6,
                maxlength: 50
            },
            password2: {
                required: true,
                equalTo: "#password1"
            },
            captcha: {
                required: true
            },
            termofservice: {
                required: true
            }
        },

        messages: {
            email: {
                required: "请输入邮箱地址",
                email: "您输入的邮箱地址无效",
                remote: "邮箱地址已存在"
            },
            name: {
                required: "请输入真实姓名",
                minlength: "真实姓名的长度必须大于1",
                maxlength: "真实姓名的长度必须小于50"
            },
            password1: {
                required: "请输入密码",
                minlength: "密码的长度至少为6位",
                maxlength: "密码的长度请不要超过50位"
            },
            password2: {
                required: "请再次输入密码",
                equalTo: "两次输入的密码不一致"
            },
            captcha: {
                required: "请输入验证码"
            },
            termofservice: {
                required: "您必须同意服务条款"
            }
        },

        submitHandler: function(form) {
            saveData(form);
        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $("#captchaImage").click(function(){
        $(this).attr('src', '/captcha/view?v=' + Math.random());
    });
}); */
</script>



</body></html>