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
        <h1 class="pull-left">发布应用</h1>
        <ul class="pull-right breadcrumb">
            <li>简单设置下面的信息，您的应用发布即可完成</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            <form class="reg-page sky-form" id="form" method="POST" action="__GROUP__/App/publicApplicationHandle" novalidate="novalidate">

                <div class="douchebag_safari" style="left: -9999px; position: fixed; width: 1px;">
                    <input type="password">
                    <input type="text">
                </div>

                <div class="reg-header">
                    <p><img id="thumbnail_img" src="" class="appicon"></p>
                    <br>
                </div>

				<section>
                    <label class="input">
                    <a href="javascript:void(0);" id="uploader-screenshot" class="btn-u btn-u-xs app_edit_screenshot_upload_button" style="position: relative; overflow: hidden; direction: ltr;"><i class="fa fa-picture-o"></i>
                     	上传应用图标<input id="thumbnail" type="file" name="thumbnail" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;" /></a>
                    </label>
                </section>
                <section>
                    <label class="label">应用地址</label>
                    <label class="input">
                        <span class="icon-prepend" style="color:#666; width:370px; left:1px; background-color:#eee; font-weight:normal;"><?php echo ($downloadUrlPrefix); ?></span>
                        <input type="text" id="apkName" name="apkName" style="padding-left:400px;" value="" disabled="disabled" placeholder="上传apk获取地址">
                    </label>
                </section>
                <section>
                    <label class="input">
                        <a href="javascript:void(0);" id="uploader-screenshot" class="btn-u btn-u-xs app_edit_screenshot_upload_button" style="position: relative; overflow: hidden; direction: ltr;"><i class="fa fa-picture-o"></i> 
                        	上传apk<input id="apk" type="file" name="apk" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;" /></a>
                    </label>
                </section>
                <section>
                    <label class="label">名称</label>
                    <label class="input">
                        <i class="icon-append fa fa-pencil"></i>
                        <input type="text" id="name" name="name" value="" placeholder="请输入应用名称">
                    </label>
                </section>

                <section>
                    <label class="label">版本</label>
                    <label class="input">
                        <i class="icon-append fa fa-flag"></i>
                        <input type="text" id="version" name="version" value="" placeholder="请输入版本号">
                    </label>
                </section>

				<section>
                    <label class="label">应用分类</label>
                    <label class="select">
                        <select name="appFirstMenu" id="appFirstMenu" style="width:200px;margin-right:10px;float:left;clear:none">
                        	<option value="">请选择</option>
                        	<?php if(is_array($firstMenuList)): $i = 0; $__LIST__ = $firstMenuList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$firstMenu): $mod = ($i % 2 );++$i;?><option value="<?php echo ($firstMenu["id"]); ?>"><?php echo ($firstMenu["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                         <select name="appSecondMenu" id="appSecondMenu" style="width:200px;margin-right:10px;float:left;clear:none">
                        </select>
                         <select name="appThirdMenu" id="appThirdMenu" style="width:200px;margin-right:10px;">
                        </select>
                        
                    </label>
                </section>
				<!-- 
                <section>
                    <label class="label">应用地址</label>
                    <label class="input">
                        <span class="icon-prepend" style="color:#666; width:150px; left:1px; background-color:#eee; font-weight:normal;">http://applicationmarket-public.stor.sinaapp.com/</span>
                        <input type="text" id="shortcutURL" name="shortcutURL" style="padding-left:170px; " value="NEqc" placeholder="请输入页面地址后缀">
                    </label>
                </section>

                <section>
                    <label class="label">安装密码（可不填，<a href="javascript:void(0);" class="popovers" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="设置安装密码后，用户在安装应用时会被要求输入密码。如果不想设置安装密码，请留空" data-original-title="什么是安装密码？" title="">什么是安装密码？</a>）</label>

                    <label class="input">
                        <i class="icon-append fa fa-asterisk"></i>
                        <input type="password" id="password" name="password" value="">
                    </label>
                </section>
				-->
				
				<!--  
                <section>
                    <label class="label">发布到广场</label>
                    <label class="select">
                        <select name="isPublishToPublic" id="isPublishToPublic">
                            <option value="1">将应用发布到广场</option>
                            <option value="2">不要将应用发布到广场</option>
                        </select>
                        <i></i>
                    </label>
                </section>
-->

                <section>
                    <label class="label">版本更新说明</label>
                    <label class="textarea textarea-resizable">
                        <textarea rows="6" placeholder="请输入该版本的更新说明" id="updateDescription" name="updateDescription"></textarea>
                    </label>
                </section>

                <section>
                    <label class="label">软件介绍</label>
                    <label class="textarea textarea-resizable">
                        <textarea rows="6" placeholder="请输入软件介绍" id="description" name="description"></textarea>
                    </label>
                </section>

                <section>
                    <label class="label">应用截图</label>
                    <label class="app_edit_screenshot_container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="screenshotTableContainer">
								<div class="app_edit_no_screenshot" style="display:none">暂无截图</div>
								<!-- ------------------------------ -->
								<div class="table-responsive" style="border:none; overflow:auto;">
								    <table class="table">
								        <tbody>
									        <tr>
									        	<!-- 
									        	<td class="text-center" width="20%" style="border:none;float:left">
													<div style="height:160px;">
													<img id="screenshot_image" src="" class="app_edit_screenshot_img "></div>
									         		<a href="javascript:void(0);" class="app_edit_screenshot_delete_button" style="margin-top:10px;">删除</a>
									        	</td>
									        	<td class="text-center" width="20%" style="border:none;"></td>
									        	<td class="text-center" width="20%" style="border:none;"></td>
									        	<td class="text-center" width="20%" style="border:none;"></td>
									        	<td class="text-center" width="20%" style="border:none;"></td>
									        	-->
									    	</tr>
								    </tbody></table>
								</div>
								<!-- ------------------------------------------ -->
							</div>
                        </div>
                    </label>
                    <a href="javascript:void(0);" id="uploader-screenshot" class="btn-u btn-u-xs app_edit_screenshot_upload_button" style="position: relative; overflow: hidden; direction: ltr;"><i class="fa fa-picture-o"></i> 
                    	上传截图<input onclick="checkImageCount()" id="screenshot" multiple="" type="file" name="screenshot" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;"></a>
                </section>

                <hr>

                <div id="ed_loading" class="editableform-loading" style="display:none;"></div>

                <div class="row">
                    <div class="col-md-6 col-xs-6 text-left">
                    	<!--  
                        <a id="syncAppStoreStoreLink" href="javascript:void(0);" onclick="javascript:pgyAppEdit.syncAppStore();" style="cursor:pointer; height:32px; display:inline-block; line-height:32px;">同步App Store信息</a>
                        -->
                        <span id="syncAppStoreIng" style="height:32px; display:none; line-height:32px; color:#ccc;">同步中，请稍后...
                    </span></div>
                    <div class="col-md-6 col-xs-6 text-right">
                        <button class="btn-u" type="submit" id="submitButton" onclick="submitForm()">发布应用</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!--/container-->		
<!--=== End Content Part ===-->

<script type="text/javascript">
$('.navbar-nav').each(function() {
	$('.navbar-nav li').attr("class","");
});
$("#fb").attr("class","active");

$(function(){
	$("#appFirstMenu").live('change',function(){
		var id = $("#appFirstMenu option:selected").val();
		if(id != 0){
			var params = {};
			params.level = 2;
			params.seniorCategoryId = id;
			getSecondCategory(params);
		}else{
			$("#appSecondMenu").empty();
			$("#appThirdMenu").empty();
		}
	});
	
	$("#appSecondMenu").live('change',function(){
		var id = $("#appSecondMenu option:selected").val();
		if(id != 0){
			var params = {};
			params.level = 3;
			params.seniorCategoryId = id;
			getThirdCategory(params);
		}else{
			$("#appThirdMenu").empty();
		}
	});
	
	$("#thumbnail").live('change',function(){ 
		ajaxThumbnailUpload();
	});
	
	$("#screenshot").live('change',function(){ 
		ajaxScreenshotUpload();
	});

	$("#apk").live('change',function(){ 
		ajaxApkUpload();
	});
});

function delScreenshot(name){
	var td_name = "td" + name;
	var sn_name = "sn" + name;
	$("#" + td_name).remove();
	$("#" + sn_name).remove();
}

function checkImageCount(){
	if($(".table tbody tr").children("td").length == 5){
		alert("最多只能上传5张");
		$("#screenshot").attr("disabled", true);
	}else{
		$("#screenshot").attr("disabled", false);
	}
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
    	if($("#thumbnail_img").attr("src") == ""){
    		alert('请上传应用图标');
    		return false;
    	}
    	
    	if(!$.trim ( $('#apkName').val() )){
    		alert('请上传应用apk');
    		return false;
    	}
    	if(!$.trim ( $('#name').val() )){
    		alert('请填写应用名称');
    		return false;
    	}
    	if(!$.trim ( $('#version').val() )){
    		alert('请填写版本号');
    		return false;
    	}
    	if(!$.trim ( $('#version').val() )){
    		alert('请填写版本号');
    		return false;
    	}
    	if($("#appThirdMenu").val() == null){
    		alert('请填写版本号');
    		return false;
    	}
    	if(!$.trim ( $('#updateDescription').val() )){
    		alert('请填写版本更新说明');
    		return false;
    	}
    	if(!$.trim ( $('#description').val() )){
    		alert('请填写软件介绍');
    		return false;
    	}
    	if($("#screenshot_image").attr("src") == ""){
    		alert('请上传应用截图');
    		return false;
    	}
    	
    }
    function complete(d){
        if (d.error == ""){
        	window.location.href="__GROUP__/App/success"; 
        }else{
        	alert(d.error);
        	loading=0;
        }
    }
}

function getThirdCategory(params){
	var url = '__GROUP__/Category/getCategoryBySeniorMenuId';
	$.post(url, params, function(d){
		if(d.error == ""){
			$("#appThirdMenu").empty();
			$.each(d.categoryList,function(i,val){
				$("#appThirdMenu").append("<option value='"+ val.id +"'>"+ val.name +"</option>");
			});
		}else{
			alert(d.error);
		}
	}, 'json');
}

function getSecondCategory(params){
	var url = '__GROUP__/Category/getCategoryBySeniorMenuId';
	$.post(url, params, function(d){
		if(d.error == ""){
			$("#appSecondMenu").empty();
			$("#appThirdMenu").empty();
			$("#appSecondMenu").append("<option value='0'>请选择</option>");
			$.each(d.categoryList,function(i,val){
				$("#appSecondMenu").append("<option value='"+ val.id +"'>"+ val.name +"</option>");
			});
		}else{
			alert(d.error);
		}
	}, 'json');
}

function ajaxThumbnailUpload() {
	var path = '__ROOT__/Public/djh/thumbnail/';
    $.ajaxFileUpload
		(
			{
				url: '__GROUP__/App/uploadThumbnailHandle',
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

function ajaxScreenshotUpload() {
	var path = '__ROOT__/Public/djh/screenshot/';
    $.ajaxFileUpload
		(
			{
				url: '__GROUP__/App/uploadScreenshotHandle',
				secureuri:false,
				fileElementId:'screenshot',
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
							var d = new Date();
							var html = '<td id="td'+ d.getTime() +'" class="text-center" width="20%" style="border:none;float:left"><div style="height:160px;"><img id="screenshot_image" src="'+ path + data.msg+'" class="app_edit_screenshot_img "></div><a href="javascript:void(0);" class="app_edit_screenshot_delete_button" style="margin-top:10px;" onclick="delScreenshot('+ d.getTime() +')">删除</a></td>'
							$(".table tbody tr").append(html)
							$("#form") .append('<input type="hidden" id="sn'+ d.getTime() +'" name="screenshotName[]" value="'+ data.msg +'" />');
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

function ajaxApkUpload() {
	var path = '__ROOT__/Public/djh/app/';
    $.ajaxFileUpload
		(
			{
				url: '__GROUP__/App/uploadApkHandle',
				secureuri:false,
				fileElementId:'apk',
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
							$("#apkName").val(data.msg);
							$("#form").append('<input type="hidden" id="apkname" name="apkname" value="'+ data.msg +'" />');
							$("#form").append('<input type="hidden" id="apksize" name="apksize" value="'+ data.size +'" />');
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
</script>


<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<![endif]-->    

<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src=""><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div></body></html>