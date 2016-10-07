<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0064)http://www.pgyer.com/app/finish/ac7282c6c2f4c6cc7c7b7312ef976282 -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>学习平台</title>
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
			<a href="javascript:void(0)">住户信息</a>
			<ul class="collapse in">
				<li id="zhlb"><a href="__URL__/resident">住户列表</a></li>
				<li id="tjzl"><a href="__URL__/addResident">添加住户</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">房产信息</a>
			<ul class="collapse in">
				<li id="fclb"><a href="__URL__/house"> 房产列表</a></li>
				<li id="tjfc"><a href="__URL__/addHouse"> 添加房产</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">公共设施信息</a>
			<ul class="collapse in">
				<li id="ggsslb"><a href="__URL__/facilities"> 公共设施列表</a></li>
				<li id="tjggss"><a href="__URL__/addFacilities"> 添加公共设施</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">收费管理</a>
			<ul class="collapse in">
				<li id="fylb"><a href="__URL__/cost"> 费用列表</a></li>
				<li id="tjfy"><a href="__URL__/addCost"> 添加费用</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">停车位管理</a>
			<ul class="collapse in">
				<li id="tcclb"><a href="__URL__/parking"> 停车位列表</a></li>
				<li id="tjtcc"><a href="__URL__/addParking"> 添加停车位</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">报修管理</a>
			<ul class="collapse in">
				<li id="bxlb"><a href="__URL__/repair"> 报修列表</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">投诉管理</a>
			<ul class="collapse in">
				<li id="tslb"><a href="__URL__/complaint"> 投诉列表</a></li>
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
                    <i class="fa fa-angle-double-right"></i>编辑房产 &nbsp;
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
	            <form class="reg-page sky-form" id="form" method="POST" action="__URL__/editHouseHandle" >
	            		<input type="hidden" name="id" value="<?php echo ($house["id"]); ?>" />
                        <section>
		                    <label class="label">房门号</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="number" name="number" value="<?php echo ($house["number"]); ?>" placeholder="请输入房门号">
		                    </label>
		                </section>
		                <section>
		                    <label class="label">类型</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="type" name="type" value="<?php echo ($house["type"]); ?>" placeholder="请输入类型">
		                    </label>
		                </section>
		                <section>
		                    <label class="label">面积</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="area" name="area" value="<?php echo ($house["area"]); ?>" placeholder="请输入面积">
		                    </label>
		                </section>
		                <div class="row">
		                    <div class="col-md-6 col-xs-6 text-left">
		                        <span id="syncAppStoreIng" style="height:32px; display:none; line-height:32px; color:#ccc;">同步中，请稍后...
		                    </span></div>
		                    <div class="col-md-6 col-xs-6 text-right">
		                        <button class="btn-u" type="submit" id="submitButton" onclick="submitForm()">保存</button>
		                    </div>
		                </div>
		        </form>
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
$('.navbar-nav').each(function() {
	$('.navbar-nav li').attr("class","");
});
$("#gl").attr("class","active");
$('.collapse in').each(function() {
	$('.collapse in li').attr("class","");
});
$("#fclb").attr("class","current");

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
    	if(!$.trim ( $('#number').val() )){
    		alert('请填写房门号');
    		return false;
    	}
    	if(!$.trim ( $('#type').val() )){
    		alert('请填写类型');
    		return false;
    	}
    	if(!$.trim ( $('#area').val() )){
    		alert('请填写面积');
    		return false;
    	}
    }
    function complete(d){
        if (d.error == ""){
        	alert("保存成功");
        	window.location.href="__GROUP__/Property/house";
        }else{
        	alert(d.error);
        	loading=0;
        }
    }
}
</script>


</body></html>