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
    <link rel="stylesheet" href="__TMPL__Public/css/node.css">
    <link rel="stylesheet" href="__TMPL__Public/css/jquery.datetimepicker.css">
    <link rel="stylesheet" href="__TMPL__Public/css/simpleCanleder.css">
    
    <script src="__TMPL__Public/js/jquery-1.8.2.min.js"></script>
    <script src="__TMPL__Public/js/ajaxfileupload.js"></script>
    <script src="__TMPL__Public/js/jquery.form.js"></script>
    <script src="__TMPL__Public/js/jquery-ui.js"></script>
    <script src="__TMPL__Public/js/strophe-custom-2.0.0.js"></script>
    <script src="__TMPL__Public/js/json2.js"></script>
    <script src="__TMPL__Public/js/easemob.im-1.0.5.js"></script>
    <script src="__TMPL__Public/js/jquery.datetimepicker.js"></script>
    <script src="__TMPL__Public/js/simpleCanleder.js"></script>
    <!-- <script src="__TMPL__Public/js/bootstrap.js"></script> -->
    
    <script src="__ROOT__/Data/Ueditor/ueditor.config.js"></script>
	<script src="__ROOT__/Data/Ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript">
		var appkey = "xingxiaotianxia#xingxiaotianxia";
		window.UEDITOR_CONFIG.initialFrameHeight = 400;
		window.UEDITOR_CONFIG.savePath='upload1';
		window.UEDITOR_CONFIG.imageUrl = '__GROUP__/Shop/upload';
		window.UEDITOR_CONFIG.imagePath = 'Public/upload/';
	</script>
	
</head>

<body>

<!--=== Header ===-->    
<div class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <!-- Topbar Navigation -->
            <?php if($_SESSION['uname'] != ''): ?><ul class="loginbar pull-right topmenu-t">
	                <li><i class="fa fa-user"></i>&nbsp<?php echo (session('uname')); ?></li>
					<!-- <li class="topbar-devider"></li> -->
					<!-- <li><a href="#">账户设置</a></li> -->
					<li class="topbar-devider"></li>
					<li><a href="<?php echo U('Admin/Xkuser/logout');?>">退出</a></li>
	            </ul>
	        <?php else: ?>
	        	<ul class="loginbar pull-right topmenu-t">
                    <li><a href="__GROUP__/Xkuser/login">登录</a></li>
	               <!--  <li class="topbar-devider"></li>
	                <li><a href="__GROUP__/Xkuser/register">注册</a></li> -->
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
		<li class="list-group-item active">
			<a href="javascript:void(0)">用户管理</a>
			<ul class="collapse in">
				<li id="yhlb"><a href="__GROUP__/User/users">用户列表</a></li>
				<!-- <li id="tjyh"><a href="__GROUP__/Xkrbac/addUser">添加用户</a></li> -->
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">消息推送</a>
			<ul class="collapse in">
				<li id="xxts"><a href="__GROUP__/Shop/message">消息推送</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">预约审车</a>
			<ul class="collapse in">
				<li id="rscpe"><a href="__GROUP__/Shop/peie">日审车配额</a></li>
				<li id="sclb"><a href="__GROUP__/Shop/shenche">审车列表</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">店铺</a>
			<ul class="collapse in">
				<li id="dplb"><a href="__GROUP__/Shop/shop">店铺列表</a></li>
				<li id="tjdp"><a href="__GROUP__/Shop/addshop">添加店铺</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">道路救援</a>
			<ul class="collapse in">
				<li id="jylb"><a href="__GROUP__/Shop/jiuyuan">救援列表</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">二手车</a>
			<ul class="collapse in">
				<li id="esclb"><a href="__GROUP__/Shop/usedcar">二手车列表</a></li>
				<li id="tjesc"><a href="__GROUP__/Shop/addUsedcar">添加二手车</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">广告</a>
			<ul class="collapse in">
				<li id="lunb"><a href="__GROUP__/Shop/lunbo">首页轮播图</a></li>
				<li id="tjlunb"><a href="__GROUP__/Shop/addlunbo">添加首页轮播图</a></li>
				<li id="dbgg"><a href="__GROUP__/Shop/ad">底部广告</a></li>
				<li id="tjdbgg"><a href="__GROUP__/Shop/addad">添加底部广告</a></li>
			</ul>
		</li>
	</ul>
</div>

<!-- End Sidebar Menu -->

        <div class="col-md-9">
           <div class="margin-bottom-20">
            <div class="panel pgy-panel-sea margin-bottom-40">
                <div class="panel-heading pgy-panel-heading">
                  <h3 class="panel-title" style="color:#fff">
                    <i class="fa fa-angle-double-right"></i>店铺列表 &nbsp;
                   </h3>
                </div>
                <table class="table table-striped table-hover text-center myapps my_history pgy-table">
                    <thead>
                        <tr class="pgy-warning">
                        	<th class="text-center" width="20%">图片</th>
                            <th class="text-center" width="20%">编辑</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php if(is_array($list)): foreach($list as $key=>$list): ?><tr class="my_history_row text-center">
	                    		<td><img style="width:100px" src="Public/upload/<?php echo ($list["image"]); ?>" /></td>
	                            <td>
	                                <a class="btn btn-info btn-xs" href="__URL__/editlunbo/id/<?php echo ($list["id"]); ?>"><i class="fa fa-edit"></i> 编辑</a>
                                	<a class="btn btn-danger btn-xs" onclick="javascript:void(0)" href="javascript:void(0);" id="<?php echo ($list["id"]); ?>"><i class="fa fa-trash-o"></i> 删除</a>
	                            </td>
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
$('.btn-danger').each(function() {
	$(this).click(function() {
		params = {};
		params.id = $(this).attr("id");
		loading=1;
		var url = '__URL__/deleteadHandle';
		$.post(url, params, function(d){
			if(d.error == ""){
				alert("删除成功");
	        	window.location.href="__URL__/lunbo";
			}else{
				alert(d.error);
			}
		}, 'json');
	});
});


$('.collapse in').each(function() {
	$('.collapse in li').attr("class","");
});
$("#lunb").attr("class","current");
</script>


</body></html>