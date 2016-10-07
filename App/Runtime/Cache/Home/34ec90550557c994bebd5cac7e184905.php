<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0032)http://www.pgyer.com/app/publish -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>顶尖汇- 发布成功</title>
        <meta charset="utf-8">
    

    <meta name="keywords" content="蒲公英 pgyer 企业签名 InHouse In-House iOS Android ipa apk adhoc 发布 测试 内测 安装 安卓 iPad iPhone">
    <meta name="description" content="蒲公英 为开发者提供简洁迅速的内测程序分发服务">

    <meta property="og:type" content="webpage">
    <meta property="og:url" content="http://www.pgyer.com">
    <meta property="og:title" content="蒲公英">
    <meta property="og:description" content="蒲公英 为开发者提供简洁迅速的内测程序分发服务">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="蒲公英">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no minimal-ui">

    <link rel="dns-prefetch" href="http://ssl.pgyer.com/">
    <link rel="dns-prefetch" href="http://appicon.pgyer.com/">
    <link rel="dns-prefetch" href="http://app-screenshot.pgyer.com/">
    <link rel="dns-prefetch" href="http://static.pgyer.com/">
    <link rel="dns-prefetch" href="http://google-analytics.com/">


    <link rel="shortcut icon" href="http://static.pgyer.com/static/assets/img/favicon.ico">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/bootstrap/css/bootstrap.min.20141229.css">
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/css/style.20141229.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/line-icons/line-icons.20141229.css">
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/font-awesome/css/font-awesome.min.20141229.css">
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/flexslider/flexslider.20141229.css">
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/bxslider/jquery.bxslider.20141229.css">
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/plugins/horizontal-parallax/css/horizontal-parallax.20141229.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/css/themes/default.20141229.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="http://static.pgyer.com/static/assets/css/custom.20141229.css">

    <link href="./蒲公英 - 发布应用_files/fineuploader.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="__TMPL__Public/css/fineuploader.css" type="text/css">
</head>	

<body style="">


<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-20">
	<div class="container">
                <h1 class="pull-left"><a href="__GROUP__">返回发布</a></h1>
            </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!-- Purchase Block -->
<div class="container content recent"> 	

    <div class="row tag-box tag-box-v5">
		<h1>发布成功！</h1>
    </div>
</div>
<!-- End Purchase Block -->



<!-- JS Global Compulsory -->           
<script type="text/javascript" src="./蒲公英 - 发布应用_files/jquery-1.10.2.min.20141229.js"></script>
<script type="text/javascript" src="./蒲公英 - 发布应用_files/jquery-migrate-1.2.1.min.20141229.js"></script>
<script type="text/javascript" src="./蒲公英 - 发布应用_files/bootstrap.min.20141229.js"></script> 
<script type="text/javascript" src="./蒲公英 - 发布应用_files/app.20141229.js"></script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-52814215-1', 'auto');
ga('send', 'pageview');
</script>

<!-- JS Page Level -->           
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
<script src="/static/assets/plugins/respond.js"></script>
<![endif]-->    

<script src="./蒲公英 - 发布应用_files/jquery.fineuploader.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
$(document).ready(function() {
    var uploader = $("#bootstrapped-fine-uploader").fineUploader({
        //uploaderType: 'basic',
        element: $('#bootstrapped-fine-uploader'),
        request: {
            endpoint: '/app/upload'
        },
        template: 'qq-template-bootstrap',
        classes: {
            success: 'alert alert-success',
            fail: 'alert alert-error'
        },
        multiple: false,
        text: {
            uploadButton: '<i class="icon-upload icon-white"></i> 上传',
            formatProgress: "{percent}% / {total_size}",
            failUpload: "上传失败",
            waitingForResponse: "正在分析，请稍后，这可能需要一点时间...",
            paused: "暂停"
        },
        debug:true
    }).on('error', function (event, id, name, reason) {
        if (reason == 'XHR returned response code 0') {
            alert("上传中断");
        } else {
            alert(reason);
        }

        $('#retry').show();

    }).on('complete', function (event, id, name, responseJSON) {
        if (responseJSON.success) {
            window.location = '/app/finish/' + responseJSON.key;
        }

    }).on('upload', function (id, name) {
        $('.qq-upload-button-selector').hide();
    }).on('cancel', function (id, name) {
        $('.qq-upload-button-selector').show();
    });
});

function retry() {
    window.location.reload();
}

</script>



</body></html>