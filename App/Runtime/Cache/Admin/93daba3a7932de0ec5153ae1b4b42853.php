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
                    <i class="fa fa-angle-double-right"></i>编辑轮播图 &nbsp;
                   </h3>
                </div>
	            <form class="reg-page sky-form" id="form" method="POST" action="__URL__/editadHandle" >
	            <input type="hidden" id="type" name="type" value="2" />
	            <input type="hidden" id="id" name="id" value="<?php echo ($ad["id"]); ?>" />
	            <input type="hidden" id="thumbnailName" name="thumbnailName" value="<?php echo ($ad["image"]); ?>" />
		               <div class="reg-header">
		                    <p><img id="thumbnail_img" src="Public/upload/<?php echo ($ad["image"]); ?>" style="width:300px;height:200px"></p>
		                    <br>
		                </div>
						<section>
		                    <label class="input">
		                    <a href="javascript:void(0);" id="uploader-screenshot" class="btn-u btn-u-xs app_edit_screenshot_upload_button" style="position: relative; overflow: hidden; direction: ltr;"><i class="fa fa-picture-o"></i>
		                     	上传图片<input id="thumbnail" type="file" name="thumbnail" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;" /></a>
		                    </label>
		                </section>
		                <section>
		                    <label class="label">标题</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="title" name="title" value="<?php echo ($ad["title"]); ?>" placeholder="请输入标题">
		                    </label>
		                </section>
		                 <section>
		                    <label class="label">详情(输入网址)</label>
		                    <label class="textarea textarea-resizable">
		                        <textarea id="content" name="content" rows="4" class="textArea" /><?php echo ($ad["content"]); ?></textarea>
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
  
$('.navbar-nav').each(function() {
	$('.navbar-nav li').attr("class","");
});
$("#gl").attr("class","active");
$('.collapse in').each(function() {
	$('.collapse in li').attr("class","");
});
$("#dbgg").attr("class","current");

$(function(){
	$("#thumbnail").live('change',function(){ 
		ajaxThumbnailUpload();
	});
	
	/* window.UEDITOR_CONFIG.initialFrameHeight = 200;
	UE.getEditor('content'); */
	
});


function ajaxThumbnailUpload() {
	var path = 'Public/upload/';
    $.ajaxFileUpload
		(
			{
				url: '__GROUP__/Shop/uploadThumbnailHandle',
				secureuri:false,
				fileElementId:'thumbnail',
				dataType: 'json',
				success: function (data, status)
				{
					if(typeof(data.error) != 'undefined')
					{
						if(data.error != '')
						{
							alert(data.error);
						}else
						{
							$("#thumbnail_img").attr("src", path + data.msg);
							if($("#thumbnailName")){
								$("#thumbnailName").remove();
							}
							$("#form").append('<input type="hidden" id="thumbnailName" name="thumbnailName" value="'+ data.msg +'" />');
						}
					}
				},
				error: function (data, status, e)
				{
					alert(e);
				}
			}
		)
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
    	if(!$.trim ( $('#thumbnailName').val() )){
    		alert('请上传图片');
    		return false;
    	}
    	
    }
    function complete(d){
        if (d.error == ""){
        	alert("保存成功");
        	window.location.href="__URL__/ad";
        }else{
        	alert(d.error);
        	loading=0;
        }
    }
    
}
</script>

</body></html>