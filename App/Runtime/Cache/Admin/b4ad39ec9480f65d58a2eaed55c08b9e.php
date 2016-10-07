<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0064)http://www.pgyer.com/app/finish/ac7282c6c2f4c6cc7c7b7312ef976282 -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>顶尖汇 - 发布应用</title>
        <meta charset="utf-8">
    

    <meta name="keywords" content="顶尖汇 企业签名 InHouse In-House iOS Android ipa apk adhoc 发布 测试 内测 安装 安卓 iPad iPhone">
    <meta name="description" content="顶尖汇  为开发者提供简洁迅速的内测程序分发服务">

    <meta property="og:type" content="webpage">
    <meta property="og:url" content="http://applicationmarket.sinaapp.com">
    <meta property="og:title" content="顶尖汇">
    <meta property="og:description" content="顶尖汇为开发者提供简洁迅速的内测程序分发服务">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="顶尖汇">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no minimal-ui">

    <link rel="shortcut icon" href="http://static.pgyer.com/static/assets/img/favicon.ico">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/bootstrap/css/bootstrap.min.20150122.css">
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/css/style.20150122.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/font-awesome/css/font-awesome.min.20150122.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/css/themes/default.20150122.css" id="style_color">
	<link rel="stylesheet" href="http://static.pgyer.com/static/assets/css/custom.20150122.css">

    <link rel="stylesheet" href="http://www.pgyer.com/static/assets/css/pages/page_log_reg_v1.css">
    <link rel="stylesheet" href="http://www.pgyer.com/static/assets/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css">
    
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/css/my.20150122.css">
    
    <script src="__TMPL__Public/js/jquery-1.8.2.min.js"></script>
    <script src="__TMPL__Public/js/ajaxfileupload.js"></script>
    <script src="__TMPL__Public/js/jquery.form.js"></script>
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

    <!--=== Header ===-->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">

            <!-- Menu -->       
            
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li id="sy">
                        <a href="__APP__">首页</a>
                    </li>
                    <li id="fb">
                        <a href="__GROUP__/App/finish">发布应用</a>
                    </li>
                    <li id="yy">
                        <a href="__GROUP__/App/myApplication">应用管理</a>
                    </li>
					<li id="gl">
                        <a href="__GROUP__/Rbac/user">管理中心</a>
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
        <h1 class="pull-left"><?php echo ($appInfo["name"]); ?></h1>
        <ul class="pull-right breadcrumb">
            <li><a href="http://www.pgyer.com/my">应用管理</a></li>
            <li><?php echo ($appInfo["name"]); ?></li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content recent"> 	

    <div class="row margin-bottom-20">
        <div class="col-md-6">
            <a href="__URL__/myApplication"><i class="fa fa-angle-double-left"></i> 返回应用管理</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="margin-bottom-20">
                <a class="btn-u" href="__URL__/finish"><i class="fa fa-cloud-upload"></i> 上传新版本</a>
            </div>
            <div class="headline headline-md"><h2><?php echo ($appInfo["name"]); ?></h2></div>
            <div class="panel pgy-panel-sea margin-bottom-40">
                <table class="table table-striped table-hover text-center myapps pgy-table">
                    <thead>
                        <tr class="pgy-warning">
                            <th class="text-center" width="5%"></th>
                            <th class="text-center"></th>
                            <th class="text-center">版本</th>
                            <th class="text-center">平台</th>
                            <th class="text-center">安装次数</th>
                            <th class="text-center">更新时间</th>
                            <th class="text-center">编辑</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="active">
                            <th class="text-center" colspan="10">当前版本</th>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="" target="_blank">
                                    <img src="__ROOT__/Public/djh/thumbnail/<?php echo ($appInfo["thumbnail_name"]); ?>" class="appicon_s"  style="margin-left:10px;">
                                </a>
                            </td>
                            <td>
                                <a href="#" class="" target="_blank">
                                    <?php echo ($appInfo["name"]); ?>                               </a>
                            </td>
                            <td><?php echo ($appInfo["version"]); ?></td>
                            <td>
                                <span class="label label-success">Android</span>
                            </td>
                            <td><?php echo ($appInfo["download_count"]); ?></td>
                            <td><?php echo (time_tran($appInfo["created_time"])); ?></td>
                            <td>
                                <a class="btn btn-info btn-xs" href="__URL__/edit/appKey/<?php echo ($appInfo["id"]); ?>"><i class="fa fa-edit"></i> 编辑</a>
                                <a id="<?php echo ($appInfo["id"]); ?>" class="btn btn-danger btn-xs" onclick="javascript:void(0)" href="javascript:void(0);"><i class="fa fa-trash-o"></i> 删除</a>
                            </td>
                        </tr>
                        <!--  
                        <tr class="active">
                            <th class="text-center" colspan="10">历史版本</th>
                        </tr>
                        <tr id="app_row_d406a70f9e98152f8a5dd05003fc20a1">
                            <td>
                                <a href="#" class="" target="_blank">
                                    <img src="#" class="appicon_s" onerror="javascript:this.src=&#39;/static/assets/img/default-icon.png&#39;;" style="margin-left:10px;">
                                </a>
                            </td>
                            <td>
                                <a href="#" class="" target="_blank">
                                    有缘网                                </a>
                            </td>
                            <td>1 (build 1)</td>
                            <td><span class="label label-success">Android</span></td>
                            <td>4</td>
                            <td>3 小时前</td>
                            <td><a class="btn btn-danger btn-xs" onclick="javascript:deleteApp(&#39;d406a70f9e98152f8a5dd05003fc20a1&#39;);" href="javascript:void(0);"><i class="fa fa-trash-o"></i> 删除</a></td>
                        </tr>--></tbody>
                </table>
            </div>                  
        </div>
        <!--End Striped Rows-->
    </div>

    <div class="pager">
        </div>

</div><!--/container-->	 	
<!--=== End Content Part ===-->

<!-- JS Page Level -->           
<script type="text/javascript">
$('.navbar-nav').each(function() {
	$('.navbar-nav li').attr("class","");
});
$("#yy").attr("class","active");
$('.btn-danger').each(function() {
	$(this).click(function() {
		params = {};
		params.id = $(this).attr("id");
		loading=1;
		var url = '__URL__/deleteAppHandle';
		$.post(url, params, function(d){
			if(d.error == ""){
				alert("已删除");
	        	window.location.href="__URL__/applicationDetails";
			}else{
				alert(d.error);
			}
		}, 'json');
	});
});
</script>

</body></html>