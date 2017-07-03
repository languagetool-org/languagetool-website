<?php

$text = substr($_REQUEST['msg'], 0, 1000);
error_log("log.php: " . $text . " - User Agent: " . $_SERVER['HTTP_USER_AGENT']);

?>
