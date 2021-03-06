<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="/text/html;charset=UTF-8"/>
  <meta name="generator" content="7.2.232.244"/>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="/css/site_global.css?417434784"/>
  <link rel="stylesheet" type="text/css" href="/css/master_a-master.css?3993346768"/>
  <link rel="stylesheet" type="text/css" href="/css/stat.css?464862158" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>

<!-- add by Junyuan Hong -->
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
<!-- end -->
   </head>


 <body>

  <div class="shadow clearfix" id="page"><!-- column -->
   <div class="clearfix colelem" id="u72"><!-- group -->
    <a class="nonblock nontext clearfix grpelem" id="u73-6" href="/"><!-- content --><p>Hong's freeshell</p><p>&nbsp;&nbsp;&nbsp;&nbsp; (C) Junyuan Hong 2014&#45;2015</p></a>
   </div>
   <div class="clearfix colelem" id="u86-51"><!-- content -->
    
    <!-- add by Junyuan Hong -->
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

    <!-- end -->
    &nbsp;</p>
   </div>
   
   <div class="verticalspacer"></div>
   <div class="colelem" id="u74"><!-- simple frame --></div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="/scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="/scripts/museutils.js?3865766194" type="text/javascript"></script>
  <script src="/scripts/jquery.watch.js?4068933136" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
