<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0064)http://www.pgyer.com/app/finish/ac7282c6c2f4c6cc7c7b7312ef976282 -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>在线篮球场</title>
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
		<li class="list-group-item active">
			<a href="javascript:void(0)">好友管理</a>
			<ul class="collapse in">
				<li id="hylb"><a href="__URL__/myFriends"> 好友列表</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">我的文章</a>
			<ul class="collapse in">
				<li id="wzlb"><a href="__URL__/myActicle"> 文章列表</a></li>
			</ul>
		</li>
		<li class="list-group-item active">
			<a href="javascript:void(0)">篮球新闻</a>
			<ul class="collapse in">
				<li id="xwlb"><a href="__URL__/basketabllNews"> 新闻列表</a></li>
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
                    <i class="fa fa-angle-double-right"></i>编辑文章 &nbsp;
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
	            <form class="reg-page sky-form" id="form" method="POST" action="__URL__/editMyNewsHandle" >
	            		<input type="hidden" name="id" value="<?php echo ($news["id"]); ?>" />
                        <section>
		                    <label class="label">题目</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="title" name="title" value="<?php echo ($news["title"]); ?>" placeholder="请输入题目">
		                    </label>
		                </section>
		                <?php if($news['upload_image'] != ''): ?><section>
			                    <label class="label">图片</label>
			                    <label class="app_edit_screenshot_container">
			                        <div class="row">
			                            <div class="col-md-12 col-sm-12" id="screenshotTableContainer">
											<div class="app_edit_no_screenshot" style="display:none">暂无截图</div>
											<!-- ------------------------------ -->
											<div class="table-responsive" style="border:none; overflow:auto;">
											    <table class="table">
											        <tbody>
												        <tr>
												        	<?php if(is_array($images)): foreach($images as $key=>$vo): ?><td class="text-center" width="20%" style="border:none;float:left">
																	<div style="height:160px;">
																	<img id="screenshot_image" src="http://freefood.qiniudn.com/<?php echo ($vo); ?>" class="app_edit_screenshot_img "></div>
													         		<a href="javascript:void(0);" class="app_edit_screenshot_delete_button" style="margin-top:10px;display:none">删除</a>
													        	</td><?php endforeach; endif; ?>
												    	</tr>
											    </tbody></table>
											</div>
											<!-- ------------------------------------------ -->
										</div>
			                        </div>
			                    </label>
			                </section><?php endif; ?>
		                <section>
		                    <label class="label">内容</label>
		                    <label class="textarea textarea-resizable">
		                        <textarea rows="6" placeholder="请输入内容" id="content" name="content"><?php echo ($news["content"]); ?></textarea>
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
$("#wzlb").attr("class","current");

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
    	if(!$.trim ( $('#title').val() )){
    		alert('请填写题目');
    		return false;
    	}
    	if(!$.trim ( $('#content').val() )){
    		alert('请填写内容');
    		return false;
    	}
    }
    function complete(d){
        if (d.error == ""){
        	alert("保存成功");
        	window.location.href="__GROUP__/Basketball/myActicle";
        }else{
        	alert(d.error);
        	loading=0;
        }
    }
}
</script>


</body></html>