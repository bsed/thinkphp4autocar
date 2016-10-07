<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0064)http://www.pgyer.com/app/finish/ac7282c6c2f4c6cc7c7b7312ef976282 -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>在线超市</title>
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
		<li id="faqnode" class="list-group-item active">
			<a href="javascript:void(0)">商品管理</a>
			<ul id="collapse-app" class="collapse in">
				<li id="splb"><a href="__URL__/goods"> 商品列表</a></li>
				<li id="tjsp"><a href="__URL__/addGoods"> 添加商品</a></li>
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
                    <i class="fa fa-angle-double-right"></i>编辑商品 &nbsp;
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
	            <form class="reg-page sky-form" id="form" method="POST" action="__URL__/editGoodsHandle" >
	            		<input type="hidden" name="id" value="<?php echo ($goods["id"]); ?>" /> 
                        <section>
		                    <label class="label">名称</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="name" name="name" value="<?php echo ($goods["name"]); ?>" placeholder="请输入名称">
		                    </label>
		                </section>
		                <section>
		                    <label class="label">生产时间</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="scDate" name="scDate" class="datepicker" value="<?php echo ($goods["sc_date"]); ?>" placeholder="请输入生产时间">
		                    </label>
		                </section>
		                <section>
		                    <label class="label">进货时间</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="jhDate" name="jhDate" class="datepicker" value="<?php echo ($goods["jh_date"]); ?>" placeholder="请输入进货时间">
		                    </label>
		                </section>
		                <section>
		                    <label class="label">销售量</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="saledNum" name="saledNum" value="<?php echo ($goods["saled_num"]); ?>" placeholder="请输入销售量">
		                    </label>
		                </section>
		                <section>
		                    <label class="label">库存</label>
		                    <label class="input">
		                        <i class="icon-append fa fa-pencil"></i>
		                        <input type="text" id="surplusNum" name="surplusNum" value="<?php echo ($goods["surplus_num"]); ?>" placeholder="请输入库存">
		                    </label>
		                </section>
		                <section>
		                    <label class="label">是否打折</label>
		                    <label class="select">
		                        <select name="isSale" id="isSale" >
		                        	<option value="<?php echo ($goods["is_sale"]); ?>">
		                        		<?php if($goods['is_sale'] == 0): ?>否
		                        		<?php else: ?>是<?php endif; ?>
		                        	</option>
									<option value="0">否</option>
									<option value="1">是</option>
		                        </select>
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
$(function() {
    $( ".datepicker" ).datepicker( { 
        numberOfMonths:1,
        showButtonPanel:true,//是否显示按钮面板  
        dateFormat: 'yy-mm-dd',//日期格式  
        clearText:"清除",//清除日期的按钮名称  
        closeText:"关闭",//关闭选择框的按钮名称  
        yearSuffix: '年', //年的后缀  
        showMonthAfterYear:true,//是否把月放在年的后面  
        monthNames: ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],  
        dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],  
        dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],  
        dayNamesMin: ['日','一','二','三','四','五','六'],  
        });
  });
  
$('.navbar-nav').each(function() {
	$('.navbar-nav li').attr("class","");
});
$("#gl").attr("class","active");
$('.collapse in').each(function() {
	$('.collapse in li').attr("class","");
});
$("#splb").attr("class","current");

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
    	if(!$.trim ( $('#name').val() )){
    		alert('请填写名称');
    		return false;
    	}
    	if(!$.trim ( $('#scDate').val() )){
    		alert('请填写生产日期');
    		return false;
    	}
    	if(!$.trim ( $('#jhDate').val() )){
    		alert('请填写进货时间');
    		return false;
    	}
    	if(!$.trim ( $('#saledNum').val() )){
    		alert('请填写销售量');
    		return false;
    	}
    	if(!$.trim ( $('#surplusNum').val() )){
    		alert('请填写库存');
    		return false;
    	}
    	if(!$.trim ( $('#isSale').val() )){
    		alert('请选择是否打折');
    		return false;
    	}
    }
    function complete(d){
        if (d.error == ""){
        	alert("保存成功");
        	window.location.href="__GROUP__/Market/goods";
        }else{
        	alert(d.error);
        	loading=0;
        }
    }
}
</script>


</body></html>