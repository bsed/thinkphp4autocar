<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<form id="form_article" method="post" action="__GROUP__/App/uploadAppHandle" enctype="multipart/form-data">
		 <table class='table'>
			<tr>
		 		<td align="right" >APP：</td> 
		 		<td>
		 			<input name="app" id="app" type="file" id="cover"/>
		 			<input type="hidden" name="image[]" value="i1">
		 			<input type="hidden" name="image[]" value="i2">
		 			<input type="hidden" name="image[]" value="i3">
		 		</td>
		 	</tr>

		 	<tr>
		 		<td colspan="2" align="center">
		 			<input type="submit" value='保存添加' />
		 			<input type="button" value='send' onclick="sendMsg()"/>
		 		</td>
		 	</tr>
		 </table>
	 </form>
</body>
</html>
<script src="http://res.websdk.rong.io/RongIMClient.min.js"></script>
<script>
RongIMClient.init("82hegw5uh7i4x");

//从您的应用服务器请求，以获取 Token。在本示例中我们直接在下面 hardcode 给 token 赋值。
// var token = getTokenFromAppServer();
// 此处直接 hardcode 给 token 赋值，请替换为您自己的 Token。
var token = "MJgSH4+NaiZOwDwGbTYZetTITZUQmks33Af8V2h1UcDSMvXeNTNE7hP0IA+aTt1CEvDhbf9kPPGnJL710Hxv7w==";

// 连接融云服务器。
RongIMClient.connect(token,{
        onSuccess: function (userId) {
            // 此处处理连接成功。
            console.log("Login successfully." + userId);
        },
        onError: function (errorCode) {
            // 此处处理连接错误。
            console.log("Login failed." + errorCode.getValue(),"error message: "+errorCode.getMessage());
        }
    });
    
    
//设置连接监听状态 （ status 标识当前连接状态）
// 连接状态
RongIMClient.setConnectionStatusListener({
   onChanged: function (status) {
   // status:RongIMClient.ConnectionStatusListener.ConnectionStatus 对象
           console.log(status.getValue(), status.getMessage());
         }
   });

// 消息监听器
RongIMClient.getInstance().setOnReceiveMessageListener({
   // 接收到的消息
   onReceived: function (message) {
   // message:RongIMClient.RongIMMessage 子类
   // 接收到消息处理逻辑
       alert(message.getContent());
   }

});
var ins = RongIMClient.getInstance();

var contype = RongIMClient.ConversationType.PRIVATE;

function sendMsg() {
	//调用实例的发送消息方法
	     ins.sendMessage(contype, "1", RongIMClient.TextMessage.obtain("发送消息内容"), null, {
	           onSuccess: function () {
	                //发送成功逻辑处理
	                alert("fs");
	           },
	           onError: function (data) {
	                //发送失败逻辑处理
	                console.log(data.getValue(),data.getMessage())
	           }
	       });
	};
</script>