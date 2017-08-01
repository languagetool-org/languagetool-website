<?php

// test with demo.hml

error_reporting(E_ALL);
$UPLOAD_DIR = "/home/languagetool/php-uploads";

require '../../mailjet-apiv3-php-no-composer/vendor/autoload.php';
use \Mailjet\Resources;

$timestamp = time();
$passwordFile = "/home/languagetool/.mailjet.password";
if (!file_exists($passwordFile)) {
    exit("Password file does not exist: ".$passwordFile);
}

try {
    // see http://php.net/manual/en/features.file-upload.php
    if (!isset($_FILES['upfile']['error'])) {
        throw new RuntimeException('Invalid parameters');
    }
    if (is_array($_FILES['upfile']['error'])) {
        throw new RuntimeException('Invalid parameters:'.$_FILES['upfile']['error']);
    }
    switch ($_FILES['upfile']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown error: '.$_FILES['upfile']['error']);
    }
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    
    $contentType = $finfo->file($_FILES['upfile']['tmp_name']);
    $ext = array_search(
        $contentType,
        array(
            'txt'  => 'text/plain',
            'doc'  => 'application/msword',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'odt'  => 'application/vnd.oasis.opendocument.text',
        ),
        true
    );
    if ($ext === false) {
        throw new RuntimeException('Invalid file format.');
    }
    $newFilename = sprintf('%s.%s', sha1_file($_FILES['upfile']['tmp_name']), $ext);
    $fullFilename = $UPLOAD_DIR.'/'.$newFilename;
    if (!move_uploaded_file($_FILES['upfile']['tmp_name'], $fullFilename)) {
        throw new RuntimeException('Failed to move uploaded file.');
    }

    $handle = fopen($fullFilename, "rb");
    if (!$handle) {
        throw new RuntimeException('Could not open file: '.$fullFilename);
    }
    $contents = fread($handle, filesize($fullFilename));

    // see https://stackoverflow.com/questions/12301358/send-attachments-with-php-mail
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
            "Timestamp: $timestamp\n".
            "Filename: $fullFilename\n",
        'Recipients' => [
            [
                'Email' => "ltproofreading@gmail.com"
            ]
        ],
        "Attachments" => [
            [
                "Content-type" => $contentType,
                "Filename" => $newFilename,
                "content" => base64_encode($contents)
            ]
        ]
    ];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    print $response->success();
    
} catch (RuntimeException $e) {
    echo $e->getMessage();
}
?>