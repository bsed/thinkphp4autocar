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
			<a href="javascript:void(0)">订单</a>
			<ul class="collapse in">
				<li id="ddlb"><a href="__GROUP__/Shop/orders">订单列表</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">预约审车</a>
			<ul class="collapse in">
				<li id="rscpe"><a href="__GROUP__/Shop/peie">日审车配额</a></li>
				<li id="sclb"><a href="__GROUP__/Shop/shenche">审车列表</a></li>
				<li id="fslb"><a href="__GROUP__/Shop/nodate">非审车日期列表</a></li>
				<li id="tjfs"><a href="__GROUP__/Shop/addNodate">添加非审车日期</a></li>
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
                    <i class="fa fa-angle-double-right"></i>添加店铺 &nbsp;
                   </h3>
                </div>
	            <form class="reg-page sky-form" id="form" method="POST" action="__URL__/editShopHandle" >
	            		<input type="hidden" name="id" value="<?php echo ($shop["id"]); ?>" />
	            		<input type="hidden" id="thumbnailName" name="thumbnailName" value="<?php echo ($shop["image"]); ?>" />
	            		<div class="reg-header">
		                    <p><img id="thumbnail_img" src="Public/upload/<?php echo ($shop['image']); ?>" style="width:200px;height:150px"></p>
		                    <br>
		                </div>
						<section>
		                    <label class="input">
		                    <a href="javascript:void(0);" id="uploader-screenshot" class="btn-u btn-u-xs app_edit_screenshot_upload_button" style="position: relative; overflow: hidden; direction: ltr;"><i class="fa fa-picture-o"></i>
		                     	上传店铺封面<input id="thumbnail" type="file" name="thumbnail" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;" /></a>
		                    </label>
		                </section>
		                <section>
		                    <label class="label">店铺分类</label>
		                    <?php if($shop['xiche']): ?><input id="xc" name="1" type="checkbox" value="1" checked="checked" /><span style="font-size:24px">&nbsp&nbsp洗车&nbsp&nbsp</span>
		                    <?php else: ?>
		                    	<input id="xc" name="1" type="checkbox" value="1"  /><span style="font-size:24px">&nbsp&nbsp洗车&nbsp&nbsp</span><?php endif; ?>
		                    <?php if($shop['weixiu']): ?><input id="wx" name="2" type="checkbox" value="2" checked="checked" /><span style="font-size:24px">&nbsp&nbsp维修&nbsp&nbsp</span>
		                    <?php else: ?>
		                    	<input id="wx" name="2" type="checkbox" value="2" /><span style="font-size:24px">&nbsp&nbsp维修&nbsp&nbsp</span><?php endif; ?>
		                    <?php if($shop['baoyang']): ?><input id="by" name="3" type="checkbox" value="3" checked="checked"/><span style="font-size:24px">&nbsp&nbsp保养&nbsp&nbsp</span>
		                    <?php else: ?>
		                    	<input id="by" name="3" type="checkbox" value="3"  /><span style="font-size:24px">&nbsp&nbsp保养&nbsp&nbsp</span><?php endif; ?>
	                    	
		                </section>
		                <?php if($shop['xiche']): ?><section id="sxiche">
			                    <label class="label">洗车价格</label>
			                    <label class="input">
			                        <i class="icon-append fa fa-pencil"></i>
			                        <input type="text" id="xiche" name="xiche" value="<?php echo ($shop["xiche"]); ?>" >
			                    </label>
			                </section>
			            <?php else: ?>
			            	<section id="sxiche" style="display:none">
			                    <label class="label">洗车价格</label>
			                    <label class="input">
			                        <i class="icon-append fa fa-pencil"></i>
			                        <input type="text" id="xiche" name="xiche" value="<?php echo ($shop["xiche"]); ?>" >
			                    </label>
			                </section><?php endif; ?>
			            <?php if($shop['weixiu']): ?><section id="sweixiu">
			                    <label class="label">维修价格</label>
			                    <label class="input">
			                        <i class="icon-append fa fa-pencil"></i>
			                        <input type="text" id="weixiu" name="weixiu" value="<?php echo ($shop["weixiu"]); ?>" >
			                    </label>
			                </section>
			            <?php else: ?>
			            	<section id="sweixiu" style="display:none">
			                    <label class="label">维修价格</label>
			                    <label class="input">
			                        <i class="icon-append fa fa-pencil"></i>
			                        <input type="text" id="weixiu" name="weixiu" value="<?php echo ($shop["weixiu"]); ?>" >
			                    </label>
			                </section><?php endif; ?>
			            <?php if($shop['baoyang']): ?><section id="sbaoyang">
			                    <label class="label">保养价格</label>
			                    <label class="input">
			                        <i class="icon-append fa fa-pencil"></i>
			                        <input type="text" id="baoyang" name="baoyang" value="<?php echo ($shop["baoyang"]); ?>" >
			                    </label>
			                </section>
			            <?php else: ?>
			            	<section id="sbaoyang" style="display:none">
			                    <label class="label">保养价格</label>
			                    <label class="input">
			                        <i class="icon-append fa fa-pencil"></i>
			                        <input type="text" id="baoyang" name="baoyang" value="<?php echo ($shop["baoyang"]); ?>" >
			                    </label>
			                </section><?php endif; ?>
                        <section>
		                    <label class="label">名称</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="name" name="name" value="<?php echo ($shop["name"]); ?>" placeholder="请输入名称">
		                    </label>
		                </section>
		                <section>
		                    <label class="label">评价</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="score" name="score" value="<?php echo ($shop["score"]); ?>" placeholder="请输入评价">
		                    </label>
		                </section>
		                 <section>
		                    <label class="label">经度（通过百度地图获取）</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="longitude" name="longitude" value="<?php echo ($shop["longitude"]); ?>" placeholder="请输入经度">
		                    </label>
		                </section>
		                 <section>
		                    <label class="label">纬度（通过百度获取）</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="latitude" name="latitude" value="<?php echo ($shop["latitude"]); ?>" placeholder="请输入纬度">
		                    </label>
		                </section>
		                <section>
		                    <label class="label">简介</label>
		                    <label class="textarea textarea-resizable">
		                        <textarea id="desc" name="desc" rows="4" class="textArea" /><?php echo ($shop["desc"]); ?></textarea>
		                    </label>
		                </section>
		                <section>
		                    <label class="label">详情(输入网址)</label>
		                    <label class="textarea textarea-resizable">
		                        <textarea id="content" name="content" rows="4" class="textArea" /><?php echo ($shop["content"]); ?></textarea>
		                    </label>
		                </section>
		                <section>
		                    <label class="label">商品详情(输入网址)</label>
		                    <label class="textarea textarea-resizable">
		                        <textarea id="pcontent" name="pcontent" rows="2" class="textArea" /><?php echo ($shop["pcontent"]); ?></textarea>
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
$("#tjdp").attr("class","current");

