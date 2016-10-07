<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0064)http://www.pgyer.com/app/finish/ac7282c6c2f4c6cc7c7b7312ef976282 -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>梧州学院</title>
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
    <!-- Begin Sidebar Menu -->
		<div class="col-md-3">
	<ul class="doc-nav list-group sidebar-nav-v1" id="sidebar-nav" data-spy="pgy_affix" data-offset-top="202" data-offset-bottom="300">
		<!-- Manage App  -->
		<li id="faqnode" class="list-group-item active">
			<a href="javascript:void(0)">新闻动态</a>
			<ul id="collapse-app" class="collapse in">
				<li id="yhlb"><a href="__URL__/news"> 新闻列表</a></li>
                <li id="hmd"><a href="__URL__/addNews"> 添加新闻</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">兼职平台</a>
			<ul class="collapse in">
				<li id="fllb"><a href="__URL__/jobs"> 兼职列表</a></li>
				<li id="tjfl"><a href="__URL__/addJobs"> 添加兼职</a></li>
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
                    <i class="fa fa-angle-double-right"></i>兼职列表 &nbsp;
                   </h3>
                </div>
                <table class="table table-striped table-hover text-center myapps my_history pgy-table">
                    <thead>
                        <tr class="pgy-warning">
                            <th class="text-center" width="25%">标题</th>
                            <th class="text-center" width="25%">创建者</th>
                            <th class="text-center" width="25%">发布日期</th>
                            <th class="text-center" width="25%">编辑</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php if(is_array($jobsList)): foreach($jobsList as $key=>$job): ?><tr class="my_history_row text-center">
	                            <td><a href="__APP__/Wuzhouyuan/jobDetails/id/<?php echo ($job["id"]); ?>"><?php echo ($job["title"]); ?></a></td>
	                            <td><?php echo ($job["created_by"]); ?></td>
	                            <td><?php echo (date("Y-m-d",$job["created_time"])); ?></td>
	                            <td>
	                                <a class="btn btn-info btn-xs" href="__URL__/editJobs/id/<?php echo ($job["id"]); ?>"><i class="fa fa-edit"></i> 编辑</a>
	                                <a class="btn btn-danger btn-xs" onclick="javascript:void(0)" href="javascript:void(0);" id="<?php echo ($job["id"]); ?>"><i class="fa fa-trash-o"></i> 删除</a>
	                            </td>
	                    	</tr><?php endforeach; endif; ?>
                    </tbody>
                    <tbody>
                    	<tr class="my_history_row text-center">
                            <td colspan='4'><?php echo ($page); ?></td>
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
$('.btn-danger').each(function() {
	$(this).click(function() {
		params = {};
		params.id = $(this).attr("id");
		loading=1;
		var url = '__URL__/deleteJob';
		$.post(url, params, function(d){
			if(d.error == ""){
				alert("删除成功");
	        	window.location.href="__URL__/jobs";
			}else{
				alert(d.error);
			}
		}, 'json');
	});
});


$('.collapse in').each(function() {
	$('.collapse in li').attr("class","");
});
$("#fllb").attr("class","current");
</script>


</body></html>