/* 
* @Author: Junyuan Hong
* @Date:   2014-06-30 23:40:04
* @Last Modified by:   Junyuan Hong
* @Last Modified time: 2014-06-30 23:45:18
*/

$(document).ready(function(){
    // $(document).ready(function(){
	//create a new WebSocket object.
	var sess = null;
	// 利用网页获得服务器地址
	var host = 'ssh.freeshell.ustc.edu.cn'// window.location.hostname;// "192.168.1.19";
	var port = "53231";
	var wsuri = "ws://"+host+":"+port+"/jacieapp";

	websocket = new WebSocket(wsuri); 
	var jacie_colour = 'F00';
	
	websocket.onopen = function(ev) { // connection is open 
		$('#message_box').prepend("<div class=\"system_msg\">Connected!</div>"); //notify user
	}

	// $(document).ready(function(){
	$('#message').keydown(function(event){
		if (event.which==13) {
			sendMSG();
		}
	});
	// })

	// $('#send-btn').click(function(){ //use clicks message send button	
	function sendMSG () {
		var mymessage = $('#message').val(); //get message text
		var myname = $('#name').val(); //get user name
		
		if(myname == ""){ //empty name?
			alert("Enter your Name please!");
			return;
		}
		if(mymessage == ""){ //emtpy message?
			alert("Enter Some message Please!");
			return;
		}
		
		//prepare json data
		var msg = {
			message: mymessage,
			name: myname,
			color : '<?php echo $colours[$user_colour]; ?>'
		};
		//convert and send data to server
		websocket.send(JSON.stringify(msg));
	}
	
	//#### Message received from server?
	websocket.onmessage = function(ev) {
		var msg = JSON.parse(ev.data); //PHP sends Json data
		var type = msg.type; //message type
		var umsg = msg.message; //message text
		var uname = msg.name; //user name
		var ucolor = msg.color; //color

		if(type == 'usermsg') 
		{
			$('#message_box').prepend("<div><span class=\"user_name\" style=\"color:#"+ucolor+"\">"+uname+"</span> : <span class=\"user_message\">"+umsg+"</span></div>");
		}
		else if(type == 'system')
		{
			$('#message_box').prepend("<div class=\"system_msg\">"+umsg+"</div>");
		}
		else if(type == 'jacie')
		{
			$('#message_box').prepend("<div><span class=\"user_name\" style=\"color:#"+jacie_colour+"\">"+"Jacie: "+"</span> : <span class=\"user_message\">"+umsg+"</span></div>");
		}
		
		$('#message').val(''); //reset text
	};
	
	websocket.onerror	= function(ev)
	{
			$('#message_box').append("<div class=\"system_error\">Error Occurred - "+ev.data+"</div>");
	}; 
	websocket.onclose 	= function(ev)
	{
			$('#message_box').append("<div class=\"system_msg\">Connection is Closed by server, please connect some human beings, or refresh it.</div>");
	}; 
// });
});