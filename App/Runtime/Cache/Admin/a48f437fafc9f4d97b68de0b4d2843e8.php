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
            <ul class="loginbar pull-right topmenu-t">
                            <li><a href="__GROUP__/User/login">登录</a></li>
                <li class="topbar-devider"></li>
                <li><a href="__GROUP__/User/register">注册</a></li>
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
                        <a href="__GROUP__/App/finish">发布应用</a>
                    </li>
                    <li class="">
                        <a href="__GROUP__/App/myApplication">应用管理</a>
                    </li>
					<li class="">
                        <a href="__GROUP__/Rbac/manage">管理中心</a>
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
    <h1 class="pull-left">管理中心</h1>
    <ul class="pull-right breadcrumb">
        <li></li>
    </ul>
</div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content recent"> 	
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6" style="float:right">
                <form method="get" id="searchform">
                    <input type="hidden" name="type" id="type" value="">
                    <input type="hidden" name="group_key" id="group_key" value="">
                        <div class="input-group">
                        <input type="text" name="name" class="form-control " style="border-radius:0%  !important;" placeholder="查找用户" value="">
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
					<a href="javascript:void(0)">用户管理</a>
					<ul id="collapse-app" class="collapse in">
						<li class="current"><a href="#"> 用户列表</a></li>
						<!--  
                        <li><a href="http://www.pgyer.com/mygroup"> 应用分组</a></li>-->
					</ul>
				</li>
				<li id="faqnode" class="list-group-item active">
					<a href="javascript:void(0)">分类管理</a>
					<ul id="collapse-app" class="collapse in">
						<li class="current"><a href="#"> 分类列表</a></li>
						<!--  
                        <li><a href="http://www.pgyer.com/mygroup"> 应用分组</a></li>-->
					</ul>
				</li>
				<li id="faqnode" class="list-group-item active">
					<a href="javascript:void(0)">数据统计</a>
					<ul id="collapse-app" class="collapse in">
						<li class="current"><a href="#"> 统计列表</a></li>
						<!--  
                        <li><a href="http://www.pgyer.com/mygroup"> 应用分组</a></li>-->
					</ul>
				</li>
				<li id="faqnode" class="list-group-item active">
					<a href="javascript:void(0)">应用管理</a>
					<ul id="collapse-app" class="collapse in">
						<li class="current"><a href="#"> 应用列表</a></li>
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
                    <i class="fa fa-angle-double-right"></i>用户列表 &nbsp;
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
                            <th class="text-center" width="25%">用户名</th>
                            <th class="text-center" width="25%">真实姓名</th>
                            <th class="text-center" width="25%">最后更新</th>
                            <th class="text-center" width="25%">编辑</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php if(is_array($wuser)): foreach($wuser as $key=>$wuser): ?><tr class="my_history_row text-center">
	                            <td><?php echo ($wuser["username"]); ?></td>
	                            <td><?php echo ($wuser["realname"]); ?></td>
	                            <td><?php echo (date('Y-m-d',$wuser["last_modified_time"])); ?></td>
	                            <td>
	                                <a class="btn btn-info btn-xs" href="#"><i class="fa fa-edit"></i> 编辑</a>
	                                <a class="btn btn-danger btn-xs" onclick="javascript:void(0)" href="javascript:void(0);"><i class="fa fa-trash-o"></i> 删除</a>
	                            </td>
	                    	</tr><?php endforeach; endif; ?>
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
/*$('.my_history_row').each(function() {
	$(this).click(function() {
		window.location.href="__URL__/applicationDetails/appKey/" + $(this).attr("appKey");
	});
});*/
</script>


</body></html>