$(function(){
	$("#thumbnail").live('change',function(){ 
		ajaxThumbnailUpload();
	});
	
	/* window.UEDITOR_CONFIG.initialFrameHeight = 200;
	UE.getEditor('content'); */
	
	$("#xc").click(function(){
		if($("#xc").is(':checked')){
			$("#sxiche").css("display","inline");
		}else{
			$("#sxiche").css("display","none");
		}
	});
	
	$("#by").click(function(){
		if($("#by").is(':checked')){
			$("#sbaoyang").css("display","inline");
		}else{
			$("#sbaoyang").css("display","none");
		}
	});
	
	$("#wx").click(function(){
		if($("#wx").is(':checked')){
			$("#sweixiu").css("display","inline");
		}else{
			$("#sweixiu").css("display","none");
		}
	});
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

var loading=0;
function submitForm(){
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
    	if(!$.trim ( $('#name').val() )){
    		alert('请填写名称');
    		return false;
    	}
    	if(!$.trim ( $('#score').val() )){
    		alert('请填写评价');
    		return false;
    	}
    	if(!$.trim ( $('#desc').val() )){
    		alert('请填写简介');
    		return false;
    	}
    }
    function complete(d){
        if (d.error == ""){
        	alert("保存成功");
        	window.location.href="__URL__/shop";
        }else{
        	alert(d.error);
        	loading=0;
        }
    }
    
}
</script>


</body></html>