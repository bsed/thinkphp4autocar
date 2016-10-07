<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0034)http://www.pgyer.com/user/register -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>顶尖汇 - 用户注册</title>
        <meta charset="utf-8">
    

    <meta name="keywords" content="蒲公英 pgyer 企业签名 InHouse In-House iOS Android ipa apk adhoc 发布 测试 内测 安装 安卓 iPad iPhone">
    <meta name="description" content="蒲公英 为开发者提供简洁迅速的内测程序分发服务">

    <meta property="og:type" content="webpage">
    <meta property="og:url" content="http://www.pgyer.com">
    <meta property="og:title" content="蒲公英">
    <meta property="og:description" content="蒲公英 为开发者提供简洁迅速的内测程序分发服务">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="蒲公英">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no minimal-ui">

    <link rel="dns-prefetch" href="http://ssl.pgyer.com/">
    <link rel="dns-prefetch" href="http://appicon.pgyer.com/">
    <link rel="dns-prefetch" href="http://app-screenshot.pgyer.com/">
    <link rel="dns-prefetch" href="http://static.pgyer.com/">
    <link rel="dns-prefetch" href="http://google-analytics.com/">


    <link rel="shortcut icon" href="http://static.pgyer.com/static/assets/img/favicon.ico">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/bootstrap/css/bootstrap.min.20150122.css">
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/css/style.20150122.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/line-icons/line-icons.20150122.css">
    <link rel="stylesheet" href="http://www.pgyer.com/static/assets/plugins/font-awesome/css/font-awesome.min.20150122.css">
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/flexslider/flexslider.20150122.css">
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/bxslider/jquery.bxslider.20150122.css">
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/horizontal-parallax/css/horizontal-parallax.20150122.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/css/themes/default.20150122.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/css/custom.20150122.css">

    <link rel="stylesheet" href="http://www.pgyer.com/static/assets/css/pages/page_log_reg_v1.css">
    <link rel="stylesheet" href="http://www.pgyer.com/static/assets/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css">
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="/static/assets/css/sky-forms-ie8.css">
    <![endif]-->

</head>	

<body>

<!--=== Header ===-->    
<div class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <!-- Topbar Navigation -->
            <ul class="loginbar pull-right topmenu-t">
                            <li><a href="#">登录</a></li>
                <li class="topbar-devider"></li>
                <li><a href="#">注册</a></li>
                        </ul>
            <!-- End Topbar Navigation -->
        </div>
    </div>
    <!-- End Topbar -->

    <!--=== Header ===-->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">

            <!-- Menu -->       
            
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">首页</a>
                    </li>
                    <li class="">
                        <a href="#">发布应用</a>
                    </li>
                </ul>
            </div><!--/navbar-collapse-->
        </div>    
    </div>            
    <!-- End Navbar -->
</div>
<!--=== End Header ===-->    

<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-20">
	<div class="container">
        <h1 class="pull-left">新用户加入</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="http://www.pgyer.com/">首页</a></li>
            <li>用户注册</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <form class="reg-page sky-form" id="form" method="POST" novalidate="novalidate">
                <div class="reg-header">
                    <h2>加入我们</h2>
                    <p>已经注册了吗？ <a href="http://www.pgyer.com/user/login" class="color-green">请点击这里登录</a></p>
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
                        <input type="text" name="name" placeholder="请输入您的真实姓名">
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
                    <img src="./蒲公英 - 用户注册_files/view" style="margin-top:15px; cursor:pointer;" id="captchaImage">
                </section>

                <hr>

                <section>
                <label class="checkbox"><input type="checkbox" name="termofservice" checked="checked"><i></i>已同意并愿意接受<a href="http://www.pgyer.com/about/termofservice" class="color-green">《蒲公英服务条款》</a></label>
                </section>

                <div class="row">
					<div class="col-lg-6">                        
					</div>
                    <div class="col-lg-6 text-right">
                        <button class="btn-u" type="submit" id="submitButton">免费注册</button>                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!--/container-->		
<!--=== End Content Part ===-->



<script>
function saveData() {
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
});
</script>



</body></html>