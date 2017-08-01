<?php

// see https://stackoverflow.com/questions/12301358/send-attachments-with-php-mail
// test with:
//   curl -X POST --data "data=ein testöäüßÖÄÜ&email=foo@domain.org&notes=xyz&price=10.40&wordCount=1486&maxTime=4h" http://languagetool.localhost/human-proofreading/submit.php

error_reporting(E_ALL);
require '../../mailjet-apiv3-php-no-composer/vendor/autoload.php';
use \Mailjet\Resources;

$timestamp = time();
$passwordFile = "/home/languagetool/.mailjet.password";
if (!file_exists($passwordFile)) {
    exit("Password file does not exist: ".$passwordFile);
}
$mj = new \Mailjet\Client('28676616edd03dfa5d2524c121f61167', trim(file_get_contents($passwordFile)));
$body = [
    'FromEmail' => "dont-reply@languagetool.org",
    'FromName' => "PHP",
    'Subject' => "Request for proofreading",
    'Text-part' => "See attachment.\n".
        "E-Mail: ".$_POST['email']."\n".
        "Max.Time: ".$_POST['maxTime']."\n".
        "Word count: ".$_POST['wordCount']."\n".
        "Price: ".$_POST['price']."\n".
        "Notes:\n".$_POST['notes']."\n".
        "Timestamp: $timestamp\n",
    'Recipients' => [
        [
            'Email' => "ltproofreading@gmail.com"
        ]
    ],
    "Attachments" => [
        [
            "Content-type" => "text/plain",
            "Filename" => "attachment.txt",
            "content" => base64_encode($_POST['data'])
        ]
    ]
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
print $response->success();
?>