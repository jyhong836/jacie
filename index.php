<!DOCTYPE html>
<html>
<head>
<title>Talk to Jacie!</title>
<meta charset='UTF-8' />
<style type="text/css">
<!--
.chat_wrapper {
	width: 500px;
	margin-right: auto;
	margin-left: auto;
	background: #CCCCCC;
	border: 1px solid #999999;
	padding: 10px;
	font: 12px 'lucida grande',tahoma,verdana,arial,sans-serif;
}
.chat_wrapper .message_box {
	background: #FFFFFF;
	height: 200px;
	overflow: auto;
	padding: 10px;
	border: 1px solid #999999;
}
.chat_wrapper .panel input{
	padding: 2px 2px 2px 5px;
}
.system_msg{color: #BDBDBD;font-style: italic;}
.user_name{font-weight:bold;}
.user_message{color: #88B6E0;}
-->
</style>
</head>
<body>	

	<?php 
	$colours = array('007AFF','FF7000','FF7000','15E25F','CFC700','CFC700','CF1100','CF00BE');
	$user_colour = array_rand($colours);
	// $jacie_colour = 'F00';
	?>

<!-- <script src="scripts/jquery.min.js"></script> -->
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>

<script src="scripts/chat.js"> </script>

<div class="chat_wrapper">
<a href="https://github.com/jyhong836/jacie">The Jacie At GitHub</a>
<div class="message_box" id="message_box"></div>
<div class="panel">
<input type="text" name="name" id="name" placeholder="Your Name" maxlength="10" style="width:20%"  />
<input type="text" name="message" id="message" placeholder="Talk to Jacie!" maxlength="80" style="width:60%" />
<button onclick="sendMSG()" id="send-btn">Send</button>
</div>
</div>

</body>
</html>
