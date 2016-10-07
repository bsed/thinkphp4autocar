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

    <link rel="shortcut icon" href="http://phpico-tempico.stor.sinaapp.com/2015021008461751.ico">

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
    <h1 class="pull-left">我的应用</h1>
    <ul class="pull-right breadcrumb">
        <li>管理我上传的应用</li>
    </ul>
</div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content recent"> 	
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <a class="btn-u" href="__URL__/finish"><i class="fa fa-cloud-upload"></i> 上传新应用</a>
            </div>
            <div class="col-md-6">
                <form method="get" id="searchform">
                    <input type="hidden" name="type" id="type" value="">
                    <input type="hidden" name="group_key" id="group_key" value="">
                        <div class="input-group">
                        <input type="text" name="name" class="form-control " style="border-radius:0%  !important;" placeholder="查找应用" value="">
                            <span class="input-group-btn">
                                <button class="btn-u" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="margin-bottom-20"></div>
        </div> 
    </div>
    <div class="row">
    <!-- Begin Sidebar Menu -->
		<div class="col-md-3">
			<ul class="doc-nav list-group sidebar-nav-v1" id="sidebar-nav" data-spy="pgy_affix" data-offset-top="202" data-offset-bottom="300">
				<!-- Manage App  -->
				<li id="faqnode" class="list-group-item active">
					<a href="javascript:void(0)">应用管理</a>
					<ul id="collapse-app" class="collapse in">
						<li class="current"><a href="__URL__/myApplication"> 我的应用</a></li>
						<!--  
                        <li><a href="http://www.pgyer.com/mygroup"> 应用分组</a></li>-->
					</ul>
				</li>
				<!-- End Manage App -->
			</ul>
		</div>
<!-- End Sidebar Menu -->

        <div class="col-md-9">
           <div class="margin-bottom-20">
            <div class="panel pgy-panel-sea margin-bottom-40">
                <div class="panel-heading pgy-panel-heading">
                  <h3 class="panel-title" style="color:#fff">
                    <i class="fa fa-angle-double-right"></i>我的应用 &nbsp;
                    <!--  
                    <a class="btn-u btn-u-xs rounded-4x pgy-btn-u btn-u-checked" style="margin-left:20px;" onclick="setSearchForm(&#39;&#39;,0);">全部
                    </a><a class="btn-u  btn-u-xs rounded-4x pgy-btn-u " onclick="setSearchForm(&#39;android&#39;,0);">Android</a>
                    <a class="btn-u btn-u-xs rounded-4x pgy-btn-u " onclick="setSearchForm(&#39;ios&#39;,0);">iOS</a>
                    <label class="select state-success" style="float:right">
                        <select id="" name="" class="pgy-group-select" onchange="setSearchForm(this.value,1);">
                            <option value="0">全部分组</option>
                                                </select>
                        <i style="height:1px;margin-right:0px;"></i>
                    </label>
                    -->
                   </h3>
                </div>
                <table class="table table-striped table-hover text-center myapps my_history pgy-table">
                    <thead>
                        <tr class="pgy-warning">
                           <th class="text-center" width="20%"></th>
                            <th class="text-center" width="20%">名称</th>
                            <th class="text-center" width="20%">最新版本</th>
                            <th class="text-center" width="20%">平台</th>
                            <th class="text-center" width="20%">最后更新</th>
                            <!--  
                            <th class="text-center" width="20%">分组</th>-->
                        </tr>
                    </thead>
                    <tbody>
                    	<?php if(is_array($appInfoList)): foreach($appInfoList as $key=>$appInfo): ?><tr class="my_history_row" appKey="<?php echo ($appInfo["id"]); ?>">
	                            <td>
	                                <img src="__ROOT__/Public/djh/thumbnail/<?php echo ($appInfo["thumbnail_name"]); ?>" class="appicon_s" style="margin-left:10px;">
	                            </td>
	                            <td><?php echo ($appInfo["name"]); ?></td>
	                            <td><?php echo ($appInfo["version"]); ?></td>
	                            <td><span class="label label-success">Android</span></td>
	                            <td><?php echo (time_tran($appInfo["created_time"])); ?></td>
	                            <!--  
	                            <td>-</td>
	                            -->
	                    	</tr><?php endforeach; endif; ?>
                    </tbody>
                     <tbody>
                    	<tr class="my_history_row text-center">
                            <td colspan='5'><?php echo ($page); ?></td>
                    	</tr>
                    </tbody>
                </table>
            </div>
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

$('.my_history_row').each(function() {
	$(this).click(function() {
		window.location.href="__URL__/applicationDetails/appKey/" + $(this).attr("appKey");
	});
});
</script>


</body></html>