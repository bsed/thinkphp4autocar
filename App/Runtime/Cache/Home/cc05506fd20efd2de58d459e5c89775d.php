<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0021)http://www.pgyer.com/ -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>顶尖汇 - 免费的应用托管平台|App应用众测分发</title>
        <meta charset="utf-8">
    

    <meta name="keywords" content="顶尖汇 企业签名 InHouse In-House Android apk adhoc 发布 测试 内测 安装 安卓 ">
    <meta name="description" content="顶尖汇  为开发者提供简洁迅速的内测程序分发服务">

    <meta property="og:type" content="webpage">
    <meta property="og:url" content="http://applicationmarket.sinaapp.com">
    <meta property="og:title" content="顶尖汇">
    <meta property="og:description" content="顶尖汇为开发者提供简洁迅速的内测程序分发服务">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="顶尖汇">
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


<style>.sequence-preloader{height: 100%;position: absolute;width: 100%;z-index: 999999;}@keyframes preload{0%{opacity: 1;}50%{opacity: 0;}100%{opacity: 1;}}.sequence-preloader .preloading .circle{fill: #ff9442;display: inline-block;height: 12px;position: relative;top: -50%;width: 12px;animation: preload 1s infinite; animation: preload 1s infinite;}.preloading{display:block;height: 12px;margin: 0 auto;top: 50%;margin-top:-6px;position: relative;width: 48px;}.sequence-preloader .preloading .circle:nth-child(2){animation-delay: .15s; animation-delay: .15s;}.sequence-preloader .preloading .circle:nth-child(3){animation-delay: .3s; animation-delay: .3s;}.preloading-complete{opacity: 0;visibility: hidden;transition-duration: 1s; transition-duration: 1s;}div.inline{background-color: #ff9442; margin-right: 4px; float: left;}</style></head>	
	<script src="__TMPL__Public/js/jquery-1.8.2.min.js"></script>
<body>

<div class="wrapper">

<!--=== Header ===-->    
<div class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <!-- Topbar Navigation -->
            <?php if($_SESSION['realname']!= ''): ?><ul class="loginbar pull-right topmenu-t">
	                <li><i class="fa fa-user"></i>&nbsp<?php echo (session('realname')); ?></li>
					<li class="topbar-devider"></li>
					<li><a href="#">账户设置</a></li>
					<li class="topbar-devider"></li>
					<li><a href="<?php echo U('Admin/User/logout');?>">退出</a></li>
	            </ul>
	        <?php else: ?>
	        	<ul class="loginbar pull-right topmenu-t">
                    <li><a href="<?php echo U('Admin/User/login');?>">登录</a></li>
	                <li class="topbar-devider"></li>
	                <li><a href="<?php echo U('Admin/User/register');?>">注册</a></li>
	            </ul><?php endif; ?>
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
                        <a href="__APP__">首页</a>
                    </li>
                    <li class="">
                        <a href="<?php echo U('Admin/App/finish');?>">发布应用</a>
                    </li>
                    <li class="">
                        <a href="<?php echo U('Admin/App/myApplication');?>">应用管理</a>
                    </li>
                    <li class="">
                        <a href="<?php echo U('Admin/Rbac/user');?>">管理中心</a>
                    </li>

                </ul>
            </div><!--/navbar-collapse-->
        </div>    
    </div>            
    <!-- End Navbar -->
</div>
<!--=== End Header ===-->    

<!--=== Slider ===-->
<div id="sequence-theme" class="sequence-inner">
    <div id="sequence">
        <img class="prev" src="__TMPL__Public/image/bt-prev1.png" alt="Previous" style="display: inline;">
        <img class="next" src="__TMPL__Public/image/bt-next1.png" alt="Next" style="display: inline;">
        <ul style="width: 100%; height: 100%; position: relative;">
            <li class="animate-out" style="display: list-item; transition: 0s 0s; -webkit-transition: 0s 0s; width: 100%; height: 100%; position: absolute; z-index: 1;">
                <div class="info">
                    <h2>移动应用内测平台</h2>
                    <p>快速发布应用程序, 极大简化了应用内测过程。通过遍布全国超过500家的CDN加速节点，提供飞一般的上传下载速度！</p>
                </div>
                <!--
                <img class="balloon" src="/static/assets/plugins/horizontal-parallax/images/balloon.png" alt="Balloon" />
                -->
                <img class="balloon" src="__TMPL__Public/image/pgy.png" alt="Balloon">
            </li>
            <li style="display: list-item; transition: 0s 0s; -webkit-transition: 0s 0s; width: 100%; height: 100%; position: absolute; z-index: 1;" class="animate-out">
                <div class="info">
                    <h2>应用OTA无线分发</h2>
                    <p>通过手机应用的OTA分发方式，一键安装应用，抛弃数据线、手机管理软件的依赖，扫描二维码即可直接安装</p>
                </div>
                <img class="aeroplane" src="__TMPL__Public/image/aeroplane.png" alt="Aeroplane">
            </li>
            <li style="display: list-item; transition: 0s 0s; -webkit-transition: 0s 0s; width: 100%; height: 100%; position: absolute; z-index: 3;" class="animate-in">
                <div class="info">
                    <h2>iOS和Android全体验</h2>
                    <p>蒲公英通过后端技术，将iOS和Android应用的分发测试体验完美整合，为开发者和测试用户提供统一完整的测试分发体验。</p>
                </div>
                <img class="kite" src="__TMPL__Public/image/kite.png" alt="Kite">
            </li>
        </ul>
    </div>
</div><!--/sequence-theme-->
<!--=== End Slider ===-->
<!--  
<!--=== Purchase Block ===-->
<div class="purchase">
    <div class="container" style="padding:20px 10px;">
        <div class="row">
            <div class="col-md-9 col-sm-9 animated fadeInLeft text-left">
                <span>内测应用，仅需两步</span>
                <ol>
                    <li class="text-left">将应用上传到网站，生成安装链接和二维码</li>
                    <li class="text-left">用户在手机上打开安装链接，或扫码二维码，即可开始安装</li>
                </ol>
            </div>
            <div class="col-md-3 col-sm-3 btn-buy animated fadeInRight">
                <a href="<?php echo U('Admin/App/finish');?>" class="btn-u btn-u-lg"><i class="fa fa-cloud-upload"></i> 发布应用</a>
            </div>
        </div>
    </div>
</div><!--/row-->
<!-- End Purchase Block -->

<div class="container content" style="background-color:#efefef; margin:0; width:100%;">
    <div class="title-box">
        <div class="title-box-text">支持所有设备，随时随地使用</div>
        <p>支持 iOS, Mac, Android, Windows 平台</p>
        <p>
            <i class="fa fa-apple color-grey" style="font-size:50px; padding:10px 50px 10px 50px;"></i>
            <i class="fa fa-android color-grey" style="font-size:50px; padding:10px 50px 10px 50px;"></i>
            <i class="fa fa-windows color-grey" style="font-size:50px; padding:10px 50px 10px 50px;"></i>
        </p>
        <br>
        <p><a href="http://www.pgyer.com/apps" class="btn-u"> <i class="fa fa-cloud-download"></i> 下载客户端</a></p>
    </div>
</div>

<!--=== Content Part ===-->
<div class="container content">	

    <!-- Promo Box -->
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="promo-box">
                <i class="fa fa-bullhorn color-blue"></i>
                <strong>永久免费</strong>
                <p>所有用户都可以永久免费使用蒲公英的服务，蒲公英推出的大部分功能，完全满足中小型企业和开发者的需求！</p>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="promo-box">
                <i class="fa fa-bolt color-orange"></i>
                <strong>极速上传</strong>
                <p>通过遍布全国各地超过500家的CDN加速节点，为用户提供最快的上传下载速度。安装包比较大？没问题！</p>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="promo-box">
                <i class="fa fa-rocket color-sea"></i>
                <strong>开放API</strong>
                <p>通过清晰简单的开放的API，开发者将有能力将蒲公英提供的服务接入到自己的应用中，扩展应用的测试能力！</p>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="promo-box">
                <i class="fa fa-apple color-aqua"></i>
                <strong>支持iOS</strong>
                <p>完美支持iOS应用，开发者可自选Ad-Hoc或自有企业签名发布方式，应用上传后，手机扫描二维码即可安装！</p>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="promo-box">
                <i class="fa fa-android color-green1"></i>
                <strong>支持Android</strong>
                <p>为Android应用生成独立下载链接和二维码。应用上传后，手机扫描二维码即可安装！抛弃你的数据线吧！</p>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="promo-box">
                <i class="fa fa-check color-purple"></i>
                <strong>一键发布</strong>
                <p>蒲公英将应用分发做到极简，只需两步即可分发完成。还在使用邮件或QQ分发你的应用吗？你OUT了！</p>
            </div>
        </div>
    </div>
    <!-- End Promo Box -->
    <div class="clearfix margin-bottom-40"></div>
</div><!--/container-->     

<div class="container content" style="background-color:#efefef; margin:0; width:100%; padding: 60px 10px 40px 10px;">
    <!--Title Box-->
    <div class="title-box">
        <div class="title-box-text">生命，就不该<span class="color-green">浪费</span>在一些无趣的事情上</div>
        <p>蒲公英，帮您轻松内测应用</p>
    </div>
    <!-- End Promo Box -->
</div><!--/container-->     



<!-- JS Implementing Plugins -->
<script type="text/javascript" src="__TMPL__Public/js/sequence.jquery-min.js"></script>
<script type="text/javascript" src="__TMPL__Public/js/horizontal-parallax.js"></script>


</div></body></html>