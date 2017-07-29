<?php

// see https://stackoverflow.com/questions/12301358/send-attachments-with-php-mail
// test with:
//   curl -X POST --data "data=ein testöäüßÖÄÜ&email=foo@domain.org&notes=xyz" http://languagetool.localhost/human-proofreading/submit.php

error_reporting(E_ALL);

require '../../include/PHPMailerAutoload.php';
$email = new PHPMailer();
$timestamp = time();

$email->isSMTP();
$email->Host = 'in-v3.mailjet.com';
$email->SMTPAuth = true;
$email->Username = '28676616edd03dfa5d2524c121f61167';
$email->Password = trim(file_get_contents("/home/languagetool/.mailjet.password"));
$email->SMTPSecure = 'tls';
$email->Port = 587;

$email->From      = 'dont-reply@languagetool.org';
$email->FromName  = 'PHP';
$email->Subject   = 'Request for proofreading';
$email->Body      = "See attachment, to be proofread for ".$_POST['email'].", timestamp: $timestamp\nNotes:\n".$_POST['notes'];
$email->AddAddress('ltproofreading@gmail.com');

$filename = "/tmp/lt-proofreading-".$timestamp.".txt";
file_put_contents($filename , $_POST['data']);
$email->AddAttachment($filename, 'request.txt');

print $email->Send();

?>