<?php
// LanguageTool Proxy Script for rule meta information 
// requires curl for PHP - on Ubuntu, install with "sudo apt-get install php5-curl"
error_reporting(E_ALL);

function shutdown($curl) {
  // close curl even if the script was aborted, see
  // http://php.net/manual/en/features.connection-handling.php
  curl_close($curl);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $curl = curl_init();
  try {
    register_shutdown_function('shutdown', $curl);
    curl_setopt($curl, CURLOPT_URL, "https://community.languagetool.org/ruleApi/exampleSentences?lang=".$_GET['lang']."&ruleId=".$_GET['ruleId']);
    //curl_setopt($curl, CURLOPT_PORT, 80);
    if (isset($_SERVER['HTTP_REFERER'])) {
      curl_setopt($curl, CURLOPT_REFERER, $_SERVER['HTTP_REFERER']);
    }
    $realIp = $_SERVER['REMOTE_ADDR'];
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-forwarded-for: $realIp"));
  
    header("Content-Type: application/json; charset=utf-8");
    if (curl_exec($curl) === false) {
      $errorMessage = curl_error($curl);
      $errorCode = curl_errno($curl);
      if (!$errorMessage && $errorCode == 7) {
        // Actually the message can be empty, e.g. if the Apache server is in "No buffer space available" state...
        $errorMessage = "Could not connect remote server";   // source: http://curl.haxx.se/libcurl/c/libcurl-errors.html
      }
      print "Error: " . $errorMessage;
      error_log("rule-proxy.php error: $errorMessage, code: $errorCode");
    }
  } finally {
    curl_close($curl);
  }
} else {
  print "Error: this proxy only supports GET requests";
}
?>
